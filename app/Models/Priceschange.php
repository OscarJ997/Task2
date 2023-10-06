<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Priceschange extends Model
{
    use HasFactory;
    protected $fillable = [
        'product_id',
        'shop_id',
        'sale_price',
        'status',
        'price_id',
    ];

    public function product()
    {
        return $this->belongsTo(Product::class);
    }

    public function shop()
    {
        return $this->belongsTo(VendorShop::class);
    }
    
    public function user()
    {
        return $this->belongsTo(User::class, 'locked_by');
    }
}
