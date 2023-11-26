<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\ProductController;

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

Route::get('/', function () {
    return view('home');
});

Route::get('/login', function () {
    return view('login');
});

Route::get('/inventory', [ProductController::class, 'products']);

Route::get('/register', function () {
    return view('register');
});


Route::post('/register', [CustomerController::class, 'register']);

Route::post('/login', [CustomerController::class, 'login']);

Route::post('/logout', [CustomerController::class, 'logout']);

//product

Route::post('/search', [ProductController::class, 'search']);

Route::get('/products/{product}', [ProductController::class, 'product']);

Route::post('/products/addToCart/{product}', [ProductController::class, 'addToCart']);
