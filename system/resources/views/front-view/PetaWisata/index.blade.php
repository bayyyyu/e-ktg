<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="author" content="Designs Ninja">
<meta name="description" content="Professional and Great template with 10 unique home page designs for corporate, classic, creative, parallax, studio, crypto Currency, business and minimal concept">
	<meta name="keywords" content="animation, creative, digital, flex, marketing, minimal, one page, parallax, portfolio, responsive, revolution slider, startup, studio, video background">
<title>KETAPANG TRAVEL GUIDE - Peta Wisata di Kabupaten Ketapang</title>
<link rel="shortcut icon" href="{{url('public')}}/assets-web-web/images/favicon.ico">

<!-- Core Style Sheets -->
<link rel="stylesheet" href="{{url('public')}}/assets-web/css/master.css">
<!-- Responsive Style Sheets -->
<link rel="stylesheet" href="{{url('public')}}/assets-web/css/responsive.css">
<!-- Revolution Style Sheets -->
<link rel="stylesheet" type="text/css" href="{{url('public')}}/assets-web/revolution/css/settings.css">
<link rel="stylesheet" type="text/css" href="{{url('public')}}/assets-web/revolution/css/layers.css">
<link rel="stylesheet" type="text/css" href="{{url('public')}}/assets-web/revolution/css/navigation.css">


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

<!--==Leafleat==-->
<link rel="stylesheet" href="https://unpkg.com/leaflet@1.9.3/dist/leaflet.css" integrity="sha256-kLaT2GOSpHechhsozzB+flnD+zUyjE2LlfWPgU04xyI=" crossorigin="" />
<script src="https://unpkg.com/leaflet@1.9.3/dist/leaflet.js" integrity="sha256-WBkoXOwTeyKclOHuWtc+i2uENFpDZ9YPdf5Hf+D7ewM=" crossorigin=""></script>

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
        <div class="logo"> <a href="{{url('front-view/DesaWisata')}}"><img class="logo logo-display" src="{{url('public')}}/assets-web/images/logo/maskot-putih6.png" alt=""> <img class="logo logo-scrolled" src="{{url('public')}}/assets-web/images/logo/maskot-itam.png" alt=""> </a> </div>
      </div>
      <!--== End Header Navigation ==-->

      <!--== Collect the nav links, forms, and other content for toggling ==-->
      <div class="collapse navbar-collapse" id="navbar-menu">
        <ul class="nav navbar-nav" data-in="fadeIn" data-out="fadeOut">
          <li class="dropdown"><a href="{{url('front-view/DesaWisata')}}">Desa Wisata</a>
          </li>
          <li><a class="page-scroll" href="{{url('front-view/AtraksiWisata')}}">Atraksi Wisata</a></li>
          <li><a class="page-scroll" href="{{url('front-view/KalenderWisata')}}">Kalender Wisata</a></li>
          <li><a class="page-scroll actives" href="{{url('front-view/PetaWisata')}}">Peta Wisata</a></li>
          <li><a class="page-scroll" href="">Info & Kontak</a></li>
		  <li><a class="page-scroll" href="{{url('auth/login')}}"><i class="icofont-user-male"></i></a></li>
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
  <div id="rev_slider_1078_2_wrapper" class="rev_slider_wrapper fullwidthbanner-container" data-alias="classic4export" data-source="gallery" style="margin:0px auto;background-color:#000000;padding:0px;margin-top:0px;margin-bottom:0px;">
  <!-- START REVOLUTION SLIDER 5.4.1 fullwidth mode -->
	<div id="rev_slider_1078_2" class="rev_slider fullwidthabanner" style="display:none;" data-version="5.4.1">
      <ul>	<!-- SLIDE  -->
      	<li data-index="rs-3045" data-transition="slotfade-vertical" data-slotamount="default" data-hideafterloop="0" data-hideslideonmobile="off"  data-easein="default" data-easeout="default" data-masterspeed="default"  data-rotate="0"  data-saveperformance="off"  data-title="" data-param1="" data-param2="" data-param3="" data-param4="" data-param5="" data-param6="" data-param7="" data-param8="" data-param9="" data-param10="" data-description="">
      		<!-- MAIN IMAGE -->
      		<img src="{{url('public')}}/assets-web/images/post/peta.jpg"  alt=""  data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat" data-bgparallax="10" class="rev-slidebg" data-no-retina>
      		<!-- LAYERS -->

          <!-- LAYER NR. 1 -->
      		<div class="hero-text-wrap">
                <center>
                  <h3 style="color: white; font-weight:40px; margin-top:250px">Peta Wisata</h3>
              <img src="{{url('public')}}/assets-web/images/logo/maskot-putih5.png" alt="" style="width:100%; height:auto; object-fit: cover; ">
                </center>
            </div>

      	</li>
      </ul>
      <div class="tp-bannertimer" style="height: 3px; background-color: rgba(255, 255, 255, 0.25);"></div>	</div>
    </div>
