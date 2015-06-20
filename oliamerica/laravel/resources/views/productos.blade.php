@extends('layouts.es_Layout')

@section('content')

<div class="row cabeceraNosotros">
    <h3 class="headerNosotros text-center">NUESTROS PRODUCTOS</h3>
</div>
<div class="row" style="padding-top:3em">
    
    <div class="carousel slide" id="myCarousel">
        <div class="carousel-inner">
            <div class="item active">
                <ul class="thumbnails">
                    <li class="col-sm-3 enlaceNone">
                        <div class="fff">
                            <div class="thumbnail">
                                <a href="#"><img src="http://placehold.it/360x240" alt=""></a>
                            </div>
                            <div class="caption">
                                <h4>Aceitunas Verdes</h4>
                                <p>Rodajas</p>
                                <a class="btn btn-mini" href="#">» Ver</a>
                            </div>
                        </div>
                    </li>
                    <li class="col-sm-3 enlaceNone">
                        <div class="fff">
                            <div class="thumbnail">
                                <a href="#"><img src="http://placehold.it/360x240" alt=""></a>
                            </div>
                            <div class="caption">
                                <h4>Aceitunas Verdes</h4>
                                <p>Deshuesadas</p>
                                <a class="btn btn-mini" href="#">» Ver</a>
                            </div>
                        </div>
                    </li>
                    <li class="col-sm-3 enlaceNone">
                        <div class="fff">
                            <div class="thumbnail">
                                <a href="#"><img src="http://placehold.it/360x240" alt=""></a>
                            </div>
                            <div class="caption">
                                <h4>Ascolana verde</h4>
                                <p>Estilo Siciliano</p>
                                <a class="btn btn-mini" href="#">» Ver</a>
                            </div>
                        </div>
                    </li>
                    <li class="col-sm-3 enlaceNone">
                        <div class="fff">
                            <div class="thumbnail">
                                <a href="#"><img src="http://placehold.it/360x240" alt=""></a>
                            </div>
                            <div class="caption">
                                <h4>Ascolana Verdes</h4>
                                <p>Estilo Español</p>
                                <a class="btn btn-mini" href="#">» Ver</a>
                            </div>
                        </div>
                    </li>
                </ul>
            </div><!-- /Slide1 -->
            <div class="item">
                <ul class="thumbnails">
                    <li class="col-sm-3 enlaceNone">
                        <div class="fff">
                            <div class="thumbnail">
                                <a href="#"><img src="http://placehold.it/360x240" alt=""></a>
                            </div>
                            <div class="caption">
                                <h4>Sevillana Verdes</h4>
                                <p>Estilo Español</p>
                                <a class="btn btn-mini" href="#">» Ver</a>
                            </div>
                        </div>
                    </li>
                    <li class="col-sm-3 enlaceNone">
                        <div class="fff">
                            <div class="thumbnail">
                                <a href="#"><img src="http://placehold.it/360x240" alt=""></a>
                            </div>
                            <div class="caption">
                                <h4>Aceitunas Verdes</h4>
                                <p>Rellenas</p>
                                <a class="btn btn-mini" href="#">» Ver</a>
                            </div>
                        </div>
                    </li>
                    <li class="col-sm-3 enlaceNone">
                        <div class="fff">
                            <div class="thumbnail">
                                <a href="#"><img src="http://placehold.it/360x240" alt=""></a>
                            </div>
                            <div class="caption">
                                <h4>Ascolana Negra</h4>
                                <p>Natural</p>
                                <a class="btn btn-mini" href="#">» Ver</a>
                            </div>
                        </div>
                    </li>
                    <li class="col-sm-3 enlaceNone">
                        <div class="fff">
                            <div class="thumbnail">
                                <a href="#"><img src="http://placehold.it/360x240" alt=""></a>
                            </div>
                            <div class="caption">
                                <h4>Empeltre Negra</h4>
                                <p>Natural</p>
                                <a class="btn btn-mini" href="#">» Ver</a>
                            </div>
                        </div>
                    </li>
                </ul>
            </div><!-- /Slide2 -->
            <div class="item">
                <ul class="thumbnails">
                    <li class="col-sm-3 enlaceNone">
                        <div class="fff">
                            <div class="thumbnail">
                                <a href="#"><img src="http://placehold.it/360x240" alt=""></a>
                            </div>
                            <div class="caption">
                                <h4>Aceituna Negra</h4>
                                <p>Deshuesada</p>
                                <a class="btn btn-mini" href="#">» Ver</a>
                            </div>
                        </div>
                    </li>
                    <li class="col-sm-3 enlaceNone">
                        <div class="fff">
                            <div class="thumbnail">
                                <a href="#"><img src="http://placehold.it/360x240" alt=""></a>
                            </div>
                            <div class="caption">
                                <h4>Aceituna Negra</h4>
                                <p>Rodajas</p>
                                <a class="btn btn-mini" href="#">» Ver</a>
                            </div>
                        </div>
                    </li>
                    <li class="col-sm-3 enlaceNone">
                        <div class="fff">
                            <div class="thumbnail">
                                <a href="#"><img src="http://placehold.it/360x240" alt=""></a>
                            </div>
                            <div class="caption">
                                <h4>Sevillana Negra</h4>
                                <p>Natural</p>
                                <a class="btn btn-mini" href="#">» Ver</a>
                            </div>
                        </div>
                    </li>
                    <li class="col-sm-3 enlaceNone">
                        <div class="fff">
                            <div class="thumbnail">
                                <a href="#"><img src="http://placehold.it/360x240" alt=""></a>
                            </div>
                            <div class="caption">
                                <h4>xxxx</h4>
                                <p>Natural</p>
                                <a class="btn btn-mini" href="#">» Ver</a>
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