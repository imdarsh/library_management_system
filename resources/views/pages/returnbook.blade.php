@extends('app.layouts')

@section('content')
    <div class="container">
    <h1 class="page-title">Return a Book</h1>
    <form action="/store" method="post">
        <div class="form-group">
            <label>Book Name</label>
            <input type="text" class="form-control">
        </div>
        <div class="form-group">
            <label>Issuer Name</label>
            <input type="text" class="form-control">
        </div>
        <div class="form-group">
            <label>Issue Date</label>
            <input type="text" id="datepicker" class="form-control">
        </div>
        <div class="form-group">
            <label>Due Date</label>
            <input type="text" id="datepicker2" class="form-control">
        </div>
        <div class="form-group">
            <label>Return Date</label>
            <input type="text" id="datepicker3" class="form-control">
        </div>
        <button class="btn btn-success">Return Book</button>
    </form>
    </div>
@endsection