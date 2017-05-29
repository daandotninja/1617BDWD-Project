{{-- extend the parent tpl --}}
@extends('layout.admin')
{{-- set the pagetitle in the parent tpl --}}
@section('title', 'Alivino | ADMIN')

@section('content')

	
<h2>order-{{$order->id}}</h2>
<h3>user</h3>
<br>

   <h4>{{$order->user['firstname']}} {{$order->user['lastname']}}</h4>
    <ul class="container details">
      <li><p><span class="glyphicon glyphicon-envelope one" style="width:50px;"></span>{{$order->user['email']}} </p></li>
      <li>
      <p><span class="glyphicon glyphicon-map-marker one" style="width:50px;"></span>{{$order->user['address']}}
,{{$order->user['city']}} {{$order->user['country']}}</p></li>
      
    </ul>
<br>
<h3>Products</h3>
  <table class="table">
    <thead>
      <tr>
        <th>Product</th>
        <th>Amount</th>
        <th>prijs/stuk</th>
       
        <th></th>
      </tr>
    </thead>
    <tbody>



      @forelse ($order->orders_has_products as $product)
        <tr>
          <td>{{$product->product['title']}}</td>
          <td>{{$product->amount}}</td>
          <td>${{$product->price}}</td>
          <td><a href="{{ @url('/product')}}/{{$product->id}}"type="button" class="btn btn-primary">Detail</a></td>
        </tr> 
        @empty
            <p>Geen geen products</p>
        @endforelse
            
 
      
     
      
    </tbody>
  </table>

<br>
<br>
<hr>
<div class="container">
  <div class="row">
      <div class="col-md-3">
        <p><strong>Total prijs: </strong>${{
        $order->getTotalPrice()}}</p>
      </div>
      <div class="col-md-3">
        <p><strong>Status: </strong>{{
        $order->status}}</p>
      </div>
      @if ($order->status == 'ongeleverd')
        <div class="col-md-3">
          {!! Form::open(array('url' => '/admin/updatestatus', 'method' => 'POST')) !!}
            {!! Form::hidden('order_id', $order->id) !!}
            {!! Form::submit('Bevestig bestelling', array('class' => 'btn btn-success pull-right')) !!}
        {!! Form::close() !!}
        </div>
      @endif
  </div>
</div>


<br>
<br>
<br>
<br>
<br>
<br>

@endsection