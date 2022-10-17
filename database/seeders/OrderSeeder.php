<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class OrderSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('orders')->insertOrIgnore(
            [
                [
                    'id' => 1,
                    'user_id' => 1,
                    'customer' => 'покупатель 1',
                    'phone' => '+999 999 99 99',
                    'completed_at' => now(),
                    'type' => 'online',
                    'status' => 'active',
                    'created_at' => now(),
                    'updated_at' => now(),
                ],
                [
                    'id' => 2,
                    'user_id' => 2,
                    'customer' => 'покупатель 2',
                    'phone' => '+777 777 77 77',
                    'completed_at' => now(),
                    'type' => 'online',
                    'status' => 'completed',
                    'created_at' => now(),
                    'updated_at' => now(),
                ],
                [
                    'id' => 3,
                    'user_id' => 3,
                    'customer' => 'покупатель 3',
                    'phone' => '+111 111 11 11',
                    'completed_at' => now(),
                    'type' => 'offline',
                    'status' => 'canceled',
                    'created_at' => now(),
                    'updated_at' => now(),
                ],
            ]
        );

    }
}
