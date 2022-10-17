<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Logistic extends Model
{
    use HasFactory;

    protected $table = 'logistics';

    protected $fillable = [
        'product_id',
        'warehouse_id',
        'arrival',
        'movement',
        'sale',
    ];

    protected $casts = [
        'product_id' => 'int',
        'warehouse_id' => 'int',
        'arrival' => 'boolean',
        'movement' => 'int',
        'sale' => 'int',
    ];

    protected $dates = [
        'created_at' => 'Y-m-d H:i:s',
        'updated_at' => 'Y-m-d H:i:s',
    ];

    public function products()
    {
        return $this->belongsTo(Product::class,'product_id');
    }

    public function warehouses()
    {
        return $this->belongsTo(WareHouse::class,'warehouse_id');
    }
}
