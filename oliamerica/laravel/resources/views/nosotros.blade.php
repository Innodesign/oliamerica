@extends('layouts.Layout')

@section('content')

<div class="row cabeceraNosotros">
    <h3 class="headerNosotros text-center">{{ Lang::get('nosotros.tituloNosotros') }}</h3>
</div>

<div class="row" style="margin-top:2em">
    <div class="col-md-3 text-center">
        <img src="/img/aceituna.png" alt="" style="vertical-align:middle" />
    </div>
    <div class="col-md-9">
        <p>{{ Lang::get('nosotros.parrafo1') }}</p>
        <p>{{ Lang::get('nosotros.parrafo2') }}</p>
        <p>{{ Lang::get('nosotros.parrafo3') }}</p>
    </div>
</div>

<div class="container" style="margin-top:2em">
    <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
          <div class="panel panel-default">
            <div class="panel-heading" role="tab" id="headingOne">
              <h3 class="panel-title tituloInterno">
                <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                  <p>{{ Lang::get('nosotros.tituloMision') }}</p>
                </a>
              </h3>
            </div>
            <div id="collapseOne" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne">
              <div class="panel-body">
                <p>
                    {{ Lang::get('nosotros.descripcionMision') }}
                </p>
              </div>
            </div>
          </div>
          <div class="panel panel-default">
            <div class="panel-heading" role="tab" id="headingTwo">
              <h3 class="panel-title tituloInterno">
                <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                  {{ Lang::get('nosotros.tituloVision') }}
                </a>
              </h3>
            </div>
            <div id="collapseTwo" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
              <div class="panel-body">
                <p>
                    {{ Lang::get('nosotros.descripcionVision') }}
                </p>
              </div>
            </div>
          </div>
          <div class="panel panel-default">
            <div class="panel-heading" role="tab" id="headingThree">
              <h3 class="panel-title tituloInterno">
                <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                  {{ Lang::get('nosotros.tituloPolitica') }}
                  
                </a>
              </h3>
            </div>
            <div id="collapseThree" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree">
              <div class="panel-body">
                    <p>
                        {{ Lang::get('nosotros.politica1') }}
                    </p>
                    <p>
                        {{ Lang::get('nosotros.politica2') }}
                    </p>
              </div>
            </div>
          </div>
          <div class="panel panel-default">
            <div class="panel-heading" role="tab" id="headingFour">
              <h3 class="panel-title tituloInterno">
                <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                  {{ Lang::get('nosotros.tituloObjetivos') }}
                  
                </a>
              </h3>
            </div>
            <div id="collapseFour" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingFour" aria-expanded="">
              <div class="panel-body">
                 <ul>
                    <li>
                        {{ Lang::get('nosotros.objetivo1') }}
                    </li>
                    <li>
                        {{ Lang::get('nosotros.objetivo2') }}
                    </li>
                    <li>
                        {{ Lang::get('nosotros.objetivo3') }}
                    </li>
                    <li>
                        {{ Lang::get('nosotros.objetivo4') }}
                    </li>
                    <li>
                        {{ Lang::get('nosotros.objetivo5') }}
                    </li>
                    <li>
                        {{ Lang::get('nosotros.objetivo6') }}
                    </li>
                </ul>
              </div>
            </div>
          </div>
          <div class="panel panel-default">
            <div class="panel-heading" role="tab" id="headingFive">
              <h3 class="panel-title tituloInterno">
                <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
                  {{ Lang::get('nosotros.tituloValoresCorporativos') }}
                  
                </a>
              </h3>
            </div>
            <div id="collapseFive" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingFive">
              <div class="panel-body">
                <ul>
                    <li>
                        {{ Lang::get('nosotros.valor1') }}

                    </li>
                    <li>
                        {{ Lang::get('nosotros.valor2') }}
                        
                    </li>
                    <li>
                        {{ Lang::get('nosotros.valor3') }}
                        
                    </li>
                    <li>
                        {{ Lang::get('nosotros.valor4') }}
                        
                    </li>
                </ul>
              </div>
            </div>
          </div>
    </div>
