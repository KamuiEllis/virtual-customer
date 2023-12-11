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

        // $response = Http::withHeaders([
        //     'Accept' => 'application/json',
        //     'PowerTranz-PowerTranzId' => '88805586',
        //     'PowerTranzPowerTranzPassword' => 'NUOW7YpVIRRzRnh5uPleTCzgNNJT2IsXqcVTD9c75F8NMgunklv3xF',
        //     'Content-Type' => 'application/json; charset=utf-8'
        // ])->post('https://staging.ptranz.com/api/spi/sale', [
        //     "TransactionIdentifier" => "5ee7d7c1-af7-4d7e-9386-
        //     abb280822b73",
        //     "OrderIdentifier" => "INT-95e75078-7d5-40e8-8053-
        //     c3d488f05f59-Orc 3569",
        //     'TotalAmount' => 2000,
        //     "CurrencyCode" => "388",
        //     "ThreeDSecure" => true,
        //     "MerchantResponseUrl" => "https://localhost:5001/Final",
        //     "Source" => $inputs
        // ]);


        // if ($response->successful()) {
        //     // Handle successful response
        //     $responseData = $response->json();
        //     // Process the response data as needed
        //     return ['data' => $responseData];
        // } else {
        //     // Handle error
        //     $errorData = $response->json();
        //     return ['data' => $errorData, 'error' => 'error occued'];
        //     // Process the error data as needed
        // }

        
        $totalCost = 0;
        $totalPounds = 0;
        $calculatedProducts = [];
        $zone = Zone::find($zone->id);
        $carts = DB::table('carts')->where('customer', auth()->user()->id)->where('enabled', 0)->join('products', 'products.id', '=', 'carts.product')->select('products.*', 'carts.id as cart_id', 'carts.quantity as amount_bought')->get();
        $cartProducts = '';
        foreach($carts as $product) {
           $totalCost +=  (($product->weight * $zone->perPound) + $product->cost) * $product->amount_bought;
           $totalPounds += $product->weight * $product->amount_bought;
        }   

        $randomSku = rand(10000000000, 999999999999);

        $order = [  'zone_per_pound' => $zone->perPound, 'order_sku' => $randomSku , 'zone_cost' => 0,  'name' => auth()->user()->firstname . ' ' . auth()->user()->lastname, 'address' => $zone->address, 'parish' => $zone->parish, 
        'delivery_type' => $zone->services, 'area' => $zone->type, 'cart_id' => $carts, 'total_payment' => $totalCost, 'status' => 'pending', 'customer_id' => auth()->user()->id];

        $newInfo = DB::table('orders')->insert($order);
        

        DB::table('carts')->where('customer', auth()->user()->id)->where('enabled', 0)->delete();
        DB::table('customers')->where('id', auth()->user()->id)->update(['cart' => 0]);

        // return $newInfo;

        return view('checkoutSuccess', ['sku' => $randomSku ]);
    }

    public function orders(Request $request) {
        $orders = Order::where('customer_id', auth()->user()->id)->orderBy("id","desc")->get();
        return view("orderHistory", ['orders' => $orders]);
    }

    public function orderDetail(String $sku, Request $request) {
        $order = DB::table('orders')->where('order_sku', $sku)->get()[0];
        $formattedProducts = $order->cart_id;

        $associativeArray  = json_decode($formattedProducts, true);
        $productsArray = [];
        $totalWeight = 0;
        // Iterate over the array
        foreach ($associativeArray as $product) {
            $productDetails = [
                'id' => $product['id'],
                'name' => $product['name'],
                'sku' => $product['sku'],
                'shortDescription' => $product['shortDescription'],
                'description' => $product['description'],
                'quantity' => $product['quantity'],
                'cost' => $product['cost'],
                'deal' => $product['deal'],
                'discountCost' => $product['discountCost'],
                'type' => $product['type'],
                'timesBought' => $product['timesBought'],
                'subcategory' => $product['subcategory'],
                'unboxing' => $product['unboxing'],
                'partNumber' => $product['partNumber'],
                'productType' => $product['productType'],
                'brand' => $product['brand'],
                'colors' => $product['colors'],
                'image' => $product['image'],
                'weight' => $product['weight'],
                'created_at' => $product['created_at'],
                'updated_at' => $product['updated_at'],
                'cart_id' => $product['cart_id'],
                'amount_bought' => $product['amount_bought'],
             
            ];
            $totalWeight += $product['weight'];
            // Add the product details to the productsArray
            $productsArray[] = $productDetails;
        }

        // return $productsArray[0];
        return view('orderDetail', ['order' => $order, 'products' => $productsArray, 'total_weight' => $totalWeight]);
    }

    public function orderSuccessful(Order $order) {
        return view('checkoutSuccess', ['order' => $order]);
    }
}
