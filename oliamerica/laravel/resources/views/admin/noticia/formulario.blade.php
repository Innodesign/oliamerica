@extends('layouts.admin_Layout')

@section('content')

@section('css')

<link href="/css/summernote-bs3.css" rel="stylesheet" />
<link href="/css/summernote.css" rel="stylesheet" />
<style>
    .note-dialog .modal-dialog{ z-index:1060; }
</style>
@endsection

@section('scripts')

<script type="text/javascript" src="/js/summernote.min.js"></script>
<script type="text/javascript" src="/js/summernote-es-ES.js"></script>
<script type="text/javascript">
    $(function(){
        $('#editor').summernote({
            height : 400,
            lang: 'es-ES'
        });

        $('#editor').code({!! "'" . $model->contenido . "'" !!});

        $('.formNoticia').submit(function(){
            $('#editor').val($('#editor').code());
            return true;
        });
    });
</script>

@endsection

<div class="row cabeceraNosotros" style="margin-top:1em">
    <div class="col-md-12">
        <ol class="breadcrumb">
          <li><h4><a href="/admin/noticia">Noticias</a></h4></li>
          <li class="active"> {{ $viewModel->titulo }}</li>
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
<div class="row" style="padding:0 0 3em 0">
    <form class="formNoticia" method="post" action="{{ $viewModel->rutaFormulario}}" enctype="multipart/form-data"> 
        <div class="form-group col-sm-12">
            <label for="titulo">Titulo</label>
            <input type="text" class="form-control" name="titulo" value="{{ $model->titulo}}">
        </div>
        <div class="form-group col-sm-12 col-md-6">
            <label for="lenguaje">Lenguaje</label>
            {!! Form::select('lenguaje', $viewModel->lenguajes,$model->lenguaje, ['class' => 'form-control']) !!}
        </div>
        <div class="form-group col-sm-12 col-md-6">
            <label for="estado">¿Se visualiza?</label>
            {!! Form::select('estado', $viewModel->estados,$model->estado, ['class' => 'form-control']) !!}
        </div>
        <div class="form-group" style="padding:0 15px">
            <label for="titulo">Contenido</label>
            <textarea class="form-control" id="editor" name="contenido">
            
            </textarea>
        </div>
        <button type="submit" id="btnGuardarNoticia">Guardar</button>
    </form>
</div>

@endsection
