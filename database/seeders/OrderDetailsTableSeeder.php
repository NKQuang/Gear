<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class OrderDetailsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        DB::table('order_details')->insert([
            [
                'order_id' => 1,
                'product_id' => 1, // ID của sản phẩm
                'product_name' => 'Product 1',
                'quantity' => 2,
                'price' => 150, // Giá tính bằng USD
                'subtotal' => 300, // Tổng tiền tính bằng USD
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'order_id' => 1,
                'product_id' => 2, // ID của sản phẩm
                'product_name' => 'Product 2',
                'quantity' => 1,
                'price' => 200, // Giá tính bằng USD
                'subtotal' => 200, // Tổng tiền tính bằng USD
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'order_id' => 2,
                'product_id' => 3, // ID của sản phẩm
                'product_name' => 'Product 3',
                'quantity' => 1,
                'price' => 300, // Giá tính bằng USD
                'subtotal' => 300, // Tổng tiền tính bằng USD
                'created_at' => now(),
                'updated_at' => now(),
            ]
        ]);
    }
}
