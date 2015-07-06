@extends('layouts.Layout')

@section('content')

<div class="row cabeceraNosotros">
    <h3 class="headerNosotros text-center">{{ Lang::get('productos.tituloProductos') }}</h3>
</div>
<div class="row" style="padding-top:3em">
    
    <div class="carousel slide" id="myCarousel">
        <div class="carousel-inner">
            <div class="item active">
                <h2 style="padding:0 0 0 2em">{{ Lang::get('productos.categoria1') }}</h2>
                <ul class="thumbnails">
                    <li class="col-sm-3 enlaceNone">
                        <div class="fff">
                            <div class="thumbnail">
                                <a href="#"><img src="http://placehold.it/360x240" alt=""></a>
                            </div>
                            <div class="caption">
                                <h4>{{ Lang::get('productos.producto1') }}</h4>
                                <!-- <p>Rodajas</p> -->
                                <a class="btn btn-mini" href="#">» {{ Lang::get('productos.btnVer') }}</a>
                            </div>
                        </div>
                    </li>
                    <li class="col-sm-3 enlaceNone">
                        <div class="fff">
                            <div class="thumbnail">
                                <a href="#"><img src="http://placehold.it/360x240" alt=""></a>
                            </div>
                            <div class="caption">
                                <h4>{{ Lang::get('productos.producto2') }}</h4>
                                <!-- <p>Deshuesadas</p> -->
                                <a class="btn btn-mini" href="#">» {{ Lang::get('productos.btnVer') }}</a>
                            </div>
                        </div>
                    </li>
                    <li class="col-sm-3 enlaceNone">
                        <div class="fff">
                            <div class="thumbnail">
                                <a href="#"><img src="http://placehold.it/360x240" alt=""></a>
                            </div>
                            <div class="caption">
                                <h4>{{ Lang::get('productos.producto3') }}</h4>
                                <!-- <p>Estilo Siciliano</p> -->
                                <a class="btn btn-mini" href="#">» {{ Lang::get('productos.btnVer') }}</a>
                            </div>
                        </div>
                    </li>
                    <!-- <li class="col-sm-3 enlaceNone">
                        <div class="fff">
                            <div class="thumbnail">
                                <a href="#"><img src="http://placehold.it/360x240" alt=""></a>
                            </div>
                            <div class="caption">
                                <h4>Ascolana {{ Lang::get('productos.btnVer') }}des</h4>
                                <p>Estilo Español</p>
                                <a class="btn btn-mini" href="#">» {{ Lang::get('productos.btnVer') }}</a>
                            </div>
                        </div>
                    </li> -->
                </ul>
            </div><!-- /Slide1 -->
            <div class="item">
                <h2 style="padding:0 0 0 2em">{{ Lang::get('productos.categoria2') }}</h2>
                <ul class="thumbnails">
                    <li class="col-sm-3 enlaceNone">
                        <div class="fff">
                            <div class="thumbnail">
                                <a href="#"><img src="http://placehold.it/360x240" alt=""></a>
                            </div>
                            <div class="caption">
                                <h4>{{ Lang::get('productos.producto4') }}</h4>
                                <!-- <p>Estilo Español</p> -->
                                <a class="btn btn-mini" href="#">» {{ Lang::get('productos.btnVer') }}</a>
                            </div>
                        </div>
                    </li>
                    <li class="col-sm-3 enlaceNone">
                        <div class="fff">
                            <div class="thumbnail">
                                <a href="#"><img src="http://placehold.it/360x240" alt=""></a>
                            </div>
                            <div class="caption">
                                <h4>{{ Lang::get('productos.producto5') }}</h4>
                                <!-- <p>Rellenas</p> -->
                                <a class="btn btn-mini" href="#">» {{ Lang::get('productos.btnVer') }}</a>
                            </div>
                        </div>
                    </li>
                    <li class="col-sm-3 enlaceNone">
                        <div class="fff">
                            <div class="thumbnail">
                                <a href="#"><img src="http://placehold.it/360x240" alt=""></a>
                            </div>
                            <div class="caption">
                                <h4>{{ Lang::get('productos.btnVer') }}</h4>
                                <!-- <p>Natural</p> -->
                                <a class="btn btn-mini" href="#">» {{ Lang::get('productos.btnVer') }}</a>
                            </div>
                        </div>
                    </li>
                    <!-- <li class="col-sm-3 enlaceNone">
                        <div class="fff">
                            <div class="thumbnail">
                                <a href="#"><img src="http://placehold.it/360x240" alt=""></a>
                            </div>
                            <div class="caption">
                                <h4>Empeltre Negra</h4>
                                <p>Natural</p>
                                <a class="btn btn-mini" href="#">» {{ Lang::get('productos.btnVer') }}</a>
                            </div>
                        </div>
                    </li> -->
                </ul>
            </div><!-- /Slide2 -->
            <div class="item">
                <h2 style="padding:0 0 0 2em">{{ Lang::get('productos.categoria3') }}</h2>
                <ul class="thumbnails">
                    <li class="col-sm-3 enlaceNone">
                        <div class="fff">
                            <div class="thumbnail">
                                <a href="#"><img src="http://placehold.it/360x240" alt=""></a>
                            </div>
                            <div class="caption">
                                <h4>{{ Lang::get('productos.producto7') }}</h4>
                                <!-- <p>Deshuesada</p> -->
                                <a class="btn btn-mini" href="#">» {{ Lang::get('productos.btnVer') }}</a>
                            </div>
                        </div>
                    </li>
                    <li class="col-sm-3 enlaceNone">
                        <div class="fff">
                            <div class="thumbnail">
                                <a href="#"><img src="http://placehold.it/360x240" alt=""></a>
                            </div>
                            <div class="caption">
                                <h4>{{ Lang::get('productos.producto8') }}</h4>
                                <!-- <p>Rodajas</p> -->
                                <a class="btn btn-mini" href="#">» {{ Lang::get('productos.btnVer') }}</a>
                            </div>
                        </div>
                    </li>
                    <li class="col-sm-3 enlaceNone">
                        <div class="fff">
                            <div class="thumbnail">
                                <a href="#"><img src="http://placehold.it/360x240" alt=""></a>
                            </div>
                            <div class="caption">
                                <h4>{{ Lang::get('productos.producto9') }}</h4>
                                <!-- <p>Natural</p> -->
                                <a class="btn btn-mini" href="#">» {{ Lang::get('productos.btnVer') }}</a>
                            </div>
                        </div>
                    </li>
                    <li class="col-sm-3 enlaceNone">
                        <div class="fff">
                            <div class="thumbnail">
                                <a href="#"><img src="http://placehold.it/360x240" alt=""></a>
                            </div>
                            <div class="caption">
                                <h4>{{ Lang::get('productos.producto10') }}</h4>
                                <!-- <p>Natural</p> -->
                                <a class="btn btn-mini" href="#">» {{ Lang::get('productos.btnVer') }}</a>
                            </div>
                        </div>
                    </li>
                </ul>
            </div><!-- /Slide3 -->
        </div>

        <nav>
            <ul class="control-box pager">
                <li><a data-slide="prev" href="#myCarousel" class=""><i class="glyphicon glyphicon-chevron-left"></i></a></li>
                <li><a data-slide="next" href="#myCarousel" class=""><i class="glyphicon glyphicon-chevron-right"></i></a></li>
            </ul>
        </nav>
        <!-- /.control-box -->

    </div><!-- /#myCarousel -->
</div>
@endsection