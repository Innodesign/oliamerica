</div>
    <footer>
        <p><?php echo Lang::get('index.menuCopyright') ?><a href="http://id-peru.com">Innodesign</a></p>
    </footer>
    <script src="js/jquery-1.10.2.min.js")></script>
    <script src="js/bootstrap.min.js")></script>
    <script src="js/jquery.bxslider.min.js")></script>
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
            '<img src="img/logo.png" /><br><br>' +
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
