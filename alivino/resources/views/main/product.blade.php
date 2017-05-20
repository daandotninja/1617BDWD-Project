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
						<div class="flexslider">
							<ul class="slides">
								<li data-thumb="/images/s1.jpg">
									<div class="thumb-image detail_images"> <img src="/images/s1.jpg" data-imagezoom="true" class="img-responsive" alt=""> </div>
								</li>
								<li data-thumb="/images/s2.jpg">
									 <div class="thumb-image"> <img src="/images/s2.jpg" data-imagezoom="true" class="img-responsive" alt=""> </div>
								</li>
								<li data-thumb="/images/s3.jpg">
								   <div class="thumb-image"> <img src="/images/s3.jpg" data-imagezoom="true" class="img-responsive" alt=""> </div>
								</li> 
							</ul>
						</div>
					</div>
					<div class="col-md-6 single-top-right">
						<h3 class="item_name"> Black Handbag</h3>
						
						<div class="single-price">
							<ul>
								<li>$54</li>  
							</ul>	
						</div> 
						<p class="single-price-text">Fusce a egestas nibh, eget ornare erat. Proin placerat, urna et consequat efficitur, sem odio blandit enim, sit amet euismod turpis est mattis lectus. Vestibulum maximus quam et quam egestas imperdiet. In dignissim auctor viverra. </p>
						<form action="#" method="post">
							<input type="hidden" name="cmd" value="_cart" />
							<input type="hidden" name="add" value="1" /> 
							<input type="hidden" name="w3ls1_item" value="Handbag" /> 
							<input type="hidden" name="amount" value="540.00" /> 
							<button type="submit" class="w3ls-cart" ><i class="fa fa-cart-plus" aria-hidden="true"></i> Add to cart</button>
						</form>
						
					</div>
				   <div class="clearfix"> </div>  
				</div>
			</div> 
				
		
			
		</div>
	</div>
	




@endsection