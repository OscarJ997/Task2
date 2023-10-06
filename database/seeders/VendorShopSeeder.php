<?php

namespace Database\Seeders;

use App\Models\VendorShop;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class VendorShopSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        VendorShop::create([
            'vendor_id' => 1,
            'shop_name' => 'TechCo Electronics Store',
        ]);
        
        VendorShop::create([
            'vendor_id' => 2,
            'shop_name' => 'FashionHub Clothing Boutique',
        ]);
        
        VendorShop::create([
            'vendor_id' => 3,
            'shop_name' => 'HomePro Appliances Outlet',
        ]);
        
        VendorShop::create([
            'vendor_id' => 4,
            'shop_name' => 'FurnishNow Furniture Showroom',
        ]);
        
        VendorShop::create([
            'vendor_id' => 5,
            'shop_name' => 'SportsGear Fitness Shop',
        ]);
        
        VendorShop::create([
            'vendor_id' => 6,
            'shop_name' => 'BookWorld Bookstore',
        ]);
        
        VendorShop::create([
            'vendor_id' => 7,
            'shop_name' => 'ToyLand Toy Store',
        ]);
        
        VendorShop::create([
            'vendor_id' => 8,
            'shop_name' => 'BeautyGlow Health & Beauty Store',
        ]);
        
        VendorShop::create([
            'vendor_id' => 9,
            'shop_name' => 'AutoPartsPlus Automotive Shop',
        ]);
        
        VendorShop::create([
            'vendor_id' => 10,
            'shop_name' => 'DecorElegance Home Decor Boutique',
        ]);
    }
}
