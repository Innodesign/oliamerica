@extends('layouts.Layout')

@section('content')

<style type="text/css">
  .nav-tabs > li, .nav-pills > li {
    float:none;
    display:inline-block;
    *display:inline; /* ie7 fix */
     zoom:1; /* hasLayout ie7 trigger */
  }

  .nav-tabs, .nav-pills {
      text-align:center;
  }
</style>

<div class="row cabeceraNosotros">
    <div class="iconoCabeceraNosotros">
      <i class="fa fa-shopping-cart"></i>
    </div>
    <div class="col-md-12">
      <h3 class="headerNosotros text-center">{{ Lang::get('productos.tituloProductos') }}</h3>
    </div>
</div>
<div class="container" style="padding-top:3em; padding-bottom:3em">
    <!-- Nav tabs -->
      <ul class="nav nav-tabs" role="tablist">
        <li role="presentation" class="active"><a href="#home" aria-controls="home" role="tab" data-toggle="tab" style="color:#60883B">{{ Lang::get('productos.aceitunanegra') }}</a></li>
        <li role="presentation"><a href="#profile" aria-controls="profile" role="tab" data-toggle="tab" style="color:#60883B">{{ Lang::get('productos.aceitunaverde') }}</a></li>
        <li role="presentation"><a href="#messages" aria-controls="messages" role="tab" data-toggle="tab" style="color:#60883B">{{ Lang::get('productos.aceitunarellena') }}</a></li>
        <li role="presentation"><a href="#settings" aria-controls="settings" role="tab" data-toggle="tab" style="color:#60883B">{{ Lang::get('productos.aceiteoliva') }}</a></li>
      </ul>

      <!-- Tab panes -->
      <div class="tab-content text-center">
        <div role="tabpanel" class="tab-pane fade in active" id="home">
            <img src="{{ asset('img/productos/aceituna-negra.png') }}">
        </div>
        <div role="tabpanel" class="tab-pane fade" id="profile">
            <img src="{{ asset('img/productos/aceituna-verde.png') }}">
        </div>
        <div role="tabpanel" class="tab-pane fade" id="messages">
            <img src="{{ asset('img/productos/aceituna-rellena.png') }}">
        </div>
        <div role="tabpanel" class="tab-pane fade" id="settings">
            <img src="{{ asset('img/productos/aceite-oliva.png') }}">
        </div>
      </div>
</div>
@endsection