@extends('products.layout')

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
                    <table class="table table-bordered table-striped">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Name</th>
                                <th>Price</th>
                                <th>Image</th>
                            
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($products as $item)
                            <tr>
                                <td>{{$item->id}}</td>
                                <td>{{$item->name}}</td>
                                <td>{{$item->price}}</td>
                                <td>
                                    <img src="{{ asset('uploads/products/'.$item->image) }}" width="70px" height="70px" alt="Image">
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