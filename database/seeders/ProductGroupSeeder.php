<?php

namespace Database\Seeders;

use App\Models\ProductGroup;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProductGroupSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        ProductGroup::create([
            'name' => 'Electronics',
            'description' => 'Category for electronic devices and gadgets.',
        ]);
        
        ProductGroup::create([
            'name' => 'Clothing',
            'description' => 'Category for various types of clothing and apparel.',
        ]);
        
        ProductGroup::create([
            'name' => 'Home Appliances',
            'description' => 'Category for household appliances and equipment.',
        ]);
        
        ProductGroup::create([
            'name' => 'Furniture',
            'description' => 'Category for furniture items and home decor.',
        ]);
        
        ProductGroup::create([
            'name' => 'Sports Equipment',
            'description' => 'Category for sports and fitness equipment.',
        ]);
        
        ProductGroup::create([
            'name' => 'Books',
            'description' => 'Category for books and printed materials.',
        ]);
        
        ProductGroup::create([
            'name' => 'Toys and Games',
            'description' => 'Category for children\'s toys and games.',
        ]);
        
        ProductGroup::create([
            'name' => 'Health and Beauty',
            'description' => 'Category for health and beauty products.',
        ]);
        
        ProductGroup::create([
            'name' => 'Automotive',
            'description' => 'Category for automotive parts and accessories.',
        ]);
        
        ProductGroup::create([
            'name' => 'Home Decor',
            'description' => 'Category for decorating and furnishing homes.',
        ]);
    }
}
