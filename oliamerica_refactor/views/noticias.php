<div class="row cabeceraNosotros">
    <h3 class="headerNosotros text-center"><?php echo Lang::get('noticias.tituloNoticias') ?></h3>
</div>
<div class="container contenidoNoticias">
    <?php
    foreach($noticias as $noticia){
        ?>
        <div class="col-md-4 noticia">
            <div class="">
                <h4 class="txtTituloNoticia"><?php echo $noticia->titulo ?></h4>    
            </div>
            <div style="overflow:hidden">
                <?php echo $noticia->contenido ?>
            </div>
            <div class="leer-mas">
                <a href="entrada/<?php echo $noticia->id ?>"><i class="fa fa-eye"></i> Ver </a>
            </div>
        </div>
    <?php } ?>
</div>
<div class="container">
    <div class="col-md-12 text-center" style="margin: 2em 0">
        {!! $noticias->render() !!}   
    </div>   
</div>