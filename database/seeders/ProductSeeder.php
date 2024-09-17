<?php

namespace Database\Seeders;

use App\Models\Product;
use App\Models\ProductType;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $types = ProductType::all();

        foreach ($types as $type) {
            Product::factory()->count(5)->create(['type_id' => $type->id])->each(function ($product) {
                $product->images()->createMany([
                    ['url' => 'images/product1.jpg'],
                    ['url' => 'images/product2.jpg'],
                ]);
            });
        }
    }
}
