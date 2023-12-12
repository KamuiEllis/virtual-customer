<x-layout>
    <div class='m-5'>
       
        <div class='row mb-5'>
            @if (session('success'))
            <div class='alert alert-success mt-5' role='alert'>
                {{ session('success') }}
            </div>
            @endif
            <div class='col-lg-7 col-sm-12 text-center'>
                <img class='detail-image' src='{{ asset(env('ADMIN_URL').''.$product->image) }}'   />
            </div>
            <div class='col-lg-5 col-sm-12'>
                <div class='p-2 pt-3'>
                    <h3>{{$product->name}}</h3>
                    <p class='mb-0'>@php 
                            $date = new DateTime($product->created_at); 
                            echo $date->format('F j, Y, g:i A');
                        @endphp  |  By {{$product->brand}}</p>
                        <img class='' src='{{asset('/stars.png')}}' width='100'  /> | <span style='color:green'>{{$product->quantity}} in stock</span>

                    <h3>$@php echo number_format($product->cost) @endphp</h3>
                    {{-- <p>Quantity: {{$product->quantity}}</p> --}}
                    <p style='margin-bottom:5px;'>{{$product->shortDescription}}</p>
                    <a style='margin-bottom:10px; text-decoration:none;' href='/products/wishlist/{{$product->id}}'> <span><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="#007bff" class="bi bi-heart-fill" viewBox="0 0 16 16">
                      <path fill-rule="evenodd" d="M8 1.314C12.438-3.248 23.534 4.735 8 15-7.534 4.736 3.562-3.248 8 1.314"/>
                    </svg></span> Add to Wishlist</a>

                    <form class='mt-3' action='/products/addToCart/{{last(request()->segments())}}' method="POST">
                        @csrf
                        <div class="form-group">
                            <label for="exampleInputEmail1">Quanitity</label>
                            <input type="number" name='quantity' class="form-control quan-field" id="exampleInputEmail1" placeholder="0">
                            <small id="emailHelp" class="form-text text-muted">Enter amount needed</small>
                          </div>
                    
                        <button type='submit' class='buttons mt-3 mb-1'>Add to Cart</button>
                        {{-- <a  href='/products/wishlist/{{$product->id}}'><button class='buttons' style='box-shadow: rgba(0, 0, 0, 0.35) 0px 5px 15px;'>Add to Wishlist</button></a> --}}

                    </form>
                </div>
            </div>
        </div>

        <div class='row'>
            <div class='col-lg-7 col-sm-12 px-lg-5 py-3 card card-details'>
                <ul class="nav nav-pills text-center mb-3" style='justify-content:center;' >
                    <li class="nav-item mb-1">
                      <a class="nav-link active" style='border-radius:0px; background-color:#ff6e37; color:white; cursor:pointer;' data-bs-target="#collapseOne" >Product Details</a>
                    </li>
                    <li class="nav-item mx-3 mb-1">
                      <a class="nav-link" style='border-radius:0px; background-color:#ff6e37; color:white; cursor:pointer;' data-bs-target="#collapseTwo" >Unboxing</a>
                    </li>
                    <li class="nav-item mb-1">
                      <a class="nav-link" style='border-radius:0px; background-color:#ff6e37; color:white; cursor:pointer;' data-bs-target="#collapseThree">Reviews</a>
                    </li>
                  </ul>
                  
                  <div class="collapse show" id="collapseOne">
                    <div class="">
                      <p>{{$product->shortDescription}}</p>
                      <p>{{$product->description}}</p>

                      <p><b>Brand:</b> {{$product->brand}}</p>
                      <p><b>Weight:</b> {{$product->weight}} (LBS)</p>
                      <p><b>Model Number:</b> {{$product->partNumber}}</p>
                    </div>
                  </div>
                  <div class="collapse" id="collapseTwo">
                        
                        <div class=' text-center'>
                            <iframe class='detail-frame' src='{{$product->unboxing}}' frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                        </div>
    
                  </div>
                  <div class="collapse" id="collapseThree">
                    <p>
                      <a class="btn btn-primary" data-toggle="collapse" href="#collapseExample" role="button" aria-expanded="false" aria-controls="collapseExample">
                        Add Comment
                      </a>
                    </p>
                    <div class="collapse" id="collapseExample">
                      <div class="card card-body">
                        <form class="row" action='/comment/{{$product->id}}' method='POST'>
                          @csrf
                          <div class=' col-lg-6 col-sm-12'>
                            <div class="form-group" style='margin-bottom:20px;'>
                              <label for="exampleInputEmail1">Title</label>
                              <input type="text" class="form-control" id="exampleInputEmail1" name='title' aria-describedby="emailHelp" placeholder="Title of comment">
                              <small id="emailHelp" class="form-text text-muted">Enter comment title.</small>
                            </div>
    
                          
      
                            <div class="form-group">
                              <div class="form-group">
                                <label for="exampleInputEmail1">Message</label>
                                <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name='comment'></textarea>
                                <small id="emailHelp" class="form-text text-muted">Enter comment.</small>
                              </div>                       
                            </div>
                            <button type='submit' class='buttons' style='margin-top:20px;'>Submit</button>
                          </div>
                        
                        </form>                      </div>
                    </div>
                    

                    @foreach ($comments as $comment) 
                      <div style='margin-top:20px; padding:15px; box-shadow: rgba(0, 0, 0, 0.35) 0px 5px 15px;'>
                        <b>{{$comment->firstname}} {{$comment->lastname}}</b> <span style='font-size:12px;'> 
                        @php 
                          $date = new DateTime($comment->created_at); 
                          echo $date->format('F j, Y, g:i A');
                      @endphp</span>
                        <h3 class='mt-1 mb-2'>{{$comment->title}}</h3>
                        <p style='margin-bottom:0px; '>{{$comment->comment}}</p>

                        @if ($comment->customer == auth()->user()->id)
                        <a href='/comment/delete/{{$comment->comment_id}}' style='color:red; font-size:12px;' >Delete Comment</a>
                      @endif
                      </div>
                     
                    @endforeach
                  </div>
                  
            </div>

            <div class='col-lg-5 col-sm-12 px-lg-5 py-3'  >
                <div class=''>
                    <p>Similar Items</p>

                    @foreach ($related as $item)
                        <a href='/products/{{$item->id}}' style='text-decoration:none; color:black;'><div class='p-lg-4'>
                            <div class='row'>
                                <img src='{{ asset(env('ADMIN_URL').''.$item->image) }}' width='100' class='col-lg-3 col-sm-12' />
                                <div class='col-lg-9 col-sm-12'>
                                    <h4>{{$item->name}}</h4>
                                    <p class='mb-0'>@php 
                                        $date = new DateTime($product->created_at); 
                                        echo $date->format('F j, Y, g:i A');
                                    @endphp  |  By {{$product->brand}}</p>
                                                        <h3>$@php echo number_format($product->cost) @endphp</h3>

                                </div>
                            </div>
                        </div></a>
                    @endforeach
                </div>
            </div>
        </div>
        
    </div>

    <script>
        document.addEventListener("DOMContentLoaded", function() {
          var navLinks = document.querySelectorAll('.nav-pills .nav-link');
          navLinks.forEach(function(link) {
            link.addEventListener('click', function(event) {
              navLinks.forEach(lnk => {
                lnk.classList.remove('active');
                var target = document.querySelector(lnk.getAttribute('data-bs-target'));
                target.classList.remove('show');
              });
              this.classList.add('active');
              var target = document.querySelector(this.getAttribute('data-bs-target'));
              target.classList.add('show');
            });
          });
        });
        </script>
</x-layout>