<x-logreg>
    <div class='contain2'>
        <div class='row'>
            <div class='col-12' >
                <h3 style='border-bottom:3px solid #007bff; width:60px; padding-bottom:5px;'>Register</h3>
                <form action="/register" method="POST" style=''>
                    @csrf

                    <div class="form-check mt-3 mb-3">
                      <input type="checkbox" class="form-check-input" name='type' id="exampleCheck1">
                      <label class="form-check-label" for="exampleCheck1">I am a business owner</label>
                      @error('type')
                      <small class='' style='color:red;'>{{$message}}</small>
                    @enderror
                    </div>

                    
                    <div class="form-group" id='companyField' style='display:none;'>
                      <label for="exampleInputEmail1" class='mb-2'>Name of Business</label>
                      <input type="text" class="form-control mb-2" name='name' value='' id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Company Name">
                      <small id="emailHelp" class="form-text text-muted ">Enter the name of your company.</small>
                      @error('name')
                        <small class='' style='color:red;'>{{$message}}</small>
                      @enderror
                    </div>

                    <div class="form-group" >
                        <label for="exampleInputEmail1" class='mb-2'>Firstname</label>
                        <input type="text" class="form-control mb-2" name='firstname' id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Firstname">
                        <small id="emailHelp" class="form-text text-muted ">Enter your firstname.</small>
                        @error('firstname')
                          <small class='' style='color:red;'>{{$message}}</small>
                        @enderror
                      </div>

                      <div class="form-group mt-3" >
                        <label for="exampleInputEmail1" class='mb-2'>Lastname</label>
                        <input type="text" class="form-control mb-2" name='lastname' id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Lastname">
                        <small id="emailHelp" class="form-text text-muted ">Enter your lastname.</small>
                        @error('lastname')
                          <small class='' style='color:red;'>{{$message}}</small>
                        @enderror
                      </div>

                      <div class="form-group mt-3" >
                        <label for="exampleInputEmail1" class='mb-2'>Email address</label>
                        <input type="email" class="form-control mb-2" name='email' id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
                        <small id="emailHelp" class="form-text text-muted ">We'll never share your email with anyone else.</small>
                        @error('email')
                          <small class='' style='color:red;'>{{$message}}</small>
                        @enderror
                      </div>

                      <div class="form-group mt-3 mb-3">
                        <label for="exampleInputEmail1" class='mb-2'>Password</label>
                        <input type="password" class="form-control mb-2" name='password' id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter password">
                        <small id="emailHelp" class="form-text text-muted ">We'll never share your password with anyone else.</small>
                        @error('password')
                          <small class='' style='color:red;'>{{$message}}</small>
                        @enderror
                      </div>

                      <div class="form-group mt-3">
                        <label for="exampleInputEmail1" class='mb-2'>Confirm Password</label>
                        <input type="password" class="form-control mb-2" name="password_confirmation" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter password">
                        <small id="emailHelp" class="form-text text-muted ">We'll never share your password with anyone else.</small>
                      </div>

                      
                    
                      <button type="submit" class="buttons">Register</button>
                </form>

         

                <a href='/login' class='mt-1' style='color:gray; font-size:13px;'>Already have an account? Click here!</a>
            </div>

           
        </div>
    </div>

    <script>

        let checker = document.getElementById('exampleCheck1');
        let companyName = document.getElementById('companyField');



        checker.addEventListener('click', function(e) {
          if(e.target.checked == true) {
            companyName.style.display = 'block';
          } else {
            companyName.style.display = 'none';
          }
        })

        
    </script>
</x-logreg>