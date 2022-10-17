<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class WareHouse extends Model
{
    use HasFactory;

    protected $table = 'warehouses';

    protected $fillable = [
        'warehouse_name',
    ];

    protected $casts = [
        'warehouse_name' => 'string',
    ];

    protected $dates = [
        'created_at' => 'Y-m-d H:i:s',
        'updated_at' => 'Y-m-d H:i:s',
    ];

    public function logistics()
    {
        return $this->hasMany(Logistic::class);
    }

}
