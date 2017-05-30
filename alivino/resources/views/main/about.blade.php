{{-- extend the parent tpl --}}
@extends('layout.master')
{{-- set the pagetitle in the parent tpl --}}
@section('title', 'Alivino | Over ons')

@section('content')

<div class="about">
	<div class="container"> 
		<h3>Over ons</h3>
		<div class="about-info">
			<div class="col-md-8 about-grids">
				<h4>Alivno</h4>
				<p>{!! $about-> about !!}</p>		
					
			</div>
			
			<div class="clearfix"> </div>
		</div>
	</div>
</div>	




@endsection