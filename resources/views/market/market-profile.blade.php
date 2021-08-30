@extends('layouts.newapp')

@section('content')
<div class="container">
    <div class="row ">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h4>Market Dashboard</h4> 
                </div> 

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('You are logged in!') }}
                            <hr>

                            <div class="row">
	<aside class="col-md-3">
		<ul class="list-group">
			<a class="list-group-item active" href="#"> Account Overview  </a>
			<a class="list-group-item" href="{{ url('profile-edit/'.Auth::user()->id) }}"> Edit Profile </a>
			<a class="list-group-item" href="{{url('farmer-add')}}"> Add Products </a>
			<a class="list-group-item" href="#"> View Products </a>
		</ul>
	</aside> <!-- col.// -->
	<main class="col-md-9">

		<article class="card mb-3">
			<div class="card-body">
				
				<figure class="icontext">
						<div class="icon">
							<img class="rounded-circle img-sm border" src="{{ asset('uploads/admin/'.Auth::user()->profile_image) }}" width="100px" height="100px">
						</div>
						<div class="text">
							<strong> {{Auth::user()->name}} </strong> 
				</figure>
				<hr>
				<p>
				<br> 
					Email: {{Auth::user()->email}} <br>
					User Type: {{Auth::user()->role}} </br>
				</p>
	</main> <!-- col.// -->
</div>

</div> <!-- container .//  -->
                    
                   

                </div>
            </div>
        </div>
    </div>
</div>



@endsection


