<x-layout>
    <div class='row mt-1 p-lg-5'>
        <h3>Shopping Cart</h3>
        <hr/>
        <div class='col-lg-9 col-sm-12 '>
        @foreach ($cart as $product)
                <div class='row m-2 ' style='border:none; box-shadow: rgba(0, 0, 0, 0.35) 0px 5px 15px; padding:10px;'>
                    {{-- <img class='' src='{{ asset(env('ADMIN_URL').''.$product->image) }}'  /> --}}
                    <div class='col-lg-3 col-sm-12'>
                        <img class='' src='{{ asset(env('ADMIN_URL').''.$product->image) }}' width="200" />
                    </div>
            
                    <div class='col-lg-9 col-sm-12'>
                        <h3>{{$product->name}}</h3>
                        <p class='mb-0'>@php 
                                $date = new DateTime($product->created_at); 
                                echo $date->format('F j, Y, g:i A');
                            @endphp  |  By {{$product->brand}}</p>
                            <img class='' src='{{asset('/stars.png')}}' width='100'  />
                    
                        <div >
                            <p style='margin-bottom:0;'><sup>$</sup><span style='font-size:20px; margin-bottom:0; margin-right:10px;'>@php echo number_format($product->cost)@endphp <span style='font-size:'>JMD</span></span>   <span style='color:green;'>{{$product->buy_quantity}} bought</span></p> 
                        </div>
                        <p>{{$product->shortDescription}}</p>                     
                           <form action='/carts/{{$product->cart_id}}' method='POST'>
                            @csrf
                            @method('DELETE')
                            <button class='buttons' style='height:40px; box-shadow: rgba(0, 0, 0, 0.35) 0px 5px 15px;'>Remove</button>
                        </form>
                    </div>
                </div>
            @endforeach
        </div>
        {{-- <p>{{auth()->user()->id}}</p> --}}
        <div class='col-lg-3 col-sm-12 card p-3' >
            <div style='padding-top:5px; margin-bottom:10px; background-color:rgb(17, 39, 120); width:100%; height:50px; text-align:center; color:white;'>
                <h2 style=''>Sub Total</h2>
            </div>
           
            <h3>Total: <sup>$</sup>@php echo number_format($total)@endphp JMD</h3>
            <p>Select the area you would like you package to be delivered to.</p>
            <form action='/carts/toCheckout' class='mb-3' style=''>
                <label for="exampleFormControlInput1" class="form-label">Delivery Zones:</label>
                <select required class="form-control" name='zone'>
                    <option selected>Select Zones</option>
                    @foreach ($zones as $zone)
                        <option value='{{$zone->id}}'>{{$zone->address}} {{$zone->courier}}</option>
                    @endforeach
                </select>
                <div style='width:100%; text-align:center;' class='mt-4'>
                    <button class='buttons' style='background-color:rgb(206, 156, 80);'>Confirm</button>
                </div>
            </form>
        </div>
    </div>
</x-layout>