{{-- extend the parent tpl --}}
@extends('layout.master')
{{-- set the pagetitle in the parent tpl --}}
@section('title', 'Alivino | Home')

@section('content')
<script defer src="{{ asset('/js/jquery.flexslider.js')}}"></script>
<link rel="stylesheet" href="{{ asset('/css/flexslider.css')}}" type="text/css" media="screen" />
<script>
	// Can also be used with $(document).ready()
	$(window).load(function() {
	  $('.flexslider').flexslider({
		animation: "slide",
		controlNav: "thumbnails"
	  });
	});
</script>
<!--flex slider-->

<script src="js/imagezoom.js"></script>
<!-- //js --> 
<div class="products">	 
		<div class="container">  
			<div class="single-page">
				<div class="single-page-row" id="detail-21">
					<div class="col-md-6 single-top-left">	
						
									<div class="thumb-image detail_images"> <img src="/images/alivino/wine/{{ $product -> img}}" data-imagezoom="true" class="img-responsive" alt=""> </div>
					
					</div>
					<div class="col-md-6 single-top-right">
						<h3 class="item_name">{{ $product -> title}} - {{ $product -> year}}</h3>
						
						<div class="single-price">
							<ul>
								<li>${{ $product -> price}}</li>  
							</ul>	
						</div> 
						<p class="single-price-text">{!!$product -> description !!}</p>
					
						{!! Form::open(array('url' => '/user/shoppingcar/add', 'method' => 'POST')) !!}
							{!! Form::selectRange('amount', 1,100 ,1,array('class' => '')) !!}
            				{!! Form::hidden('product_id', $product->id) !!}
            				 {!! Form::button(' <i class="fa fa-cart-plus" aria-hidden="true"></i> toevoegen', array('class'=> 'w3ls-cart' ,'type'=> 'submit')) !!}
       					 {!! Form::close() !!}
						
					</div>
				   <div class="clearfix"> </div>  
				</div>
			</div> 
				
		
			
		</div>
	</div>
	




@endsection