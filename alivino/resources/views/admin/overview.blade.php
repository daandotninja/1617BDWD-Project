{{-- extend the parent tpl --}}
@extends('layout.admin')
{{-- set the pagetitle in the parent tpl --}}
@section('title', 'Alivino | ADMIN')

@section('content')

	
<h2>Bestellingen</h2>
         
  <table class="table">
    <thead>
      <tr>
        <th>orderID</th>
        <th>User</th>
        <th>Order date</th>
        <th>Status</th>
        <th></th>
      </tr>
    </thead>
    <tbody>
      @if ($orders)
            @forelse ($orders as $order)
               <tr>
		        <td>{{$order->id}}</td>
		       
				<td>{{$order->user['firstname']}} {{$order->user['lastname']}}</td>
		       
		        <td>{{$order->created_at->diffForHumans()}}</td>
		        <td>{{$order->status}}</td>
		        <td><a  href="{{ @url('/admin/order')}}/{{$order->id}}" class="btn btn-primary">Primary</a></td>
		      </tr>
            @empty
                <p>Geen orders</p>
            @endforelse
            
        @endif
    </tbody>
  </table>


@endsection