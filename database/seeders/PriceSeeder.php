<?php

namespace Database\Seeders;

use App\Models\Price;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PriceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Price::create([
            'product_id' => 1,
            'shop_id' => 1,
            'sale_price' => 199.99,
        ]);
        
        Price::create([
            'product_id' => 2,
            'shop_id' => 2,
            'sale_price' => 149.99,
        ]);
        
        Price::create([
            'product_id' => 3,
            'shop_id' => 3,
            'sale_price' => 99.99,
        ]);
        
        Price::create([
            'product_id' => 4,
            'shop_id' => 1,
            'sale_price' => 299.99,
        ]);
        
        Price::create([
            'product_id' => 5,
            'shop_id' => 2,
            'sale_price' => 129.99,
        ]);
        
        Price::create([
            'product_id' => 6,
            'shop_id' => 3,
            'sale_price' => 79.99,
        ]);
        
        Price::create([
            'product_id' => 7,
            'shop_id' => 1,
            'sale_price' => 249.99,
        ]);
        
        Price::create([
            'product_id' => 8,
            'shop_id' => 2,
            'sale_price' => 159.99,
        ]);
        
        Price::create([
            'product_id' => 9,
            'shop_id' => 3,
            'sale_price' => 109.99,
        ]);
        
        Price::create([
            'product_id' => 10,
            'shop_id' => 1,
            'sale_price' => 199.99,
        ]);
    }
}
