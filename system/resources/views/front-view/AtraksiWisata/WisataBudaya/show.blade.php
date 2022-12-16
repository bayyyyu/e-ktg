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
    <title>KETAPANG TRAVEL GUIDE</title>

    <!-- Core Style Sheets -->
    <link rel="stylesheet" href="{{ url('public') }}/assets-web/css/master.css">
    <!-- Responsive Style Sheets -->
    <link rel="stylesheet" href="{{ url('public') }}/assets-web/css/responsive.css">
    <!-- Revolution Style Sheets -->
    <link rel="stylesheet" type="text/css" href="revolution/css/settings.css">
    <link rel="stylesheet" type="text/css" href="revolution/css/layers.css">
    <link rel="stylesheet" type="text/css" href="revolution/css/navigation.css">

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
                    <div class="logo"> <a href="{{ url('AtraksiWisata') }}"><img class="logo logo-display"
                                src="{{ url('public') }}/assets-web/images/logo/maskot-putih6.png" alt="" style="width: 100%; object-fit:contain"> <img
                                class="logo logo-scrolled"
                                src="{{ url('public') }}/assets-web/images/logo/maskot-itam.png" alt="" style="width: 100%; object-fit:contain"> </a>
                    </div>
                </div>
                <!--== End Header Navigation ==-->

                <!--== Collect the nav links, forms, and other content for toggling ==-->
                <div class="collapse navbar-collapse" id="navbar-menu">
                    <ul class="nav navbar-nav" data-in="fadeIn" data-out="fadeOut">
                        <li><a class="" href="{{ url('DesaWisata') }}">Desa Wisata</a></li>
                        <li><a class="" href="{{ url('AtraksiWisata') }}">Atraksi Wisata</a></li>
                        <li><a class="" href="{{ url('KalenderWisata') }}">Kalender Wisata</a></li>
                        <li><a class="" href="{{ url('PetaWisata') }}">Peta Wisata</a></li>
                        <li><a class="" href="{{ url('Kontak') }}">Info & Kontak</a></li>
                        {{-- <li><a class="" href="{{ url('auth/login') }}"><i class="icofont-user-male"></i></a></li> --}}
                    </ul>
                </div>
                <!--== /.navbar-collapse ==-->
            </div>

        </nav>
        <!--== Header End ==-->

        <!--== Page Title Start ==-->
        <div class="transition-none">
            <section class="title-hero-bg parallax-effect"
                style="background-image: url({{ url('public') }}/assets-web/images/post/22.jpg);">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="page-title text-center white-color">
                                <h1 class="raleway-font font-300">{{ $atraksi_wisata->nama }}</h1>
                                <div class="breadcrumb mt-20">
                                    <!-- Breadcrumb Start -->
                                    <ul>
                                        <li><a href="{{ url('AtraksiWisata') }}">Atraksi Wisata</a></li>
                                        <li><a
                                                href="{{ url('AtraksiWisata/WisataBudaya') }}">{{ $atraksi_wisata->kategori }}</a>
                                        </li>
                                        <li>Blog Details</li>
                                    </ul>
                                    <!-- Breadcrumb End -->
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </section>
        </div>
        <!--== Page Title End ==-->

        <!--== Blog Details Start ==-->
        <section class="white-bg">
            <div class="container">
                <div class="row">
                    <div class="col-md-9 col-sm-9 col-xs-12 xs-mb-50">
                        <div class="row">
                            <div class="col-md-12 col-sm-12 col-xs-12">
                                <ul class="single-blog-list">
                                    <li>
                                        <div class="post-wrap">
                                            <div class="post-img">
                                                <h3 style="font-weight: 600;">{{ $atraksi_wisata->nama }}</h3>
                                                <div class="item"><img class="img-responsive"
                                                        src="{{ url("public/$atraksi_wisata->foto") }}"
                                                        style="width: 100%; height: 50%; object-fit: cover"
                                                        alt="" /></div>
                                            </div>
                                             <p class="text-center">Sumber Foto : <em>{{ $atraksi_wisata->sumber_foto }}</em></p>
                                            <div class="post-text text-justify">
                                                
                                                <p>
                                                    {!! nl2br($atraksi_wisata->deskripsi) !!}
                                                </p>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                            <!--== Post End ==-->
                        </div>
                    </div>

                    <div class="col-md-3 col-sm-3 col-xs-12">
                        <div class="sidebar_widget widget_archive ">
                            <h5 class="aside-title">Informasi</h5>
                            <ul>
                                <li><a style="color: black">Alamat</a> :<span>{{ $atraksi_wisata->alamat }}</span></li>
                                <li><a style="color: black">Atraksi Wisata</a> :<span>{{ $atraksi_wisata->atraksi }}</span></li>
                                <li><a style="color: black">Nama Pengelola</a> :<span>{{ $atraksi_wisata->nama_pengelola }}</span></li>
                                <li><a style="color: black">No Pengelola</a> :<span>{{ $atraksi_wisata->no_pengelola }}</span></li>
                                <li><a style="color: black">Hari Buka</a> :<span>{{ $atraksi_wisata->hari_buka }}</span></li>
                                <li><a style="color: black">Jam Buka</a> :<span>{!! date('H:i', strtotime($atraksi_wisata->jam_buka)) !!} - {!! date('H:i', strtotime($atraksi_wisata->jam_tutup)) !!}</span></li>
                            </ul>
                        </div>
                    </div>
                    <div class="sidebar_widget widget_recent_post mb-50 col-md-3 col-sm-3 col-xs-12">
                        <h5 class="aside-title">Atraksi Wisata Terkait</h5>
                        @foreach ($recent_upload->where('kategori', 'Wisata Budaya') as $atraksi_wisata)
                            <div class="post-item">

                                <div class="post-thumb">
                                    <a href=""><img width="75" height="75"
                                            src="{{ url("public/$atraksi_wisata->foto") }}" style="object-fit:cover"
                                            class="img-responsive" alt="post-01" /></a>
                                </div>
                                <div class="post-body">
                                    <span class="font-18px"><a
                                            href="{{ url('AtraksiWisata/WisataAlam') }}">{{ $atraksi_wisata->nama }}</a></span>
                                    <div class="post-time">{{ $atraksi_wisata->created_at->diffForHumans() }}</div>
                                    <a href="{{ url('AtraksiWisata/WisataAlam', $atraksi_wisata->id) }}"
                                        class="subtitle">{{ $atraksi_wisata->kategori }}</a>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>

            

        </section>
        <!--== Blog Details End ==-->

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
                                    @endif.</span> All rights reserved</div>
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
    <script src="{{ url('public') }}/assets-web/js/jquery.min.js"></script>
    <script src="{{ url('public') }}/assets-web/js/smoothscroll.js"></script>
    <script src="{{ url('public') }}/assets-web/js/plugins.js"></script>
    <script src="{{ url('public') }}/assets-web/js/master.js"></script>

    <!-- Revolution js Files -->
    <script src="revolution/js/jquery.themepunch.tools.min.js"></script>
    <script src="revolution/js/jquery.themepunch.revolution.min.js"></script>
    <script src="revolution/js/revolution.extension.actions.min.js"></script>
    <script src="revolution/js/revolution.extension.carousel.min.js"></script>
    <script src="revolution/js/revolution.extension.kenburn.min.js"></script>
    <script src="revolution/js/revolution.extension.layeranimation.min.js"></script>
    <script src="revolution/js/revolution.extension.migration.min.js"></script>
    <script src="revolution/js/revolution.extension.navigation.min.js"></script>
    <script src="revolution/js/revolution.extension.parallax.min.js"></script>
    <script src="revolution/js/revolution.extension.slideanims.min.js"></script>
    <script src="revolution/js/revolution.extension.video.min.js"></script>
    <!--== Javascript Plugins End ==-->

</body>

</html>
