<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>OLIAMERICA - @yield('title')</title>
    <link href="{{ asset('css/normalize.css') }}" rel="stylesheet" />
    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet" />
    <link href="{{ asset('css/font-awesome.min.css') }}" rel="stylesheet" />
    <link href="{{ asset('css/jquery.bxslider.css') }}" rel="stylesheet" />
    <link href="{{ asset('css/Site.css') }}" rel="stylesheet" />
    <link href="{{ asset('css/animate.css') }}" rel="stylesheet" />
</head>
<body>
	<div class="jumbotron">
	  <div class="container">
	    <!-- <span class="glyphicon glyphicon-list-alt"></span> -->
	    <img src="{{ asset('img/logo.png') }}">
	    <hr>
	    <h2>Inicie sesión</h2>
	    <div class="box">
	        <input type="text" placeholder="Usuario">
		    <input type="password" placeholder="Password">
		    <a class="btn btn-default full-width"><span class="glyphicon glyphicon-ok"></span></a>
	    </div>
	  </div>
	</div>	
</body>
</html>

