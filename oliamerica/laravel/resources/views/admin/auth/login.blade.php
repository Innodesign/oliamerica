<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>OLIAMERICA - @yield('title')</title>
    <link href="/css/normalize.css" rel="stylesheet" />
    <link href="/css/bootstrap.min.css" rel="stylesheet" />
    <link href="/css/font-awesome.min.css" rel="stylesheet" />
    <link href="/css/jquery.bxslider.css" rel="stylesheet" />
    <link href="/css/Site.css" rel="stylesheet" />
    <link href="/css/animate.css" rel="stylesheet" />
</head>
<body>
	<div class="jumbotron">
	  <div class="container">
	    <!-- <span class="glyphicon glyphicon-list-alt"></span> -->
	    <img src="/img/logo.png">
	    <hr>
	    <h2>Inicie sesión</h2>
		
	    <div class="box">
	    	<form action="/auth/login" method="post">
		        <input type="email" placeholder="Email" name="email" value="{{ old('email') }}">
			    <input type="password" name="password" placeholder="Password">
			    <button class="btn btn-default full-width" type="submit"><span class="glyphicon glyphicon-ok"></button>
			 </form>
	    </div>
	  </div>
	</div>	
</body>
</html>