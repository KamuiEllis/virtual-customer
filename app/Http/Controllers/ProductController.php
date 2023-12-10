<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\Product;
use App\Models\Customer;
use App\Models\Wishlist;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;

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

        $wishlist = Wishlist::firstOrCreate(
            ['customer' => auth()->user()->id, 'product' => $product->id],
            ['customer' => auth()->user()->id, 'product' => $product->id]
        );

        if ($wishlist->wasRecentlyCreated) {
            // Record was created
            // Additional actions if needed for new record
            return back()->with('success', 'Product added to wishlist!');;
        } else {
            return back()->with('error', 'Product is already in your wishlist');;
        }

      
    }

    public function getWishlist() {
        $wishlists = DB::table('wishlists')->where('customer', auth()->user()->id)->join('products', 'products.id', '=', 'wishlists.product')->select('products.*', 'wishlists.id as wishlist_id')->get();
        return view('wishlist', ['list' => $wishlists]);
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
