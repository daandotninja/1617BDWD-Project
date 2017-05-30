{{-- extend the parent tpl --}}
@extends('layout.admin')
{{-- set the pagetitle in the parent tpl --}}
@section('title', 'Alivino | ADMIN')

@section('content')

	


<h2>Products</h2>

            {!! Form::open(array('url' => '/admin/products', 'method' => 'GET')) !!}
            {!! Form::text('search', '', array('placeholder'=>"Search for a Product..")) !!}
            
            {!! Form::button(' <i class="fa fa-search" aria-hidden="true"> </i>', array('class'=> 'btn btn-default search' ,'aria-label'=>"Left Align",'type'=> 'submit')) !!}

        {!! Form::close() !!}
  <a  href="{{ @url('/admin/product/add')}}" class="btn btn-success">Add new product</a>
  <table class="table">
    <thead>
      <tr>
        <th>product-id</th>
        <th>name</th>
        <th>year</th>
        <th></th>
              <th></th>
      </tr>

    </thead>
    <tbody>
      @if ($products)
            @forelse ($products as $product)
              <tr>
                <td>{{$product->id}}</td>
                <td><a href="{{ @url('/product')}}/{{$product->id}}">{{$product->title}}</a></td>
                <td>{{$product->year}}</td>
              
                <td><a href="{{ @url('/admin/product/edit')}}/{{$product->id}}"class="btn btn-primary">Edit</a></td>
                 
                 <td>
                   {!! Form::open(array('url'  => '/admin/product/delete/'.$product->id, 'method' => 'DELETE')) !!}
                    {!!Form::submit('Delete',array('class' => 'btn btn-danger')) !!}
                    {!! Form::close() !!}
                 </td>
              </tr>
            @empty
                <p>Geen producten</p>
            @endforelse
            
        @endif
      
     
      
    </tbody>
  </table>







@endsection