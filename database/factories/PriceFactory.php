<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Price;

class PriceFactory extends Factory
{
    protected $model = Price::class;

    public function definition()
    {
        return [
            'product_id' => \App\Models\Product::factory(),
            'shop_id' => \App\Models\VendorShop::factory(),
            'sale_price' => $this->faker->randomFloat(2, 10, 1000), // Precio de venta aleatorio
        ];
    }
}
