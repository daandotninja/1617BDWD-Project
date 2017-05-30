<!--A Design by W3layouts
Author: W3layout
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
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
<link rel="stylesheet" href="{{ asset('/css/style.css')}}" type="text/css" media="all" />
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
<div class="header-top-w3layouts">
    <div class="container">
        <div class="col-md-6 logo-w3">
            <a href="{{ url('/') }}"><h1>ALIVINO<span>WINE</span></h1></a>
        </div>
        <div class="col-md-6 phone-w3l">
            <ul>
                <li><span class="glyphicon glyphicon-earphone" aria-hidden="true"></span></li>
                <li>{{ $about->phone}}</li>
            </ul>
        </div>
        <div class="clearfix"></div>
    </div>
</div>
<div class="header-bottom-w3ls">
    <div class="container">
        <div class="col-md-7 navigation-agileits">
            <nav class="navbar navbar-default">
                <div class="navbar-header nav_2">
                    <button type="button" class="navbar-toggle collapsed navbar-toggle1" data-toggle="collapse" data-target="#bs-megadropdown-tabs">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                </div> 
                <div class="collapse navbar-collapse" id="bs-megadropdown-tabs">
                    <ul class="nav navbar-nav ">
                        <li class=""><a href="{{ url('/') }}" class="hyper "><span>Home</span></a></li>  
                        <li ><a href="{{ url('/shops') }}" class="hyper" ><span>Winkel</span></a></li>
                        <li><a href="{{ url('/about') }}" class="hyper"><span>About</span></a></li>
                        <li><a href="{{ url('/contact') }}" class="hyper"><span>Contact Us</span></a></li>
                    </ul>
                </div>
            </nav>
        </div>
                
        <div class="col-md-4 search-agileinfo">
            {!! Form::open(array('url' => '/search', 'method' => 'GET')) !!}
            {!! Form::text('search', '', array('placeholder'=>"Search for a Product..")) !!}
            
            {!! Form::button(' <i class="fa fa-search" aria-hidden="true"> </i>', array('class'=> 'btn btn-default search' ,'aria-label'=>"Left Align",'type'=> 'submit')) !!}

        {!! Form::close() !!}
        </div>
        <div class="col-md-1 cart-wthree">
            <div class="cart"> 
                
                    <a href="{{ url('/user/shoppingcar') }}" class="w3view-cart" type="submit" name="submit" value=""><i class="fa fa-cart-arrow-down" aria-hidden="true"></i></a>
            
            </div>
        </div>
        <div class="clearfix"></div>
    </div>
</div>

@yield('content')

<div class="footer">
    <div class="container">
        <div class="col-md-3 footer-grids fgd1">
        <a href="index.html"><h3>ALIVINO<span>WINE</span></h3></a>
        <ul>
            <li>{{ $about->address }}</li>
            <li>{{ $about->city}}</li>
            <li><a href="mailto:{{ $about->email}}">{{ $about->email }}</a></li>
            <a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a>
            <a href="#"><i class="fa fa-dribbble" aria-hidden="true"></i></a>
            <a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a>
            <a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a>
        </ul>
        </div>
        <div class="col-md-3 footer-grids fgd2">
            <h4>Information</h4> 
            <ul>
                <li><a href="{{ url('/') }}">Home</a></li>
                <li><a href="{{ url('/shops') }}">Shop</a></li>
                <li><a href="{{ url('/about') }}">About</a></li>
                <li><a href="{{ url('/contact') }}">Contact Us</a></li>
                
                
            </ul>
        </div>
        <div class="col-md-3 footer-grids fgd4">
            <h4>My Account</h4> 
            <ul>
                <li><a href="{{ url('/admin') }}">Admin</a></li>
               



                @if (Auth::check())
                   <li><a href="{{ url('/logout') }}">Logout</a></li>
                    <li><a href="{{ url('/user') }}">User</a></li>

                @else
                         <li><a href="{{ url('/user') }}">Login</a></li>

                @endif
            </ul>
        </div>
        <div class="clearfix"></div>
        <p class="copy-right">© 2016 Alivino Wine . All rights reserved | Design by <a href="http://w3layouts.com"> W3layouts.</a></p>
    </div>
</div>
    <!-- cart-js -->
    
    
    <!-- //cart-js -->  
</body>
</html>