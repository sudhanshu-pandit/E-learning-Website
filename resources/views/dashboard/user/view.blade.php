@extends('dashboard.user.layout')
 
@section('content')
    <div class="row">
        <div class="col-lg-11">
                <h2>User CRUD Table</h2>
        </div>
        <div class="col-lg-1">
            <a class="btn btn-primary" href="{{ url('/admin-home/user') }}"> Back</a>
        </div>
    </div>
    <table class="table table-bordered">
        <tr>
            <th>Name:</th>
            <td>{{ $user->name }}</td>
        </tr>
        <tr>
            <th>Email:</th>
            <td>{{ $user->email }}</td>
        </tr>
        <tr>
            <th>is_admin:</th>
            <td>{{ $user->is_admin }}</td>
        </tr>
 
    </table>
@endsection