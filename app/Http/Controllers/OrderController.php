<?php

namespace App\Http\Controllers;

use App\Models\Zone;
use App\Models\Order;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;

class OrderController extends Controller
{
    //
    public function createOrder(Zone $zone, Request $request) {

        $totalCost = 0;
        $totalPounds = 0;
        $calculatedProducts = [];
        $zone = Zone::find($zone->id);
        $carts = DB::table('carts')->where('customer', auth()->user()->id)->where('enabled', 0)->join('products', 'products.id', '=', 'carts.customer')->select('products.*', 'carts.id as cart_id')->get();
        
        foreach($carts as $product) {
           $totalCost +=  ($product->weight * $zone->perPound) + $product->cost + $zone->price;
           $totalPounds += $product->weight;
        }  
        $randomNumber = rand(10, 10000);
        while(true) {
            $tempOrders = DB::table('orders')->where('order_sku', $randomNumber)->get();
            if(count($tempOrders) > 0) {
                $randomNumber = rand(10, 10000);
                continue;
            } else {
                break;
            }
        }

        $order = [ 'order_sku' => $randomNumber, 'zone_per_pound' => $zone->perPound, 'zone_cost' => $zone->price,   'name' => auth()->user()->firstname . ' ' . auth()->user()->lastname, 'address' => $zone->address, 'parish' => $zone->parish, 
        'delivery_type' => $zone->services, 'area' => $zone->type, 'cart_id' => auth()->user()->id, 'total_payment' => $totalCost, 'status' => 'pending', 'customer_id' => auth()->user()->id];
    
        $newInfo = DB::table('orders')->insert($order);
        

        DB::table('carts')->where('customer', auth()->user()->id)->where('enabled', 0)->update(['enabled' => 1, 'order' => $randomNumber]);
        DB::table('customers')->where('id', auth()->user()->id)->update(['cart' => 0]);

        return redirect('/orderHistory')->with('success', 'Order was successful');
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
}
