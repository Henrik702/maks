<?php

namespace App\Providers;

use SleepingOwl\Admin\Providers\AdminSectionsServiceProvider as ServiceProvider;

class AdminSectionsServiceProvider extends ServiceProvider
{
    /**
     * @var array
     */
    protected $sections = [
        \App\Models\Order::class => 'App\Http\Admin\Order',
        \App\Models\Logistic::class => 'App\Http\Admin\Logistic',
        \App\Models\WareHouse::class => 'App\Http\Admin\WareHouse',
        \App\Models\Product::class => 'App\Http\Admin\Product',
        \App\Models\OrderItem::class => 'App\Http\Admin\OrderItem',
    ];

    /**
     * Register sections.
     *
     * @param \SleepingOwl\Admin\Admin $admin
     * @return void
     */
    public function boot(\SleepingOwl\Admin\Admin $admin)
    {
    	//

        parent::boot($admin);
    }
}
