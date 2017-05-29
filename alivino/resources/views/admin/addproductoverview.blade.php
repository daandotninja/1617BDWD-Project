{{-- extend the parent tpl --}}
@extends('layout.admin')
{{-- set the pagetitle in the parent tpl --}}
@section('title', 'Alivino | ADMIN')
@section('JS')
    <script src="//cdn.tinymce.com/4/tinymce.min.js"></script>
    <script>tinymce.init({selector:'textarea'});</script>
@section('content')

	


<h2>Add product</h2>

 
 <div class="panel-body">
        <!-- Display Validation Errors -->
        @include('errors.errors')
        <!-- New Blogpost form -->
        {!! Form::open(array('url' => 'admin/product/add/save' , 'method' => 'POST','files' => true)) !!}

        <div class="form-group">
            {!! Form::label('title', 'Title:') !!}
            {!! Form::text('title', '', array('class' => 'form-control')) !!}
        </div>
        <div class="row">
          
         
          <div class="form-group col-md-1">
              {!! Form::label('year', 'Year:') !!}
              {!! Form::selectRange('year', 1200,2017, array('class' => 'form-control')) !!}
          </div>
           <div class="form-group col-md-2">
              {!! Form::label('price', 'Price:') !!}
              {!! Form::text('price', '', array('class' => 'form-control')) !!}
          </div>
          <div class="form-group col-md-1">
              {!! Form::label('img', 'img:') !!}
              {!! Form::file('images') !!}
          </div>
        </div>
        <div class="form-group">
            {!! Form::label('description', 'Description:') !!}
            {!! Form::textarea('description', '', array('class' => 'form-control', 'rows' => '10')) !!}
        </div>
        <a href="{{ url('/admin/products') }}">Cancel</a>
        {!! Form::submit('submit', array('class' => 'btn btn-primary pull-right')) !!}

        {!! Form::close() !!}
    </div>






@endsection