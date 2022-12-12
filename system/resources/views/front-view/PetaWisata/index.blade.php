<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="author" content="Designs Ninja">
    <meta name="description"
        content="Professional and Great template with 10 unique home page designs for corporate, classic, creative, parallax, studio, crypto Currency, business and minimal concept">
    <meta name="keywords"
        content="animation, creative, digital, flex, marketing, minimal, one page, parallax, portfolio, responsive, revolution slider, startup, studio, video background">
    <title>KETAPANG TRAVEL GUIDE - Peta Wisata di Kabupaten Ketapang</title>
    <link rel="shortcut icon" href="{{ url('public') }}/assets-web-web/images/favicon.ico">

    <!-- Core Style Sheets -->
    <link rel="stylesheet" href="{{ url('public') }}/assets-web/css/master.css">
    <!-- Responsive Style Sheets -->
    <link rel="stylesheet" href="{{ url('public') }}/assets-web/css/responsive.css">
    <!-- Revolution Style Sheets -->
    <link rel="stylesheet" type="text/css" href="{{ url('public') }}/assets-web/revolution/css/settings.css">
    <link rel="stylesheet" type="text/css" href="{{ url('public') }}/assets-web/revolution/css/layers.css">
    <link rel="stylesheet" type="text/css" href="{{ url('public') }}/assets-web/revolution/css/navigation.css">
    <link rel="stylesheet" type="text/css" href="{{ url('public') }}/assets-web/css/leaflet.defaultextent.css">


    <!--== Javascript Plugins ==-->
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyB1eO-IAC9PhPE5APzZDSs8W40ewuxnsu8"></script>
    <script src="{{ url('public') }}/assets-web/js/jquery.min.js"></script>
    <script src="{{ url('public') }}/assets-web/js/smoothscroll.js"></script>
    <script src="{{ url('public') }}/assets-web/js/plugins.js"></script>
    <script src="{{ url('public') }}/assets-web/js/master.js"></script>
    <script src="{{ url('public') }}/assets-web/js/leaflet.defaultextent.js"></script>

    <!-- Revolution js Files -->
    <script src="{{ url('public') }}/assets-web/revolution/js/jquery.themepunch.tools.min.js"></script>
    <script src="{{ url('public') }}/assets-web/revolution/js/jquery.themepunch.revolution.min.js"></script>
    <script src="{{ url('public') }}/assets-web/revolution/js/revolution.extension.actions.min.js"></script>
    <script src="{{ url('public') }}/assets-web/revolution/js/revolution.extension.carousel.min.js"></script>
    <script src="{{ url('public') }}/assets-web/revolution/js/revolution.extension.kenburn.min.js"></script>
    <script src="{{ url('public') }}/assets-web/revolution/js/revolution.extension.layeranimation.min.js"></script>
    <script src="{{ url('public') }}/assets-web/revolution/js/revolution.extension.migration.min.js"></script>
    <script src="{{ url('public') }}/assets-web/revolution/js/revolution.extension.navigation.min.js"></script>
    <script src="{{ url('public') }}/assets-web/revolution/js/revolution.extension.parallax.min.js"></script>
    <script src="{{ url('public') }}/assets-web/revolution/js/revolution.extension.slideanims.min.js"></script>
    <script src="{{ url('public') }}/assets-web/revolution/js/revolution.extension.video.min.js"></script>
    <!--== Javascript Plugins End ==-->

    <!--==Leafleat==-->
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.9.3/dist/leaflet.css"
        integrity="sha256-kLaT2GOSpHechhsozzB+flnD+zUyjE2LlfWPgU04xyI=" crossorigin="" />
    <script src="https://unpkg.com/leaflet@1.9.3/dist/leaflet.js"
        integrity="sha256-WBkoXOwTeyKclOHuWtc+i2uENFpDZ9YPdf5Hf+D7ewM=" crossorigin=""></script>

    {{-- search tool leaflet --}}
    <link rel="stylesheet" href="https://unpkg.com/leaflet-control-geocoder/dist/Control.Geocoder.css" />
    <script src="https://unpkg.com/leaflet-control-geocoder/dist/Control.Geocoder.js"></script>

    {{-- lokasi --}}
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/leaflet.locatecontrol/dist/L.Control.Locate.min.css" />
    <script src="https://cdn.jsdelivr.net/npm/leaflet.locatecontrol/dist/L.Control.Locate.min.js" charset="utf-8"></script>

    {{-- default extends leaflet --}}
    <link rel="stylesheet" type="text/css" href="{{ url('public') }}/assets-web/css/leaflet.defaultextent.css">
    <script src="{{ url('public') }}/assets-web/js/leaflet.defaultextent.js"></script>

    {{-- search control --}}
    {{-- <link rel="stylesheet" type="text/css"
        href="{{ url('public') }}/assets-web/js/leaflet-search/dist/leaflet-search.min.css">
    <script src="{{ url('public') }}/assets-web/js/leaflet-search/dist/leaflet-search.src.js"></script> --}}

    <link rel="stylesheet"
        href="{{ url('public') }}/assets-web/js/leaflet-panel-layers/dist/leaflet-panel-layers.min.css" />
    <script src="{{ url('public') }}/assets-web/js/leaflet-panel-layers/dist/leaflet-panel-layers.src.js"></script>

