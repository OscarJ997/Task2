<?php

namespace Database\Seeders;

use App\Models\Warehouse;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class WarehouseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Warehouse::create([
            'warehouse_name' => 'Central Warehouse',
            'address' => '123 Main Street, Main City, Country',
        ]);
        
        Warehouse::create([
            'warehouse_name' => 'North Warehouse',
            'address' => '456 North Avenue, North City, Country',
        ]);
        
        Warehouse::create([
            'warehouse_name' => 'South Warehouse',
            'address' => '789 South Road, South City, Country',
        ]);
        
        Warehouse::create([
            'warehouse_name' => 'East Warehouse',
            'address' => '101 East Boulevard, East City, Country',
        ]);
        
        Warehouse::create([
            'warehouse_name' => 'West Warehouse',
            'address' => '202 West Drive, West City, Country',
        ]);
        
        Warehouse::create([
            'warehouse_name' => 'Main Warehouse',
            'address' => '303 Main Avenue, Main City, Country',
        ]);
        
        Warehouse::create([
            'warehouse_name' => 'Central Warehouse 2',
            'address' => '404 Main Street, Main City, Country',
        ]);
        
        Warehouse::create([
            'warehouse_name' => 'Main Warehouse 3',
            'address' => '505 Main Road, Main City, Country',
        ]);
        
        Warehouse::create([
            'warehouse_name' => 'Northern Warehouse',
            'address' => '606 North Avenue, North City, Country',
        ]);
        
        Warehouse::create([
            'warehouse_name' => 'Southern Warehouse',
            'address' => '707 South Drive, South City, Country',
        ]);
    }
}
