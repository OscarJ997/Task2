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
            'product_name' => $this->faker->name,
            'product_description' => $this->faker->paragraph,
            'sku' => $this->faker->unique()->ean13,
            'vendor_id' => \App\Models\Vendor::factory(),
            'shop_id' => \App\Models\VendorShop::factory(),
            'product_group_id' => \App\Models\ProductGroup::factory(),
        ];
    }
}





