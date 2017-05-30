{{-- extend the parent tpl --}}
@extends('layout.master')
{{-- set the pagetitle in the parent tpl --}}
@section('title', 'Alivino | ADMIN')

@section('content')

<div class='container'>
<br>
<h2 style="text-align:left;">user</h2>
<br>
   <h4 style="text-align:left;">{{$user->firstname}} {{$user->lastname}}</h4>
   <br>
    <ul class="container details">
      <li><p><span class="glyphicon glyphicon-envelope one" style="width:50px;"></span>{{$user->email}}</p></li>
      <li>
      <p><span class="glyphicon glyphicon-map-marker one" style="width:50px;"></span>{{$user->address}},{{$user->city}} {{$user->country}}</p></li>
      
    </ul>
<br>
<h2 style="text-align:left;">Bestellingen</h2>
         
  <table style="border:none;" class="table">
    <thead>
      <tr>
       
       
        <th>Order date</th>
        <th>Status</th>
        <th></th>
      </tr>
    </thead>
    <tbody>
      
        @if ($orders)
            @forelse ($orders as $order)
               <tr>
           
           
    
            <td>{{$order->created_at->diffForHumans()}}</td>
            <td>{{$order->status}}</td>
            <td><a  href="{{ @url('/user/order')}}/{{$order->id}}" class="btn btn-primary">Detail</a></td>
          </tr>
            @empty
                <p>Geen orders</p>
            @endforelse
            
        @endif
    </tbody>
  </table>

</div>

@endsection