</div>
  <!--== Hero Slider End ==-->

  <!--== Who We Are Start ==-->
  <section class="white-bg" id="pricing">
    <div class="container">
      <div class="row">
        <div class="col-md-8 centerize-col text-center">
          <div class="section-title wow fadeInUp" data-wow-delay="0.1s">
            <strong style="font-size: 20px; font-weight:bold; color:grey">PETA WISATA KABUPATEN KETAPANG</strong>
            {{-- <h3 style="font-weight:bold">Pilihan atraksi wisata lainnya di Ketapang </h3> --}}
            <hr class="center_line grey-bg">
          </div>
        </div>
      </div>
       
       <div class="container">
      <div class="row">
        <div class="col-md-12 centerize-col">
          <div class="section-title wow fadeInUp" data-wow-delay="0.1s">
            <strong style="font-size: 20px; font-weight:bold; color:black">Note :</strong>
            <br>
           <p style="color: black"><img class="mt-2" src="https://cdn-icons-png.flaticon.com/128/2776/2776000.png" style="width: 20px" alt=""> : Desa Wisata</p>
           <p style="color: black"><img class="mt-2" src="https://cdn-icons-png.flaticon.com/512/7987/7987463.png" style="width: 20px" alt=""> : Atraksi Wisata</p>
          </div>
        </div>
      </div>
      <div id="map" style="width: 100%; height: 500px;"></div>
        
    </div>
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
              <li><a href="mailto:dpcketapang.masata@gmail.com" class="icofont icofont-email"></a></li>
      			  <li><a href="https://www.instagram.com/_bayyz/" target="_blank" class="icofont icofont-instagram"></a></li>
      			  <li><a href="https://github.com/bayyyyu" target="_blank" class="icofont icofont-github "></a></li>
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
<script>
  var peta1 = L.tileLayer('https://api.mapbox.com/styles/v1/{id}/tiles/{z}/{x}/{y}?access_token=pk.eyJ1IjoibWFwYm94IiwiYSI6ImNpejY4NXVycTA2emYycXBndHRqcmZ3N3gifQ.rJcFIG214AriISLbB6B5aw', {
		attribution: 'Map data &copy; <a href="https://www.openstreetmap.org/">OpenStreetMap</a> contributors, ' +
			'<a href="https://creativecommons.org/licenses/by-sa/2.0/">CC-BY-SA</a>, ' +
			'Imagery © <a href="https://www.mapbox.com/">Mapbox</a>',
		id: 'mapbox/streets-v11'
	});

