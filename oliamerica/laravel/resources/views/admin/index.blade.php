@extends('layouts.admin_Layout')

@section('content')

<div class="row text-center" style="margin-right:0">
    <h3>Bienvenido al Gestor de Contenido de OLIAMERICA</h3>
    <p>Por medio de esta plataforma, Usted podrá crear, editar y visualizar noticias para su publicación en la Web.</p>
    <hr>
</div>
<div class="row text-center" style="margin-top:2em; margin-right:0">
    <div class="col-md-4">
        <a href="/Admin/Crear"><img src="/img/noticia1.png" alt="Alternate Text"></a>
        <h5>Crea nuevas entradas en la seccion "Noticias"</h5>
    </div>
    <div class="col-md-4">
        <a href="/Admin/Ver"><img src="/img/noticia2.png" alt="Alternate Text"></a>
        <h5>Visualiza y edita las noticias publicadas anteriormente</h5>
    </div>
    <div class="col-md-4">
        <a href="/Ver"><img src="/img/noticia3.png" alt="Alternate Text"></a>
        <h5>Historial de tus noticias</h5>
    </div>
</div>
@endsection