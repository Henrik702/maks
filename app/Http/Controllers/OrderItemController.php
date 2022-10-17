<?php

namespace App\Http\Controllers;

use App\Http\Admin\Order;
use App\Models\Logistic;
use App\Models\Product;
use App\Models\WareHouse;
use Illuminate\Http\Request;

class OrderItemController extends Controller
{
    public function getOrderItem()
    {
        $products = Product::get();
        return view('Products.product',compact('products'));
    }

    public function getWareHouses()
    {
        $logistics = Logistic::with('warehouses')->get();

        return view('Products.logistic',compact('logistics'));
    }
}
