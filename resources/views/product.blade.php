<x-layout>
    <div class='m-5'>
        <div class='row mb-5'>
            <div class='col-7 text-center'>
                <img class='' src='{{ asset(env('ADMIN_URL').''.$product->image) }}' width='400'  />
            </div>
            <div class='col-5 card'>
                <div class='p-2 pt-3'>
                    <p style='margin:0;'>{{$product->brand}}</p>
                    <h2 style='color:rgb(219, 100, 100);'>{{$product->name}}</h2>
                    <img class='' src='{{asset('/stars.png')}}' width='100'  /> <p style='margin-left:6px;'>4.7</p>

                    <h3>$@php echo number_format($product->cost) @endphp</h3>
                    <p>{{$product->shortDescription}}</p>
                    <button class='buttons mt-5'>Add to Cart</button>
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