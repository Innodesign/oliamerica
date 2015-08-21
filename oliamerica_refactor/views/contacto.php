<div class="row cabeceraNosotros">
    <h3 class="headerNosotros text-center"><?php echo Lang::get('contacto.titulo') ?></h3>
</div>
<div class="row">
    <div class="col-md-6">
        <h3 class="headerContacto"><?php echo Lang::get('contacto.header') ?></h3>
        <div class="row">
            <div class="col-12 formContacto">
                <div class="form-group">
                    <label for="nombre"><?php echo Lang::get('contacto.nombre') ?></label>
                    <input type="text" class="form-control" name="nombre" value="" />
                </div>
                <div class="form-group">
                    <label for="email"><?php echo Lang::get('contacto.email') ?></label>
                    <input type="email" class="form-control" value="" />
                </div>
                <div class="form-group">
                    <label for="mensaje"><?php echo Lang::get('contacto.mensaje') ?></label>
                    <textarea name cols="4" rows="5" class="form-control" style="resize:none"></textarea>
                </div>
                <a href="" class="btnEnviar"><?php echo Lang::get('contacto.btnEnviar') ?> <i class="fa fa-paper-plane"></i></a>
            </div>
        </div>
    </div>
    <div class="col-md-6">
        <h3 class="headerContacto"><?php echo Lang::get('contacto.ubicanos') ?></h3>
        <div class="row">
            <div id="innomap" style="margin: 1em; width:95.5%;height:300px"></div>
            <div id="map" data-start="opacity: 1;" data-250="opacity: 0;"></div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="col-md-6">
                    <p><strong><?php echo Lang::get('contacto.direccion') ?></strong> Asoc. 1ro de Setiembre Mz 04 Lt 23, CPM AUGUSTO B. LEGUÍA (OFIC.01.SEGUNDO PISO)</p>
                    <p><strong><i class="fa fa-map-marker"></i> TACNA - PERÚ</strong></p>
                </div>
                <div class="col-md-6">
                    <p><strong><i class="fa fa-phone"></i> <?php echo Lang::get('contacto.telefono') ?></strong> 0051-52-314238</p>
                    <p><strong><i class="fa fa-envelope-o"></i> Email:</strong> oliamerica@oliamerica.com</p>
                </div>
                
                
            </div>
        </div>

    </div>
</div>
