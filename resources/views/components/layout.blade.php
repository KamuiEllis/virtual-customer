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
        <div class='col-3 text-center'>
            {{-- <p>109 Harbour St. Kingston</p> --}}
        </div>
        <div class='col-6 text-center'>
            <p>109 Harbour St. Kingston</p>
        </div>
        @auth
        <div class='col-3'>
            <form  class='row ' style='margin-bottom:0px; float:right; width:100%;' action="/logout" method="POST" >
                @csrf
                <a class='col-4 nav-button ' href='/cart'> <p><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-bag" viewBox="0 0 16 16">
                    <path d="M8 1a2.5 2.5 0 0 1 2.5 2.5V4h-5v-.5A2.5 2.5 0 0 1 8 1m3.5 3v-.5a3.5 3.5 0 1 0-7 0V4H1v10a2 2 0 0 0 2 2h10a2 2 0 0 0 2-2V4zM2 5h12v9a1 1 0 0 1-1 1H3a1 1 0 0 1-1-1z"/>
                  </svg> Cart <span style='background-color: rgb(235, 119, 119);
                  border-radius: 5px;
                  padding: 0px 9px;'>{{auth()->user()->cart}}</span></p></a>

                  <a class='col-4 nav-button row' href='/'> <p><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-person-fill" viewBox="0 0 16 16">
                    <path d="M3 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6"/>
                  </svg> Profile</p></a>

                  <button class='nav-button col-4' style='' type='submit'><a class=' nav-button row' href='/login'> <p><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-box-arrow-right" viewBox="0 0 16 16">
                    <path fill-rule="evenodd" d="M10 12.5a.5.5 0 0 1-.5.5h-8a.5.5 0 0 1-.5-.5v-9a.5.5 0 0 1 .5-.5h8a.5.5 0 0 1 .5.5v2a.5.5 0 0 0 1 0v-2A1.5 1.5 0 0 0 9.5 2h-8A1.5 1.5 0 0 0 0 3.5v9A1.5 1.5 0 0 0 1.5 14h8a1.5 1.5 0 0 0 1.5-1.5v-2a.5.5 0 0 0-1 0z"/>
                    <path fill-rule="evenodd" d="M15.854 8.354a.5.5 0 0 0 0-.708l-3-3a.5.5 0 0 0-.708.708L14.293 7.5H5.5a.5.5 0 0 0 0 1h8.793l-2.147 2.146a.5.5 0 0 0 .708.708l3-3z"/>
                  </svg> Sign Out</p></a></button>
            </form>
        </div>
        @else
            <div class='row col-3'>
                <a class='col-4 nav-button row' href='/register'> <p><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-person-add" viewBox="0 0 16 16">
                    <path d="M12.5 16a3.5 3.5 0 1 0 0-7 3.5 3.5 0 0 0 0 7m.5-5v1h1a.5.5 0 0 1 0 1h-1v1a.5.5 0 0 1-1 0v-1h-1a.5.5 0 0 1 0-1h1v-1a.5.5 0 0 1 1 0m-2-6a3 3 0 1 1-6 0 3 3 0 0 1 6 0M8 7a2 2 0 1 0 0-4 2 2 0 0 0 0 4"/>
                    <path d="M8.256 14a4.474 4.474 0 0 1-.229-1.004H3c.001-.246.154-.986.832-1.664C4.484 10.68 5.711 10 8 10c.26 0 .507.009.74.025.226-.341.496-.65.804-.918C9.077 9.038 8.564 9 8 9c-5 0-6 3-6 4s1 1 1 1z"/>
                </svg> Register</p></a>
                <a class='col-4 nav-button row' href='/login'> <p><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-person" viewBox="0 0 16 16">
                    <path d="M8 8a3 3 0 1 0 0-6 3 3 0 0 0 0 6m2-3a2 2 0 1 1-4 0 2 2 0 0 1 4 0m4 8c0 1-1 1-1 1H3s-1 0-1-1 1-4 6-4 6 3 6 4m-1-.004c-.001-.246-.154-.986-.832-1.664C11.516 10.68 10.289 10 8 10c-2.29 0-3.516.68-4.168 1.332-.678.678-.83 1.418-.832 1.664z"/>
                </svg> Login</p></a>
            </div>
        @endif    
    </div>
    <div class='container row first-nav-container'>
        
        <div class='col-2'>
            <img src='{{ asset('/logo.png') }}' class='logo' width='200'/>
        </div>
        <form method="POST" action='/search' class='col-10 d-flex align-items-center flex-grow-1'>
            @csrf
                <input type='text' name='text' placeholder="Search Product, Services" class='main-field' /> 
        </form>
    </div>
    <div class='banner text-center pt-2' >
        <p>Call to action highlight banner freeshipping on tech via TARA | knutsford</p>
    </div>
    <div class=''>
        {{$slot}}
    </div>
    <div class='footer'>
        <div class='row text-center'>
            <div class='col-2'>
                <p>ABOUT</p>
                <ul style='list-style-type: none; padding:0;'>
                    <li>LINK</li>
                    <li>LINK</li>
                    <li>LINK</li>
                    <li>LINK</li>
                    <li>LINK</li>
                    <li>LINK</li>
                    <li>LINK</li>
                </ul>
            </div>
            <div class='col-2'>
                <p>MY ACCOUNT</p>
                <ul style='list-style-type: none; padding:0;'>
                    <li>LINK</li>
                    <li>LINK</li>
                    <li>LINK</li>
                    <li>LINK</li>
                    <li>LINK</li>
                    <li>LINK</li>
                    <li>LINK</li>
                </ul>
            </div>
            <div class='col-2'>
                <p>FAQ</p>
                <ul style='list-style-type: none; padding:0;'>
                    <li>LINK</li>
                    <li>LINK</li>
                    <li>LINK</li>
                    <li>LINK</li>
                    <li>LINK</li>
                    <li>LINK</li>
                    <li>LINK</li>
                </ul>
            </div>
            <div class='col-2'>
                <p>LEGAL DOCUMENTS</p>
                <ul style='list-style-type: none; padding:0;'>
                    <li>LINK</li>
                    <li>LINK</li>
                    <li>LINK</li>
                    <li>LINK</li>
                    <li>LINK</li>
                    <li>LINK</li>
                    <li>LINK</li>
                </ul>
            </div>
            <div class='col-4'>
                <img src='{{ asset('/logo.png') }}' class='logo' style='width:300px; height:150px'/>
                <img src='{{ asset('/images/payment.png') }}' class='logo' style='width:300px; height:200px'/>

            </div>
        </div>

        <div>
            <img src='{{ asset('/white-logo.png') }}' class='logo' style='width:300px; height:200px'/>
            <p style='margin-bottom:0;'>Computers Online copyrighted 2023 |</p>
            <p>Powered by <b style='color:red;'>Darkzide Studios</b></p>
        </div>
    </div>
</body>