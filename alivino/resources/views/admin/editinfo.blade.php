 {{-- extend the parent tpl --}}
@extends('layout.admin')
{{-- set the pagetitle in the parent tpl --}}
@section('title', 'Alivino | ADMIN')
@section('JS')
    <script src="//cdn.tinymce.com/4/tinymce.min.js"></script>
    <script>tinymce.init({selector:'textarea'});</script>
@section('content')

  


<h2>Edit product</h2>

 
 <div class="panel-body">
        <!-- Display Validation Errors -->
        @include('errors.errors')
        <!-- New Blogpost form -->
        {!! Form::open(array('url' => 'admin/shop/info/update' , 'method' => 'POST')) !!}

        

        <div class="form-group">
            {!! Form::label('phone', 'Tel:') !!}
            {!! Form::text('phone', $info->phone, array('class' => 'form-control')) !!}
        </div>

        <div class="form-group">
            {!! Form::label('email', 'Email:') !!}
            {!! Form::text('email', $info->email, array('class' => 'form-control')) !!}
        </div>
        
        <div class="form-group">
            {!! Form::label('address', 'Addres:') !!}
            {!! Form::text('address', $info->address, array('class' => 'form-control')) !!}
        </div>

        <div class="form-group">
            {!! Form::label('city', 'Gemeente:') !!}
            {!! Form::text('city', $info->city, array('class' => 'form-control')) !!}
        </div>

        <div class="form-group">
            {!! Form::label('about', 'About:') !!}
            {!! Form::textarea('about', $info->about, array('class' => 'form-control', 'rows' => '10')) !!}
        </div>
        <a href="{{ url('/admin/products') }}">Cancel</a>
         {!! Form::hidden('id', $info->id) !!}
        {!! Form::submit('submit', array('class' => 'btn btn-primary pull-right')) !!}

        {!! Form::close() !!}
    </div>






@endsection