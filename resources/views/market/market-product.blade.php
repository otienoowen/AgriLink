@extends('layouts.newapp')

@section('content')
<div class="container">

<div class="row">
	<aside class="col-md-3">
		
<div class="card">
	<article class="filter-group">
		<header class="card-header">
			<a href="#" data-toggle="collapse" data-target="#collapse_1" aria-expanded="true" class="">
				<i class="icon-control fa fa-chevron-down"></i>
				<h6 class="title">Produce Available</h6>
			</a>
		</header>
		<div class="filter-content collapse show" id="collapse_1" style="">
		@foreach($product as $item)
			<div class="card-body">
			<ul class="list-menu">
				<li><a href="#">{{$item->name}}  </a></li>
				</ul>
				
				
				<!--<ul class="list-menu">
				<li><a href="#">People  </a></li>
				<li><a href="#">Watches </a></li>
				<li><a href="#">Cinema  </a></li>
				<li><a href="#">Clothes  </a></li>
				<li><a href="#">Home items </a></li>
				<li><a href="#">Animals</a></li>
				<li><a href="#">People </a></li>
				</ul>-->

			</div> <!-- card-body.// -->
			@endforeach
		</div>
	</article> <!-- filter-group  .// -->
	<article class="filter-group">
		<header class="card-header">
			<a href="#" data-toggle="collapse" data-target="#collapse_2" aria-expanded="true" class="">
				<i class="icon-control fa fa-chevron-down"></i>
				<h6 class="title">Regions Available</h6>
			</a>
		</header>
		<div class="filter-content collapse show" id="collapse_2" style="">
		@foreach($product as $item)
			<div class="card-body">
			<ul class="list-menu">
				<li><a href="#">{{$item->region}}  </a></li>
				</ul>
	</div> <!-- card-body.// -->
	@endforeach
		</div>
	</article> <!-- filter-group .// -->
</div> <!-- card.// -->

	</aside> <!-- col.// -->
	<main class="col-md-9">

<header class="border-bottom mb-4 pb-3">
		<div class="form-inline">
			<span class="mr-md-auto">Items found </span>
			<select class="mr-2 form-control">
				<option>Latest items</option>
				<option>Most Popular</option>
			</select>
			<div class="btn-group">
				<a href="#" class="btn btn-outline-secondary" data-toggle="tooltip" title="List view"> 
					<i class="fa fa-bars"></i></a>
				<a href="#" class="btn  btn-outline-secondary active" data-toggle="tooltip" title="Grid view"> 
					<i class="fa fa-th"></i></a>
			</div>
		</div>
</header><!-- sect-heading -->

@foreach ($product->chunk(3) as $productChunk)
<div class="row">
    @foreach ($productChunk as $item)
    <div class="col-md-4">
        <figure class="card card-product-grid">
            <div class="img-wrap"> 
                <img src="{{ asset('uploads/products/'.$item->image) }}" width="200px" height="200px" alt="Image">
                <a class="btn-overlay" href="#"><i class="fa fa-search-plus"></i> Quick view</a>
            </div> <!-- img-wrap.// -->
            <figcaption class="info-wrap">
                <div class="text-wrap">
                    <a href="#" class="title"><strong>Name: {{$item->name}}</strong></a>
                    <div class="price-wrap mt-2">
                        <span class="price">Price: Ksh. {{$item->price}}</span><br>
						<span class="price">Region: {{$item->region}}</span><br>
                        <span class="price">Weight: {{$item->weight}} Kgs</span>
                    </div> <!-- price-wrap.// -->
                </div>
                <a href="{{ route('product.addToCart', ['id' => $item->id]) }}" class="btn btn-block btn-primary">Add to cart </a>
            </figcaption>
        </figure>
    </div> <!-- col.// -->
    @endforeach
</div>
@endforeach

@endsection

