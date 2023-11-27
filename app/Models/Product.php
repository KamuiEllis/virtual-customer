<?php

namespace App\Models;

use App\Models\Cart;
use Laravel\Scout\Searchable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Product extends Model
{
    use Searchable;
    use HasFactory;

    protected $fillable = [
        'name',
        'sku',
        'shortDescription',
        'description',
        'cost',
        'quantity',
        'images',
        'weight',
        'type',
        'brand',
        'colors'
    ];

    public function carts()
    {
        return $this->hasMany(Cart::class);
    }

    public function toSearchableArray()
    {
        return ['name' => $this->name, 'sku' => $this->sku, 'description' => $this->description, 'shortDescription' => $this->shortDescription, 'cost' => $this];
    }
}
