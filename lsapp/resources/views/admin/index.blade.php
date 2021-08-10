@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h4>Admin Table
                        <a href="{{url('add-user')}}" class="btn btn-primary float-right">Add user</a>
                    </h4> 
                </div> 
                <div class="card-body">
                    <table class="table table-bordered table-striped">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Name</th>
                                <th>Email</th>
                                <th>User Type</th>
                                <th>Image</th>
                                <th>Edit</th>
                                <th>Delete</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($admin as $item)
                            <tr>
                                <td>{{$item->id}}</td>
                                <td>{{$item->name}}</td>
                                <td>{{$item->email}}</td>
                                <td>{{$item->user_type}}</td>
                                <td>
                                    <img src="{{ asset('uploads/admin/'.$item->profile_image) }}" width="70px" height="70px" alt="Image">
                                </td>
                                <td>
                                    <a href="{{ url('edit-user/'.$item->id) }}" class="btn btn-primary btn-sm">Edit</a>
                                </td>
                                <td>
                                    {{-- <a href="{{url('delete-user/'.$item->id)}}" class="btn btn-danger btn-sm" >Delete</a> --}}
                                    <form name="form1" action="{{url('delete-user/'.$item->id)}}" method="POST" >
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger btn-sm" onClick="confirmation();">Delete</button>
                                        
                                    </form>
                                </td>
                            </tr> 
                            @endforeach
                        </tbody>
                    </table>
                </div>             
            </div>
        </div>
    </div>
</div>

@endsection