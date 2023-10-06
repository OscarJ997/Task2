<?php

namespace Database\Seeders;

use App\Models\Vendor;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class VendorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Vendor::create([
            'name' => 'TechCo',
            'address' => '123 Tech Street, Tech City, Tech Country',
        ]);
        
        Vendor::create([
            'name' => 'FashionHub',
            'address' => '456 Fashion Avenue, Fashion City, Fashion Country',
        ]);
        
        Vendor::create([
            'name' => 'HomePro',
            'address' => '789 Home Road, Home City, Home Country',
        ]);
        
        Vendor::create([
            'name' => 'FurnishNow',
            'address' => '101 Furnish Boulevard, Furnish City, Furnish Country',
        ]);
        
        Vendor::create([
            'name' => 'SportsGear',
            'address' => '202 Sports Drive, Sports City, Sports Country',
        ]);
        
        Vendor::create([
            'name' => 'BookWorld',
            'address' => '303 Book Avenue, Book City, Book Country',
        ]);
        
        Vendor::create([
            'name' => 'ToyLand',
            'address' => '404 Toy Street, Toy City, Toy Country',
        ]);
        
        Vendor::create([
            'name' => 'BeautyGlow',
            'address' => '505 Beauty Road, Beauty City, Beauty Country',
        ]);
        
        Vendor::create([
            'name' => 'AutoPartsPlus',
            'address' => '606 Auto Avenue, Auto City, Auto Country',
        ]);
        
        Vendor::create([
            'name' => 'DecorElegance',
            'address' => '707 Decor Drive, Decor City, Decor Country',
        ]);
    }
}
