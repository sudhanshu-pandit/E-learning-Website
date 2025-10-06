@extends('dashboard.user.layout')
 
@section('content')
    <div class="row">
        <div class="col-lg-11">
            <h2>Add New User</h2>
        </div>
        <div class="col-lg-1">
            <a class="btn btn-primary" href="{{ url('/admin-home/user') }}"> Back</a>
        </div>
    </div>
 
    @if ($errors->any())
        <div class="alert alert-danger">
            <strong>Whoops!</strong> There were some problems with your input.<br><br>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <form action="{{ route('user.store') }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="Name">Name:</label>
            <input type="text" class="form-control" id="Name" placeholder="Enter Name" name="Name">
        </div>
        <div class="form-group">
            <label for="Email">Email:</label>
            <input type="text" class="form-control" id="Email" placeholder="Enter Email" name="Email">
        </div>
        <div class="form-group">
            <label for="is_admin">is_admin:</label>
            <textarea class="form-control" id="is_admin" name="is_admin" rows="1" placeholder="Enter is_admin"></textarea>
        </div>
        <div class="form-group">
            <label for="Password">Password:</label>
            <textarea class="form-control" id="password" name="password" rows="2" placeholder="Enter password"></textarea>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
@endsection