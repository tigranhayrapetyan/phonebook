@extends('main')
@section('content')


<style> 
img, svg {
  width: 30px;
}
</style>

<div class="container mt-3">
<h2 style="float:left"> Registered Contacts</h2>
<div class="form-search" style="float:right">
<form action="{{url('/arrange/search')}}" method="get" accept-charset="uft-8">
<div class="form-group" style="display:flex">
<input type="text" name="search" class="form-control" placeholder="Searche Contact">
<button type="submit" class="btn btn-success " >Search</button>
</div>
</form>
</div>
</div>
<table class="table">
  <thead class="table-success">
    <tr>
      <th scope="col">#</th>
      <th scope="col">Name</th>
      <th scope="col">Surname</th>
      <th scope="col">Date of Birth</th>
      <th scope="col">Education</th>
      <th scope="col">Profession</th>
      <th scope="col">Country</th>
      <th scope="col">Town</th>
      <th scope="col">Address</th>
      <th scope="col">Email</th>
      <th scope="col">Phone Number</th>
      <th scope="col">Information added by</th>      
    </tr>
  </thead>
  @foreach($contacts as $contact)
  <tbody>
    <tr>
      <th scope="row">{{$contact->id}}</th>
      <td>{{$contact->name}}</td>
      <td>{{$contact->surname}}</td>
      <td>{{$contact->birthdate}}</td>
      <td>{{$contact->education}}</td>
      <td>{{$contact->profession}}</td>
      <td>{{$contact->country}}</td>
      <td>{{$contact->town}}</td>
      <td>{{$contact->address}}</td>
      <td>{{$contact->email}}</td>
      <td>{{$contact->phone}}</td>
      <td>{{$contact->infoadduser}} - {{$contact->infoaddemail}}</td>
    </tr>
    
    @endforeach
  </tbody>
</table>

{{$contacts->render()}}

@endsection