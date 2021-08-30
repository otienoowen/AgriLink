@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Product Added') }}</div>

                <div class="card-body">
                    {{-- <img src="{{ asset('uploads/products/'.$product->image) }}" width="70px" height="70px" alt="Image"> --}}
                    <p>{{$product->name}}</p>
                    <p> {{$product->price}}</p>

                    <p><a href="{{ url('edit-product/'.$item->id) }}" class="btn btn-primary btn-sm">Edit</a></p>

                   
            </div>
        </div>
    </div>
</div>

@endsection

@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    <h4>View Product Created
                        <a href="{{url('farmer_profile')}}" class="btn btn-primary float-right">Back</a>
                    </h4> 
                </div> 

                <div class="card-body">
                    
                    <div>
                        <img src= "{{ asset('uploads/admin/'.$product->image) }}" width="100px" height="100px" alt="Image">
                    </div>
                    <p>Name: {{$product->name}}</p>
                    <p>Email: {{$product->price}}</p>
                   
                    
                    <a href="{{ url(''.$product->id) }}" class="btn btn-primary btn-sm">Edit</a>

                </div>
            </div>
        </div>
    </div>
</div>

@endsection

