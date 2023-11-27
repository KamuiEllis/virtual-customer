<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cart extends Model
{
    use HasFactory;

    protected $fillable = [
        'quantity',
        'customer',
        'product'
    ];


    public function product()
    {
        return $this->hasMany(Product::class);
    }

    public function customer()
    {
        return $this->hasOne(Customer::class);
    }
}
