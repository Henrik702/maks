<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class WareHouseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('warehouses')->insertOrIgnore(
            [
                [
                    'id' => 1,
                    'warehouse_name' => 'склад 1',
                    'created_at' => now(),
                    'updated_at' => now(),
                ],
                [
                    'id' => 2,
                    'warehouse_name' => 'склад 1',
                    'created_at' => now(),
                    'updated_at' => now(),
                ],
                [
                    'id' => 3,
                    'warehouse_name' => 'склад 3',
                    'created_at' => now(),
                    'updated_at' => now(),
                ],
            ]
        );

    }
}
