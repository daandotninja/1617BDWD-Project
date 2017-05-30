<!DOCTYPE html>
<html lang="en">
<head>
<title>@yield('title')</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Fashion Club Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- css -->
<link href="{{ asset('/css/bootstrap.css')}}" rel="stylesheet" type="text/css" media="all" />

<link rel="stylesheet" href="{{ asset('/css/font-awesome.min.css')}}" type="text/css" media="all" />
<!--// css -->
<!-- font -->
<link href="//fonts.googleapis.com/css?family=Source+Sans+Pro" rel="stylesheet">
<link href='//fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,400italic,600,600italic,700,700italic,800,800italic' rel='stylesheet' type='text/css'>
<!-- //font -->
<script src="{{ asset('/js/jquery-1.11.1.min.js')}}"></script>
<script src="{{ asset('/js/bootstrap.js')}}"></script>
</head>

<body>
<div class="navbar navbar-default navbar-static-top" role="navigation">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="{{ @url('/') }}">Alivino // CMS</a>
        </div>

        <!-- content // User is logged in: show nagivation  -->
        
            <div class="navbar-collapse collapse">
                <ul class="nav navbar-nav">
                    <li class=""><a href="{{ @url('/admin') }}">Bestellingen</a></li>
                    <li><a href="{{ @url('/admin/products') }}">Products</a></li>
                    <li><a href="{{ @url('/admin/shop/info') }}">Info</a></li>
                </ul>
                <ul class="nav navbar-nav navbar-right">
                    <li><a href="{{ @url('/logout') }}">Logout </a></li>
                </ul>
            </div>
        
    </div>
</div>

<div class="container">
@yield('content')


</body>
</html>