</head>

<body>

    <!--== Loader Start ==-->
    <div id="loader-overlay">
        <div class="loader">
            <div class="spinner-double-dot-in"></div>
        </div>
    </div>
    <!--== Loader End ==-->

    <!--== Wrapper Start ==-->
    <div class="wrapper">

        <!--== Header Start ==-->
        <nav class="navbar navbar-default navbar-fixed navbar-transparent white bootsnav on no-full no-border">
            <!--== Start Top Search ==-->
            <div class="fullscreen-search-overlay" id="search-overlay"> <a href="#" class="fullscreen-close"
                    id="fullscreen-close-button"><i class="icofont icofont-close"></i></a>
                <div id="fullscreen-search-wrapper">
                    <form method="get" id="fullscreen-searchform">
                        <input type="text" value="" placeholder="Type and hit Enter..."
                            id="fullscreen-search-input" class="search-bar-top">
                        <i class="fullscreen-search-icon icofont icofont-search">
                            <input value="" type="submit">
                        </i>
                    </form>
                </div>
            </div>
            <!--== End Top Search ==-->
            <div class="container">

                <!--== Start Header Navigation ==-->
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-menu"> <i
                            class="tr-icon ion-android-menu"></i> </button>
                    <div class="logo"> <a href="{{ url('front-view/DesaWisata') }}"><img class="logo logo-display"
                                src="{{ url('public') }}/assets-web/images/logo/maskot-putih6.png" alt=""
                                style="width: 100%; object-fit:contain"> <img class="logo logo-scrolled"
                                src="{{ url('public') }}/assets-web/images/logo/maskot-itam.png" alt=""
                                style="width: 100%; object-fit:contain"> </a>
                    </div>
                </div>
                <!--== End Header Navigation ==-->

                <!--== Collect the nav links, forms, and other content for toggling ==-->
                <div class="collapse navbar-collapse" id="navbar-menu">
                    <ul class="nav navbar-nav" data-in="fadeIn" data-out="fadeOut">
                        <li class="dropdown"><a href="{{ url('front-view/DesaWisata') }}">Desa Wisata</a>
                        </li>
                        <li><a class="page-scroll" href="{{ url('front-view/AtraksiWisata') }}">Atraksi Wisata</a></li>
                        <li><a class="page-scroll" href="{{ url('front-view/KalenderWisata') }}">Kalender Wisata</a>
                        </li>
                        <li><a class="page-scroll actives" href="{{ url('front-view/PetaWisata') }}">Peta Wisata</a>
                        </li>
                        <li><a class="page-scroll" href="{{ url('front-view/Kontak') }}">Info & Kontak</a></li>
                        <li><a class="page-scroll" href="{{ url('auth/login') }}"><i class="icofont-user-male"></i></a>
                        </li>
                    </ul>
                </div>
                <!--== /.navbar-collapse ==-->
            </div>

            <!-- Start Side Menu -->
            <!-- End Side Menu -->

        </nav>
        <!--== Header End ==-->

        <!--== Hero Slider Start ==-->
        <div class="remove-padding transition-none" id="home">
            <div id="rev_slider_1078_2_wrapper" class="rev_slider_wrapper fullwidthbanner-container"
                data-alias="classic4export" data-source="gallery"
                style="margin:0px auto;background-color:#000000;padding:0px;margin-top:0px;margin-bottom:0px;">
                <!-- START REVOLUTION SLIDER 5.4.1 fullwidth mode -->
                <div id="rev_slider_1078_2" class="rev_slider fullwidthabanner" style="display:none;"
                    data-version="5.4.1">
                    <ul>
                        <!-- SLIDE  -->
                        <li data-index="rs-3045" data-transition="slotfade-vertical" data-slotamount="default"
                            data-hideafterloop="0" data-hideslideonmobile="off" data-easein="default"
                            data-easeout="default" data-masterspeed="default" data-rotate="0"
                            data-saveperformance="off" data-title="" data-param1="" data-param2="" data-param3=""
                            data-param4="" data-param5="" data-param6="" data-param7="" data-param8=""
                            data-param9="" data-param10="" data-description="">
                            <!-- MAIN IMAGE -->
                            <img src="{{ url('public') }}/assets-web/images/post/b.jpg" alt=""
                                data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat"
                                data-bgparallax="10" class="rev-slidebg" data-no-retina>
                            <!-- LAYERS -->

                            <!-- LAYER NR. 1 -->
                            <div class="hero-text-wrap">
                                <center>
                                    <h3 style="color: white; font-weight:40px; margin-top:250px">Peta Wisata</h3>
                                    <img src="{{ url('public') }}/assets-web/images/logo/maskot-putih5.png"
                                        alt="" style="width:100%; height:auto; object-fit: cover; ">
                                </center>
                            </div>

                        </li>
                    </ul>
                    <div class="tp-bannertimer" style="height: 3px; background-color: rgba(255, 255, 255, 0.25);">
                    </div>
                </div>
            </div>
        </div>
        <!--== Hero Slider End ==-->

        <!--== Who We Are Start ==-->
        <section class="white-bg" id="pricing">
            <div class="container">
                <div class="container">

                    {{-- <div class="row">
                        <div class="col-md-6 text-center pull-right">
                            <strong class="text-center"><i class="icofont icofont-notepad"> Daftar Desa
                                    Wisata</i></strong>
                            <select onchange="cari(this.id)" style="color: black">
                                @foreach ($list_desa_wisata as $desa_wisata)
                                    <option value="{{ $desa_wisata->id }}" style="color: black">
                                        {{ $desa_wisata->nama_desa_wisata }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="col-md-6 text-center pull-right">
                            <strong class="text-center" style="color: black;"><i class="icofont icofont-notepad">
                                    Daftar
                                    Atraksi Wisata</i></strong>
                            <select onchange="cari(this.id)" style="color: black">
                                @foreach ($list_atraksi_wisata as $atraksi_wisata)
                                    <option value="{{ $atraksi_wisata->id }}" style="color: black">
                                        {{ $atraksi_wisata->nama }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div> --}}

                    <div id="map" style="width: 100%; height: 500px;"></div>
                    <br>
                    <div class="row">
                        <div class="col-md-2">
                            <div class="section-title wow fadeInUp" data-wow-delay="0.1s">
                                <strong style="font-size: 20px; font-weight:bold; color:black">Note :</strong>
                                <br>
                                <p style="color: black"><img class="mt-2"
                                        src="https://jadesta.kemenparekraf.go.id/images/merah.png" style="width: 20px"
                                        alt=""> : Desa Wisata</p>
                                <p style="color: black"><img class="mt-2"
                                        src="https://jadesta.kemenparekraf.go.id/images/kota.png" style="width: 20px"
                                        alt=""> : Atraksi Wisata</p>
                            </div>
                        </div>
                        <br>

                    </div>
                </div>
        </section>

        <!--== Footer Start ==-->
        <footer class="footer">
            <div class="footer-copyright">
                <div class="container">
                    <div class="row wow fadeInUp" data-wow-delay="0.1s">
                        <div class="col-md-8 centerize-col text-center">
                            <div class="footer-logo">
                                <a href="index.html"><img
                                        src="{{ url('public') }}/assets-web/images/logo-white-footer.png"
                                        class="img-responsive centerize-col" alt="Footer Logo" /></a>
                            </div>
                            <div class="copy-right">Copyright &copy; <span class="default-color">E-KTG 2022
                                    @if (date('Y') > '2022')
                                        -{{ date('Y') }}
                                    @endif.
                                </span> All rights reserved</div>
                            <ul class="social-media mt-30 float-none">
                                <li><a href="mailto:dpcketapang.masata@gmail.com" class="icofont icofont-email"></a>
                                </li>
                                <li><a href="https://www.instagram.com/_bayyz/" target="_blank"
                                        class="icofont icofont-instagram"></a></li>
                                <li><a href="https://github.com/bayyyyu" target="_blank"
                                        class="icofont icofont-github "></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
        <!--== Footer End ==-->

        <!--== Go to Top  ==-->
        <a href=""><i class="icofont-download-alt"></i></a>
        <a href="javascript:" id="return-to-top"><i class="icofont icofont-arrow-up"></i></a>
        <!--== Go to Top End ==-->
    </div>
    <!--== Wrapper End ==-->
    <script>
        // var data = [
        //     <?php foreach ($list_desa_wisata as $desa_wisata) { ?> {
        //         "lokasi": [<?= $desa_wisata->lat ?>, <?= $desa_wisata->lng ?>],
        //         "nama_desa_wisata": "<?= $desa_wisata->nama_desa_wisata ?>"
        //     },
        //     <?php } ?>
        // ];

        navigator.geolocation.getCurrentPosition(function(location) {
            var latlng = new L.LatLng(location.coords.latitude, location.coords.longitude);

            console.log(location.coords.latitude, location.coords.longitude);


            var peta1 = L.tileLayer(
                'https://api.mapbox.com/styles/v1/{id}/tiles/{z}/{x}/{y}?access_token=pk.eyJ1IjoibWFwYm94IiwiYSI6ImNpejY4NXVycTA2emYycXBndHRqcmZ3N3gifQ.rJcFIG214AriISLbB6B5aw', {
                    attribution: 'Map data &copy; <a href="https://www.openstreetmap.org/">OpenStreetMap</a> contributors, ' +
                        '<a href="https://creativecommons.org/licenses/by-sa/2.0/">CC-BY-SA</a>, ' +
                        'Imagery © <a href="https://www.mapbox.com/">Mapbox</a>',
                    id: 'mapbox/streets-v11'
                });

            var peta2 = L.tileLayer(
                'https://api.mapbox.com/styles/v1/{id}/tiles/{z}/{x}/{y}?access_token=pk.eyJ1IjoibWFwYm94IiwiYSI6ImNpejY4NXVycTA2emYycXBndHRqcmZ3N3gifQ.rJcFIG214AriISLbB6B5aw', {
                    attribution: 'Map data &copy; <a href="https://www.openstreetmap.org/">OpenStreetMap</a> contributors, ' +
                        '<a href="https://creativecommons.org/licenses/by-sa/2.0/">CC-BY-SA</a>, ' +
                        'Imagery © <a href="https://www.mapbox.com/">Mapbox</a>',
                    id: 'mapbox/satellite-v9'
                });


            var peta3 = L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
                attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors'
            });

            var map = L.map('map', {
                center: [-1.8572961278636353, 109.97172781841756],
                zoom: 9,
                layers: [peta3],
            });

            var baseMaps = {
                "Grayscale": peta1,
                "Sattelite": peta2,
                "Streets": peta3,
            };


            var layerControl = L.control.layers(baseMaps);
            //.addTo(map);

            L.tileLayer('https://api.maptiler.com/maps/streets/{z}/{x}/{y}.png?key=Ts9g8McLuNVEfjGFTHeG', {
                attribution: '<a href="https://www.maptiler.com/copyright/" target="_blank">© MapTiler</a> <a href="https://www.openstreetmap.org/copyright" target="_blank">© OpenStreetMap contributors</a>'
            }).addTo(map);

            var LeafIcon = L.Icon.extend({
                options: {
                    shadowUrl: '',
                    iconSize: [28, 30],
                    shadowSize: [50, 64],
                    // iconAnchor:   [22, 94],
                    shadowAnchor: [4, 62],
                }
            });

            var greenIcon = new LeafIcon({
                    iconUrl: 'https://jadesta.kemenparekraf.go.id/images/merah.png'
                }),
                redIcon = new LeafIcon({
                    iconUrl: 'https://cdn-icons-png.flaticon.com/128/2776/2776000.png'
                }),
                orangeIcon = new LeafIcon({
                    iconUrl: 'https://jadesta.kemenparekraf.go.id/images/kota.png'
                });



            function cari(id) {
                map.flyTo(geoLayer.getBounds().getCenter(), 19);
            }



            //control search
            // var markersLayer = new L.LayerGroup(); //layer contain searched elements
            // map.addLayer(markersLayer);
            // var controlSearch = new L.Control.Search({
            //     position: 'topright',
            //     layer: markersLayer,
            //     initial: false,
            //     zoom: 12,
            //     marker: false
            // });
            // map.addControl(controlSearch);
            // ////////////populate map with markers from sample data
            // for (i in data) {
            //     var nama_desa_wisata = data[i].nama_desa_wisata;//value searched
            //     var lokasi = data[i].lokasi; //position found
            //     var marker = new L.Marker(new L.latLng(lokasi), {title: nama_desa_wisata}); //se property searched
            // }


            //Desa Wisata
            <?php foreach ($list_desa_wisata as $desa_wisata) { ?>
            L.marker([<?= $desa_wisata->lat ?>, <?= $desa_wisata->lng ?>], {
                icon: greenIcon
            }).addTo(map).bindPopup(
                '<h5 class="text-center" ><?= $desa_wisata->nama_desa_wisata ?></h5> <img  src="{{ url("public/$desa_wisata->foto_1") }}"/><h6 class="text-center" ><?= $desa_wisata->deskripsi ?></h6> <br><br> <button class="btn btn-info"><a href="<?= $desa_wisata->link_jadesta ?> " target="_blank" style="color: white"><i class="icofont-look"></i> Lihat Detail</a></button> ' +
                "<button class='btn btn-info'><a href='https://www.google.com/maps/dir/?api=1&origin=" +
                location.coords.latitude + "," + location.coords.longitude +
                "&destination=<?= $desa_wisata->lat ?>,<?= $desa_wisata->lng ?>' target='_blank'  style='color: white'><i class='icofont-location-arrow'></i> Rute</a></button>"
            );
            <?php } ?>



            //Atraksi Wisata Alam
            <?php foreach ($list_atraksi_wisata->where('kategori', 'Wisata Alam') as $atraksi_wisata) { ?>
            L.marker([<?= $atraksi_wisata->lat ?>, <?= $atraksi_wisata->lng ?>], {
                icon: orangeIcon
            }).addTo(map).bindPopup(
                '<h6 class="text-center" >Atraksi <?= $atraksi_wisata->kategori ?></h6> <img style="height:100%; object-fit: cover" src="{{ url("public/$atraksi_wisata->foto") }}"/><h6 class="text-center" ><?= $atraksi_wisata->nama ?></h6> <button class="btn btn-info"><a href="{{ url('front-view/AtraksiWisata/WisataAlam', $atraksi_wisata->id) }}" style="color: white"><i class="icofont-look"></i> Lihat Detail</a></button> ' +
                "<button class='btn btn-info'><a href='https://www.google.com/maps/dir/?api=1&origin=" +
                location.coords.latitude + "," + location.coords.longitude +
                "&destination=<?= $atraksi_wisata->lat ?>,<?= $atraksi_wisata->lng ?>' target='_blank'  style='color: white'><i class='icofont-location-arrow'></i> Rute</a></button>"
            );
            <?php } ?>

            //Atraksi Wisata Budaya
            <?php foreach ($list_atraksi_wisata->where('kategori', 'Wisata Budaya') as $atraksi_wisata) { ?>
            L.marker([<?= $atraksi_wisata->lat ?>, <?= $atraksi_wisata->lng ?>], {
                icon: orangeIcon
            }).addTo(map).bindPopup(
                '<h6 class="text-center" >Atraksi <?= $atraksi_wisata->kategori ?></h6> <img style="height:100%; object-fit: cover" src="{{ url("public/$atraksi_wisata->foto") }}"/><h6 class="text-center" ><?= $atraksi_wisata->nama ?></h6> <button class="btn btn-info"><a href="{{ url('front-view/AtraksiWisata/WisataBudaya', $atraksi_wisata->id) }}" style="color: white"><i class="icofont-look"></i> Lihat Detail</a></button> ' +
                "<button class='btn btn-info'><a href='https://www.google.com/maps/dir/?api=1&origin=" +
                location.coords.latitude + "," + location.coords.longitude +
                "&destination=<?= $atraksi_wisata->lat ?>,<?= $atraksi_wisata->lng ?>' target='_blank'  style='color: white'><i class='icofont-location-arrow'></i> Rute</a></button>"
            );
            <?php } ?>

            //Atraksi Wisata Buatan
            <?php foreach ($list_atraksi_wisata->where('kategori', 'Wisata Buatan') as $atraksi_wisata) { ?>
            L.marker([<?= $atraksi_wisata->lat ?>, <?= $atraksi_wisata->lng ?>], {
                icon: orangeIcon
            }).addTo(map).bindPopup(
                '<h6 class="text-center" >Atraksi <?= $atraksi_wisata->kategori ?></h6> <img style="height:100%; object-fit: cover" src="{{ url("public/$atraksi_wisata->foto") }}"/><h6 class="text-center" ><?= $atraksi_wisata->nama ?></h6> <button class="btn btn-info"><a href="{{ url('front-view/AtraksiWisata/WisataBuatan', $atraksi_wisata->id) }}" style="color: white"><i class="icofont-look"></i> Lihat Detail</a></button>' +
                "<button class='btn btn-info'><a href='https://www.google.com/maps/dir/?api=1&origin=" +
                location.coords.latitude + "," + location.coords.longitude +
                "&destination=<?= $atraksi_wisata->lat ?>,<?= $atraksi_wisata->lng ?>' target='_blank'  style='color: white'><i class='icofont-location-arrow'></i> Rute</a></button>"
            );
            <?php } ?>

            L.control.defaultExtent().addTo(map);

            // L.Control.geocoder({
            //     position: 'topleft'
            // }).addTo(map);

            L.control.locate().addTo(map);

        })
    </script>
</body>

</html>
