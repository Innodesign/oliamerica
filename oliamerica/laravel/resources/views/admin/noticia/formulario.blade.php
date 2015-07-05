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

<div class="row text-center" style="margin-right:0">
    <h3>{{ $viewModel->titulo }}</h3>
    <p>{{ $viewModel->descripcion }}</p>
    <hr>
</div>
<div class="row">
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
        <button type="submit">Guardar</button>
    </form>
</div>

@endsection
