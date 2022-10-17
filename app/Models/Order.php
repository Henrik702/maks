<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;

    public const TYPE_ONLINE = 'online';
    public const TYPE_OFFLINE = 'offline';

    public const STATUS_ACTIVE = 'active';
    public const STATUS_COMPLETED = 'completed';
    public const STATUS_CANCELED = 'canceled';

    protected $table = 'orders';

    protected $fillable = [
        'user_id',
        'customer',
        'phone',
        'completed_at',
        'type',
        'status',
    ];

    protected $casts = [
        'user_id' => 'int',
        'customer' => 'string',
        'phone' => 'string',
        'type' => 'string',
        'status' => 'string',
    ];

    protected $dates = [
        'completed_at' => 'Y-m-d H:i:s',
        'created_at' => 'Y-m-d H:i:s',
        'updated_at' => 'Y-m-d H:i:s',
    ];

    public function users()
    {
        return $this->belongsTo(User::class,'user_id');
    }

    public function order_items()
    {
        return $this->hasMany(OrderItem::class);
    }

}
