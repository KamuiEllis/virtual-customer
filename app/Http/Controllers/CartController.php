<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\Zone;
use App\Models\Customer;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;

class CartController extends Controller
{
    //
    public function cart() {

        // DB::table('posts')
        //    ->join('users', 'posts.user_id', '=', 'users.id')
        //    ->select('posts.*', 'users.name as user_name')
        //    ->get();

        $cart = DB::table('carts')->where('customer', auth()->user()->id)->join('products', 'products.id', '=', 'carts.customer')->select('products.*', 'carts.id as cart_id')->get();
        $zones = DB::table('zones')->get();
        return view('cart', ['cart' => $cart, 'zones' => $zones]);
    }

    public function deleteCart(Cart $cart) {

        $user = auth()->user();
        
        DB::table('customers')->where('id', auth()->user()->id)->update(['cart' => $user->cart - 1]);

        $cart->delete();
        return redirect('/cart');
    }

    public function toCheckout(Request $request) {
        $inputs = $request->validate([
            'zone' => ['required'],
        ]); 

        $totalCost = 0;
        $calculatedProducts = [];
        $zone = Zone::find($inputs['zone']);
        $carts = DB::table('carts')->where('customer', auth()->user()->id)->join('products', 'products.id', '=', 'carts.customer')->select('products.*', 'carts.id as cart_id')->get();

        foreach($carts as $product) {
           $totalCost +=  ($product->weight * $zone->perPound) + $product->cost + $zone->price;
        }   

        return $totalCost;
    }
}
