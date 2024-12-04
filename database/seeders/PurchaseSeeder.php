<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PurchaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('purchases')->insert([
            ['id' => 1, 'customer_id' => 1, 'purchase_date' => '2022-01-15', 'total_price' => 100],
            ['id' => 2, 'customer_id' => 1, 'purchase_date' => '2022-02-20', 'total_price' => 150],
            ['id' => 3, 'customer_id' => 2, 'purchase_date' => '2022-03-05', 'total_price' => 200],
            ['id' => 4, 'customer_id' => 2, 'purchase_date' => '2022-06-15', 'total_price' => 300],
            ['id' => 5, 'customer_id' => 3, 'purchase_date' => '2022-05-01', 'total_price' => 125],
            ['id' => 6, 'customer_id' => 3, 'purchase_date' => '2022-01-30', 'total_price' => 50],
            ['id' => 7, 'customer_id' => 3, 'purchase_date' => '2022-05-01', 'total_price' => 125],
            ['id' => 8, 'customer_id' => 5, 'purchase_date' => '2022-01-14', 'total_price' => 275],
            ['id' => 9, 'customer_id' => 2, 'purchase_date' => '2022-01-07', 'total_price' => 135],
            ['id' => 10, 'customer_id' => 5, 'purchase_date' => '2022-01-24', 'total_price' => 225],
        ]);
    }
}
