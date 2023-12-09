<x-layout>
    <div class='mt-1 p-lg-5 p-1'>

        <div class='row' >
            
            <form class='col-lg-3 col-sm-12' action="/logout" method="POST" >
              
                <ul class="list-group">
                    <a href='/dashboard' style='text-decoration:none;'><li class="list-group-item"><svg xmlns="http://www.w3.org/2000/svg"  width="16" height="16" fill="currentColor" class="bi bi-person-circle" viewBox="0 0 16 16">
                        <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0"/>
                        <path fill-rule="evenodd" d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8m8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1"/>
                      </svg><span style='margin-left:5px;'>Profile</span></li></a>
                    <a href='/wishlist' style='text-decoration:none;'><li class="list-group-item"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-heart-fill" viewBox="0 0 16 16">
                        <path fill-rule="evenodd" d="M8 1.314C12.438-3.248 23.534 4.735 8 15-7.534 4.736 3.562-3.248 8 1.314"/>
                      </svg><span style='margin-left:5px;'>My Wishlist</span></li></a>
                      <a href='/orderHistory' style='text-decoration:none;'><li class="list-group-item"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-card-list" viewBox="0 0 16 16">
                        <path d="M14.5 3a.5.5 0 0 1 .5.5v9a.5.5 0 0 1-.5.5h-13a.5.5 0 0 1-.5-.5v-9a.5.5 0 0 1 .5-.5zm-13-1A1.5 1.5 0 0 0 0 3.5v9A1.5 1.5 0 0 0 1.5 14h13a1.5 1.5 0 0 0 1.5-1.5v-9A1.5 1.5 0 0 0 14.5 2z"/>
                        <path d="M5 8a.5.5 0 0 1 .5-.5h7a.5.5 0 0 1 0 1h-7A.5.5 0 0 1 5 8m0-2.5a.5.5 0 0 1 .5-.5h7a.5.5 0 0 1 0 1h-7a.5.5 0 0 1-.5-.5m0 5a.5.5 0 0 1 .5-.5h7a.5.5 0 0 1 0 1h-7a.5.5 0 0 1-.5-.5m-1-5a.5.5 0 1 1-1 0 .5.5 0 0 1 1 0M4 8a.5.5 0 1 1-1 0 .5.5 0 0 1 1 0m0 2.5a.5.5 0 1 1-1 0 .5.5 0 0 1 1 0"/>
                      </svg><span style='margin-left:5px;'>My Order History</span></li></a>
                      <button class='nav-button p-0 m-0 w-100' style='width:100%; text-align:left' type='submit'><li style='float:left; width:100%;' class="list-group-item"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-door-open-fill" viewBox="0 0 16 16">
                        <path d="M1.5 15a.5.5 0 0 0 0 1h13a.5.5 0 0 0 0-1H13V2.5A1.5 1.5 0 0 0 11.5 1H11V.5a.5.5 0 0 0-.57-.495l-7 1A.5.5 0 0 0 3 1.5V15zM11 2h.5a.5.5 0 0 1 .5.5V15h-1zm-2.5 8c-.276 0-.5-.448-.5-1s.224-1 .5-1 .5.448.5 1-.224 1-.5 1"/>
                      </svg><span style='margin-left:5px;'>Logout</span></li></button>
                  </ul>
            </form>
            <div class='col-9'>
                <form  action="/editProfile/{{auth()->user()->id}}" method='POST'>
                    <h2>Profile</h2>
                    <hr/>
                    @csrf
                    @method('PUT')
                    @if (session('success'))
                    <div class='alert alert-success mt-5' role='alert'>
                        {{ session('success') }}
                    </div>
                    @endif
                    @if (auth()->user()->type == '1')
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Name of business</label>
                        <input type="text" class="form-control"  name='name' value='{{auth()->user()->name}}' id="exampleInputEmail1" aria-describedby="emailHelp">
                      </div>
                    @else 
                        
                    @endif
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Email address</label>
                        <input type="email" class="form-control"  name='email' value="{{auth()->user()->email}}" id="exampleInputEmail1" aria-describedby="emailHelp">
                        <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
                        @error('email')
                        <small class='' style='color:red;'>{{$message}}</small>
                    @enderror
                      </div>
                    <div class="mb-3">
                      <label for="exampleInputEmail1" class="form-label">First Name</label>
                      <input type="text" class="form-control"  name='firstname' value="{{auth()->user()->firstname}}" id="exampleInputEmail1" aria-describedby="emailHelp">
                      <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
                      @error('firstname')
                      <small class='' style='color:red;'>{{$message}}</small>
                  @enderror
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Last Name</label>
                        <input type="text" class="form-control" name='lastname' value="{{auth()->user()->lastname}}" id="exampleInputEmail1" aria-describedby="emailHelp">
                        <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
                        @error('lastname')
                        <small class='' style='color:red;'>{{$message}}</small>
                    @enderror
                      </div>
                    
                    <div class="mb-3">
                      <label for="exampleInputPassword1" class="form-label">Password</label>
                      <input type="password" class="form-control" name='password' id="exampleInputPassword1">
                      @error('password')
                      <small class='' style='color:red;'>{{$message}}</small>
                  @enderror
                    </div>
        
                    <div class="mb-3">
                        <label for="exampleInputPassword1" class="form-label">Confirm Password</label>
                        <input type="password"  name='password_confirmation' class="form-control" id="exampleInputPassword1">
                      </div>
        
                    <button type="submit" class="buttons">Submit</button>
                  </form>
            </div>
        </div>
    </div>
</x-layout>