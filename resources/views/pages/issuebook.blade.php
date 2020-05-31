@extends('app.layouts')

@section('content')
    <div class="container">
    <h1 class="page-title">Issue a Book</h1>
    <form action="/issuebook/store" method="post">
    @csrf
        <div class="form-group">
            <label>Book Name</label>
            <input type="text" name="bookname" class="form-control">
        </div>
        <div class="form-group">
            <label>Issuer Name</label>
            <input type="text" name="issuername" class="form-control">
        </div>
        <div class="form-group">
            <label>Issuer Role</label>
            <select class="form-control" name="role">
                <option value="">Choose Role..</option>
                <option value="Student">Student</option>
                <option value="Teacher">Teacher</option>
            </select>
        </div>
        <div class="form-group">
            <label>Issue Date</label>
            <input type="text" id="datepicker" name="issuedate" class="form-control">
        </div>
        <div class="form-group">
            <label>Due Date</label>
            <input type="text" id="datepicker2" name="duedate" class="form-control">
        </div>
        <div class="form-group">
            <label>Book Status</label>
            <select class="form-control" name="status">
                <option value="">Choose Status..</option>
                <option value="Issued">Issued</option>
            </select>
        </div>
        <div class="form-group">
            <label>Return Date</label>
            <input type="text" id="datepicker3" name="returndate" class="form-control" disabled>
        </div>
        <button class="btn btn-success">Issue Book</button>
    </form>
    </div>
@endsection