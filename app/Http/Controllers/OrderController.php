<?php

namespace App\Http\Controllers;

use App\Models\Zone;
use App\Models\Order;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Http;

class OrderController extends Controller
{
    //
    public function createOrder(Zone $zone, Request $request) {

        $inputs = $request->validate([
            'CardholderName' => ['required'],
            'CardPan' => ['required'],
            'CardCvv' => ['required'],
            'CardExpiration' => ['required'],
            'addressOne' => ['required'],
            'addressTwo' => ['required'],
            'town' => ['required'],
            'parish' => ['required'],
        ]);

        $response = Http::withHeaders([
            'Accept' => 'application/json',
            'PowerTranz-PowerTranzId' => '88805586',
            'PowerTranzPowerTranzPassword' => 'NUOW7YpVIRRzRnh5uPleTCzgNNJT2IsXqcVTD9c75F8NMgunklv3xF',
            'Content-Type' => 'application/json; charset=utf-8'
        ])->post('https://staging.ptranz.com/api/spi/sale', [
            "TransactionIdentifier" => "5ee7d7c1-af7-4d7e-9386-
            abb280822b73",
            "OrderIdentifier" => "INT-95e75078-7d5-40e8-8053-
            c3d488f05f59-Orc 3569",
            'TotalAmount' => 2000,
            "CurrencyCode" => "388",
            "ThreeDSecure" => true,
            "MerchantResponseUrl" => "https://localhost:5001/Final",
            "Source" => $inputs
        ]);


        if ($response->successful()) {
            // Handle successful response
            $responseData = $response->json();
            // Process the response data as needed
            return ['data' => $responseData];
        } else {
            // Handle error
            $errorData = $response->json();
            return ['data' => $errorData, 'error' => 'error occued'];
            // Process the error data as needed
        }

        

       

        // return view('checkoutSuccess');
    }

    public function orders(Request $request) {
        $orders = Order::where('customer_id', auth()->user()->id)->orderBy("id","desc")->get();
        return view("orderHistory", ['orders' => $orders]);
    }

    public function orderDetail(Order $order, Request $request) {
        $carts = DB::table('carts')->where('customer', auth()->user()->id)->where('order', $order->order_sku)->join('products', 'products.id', '=', 'carts.customer')->select('products.*', 'carts.id as cart_id', 'carts.quantity as quantity_bought')->get();
        $zone = Zone::find($order);
        return view('orderDetail', ['carts' => $carts, 'order' => $order]);
    }

    public function orderSuccessful(Order $order) {
        return view('checkoutSuccess', ['order' => $order]);
    }
}
