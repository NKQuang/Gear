<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductTypesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Seed bảng 'types'
        DB::table('types')->insert([
            ['id' => 1], // Điện thoại
            ['id' => 2], // Laptop
            ['id' => 3], // Máy tính bảng
            ['id' => 4], // Phụ kiện
            ['id' => 5], // Đồ gia dụng
        ]);

        // Seed bảng 'type_translations' cho cả tiếng Việt và tiếng Anh
        DB::table('type_translations')->insert([
            // Điện thoại
            ['type_id' => 1, 'locale' => 'vi', 'name' => 'Điện thoại'],
            ['type_id' => 1, 'locale' => 'en', 'name' => 'Phone'],

            // Laptop
            ['type_id' => 2, 'locale' => 'vi', 'name' => 'Laptop'],
            ['type_id' => 2, 'locale' => 'en', 'name' => 'Laptop'],

            // Máy tính bảng
            ['type_id' => 3, 'locale' => 'vi', 'name' => 'Máy tính bảng'],
            ['type_id' => 3, 'locale' => 'en', 'name' => 'Tablet'],

            // Phụ kiện
            ['type_id' => 4, 'locale' => 'vi', 'name' => 'Phụ kiện'],
            ['type_id' => 4, 'locale' => 'en', 'name' => 'Accessory'],

            // Đồ gia dụng
            ['type_id' => 5, 'locale' => 'vi', 'name' => 'Đồ gia dụng'],
            ['type_id' => 5, 'locale' => 'en', 'name' => 'Home Appliance'],
        ]);
    }
}
