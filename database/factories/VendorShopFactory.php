<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\VendorShop;

class VendorShopFactory extends Factory
{
    protected $model = VendorShop::class;

    public function definition()
    {
        return [
            'vendor_id' => \App\Models\Vendor::factory(),
            'shop_name' => $this->faker->companySuffix,
        ];
    }
}
