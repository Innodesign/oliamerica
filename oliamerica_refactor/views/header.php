<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>OLIAMERICA - @yield('title')</title>
    <link href="css/normalize.css" rel="stylesheet" />
    <link href="css/bootstrap.min.css" rel="stylesheet" />
    <link href="css/font-awesome.min.css" rel="stylesheet" />
    <link href="css/jquery.bxslider.css" rel="stylesheet" />
    <link href="css/Site.css" rel="stylesheet" />
    <link href="css/animate.css" rel="stylesheet" />
    <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">

    <link href='http://fonts.googleapis.com/css?family=Sarala' rel='stylesheet' type='text/css'>
</head>
<body>
    <div class="navbar navbar-inverse navbar-fixed-top" style="z-index:9999; background:#f8f8f8;border-top: 1px solid #689F38; border-bottom:5px solid #689F38">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="/">
                    <img src="img/logo-olisac.png" class="logo" alt="Oliamerica"  />
                </a>
            </div>
            <div class="navbar-collapse collapse pull-right" style="margin-top:1.2em">
                <ul class="nav navbar-nav">
                    <li class="enlaceMenu"><a href="Nosotros"><?php echo Lang::get('index.menuNosotros') ?></a></li>
                    <li class="enlaceMenu"><a href="Productos"><?php echo Lang::get('index.menuProductos') ?></a></li>
                    <li class="enlaceMenu"><a href="Politicas"><?php echo Lang::get('index.menuPolitica') ?></a></li>
                    <li class="enlaceMenu"><a href="Noticias"><?php echo Lang::get('index.menuNoticias') ?></a></li>
                    <li class="enlaceMenu"><a href="Contacto"><?php echo Lang::get('index.menuContacto')?></a></li>
                    
                </ul>
            </div>
        </div>
        <a class="btnSpanish" href="espaniol"><img class="imgIdioma" src="img/spain.png"></a>
        <a class="btnEnglish" href="ingles"><img class="imgIdioma" src="img/england.png"></a>
    </div>
    <div class="container body-content animated slideInUp">