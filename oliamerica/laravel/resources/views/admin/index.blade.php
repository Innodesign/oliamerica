@extends('layouts.admin_Layout')

@section('content')

<div class="row text-center" style="margin-right:0">
    <h3>Bienvenido a la Oficina Virtual de ELECTROSUR S.A.</h3>
    <p>Por medio de esta plataforma, Usted podrá visualizar y consultar todo relacionado a su servicio de electricidad.</p>
    <hr>
</div>
<div class="row text-center" style="margin-top:2em; margin-right:0">
    <div class="col-md-4">
        <a href="/Crear"><img src="/img/noticia1.png" alt="Alternate Text"></a>
        <h5>Crea nuevas entradas en la seccion "Noticias"</h5>
    </div>
    <div class="col-md-4">
        <img src="/img/noticia2.png" alt="Alternate Text">
        <h5>Visualiza y edita las noticias publicadas anteriormente</h5>
    </div>
    <div class="col-md-4">
        <a href="/Ver"><img src="/img/noticia3.png" alt="Alternate Text"></a>
        <h5>Historial de tus noticias</h5>
    </div>
</div>
@endsection