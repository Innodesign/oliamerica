@extends('layouts.Layout')

@section('content')

<div class="row cabeceraNosotros">
    <h3 class="headerNosotros text-center">{{ Lang::get('noticias.tituloNoticias') }}</h3>
</div>
<div class="container contenidoNoticias">
    <div class="col-md-4 noticia">
        <a href="/Entrada">
            <img src="/img/blog.png" class="imgNoticia" alt="" />
            <div class="tituloEntrada">
                <h3>{{ Lang::get('noticias.titulo1') }}</h3>    
            </div>
        </a>
    </div>
    <div class="col-md-4 noticia">
        <a href="/Entrada">
            <img src="/img/blog.png" class="imgNoticia" alt="" />
            <div class="tituloEntrada">
                <h3>{{ Lang::get('noticias.titulo2') }}</h3>    
            </div>    
        </a>
    </div>
    <div class="col-md-4 noticia">
        <a href="/Entrada">
            <img src="/img/blog.png" class="imgNoticia" alt="" />
            <div class="tituloEntrada">
                <h3>{{ Lang::get('noticias.titulo3') }}</h3>    
            </div>    
        </a>
    </div>
    <div class="col-md-4 noticia">
        <a href="/Entrada">
            <img src="/img/blog.png" class="imgNoticia" alt="" />
            <div class="tituloEntrada">
                <h3>{{ Lang::get('noticias.titulo4') }}</h3>    
            </div>    
        </a>
    </div>
    <div class="col-md-4 noticia">
        <a href="/Entrada">
            <img src="/img/blog.png" class="imgNoticia" alt="" />
            <div class="tituloEntrada">
                <h3>{{ Lang::get('noticias.titulo5') }}</h3>    
            </div>    
        </a>
    </div>
    <div class="col-md-4 noticia">
        <a href="/Entrada">
            <img src="/img/blog.png" class="imgNoticia" alt="" />
            <div class="tituloEntrada">
                <h3>{{ Lang::get('noticias.titulo6') }}</h3>    
            </div>    
        </a>
    </div>

    
</div>
<div class="container">
    <div class="col-md-12 text-center" style="margin: 2em 0">
        <a href="" class="btnVerArticulos">Ver Más Artículos</a>    
    </div>   
</div>
@endsection