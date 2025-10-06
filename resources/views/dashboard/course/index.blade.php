@extends('dashboard.user.layout')

@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Course CRUD Table</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-success" href="{{ route('course.create') }}"> Create New Product</a>
            </div>
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
            <th>Image</th>
            <th>Name</th>
            <th>Description</th>
            <th width="280px">Action</th>
        </tr> 
        @foreach ($course as $courses)
        <tr>
            <td>{{ ++$i }}</td>
            <td><img src="/image/{{ $courses->image }}" width="100px"></td>
            <td>{{ $courses->name }}</td>
            <td>{{ $courses->description }}</td>
            <td>
                <form action="{{ route('course.destroy',$courses->id) }}" method="POST">
     
                    <a class="btn btn-info" href="{{ route('course.show',$courses->id) }}">Show</a>
      
                    <a class="btn btn-primary" href="{{ route('course.edit',$courses->id) }}">Edit</a>
     
                    @csrf
                    @method('DELETE')
        
                    <button type="submit" class="btn btn-danger">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
    </table>
    
    {!! $course->links() !!}
        
@endsection