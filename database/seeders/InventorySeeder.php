<?php

namespace Database\Seeders;

use App\Models\Inventory;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class InventorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Inventory::create([
            'product_id' => 1,
            'stock' => 100,
            'warehouse_id' => 1,
        ]);
        
        Inventory::create([
            'product_id' => 2,
            'stock' => 75,
            'warehouse_id' => 2,
        ]);
        
        Inventory::create([
            'product_id' => 3,
            'stock' => 50,
            'warehouse_id' => 3,
        ]);
        
        Inventory::create([
            'product_id' => 4,
            'stock' => 200,
            'warehouse_id' => 1,
        ]);
        
        Inventory::create([
            'product_id' => 5,
            'stock' => 90,
            'warehouse_id' => 2,
        ]);
        
        Inventory::create([
            'product_id' => 6,
            'stock' => 60,
            'warehouse_id' => 3,
        ]);
        
        Inventory::create([
            'product_id' => 7,
            'stock' => 150,
            'warehouse_id' => 1,
        ]);
        
        Inventory::create([
            'product_id' => 8,
            'stock' => 80,
            'warehouse_id' => 2,
        ]);
        
        Inventory::create([
            'product_id' => 9,
            'stock' => 70,
            'warehouse_id' => 3,
        ]);
        
        Inventory::create([
            'product_id' => 10,
            'stock' => 120,
            'warehouse_id' => 1,
        ]);
    }
}
