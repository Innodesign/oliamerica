@extends('layouts.Layout')

@section('content')

<div class="row cabeceraNosotros">
    <div class="iconoCabeceraNosotros">
      <i class="fa fa-home"></i>
    </div>
    <div class="col-md-12">
      <h3 class="headerNosotros text-center">
        {{ Lang::get('nosotros.tituloNosotros') }}</h3>
    </div>
</div>

<div class="row" style="margin-top:2em">
    <div class="col-md-3 text-center">
        <img src="{{ asset('img/aceituna.png') }}" alt="" style="vertical-align:middle" />
    </div>
    <div class="col-md-9">
        <p>{{ Lang::get('nosotros.parrafo1') }}</p>
        <p>{{ Lang::get('nosotros.parrafo2') }}</p>
        <p>{{ Lang::get('nosotros.parrafo3') }}</p>
    </div>
</div>

<div class="row" style="margin-top:2em; margin-bottom:2em">
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





@endsection