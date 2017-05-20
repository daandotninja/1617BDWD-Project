{{-- extend the parent tpl --}}
@extends('layout.master')
{{-- set the pagetitle in the parent tpl --}}
@section('title', 'Alivino | Home')

@section('content')
<div class="banner-agile">
	<div class="container">
		<div class='bannerOverview'>
			<h2>WELKOM BIJ</h2>
			<h3>ALIVINO <span>WINE</span></h3>
			<a href="{{ url('/about') }}">Read More</a>
		</div>
		
	</div>
</div>
<div class="top-products">
	<div class="container">
		<h3>Top Sellers</h3>
		<div class="col-md-3 top-product-grids tp1 animated wow slideInUp" data-wow-delay=".5s">
			<a href="{{ url('/product/1') }}"><div class="product-img">
				<img src="images/tp1.jpg" alt="" />
				
			</div></a>
			
			<h4>Formal shoes</h4>
			<h5>$220.00</h5>
		</div>
	</div>
</div>
	




@endsection