{{-- extend the parent tpl --}}
@extends('layout.master')
{{-- set the pagetitle in the parent tpl --}}
@section('title', 'Alivino | ADMIN')

@section('content')

<div class='container'>
<br>
<h2 style="text-align:left;">shoppingcar</h2>
<br>
<h3 style="text-align:left;">Products</h3>
<br>
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
      
        @forelse ($carts->shoppingcars as $product)
          <tr>
            <td>{{$product->product['title']}}</td>
            <td>{{$product->amount}}</td>
            <td>${{$product->product['price']}}</td>
            <td><a href="{{ @url('/user/shoppingcar/delete')}}/{{$product->id}}"  type="button" class="btn btn-danger">remove</a></td>

          </tr> 
        @empty
            <p>Geen geen producten in de winkelmand</p>
        @endforelse
      
    </tbody>
  </table>

<br>
<br>
<hr>
<div class="container">
  <div class="row">
      <div class="col-md-3">
        <p><strong>Total prijs: </strong>{{$carts->getTotalPrice()}}</p>
      </div>
      <div class="col-md-3">
        <a href="{{ @url('/user/order/add')}}" type="button" class="btn btn-primary">Bestellen</a>
      </div>
  </div>
</div>


<br>
<br>
<br>
<br>
<br>
<br>
</div>

@endsection