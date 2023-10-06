<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    
    protected $fillable = [
        'product_name',
        'product_description',
        'sku',
        'vendor_id',
        'shop_id',
        'product_group_id',
        'status',
    ];

    public function vendor()
    {
        return $this->belongsTo(Vendor::class);
    }

    public function shop()
    {
        return $this->belongsTo(VendorShop::class, 'shop_id');
    }

    public function productGroup()
    {
        return $this->belongsTo(ProductGroup::class, 'product_group_id');
    }
    public function prices()
    {
        return $this->hasMany(Price::class, 'product_id');
    }
    
    public function user()
    {
        return $this->belongsTo(User::class, 'locked_by');
    }
}
