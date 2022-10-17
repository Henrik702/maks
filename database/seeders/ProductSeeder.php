<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('products')->insertOrIgnore(
            [
                [
                    'id' => 1,
                    'name' => ' товар 1',
                    'price' => '1000',
                    'stock' => '100',
                    'created_at' => now(),
                    'updated_at' => now(),
                ],
                [
                    'id' => 2,
                    'name' => ' товар 2',
                    'price' => '2000',
                    'stock' => '200',
                    'created_at' => now(),
                    'updated_at' => now(),
                ],
                [
                    'id' => 3,
                    'name' => ' товар 3',
                    'price' => '3000',
                    'stock' => '300',
                    'created_at' => now(),
                    'updated_at' => now(),
                ],
            ]
        );

    }
}
