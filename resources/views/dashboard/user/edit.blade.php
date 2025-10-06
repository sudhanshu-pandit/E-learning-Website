@extends('dashboard.user.layout')
 
@section('content')
    <div class="row">
        <div class="col-lg-11">
            <h2>Update User</h2>
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
    <form method="post" action="{{ route('user.update') }}" >
        @method('PATCH')
        @csrf
        <div class="form-group">
            <label for="Name">Name:</label>
            <input type="text" class="form-control" id="Name" placeholder="Enter Name" name="name" value="{{ $user->name }}">
            <input type="hidden" value="{{$user->id}}" name="id">
        </div>
        <div class="form-group">
            <label for="Email">Email:</label>
            <input type="text" class="form-control" id="Email" placeholder="Enter Email" name="email" value="{{ $user->email }}">
        </div>
        <div class="form-group">
            <label for="is_admin">is_admin:</label>
            <input type="num" class="form-control" id="is_admin" placeholder="Enter is_admin" name="is_admin" value="{{ $user->is_admin }}">
        </div>
       
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
@endsection