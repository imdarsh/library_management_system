@extends('app.layouts')

@section('content')
    <div class="container">
    @if(count($issuedbook) > 0)
    <h1 class="page-title">Issued Records</h1>
<table class="table">
  <thead class="thead-light">
    <tr>
      <th scope="col">Book Name</th>
      <th scope="col">Issuer Name</th>
      <th scope="col">Role</th>
      <th scope="col">Issue Date</th>
      <th scope="col">Due Date</th>
      <th scope="col">Book Status</th>
      <th scope="col">Return Book</th>
    </tr>
  </thead>
  <tbody>
  
    @foreach($issuedbook as $issuedbook)
        <tr> 
        <td>{{$issuedbook->bookname}}</td>
        <td>{{$issuedbook->issuername}}</td>
        <td>{{$issuedbook->role}}</td>
        <td>{{$issuedbook->issuedate}}</td>
        <td>{{$issuedbook->duedate}}</td>
        <td>{{$issuedbook->status}}</td>
        <td><a href="/returnbook/{{$issuedbook->id}}" class="btn btn-primary">Return</a></td>
        </tr>
    @endforeach
    @else
        <h5 class="page-title">No Data Found</h5>
  @endif
  </tbody>
</table>
  <hr>
  @if(count($returnedbook) > 0)
    <h1 class="page-title">Returned Records</h1>
<table class="table">
  <thead class="thead-light">
    <tr>
      <th scope="col">Book Name</th>
      <th scope="col">Issuer Name</th>
      <th scope="col">Role</th>
      <th scope="col">Issue Date</th>
      <th scope="col">Due Date</th>
      <th scope="col">Book Status</th>
      <th scope="col">Return Date</th>
      
    </tr>
  </thead>
  <tbody>
    @foreach($returnedbook as $returnedbook)
        <tr> 
        <td>{{$returnedbook->bookname}}</td>
        <td>{{$returnedbook->issuername}}</td>
        <td>{{$returnedbook->role}}</td>
        <td>{{$returnedbook->issuedate}}</td>
        <td>{{$returnedbook->duedate}}</td>
        <td>{{$returnedbook->status}}</td>
        <td>{{$returnedbook->returndate}}</td>
        </tr>
    @endforeach
    
    @else
        <h5 class="page-title">No Data Found</h5>
  @endif
  </tbody>
</table>
    </div>
@endsection