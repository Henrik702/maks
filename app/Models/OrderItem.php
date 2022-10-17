<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OrderItem extends Model
{
    use HasFactory;


    protected $table = 'order_items';

    protected $fillable = [
        'order_id',
        'product_id',
        'count',
        'discount',
        'cost',
    ];

    protected $casts = [
        'order_id' => 'int',
        'product_id' => 'int',
        'count' => 'int',
        'discount' => 'double',
        'cost' => 'double',
    ];

    protected $dates = [
        'created_at' => 'Y-m-d H:i:s',
        'updated_at' => 'Y-m-d H:i:s',
    ];

    public function orders()
    {
        return $this->belongsTo(Order::class,'order_id');
    }

    public function products()
    {
        return $this->belongsTo(Product::class,'product_id');
    }
}
