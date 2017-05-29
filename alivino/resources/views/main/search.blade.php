{{-- extend the parent tpl --}}
@extends('layout.master')
{{-- set the pagetitle in the parent tpl --}}
@section('title', 'Alivino | Zoek')

@section('content')

<div class="sub-banner my-banner2">
</div>
<div class="content">
	<div class="container">
		
	
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

				
				<div class="clearfix"></div>
			
	</div>
</div>	




@endsection