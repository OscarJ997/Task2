<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Inventorychange extends Model
{
    use HasFactory;
    
    protected $fillable = [
        'product_id',
        'stock',
        'warehouse_id',
        'status',
        'inventory_id'
    ];

    public function product()
    {
        return $this->belongsTo(Product::class);
    }

    public function warehouse()
    {
        return $this->belongsTo(Warehouse::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class, 'locked_by');
    }
}
