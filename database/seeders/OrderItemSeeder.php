<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class OrderItemSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('order_items')->insertOrIgnore(
            [
                [
                    'id' => 1,
                    'order_id' => 1,
                    'product_id' => 1,
                    'count' => '1',
                    'discount' => '',
                    'cost' => '1',
                    'created_at' => now(),
                    'updated_at' => now(),
                ],
                [
                    'id' => 2,
                    'order_id' => 2,
                    'product_id' => 2,
                    'count' => '2',
                    'discount' => '',
                    'cost' => '2',
                    'created_at' => now(),
                    'updated_at' => now(),
                ],
                [
                    'id' => 3,
                    'order_id' => 3,
                    'product_id' => 3,
                    'count' => '3',
                    'discount' => '',
                    'cost' => '3',
                    'created_at' => now(),
                    'updated_at' => now(),
                ],
            ]
        );
    }
}
