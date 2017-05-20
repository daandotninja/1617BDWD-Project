{{-- extend the parent tpl --}}
@extends('layout.master')
{{-- set the pagetitle in the parent tpl --}}
@section('title', 'Alivino | Winkel')

@section('content')

<div class="sub-banner my-banner2">
</div>
<div class="content">
	<div class="container">
		
		<div class="women-dresses">
			<div class="women-set1">
				<div class="col-md-3 women-grids wp1 animated wow slideInUp" data-wow-delay=".5s">
					<a href="{{ url('/product/1') }}"><div class="product-img">
						<img src="images/wp1.jpg" alt="" />
						
					</div></a>
				
					<h4>Pencil dress</h4>
					<h5>$50.00</h5>
				</div>

				
				<div class="clearfix"></div>
			</div>
		</div>
	</div>
</div>	




@endsection