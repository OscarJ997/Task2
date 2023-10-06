<?php

namespace Database\Seeders;

use App\Models\Product;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Product::create([
            'product_name' => 'Laptop Mac',
            'product_description' => 'The Mac, short for Macintosh (its official name until 1999), is a family of personal computers designed and marketed by Apple Inc. The product lineup includes the MacBook Air and MacBook Pro laptops, as well as the iMac, Mac Mini, Mac Studio and Mac Pro desktops.',
            'sku' => '254115489',
            'vendor_id' => 1,
            'shop_id' => 1,
            'product_group_id' => 1,
        ]);
        
        Product::create([
            'product_name' => 'Smartphone Android',
            'product_description' => 'Android smartphones are mobile phones that run the Android operating system. They are known for their versatility, app ecosystem, and customization options.',
            'sku' => '987654321',
            'vendor_id' => 2,
            'shop_id' => 2,
            'product_group_id' => 1,
        ]);
        
        Product::create([
            'product_name' => 'Refrigerator',
            'product_description' => 'A refrigerator is an essential kitchen appliance that keeps food and beverages cold and fresh. It comes in various sizes and styles.',
            'sku' => '123456789',
            'vendor_id' => 3,
            'shop_id' => 3,
            'product_group_id' => 2,
        ]);
        
        Product::create([
            'product_name' => 'Sofa Set',
            'product_description' => 'A sofa set is a collection of couches and seating furniture designed for comfort and style in the living room.',
            'sku' => '456789123',
            'vendor_id' => 4,
            'shop_id' => 4,
            'product_group_id' => 3,
        ]);
        
        Product::create([
            'product_name' => 'Treadmill',
            'product_description' => 'A treadmill is a fitness machine used for walking, running, or jogging indoors. It helps with cardiovascular exercise and fitness goals.',
            'sku' => '789123456',
            'vendor_id' => 5,
            'shop_id' => 5,
            'product_group_id' => 4,
        ]);
        
        Product::create([
            'product_name' => 'Mystery Novel',
            'product_description' => 'Mystery novels are a popular genre of fiction that revolves around solving puzzles, crimes, and enigmas.',
            'sku' => '987654123',
            'vendor_id' => 6,
            'shop_id' => 6,
            'product_group_id' => 5,
        ]);
        
        Product::create([
            'product_name' => 'Action Figure',
            'product_description' => 'Action figures are collectible toys representing characters from movies, comics, and TV shows. They are popular among collectors and kids.',
            'sku' => '654789321',
            'vendor_id' => 7,
            'shop_id' => 7,
            'product_group_id' => 6,
        ]);
        
        Product::create([
            'product_name' => 'Shampoo',
            'product_description' => 'Shampoo is a hair care product used for cleaning and nourishing hair. It comes in various formulas for different hair types.',
            'sku' => '321987654',
            'vendor_id' => 8,
            'shop_id' => 8,
            'product_group_id' => 7,
        ]);
        
        Product::create([
            'product_name' => 'Car Battery',
            'product_description' => 'A car battery is an essential automotive component that provides electrical power to start the engine and run electrical systems in a vehicle.',
            'sku' => '159357852',
            'vendor_id' => 9,
            'shop_id' => 9,
            'product_group_id' => 8,
        ]);
        
        Product::create([
            'product_name' => 'Wall Clock',
            'product_description' => 'Wall clocks are timekeeping devices that also serve as decorative pieces in homes and offices. They come in various designs and sizes.',
            'sku' => '753159852',
            'vendor_id' => 10,
            'shop_id' => 10,
            'product_group_id' => 9,
        ]);




    }
}
