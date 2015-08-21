<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>OLIAMERICA - @yield('title')</title>
    <link href="/css/normalize.css" rel="stylesheet" />
    <link href="/css/bootstrap.min.css" rel="stylesheet" />
    <link href="/css/font-awesome.min.css" rel="stylesheet" />
    <link href="/css/admin.css" rel="stylesheet" />
    <link href="/css/animate.css" rel="stylesheet" />
    @yield('css')
</head>
<body>
    <div class="row" style="background:#689F38; margin-right:0">
        <div class="col-md-2 menuPrincipal" style="padding:0">
            <nav class="navbar navbar-default" role="navigation" style="border:0">
                <!-- Brand and toggle get grouped for better mobile display -->
                <div class="navbar-header" style="background:#fff;width:100%">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="/admin">
                        <img src="/img/logo.png" class="logo" alt="Oliamerica">
                    </a>
                </div>
                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse navbar-ex1-collapse" style="background:#689F38; width:100%">
                    <ul class="nav navbar-nav" style="margin-top:2em; margin-left:1em">
                        <li><a href="/admin/noticia/crear"><i class="fa fa-pencil"></i> Crear Noticia</a></li>
                        <li><a href="/admin/noticia"><i class="fa fa-bars"></i> Ver Noticias</a></li>
                        <li><a href="/auth/logout"><i class="fa fa-key"></i> Cerrar Sesión</a></li>
                    </ul>

                </div><!-- /.navbar-collapse -->
            </nav>
        </div>
        <div class="col-md-10 contenidoAdmin">
            <div class="row" style="padding:0.43em 0 0 2em; border-bottom: 5px #689F38 solid; background:#565555">
                <h1 style="color:#f8f8f8;">Panel de Administración OLIAMERICA</h1>
            </div>
            <div class="body-content">
               @yield('content')
            </div>    
        </div>
    </div> 
    
    <footer>
        <p>&copy; 2015 - OLIAMERICA S.A.C. / Diseñado por <a href="http://id-peru.com">Innodesign</a></p>
    </footer>
    <script src="/js/jquery-1.10.2.min.js")></script>
    <script src="/js/bootstrap.min.js")></script>
    <script src="/js/jquery.bxslider.min.js")></script>
    @yield('scripts')

    

</body>
</html>
