<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Warehouse extends Model
{
    use HasFactory;

    protected $fillable = [
        'warehouse_name',
        'address',
    ];

    public function inventory()
    {
        return $this->hasMany(Inventory::class);
    }
}