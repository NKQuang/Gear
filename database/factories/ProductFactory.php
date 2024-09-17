<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Product;

class ProductFactory extends Factory
{
    protected $model = Product::class;

    public function definition()
    {
        return [
            'sku' => $this->faker->word,
            'price' => $this->faker->randomFloat(2, 1, 100),
            // Các trường khác của mô hình Product
        ];
    }
}
