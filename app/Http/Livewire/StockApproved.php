<?php

namespace App\Http\Livewire;

use App\Mail\MailsenderApprove;
use App\Models\Inventory;
use App\Models\Inventorychange;
use App\Models\Product;
use App\Models\Warehouse;
use Illuminate\Support\Facades\Mail;
use Livewire\Component;

class StockApproved extends Component
{

    public $products;
    public $warehouses;
    public $inventory;
    public $inventory_aux;
    public $auxP;
    public $open;
    public $maxWidth = '2xl';

    public function mount(Inventory $inventory)
    {
        $inventory_aux = Inventorychange::where('inventory_id', $inventory->id)->first();
        $this->products = Product::all();
        $this->warehouses = Warehouse::all();
        $this->inventory = $inventory;
        $this->inventory_aux = $inventory_aux;
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
        $mensaje = [
            'product_name' => $this->inventory->product->product_name,
            'editor' => auth()->user()->name,
            'changes_approved' => true,
            'modification_date' => now(),
        ];

        Mail::to('Teamleader@gmail.com', 'Teamleader2@gmail.com')->send(new MailsenderApprove($mensaje));
        $this->emit('render-stock');
    }

    public function reject()
    {

        $this->open = false;
        $this->inventory->status = 'reject';
        $this->inventory->save();
        $mensaje = [
            'product_name' => $this->inventory->product->product_name,
            'editor' => auth()->user()->name,
            'changes_approved' => false,
            'modification_date' => now(),
        ];

        Mail::to('Editor@gmail.com', 'Editor2@gmail.com')->send(new MailsenderApprove($mensaje));
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
