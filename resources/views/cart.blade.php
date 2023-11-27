<x-layout>
    <div class='row mt-1 p-5'>
        <div class='col-9'>
        @foreach ($cart as $product)
                <div class='row m-2' style='border:none;'>
                    {{-- <img class='' src='{{ asset(env('ADMIN_URL').''.$product->image) }}'  /> --}}
                    <div class='col-3'>
                        <img class='' src='{{ asset(env('ADMIN_URL').''.$product->image) }}' width="200" />
                    </div>
            
                    <div class='col-9'>
                        <h3>{{$product->name}}</h3>
                        <p>{{$product->shortDescription}}</p>
                        <p><sup>$</sup><span style='font-size:20px'>@php echo number_format($product->cost)@endphp</span> JMD</p>
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
        <div class='col-3 card p-3' >
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
                    <button class='buttons'>Confirm</button>
                </div>
            </form>
        </div>
    </div>
</x-layout>