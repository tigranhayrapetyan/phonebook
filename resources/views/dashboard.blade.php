
  @extends('main')
  @section('content')

  <div class="container"> 
   <br>
    <div class="col-md-10 col-md-offset-10" style="border-radius: 15px;">
      <h2>Please fill the information about Contact person</h2>
      <hr>
      <form action="{{route('upload-contact')}}" method="post">
        @if(Session::has('success'))
        <div class="div alert alert-success">{{Session::get('success')}}</div>    
        @endif
        @if(Session::has('fail'))
        <div class="div alert alert-danger">{{Session::get('fail')}}</div>    
        @endif
        @csrf 
        <div class="form-group">
          <label for="name">Name</label>
          <input type="text" class="form-control" placeholder="Enter FullName" name="name" value="{{old('name')}}">
        <span class="text-danger"> @error('name') {{$message}} @enderror  </span>
        </div>
        <div class="form-group">
          <label for="surname">Surname</label>
          <input type="text" class="form-control" placeholder="Enter FullSurname" name="surname" value="{{old('surname')}}">
        <span class="text-danger"> @error('surname') {{$message}} @enderror  </span>
        </div>
        <div class="form-group">
          <label for="birthdate">Birth date</label>
          <input type="date" class="form-control" placeholder="Select Birth Date" name="birthdate" value="{{old('birthdate')}}">
        <span class="text-danger"> @error('birthdate') {{$message}} @enderror  </span>
        </div>
        <div class="form-group">
          <label for="education">Education</label>
          <input type="text" class="form-control" placeholder="Fill Education" name="education" value="{{old('education')}}">
        <span class="text-danger"> @error('education') {{$message}} @enderror  </span>
        </div>
        <div class="form-group">
          <label for="profession">Profession</label>
          <input type="text" class="form-control" placeholder="Fill Profession" name="profession" value="{{old('profession')}}">
        <span class="text-danger"> @error('profession') {{$message}} @enderror  </span>
        </div>
        <div class="form-group">
          <label for="country">Country</label>
          <input type="text" class="form-control" placeholder="Fill Country" name="country" value="{{old('country')}}">
        <span class="text-danger"> @error('country') {{$message}} @enderror  </span>
        </div>
        <div class="form-group">
          <label for="town">Town</label>
          <input type="text" class="form-control" placeholder="Fill Town" name="town" value="{{old('town')}}">
        <span class="text-danger"> @error('town') {{$message}} @enderror  </span>
        </div>
        <div class="form-group">
          <label for="address">Address</label>
          <input type="text" class="form-control" placeholder="Fill Town" name="address" value="{{old('address')}}">
        <span class="text-danger"> @error('address') {{$message}} @enderror  </span>
        </div>
       <div class="form-group">
          <label for="email">Email Address</label>
          <input type="email" class="form-control" placeholder="Enter Email Address" name="email" value="{{old('email')}}">
          <span class="text-danger"> @error('email') {{$message}} @enderror  </span>
        </div>
        <div class="form-group">
          <label for="phone">Phone Number</label>
          <input type="tel" class="form-control" placeholder="099-99-99-99" name="phone" value="{{old('phone')}}">
          <span class="text-danger"> @error('phone') {{$message}} @enderror  </span>
        </div>
        <hr>
        <div class="form-group">
          <label for="infoadduser">Information is added by uesr</label>
          <input type="text" class="form-control" placeholder="Information aded by User" name="infoadduser" value="{{$data->name}}" >
          <span class="text-danger"> @error('infoadduser') {{$message}} @enderror  </span>
        </div>
        <div class="form-group">
          <label for="infoaddemail">Information aded by Email Address</label>
          <input type="email" class="form-control" placeholder="Information aded by Email Address" name="infoaddemail" value="{{$data->email}}">
          <span class="text-danger"> @error('infoaddemail') {{$message}} @enderror  </span>
        </div>


        <hr>
        <div class="form-group">
          <button class="btn btn-block btn-success" type="submit">Upload</button>
          <hr>
      </form>
    </div>
  </div>
</div>


















  <!-- <div class="container"> 
    <div class="row">
      <div class="col-md-4 col-md-offset-4" style="margin-top:20px">
        <h4>Welcome to dashboard</h4>
        <hr>
        <table class="table">
          <thead> 
            <th> Name</th>
            <th> Email</th>
            <th> Action</th>
          </thead>
          <tbody>
            <tr> 
              <td> {{$data->name}} </td>
              <td> {{$data->email}} </td>
              <td> <a href="logout">Logout</a> </td>
            </tr>
          </tbody>
        </table>
      </div>
    </div>
</div> -->





@endsection
