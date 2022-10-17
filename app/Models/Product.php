<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $table = 'products';

    protected $fillable = [
        'name',
        'price',
        'stock',
    ];

    protected $casts = [
        'name' => 'string',
        'price' => 'double',
        'stock' => 'int',
    ];

    protected $dates = [
        'created_at' => 'Y-m-d H:i:s',
        'updated_at' => 'Y-m-d H:i:s',
    ];

    public function order_items()
    {
        return $this->hasMany(OrderItem::class);
    }

    public function logistics()
    {
        return $this->hasMany(Logistic::class);
    }
}
