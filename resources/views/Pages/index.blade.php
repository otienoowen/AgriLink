@extends('layouts.homeapp')

@section('content')
<section class="section-intro padding-y-sm">
<div class="container">

<div class="intro-banner-wrap">
	<img src="{{ asset('/banner.jpg') }}" class="img-fluid rounded">
</div>

</div> <!-- container //  -->
</section>
<!-- ========================= SECTION INTRO END// ========================= -->


<!-- ========================= SECTION FEATURE ========================= -->
<section class="section-content padding-y-sm">
<div class="container">
<article class="card card-body">


<div class="row">
	<div class="col-md-4">	
		<figure class="item-feature">
			<span class="text-primary"><i class="fa fa-2x fa-shopping-cart"></i></span>
			<figcaption class="pt-3">
				<h5 class="title">Easy Ordering</h5>
			</figcaption>
		</figure> <!-- iconbox // -->
	</div><!-- col // -->
	<div class="col-md-4">
		<figure  class="item-feature">
			<span class="text-primary"><i class="fa fa-2x fa-money-bill-wave"></i></span>	
			<figcaption class="pt-3">
				<h5 class="title">Easy Payment</h5>
			</figcaption>
		</figure> <!-- iconbox // -->
	</div><!-- col // -->
    <div class="col-md-4">
		<figure  class="item-feature">
			<span class="text-primary"><i class="fa fa-2x fa-lock"></i></span>
			<figcaption class="pt-3">
				<h5 class="title">Secure Goods</h5>
			</figcaption>
		</figure> <!-- iconbox // -->
	</div> <!-- col // -->
</div>
</article>

</div> <!-- container .//  -->
</section>



<!-- ========================= SECTION  ========================= -->
<section class="section-name bg padding-y-sm">
<div class="container">
<header class="section-heading">
	<h3 class="section-title">Our Customers</h3>
</header><!-- sect-heading -->

<div class="row">
	<div class="col-md-3 col-6">
		<figure class="box item-logo">
			<a href="https://www.instagram.com/naivas_supermarket/"><img src="{{ asset('logo1.png') }}"></a>
		</figure> <!-- item-logo.// -->
	</div> <!-- col.// -->
	<div class="col-md-3  col-6">
		<figure class="box item-logo">
			<a href="https://www.foodplus.co.ke/"><img src="{{ asset('logo2.png') }}"></a>
		</figure> <!-- item-logo.// -->
	</div> <!-- col.// -->
	<div class="col-md-3  col-6">
		<figure class="box item-logo">
			<a href="https://www.beyondfruits.co.ke/"><img src="{{ asset('/logo3.jpg') }}"></a>
		</figure> <!-- item-logo.// -->
	</div> <!-- col.// -->
	<div class="col-md-3  col-6">
		<figure class="box item-logo">
			<a href="https://zucchini.co.ke/"><img src="{{ asset('/logo4.jpg') }}"></a>
		</figure> <!-- item-logo.// -->
	</div> <!-- col.// -->
</div> <!-- row.// -->
</div><!-- container // -->
</section>
<!-- ========================= SECTION  END// ========================= -->
@endsection
        
    