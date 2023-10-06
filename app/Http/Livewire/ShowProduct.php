<?php

namespace App\Http\Livewire;

use App\Models\Product;
use Livewire\Component;

class ShowProduct extends Component
{
    public $search="para buscar";
    
    protected $listeners=['render-product'=> 'render'];

    public function render()

    {
        
        $products = Product::with('vendor', 'shop', 'productGroup','prices')->get();

        return view('livewire.show-product', compact('products'));
    }
}
