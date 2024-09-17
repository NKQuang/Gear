<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class OrdersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        DB::table('orders')->insert([
            [
                'phone_number' => '0123456789',
                'total_amount' => 500000,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'phone_number' => '0987654321',
                'total_amount' => 300000,
                'created_at' => now(),
                'updated_at' => now(),
            ]
        ]);
    }
}
