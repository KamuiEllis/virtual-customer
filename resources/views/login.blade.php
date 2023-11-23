<x-logreg>
    <div class='contain'>
        <div class='row'>
            <div class='col-6 login-pic-holder' >
                <img src='{{ asset('/images/login-pic.jpg') }}' class='login-pic' />
            </div>
            
            <div class='col-sm-12 col-lg-6 p-3' >
                <h3 style='border-bottom:3px solid red; width:60px; padding-bottom:5px;' >Login</h3>
                <form action="/login" method="POST" style='margin-top:30px;'>
                    @if (session()->has('error'))
                    <p class='lead' style='color:rgb(222, 117, 117)18, 151, 151)'>
                        {{ session('error') }}
                    </p>
                @endif
                    @csrf
                    <div class="form-group" >
                        <label for="exampleInputEmail1" class='mb-2'>Email address</label>
                        <input type="email" class="form-control mb-2" name='email' id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
                        <small id="emailHelp" class="form-text text-muted ">We'll never share your email with anyone else.</small>
                      </div>
                      <div class="form-group mt-3 mb-3">
                        <label for="exampleInputEmail1" class='mb-2'>Password</label>
                        <input type="password" class="form-control mb-2" name='password' id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter password">
                        <small id="emailHelp" class="form-text text-muted ">We'll never share your password with anyone else.</small>
                      </div>
                      <a href='#' style='color:gray; margin-top:30px; font-size:13px;' >Forgot your Password? Click here!</a><br/>
                      <button type="submit" class="buttons">Login</button>
                </form>

         

                <a href='/register' class='mt-1' style='color:gray; font-size:13px;'>Don't have an account? Click here!</a>
            </div>

           
        </div>
    </div>
</x-logreg>