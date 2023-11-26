<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\Product;
use App\Models\Customer;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ProductController extends Controller
{
    //
    public function search(Request $request) {
        $inputs = $request->validate([
            'text' => [],
        ]);

        $products = Product::search($inputs['text'])->get();
        return view("inventory", ['products' => $products]);
    }

    public function product(Product $product) {
        return view('product', ['product'=> $product]);
    }


    public function products(Request $request) {
        $products = Product::orderBy("id","desc")->get();
        return view("inventory", ['products' => $products]);
    }

    public function getProduct(Product $product) {
        return view('singleProduct', ['product'=> $product]);
    }

    public function addToCart(Product $product, Request $request) {
        $inputs = $request->validate([
            'quantity' => ['required'],
        ]);

        $user = auth()->user();

        Cart::create(['quantity' => $inputs['quantity'], 'customer' => $user->id, 'product' => $product->id]);

        $updatedUser = Customer::find($user['id']);
        $updatedUser->cart = $user->cart + 1;
        $updatedUser->save();

        // $productQuantity = $product->quantity - $inputs['quantity'];
        // $product->quantity = $productQuantity;
        // $product->update();

        return redirect("/products/$product->id")->with('success', 'Item has been added to cart');
    }

    


}
