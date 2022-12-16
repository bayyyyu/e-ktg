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
    <title>KETAPANG TRAVEL GUIDE - Desa Wisata di Kabupaten Ketapang</title>
    <link rel="shortcut icon" href="{{ url('public') }}/assets-web-web/images/favicon.ico">

    <!-- Core Style Sheets -->
    <link rel="stylesheet" href="{{ url('public') }}/assets-web/css/master.css">
    <!-- Responsive Style Sheets -->
    <link rel="stylesheet" href="{{ url('public') }}/assets-web/css/responsive.css">
    <!-- Revolution Style Sheets -->
    <link rel="stylesheet" type="text/css" href="{{ url('public') }}/assets-web/revolution/css/settings.css">
    <link rel="stylesheet" type="text/css" href="{{ url('public') }}/assets-web/revolution/css/layers.css">
    <link rel="stylesheet" type="text/css" href="{{ url('public') }}/assets-web/revolution/css/navigation.css">

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
                    <div class="logo"><a href="{{ url('DesaWisata') }}"><img class="logo logo-display"
                                src="{{ url('public') }}/assets-web/images/logo/MASKOT PUTIH1.png" alt=""
                                style="width: 100%; object-fit:contain"> <img class="logo logo-scrolled"
                                src="{{ url('public') }}/assets-web/images/logo/maskot-itam.png" alt=""
                                style="width: 100%; object-fit:contain"> </a> </div>
                </div>
                <!--== End Header Navigation ==-->

                <!--== Collect the nav links, forms, and other content for toggling ==-->
                <div class="collapse navbar-collapse" id="navbar-menu">
                    <ul class="nav navbar-nav" data-in="fadeIn" data-out="fadeOut">
                        <li><a class="" href="{{ url('DesaWisata') }}">Desa Wisata</a>
                        </li>
                        <li><a class="page-scroll" href="{{ url('AtraksiWisata') }}">Atraksi Wisata</a></li>
                        <li><a class="page-scroll" href="{{ url('KalenderWisata') }}">Kalender Wisata</a>
                        </li>
                        <li><a class="page-scroll" href="{{ url('PetaWisata') }}">Peta Wisata</a></li>
                        <li><a class="page-scroll" href="{{ url('Kontak') }}">Info & Kontak</a></li>
                        {{-- <li><a class="page-scroll" href="{{ url('auth/login') }}"><i class="icofont-user-male"></i></a>
                        </li> --}}
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
                            <img src="{{ url('public') }}/assets-web/images/post/1.jpg" alt=""
                                data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat"
                                data-bgparallax="10" class="rev-slidebg" data-no-retina>
                            <div class="hero-text-wrap">
                                <center>
                                    <h3 style="color: white; font-weight:40px; margin-top:45vh">Desa Wisata</h3>
                                    <img src="{{ url('public') }}/assets-web/images/logo/MASKOT PUTIH1.png"
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
        <section class="white-bg" id="about">
            <div class="container">
                <div class="row">
                    <div class="col-md-10 centerize-col text-center wow fadeInUp" data-wow-delay="0.1s">
                        <div class="section-title">
                            <hr class="center_line dark-bg">
                            <p>
                                ELECTRONIC KETAPANG TRAVEL GUIDE, e-KTG (beta), adalah sarana penyedia informasi
                                pariwisata dan desa wisata di Kabupaten Ketapang yang terintegrasi dengan sistem JADESTA
                                (Jaringan Desa Wisata) Kemenparekraf RI. ​Website ini dikelola bersama oleh DPC MASATA
                                Ketapang, Politeknik Negeri Ketapang, dan Dinas Pariwisata dan Kebudayaan Kabupaten
                                Ketapang, Kalimantan Barat.
                            </p>
                            <p>
                                Silahkan KLIK pada nama desa wisata yang tersedia untuk menemukan beragam informasi
                                paket wisata dan fasilitas pendukung lainnya.
                            </p>
                        </div>
                    </div>
                </div>
            </div>

            <!--== Who We Are End ==-->

            <div class="container">
                <div class="row">
                    <div class="col-md-8 centerize-col text-center mt-50">
                        <div class="section-title wow fadeInUp" data-wow-delay="0.1s">
                            <strong style="font-size: 20px; font-weight:bold">DESA WISATA KABUPATEN KETAPANG</strong>
                            <hr class="">
                        </div>
                    </div>
                </div>
                <div class="row">
                    @foreach ($list_desa_wisata as $desa_wisata)
                        <div class="col-md-4 blog-list wow fadeInDown mt-2" data-wow-delay="0.2s">
                            <div class="post-wrap">
                                <hr class="center_line dark-bg">
                                {{-- <h5 class="text-center"><a href="{{$desa_wisata->link_jadesta}}" target="_blank">{{$desa_wisata->nama_desa_wisata}}</a></h5> --}}
                                <div class="post-img">
                                    <div class="blog-grid-slider slick">
                                        <div class="item"><a class="image-popup-no-margins"
                                                href="{{ url("public/$desa_wisata->foto_1") }}"><img
                                                    class="img-responsive"
                                                    style="width:100% ; height:300px; object-fit: cover"
                                                    src="{{ url("public/$desa_wisata->foto_1") }}"
                                                    alt="Tidak Dapat Memuat Gambar" /></a></div>
                                        <div class="item"><a class="image-popup-no-margins"
                                                href="{{ url("public/$desa_wisata->foto_2") }}"><img
                                                    class="img-responsive"
                                                    style="width:100% ; height:300px; object-fit: cover"src="{{ url("public/$desa_wisata->foto_2") }}"
                                                    alt="Tidak Dapat Memuat Gambar" /></a></div>
                                        <div class="item"><a class="image-popup-no-margins"
                                                href="{{ url("public/$desa_wisata->foto_3") }}"><img
                                                    class="img-responsive"
                                                    style="width:100% ; height:300px; object-fit: cover"src="{{ url("public/$desa_wisata->foto_3") }}"
                                                    alt="Tidak Dapat Memuat Gambar" /></a></div>
                                        <div class="item"><a class="image-popup-no-margins"
                                                href="{{ url("public/$desa_wisata->foto_4") }}"><img
                                                    class="img-responsive"
                                                    style="width:100% ; height:300px; object-fit: cover"src="{{ url("public/$desa_wisata->foto_4") }}"
                                                    alt="Tidak Dapat Memuat Gambar" /></a></div>
                                    </div>
                                </div>

                                <div class="post-text">
                                    {{-- <hr class="grey-bg"> --}}
                                    <h3><a href="{{ $desa_wisata->link_jadesta }}"
                                            target="_blank">{{ $desa_wisata->nama_desa_wisata }}</a></h3>
                                    <p>
                                        {{ "''" . $desa_wisata->deskripsi . "''" }}
                                    </p>
                                    {{-- <hr class="grey-bg"> --}}
                                    {{-- <i class="icofont-speech-comments"> "Tanggapan Pengunjung"</i> --}}
                                    {{-- <div class="text-center">
                  <i class="icofont-caret-down"></i>
              </div> --}}
                                    <hr class="dark grey-bg">
                                    {{-- <a href="" class="btn-text">Read More</a> --}}
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>

            </div>
            {{-- links paginate --}}

            <div class="container">
                <div class="text-center">
                    <strong style="color: rgb(58, 0, 10)">{{ $list_desa_wisata->onEachSide(1)->links() }}</strong>
                </div>
            </div>
            <hr class="center_line grey-bg">
            <div class="container">
                <div class="text-center">
                    <strong>
                        Menampilkan
                        {{ $list_desa_wisata->firstItem() }}
                        Sampai
                        {{ $list_desa_wisata->lastItem() }}
                        Dari
                        {{ $list_desa_wisata->total() }}
                        Item
                    </strong>
                </div>
            </div>
            {{-- links paginate end --}}
        </section>
        <!--== Footer Start ==-->
        <footer class="footer">
            <div class="footer-copyright">
                <div class="container">
                    <div class="row wow fadeInUp" data-wow-delay="0.1s">
                        <div class="col-md-8 centerize-col text-center">
                            <div class="footer-logo">
                                <a href=""><img
                                        src="{{ url('public') }}/assets-web/images/logo-white-footer.png"
                                        class="img-responsive centerize-col" alt="Footer Logo" /></a>
                            </div>
                            <div class="copy-right">Copyright &copy; <span class="default-color">E-KTG 2022
                                    @if (date('Y') > '2022')
                                        -{{ date('Y') }}
                                    @endif.
                                </span> All rights reserved</div>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
        <!--== Footer End ==-->

        <!--== Go to Top  ==-->
        <a href="javascript:" id="return-to-top"><i class="icofont icofont-arrow-up"></i></a>
        <!--== Go to Top End ==-->

    </div>
    <!--== Wrapper End ==-->

    <!--== Javascript Plugins ==-->
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyB1eO-IAC9PhPE5APzZDSs8W40ewuxnsu8"></script>
    <script src="{{ url('public') }}/assets-web/js/jquery.min.js"></script>
    <script src="{{ url('public') }}/assets-web/js/smoothscroll.js"></script>
    <script src="{{ url('public') }}/assets-web/js/plugins.js"></script>
    <script src="{{ url('public') }}/assets-web/js/master.js"></script>

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

</body>

</html>
