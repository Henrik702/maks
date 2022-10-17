<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class logisticSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('logistics')->insertOrIgnore(
            [
                [
                    'id' => 1,
                    'product_id' => 1,
                    'warehouse_id' => 1,
                    'arrival' => '',
                    'movement' => '',
                    'sale' => '',
                    'created_at' => now(),
                    'updated_at' => now(),
                ],
                [
                    'id' => 2,
                    'product_id' => 2,
                    'warehouse_id' => 2,
                    'arrival' => '',
                    'movement' => '',
                    'sale' => '',
                    'created_at' => now(),
                    'updated_at' => now(),
                ],
                [
                    'id' => 3,
                    'product_id' => 3,
                    'warehouse_id' => 3,
                    'arrival' => '',
                    'movement' => '',
                    'sale' => '',
                    'created_at' => now(),
                    'updated_at' => now(),
                ],
            ]
        );

    }
}
