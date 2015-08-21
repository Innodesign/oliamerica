@extends('layouts.Layout')

@section('content')
<div class="row" style="margin-top:5em">
    <div class="col-md-7" style="margin-top:2.5em">
        <ul class="bxslider">
            <li><img src="/img/slider/slider1.png" title="Proceso de Destilacion" /></li>
            <li><img src="/img/slider/slider2.png" title="Proceso de Destilacion" /></li>
            <li><img src="/img/slider/slider3.png" title="Proceso de Destilacion" /></li>
            <li><img src="/img/slider/slider4.png" title="Proceso de Destilacion" /></li>
        </ul>
    </div>
    <div class="col-md-5" style="margin-top:1.5em; padding:1em">
        
    <iframe width="100%" height="300" src="https://www.youtube.com/embed/ENbOmdVp4b4" frameborder="0" allowfullscreen></iframe>
    </div>
</div>
<div class="row" style="">
    
    <div class="col-md-3 col-xs-12 bordeado">
        <h3 class="subtituloLanding text-center"><?php echo Lang::get('index.tituloCertificaciones') ?></h3>
    </div>
    <div class="col-md-2 col-xs-6 text-center">
        <img src="/img/certificaciones/bpmg_opt.png" alt="" />
    </div>
    <div class="col-md-2 col-xs-6 text-center">
        <img src="/img/certificaciones/gs1sf_opt.png" alt="" style="margin-top:1.5em" />
    </div>
    <div class="col-md-5 col-xs-12 premioNacional" style="">
        <h3 class="subtituloLanding text-center">PREMIO NACIONAL A LAS MYPE 2013</h3>
        <img src="/img/premio.jpg" style="width:100%" height="195px" alt="" />
    </div>
</div>
<!-- <div class="row mensaje">
    <div class="col-md-8 col-md-offset-2">
        <p>
            En marzo del año 2015 nuestra gerente Ing. Julia Carrillo Yapuchura obtuvo  el segundo lugar a nivel nacional
            en el  "I Premio Nacional Mujer Emprendedora 2015" en la categoría Pequeña Empresa, evento organizado por Sierra
            Exportadora y la Presidencia del Consejo de Ministros.
        </p>
    </div>
    <div class="col-md-2"></div>
</div> -->
@endsection