@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h4>Products Table
                        <a href="{{url('add-product')}}" class="btn btn-primary float-right">Add Product</a>
                    </h4> 
                </div> 
                <div class="card-body">
                    <table id="table_id" class="table table-bordered table-striped">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Name</th>
                                <th>Weight in kgs</th>
                                <th>Price</th>
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
                                <td>{{$item->weight}}</td>
                                <td>{{$item->price}}</td>
                                <td>
                                    <img src="{{ asset('uploads/products/'.$item->image) }}" width="70px" height="70px" alt="Image">
                                </td>
                                <td>
                                    <a href="{{ url('edit-product/'.$item->id) }}" class="btn btn-primary btn-sm">Edit</a>
                                </td>
                                <td>
                                    
                                    <form name="form1" action="{{url('delete-product/'.$item->id)}}" method="POST" >
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
<script>
    $.noConflict();
    jQuery(document).ready( function ($) {
        $('#table_id').DataTable(
            {
                "pageLength": 3,
                lengthMenu: [
                                [ 3, 5, 10, 25, 50, -1 ],
                                [ '3','5','10', '25', '50', 'All' ]
                             ]                   
            }
        );
        } );
    </script>

@endsection