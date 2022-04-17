
    @extends('main')
    @section('content')
    
    <div class="container">
      <div class="row">
        <div class="col-md-10 col-md-offset-10" style="border-radius: 15px;">
        <h2>To upload the new phone number into the phonebook you need to sign in </h2>
        <br>
          <hr>
          <h4>Log In</h4>
          <form action="{{route('login-user')}}" method="post">
            @if(Session::has('success'))
            <div class="div alert alert-success">{{Session::get('success')}}</div>    
            @endif
            @if(Session::has('fail'))
            <div class="div alert alert-danger">{{Session::get('fail')}}</div>    
            @endif
            @csrf
            <div class="form-group">
              <label for="email">Email Address</label>
              <input type="text" class="form-control" placeholder="Enter Email Address" name="email" value="{{old('email')}}">
              <span class="text-danger"> @error('email') {{$message}} @enderror  </span>
            </div>
            <div class="form-group">
              <label for="password">Password</label>
              <input type="password" class="form-control" placeholder="Enter Password" name="password" value="{{old('password')}}">
              <span class="text-danger"> @error('password') {{$message}} @enderror  </span>
            </div>
         <hr>
        <br>
        <div class="form-group">
          <button class="btn btn-block btn-success" type="submit">Log In</button>
          <hr>
          <a href="registration">New User !! Register Here.</a>
        </form>
      </div>
  </div>
</div>



<!-- <body class="text-center" data-new-gr-c-s-check-loaded="14.1056.0" data-gr-ext-installed="">
    <form class="form-signin">
      <img class="mb-4" src="https://getbootstrap.com/docs/4.0/assets/brand/bootstrap-solid.svg" alt="" width="72" height="72">
      <h1 class="h3 mb-3 font-weight-normal">Please sign in</h1>
           
      <form action="{{route('login-user')}}" method="post">
            @if(Session::has('success'))
            <div class="div alert alert-success">{{Session::get('success')}}</div>    
            @endif
            @if(Session::has('fail'))
            <div class="div alert alert-danger">{{Session::get('fail')}}</div>    
            @endif
            @csrf
            <div class="form-group">
              <label for="email">Email Address</label>
              <input type="text" class="form-control" placeholder="Enter Email Address" name="email" value="{{old('email')}}">
              <span class="text-danger"> @error('email') {{$message}} @enderror  </span>
            </div>
            <div class="form-group">
              <label for="password">Password</label>
              <input type="password" class="form-control" placeholder="Enter Password" name="password" value="{{old('password')}}">
              <span class="text-danger"> @error('password') {{$message}} @enderror  </span>
            </div>
        <hr> -->
        <!-- <br>
        <div class="form-group">
          <button class="btn btn-block btn-success" type="submit">Log In</button>
          <hr>
          <a href="registration">New User !! Register Here.</a>
        </form> -->




      <!-- <div class="checkbox mb-3">
        <label>
          <input type="checkbox" value="remember-me"> Remember me
        </label>
      </div>
      <button class="btn btn-lg btn-primary btn-block" type="submit">Sign in</button>
      <p class="mt-5 mb-3 text-muted">© 2017-2018</p>
    </form> -->
  

<!-- </body> -->



@endsection

