<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\Product;
use App\Models\Customer;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Wishlist;

class ProductController extends Controller
{
    //
    public function search(Request $request) {
        $inputs = $request->validate([
            'text' => [],
        ]);

        $products = Product::search($inputs['text'])->paginate(5);
        return view("inventory", ['products' => $products]);
    }

    public function deals(Request $request) {
        $products = Product::search('')->paginate(4);
        return view('home', ['deals' => [], 'products' => $products]);
    }

    public function search2(Request $request) {
        $searchQuery = $request->query('search');
        $page = $request->query('page');
        $products = Product::search( $searchQuery)->paginate(5, 'page', $page);
        return view("inventory", ['products' => $products]);
    }

    public function addToWishlist(Product $product) {
        Wishlist::create([ 'customer' => auth()->user()->id, 'product' => $product->id]);
        return back()->with('success', 'Product added to wishlist!');;
    }


    
    public function product(Product $product) {
        
        $products = Product::search($product->subcategory)->paginate(5);
       

        return view('product', ['product'=> $product, 'related' => $products]);
    }


    public function products(Request $request) {
        $products = Product::orderBy("id","desc")->paginate(5);
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
