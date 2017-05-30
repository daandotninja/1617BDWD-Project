{{-- extend the parent tpl --}}
@extends('layout.admin')
{{-- set the pagetitle in the parent tpl --}}
@section('title', 'Alivino | ADMIN')
@section('JS')
    <script src="//cdn.tinymce.com/4/tinymce.min.js"></script>
    <script>tinymce.init({selector:'textarea'});</script>
@section('content')

	


<h2>Winkel info</h2>
 <a  href="{{ @url('/admin/shop/info/edit')}}" class="btn btn-success">Add new product</a>
  <br>
 
  <h4>shop name</h4>

    <ul class="container details">
      <li><p><span class="glyphicon glyphicon-envelope one" style="width:50px;"></span>{{$info->email}}</p></li>
      <li><p><span class="glyphicon glyphicon-map-marker one" style="width:50px;"></span>{{$info->address}},{{$info->city}}</p></li>
      <li><p><span class="glyphicon glyphicon-earphone one" style="width:50px;"></span>{{$info->phone}}</p></li>
      <li><p><span class="glyphicon glyphicon-info-sign one" style="width:50px;"></span>{!!$info->about!!}</p></li>   
    </ul>






@endsection