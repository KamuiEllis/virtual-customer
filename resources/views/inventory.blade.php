<x-layout>

    <div class='row mt-1 p-lg-5'>
        <div class='col-2'>
            {{-- @if(isset($products[0]))
                <p style='border-bottom:1px solid grey; padding-bottom:10px;'>{{ $products[0]->productType }}</p>
            @else
                <p style='border-bottom:1px solid grey; padding-bottom:10px;'>Misc</p>
            @endif
            <div style='margin-bottom:10px;'>
                <h3>Price Range</h3>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="" >
                    <label class="form-check-label" for="flexCheckDefault">
                    10,000
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" value=""  >
                    <label class="form-check-label" for="flexCheckChecked">
                    20,000
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" value=""  >
                    <label class="form-check-label" for="flexCheckChecked">
                    30,000
                    </label>
                </div>
            </div>

            <div style='margin-bottom:10px;'>
                <h3>Condition</h3>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="" >
                    <label class="form-check-label" for="flexCheckDefault">
                    New
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" value=""  >
                    <label class="form-check-label" for="flexCheckChecked">
                    Used
                    </label>
                </div>
            </div>

            <div style='margin-bottom:10px;'>
                <h3>Brand</h3>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="" >
                    <label class="form-check-label" for="flexCheckDefault">
                        Beats By Dre
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" value=""  >
                    <label class="form-check-label" for="flexCheckChecked">
                        Panasonic
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" value=""  >
                    <label class="form-check-label" for="flexCheckChecked">
                        Sony
                    </label>
                </div>
            </div> --}}
        </div>
        <div class='col-12'>
            <div class='row'>
                <p class='col-lg-6 col-sm-12 mb-0 mt-3 num-items'>{{count($products)}} item(s) found</p>
                <div class='col-lg-6 col-sm-12 text-center pag'>
                       {{$products->links('pagination::bootstrap-4')}}
             </div>
            </div>
            <hr/>
            <div class=''>
            @foreach ($products as $product)
                <div class='product-container row m-2 mb-4' style='border:none; margin-bottom:10px;'>
                    <img class='col-lg-3 col-sm-12' src='{{ asset(env('ADMIN_URL').''.$product->image) }}'  />
                    <div class='col-lg-9 col-sm-12'>
                        <h2>{{$product->name}}</h2>
                        <p class='mb-0'>{{$product->created_at->format('F j, Y, g:i A')}}  |  By {{$product->brand}}</p>
                        <img class='' src='{{asset('/stars.png')}}' width='100'  />
                        <div >
                            <p style='margin-bottom:0;'><sup>$</sup><span style='font-size:20px; margin-bottom:0; margin-right:10px;'>@php echo number_format($product->cost)@endphp <span style='font-size:'>JMD</span></span>   <span style='color:green;'>{{$product->quantity}} left in stock</span></p> 
                        </div>
                        <p class='mb-3'>{{$product->shortDescription}}</p>
                        <div style='width:100%;' class='row'>
                            <a class='col-lg-6 col-sm-12' href='/products/{{$product->id}}'><button class='buttons' style='height:40px; box-shadow: rgba(0, 0, 0, 0.35) 0px 5px 15px;'>View</button></a>
                            <div class='col-lg-6 col-sm-12'>
                                <a href='#' class='pdf-link'>Download PDF</a>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
        </div>
    </div>
</x-layout>