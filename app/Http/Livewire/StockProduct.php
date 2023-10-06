<?php

namespace App\Http\Livewire;

use App\Models\Inventory;
use Livewire\Component;

class StockProduct extends Component
{
    protected $listeners=['render-stock'=> 'render'];

    public function render()
    {
        $products = Inventory::with('product', 'warehouse')->get();
        return view('livewire.stock-product', compact('products'));
    }
}
