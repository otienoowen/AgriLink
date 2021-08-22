@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('You are logged in!') }}
                            <hr>
                    
                    <div>
                        <img src= "{{ asset('uploads/admin/'.Auth::user()->profile_image) }}" width="100px" height="100px" alt="Image">
                    </div>
                    <p>Name: {{Auth::user()->name}}</p>
                    <p>Email: {{Auth::user()->email}}</p>
                    <p>User role: {{Auth::user()->role}}</p>

                    
                    



                </div>
            </div>
        </div>
    </div>
</div>
@endsection
