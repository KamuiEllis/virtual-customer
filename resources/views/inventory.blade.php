<x-layout>

    <div class='row mt-1 p-5'>
        <div class='col-2'>
            @if(isset($products[0]))
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
            </div>
        </div>
        <div class='col-10'>
            <div class='row'>
            @foreach ($products as $product)
                <div class='product-container col-3 m-2' style='border:none;'>
                    <img class='' src='{{ asset(env('ADMIN_URL').''.$product->image) }}'  />
                    <div class=''>
                        <p><sup>$</sup><span style='font-size:20px'>@php echo number_format($product->cost)@endphp</span> JMD</p>
                        <p class='mb-3' style='min-height:100px;'>{{$product->shortDescription}}</p>
                        <div style='width:100%; text-align:center;'>
                            <a href='/products/{{$product->id}}'><button class='buttons' style='height:40px; box-shadow: rgba(0, 0, 0, 0.35) 0px 5px 15px;'>View</button></a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
        </div>
    </div>
</x-layout>