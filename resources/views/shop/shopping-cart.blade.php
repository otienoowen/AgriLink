@extends('layouts.newapp')

@section('content')
	@if(Session::has('cart'))
	<div class="container">

<div class="row">
	<main class="col-md-9">
<div class="card">

<table class="table table-borderless table-shopping-cart">
<thead class="text-muted">
<tr class="small text-uppercase">
  <th scope="col">Product</th>
  <th scope="col" width="120">Quantity</th>
  <th scope="col" width="120">Price</th>
  <th scope="col" class="text-right" width="200"> </th>
</tr>
</thead>
<tbody>
@foreach($products as $item)
<tr>
	<td>
		<figure class="itemside">
			<div class="aside"><img src="images/items/2.jpg" class="img-sm"></div>
			<figcaption class="info">
				<a href="#" class="title text-dark">{{ $item ['item']['name'] }}</a>
				<p class="text-muted small">Size: XL, Color: blue, <br> Region: Kiambu </p>
			</figcaption>
		</figure>
	</td>
	<td> 
		<div class="price-wrap"> 
			<var class="price">{{ $item['qty'] }}</var>   
		</div> <!-- qty-wrap .// -->
	</td>
	<td> 
		<div class="price-wrap"> 
			<var class="price">Ksh {{ $item ['item']['price']*$item['qty'] }}</var> 
			<small  class="text-muted">Ksh {{ $item ['item']['price'] }} each </small>  
		</div> <!-- price-wrap .// -->
	</td>
	<td class="text-right"> 
	<a data-original-title="Save to Wishlist" title="" href="" class="btn btn-light" data-toggle="tooltip"> <i class="fa fa-heart"></i></a> 
	<a href="" class="btn btn-light btn-round"> Remove</a>
	</td>
</tr>
@endforeach
</tbody>
</table>

<div class="card-body border-top">
	<a href="#" class="btn btn-primary float-md-right"> Make Order <i class="fa fa-chevron-right"></i> </a>
	<a href="/market-product" class="btn btn-light"> <i class="fa fa-chevron-left"></i> Continue shopping </a>
</div>	
</div> <!-- card.// -->

	</main> <!-- col.// -->
	<aside class="col-md-3">
		
		<div class="card">
			<div class="card-body">
					<dl class="dlist-align">
					  <dt>Total Price:</dt>
					  <dd class="text-right">Ksh {{ $totalPrice }}</dd>
					</dl>
					<dl class="dlist-align">
					  <dt>Discount:</dt>
					  <dd class="text-right">Ksh 0</dd>
					</dl>
					<dl class="dlist-align">
					  <dt>Total Price:</dt>
					  <dd class="text-right  h5"><strong>Ksh {{ $totalPrice }}</strong></dd>
					</dl>
					<hr>	
			</div> <!-- card-body.// -->
		</div>  <!-- card .// -->
	</aside> <!-- col.// -->
</div>

</div> <!-- container .//  -->

	@else
	<div class="container">

<div class="row">
	<main class="col-md-9">
<div class="card">
<strong>There are no items in your cart!</strong>
<table class="table table-borderless table-shopping-cart">

<thead class="text-muted">
<tr class="small text-uppercase">
  <th scope="col">Product</th>
  <th scope="col" width="120">Quantity</th>
  <th scope="col" width="120">Price</th>
  <th scope="col" class="text-right" width="200"> </th>
</tr>
</thead>
<tbody>
<tr>
	<td>
		<figure class="itemside">
			<div class="aside"><img src="images/items/2.jpg" class="img-sm"></div>
			<figcaption class="info">
				<a href="#" class="title text-dark">Item</a>
				<p class="text-muted small">Size: XL, Color: blue, <br> Region:  </p>
			</figcaption>
		</figure>
	</td>
	<td> 
		<div class="price-wrap"> 
			<var class="price">0</var>   
		</div> <!-- qty-wrap .// -->
	</td>
	<td> 
		<div class="price-wrap"> 
			<var class="price">Ksh 0</var> 
			<small  class="text-muted">Ksh 0 </small>  
		</div> <!-- price-wrap .// -->
	</td>
	<td class="text-right"> 
	<a data-original-title="Save to Wishlist" title="" href="" class="btn btn-light" data-toggle="tooltip"> <i class="fa fa-heart"></i></a> 
	<a href="" class="btn btn-light btn-round"> Remove</a>
	</td>
</tr>
</tbody>
</table>

<div class="card-body border-top">
	<a href="#" class="btn btn-fail float-md-right"> Make Order <i class="fa fa-chevron-right"></i> </a>
	<a href="/market-product" class="btn btn-primary"> <i class="fa fa-chevron-left"></i> Start shopping </a>
</div>	
</div> <!-- card.// -->

	</main> <!-- col.// -->
	<aside class="col-md-3">
		
		<div class="card">
			<div class="card-body">
					<dl class="dlist-align">
					  <dt>Total Price:</dt>
					  <dd class="text-right">Ksh 0</dd>
					</dl>
					<dl class="dlist-align">
					  <dt>Discount:</dt>
					  <dd class="text-right">Ksh 0</dd>
					</dl>
					<dl class="dlist-align">
					  <dt>Total Price:</dt>
					  <dd class="text-right  h5"><strong>Ksh 0</strong></dd>
					</dl>
					<hr>	
			</div> <!-- card-body.// -->
		</div>  <!-- card .// -->
	</aside> <!-- col.// -->
</div>

</div> <!-- container .//  -->
	@endif
@endsection