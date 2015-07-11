@extends('layouts.admin_Layout')

@section('content')

<div class="row cabeceraNosotros" style="margin-top:1em">
    <div class="col-md-12">
        <ol class="breadcrumb">
          <li class="active"><h4>Noticias</h4></li>
        </ol>
    </div> 
</div>
@if(Session::has('message'))
<div class="row">
    <div class="col-md-8 col-md-offset-2">
        <div class="alert {{ Session::get('alert-class', 'alert-info') }} alert-dismissible fade in text-center" role="alert">
          <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span></button>
          <strong><i class="fa fa-check"></i></strong> {{ Session::get('message') }}
        </div>
    </div> 
</div>
@endif
<div class="container contenidoNoticias" style="margin-bottom:3em">
    @foreach($noticias as $noticia)
        <div class="col-md-4 noticia">
            <div class="tituloEntrada">
                <h4>{{$noticia->titulo}}</h4>    
            </div>
            <div>
                {!! $noticia->contenido !!}
            </div>
            <div class="leer-mas">
                <a href="/admin/noticia/editar/{{$noticia->id}}">Editar</a>
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