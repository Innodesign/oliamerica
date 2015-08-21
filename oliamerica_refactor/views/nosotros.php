<div class="row cabeceraNosotros">
    <h3 class="headerNosotros text-center"><?php echo Lang::get('nosotros.tituloNosotros') ?></h3>
</div>

<div class="row" style="margin-top:2em">
    <div class="col-md-3 text-center">
        <img src="img/aceituna.png" alt="" style="vertical-align:middle" />
    </div>
    <div class="col-md-9">
        <p><?php echo Lang::get('nosotros.parrafo1') ?></p>
        <p><?php echo Lang::get('nosotros.parrafo2') ?></p>
        <p><?php echo Lang::get('nosotros.parrafo3') ?></p>
    </div>
</div>

<div class="container" style="margin-top:2em; margin-bottom:2em">
    <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
          <div class="panel panel-default">
            <div class="panel-heading" role="tab" id="headingOne">
              <h3 class="panel-title tituloInterno">
                <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                  <p><?php echo Lang::get('nosotros.tituloMision') ?></p>
                </a>
              </h3>
            </div>
            <div id="collapseOne" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne">
              <div class="panel-body">
                <p>
                    <?php echo Lang::get('nosotros.descripcionMision') ?>
                </p>
              </div>
            </div>
          </div>
          <div class="panel panel-default">
            <div class="panel-heading" role="tab" id="headingTwo">
              <h3 class="panel-title tituloInterno">
                <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                  <?php echo Lang::get('nosotros.tituloVision') ?>
                </a>
              </h3>
            </div>
            <div id="collapseTwo" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
              <div class="panel-body">
                <p>
                    <?php echo Lang::get('nosotros.descripcionVision') ?>
                </p>
              </div>
            </div>
          </div>
          
          <div class="panel panel-default">
            <div class="panel-heading" role="tab" id="headingFour">
              <h3 class="panel-title tituloInterno">
                <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                  <?php echo Lang::get('nosotros.tituloObjetivos') ?>
                  
                </a>
              </h3>
            </div>
            <div id="collapseFour" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingFour" aria-expanded="">
              <div class="panel-body">
                 <ul>
                    <li>
                        <?php echo Lang::get('nosotros.objetivo1') ?>
                    </li>
                    <li>
                        <?php echo Lang::get('nosotros.objetivo2') ?>
                    </li>
                    <li>
                        <?php echo Lang::get('nosotros.objetivo3') ?>
                    </li>
                    <li>
                        <?php echo Lang::get('nosotros.objetivo4') ?>
                    </li>
                    <li>
                        <?php echo Lang::get('nosotros.objetivo5') ?>
                    </li>
                    <li>
                        <?php echo Lang::get('nosotros.objetivo6') ?>
                    </li>
                </ul>
              </div>
            </div>
          </div>
          <div class="panel panel-default">
            <div class="panel-heading" role="tab" id="headingFive">
              <h3 class="panel-title tituloInterno">
                <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
                  <?php echo Lang::get('nosotros.tituloValoresCorporativos') ?>
                  
                </a>
              </h3>
            </div>
            <div id="collapseFive" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingFive">
              <div class="panel-body">
                <ul>
                    <li>
                        <?php echo Lang::get('nosotros.valor1') ?>

                    </li>
                    <li>
                        <?php echo Lang::get('nosotros.valor2') ?>
                        
                    </li>
                    <li>
                        <?php echo Lang::get('nosotros.valor3') ?>
                        
                    </li>
                    <li>
                        <?php echo Lang::get('nosotros.valor4') ?>
                        
                    </li>
                </ul>
              </div>
            </div>
          </div>
    </div>
</div>