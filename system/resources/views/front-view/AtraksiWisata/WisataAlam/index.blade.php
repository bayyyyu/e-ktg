<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="author" content="Designs Ninja">
<meta name="description" content="Professional and Great template with 10 unique home page designs for corporate, classic, creative, parallax, studio, crypto Currency, business and minimal concept">
	<meta name="keywords" content="animation, creative, digital, flex, marketing, minimal, one page, parallax, portfolio, responsive, revolution slider, startup, studio, video background">
<title>KETAPANG TRAVEL GUIDE - Wisata Alam di Kabupaten Ketapang</title>
<link rel="shortcut icon" href="{{url('public')}}/assets-web-web/images/favicon.ico">

<!-- Core Style Sheets -->
<link rel="stylesheet" href="{{url('public')}}/assets-web/css/master.css">
<!-- Responsive Style Sheets -->
<link rel="stylesheet" href="{{url('public')}}/assets-web/css/responsive.css">
<!-- Revolution Style Sheets -->
<link rel="stylesheet" type="text/css" href="{{url('public')}}/assets-web/revolution/css/settings.css">
<link rel="stylesheet" type="text/css" href="{{url('public')}}/assets-web/revolution/css/layers.css">
<link rel="stylesheet" type="text/css" href="{{url('public')}}/assets-web/revolution/css/navigation.css">

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
    <div class="fullscreen-search-overlay" id="search-overlay"> <a href="#" class="fullscreen-close" id="fullscreen-close-button"><i class="icofont icofont-close"></i></a>
      <div id="fullscreen-search-wrapper">
        <form method="get" id="fullscreen-searchform">
          <input type="text" value="" placeholder="Type and hit Enter..." id="fullscreen-search-input" class="search-bar-top">
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
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-menu"> <i class="tr-icon ion-android-menu"></i> </button>
        <div class="logo"> <a href="{{url('front-view/AtraksiWisata')}}"><img class="logo logo-display" src="{{url('public')}}/assets-web/images/logo/maskot-putih6.png" alt=""> <img class="logo logo-scrolled" src="{{url('public')}}/assets-web/images/logo/maskot-itam.png" alt=""> </a> </div>
      </div>
      <!--== End Header Navigation ==-->

      <!--== Collect the nav links, forms, and other content for toggling ==-->
      <div class="collapse navbar-collapse" id="navbar-menu">
        <ul class="nav navbar-nav" data-in="fadeIn" data-out="fadeOut">
          <li><a class="" href="{{url('front-view/DesaWisata')}}">Desa Wisata</a></li>
          <li><a class="actives" href="{{url('front-view/AtraksiWisata')}}">Atraksi Wisata</a></li>
          <li><a class="" href="{{url('front-view/KalenderWisata')}}">Kalender Wisata</a></li>
          <li><a class="" href="{{url('front-view/PetaWisata')}}">Peta Wisata</a></li>
          <li><a class="" href="{{url('front-view/Kontak')}}">Info & Kontak</a></li>
		      <li><a class="" href="{{url('auth/login')}}"><i class="icofont-user-male"></i></a></li>
        </ul>
      </div>
      <!--== /.navbar-collapse ==-->
    </div>

    <!-- Start Side Menu -->
     <!-- End Side Menu -->

  </nav>
  <!--== Header End ==-->

  <!--== Hero Slider Start ==-->
  <div id="rev_slider_1174_1" class="rev_slider fullscreenbanner" style="display:none;" data-version="5.4.1">
<ul>	<!-- SLIDE  -->
	<li data-index="rs-3238" data-transition="fade" data-slotamount="default" data-hideafterloop="0" data-hideslideonmobile="off"  data-easein="default" data-easeout="default" data-masterspeed="500"  data-rotate="0"  data-saveperformance="off"  data-title="Slide" data-param1="" data-param2="" data-param3="" data-param4="" data-param5="" data-param6="" data-param7="" data-param8="" data-param9="" data-param10="" data-description="">
		<!-- MAIN IMAGE -->
		<img src="{{url('public')}}/assets-web/images/post/22.jpg" data-bgcolor="#7F00FF" alt=""  data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat" data-bgparallax="off" class="rev-slidebg" data-no-retina />
		<!-- LAYERS -->

		<!-- LAYER NR. 1 -->
 
        
          
              <div class="page-title text-center white-color">
                <h1 class="raleway-font font-300">Wisata Alam</h1>
                <div class="breadcrumb mt-20">
                    <!-- Breadcrumb Start -->
                        <ul>
                          <li><a href="{{url('front-view/AtraksiWisata')}}">Atraksi Wisata</a></li>
                          <li>Wisata Alam</li>
                        </ul>
                    <!-- Breadcrumb End -->
                </div>
              </div>
           

       


	</li>
</ul>
  <div class="tp-bannertimer tp-bottom" style="visibility: hidden !important;"></div>
</div>
  <!--== Hero Slider End ==-->

  <!--== Who We Are Start ==-->

