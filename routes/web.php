<?php

use App\Models\Product;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CartController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\CommentController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\CustomerController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', [ProductController::class, 'deals']);

Route::get('/login', function () {
    return view('login');
});

Route::get('/inventory', [ProductController::class, 'products']);

Route::get('/profile', function () {
    return view('profile');
});

Route::get('/wishlist', [ProductController::class, 'getWishlist']);

Route::get('/orderHistory', [OrderController::class, 'orders']);

Route::get('/dashboard', [CustomerController::class, 'dashboard']);

Route::get('/register', function () {
    return view('register');
});


Route::post('/register', [CustomerController::class, 'register']);

Route::post('/login', [CustomerController::class, 'login']);

Route::post('/logout', [CustomerController::class, 'logout']);

Route::put('/editProfile/{customer}', [CustomerController::class, 'editProfile']);

//product

Route::post('/search', [ProductController::class, 'search']);

Route::get('/search', [ProductController::class, 'search2']);

Route::get('/search/{text}', [ProductController::class, 'search3']);

Route::get('/products/wishlist/{product}', [ProductController::class, 'addToWishlist']);

Route::get('/products/{product}', [ProductController::class, 'product']);

Route::post('/products/addToCart/{product}', [ProductController::class, 'addToCart']);


//cart 

Route::get('/cart', [CartController::class, 'cart']);

Route::delete('/carts/{cart}', [CartController::class, 'deleteCart']);

Route::get('/carts/toCheckout', [CartController::class, 'toCheckout']);

//order
Route::post('/pay/{zone}', [OrderController::class, 'createOrder']);

Route::get('/orderSuccessful/{order}', [OrderController::class, 'orderSuccessful']);

Route::get('/orderDetail/{sku}', [OrderController::class, 'orderDetail']);


//comment
Route::post('/comment/{product}', [CommentController::class, 'addComment']);
Route::get('/comment/delete/{comment}', [CommentController::class, 'deleteComment']);

