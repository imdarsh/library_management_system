@extends('app.layouts')

@section('content')
    <div class="container">
    @if(count($report) > 0)
    <h1 class="page-title">Returned Records</h1>
<table class="table">
  <thead class="thead-light">
    <tr>
      <th scope="col">Issuer Name</th>
      <th scope="col">Book Name</th>
      <th scope="col">Role</th>
      <th scope="col">Issue Date</th>
      <th scope="col">Due Date</th>
      <th scope="col">Book Status</th>
      <th scope="col">Return Date</th>
      
    </tr>
  </thead>
  <tbody>
    @foreach($report as $report)
        <tr> 
        <td>{{$report->issuername}}</td>
        <td>{{$report->bookname}}</td>
        <td>{{$report->role}}</td>
        <td>{{$report->issuedate}}</td>
        <td>{{$report->duedate}}</td>
        <td>{{$report->status}}</td>
        <td>{{$report->returndate}}</td>
        </tr>
    @endforeach
    @else
        <h5 class="page-title">No Data Found</h5>
  @endif
  </tbody>
</table>
    </div>
@endsection