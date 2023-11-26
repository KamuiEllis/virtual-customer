<x-layout>
    <div class='m-5'>
       
        <div class='row mb-5'>
            @if (session('success'))
            <div class='alert alert-success mt-5' role='alert'>
                {{ session('success') }}
            </div>
            @endif
            <div class='col-7 text-center'>
                <img class='' src='{{ asset(env('ADMIN_URL').''.$product->image) }}' width='400'  />
            </div>
            <div class='col-5 card'>
                <div class='p-2 pt-3'>
                    <p style='margin:0;'>{{$product->brand}}</p>
                    <h2 style='color:rgb(219, 100, 100);'>{{$product->name}}</h2>
                    <img class='' src='{{asset('/stars.png')}}' width='100'  /> <p style='margin-left:6px;'>4.7</p>

                    <h3>$@php echo number_format($product->cost) @endphp</h3>
                    <p>Quantity: {{$product->quantity}}</p>
                    <p>{{$product->shortDescription}}</p>

                    <form action='/products/addToCart/{{last(request()->segments())}}' method="POST">
                        @csrf
                        <div class="form-group">
                            <label for="exampleInputEmail1">Quanitity</label>
                            <input type="number" name='quantity' class="form-control" id="exampleInputEmail1" placeholder="Enter how much you'd like to purchase">
                            <small id="emailHelp" class="form-text text-muted">Enter about needed</small>
                          </div>
                    
                        <button type='submit' class='buttons mt-5'>Add to Cart</button>
                    </form>
                </div>
            </div>
        </div>

        <h2>About this item</h2>
        <p class='mt-3'>
            {{$product->description}}
        </p>

        <h2>Comments</h2>
    </div>
</x-layout>