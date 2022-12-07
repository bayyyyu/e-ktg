<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="author" content="Designs Ninja">
<meta name="description" content="Professional and Great template with 10 unique home page designs for corporate, classic, creative, parallax, studio, crypto Currency, business and minimal concept">
	<meta name="keywords" content="animation, creative, digital, flex, marketing, minimal, one page, parallax, portfolio, responsive, revolution slider, startup, studio, video background">
<title>KETAPANG TRAVEL GUIDE</title>

<!-- Core Style Sheets -->
<link rel="stylesheet" href="{{url('public')}}/assets-web/css/master.css">
<!-- Responsive Style Sheets -->
<link rel="stylesheet" href="{{url('public')}}/assets-web/css/responsive.css">
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

  </nav>
  <!--== Header End ==-->

  <!--== Page Title Start ==-->
  <div class="transition-none">
      <section class="title-hero-bg parallax-effect" style="background-image: url({{url('public')}}/assets-web/images/post/22.jpg);">
        <div class="container">
          <div class="row">
            <div class="col-md-12">
              <div class="page-title text-center white-color">
                <h1 class="raleway-font font-300">{{$atraksi_wisata->nama}}</h1>
                <div class="breadcrumb mt-20">
                    <!-- Breadcrumb Start -->
                        <ul>
                          <li><a href="{{url('front-view/AtraksiWisata')}}">Atraksi Wisata</a></li>
                          <li><a href="{{url('front-view/AtraksiWisata/WisataBuatan')}}">{{$atraksi_wisata->kategori}}</a></li>
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
                        <div class="item"><img class="img-responsive" src="{{url("public/$atraksi_wisata->foto")}}"  style="width: 100%; height: 50%; object-fit: cover" alt=""/></div>
                    </div>
                    <br>
                    <div class="post-text">
                      <h3>{{$atraksi_wisata->nama}}</h3>
                      <p>
                        {!! nl2br ($atraksi_wisata->deskripsi) !!}
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
            <h5 class="aside-title">{{$atraksi_wisata->nama}}</h5>
            <ul>
              <li>Nama Pengelola</a> :<span>{{$atraksi_wisata->nama_pengelola}}</span></li>
              <li>No Pengelola</a> :<span>{{$atraksi_wisata->no_pengelola}}</span></li>
              <li>Hari Buka</a> :<span>{{$atraksi_wisata->hari_buka}}</span></li>
              <li>Jam Buka</a> :<span>{!!date('H:i', strtotime($atraksi_wisata->jam_buka)) !!}</span></li>
              <li>Jam Tutup</a> :<span> {!!date('H:i', strtotime($atraksi_wisata->jam_tutup)) !!}</span></li>
            </ul>
          </div>
        </div>
         <div class="sidebar_widget widget_recent_post mb-50 col-md-3 col-sm-3 col-xs-12">
            <h5 class="aside-title">Postingan Terbaru</h5>
            @foreach ($recent_upload->where('kategori', 'Wisata Buatan') as $atraksi_wisata)
            <div class="post-item">
                  
               <div class="post-thumb">
                 <a href=""><img width="75" height="75" src="{{url("public/$atraksi_wisata->foto")}}" style="object-fit:cover" class="img-responsive" alt="post-01"/></a>
                </div>
                <div class="post-body">
                  <span class="font-14px"><a href="{{url('front-view/AtraksiWisata/WisataAlam') }}">{{$atraksi_wisata->kategori}}</a></span>
                  <div class="post-time">{{ $atraksi_wisata->created_at->diffForHumans() }}</div>
                  <a href="{{url('front-view/AtraksiWisata/WisataAlam', $atraksi_wisata->id) }}" class="subtitle">{{$atraksi_wisata->nama}}</a>
                </div>
              </div>
              @endforeach
          </div>
      </div>
    </div>

    <div id='share-button'> <p>Share : </p>
 <!-- untuk tombol Whatsapp -->
  <a href="whatsapp://send?text= echo site_url().'first/artikel/'.$single_artikel['id']" rel='nofollow' style='background:#4dc247;' target='_blank' title='Whatsapp'><svg viewBox='0 0 24 24'><path d='M16.75,13.96C17,14.09 17.16,14.16 17.21,14.26C17.27,14.37 17.25,14.87 17,15.44C16.8,16 15.76,16.54 15.3,16.56C14.84,16.58 14.83,16.92 12.34,15.83C9.85,14.74 8.35,12.08 8.23,11.91C8.11,11.74 7.27,10.53 7.31,9.3C7.36,8.08 8,7.5 8.26,7.26C8.5,7 8.77,6.97 8.94,7H9.41C9.56,7 9.77,6.94 9.96,7.45L10.65,9.32C10.71,9.45 10.75,9.6 10.66,9.76L10.39,10.17L10,10.59C9.88,10.71 9.74,10.84 9.88,11.09C10,11.35 10.5,12.18 11.2,12.87C12.11,13.75 12.91,14.04 13.15,14.17C13.39,14.31 13.54,14.29 13.69,14.13L14.5,13.19C14.69,12.94 14.85,13 15.08,13.08L16.75,13.96M12,2A10,10 0 0,1 22,12A10,10 0 0,1 12,22C10.03,22 8.2,21.43 6.65,20.45L2,22L3.55,17.35C2.57,15.8 2,13.97 2,12A10,10 0 0,1 12,2M12,4A8,8 0 0,0 4,12C4,13.72 4.54,15.31 5.46,16.61L4.5,19.5L7.39,18.54C8.69,19.46 10.28,20 12,20A8,8 0 0,0 20,12A8,8 0 0,0 12,4Z'/></svg></a>
 <!-- untuk tombol Facbook -->
  <a &lt;a id="button" onClick="window.open('http://www.facebook.com/sharer.php?s=100&amp;amp;p[title]=&lt;?php echo $title; ?&gt;&amp;amp;p[summary]=&lt;?php echo $summary;?&gt;&amp;amp;p[url]=&lt;?php echo $url; ?&gt;&amp;amp;&amp;p[images][0]=&lt;?php echo $image;?&gt;', 'sharer', 'toolbar=0,status=0,width=550,height=400');" target="_parent" href="javascript: void(0)"&gt; &lt;img src="images/f.jpg" /&gt;&lt;/a&gt; rel='nofollow' style='background:#3b5998;' target='_blank' title='Facebook'><svg viewBox='0 0 24 24'><path d='M17,2V2H17V6H15C14.31,6 14,6.81 14,7.5V10H14L17,10V14H14V22H10V14H7V10H10V6A4,4 0 0,1 14,2H17Z'/></svg></a>
 <!-- untuk tobol Twitter -->
  <a &lt;a href="http://twitter.com/share?source=sharethiscom&amp;text=&lt;?php echo $title;?&gt;&amp;url=&lt;?php echo $url; ?&gt;&amp;via=berbagiyuks"&gt;&lt;img src="images/tw.jpg" /&gt;&lt;/a&gt;
 rel='nofollow' style='background:#4099ff;' target='_blank' title='Twitter'><svg viewBox='0 0 24 24'> <path d='M22.46,6C21.69,6.35 20.86,6.58 20,6.69C20.88,6.16 21.56,5.32 21.88,4.31C21.05,4.81 20.13,5.16 19.16,5.36C18.37,4.5 17.26,4 16,4C13.65,4 11.73,5.92 11.73,8.29C11.73,8.63 11.77,8.96 11.84,9.27C8.28,9.09 5.11,7.38 3,4.79C2.63,5.42 2.42,6.16 2.42,6.94C2.42,8.43 3.17,9.75 4.33,10.5C3.62,10.5 2.96,10.3 2.38,10C2.38,10 2.38,10 2.38,10.03C2.38,12.11 3.86,13.85 5.82,14.24C5.46,14.34 5.08,14.39 4.69,14.39C4.42,14.39 4.15,14.36 3.89,14.31C4.43,16 6,17.26 7.89,17.29C6.43,18.45 4.58,19.13 2.56,19.13C2.22,19.13 1.88,19.11 1.54,19.07C3.44,20.29 5.7,21 8.12,21C16,21 20.33,14.46 20.33,8.79C20.33,8.6 20.33,8.42 20.32,8.23C21.16,7.63 21.88,6.87 22.46,6Z'/></svg></a>
 <!-- untuk tombol Linkedin -->
  <a &lt;a href="http://www.linkedin.com/shareArticle?mini=true&amp;url=&lt;?php echo $url; ?&gt; &amp;title=&lt;?php echo $title;?&gt;&amp;summary=&lt;?php echo $summary;?&gt;&amp;source=BerbagiYuks.con"rel="nofollow"&gt;&lt;img src="images/in.jpg" /&gt;&lt;/a&gt;
 rel='nofollow' style='background:#2554BF;' target='_blank' title='Linkedin'><svg viewBox='0 0 24 24'><path d='M21,21H17V14.25C17,13.19 15.81,12.31 14.75,12.31C13.69,12.31 13,13.19 13,14.25V21H9V9H13V11C13.66,9.93 15.36,9.24 16.5,9.24C19,9.24 21,11.28 21,13.75V21M7,21H3V9H7V21M5,3A2,2 0 0,1 7,5A2,2 0 0,1 5,7A2,2 0 0,1 3,5A2,2 0 0,1 5,3Z'/></svg></a>
   <!-- untuk tombol Telegram -->
  <a expr:data-text='data:post.title' expr:data-url='data:post.url' expr:href='&quot;https://telegram.me/share/url?url=&quot; + data:post.url + &quot;&amp;text=Ada%20yang%20keren%20lho,%20nyesel%20kalo%20ga%20buka...%20kunjungi:&quot;' rel='nofollow' style='background: #32afed;' target='_blank' title='Share to Telegram'><svg viewBox='0 0 24 24'><path d='M9.78,18.65L10.06,14.42L17.74,7.5C18.08,7.19 17.67,7.04 17.22,7.31L7.74,13.3L3.64,12C2.76,11.75 2.75,11.14 3.84,10.7L19.81,4.54C20.54,4.21 21.24,4.72 20.96,5.84L18.24,18.65C18.05,19.56 17.5,19.78 16.74,19.36L12.6,16.3L10.61,18.23C10.38,18.46 10.19,18.65 9.78,18.65Z.083 -0.219,-0.037c-2.5,1.596 -6.939,4.43 -6.939,4.43Z'/></svg></a>
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
<script src="{{url('public')}}/assets-web/js/jquery.min.js"></script>
<script src="{{url('public')}}/assets-web/js/smoothscroll.js"></script>
<script src="{{url('public')}}/assets-web/js/plugins.js"></script>
<script src="{{url('public')}}/assets-web/js/master.js"></script>

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
