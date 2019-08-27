<!DOCTYPE html>
<html>
<head>
<title>NewsFeed @yield('title_area')</title>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">

<link rel="stylesheet" type="text/css" href="{{asset('frontEnd')}}/css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="{{asset('frontEnd')}}/css/font-awesome.min.css">
<link rel="stylesheet" type="text/css" href="{{asset('frontEnd')}}/css/animate.css">
<link rel="stylesheet" type="text/css" href="{{asset('frontEnd')}}/css/font.css">
<link rel="stylesheet" type="text/css" href="{{asset('frontEnd')}}/css/li-scroller.css">
<link rel="stylesheet" type="text/css" href="{{asset('frontEnd')}}/css/slick.css">
<link rel="stylesheet" type="text/css" href="{{asset('frontEnd')}}/css/jquery.fancybox.css">
<link rel="stylesheet" type="text/css" href="{{asset('frontEnd')}}/css/theme.css">
<link rel="stylesheet" type="text/css" href="{{asset('frontEnd')}}/css/style.css">
<!--[if lt IE 9]>
<script src="assets/js/html5shiv.min.js"></script>
<script src="assets/js/respond.min.js"></script>
<![endif]-->
</head>
<body>
<div id="preloader">
  <div id="status">&nbsp;</div>
</div>
<a class="scrollToTop" href="#"><i class="fa fa-angle-up"></i></a>
<div class="container">

<header id="header">
    <div class="row">
      
      <div class="col-lg-12 col-md-12 col-sm-12">
        <div class="header_bottom">
          <div class="logo_area"><a href="index.html" class="logo"><img src="{{asset('frontEnd')}}/images/logo.png" alt=""></a></div>
          <div class="add_banner"><a href="#"><img src="{{asset('frontEnd')}}/images/addbanner_728x90_V1.jpg" alt=""></a></div>
        </div>
      </div>
    </div>
  </header>



  <section id="navArea">
    <nav class="navbar navbar-inverse" role="navigation">
      <div class="navbar-header">
        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar"> <span class="sr-only">Toggle navigation</span> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
      </div>
  @include('frontView.inc.manu')

    
    </nav>
  </section>
  <section id="newsSection">
    <div class="row">
      <div class="col-lg-12 col-md-12">
        <div class="latest_newsarea"> <span>Latest News</span>
          <ul id="ticker01" class="news_sticker">
            <li><a href="#"><img src="{{asset('frontEnd')}}/images/news_thumbnail3.jpg" alt="">My First News Item</a></li>
            <li><a href="#"><img src="{{asset('frontEnd')}}/images/news_thumbnail3.jpg" alt="">My Second News Item</a></li>
            <li><a href="#"><img src="{{asset('frontEnd')}}/images/news_thumbnail3.jpg" alt="">My Third News Item</a></li>
            <li><a href="#"><img src="{{asset('frontEnd')}}/images/news_thumbnail3.jpg" alt="">My Four News Item</a></li>
            <li><a href="#"><img src="{{asset('frontEnd')}}/images/news_thumbnail3.jpg" alt="">My Five News Item</a></li>
            <li><a href="#"><img src="{{asset('frontEnd')}}/images/news_thumbnail3.jpg" alt="">My Six News Item</a></li>
            <li><a href="#"><img src="{{asset('frontEnd')}}/images/news_thumbnail3.jpg" alt="">My Seven News Item</a></li>
            <li><a href="#"><img src="{{asset('frontEnd')}}/images/news_thumbnail3.jpg" alt="">My Eight News Item</a></li>
            <li><a href="#"><img src="{{asset('frontEnd')}}/images/news_thumbnail2.jpg" alt="">My Nine News Item</a></li>
          </ul>
          <div class="social_area">
            <ul class="social_nav">
              <li class="facebook"><a href="#"></a></li>
              <li class="twitter"><a href="#"></a></li>
              <li class="flickr"><a href="#"></a></li>
              <li class="pinterest"><a href="#"></a></li>
              <li class="googleplus"><a href="#"></a></li>
              <li class="vimeo"><a href="#"></a></li>
              <li class="youtube"><a href="#"></a></li>
              <li class="mail"><a href="#"></a></li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </section>
  @yield ('slider')

  
  @yield('content')
  
  <footer id="footer">
    <div class="footer_top">
      <div class="row">
        <div class="col-lg-4 col-md-4 col-sm-4">
          <div class="footer_widget wow fadeInLeftBig">
            <h2>Flickr Images</h2>
          </div>
        </div>
        <div class="col-lg-4 col-md-4 col-sm-4">
          <div class="footer_widget wow fadeInDown">
            <h2>Tag</h2>
            <ul class="tag_nav">
              <li><a href="#">Games</a></li>
              <li><a href="#">Sports</a></li>
              <li><a href="#">Fashion</a></li>
              <li><a href="#">Business</a></li>
              <li><a href="#">Life &amp; Style</a></li>
              <li><a href="#">Technology</a></li>
              <li><a href="#">Photo</a></li>
              <li><a href="#">Slider</a></li>
            </ul>
          </div>
        </div>
        <div class="col-lg-4 col-md-4 col-sm-4">
          <div class="footer_widget wow fadeInRightBig">
            <h2>Contact</h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
            <address>
            Perfect News,1238 S . 123 St.Suite 25 Town City 3333,USA Phone: 123-326-789 Fax: 123-546-567
            </address>
          </div>
        </div>
      </div>
    </div>
    <div class="footer_bottom">
      <p class="copyright">Copyright &copy; 2045 <a href="index.html">NewsFeed</a></p>
      <p class="developer">Developed By Wpfreeware</p>
    </div>
  </footer>
</div>
<script src="{{asset('frontEnd')}}/js/jquery.min.js"></script> 
<script src="{{asset('frontEnd')}}/js/wow.min.js"></script> 
<script src="{{asset('frontEnd')}}/js/bootstrap.min.js"></script> 
<script src="{{asset('frontEnd')}}/js/slick.min.js"></script> 
<script src="{{asset('frontEnd')}}/js/jquery.li-scroller.1.0.js"></script> 
<script src="{{asset('frontEnd')}}/js/jquery.newsTicker.min.js"></script> 
<script src="{{asset('frontEnd')}}/js/jquery.fancybox.pack.js"></script> 
<script src="{{asset('frontEnd')}}/js/custom.js"></script>
</body>
</html>