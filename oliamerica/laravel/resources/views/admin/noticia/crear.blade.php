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

        $('.formNoticia').submit(function(){
            $('#editor').val($('#editor').code());
            return true;
        });
    });
</script>

@endsection

<div class="row text-center" style="margin-right:0">
    <h3>Nueva Noticia</h3>
    <p>Por favor, complete los siguientes campos para crear una nueva noticia.</p>
    <hr>
</div>
<div class="row" style="margin-top:2em; margin-right:0">
    <form class="formNoticia" method="post" action="/admin/noticia/guardar" enctype="multipart/form-data"> 
        <div class="form-group">
            <label for="titulo">Titulo</label>
            <input type="text" class="form-control" name="titulo" style="width:50%">
        </div>
        <textarea id="editor" name="contenido">
            
        </textarea>
        <button type="submit">Crear</button>
    </form>

</div>

@endsection
