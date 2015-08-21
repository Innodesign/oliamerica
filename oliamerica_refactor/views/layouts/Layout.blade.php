<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>OLIAMERICA - @yield('title')</title>
    <link href="/css/normalize.css" rel="stylesheet" />
    <link href="/css/bootstrap.min.css" rel="stylesheet" />
    <link href="/css/font-awesome.min.css" rel="stylesheet" />
    <link href="/css/jquery.bxslider.css" rel="stylesheet" />
    <link href="/css/Site.css" rel="stylesheet" />
    <link href="/css/animate.css" rel="stylesheet" />
    <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">

    <link href='http://fonts.googleapis.com/css?family=Sarala' rel='stylesheet' type='text/css'>
</head>
<body>
    <div class="navbar navbar-inverse navbar-fixed-top" style="z-index:9999; background:#f8f8f8;border-top: 1px solid #689F38; border-bottom:5px solid #689F38">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="/">
                    <img src="/img/logo-olisac.png" class="logo" alt="Oliamerica"  />
                </a>
            </div>
            <div class="navbar-collapse collapse pull-right" style="margin-top:1.2em">
                <ul class="nav navbar-nav">
                    <li class="enlaceMenu"><a href="/Nosotros">{{ Lang::get('index.menuNosotros') }}</a></li>
                    <li class="enlaceMenu"><a href="/Productos">{{ Lang::get('index.menuProductos') }}</a></li>
                    <li class="enlaceMenu"><a href="/Politica">{{ Lang::get('index.menuPolitica') }}</a></li>
                    <li class="enlaceMenu"><a href="/Noticias">{{ Lang::get('index.menuNoticias') }}</a></li>
                    <li class="enlaceMenu"><a href="/Contacto">{{ Lang::get('index.menuContacto') }}</a></li>
                    
                </ul>
            </div>
        </div>
        <a class="btnSpanish" href="/espaniol"><img class="imgIdioma" src="/img/spain.png"></a>
        <a class="btnEnglish" href="/ingles"><img class="imgIdioma" src="/img/england.png"></a>
    </div>
    <div class="container body-content animated slideInUp">
       @yield('content')
        
    </div>
    <footer>
        <!-- <p>{{ Lang::get('index.menuCopyright') }}<a href="http://id-peru.com">Innodesign</a></p> -->
        <div class="col-md-12">
            <ul class="social-network social-circle">
                <li><a href="#" class="icoRss" title="Rss"><i class="fa fa-rss"></i></a></li>
                <li><a href="#" class="icoFacebook" title="Facebook"><i class="fa fa-facebook"></i></a></li>
                <li><a href="#" class="icoTwitter" title="Twitter"><i class="fa fa-twitter"></i></a></li>
                <li><a href="#" class="icoGoogle" title="Google +"><i class="fa fa-google-plus"></i></a></li>
                <li><a href="#" class="icoLinkedin" title="Linkedin"><i class="fa fa-linkedin"></i></a></li>
            </ul>               
        </div>
    </footer>
    <script src="/js/jquery-1.10.2.min.js")></script>
    <script src="/js/bootstrap.min.js")></script>
    <script src="/js/jquery.bxslider.min.js")></script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAyPyPG1sYvkaQl2tb2WHZl823sy7nvH00&sensor=false"></script>
    

    <script>
    $(document).ready(function () {
        $('.bxslider').bxSlider({
            auto: true,
            //adaptativeHeighgt: true,
            //mode: 'fade',
            captions: false
        });
    });
    $(document).ready(function () {
        $('.carousel').carousel({
            interval: 6000
        })
    });

    </script>

    <script>

    function initialize() {
        var myLatlng = new google.maps.LatLng(-18.037210, -70.282557);
        var mapOptions = {
            zoom: 16,
            center: myLatlng,
            mapTypeId: google.maps.MapTypeId.ROADMAP,
            panControl: false,
            zoomControl: false,
            scaleControl: true,
            disableDefaultUI: true,
            scrollwheel: false,
            // draggable: false

        };

        var map = new google.maps.Map(document.getElementById('innomap'), mapOptions);

        var contentString = '<div id="content">' +
            '<div id="headercontent" style="padding-top: 0px; margin-top: 0px; text-align:center">' +
            '<img src="/img/logo.png" /><br><br>' +
            '<h3 id="firstHeading" class="firstHeading" style="padding-top: 1px; margin-top: 0px; text-align:center">' +
              'OLIAMERICA</h3></div>' +
            '<div id="bodyContent" style="padding-top: 0px; margin-top: 0px; text-align:center">' +
            '<p>Asoc. 1ro de Setiembre Mz 04 Lt 23 ' +
            '<br>CPM AUGUSTO B. LEGUÍA</p></div></div>';


        var infowindow = new google.maps.InfoWindow({
            content: contentString,
            maxWidth: 200
        });
        var image = {
            url: '/img/marker.png',
        };

        var marker = new google.maps.Marker({
            position: myLatlng,
            animation: google.maps.Animation.BOUNCE,
            map: map,
            icon: image,
            title: 'Oliamerica'
        });
        google.maps.event.addListener(marker, 'click', function () {
            infowindow.open(map, marker);
        });
    }

    google.maps.event.addDomListener(window, 'load', initialize);

    </script>

</body>
</html>
