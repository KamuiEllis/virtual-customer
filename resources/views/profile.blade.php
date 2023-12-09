<x-layout>
    <div class='row mt-1 p-lg-5'>
        <form class='col-lg-6 col-sm-12' action="/editProfile/{{auth()->user()->id}}" method='POST'>
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
</x-layout>