</div>




<div class="row" style="background: #f2f2f2; margin-top:2em; padding: 2em 0">
    <div class="col-md-6 text-center">
        <h2 class="subtitulo text-center"><i class="fa fa-check"></i> Misión</h2>
        <p>
            “Somos una empresa que procesa  aceitunas de mesa de óptima calidad, comprometida  con la satisfacción  de
            nuestros consumidores, asegurando la fidelidad de nuestros clientes y promoviendo el crecimiento personal de
            nuestros colaboradores”.
        </p>
    </div>
    <div class="col-md-6 text-center">
        <h2 class="subtitulo text-center"><i class="fa fa-trophy"></i> Visión</h2>
        <p>
            “Ser líder como empresa exportadora de aceitunas de mesa y sus derivados, con posicionamiento nacional e
            internacional”.
        </p>
    </div>
</div>
<div class="row" style="background: #f2f2f2; padding: 1em 0 2em 0">
    <div class="col-md-9" style="margin-top:2em">
        <p>
            En OLIAMERICA S.A.C. nos dedicamos al procesamiento de aceitunas de mesa y sus derivados, envasadas en diversas
            presentaciones.  Asumimos, como compromiso,  la búsqueda de la satisfacción de las necesidades de nuestros
            clientes mediante la entrega oportuna  de productos de calidad e inocuos que excedan sus expectativas.
            Para ello contamos con un personal altamente comprometido con los objetivos de nuestra organización y con el
            cumplimiento de la legislación nacional e internacional así como  con los requisitos de nuestros clientes.
        </p>
        <p>
            Aseguramos el cumplimiento de nuestros objetivos a través del diseño e implantación de la Norma Buenas Prácticas
            de Manufactura y Gestión, Buenas Prácticas Logísticas y  el Sistema de Gestión de Inocuidad, que involucran a
            todos los niveles de la organización y se encuentran  basados en la prevención y mejora continua.
        </p>
    </div>
    <div class="col-md-3 text-center">
        <h2 class="subtitulo">Política de Calidad</h2>
        <img src="/img/politica.png" alt="" />
    </div>
</div>
<div class="row">
    <div class="col-md-6">
        <h2 class="subtitulo text-center"><i class="fa fa-bars"></i> OBJETIVOS</h2>
        <ul>
            <li>
                Buscar la satisfacción de nuestros clientes en relación a nuestros productos y servicio brindado.
            </li>
            <li>
                Cumplir  con nuestros clientes  en fecha y  cantidad solicitada  sin errores.
            </li>
            <li>
                Trabajar con proveedores que cumplan nuestros estándares de calidad en sus productos  para garantizar la
                calidad e inocuidad de nuestros productos terminados.
            </li>
            <li>
                Cumplir con los lineamientos establecidos en  nuestros procesos establecidos tanto en el Sistema de
                Gestión de la Calidad de acuerdo a la norma BPMG y el Sistema de Gestión de Inocuidad.
            </li>
            <li>
                Capacitar, entrenar y evaluar permanentemente a nuestros colaboradores.
            </li>
            <li>
                Buscar  innovación constante en todos los procesos de la organización.
            </li>
        </ul>
    </div>
    <div class="col-md-6">
        <h2 class="subtitulo text-center"><i class="fa fa-building-o"></i> VALORES CORPORATIVOS</h2>
        <ul>
            <li>
                <strong>Perseverancia</strong> - Firmeza y constancia ante las adversidades.
            </li>
            <li>
                <strong>Orden y Limpieza</strong> - Obtener productos inocuos.
            </li>
            <li>
                <strong>Eficiencia</strong> - Capacidad de respuesta oportuna.
            </li>
            <li>
                <strong>Compromiso</strong> - Identificado con la visión, misión y objetivos de la empresa.
            </li>
        </ul>
    </div>
</div>
@endsection