@extends('layouts.admin_Layout')

@section('content')

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
        <div class="form-group">
            <label for="imagen">Imagen</label>
            <input type="file" class="form-control" name="imagen" style="width:30%">
        </div>
        <div class="form-group">
            <label for="descripcion">Descripcion</label>
            <textarea rows="4" class="form-control" name="descripcion" cols="12"></textarea>
        </div>
        <button type="submit">Crear</button>
    </form>

</div>

@endsection
