
@extends('main')

@section('content')
<div class="container"> 
  <!-- <div class="row"> -->
    <div class="col-md-10 col-md-offset-10" style="border-radius: 15px;">
      <h4>Registration</h4>
      <hr>
      <form action="{{route('register-user')}}" method="post">
        @if(Session::has('success'))
        <div class="div alert alert-success">{{Session::get('success')}}</div>    
        @endif
        @if(Session::has('fail'))
        <div class="div alert alert-danger">{{Session::get('fail')}}</div>    
        @endif
        @csrf 
        <div class="form-group">
          <label for="name">Fulle Name</label>
          <input type="text" class="form-control" placeholder="Enter FullName" name="name" value="{{old('name')}}">
        <span class="text-danger"> @error('name') {{$message}} @enderror  </span>
        </div>
        <div class="form-group">
          <label for="email">Email Address</label>
          <input type="text" class="form-control" placeholder="Enter Email Address" name="email" value="{{old('email')}}">
          <span class="text-danger"> @error('email') {{$message}} @enderror  </span>
        </div>
        <div class="form-group">
          <label for="password">Password</label>
          <input type="password" class="form-control" placeholder="Enter Password" name="password" value="">
          <span class="text-danger"> @error('password') {{$message}} @enderror  </span>
        </div>
        <div class="form-group">
          <label for="password">Repeat the Password</label>
          <input type="password" class="form-control" placeholder="Enter Password" name="password2" value="">
          <span class="text-danger"> @error('password2') {{$message}} @enderror  </span>
        </div>
        <hr>
        <div class="form-group">
          <button class="btn btn-block btn-success" type="submit">Register</button>
          <hr>
          <a href="login">Already Registered ? Log In Here</a>
      </form>
    </div>
  </div>
</div>


@endsection