@extends('app.layouts')

@section('content')
    <div class="container">
@if(count($duedate) > 0)
<h2 class="page-title">Due Date</h2>
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
    @foreach($duedate as $duedate) 
        <tr> 
        <td>{{$duedate->bookname}}</td>
        <td>{{$duedate->issuername}}</td>
        <td>{{$duedate->role}}</td>
        <td>{{$duedate->issuedate}}</td>
        <td>{{$duedate->duedate}}</td>
        <td>{{$duedate->status}}</td>
        <td><a href="/returnbook/{{$duedate->id}}" class="btn btn-primary">Return</a></td>
        </tr>
    @endforeach
    @else
        <h5 class="page-title">No Data Found</h5>
  @endif
  </tbody>
</table>
    </div>
@endsection