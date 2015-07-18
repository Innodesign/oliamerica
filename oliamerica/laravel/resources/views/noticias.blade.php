@extends('layouts.Layout')

@section('content')

<div class="row cabeceraNosotros">
    <h3 class="headerNosotros text-center">{{ Lang::get('noticias.tituloNoticias') }}</h3>
</div>
<div class="container contenidoNoticias">
    @foreach($noticias as $noticia)
        <div class="col-md-4 noticia">
            <div class="">
                <h4 class="txtTituloNoticia">{{ $noticia->titulo }}</h4>    
            </div>
            <div>
                {!! $noticia->contenido !!}
            </div>
            <div class="leer-mas">
                <a href="/entrada/{{$noticia->id}}"><i class="fa fa-eye"></i> Ver </a>
            </div>
        </div>
    @endforeach
</div>
<div class="container">
    <div class="col-md-12 text-center" style="margin: 2em 0">
        {!! $noticias->render() !!}   
    </div>   
</div>
@endsection