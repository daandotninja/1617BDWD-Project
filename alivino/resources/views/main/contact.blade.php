{{-- extend the parent tpl --}}
@extends('layout.master')
{{-- set the pagetitle in the parent tpl --}}
@section('title', 'Alivino | Contact')

@section('content')

<div class="contact">
	<div class="container">
		<h3>Contact Us</h3>
		<div class="col-md-3 col-sm-3 contact-left">
			<div class="address">
				<h4>ADDRESS</h4>
				<h5>{{ $about->city}}</h5>
				<h5>{{ $about->country}}</h5>
			</div>
			<div class="phone">
				<h4>PHONE</h4>
				<h5>{{ $about->phone}}</h5>
				
			</div>
			<div class="email">
				<h4>EMAIL</h4>
				<h5><a href="mailto:{{ $about->email}}">{{ $about->email}}</a></h5>
			</div>
		</div>
		
		<div class="col-md-9 col-sm-9 contact-right">
        <!-- Display Validation Errors -->
        @include('errors.errors')

        <!-- New Blogpost form -->
        {!! Form::open(array('url' => '/sendmail', 'method' => 'POST')) !!}
    		{!! Form::text('name', '', array('placeholder'=>"naam")) !!}
    		{!! Form::text('email', '', array('placeholder'=>"email")) !!}
    		{!! Form::text('subject', '', array('placeholder'=>"onderwerp")) !!}
    		{!! Form::text('phone', '', array('placeholder'=>"GSM nummer")) !!}
       		{!! Form::textarea('message', '', array('placeholder'=>"Bericht")) !!}
      		{!! Form::submit('Verzenden', array()) !!}

        {!! Form::close() !!}
    </div>
	</div>
</div>
<div class="map-w3ls">
		<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d22702.22744502486!2d11.113366067229226!3d44.662878362361056!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x477fc3eca9065c15%3A0x12ec8a03aadae866!2s40019+Sant&#39;Agata+Bolognese+BO%2C+Italy!5e0!3m2!1sen!2sin!4v1451281303075" allowfullscreen></iframe>
</div>




@endsection