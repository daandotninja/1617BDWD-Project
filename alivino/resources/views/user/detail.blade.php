{{-- extend the parent tpl --}}
@extends('layout.master')
{{-- set the pagetitle in the parent tpl --}}
@section('title', 'Alivino | ADMIN')

@section('content')

<div class='container'>
<br>
 <h3 style="text-align:left;">Products</h3><br>
  <table style="border:none;" class="table">
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
          <td><a href="{{ @url('/product')}}/{{$product->product['id']}}"type="button" class="btn btn-primary">Detail</a></td>
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
      
  </div>
</div>
</div>

@endsection