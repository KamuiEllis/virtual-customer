<x-layout>
    <div class="jumbotron text-center" style=''>
        <div class=''>
            <h1>Welcome to Computer's Online</h1><br/>
            <a href='/inventory'><button class='buttons'>View our Inventory</button></a>
        </div><br/>
        <div class='row'>
        </div>
    </div>

    <div class='brands-section '>
        <div class='row text-align'>
            <div style='background-color:white;' class='brand-block text-center py-2'>
                <img  src='{{ asset('/Apple Category.jpg') }}' width='200' />
                <h3>Apple</h3>
            </div>
            <div style='background-color:white;' class='brand-block text-center py-2'>
                <img  src='{{ asset('/Printer Ink Category.jpg') }}' width='200' />
                <h3>Printer Ink</h3>
            </div>
            <div style='background-color:white;' class='brand-block text-center py-2'>
                <img  src='{{ asset('/Audio & Video Category.jpg') }}' width='200' />
                <h3>Video and Audio</h3>
            </div>
            <div style='background-color:white;' class='brand-block text-center py-2'>
                <img  src='{{ asset('/Computer Cable Category.jpg') }}' width='200' />
                <h3>Computer Cables</h3>
            </div>
            <div style='background-color:white;' class='brand-block text-center py-2'>
                <img  src='{{ asset('/Computer Chair Category.jpg') }}' width='200' />
                <h3>Computer Chair</h3>
            </div>
    
        </div>

        <div class='row text-align'>
            <div style='background-color:white;' class='brand-block text-center py-2'>
                <img  src='{{ asset('/Gaming Category.jpg') }}' width='200' />
                <h3>Gaming</h3>
            </div>
            <div style='background-color:white;' class='brand-block text-center py-2'>
                <img  src='{{ asset('/Hardware Category.jpg') }}' width='200' />
                <h3>Hardware</h3>
            </div>
            <div style='background-color:white;' class='brand-block text-center py-2'>
                <img  src='{{ asset('/Headset Category.jpg') }}' width='200' />
                <h3>Headsets</h3>
            </div>
            <div style='background-color:white;' class='brand-block text-center py-2'>
                <img  src='{{ asset('/Keyboard Category.jpg') }}' width='200' />
                <h3>Keyboards</h3>
            </div>
            <div style='background-color:white;' class='brand-block text-center py-2'>
                <img  src='{{ asset('/Monitor Category.jpg') }}' width='200' />
                <h3>Monitors</h3>
            </div>
        </div>
    </div>

    <div class='news-section '>
        <div class='row'>
        <div class='col-6 text-center'>
            <video width="520" height="240" controls>
                <source src="movie.mp4" type="video/mp4">
                <source src="movie.ogg" type="video/ogg">
                Your browser does not support the video tag.
            </video>
        </div>
        <div class='col-6 text-center'>
            <p class='news-text'>Latest Tech Review from Computer Sales</p>
        </div>
    </div>
    </div>


    @if (isset($data))
    <p>{{$data}}</p>
@endif

    <div class='deals-section'>
        <div class='inner-deals-section'>
            <div class='row'>
                <div class='deals-block row'>
                    <div class='col-4'>
                        <img  src='{{ asset('/images/laptop.jpg') }}' width='100' />
                    </div>
                    <div class='col-8'>
                        <p style='margin-bottom:0'>2017 Macbook Pro. 16GB RAM </p>
                        <p>4.5/5.0</p>
                        <b>$200</b>
                    </div>
                </div>
                <div class='deals-block row'>
                    <div class='col-4'>
                        <img  src='{{ asset('/images/laptop.jpg') }}' width='100' />
                    </div>
                    <div class='col-8'>
                        <p style='margin-bottom:0'>2017 Macbook Pro. 16GB RAM </p>
                        <p>4.5/5.0</p>
                        <b>$200</b>
                    </div>
                </div>
                <div class='deals-block row'>
                    <div class='col-4'>
                        <img  src='{{ asset('/images/laptop.jpg') }}' width='100' />
                    </div>
                    <div class='col-8'>
                        <p style='margin-bottom:0'>2017 Macbook Pro. 16GB RAM </p>
                        <p>4.5/5.0</p>
                        <b>$200</b>
                    </div>
                </div>
            </div>
            <div class='row'>
                <div class='deals-block row'>
                    <div class='col-4'>
                        <img  src='{{ asset('/images/laptop.jpg') }}' width='100' />
                    </div>
                    <div class='col-8'>
                        <p style='margin-bottom:0'>2017 Macbook Pro. 16GB RAM </p>
                        <p>4.5/5.0</p>
                        <b>$200</b>
                    </div>
                </div>
                <div class='deals-block row'>
                    <div class='col-4'>
                        <img  src='{{ asset('/images/laptop.jpg') }}' width='100' />
                    </div>
                    <div class='col-8'>
                        <p style='margin-bottom:0'>2017 Macbook Pro. 16GB RAM </p>
                        <p>4.5/5.0</p>
                        <b>$200</b>
                    </div>
                </div>
                <div class='deals-block row'>
                    <div class='col-4'>
                        <img  src='{{ asset('/images/laptop.jpg') }}' width='100' />
                    </div>
                    <div class='col-8'>
                        <p style='margin-bottom:0'>2017 Macbook Pro. 16GB RAM </p>
                        <p>4.5/5.0</p>
                        <b>$200</b>
                    </div>
                </div>
            </div>
            <div class='row'>
                <div class='deals-block row'>
                    <div class='col-4'>
                        <img  src='{{ asset('/images/laptop.jpg') }}' width='100' />
                    </div>
                    <div class='col-8'>
                        <p style='margin-bottom:0'>2017 Macbook Pro. 16GB RAM </p>
                        <p>4.5/5.0</p>
                        <b>$200</b>
                    </div>
                </div>
                <div class='deals-block row'>
                    <div class='col-4'>
                        <img  src='{{ asset('/images/laptop.jpg') }}' width='100' />
                    </div>
                    <div class='col-8'>
                        <p style='margin-bottom:0'>2017 Macbook Pro. 16GB RAM </p>
                        <p>4.5/5.0</p>
                        <b>$200</b>
                    </div>
                </div>
                <div class='deals-block row'>
                    <div class='col-4'>
                        <img  src='{{ asset('/images/laptop.jpg') }}' width='100' />
                    </div>
                    <div class='col-8'>
                        <p style='margin-bottom:0'>2017 Macbook Pro. 16GB RAM </p>
                        <p>4.5/5.0</p>
                        <b>$200</b>
                    </div>
                </div>
            </div>

            <div class='deals-link-container'>
                <a class='deals-link'>See More Deals</a>
              
            </div>
        </div>

    </div>
</x-layout>