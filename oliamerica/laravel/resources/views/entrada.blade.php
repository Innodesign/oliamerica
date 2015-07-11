@extends('layouts.Layout')

@section('content')

<div class="container cabeceraNoticia">
    <h1>{{ $noticia->titulo }}</h1>
</div>
<hr style="border-top:1px solid #ccc; width:85%">
<div class="container contenidoNoticias">
    <div class="datosEntrada">
        <p class="autor">{{ $noticia->autor }}</p>
        <p class="fecha pull-right">{{ $noticia->obtenerFecha() }}</p>          
    </div>
    
    <div class="col-md-12">
        {!! $noticia->contenido !!}
    </div>
    
</div>
<hr style="border-top:1px solid #ccc; width:85%">
<div class="container comentarios text-center">
    <div id="fb-root"></div>
    <script>(function(d, s, id) {
      var js, fjs = d.getElementsByTagName(s)[0];
      if (d.getElementById(id)) return;
      js = d.createElement(s); js.id = id;
      js.src = "//connect.facebook.net/es_LA/sdk.js#xfbml=1&version=v2.3&appId=754333304631697";
      fjs.parentNode.insertBefore(js, fjs);
    }(document, 'script', 'facebook-jssdk'));</script>
    <div class="fb-comments" data-href="http://oliamerica.com/" data-width="100%" data-numposts="5"></div>
</div>

    
@endsection