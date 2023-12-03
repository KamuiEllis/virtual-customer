<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\Zone;
use App\Models\Customer;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Contracts\View\View;

class CartController extends Controller
{
    //
    public function cart() {

        // DB::table('posts')
        //    ->join('users', 'posts.user_id', '=', 'users.id')
        //    ->select('posts.*', 'users.name as user_name')
        //    ->get();

        $cart = DB::table('carts')->where('customer', auth()->user()->id)->where('enabled', 0)->join('products', 'products.id', '=', 'carts.product')->select('products.*', 'carts.id as cart_id')->get();
        $total = 0;

        foreach ($cart as $item) {
            $total += $item->cost;
        }
        
        $zones = DB::table('zones')->get();
        return view('cart', ['cart' => $cart, 'zones' => $zones, 'total' => $total]);
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
        $totalPounds = 0;
        $subTotal = 0;
        $calculatedProducts = [];
        $zone = Zone::find($inputs['zone']);
        $carts = DB::table('carts')->where('customer', auth()->user()->id)->where('enabled', 0)->join('products', 'products.id', '=', 'carts.customer')->select('products.*', 'carts.id as cart_id')->get();

        foreach($carts as $product) {
           $totalCost +=  ($product->weight * $zone->perPound) + $product->cost;
           $totalPounds += ($product->weight * $zone->perPound);
           $subTotal += $product->cost;
        }   

        return view('checkout', ['totalCost' => $totalCost, 'zone' => $zone, 'totalPounds' => $totalPounds, 'subTotal' => $subTotal]);
    }
}
