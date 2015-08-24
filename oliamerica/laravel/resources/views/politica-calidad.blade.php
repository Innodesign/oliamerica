@extends('layouts.Layout')

@section('content')

<div class="row cabeceraNosotros">
    <div class="iconoCabeceraNosotros">
      <i class="fa fa-check"></i>
    </div>
    <div class="col-md-12">
        <h3 class="headerNosotros text-center">POLÍTICA DE CALIDAD</h3>
    </div>
</div>
<div class="container" style="padding-top:3em; padding-bottom:3em">
    <div class="col-md-3 text-center">
        <img src="{{ asset('img/aceituna.png') }}" alt="" style="vertical-align:middle" />
    </div>
    <div class="col-md-9">
        <p>En OLIAMERICA S.A.C. nos dedicamos al procesamiento de aceitunas de mesa y sus derivados, envasadas en diversas presentaciones.  Asumimos, como compromiso,  la búsqueda de la satisfacción de las necesidades de nuestros clientes mediante la entrega oportuna  de productos de calidad e inocuos que excedan sus expectativas.  </p>

        <p>
          Para ello contamos con un personal altamente comprometido con los objetivos de nuestra organización y con el cumplimiento de la legislación nacional e internacional así como  con los requisitos de nuestros clientes.
        </p>
        <p>Aseguramos el cumplimiento de nuestros objetivos a través del diseño e implantación de la Norma Buenas Prácticas de Manufactura y Gestión, Buenas Prácticas Logísticas y  el Sistema de Gestión de Inocuidad, que involucran a todos los niveles de la organización y se encuentran  basados en la prevención y mejora continua. </p>
        <img src="{{ asset('img/productos/politica.png') }}" style="width:100%">
    </div>
</div>

@endsection