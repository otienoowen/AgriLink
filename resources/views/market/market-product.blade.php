@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="centered" >
                <section class="cards">
                @foreach ($product as $item)               
                <div>
                    <img src="{{ asset('uploads/products/'.$item->image) }}" width="200px" height="200px" alt="Image">
                </div>                               
                <div class="card">
                    Name:{{$item->name}}
                </div>
                <div class="card">
                    Price:{{$item->price}}
                </div>
                <div class="card">
                    <a href="" class="btn btn-primary btn-sm">Order</a>
                </div>
                @endforeach 
                </section>
                
            </div>
              
        </div>
    </div>
</div>

@endsection