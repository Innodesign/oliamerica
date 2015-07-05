@extends('layouts.admin_Layout')

@section('content')

<div class="row cabeceraNosotros">
    <h3 class="headerNosotros text-center">ÚLTIMAS NOTICIAS</h3>
</div>
<div class="container contenidoNoticias" style="padding-top:3em; margin-bottom:3em">
    @foreach($noticias as $noticia)
        <div class="col-md-4 noticia">
            <a href="/Entrada">
                <img src="/uploads/{{$noticia->imagen}}" class="imgNoticia" alt="" />
                <div class="tituloEntrada">
                    <h3>{{$noticia->titulo}}</h3>    
                </div>
            </a>
        </div>
    @endforeach
</div>
<div class="container">
    <div class="col-md-12 text-center" style="margin: 2em 0">
        {!! $noticias->render() !!}   
    </div>   
</div>

@endsection