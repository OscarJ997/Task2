<?php

namespace App\Http\Livewire;

use App\Mail\Mailsender;
use App\Models\Product;
use App\Models\Productchange;
use App\Models\ProductGroup;
use App\Models\Vendor;
use App\Models\VendorShop;
use Illuminate\Support\Facades\Mail;
use Livewire\Component;

class EditProduct extends Component
{
    public $product;
    public $open;
    public $vendors;
    public $shops;
    public $groups;
    public $auxP;
    public $product_aux;
    protected $rules = [
        'product.product_name' => 'required',
        'product.vendor_id' => 'required',
        'product.shop_id' => 'required',
        'product.vendor_id' => 'required',
        'product.product_description' => 'required',
        'product.sku' => 'required',
        'product.product_group_id' => 'required',
    ];

    public function mount(Product $product)
    {

        $this->vendors = Vendor::all();
        $this->shops = VendorShop::all();
        $this->groups = ProductGroup::all();
        $this->product = $product;
        $this->auxP = $product;
    }
    public function save()
    {

        Productchange::create([
            'id_product' => $this->product->id,
            'product_name' => $this->product->product_name,
            'product_description' => $this->product->product_description,
            'sku' => $this->product->sku,
            'vendor_id' => $this->product->vendor_id,
            'shop_id' => $this->product->shop_id,
            'product_group_id' => $this->product->vendor_id,
        ]);
        $this->open = false;
        if ($this->product->status == 'reject') {
            $this->product_aux->delete();
        }
        $this->product = $this->auxP;
        $this->product->status = 'edited';
        $this->product->save();

        $mensaje = [
            'product_name' => $this->product->product_name,
            'editor' => auth()->user()->name,
            'modification_date' => now(),
        ];

        Mail::to('Teamleader@gmail.com', 'Teamleader2@gmail.com')->send(new Mailsender($mensaje));

        $this->emit('render-product');
    }

    public function data()
    {

        $validate = Product::find($this->product->id);
        if ($validate->locked_by == auth()->user()->id || $validate->locked_by == null) {
            $this->open = true;
            $this->product = $this->auxP;
            if ($this->product->status == 'reject') {
                $this->product_aux = Productchange::where('id_product', $this->product->id)->first();
                $this->product->product_name = $this->product_aux->product_name;
                $this->product->vendor_id = $this->product_aux->vendor_id;
                $this->product->shop_id = $this->product_aux->shop_id;
                $this->product->product_description = $this->product_aux->product_description;
                $this->product->sku = $this->product_aux->sku;
                $this->product->product_group_id = $this->product_aux->product_group_id;
            } else {
                $this->product->status = 'editing';
                $this->product->locked_by = auth()->user()->id;
                $this->product->save();
            }
        };

        $this->emit('render-product');
    }

    public function render()
    {
        return view('livewire.edit-product');
    }
}
