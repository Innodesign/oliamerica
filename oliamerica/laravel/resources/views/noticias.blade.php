@extends('layouts.Layout')

@section('content')

<div class="row cabeceraNosotros">
    <h3 class="headerNosotros text-center">{{ Lang::get('noticias.tituloNoticias') }}</h3>
</div>
<div class="container contenidoNoticias">
    <div class="col-md-4 noticia">
        <div class="tituloEntrada">
            <h3>titulo</h3>    
        </div>
        <div>
            contenido
        </div>
        <div class="leer-mas">
            <a href="/">Ver</a>
        </div>
    </div>
   <div class="col-md-4 noticia">
        <div class="tituloEntrada">
            <h3>titulo</h3>    
        </div>
        <div>
            contenido
        </div>
        <div class="leer-mas">
            <a href="/">Ver</a>
        </div>
    </div>
    <div class="col-md-4 noticia">
        <div class="tituloEntrada">
            <h3>titulo</h3>    
        </div>
        <div>
            contenido
        </div>
        <div class="leer-mas">
            <a href="/">Ver</a>
        </div>
    </div>
    <div class="col-md-4 noticia">
        <div class="tituloEntrada">
            <h3>titulo</h3>    
        </div>
        <div>
            contenido
        </div>
        <div class="leer-mas">
            <a href="/">Ver</a>
        </div>
    </div>
    <div class="col-md-4 noticia">
        <div class="tituloEntrada">
            <h3>titulo</h3>    
        </div>
        <div>
            contenido
        </div>
        <div class="leer-mas">
            <a href="/">Ver</a>
        </div>
    </div>
    <div class="col-md-4 noticia">
        <div class="tituloEntrada">
            <h3>titulo</h3>    
        </div>
        <div>
            contenido
        </div>
        <div class="leer-mas">
            <a href="/">Ver</a>
        </div>
    </div>

    
</div>
<div class="container">
    <div class="col-md-12 text-center" style="margin: 2em 0">
        <a href="" class="btnVerArticulos">Ver Más Artículos</a>    
    </div>   
</div>
@endsection