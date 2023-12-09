<x-layout>
    <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="true">
  <div class="carousel-indicators">
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
  </div>
  <div class="carousel-inner">
    <div class="carousel-item active" >
        <img src='{{ asset('/Banner 1.jpg') }}' style='height:600px'  class="d-block " alt="..." >
      </div>
      <div class="carousel-item ">
        <img src='{{ asset('/Banner 2.jpg') }}' style='height:600px'  class="d-block w-100" alt="...">
      </div>
      <div class="carousel-item  ">
        <img src='{{ asset('/Banner3.jpg') }}' style='height:600px' class="d-block w-100" alt="...">
      </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>
    {{-- <div id="carouselExample" class="carousel slide" style="width:100%;">
        <div class="carousel-inner" style="width:100%;">
          <div class="carousel-item active">
            <img src='{{ asset('/Banner 1.jpg') }}'  class="d-block w-100" alt="...">
          </div>
          <div class="carousel-item">
            <img src='{{ asset('/Banner 2.jpg') }}'  class="d-block w-100" alt="...">
          </div>
          <div class="carousel-item">
            <img src='{{ asset('/Banner 3.jpg') }}'  class="d-block w-100" alt="...">
          </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample" data-bs-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExample" data-bs-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
        </button>
    </div> --}}

    <div class='brands-section ' style='color:black;'>
        <div class='row text-align'>
            <div style='background-color:white;' class='brand-block text-center py-2'>
                <img  src='{{ asset('/Apple Category.jpg') }}' width='200' />
                <a href='/search/apple' class='m-0 p-0' style='text-decoration:none; color:black;'><h3>Apple</h3></a>
            </div>
            <div style='background-color:white;' class='brand-block text-center py-2'>
                <img  src='{{ asset('/Printer Ink Category.jpg') }}' width='200' />
                <a href='/search/ink' class='m-0 p-0' style='text-decoration:none; color:black;'><h3>Ink and Toner</h3></a>
            </div>
            <div style='background-color:white;' class='brand-block text-center py-2'>
                <img  src='{{ asset('/Audio & Video Category.jpg') }}' width='200' />
                <a href='/search/audio' class='m-0 p-0' style='text-decoration:none; color:black;'><h3>Video and Audio</h3></a>
            </div>
            <div style='background-color:white;' class='brand-block text-center py-2'>
                <img  src='{{ asset('/Computer Cable Category.jpg') }}' width='200' />
                <a href='/search/cables' class='m-0 p-0' style='text-decoration:none; color:black;'><h3>Computer Cables</h3></a>
            </div>
            <div style='background-color:white;' class='brand-block text-center py-2'>
                <img  src='{{ asset('/Computer Chair Category.jpg') }}' width='200' />
                <a href='/search/chair' class='m-0 p-0' style='text-decoration:none; color:black;'><h3>Computer Chair</h3></a>
            </div>
    
        </div>

        <div class='row text-align'>
            <div style='background-color:white;' class='brand-block text-center py-2'>
                <img  src='{{ asset('/Gaming Category.jpg') }}' width='200' />
                <a href='/search/gaming' class='m-0 p-0' style='text-decoration:none; color:black;'><h3>Gaming</h3></a>
            </div>
            <div style='background-color:white;' class='brand-block text-center py-2'>
                <img  src='{{ asset('/Hardware Category.jpg') }}' width='200' />
                <a href='/search/hardware' class='m-0 p-0' style='text-decoration:none; color:black;'><h3>Hardware</h3></a>
            </div>
            <div style='background-color:white;' class='brand-block text-center py-2'>
                <img  src='{{ asset('/Headset Category.jpg') }}' width='200' />
                <a href='/search/headsets' class='m-0 p-0' style='text-decoration:none; color:black;'><h3>Headsets</h3></a>
            </div>
            <div style='background-color:white;' class='brand-block text-center py-2'>
                <img  src='{{ asset('/Keyboard Category.jpg') }}' width='200' />
                <a href='/search/keyboard' class='m-0 p-0' style='text-decoration:none; color:black;'><h3>Keyboard</h3></a>
            </div>
            <div style='background-color:white;' class='brand-block text-center py-2'>
                <img  src='{{ asset('/Monitor Category.jpg') }}' width='200' />
                 <a href='/search/monitor' class='m-0 p-0' style='text-decoration:none; color:black;'><h3>Monitor</h3></a>
            </div>
        </div>
    </div>

    <div class='news-section '>
        <div class='row'>
        <div class='col-lg-6 col-sm-12 text-center'>
            <video class='vid'  controls>
                <source src="movie.mp4" type="video/mp4">
                <source src="movie.ogg" type="video/ogg">
                Your browser does not support the video tag.
            </video>
        </div>
        <div class='col-lg-6 col-sm-12 text-center'>
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