<section id="blog" class="white-bg">
    <div class="container">
      <div class="row">
        <div class="col-md-8 centerize-col text-center">
          <div class="section-title wow fadeInUp" data-wow-delay="0.1s">
            <strong style="font-size: 20px; font-weight:bold">WISATA ALAM KABUPATEN KETAPANG</strong>
            <hr class="center_line grey-bg">
          </div>
        </div>
      </div>
      <div class="row">
        @foreach($list_atraksi_wisata->where('kategori','Wisata Alam') as $atraksi_wisata)
        <div class="col-md-4 blog-list wow fadeInDown mt-2" data-wow-delay="0.2s">
          <div class="post-wrap">
             <hr class="center_line dark-bg">
            {{-- <h5 class="text-center">{{$atraksi_wisata->kategori}}</h5> --}}
            <div class="post-img">
              {{-- <div class="date-box dark-bg">
                <span class="day">26</span>
                <span class="month">NOV</span>
              </div> --}}
                    <div class="item"><a class="image-popup-no-margins" href="{{url("public/$atraksi_wisata->foto")}}"><img class="img-responsive" style="width:400px; height:300px; object-fit: cover" src="{{url("public/$atraksi_wisata->foto")}}" alt="Tidak Dapat Memuat Gambar"/></a></div>
                 
            </div>
         
            <div class="post-text">
              
              <h3>{{$atraksi_wisata->nama}}</h3>
              <p>
                {!! substr(nl2br ($atraksi_wisata->deskripsi),0,220,) !!}..... <a href="{{url('front-view/AtraksiWisata/WisataAlam', $atraksi_wisata->id) }}" style="color: blue">selengkapnya</a>
              </p>
			        <hr class="grey-bg">
              {{-- <div class="text-center">
                  <i class="icofont-caret-down"></i>
              </div> --}}
              {{-- <a href="" class="btn-text">Read More</a> --}}
            </div>
          </div>
        </div>
        @endforeach 
      </div>
      
    </div>
    {{-- links paginate --}}
	
	{{-- <div class="container">
		<div class="text-center">
			<strong style="color: rgb(58, 0, 10)" >{{$list_desa_wisata->onEachSide(1)->links()}}</strong>	
		</div>
	</div>
  <hr class="center_line grey-bg">
  <div class="container">
		<div class="text-center">
			<strong>
				showing
				{{ $list_desa_wisata->firstItem()}}
				to
				{{ $list_desa_wisata->lastItem()}}
				of
				{{ $list_desa_wisata->total()}}
				entries
			</strong>
		</div>
	</div> --}}
	{{-- links paginate end --}}
</section>
  <!--== Footer Start ==-->
  <footer class="footer">
    <div class="footer-copyright">
      <div class="container">
        <div class="row wow fadeInUp" data-wow-delay="0.1s">
          <div class="col-md-8 centerize-col text-center">
            <div class="footer-logo">
              <a href="index.html"><img src="{{url('public')}}/assets-web/images/logo-white-footer.png" class="img-responsive centerize-col" alt="Footer Logo"/></a>
            </div>
            <div class="copy-right">Copyright &copy; <span class="default-color">E-KTG 2022 @if (date ("Y")> '2022')-{{date("Y")}} @endif.</span> All rights reserved</div>
            <ul class="social-media mt-30 float-none">
              <li><a href="" class="icofont icofont-email"></a></li>
      			  <li><a href="" target="_blank" class="icofont icofont-instagram"></a></li>
      			  <li><a href="" target="_blank" class="icofont icofont-github "></a></li>
            </ul>
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
<script src="{{url('public')}}/assets-web/js/jquery.min.js"></script>
<script src="{{url('public')}}/assets-web/js/smoothscroll.js"></script>
<script src="{{url('public')}}/assets-web/js/plugins.js"></script>
<script src="{{url('public')}}/assets-web/js/master.js"></script>

<!-- Revolution js Files -->
<script src="{{url('public')}}/assets-web/revolution/js/jquery.themepunch.tools.min.js"></script>
<script src="{{url('public')}}/assets-web/revolution/js/jquery.themepunch.revolution.min.js"></script>
<script src="{{url('public')}}/assets-web/revolution/js/revolution.extension.actions.min.js"></script>
<script src="{{url('public')}}/assets-web/revolution/js/revolution.extension.carousel.min.js"></script>
<script src="{{url('public')}}/assets-web/revolution/js/revolution.extension.kenburn.min.js"></script>
<script src="{{url('public')}}/assets-web/revolution/js/revolution.extension.layeranimation.min.js"></script>
<script src="{{url('public')}}/assets-web/revolution/js/revolution.extension.migration.min.js"></script>
<script src="{{url('public')}}/assets-web/revolution/js/revolution.extension.navigation.min.js"></script>
<script src="{{url('public')}}/assets-web/revolution/js/revolution.extension.parallax.min.js"></script>
<script src="{{url('public')}}/assets-web/revolution/js/revolution.extension.slideanims.min.js"></script>
<script src="{{url('public')}}/assets-web/revolution/js/revolution.extension.video.min.js"></script>
<!--== Javascript Plugins End ==-->

</body>
</html>
