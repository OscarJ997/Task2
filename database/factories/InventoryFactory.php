<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Inventory;

class InventoryFactory extends Factory
{
    protected $model = Inventory::class;

    public function definition()
    {
        return [
            'product_id' => \App\Models\Product::factory(),
            'stock' => $this->faker->numberBetween(0, 100), 
            'warehouse_id' => \App\Models\Warehouse::factory(),
        ];
    }
}
