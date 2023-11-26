<?php

namespace App\Models;

use App\Models\Cart;
use Laravel\Scout\Searchable;
use Laravel\Sanctum\HasApiTokens;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Customer extends Authenticatable
{
    use HasFactory;
    use HasApiTokens, HasFactory, Notifiable;

    protected $fillable = [
        'firstname',
        'lastname',
        'password',
        'type',
        'email',
        'name'
    ];


    public function cart()
    {
        return $this->hasMany(Cart::class);
    }

    public function toSearchableArray()
    {
        return ['firstname' => $this->firstname, 'lastname' => $this->lastname, 'email' => $this->email];
    }

    protected $hidden = [
        'password',
        'remember_token',
    ];
}
