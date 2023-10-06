<?php

namespace App\Http\Livewire;

use App\Models\Inventory;
use App\Models\Inventorychange;
use App\Models\Product;
use App\Models\Warehouse;
use Livewire\Component;

class StockEdit extends Component
{

    public $inventory;
    public $open;
    public $products;
    public $warehouses;
    public $auxP;
    public $inventory_aux;

    protected $rules = [
        'inventory.product_id' => 'required',
        'inventory.warehouse_id' => 'required',
        'inventory.stock' => 'required',
    ];

    public function mount(Inventory $inventory)
    {
        $this->products = Product::all();
        $this->warehouses = Warehouse::all();
        $this->inventory = $inventory;
        $this->auxP = $inventory;
    }
    public function data()
    {
        $validate = Inventory::find($this->inventory->id);
        if ($validate->locked_by == auth()->user()->id || $validate->locked_by == null) {
            $this->open = true;
            $this->inventory = $this->auxP;
            if ($this->inventory->status == 'reject') {
                $this->inventory_aux= Inventorychange::where('inventory_id',$this->inventory->id )->first();
                $this->inventory->product_id =  $this->inventory_aux->product_id;
                $this->inventory->warehouse_id =  $this->inventory_aux->warehouse_id;
                $this->inventory->stock =  $this->inventory_aux->stock;
            }else{
                $this->inventory->status = 'editing';
                $this->inventory->locked_by = auth()->user()->id;
                $this->inventory->save();
            }


           
        }

        $this->emit('render-stock');
    }
    public function save()
    {
        Inventorychange::create([
            'inventory_id' => $this->inventory->id,
            'product_id' => $this->inventory->product_id,
            'stock' => $this->inventory->stock,
            'warehouse_id' => $this->inventory->warehouse_id,
        ]);
        if ($this->inventory->status == 'reject') {
            $this->inventory_aux->delete();
        }
        $this->open = false;
        $this->inventory = $this->auxP;
        $this->inventory->status = 'edited';
        $this->inventory->save();
        $this->emit('render-stock');
    }


    public function render()
    {
        return view('livewire.stock-edit');
    }
}
