<?php

namespace App\Http\Livewire;

use App\Mail\Mailsender;
use App\Models\Price;
use App\Models\Priceschange;
use App\Models\Product;
use App\Models\VendorShop;
use Illuminate\Support\Facades\Mail;
use Livewire\Component;

class PricesEdit extends Component
{
    public $open;
    public $prices;
    public $shops;
    public $products;
    public $auxP;
    public $price_aux;

    protected $rules = [
        'prices.sale_price' => 'required',
        'prices.shop_id' => 'required',
        'prices.product_id' => 'required',
    ];

    public function mount(Price $prices)
    {
        $this->shops = VendorShop::all();
        $this->products = Product::all();
        $this->prices = $prices;
        $this->auxP = $prices;
    }
    public function save()
    {

        Priceschange::create([
            'price_id' => $this->prices->id,
            'product_id' => $this->prices->product_id,
            'shop_id' => $this->prices->shop_id,
            'sale_price' => $this->prices->sale_price,
        ]);
        if ($this->prices->status == 'reject') {
            $this->price_aux->delete();
        }
        $this->open = false;
        $this->prices = $this->auxP;
        $this->prices->status = 'edited';
        $this->prices->save();
        $mensaje = [
            'product_name' => $this->prices->product->product_name,
            'editor' => auth()->user()->name,
            'modification_date' => now(),
        ];

        Mail::to(auth()->user()->email)->send(new Mailsender($mensaje));
        $this->emit('render-price');
    }

    public function data()
    {
        $validate = Price::find($this->prices->id);
        if ($validate->locked_by == auth()->user()->id || $validate->locked_by == null) {
            $this->open = true;
            $this->prices = $this->auxP;

            if ($this->prices->status == 'reject') {
                $this->price_aux = Priceschange::where('price_id', $this->prices->id)->first();
                $this->prices->product_id = $this->price_aux->product_id;
                $this->prices->sale_price = $this->price_aux->sale_price;
                $this->prices->shop_id = $this->price_aux->shop_id;
            } else {
                $this->prices->status = 'editing';
                $this->prices->locked_by = auth()->user()->id;
                $this->prices->save();
            }
        }

        $this->emit('render-price');
    }
    public function render()
    {
        return view('livewire.prices-edit');
    }
}
