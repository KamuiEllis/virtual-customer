<html lang="en">



<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous">
    </script>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <!-- Styles -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <!-- Option 1: Include in HTML -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-icons/1.8.1/font/bootstrap-icons.min.css">

    <title>Virtual Intelligence</title>
    {{-- <script src="{{ asset('/responsiveness.js') }}"></script> --}}
    <link rel="stylesheet" href="{{ asset('/css/index.css') }}">
    <link rel="stylesheet" href="{{ asset('/css/owl.carousel.min.css') }}">
    <script href="{{ asset('/owl.carousel.min.js') }}"></script>
    <script href="{{ asset('/main.js') }}"></script>
</head>

<body>
    <div class='row first-banner text-center pt-2'>
        <div class='col-lg-4 col-sm-1 text-center'>
            {{-- <p>109 Harbour St. Kingston</p> --}}
        </div>
        <div class='col-lg-3 col-sm-1 text-center'>
            {{-- <p>109 Harbour St. Kingston</p> --}}
        </div>
        @auth
        {{-- <div style='width:100%;'>
            <form   style='margin-bottom:0px; width:100%; ' action="/logout" method="POST" >
                @csrf

                <a class='col-3 nav-button ' href='/orderHistory'> <p><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="#52555b" class="bi bi-clock-history" viewBox="0 0 16 16">
                    <path d="M8.515 1.019A7 7 0 0 0 8 1V0a8 8 0 0 1 .589.022zm2.004.45a7.003 7.003 0 0 0-.985-.299l.219-.976c.383.086.76.2 1.126.342zm1.37.71a7.01 7.01 0 0 0-.439-.27l.493-.87a8.025 8.025 0 0 1 .979.654l-.615.789a6.996 6.996 0 0 0-.418-.302zm1.834 1.79a6.99 6.99 0 0 0-.653-.796l.724-.69c.27.285.52.59.747.91l-.818.576zm.744 1.352a7.08 7.08 0 0 0-.214-.468l.893-.45a7.976 7.976 0 0 1 .45 1.088l-.95.313a7.023 7.023 0 0 0-.179-.483m.53 2.507a6.991 6.991 0 0 0-.1-1.025l.985-.17c.067.386.106.778.116 1.17l-1 .025zm-.131 1.538c.033-.17.06-.339.081-.51l.993.123a7.957 7.957 0 0 1-.23 1.155l-.964-.267c.046-.165.086-.332.12-.501zm-.952 2.379c.184-.29.346-.594.486-.908l.914.405c-.16.36-.345.706-.555 1.038l-.845-.535m-.964 1.205c.122-.122.239-.248.35-.378l.758.653a8.073 8.073 0 0 1-.401.432l-.707-.707z"/>
                    <path d="M8 1a7 7 0 1 0 4.95 11.95l.707.707A8.001 8.001 0 1 1 8 0z"/>
                    <path d="M7.5 3a.5.5 0 0 1 .5.5v5.21l3.248 1.856a.5.5 0 0 1-.496.868l-3.5-2A.5.5 0 0 1 7 9V3.5a.5.5 0 0 1 .5-.5"/>
                  </svg> Order History</p></a>

                <a class='col-3 nav-button ' href='/cart'> <p><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="#52555b" class="bi bi-bag" viewBox="0 0 16 16">
                    <path d="M8 1a2.5 2.5 0 0 1 2.5 2.5V4h-5v-.5A2.5 2.5 0 0 1 8 1m3.5 3v-.5a3.5 3.5 0 1 0-7 0V4H1v10a2 2 0 0 0 2 2h10a2 2 0 0 0 2-2V4zM2 5h12v9a1 1 0 0 1-1 1H3a1 1 0 0 1-1-1z"/>
                  </svg> Cart <span style='background-color: rgb(235, 119, 119);
                  border-radius: 5px;
                  padding: 0px 9px;'>{{auth()->user()->cart}}</span></p></a>

                  <a class='col-3 nav-button row' href='/profile'> <p><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="#52555b" class="bi bi-person-fill" viewBox="0 0 16 16">
                    <path d="M3 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6"/>
                  </svg> Profile</p></a>

                  <button class='nav-button col-3' style='' type='submit'><a class=' nav-button row' href='/login'> <p><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-box-arrow-right" viewBox="0 0 16 16">
                    <path fill-rule="evenodd" d="M10 12.5a.5.5 0 0 1-.5.5h-8a.5.5 0 0 1-.5-.5v-9a.5.5 0 0 1 .5-.5h8a.5.5 0 0 1 .5.5v2a.5.5 0 0 0 1 0v-2A1.5 1.5 0 0 0 9.5 2h-8A1.5 1.5 0 0 0 0 3.5v9A1.5 1.5 0 0 0 1.5 14h8a1.5 1.5 0 0 0 1.5-1.5v-2a.5.5 0 0 0-1 0z"/>
                    <path fill-rule="evenodd" d="M15.854 8.354a.5.5 0 0 0 0-.708l-3-3a.5.5 0 0 0-.708.708L14.293 7.5H5.5a.5.5 0 0 0 0 1h8.793l-2.147 2.146a.5.5 0 0 0 .708.708l3-3z"/>
                  </svg> Sign Out</p></a></button>

                  <a class='nav-button row blue-but' href='/register'> <p><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="rgb(255, 255, 255)" class="bi bi-tools" viewBox="0 0 16 16">
                    <path d="M1 0 0 1l2.2 3.081a1 1 0 0 0 .815.419h.07a1 1 0 0 1 .708.293l2.675 2.675-2.617 2.654A3.003 3.003 0 0 0 0 13a3 3 0 1 0 5.878-.851l2.654-2.617.968.968-.305.914a1 1 0 0 0 .242 1.023l3.27 3.27a.997.997 0 0 0 1.414 0l1.586-1.586a.997.997 0 0 0 0-1.414l-3.27-3.27a1 1 0 0 0-1.023-.242L10.5 9.5l-.96-.96 2.68-2.643A3.005 3.005 0 0 0 16 3c0-.269-.035-.53-.102-.777l-2.14 2.141L12 4l-.364-1.757L13.777.102a3 3 0 0 0-3.675 3.68L7.462 6.46 4.793 3.793a1 1 0 0 1-.293-.707v-.071a1 1 0 0 0-.419-.814zm9.646 10.646a.5.5 0 0 1 .708 0l2.914 2.915a.5.5 0 0 1-.707.707l-2.915-2.914a.5.5 0 0 1 0-.708M3 11l.471.242.529.026.287.445.445.287.026.529L5 13l-.242.471-.026.529-.445.287-.287.445-.529.026L3 15l-.471-.242L2 14.732l-.287-.445L1.268 14l-.026-.529L1 13l.242-.471.026-.529.445-.287.287-.445.529-.026z"/>
                  </svg> Online Tech Support Mon - Fri 8am - 5pm</p></a>


                  <a class='nav-button row useless' style='float:left; margin:0 2px;' href='/login'> <p style='border-bottom:2px solid black; width:101px; padding:0; margin-left:331px'>Tech News Today</p></a>
                  <a class='nav-button row useless' style='float:left; margin:0 2px;' href='/login'> <p> | About Us |</p></a>
                  <a class='nav-button row useless' style='float:left; margin:0 2px;' href='/login'> <p> Contact Us</p></a>
            </form>
        </div> --}}
        <form class='' style='width:100%;' action="/logout" method="POST" >
 
                @csrf
                {{-- <a class=' nav-button row' href='/login'><button  style='' type='submit'> <p><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-box-arrow-right" viewBox="0 0 16 16">
                    <path fill-rule="evenodd" d="M10 12.5a.5.5 0 0 1-.5.5h-8a.5.5 0 0 1-.5-.5v-9a.5.5 0 0 1 .5-.5h8a.5.5 0 0 1 .5.5v2a.5.5 0 0 0 1 0v-2A1.5 1.5 0 0 0 9.5 2h-8A1.5 1.5 0 0 0 0 3.5v9A1.5 1.5 0 0 0 1.5 14h8a1.5 1.5 0 0 0 1.5-1.5v-2a.5.5 0 0 0-1 0z"/>
                    <path fill-rule="evenodd" d="M15.854 8.354a.5.5 0 0 0 0-.708l-3-3a.5.5 0 0 0-.708.708L14.293 7.5H5.5a.5.5 0 0 0 0 1h8.793l-2.147 2.146a.5.5 0 0 0 .708.708l3-3z"/>
                  </svg> Sign Out</p></button></a> --}}
                  <button class='nav-button row' type='submit'  style='float:right; margin:0 10px;' > <p><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-box-arrow-right" viewBox="0 0 16 16">
                    <path fill-rule="evenodd" d="M10 12.5a.5.5 0 0 1-.5.5h-8a.5.5 0 0 1-.5-.5v-9a.5.5 0 0 1 .5-.5h8a.5.5 0 0 1 .5.5v2a.5.5 0 0 0 1 0v-2A1.5 1.5 0 0 0 9.5 2h-8A1.5 1.5 0 0 0 0 3.5v9A1.5 1.5 0 0 0 1.5 14h8a1.5 1.5 0 0 0 1.5-1.5v-2a.5.5 0 0 0-1 0z"/>
                    <path fill-rule="evenodd" d="M15.854 8.354a.5.5 0 0 0 0-.708l-3-3a.5.5 0 0 0-.708.708L14.293 7.5H5.5a.5.5 0 0 0 0 1h8.793l-2.147 2.146a.5.5 0 0 0 .708.708l3-3z"/>
                  </svg> Logout</p></button>

            <a class='nav-button row' style='float:right; margin:0 10px;' href='/login'> <p><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="#52555b" class="bi bi-rss" viewBox="0 0 16 16">
                <path d="M14 1a1 1 0 0 1 1 1v12a1 1 0 0 1-1 1H2a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1zM2 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2z"/>
                <path d="M5.5 12a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0m-3-8.5a1 1 0 0 1 1-1c5.523 0 10 4.477 10 10a1 1 0 1 1-2 0 8 8 0 0 0-8-8 1 1 0 0 1-1-1m0 4a1 1 0 0 1 1-1 6 6 0 0 1 6 6 1 1 0 1 1-2 0 4 4 0 0 0-4-4 1 1 0 0 1-1-1"/>
              </svg> Feedback</p></a>

              <a class='nav-button row' style='float:right; margin:0 10px;' href='/dashboard'> <p><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-person-lines-fill" viewBox="0 0 16 16">
                <path d="M6 8a3 3 0 1 0 0-6 3 3 0 0 0 0 6m-5 6s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1zM11 3.5a.5.5 0 0 1 .5-.5h4a.5.5 0 0 1 0 1h-4a.5.5 0 0 1-.5-.5m.5 2.5a.5.5 0 0 0 0 1h4a.5.5 0 0 0 0-1zm2 3a.5.5 0 0 0 0 1h2a.5.5 0 0 0 0-1zm0 3a.5.5 0 0 0 0 1h2a.5.5 0 0 0 0-1z"/>
              </svg> Dashboard</p></a>

              <a class='nav-button row blue-but' style='float:right; margin:0 10px; background:#4461ab; color:rgb(255, 255, 255); height: 30px' href='/register'> <p><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="rgb(255, 255, 255)" class="bi bi-tools" viewBox="0 0 16 16">
                <path d="M1 0 0 1l2.2 3.081a1 1 0 0 0 .815.419h.07a1 1 0 0 1 .708.293l2.675 2.675-2.617 2.654A3.003 3.003 0 0 0 0 13a3 3 0 1 0 5.878-.851l2.654-2.617.968.968-.305.914a1 1 0 0 0 .242 1.023l3.27 3.27a.997.997 0 0 0 1.414 0l1.586-1.586a.997.997 0 0 0 0-1.414l-3.27-3.27a1 1 0 0 0-1.023-.242L10.5 9.5l-.96-.96 2.68-2.643A3.005 3.005 0 0 0 16 3c0-.269-.035-.53-.102-.777l-2.14 2.141L12 4l-.364-1.757L13.777.102a3 3 0 0 0-3.675 3.68L7.462 6.46 4.793 3.793a1 1 0 0 1-.293-.707v-.071a1 1 0 0 0-.419-.814zm9.646 10.646a.5.5 0 0 1 .708 0l2.914 2.915a.5.5 0 0 1-.707.707l-2.915-2.914a.5.5 0 0 1 0-.708M3 11l.471.242.529.026.287.445.445.287.026.529L5 13l-.242.471-.026.529-.445.287-.287.445-.529.026L3 15l-.471-.242L2 14.732l-.287-.445L1.268 14l-.026-.529L1 13l.242-.471.026-.529.445-.287.287-.445.529-.026z"/>
              </svg> Online Tech Support Mon - Fri 8am - 5pm</p></a>


              <a class='nav-button row useless' style='float:left;  margin:0 2px;' href='/login'> <p style='border-bottom:2px solid black; width:137px; padding:0; margin-left:331px'>Tech News Today</p></a>
              <a class='nav-button row useless' style='float:left; margin:0 2px;' href='/login'> <p> | About Us |</p></a>
              <a class='nav-button row useless' style='float:left; margin:0 2px;' href='/login'> <p> Contact Us</p></a>
        </form>
        @else
            <div class='' style='width:100%;'>
               
                <a class='nav-button row' style='float:right; margin:0 10px;' href='/register'> <p><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="#52555b" class="bi bi-person-add" viewBox="0 0 16 16">
                    <path d="M12.5 16a3.5 3.5 0 1 0 0-7 3.5 3.5 0 0 0 0 7m.5-5v1h1a.5.5 0 0 1 0 1h-1v1a.5.5 0 0 1-1 0v-1h-1a.5.5 0 0 1 0-1h1v-1a.5.5 0 0 1 1 0m-2-6a3 3 0 1 1-6 0 3 3 0 0 1 6 0M8 7a2 2 0 1 0 0-4 2 2 0 0 0 0 4"/>
                    <path d="M8.256 14a4.474 4.474 0 0 1-.229-1.004H3c.001-.246.154-.986.832-1.664C4.484 10.68 5.711 10 8 10c.26 0 .507.009.74.025.226-.341.496-.65.804-.918C9.077 9.038 8.564 9 8 9c-5 0-6 3-6 4s1 1 1 1z"/>
                </svg> Register</p></a>
                <a class='nav-button row' style='float:right; margin:0 10px;' href='/login'> <p><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="#52555b" class="bi bi-person" viewBox="0 0 16 16">
                    <path d="M8 8a3 3 0 1 0 0-6 3 3 0 0 0 0 6m2-3a2 2 0 1 1-4 0 2 2 0 0 1 4 0m4 8c0 1-1 1-1 1H3s-1 0-1-1 1-4 6-4 6 3 6 4m-1-.004c-.001-.246-.154-.986-.832-1.664C11.516 10.68 10.289 10 8 10c-2.29 0-3.516.68-4.168 1.332-.678.678-.83 1.418-.832 1.664z"/>
                </svg> Login</p></a>
                <a class='nav-button row' style='float:right; margin:0 10px;' href='/login'> <p><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="#52555b" class="bi bi-rss" viewBox="0 0 16 16">
                    <path d="M14 1a1 1 0 0 1 1 1v12a1 1 0 0 1-1 1H2a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1zM2 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2z"/>
                    <path d="M5.5 12a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0m-3-8.5a1 1 0 0 1 1-1c5.523 0 10 4.477 10 10a1 1 0 1 1-2 0 8 8 0 0 0-8-8 1 1 0 0 1-1-1m0 4a1 1 0 0 1 1-1 6 6 0 0 1 6 6 1 1 0 1 1-2 0 4 4 0 0 0-4-4 1 1 0 0 1-1-1"/>
                  </svg> Feedback</p></a>

                  <a class='nav-button row blue-but' href='/register'> <p><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="rgb(255, 255, 255)" class="bi bi-tools" viewBox="0 0 16 16">
                    <path d="M1 0 0 1l2.2 3.081a1 1 0 0 0 .815.419h.07a1 1 0 0 1 .708.293l2.675 2.675-2.617 2.654A3.003 3.003 0 0 0 0 13a3 3 0 1 0 5.878-.851l2.654-2.617.968.968-.305.914a1 1 0 0 0 .242 1.023l3.27 3.27a.997.997 0 0 0 1.414 0l1.586-1.586a.997.997 0 0 0 0-1.414l-3.27-3.27a1 1 0 0 0-1.023-.242L10.5 9.5l-.96-.96 2.68-2.643A3.005 3.005 0 0 0 16 3c0-.269-.035-.53-.102-.777l-2.14 2.141L12 4l-.364-1.757L13.777.102a3 3 0 0 0-3.675 3.68L7.462 6.46 4.793 3.793a1 1 0 0 1-.293-.707v-.071a1 1 0 0 0-.419-.814zm9.646 10.646a.5.5 0 0 1 .708 0l2.914 2.915a.5.5 0 0 1-.707.707l-2.915-2.914a.5.5 0 0 1 0-.708M3 11l.471.242.529.026.287.445.445.287.026.529L5 13l-.242.471-.026.529-.445.287-.287.445-.529.026L3 15l-.471-.242L2 14.732l-.287-.445L1.268 14l-.026-.529L1 13l.242-.471.026-.529.445-.287.287-.445.529-.026z"/>
                  </svg> Online Tech Support Mon - Fri 8am - 5pm</p></a>


                  <a class='nav-button row useless' style='float:left;  margin:0 2px;' href='/login'> <p style='border-bottom:2px solid black; width:137px; padding:0; margin-left:331px'>Tech News Today</p></a>
                  <a class='nav-button row useless' style='float:left; margin:0 2px;' href='/login'> <p> | About Us |</p></a>
                  <a class='nav-button row useless' style='float:left; margin:0 2px;' href='/login'> <p> Contact Us</p></a>
            </div>
        @endif    
    </div>
    <div class='first-nav-container '>
        
        {{-- <div class=''>
            <img src='{{ asset('/logo.png') }}' class='logo' />
        </div>

        <div style=''>
            <input type='text' name='text' placeholder="Search Product, Services" class='main-field' /> 
        </div> --}}

        <nav class="navbar navbar-expand-lg ">
            <div class="custom-container-fluid">
              <!-- Logo -->
              <a class="navbar-brand" href="/">
                <img src='{{ asset('/logo.png') }}' class='logo' />
              </a>
          
              <!-- Text bar -->
              <div class="search-field justify-content-center" id="navbarText">
                <form class="d-flex" method="POST" action='/search'>
                    @csrf
                  <input class="form-control mt-2 main-field" name='text'  type="search" placeholder="Search for Products" aria-label="Search">
                  <button type='submit' class='btn btn-primary search-button'><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-search" viewBox="0 0 16 16">
                    <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0"/>
                  </svg></button>
                </form>
              </div>
          
              
            </div>

            <div class='text-center ' style='width:100%;'>
                <div class='row'>
                <a class="second-nav-link col-3 " href="#">
                    <svg xmlns="http://www.w3.org/2000/svg" style='margin-left: 22px;' width="20" height="20" fill="#007bff" class="bi bi-search" viewBox="0 0 16 16">
                        <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0"/>
                      </svg><br/>
                    Compare
              </a>
              <a class="second-nav-link col-5 " style='margin-left:10px;' href="/wishlist">
                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="#007bff" class="bi bi-heart-fill" viewBox="0 0 16 16">
                    <path fill-rule="evenodd" d="M8 1.314C12.438-3.248 23.534 4.735 8 15-7.534 4.736 3.562-3.248 8 1.314"/>
                  </svg><br/>
                Wish List
                </a>
            <a class="second-nav-link col-3" href="/cart">
                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="#007bff" class="bi bi-bag" viewBox="0 0 16 16">
                    <path d="M8 1a2.5 2.5 0 0 1 2.5 2.5V4h-5v-.5A2.5 2.5 0 0 1 8 1m3.5 3v-.5a3.5 3.5 0 1 0-7 0V4H1v10a2 2 0 0 0 2 2h10a2 2 0 0 0 2-2V4zM2 5h12v9a1 1 0 0 1-1 1H3a1 1 0 0 1-1-1z"/>
                </svg>  @auth<sub style='color:#4461ab;'>{{auth()->user()->cart}}</sub>@endif<br/>
                Cart 
                </a>
             </div>
          </div>
          </nav>

         
       
        {{-- <form method="POST" action='/search' class='col-10 d-flex align-items-center flex-grow-1'>
            @csrf
                <input type='text' name='text' placeholder="Search Product, Services" class='main-field' /> 
        </form> --}}
    </div>
    <div class='banner text-center pt-2' >
        <div class="dropdown drop">
            <a class=" dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false" style='color:white;'>
              See Categories
            </a>
            <ul class="dropdown-menu">
              <li><a class="dropdown-item" href="#">Consumer and Enterprise</a></li>
              <li><a class="dropdown-item" href="#">Enterprise Hardware</a></li>
              <li><a class="dropdown-item" href="#">Computer Parts </a></li>
              <li><a class="dropdown-item" href="#">Computer Accessories </a></li>
              <li><a class="dropdown-item" href="#">Network Cabling Solutions  </a></li>
            </ul>
          </div>

        <ul class='banner-list'>
            <li class='li list-1'>Consumer and Enterprise 
                <div class='computer-dropdown' style='color:black;'>
                    <div style='100%' class='row'>
                        <div class='col-9 p-5'>
                            <div class='' style='display:flex; '>
                                <div class='' style='flex:1;'>
                                    <img src='{{ asset('/monitor.jpg') }}' width='150' />
                                </div>
                                <div class=' ' style='flex:1;'>
                                    <img src='{{ asset('/Tablet Category.jpg') }}' width='150' />
                                </div>
                                <div class=' ' style='flex:1;'>
                                    <img src='{{ asset('/lappy.jpg') }}' width='150' />
                                </div>
                            </div>
                            <hr/>
                            <div style='width:100%; text-align:left;' class='row'>
                                <div class='col-3'>
                                    <h4 class='mt-5' style='border-bottom:2px solid black; padding-bottom:2px; width:300px;' >Also in Consumer and Enterprise</h4>
                                    <p><a href='/search/laptop' style='text-decoration:none; color:black;'>Laptops</a></p>
                                    <p><a href='/search/all' style='text-decoration:none; color:black;'>Desktops & All in One PC</p></a>
                                    <p><a href='/search/tablets' style='text-decoration:none; color:black;'>Tablets</a></p>
                                    <p><a href='/search/printers' style='text-decoration:none; color:black;'>Printers</a></p>
                                    <p><a href='/search/ink' style='text-decoration:none; color:black;'>Inks and Toners</a></p>
                                    <p><a href='/search/monitor' style='text-decoration:none; color:black;'>Monitors</a></p>
                                    <p><a href='/search/gaming' style='text-decoration:none; color:black;'>Gaming Computers</a></p>
                                    <p><a href='/search/phones' style='text-decoration:none; color:black;'>Phones</a></p>
                                </div>

                                <div class='col-9'>
                                    <img src='{{ asset('/gold.jpg') }}' class='mt-4' width='350' style='float:right; '/>
                                </div>
                            </div>
                        </div>

                        <div class='col-3' style='background-color:rgb(240, 240, 240);'>
                            <div style='background-color:white; height:80px; width:100%; padding:10px; padding-top:10px; font-size:30px; margin-top:10px; border-left:5px solid green;'>
                                Special Offers
                            </div>
                        </div>
                    </div>
                </div>
            </li>
            <li class='li list-2'>Enterprise Hardware  
                <div class='hardware-dropdown' style='color:black;'>
                    <div style='100%' class='row'>
                        <div class='col-9 p-5'>
                            <div class='' style='display:flex; '>
                                <div class='' style='flex:1;'>
                                    <img src='{{ asset('/switch.jpg') }}' width='150' />
                                </div>
                                <div class=' ' style='flex:1;'>
                                    <img src='{{ asset('/access.jpg') }}' width='150' />
                                </div>
                                <div class=' ' style='flex:1;'>
                                    <img src='{{ asset('/servers.jpg') }}' width='150' />
                                </div>
                            </div>
                            <hr/>
                            <div style='width:100%; text-align:left;' class='row'>
                                <div class='col-3'>
                                    <h4 class='mt-5' style='border-bottom:2px solid black; padding-bottom:2px; width:300px;' >Also in Consumer and Enterprise</h4>

                                    <p><a href='/search/switches' style='text-decoration:none; color:black;'>Switches</a></p>
                                    <p><a href='/search/router' style='text-decoration:none; color:black;'>Router and Wireless Technology</a></p>
                                    <p><a href='/search/servers' style='text-decoration:none; color:black;'>Servers</a></p>
                                    <p><a href='/search/access' style='text-decoration:none; color:black;'>Access Points</a></p>
                                    <p><a href='/search/storage' style='text-decoration:none; color:black;'>Storage</a></p>
                                </div>

                                <div class='col-9'>
                                    <img src='{{ asset('/hub.jpg') }}' class='mt-4' width='350' style='float:right; '/>
                                </div>
                            </div>
                        </div>

                        <div class='col-3' style='background-color:rgb(240, 240, 240);'>
                            <div style='background-color:white; height:80px; width:100%; padding:10px; padding-top:10px; font-size:30px; margin-top:10px; border-left:5px solid green;'>
                                Special Offers
                            </div>
                        </div>
                    </div>
                </div>
            </li>
            <li class='li list-3'>Computer Parts 
                <div class='parts-dropdown' style='color:black;'>
                    <h2 class='mt-3'>Coming Soon</h2>                        
                </div>
            </li>
            <li class='li list-4'>Computer Accessories
                <div class='accessories-dropdown' style='color:black;'>
                    <div style='100%' class='row'>
                        <div class='col-9 p-5'>
                            <div class='' style='display:flex; '>
                                <div class='' style='flex:1;'>
                                    <img src='{{ asset('/bag.jpg') }}' width='150' />
                                </div>
                                <div class=' ' style='flex:1;'>
                                    <img src='{{ asset('/kayboard.jpg') }}' width='150' />
                                </div>
                                <div class=' ' style='flex:1;'>
                                    <img src='{{ asset('/speaker.jpg') }}' width='150' />
                                </div>
                            </div>
                            <hr/>
                            <div style='width:100%; text-align:left;' class='row'>
                                <div class='col-3'>
                                    <h4 class='mt-5' style='border-bottom:2px solid black; padding-bottom:2px; width:300px;' >Also in Consumer and Enterprise</h4>

                                    <p><a href='/search/bags' style='text-decoration:none; color:black;'>Laptop Bags</a></p>
                                    <p><a href='/search/keyboard' style='text-decoration:none; color:black;'>Keyboard</a></p>
                                    <p><a href='/search/speakers' style='text-decoration:none; color:black;'>Speakers</a></p>
                                    <p><a href='/search/headphones' style='text-decoration:none; color:black;'>Head Phones</a></p>
                                    <p><a href='/search/cable' style='text-decoration:none; color:black;'>Computer Cable Adapters</a></p>
                                </div>

                                <div class='col-9'>
                                    <img src='{{ asset('/headset.jpg') }}' class='mt-4' width='350' style='float:right; '/>
                                </div>
                            </div>
                        </div>

                        <div class='col-3' style='background-color:rgb(240, 240, 240);'>
                            <div style='background-color:white; height:80px; width:100%; padding:10px; padding-top:10px; font-size:30px; margin-top:10px; border-left:5px solid green;'>
                                Special Offers
                            </div>
                        </div>
                    </div>
                </div>
            </li>
            <li class='li list-5'>Network Cabling Solutions 
                <div class='network-dropdown' style='color:black;'>
                    <h2 class='mt-3'>Coming Soon</h2>                        
                </div>
            </li>
            {{-- <li class='li'>UPS</li> --}}
            <li class='li list-6'>More... 
                <div class='more-dropdown' style='color:black;'>
                    <h2 class='mt-3'>Coming Soon</h2>                        
                </div>
            </li>
            {{-- <li class='li'>Cash Registers & Point of Sale Solutions <div class='computer-dropdown text-center'>
                <div class='container row m-auto'>
                    <div class='col-3'>
                        <img src='{{ asset('/Computer Desk Category.jpg') }}' width='100' />
                    </div>
                    <div class='col-3'>
                        <img src='{{ asset('/Computer Desk Category.jpg') }}' width='100' />
                    </div>
                    <div class='col-3'>
                        <img src='{{ asset('/Computer Desk Category.jpg') }}' width='100' />
                    </div>
                    <div class='col-3'>
                        <img src='{{ asset('/Computer Desk Category.jpg') }}' width='100' />
                    </div>
                </div>
              
                <hr/>
                <h2 style="margin-bottom:50px;">Also in Computers</h2>
                <div class='row'>
                    <div class='col-3'>
                        <p>ABOUT</p>
                        <ul style='list-style:none; padding:0;'>
                            <li>LINK</li>
                            <li>LINK</li>
                            <li>LINK</li>
                            <li>LINK</li>
                            <li>LINK</li>
                            <li>LINK</li>
                            <li>LINK</li>
                        </ul>
                    </div>
                    <div class='col-3'>
                        <p>MY ACCOUNT</p>
                        <ul style='list-style:none; padding:0;'>
                            <li>LINK</li>
                            <li>LINK</li>
                            <li>LINK</li>
                            <li>LINK</li>
                            <li>LINK</li>
                            <li>LINK</li>
                            <li>LINK</li>
                        </ul>
                    </div>
                    <div class='col-3'>
                        <p>MY ACCOUNT</p>
                        <ul style='list-style:none; padding:0;'>
                            <li>LINK</li>
                            <li>LINK</li>
                            <li>LINK</li>
                            <li>LINK</li>
                            <li>LINK</li>
                            <li>LINK</li>
                            <li>LINK</li>
                        </ul>
                    </div>
                    <div class='col-3'>
                        <p>MY ACCOUNT</p>
                        <ul style='list-style:none; padding:0;'>
                            <li>LINK</li>
                            <li>LINK</li>
                            <li>LINK</li>
                            <li>LINK</li>
                            <li>LINK</li>
                            <li>LINK</li>
                            <li>LINK</li>
                        </ul>
                    </div>
   
                </div>
            </div></li> --}}
            {{-- <li class='li'>Drones <div class='computer-dropdown text-center'>
                <div class='container row m-auto'>
                    <div class='col-3'>
                        <img src='{{ asset('/Computer Desk Category.jpg') }}' width='100' />
                    </div>
                    <div class='col-3'>
                        <img src='{{ asset('/Computer Desk Category.jpg') }}' width='100' />
                    </div>
                    <div class='col-3'>
                        <img src='{{ asset('/Computer Desk Category.jpg') }}' width='100' />
                    </div>
                    <div class='col-3'>
                        <img src='{{ asset('/Computer Desk Category.jpg') }}' width='100' />
                    </div>
                </div>
              
                <hr/>
                <h2 style="margin-bottom:50px;">Also in Computers</h2>
                <div class='row'>
                    <div class='col-3'>
                        <p>ABOUT</p>
                        <ul style='list-style:none; padding:0;'>
                            <li>LINK</li>
                            <li>LINK</li>
                            <li>LINK</li>
                            <li>LINK</li>
                            <li>LINK</li>
                            <li>LINK</li>
                            <li>LINK</li>
                        </ul>
                    </div>
                    <div class='col-3'>
                        <p>MY ACCOUNT</p>
                        <ul style='list-style:none; padding:0;'>
                            <li>LINK</li>
                            <li>LINK</li>
                            <li>LINK</li>
                            <li>LINK</li>
                            <li>LINK</li>
                            <li>LINK</li>
                            <li>LINK</li>
                        </ul>
                    </div>
                    <div class='col-3'>
                        <p>MY ACCOUNT</p>
                        <ul style='list-style:none; padding:0;'>
                            <li>LINK</li>
                            <li>LINK</li>
                            <li>LINK</li>
                            <li>LINK</li>
                            <li>LINK</li>
                            <li>LINK</li>
                            <li>LINK</li>
                        </ul>
                    </div>
                    <div class='col-3'>
                        <p>MY ACCOUNT</p>
                        <ul style='list-style:none; padding:0;'>
                            <li>LINK</li>
                            <li>LINK</li>
                            <li>LINK</li>
                            <li>LINK</li>
                            <li>LINK</li>
                            <li>LINK</li>
                            <li>LINK</li>
                        </ul>
                    </div>
   
                </div>
            </div></li> --}}

           
        </ul>
       
    </div>
    <div class=''>
        {{$slot}}
    </div>
    <div class='footer'>
        <div class='row '>
            <div class='col-lg-4 col-sm-12'>
                <img src='{{ asset('/white.png') }}'   width='200'/>
                <p style='text-align:left; ' class='mt-3'>At Computers Online, we believe that
                    technology should be accessible and enjoyable for everyone. That's why we've made it our mission to provide out customers with the best possible tech solutions and support referrals. </p>
                <div style='width:100%; text-align:left; color:#ff6e37;'>
                     <p>Read More</p>
                </div>

            </div>
            <div class='col-lg-2 col-sm-12 ml-4 px-5' style='text-align:left; border-left:2px solid white;'>
                <p>MY ACCOUNT</p>
                <ul style='list-style-type: none; padding:0; '>
                    <li>Dashboard</li>
                </ul>
            </div>

            <div class='col-lg-2 col-sm-12 ml-4 px-5' style='text-align:left; border-left:2px solid white;'>
                <p>LEGAL DOCUMENTS</p>
                <ul style='list-style-type: none; padding:0; '>
                    <li>Privacy Policy</li>
                    <li>EULA</li>
                    <li>Terms of Use</li>
                </ul>
            </div>

            <div class='col-lg-4 col-sm-12 ml-4 px-lg-5' style='text-align:left;'>
                <img src='{{ asset('/lasco.png') }}' class='footer-img' />

            </div>
        </div>
    </div>
</body>