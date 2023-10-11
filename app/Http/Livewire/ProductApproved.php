<?php

namespace App\Http\Livewire;

use App\Mail\MailsenderApprove;
use App\Models\Product;
use App\Models\Productchange;
use App\Models\ProductGroup;
use App\Models\Vendor;
use App\Models\VendorShop;
use Illuminate\Support\Facades\Mail;
use Livewire\Component;

class ProductApproved extends Component
{
    public $product;
    public $product_aux;
    public $open;
    public $vendors;
    public $shops;
    public $groups;
    public $maxWidth = '2xl';

    protected $rules = [
        'product.product_name' => 'required',
        'product.vendor_id' => 'required',
        'product.shop_id' => 'required',
        'product.product_description' => 'required',
        'product.sku' => 'required',
        'product.product_group_id' => 'required',
    ];

    public function mount(Product $product)
    {
        $this->product_aux = Productchange::where('id_product', $this->product->id)->first();
        $this->vendors = Vendor::all();
        $this->shops = VendorShop::all();
        $this->groups = ProductGroup::all();
        $this->product = $product;
    }
    public function data()
    {
        $this->open = true;
    }

    public function save()
    {
        $this->product->product_name = $this->product_aux->product_name;
        $this->product->vendor_id = $this->product_aux->vendor_id;
        $this->product->shop_id = $this->product_aux->shop_id;
        $this->product->product_description = $this->product_aux->product_description;
        $this->product->sku = $this->product_aux->sku;
        $this->product->product_group_id = $this->product_aux->product_group_id;
        $this->product->status = null;

        $this->product_aux->delete();
        $this->open = false;
        $this->product->save();
        $mensaje = [
            'product_name' => $this->product->product_name,
            'editor' => auth()->user()->name,
            'changes_approved' => true,
            'modification_date' => now(),
        ];

        Mail::to('Teamleader@gmail.com', 'Teamleader2@gmail.com')->send(new MailsenderApprove($mensaje));
        $this->emit('render-product');
    }

    public function reject()
    {

        $this->open = false;
        $this->product->status = 'reject';
        $this->product->save();
        $mensaje = [
            'product_name' => $this->product->product_name,
            'editor' => auth()->user()->name,
            'changes_approved' => false,
            'modification_date' => now(),
        ];

        Mail::to('Teamleader@gmail.com', 'Teamleader2@gmail.com')->send(new MailsenderApprove($mensaje));
        $this->emit('render-product');
    }

    public function render()
    {
        return view('livewire.product-approved');
    }
}
