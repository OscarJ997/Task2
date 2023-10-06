<?php

namespace App\Http\Livewire;

use App\Models\Price;
use Livewire\Component;

class PricesProduct extends Component
{
    protected $listeners=['render-price'=> 'render'];
    
    public function render()
    {
        $products = Price::with('shop', 'product')->get();
        return view('livewire.prices-product', compact('products'));
    }
}