var peta2 = L.tileLayer('https://api.mapbox.com/styles/v1/{id}/tiles/{z}/{x}/{y}?access_token=pk.eyJ1IjoibWFwYm94IiwiYSI6ImNpejY4NXVycTA2emYycXBndHRqcmZ3N3gifQ.rJcFIG214AriISLbB6B5aw', {
		attribution: 'Map data &copy; <a href="https://www.openstreetmap.org/">OpenStreetMap</a> contributors, ' +
			'<a href="https://creativecommons.org/licenses/by-sa/2.0/">CC-BY-SA</a>, ' +
			'Imagery © <a href="https://www.mapbox.com/">Mapbox</a>',
		id: 'mapbox/satellite-v9'
	});


var peta3 = L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
		attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors'
	});

var map = L.map('map', {
    center: [-1.8028443920355783, 109.9684624870144],
    zoom: 9,
    layers: [peta3],
});

var baseMaps = {
    "Grayscale": peta1,
    "Sattelite": peta2,
    "Streets":peta3,
};


var layerControl = L.control.layers(baseMaps).addTo(map);

	L.tileLayer('https://api.maptiler.com/maps/streets/{z}/{x}/{y}.png?key=Ts9g8McLuNVEfjGFTHeG', {
            attribution: '<a href="https://www.maptiler.com/copyright/" target="_blank">© MapTiler</a> <a href="https://www.openstreetmap.org/copyright" target="_blank">© OpenStreetMap contributors</a>'
        }).addTo(map);

        var LeafIcon = L.Icon.extend({
            options: {
                // shadowUrl: 'imgs/leaf-shadow.png',
                iconSize:     [28, 30],
                shadowSize:   [50, 64],
                // iconAnchor:   [22, 94],
                shadowAnchor: [4, 62],
            }
        });

        var greenIcon = new LeafIcon({iconUrl: 'https://cdn-icons-png.flaticon.com/128/2776/2776000.png'}),
        redIcon = new LeafIcon({iconUrl: 'https://cdn-icons-png.flaticon.com/128/2776/2776000.png'}),
        orangeIcon = new LeafIcon({iconUrl: 'https://cdn-icons-png.flaticon.com/512/7987/7987463.png'});

        L.marker([-2.4261205059839894, 110.20954827208297], {icon: greenIcon}).addTo(map).bindPopup("Kendawangan Kiri");
        L.marker([-1.827727650093884, 109.90554097731221], {icon: greenIcon}).addTo(map).bindPopup("Suka Baru");
        L.marker([-1.388630329162174, 110.20585539637383], {icon: greenIcon}).addTo(map).bindPopup("Laman Satong");
        L.marker([-2.294156865904084, 110.25612196569554], {icon: greenIcon}).addTo(map).bindPopup("Mekar Utama");
        L.marker([-0.8217186248899767, 110.40858642416592], {icon: greenIcon}).addTo(map).bindPopup("Sinar Kuri");
        L.marker([-1.7941568142505078, 110.6252223481849], {icon: greenIcon}).addTo(map).bindPopup("Jelayan");
        L.marker([-1.7431600501599884, 109.98113375071058], {icon: greenIcon}).addTo(map).bindPopup("Pantai Air Mata Permai");
        L.marker([-1.8693057481495226, 109.95493868116024], {icon: greenIcon}).addTo(map).bindPopup("Kinjil Pesisir");


        L.marker([-0.8998817765621778, 110.40184614449552], {icon: orangeIcon}).addTo(map).bindPopup("Bukit Kuri");
        L.marker([-1.3877605622747031, 110.18115553890323], {icon: orangeIcon}).addTo(map).bindPopup("Goa Maria Manjau");
        L.marker([-2.351773713814248, 110.14362463953195], {icon: orangeIcon}).addTo(map).bindPopup("Sungai Tengar");
        L.marker([-1.8609021488206756, 109.98085680365591], {icon: orangeIcon}).addTo(map).bindPopup("Keraton Kerajaan Matan Tanjung Pura");
        L.marker([-1.8497262569940318, 109.97026383890562], {icon: orangeIcon}).addTo(map).bindPopup("Taman Merdeka");

</script>


</body>
</html>
