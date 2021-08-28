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
