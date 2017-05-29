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
		@if ($products)
            @forelse ($products as $product)
                <div class="col-md-3 top-product-grids tp1 animated wow slideInUp" data-wow-delay=".5s">
					<a href="{{ @url('/product')}}/{{$product->id}}">
						<div class="product-img">
							<img src="images/alivino/wine/{{ $product->img}}" alt="" />
						</div>
					</a>
					<h4>{{ $product->title }}</h4>
					<h5>${{ $product->price }}</h5>
				</div>
            @empty
                <p>Geen producten gevonden!</p>
            @endforelse
           

        @endif
	</div>
</div>
	




@endsection