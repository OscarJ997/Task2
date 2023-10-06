<?php

namespace App\Http\Livewire;

use App\Models\Inventory;
use App\Models\Inventorychange;
use App\Models\Product;
use App\Models\Warehouse;
use Livewire\Component;

class StockApproved extends Component
{

        public $products;
        public $warehouses;
        public $inventory ;
        public $inventory_aux;
        public $auxP ;
        public $open ;
        public $maxWidth = '2xl';

    public function mount(Inventory $inventory)
    {
        $inventory_aux= Inventorychange::where('inventory_id',$inventory->id )->first();
        $this->products = Product::all();
        $this->warehouses = Warehouse::all();
        $this->inventory = $inventory;
        $this->inventory_aux= $inventory_aux;
        $this->auxP = $inventory;
    }

    public function save()
    {
        
        $this->inventory->product_id =  $this->inventory_aux->product_id;
        $this->inventory->warehouse_id =  $this->inventory_aux->warehouse_id;
        $this->inventory->stock =  $this->inventory_aux->stock;
        $this->inventory->status = null;

        $this->inventory_aux->delete();
        $this->open = false;
        $this->inventory->save();
        $this->emit('render-stock');
    }

    public function reject(){

        $this->open = false;
       $this->inventory->status='reject';
       $this->inventory->save();
       $this->emit('render-stock');
   }

    public function data()
    {
        $this->open = true;
    }

    public function render()
    {
        return view('livewire.stock-approved');
    }
}
