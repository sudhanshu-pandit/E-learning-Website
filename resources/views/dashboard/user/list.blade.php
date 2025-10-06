@extends('dashboard.user.layout')
 
@section('content')
    <div class="row">
        <div class="col-lg-11">
                <h2>User CRUD Table</h2>
        </div>
        <div class="col-lg-1">
            <a class="btn btn-success" href="{{ route('user.create') }}">Add</a>
        </div>
    </div>
 
    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif
 
    <table class="table table-bordered">
        <tr>
            <th>No</th>
            <th>Name</th>
            <th>Email</th>
            <th>is_admin</th>
            <th width="280px">Action</th>
        </tr>
        @php
            $i = 0;
        @endphp
        @foreach ($users as $user)
            <tr>
                <td>{{ ++$i }}</td>
                <td>{{ $user->name }}</td>
                <td>{{ $user->email }}</td>
                <td>{{ $user->is_admin }}</td>

                <td>
                    <form action="{{ route('user.destroy',$user->id) }}" method="POST">
                        <a class="btn btn-info" href="{{ route('user.show',$user->id) }}">Show</a>
                        <a class="btn btn-primary" href="{{ route('user.edit',$user->id) }}">Edit</a>
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger">Delete</button>
                    </form>
                </td>
            </tr>
        @endforeach
    </table>
@endsection