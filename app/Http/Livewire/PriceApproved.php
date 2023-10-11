<?php

namespace App\Http\Livewire;

use App\Mail\MailsenderApprove;
use App\Models\Price;
use App\Models\Priceschange;
use App\Models\Product;
use App\Models\VendorShop;
use Illuminate\Support\Facades\Mail;
use Livewire\Component;

class PriceApproved extends Component
{

    public  $shops;
    public  $products;
    public  $prices;
    public  $prices_aux;
    public  $auxP;
    public  $open;
    public $maxWidth = '2xl';

    public function mount(Price $prices)
    {

        $prices_aux = Priceschange::where('price_id', $this->prices->id)->first();
        $this->shops = VendorShop::all();
        $this->products = Product::all();
        $this->prices = $prices;
        $this->prices_aux = $prices_aux;
        $this->auxP = $prices;
    }
    public function data()
    {
        $this->open = true;
    }

    public function save()
    {
        $this->prices->product_id = $this->prices_aux->product_id;
        $this->prices->sale_price = $this->prices_aux->sale_price;
        $this->prices->shop_id = $this->prices_aux->shop_id;
        $this->prices->status = null;

        $this->prices_aux->delete();
        $this->open = false;
        $this->prices->save();
        $mensaje = [
            'product_name' => $this->prices->product->product_name,
            'editor' => auth()->user()->name,
            'changes_approved' => true,
            'modification_date' => now(),
        ];

        Mail::to('Teamleader@gmail.com', 'Teamleader2@gmail.com')->send(new MailsenderApprove($mensaje));
        $this->emit('render-price');
    }

    public function reject()
    {

        $this->open = false;
        $this->prices->status = 'reject';
        $this->prices->save();
        $mensaje = [
            'product_name' => $this->prices->product->product_name,
            'editor' => auth()->user()->name,
            'changes_approved' => false,
            'modification_date' => now(),
        ];

        Mail::to('Teamleader@gmail.com', 'Teamleader2@gmail.com')->send(new MailsenderApprove($mensaje));
        $this->emit('render-price');
    }

    public function render()
    {
        return view('livewire.price-approved');
    }
}
