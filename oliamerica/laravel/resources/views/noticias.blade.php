@extends('layouts.Layout')

@section('content')

<div class="row cabeceraNosotros">
    <div class="iconoCabeceraNosotros">
      <i class="fa fa-newspaper-o"></i>
    </div>
    <div class="col-md-12">
        <h3 class="headerNosotros text-center">{{ Lang::get('noticias.tituloNoticias') }}</h3>
    </div>
</div>
<div class="container contenidoNoticias" style="margin-top:2em">
    <div class="col-md-7">
        
        <div>
            <img src="/img/premio.jpg">
        </div>
        <div class="leer-mas">
            <a href="/entrada/2"><i class="fa fa-eye"></i> Ver </a>
        </div>
    </div>
    <div class="col-md-5">
        <div class="">
            <h4 class="txtTituloNoticia">titulo</h4>    
        </div>    
    </div>
    
</div>
<div class="container contenidoNoticias">
    @foreach($noticias as $noticia)
        <div class="col-md-4 noticia">
            <div class="">
                <h4 class="txtTituloNoticia">{{ $noticia->titulo }}</h4>    
            </div>
            <div style="overflow:hidden">
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