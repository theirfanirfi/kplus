<!doctype html>
<html class="no-js" lang="en">
<head>
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<meta http-equiv="content-type" content="text/html; charset=utf-8" />
<meta name="Author" content="De Atoms" />
<meta name="description" content="KobuPlus - Management System for Enterprises">
<meta name="keywords" content="KobuPlus, Enterprise Management System, KobuApp">
<!-- Document Title -->
<title>KobuPlus</title>

<!-- Favicon -->
<link rel="shortcut icon" href="{{ URL::asset('kobuland/images/fav.jpg')}}" type="image/x-icon">
<link rel="icon" href="{{ URL::asset('kobuland/images/fav.jpg')}}" type="image/x-icon">

<!-- FontsOnline -->
<link href="https://fonts.googleapis.com/css?family=Roboto:400,500,700,900,300,100" rel="stylesheet" type="text/css">

<!-- StyleSheets -->
<link rel="stylesheet" href="{{ URL::asset('kobuland/css/ionicons.min.css') }}">
{{-- <link rel="stylesheet" href="{{ URL::asset('kobuland/css/materialize.min.css') }}"> --}}
<link rel="stylesheet" href="{{ URL::asset('kobuland/css/font-awesome.min.css') }}">
<link rel="stylesheet" href="{{ URL::asset('kobuland/css/main.css') }}">
<link rel="stylesheet" href="{{ URL::asset('kobuland/css/styles.css') }}">
<link rel="stylesheet" href="{{ URL::asset('kobuland/css/responsive.css') }}">

<!-- SLIDER REVOLUTION 4.x CSS SETTINGS -->
<link rel="stylesheet" type="text/css" href="{{ URL::asset('kobuland/rs-plugin/css/settings.css')}}" media="screen" />

<!-- Just Imported -->
<link rel="stylesheet" href="{{ URL::asset('kobuland/css/bootstrap.css')}}">
<link rel="stylesheet" href="{{ URL::asset('kobuland/css/main.style.css')}}">
<link rel="stylesheet" href="{{ URL::asset('kobuland/css/themify-icons.css')}}">
<link rel="stylesheet" href="{{ URL::asset('kobuland/css/style.css')}}">
<link rel="stylesheet" href="{{ URL::asset('kobuland/css/one-page-nav.css')}}">
<link rel="stylesheet" href="{{ URL::asset('kobuland/css/owl-carousel.css')}}">
<link rel="stylesheet" href="{{ URL::asset('kobuland/css/demo/demo5.css')}}">
<link rel="stylesheet" href="{{ URL::asset('kobuland/css/smartmenu.css')}}">

<style type="text/css">
  .navbar-black .nav > li.active > a:before, .navbar-black .nav > li.active > a:focus:before {
    display: none;
  }

</style>

<!-- JavaScripts -->
<script src="{{ URL::asset('kobuland/js/vendors/modernizr.js')}}"></script>
<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
<!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body>

<!-- LOADER -->
<div id="loader">
  <div class="loader">
    <div class="position-center-center"> <img src="{{ URL::asset('kobuland/images/logo.jpg')}}" alt="Loader Logo" >
      <div class="progress">
        <div class="indeterminate"></div>
      </div>
    </div>
  </div>
</div>

<!-- Page Wrapper -->
<div id="wrap"> 
      
      <section class="hero-header-13 bg-cover-simple" id="top">
        <div class="container text-center">
            <img class="img-center img-responsive" src="{{ URL::asset('kobuland/images/contact.png')}}" alt="KobuPlus">
        </div>
    </section>      
        
      <!-- Contact Section 4 -->
            <section class="contact-4" id="contact">
                <div class="container">
                    <!-- main heading and sub-text -->
                    <div class="heading-block text-center margin-bottom-10">
         {{--  <h3>Contact Us</h3> 
          <hr> --}}
          <span class=" margin-top-20">The weather started getting rough - the tiny ship was tossed. If not for the courage of the fearless crew the Minnow would be lost. the Minnow always wanted to have a neighbor just like you. I've always wanted to live in a neighborhood with you. </span> </div>
                    <!-- all deatils -->
                    <div class="col-md-10 just-center all-details-wrapper">
                        <!-- part 1 -->
                        <div class="col-md-6">
                            <div class="wrapper transition">
                                <!-- heading -->
                                <h5 class="text-blue">
                                    Call Us at <span class="display-inline text-black">+234 806 836 3644</span>
                                </h5>
                                <div class="row margin-top30">
                                    <div class="col-md-6">
                                        <!-- details -->
                                        <div class="details">
                                            <!-- detail head -->
                                            <span class="det-head">Address</span>
                                            <!-- info -->
                                            <span class="my-detail">273, Main Street, Near Building, 202, Main City Warri</span>
                                        </div>
                                        <div class="details">
                                            <span class="det-head">Phone</span>
                                            <span class="my-detail">+234 806 836 3644</span>
                                        </div>
                                        {{-- <div class="details">
                                            <span class="det-head">Fax</span>
                                            <span class="my-detail">+234 806 836 3644</span>
                                        </div> --}}
                                    </div>
                                    <div class="col-md-6">
                                        <div class="details">
                                            <span class="det-head">E-Mail</span>
                                            <span class="my-detail">info@kobuplus.com</span>
                                        </div>
                                        {{-- <div class="details">
                                            <span class="det-head">Skype</span>
                                            <span class="my-detail">company_skype</span>
                                        </div> --}}
                                    </div>
                                    <div class="col-md-12">
                                        <!-- Get Direction button -->
                                        <form class="no-margin" action="http://maps.google.com/maps" method="get" target="_blank">
                                            <input type="hidden" name="daddr" value="273, Main Street, Near Building, 202, Main City Warri, Nigeria" />
                                            <button type="submit" class="bttn bttn-med bttn-scale bttn-blue">Get directions</button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- part 2 -->
                        <div class="col-md-6">
                            <div class="wrapper transition">
                                <!-- heading -->
                                <h5 class="text-blue">Send a Message</h5>
                                <!-- contact form -->
                                <form id="contact-4">
                                    <label>Your Email ID</label>
                                    <input type="email" id="urmail" placeholder="Enter your email ID" data-parsley-required disabled>
                                    <label>Your Message</label>
                                    <textarea placeholder="Enter your message here" data-parsley-minlength="20" data-parsley-maxlength="100" data-parsley-required-message="Enter some text" data-parsley-minlength-message="Come on! You need to enter at least a 20 character comment.." data-parsley-required disabled></textarea>   <button class="bttn bttn-med bttn-scale bttn-green" disabled>Send</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
    
    <!-- News Letter -->
    <div class="container">
      <section class="news-letter">
        <div class="row">
          <div class="col-md-6">
            <h5>Subscribe to our newsletter</h5>
            <p>You can unsubscribe anytime you want</p>
          </div>
          <div class="col-md-6">
            <form>
              <input type="email" class="z-depth-1" placeholder="Email address" required>
              <button type="submit" class="btn waves-effect waves-light">subscribe</button>
            </form>
          </div>
        </div>
      </section>
    </div>
  </div>
  <!-- End Content --> 
  
  <!-- Footer -->
  
  <footer>
    <div class="container">
      <div class="row"> 
        
        <!-- About -->
        <div class="col-md-2">
        </div>

      <div class="col-md-2"> 
        </div>
        
      </div>
      
      <!-- Links -->
      <ul class="bottom-links">
        <li><a href="/#top">Home </a></li>
        <li><a href="/#about"> About us </a></li>
        <li><a href="/#features"> Features </a></li>
        <li><a href="/#pricing"> Pricing </a></li>
        <li><a href="/contact"> Contact us </a></li>
        <li><a href="/register"> Register</a></li>
      </ul>
      
      <!-- Rights -->
      <div class="rights">
        <p>KobuPlus © 2018 All Rights Reserved</p>
      </div>
    </div>
  </footer>
  <!-- End Footer --> 
</div>
<!-- End Page Wrapper --> 

        <!-- Navigation goes here 
            ============================================= -->
        <nav id="mainNav" class="navbar navbar-default navbar-black navbar-fixed-top" role="navigation">
            <div class="container">
                <div class="navbar-header page-scroll">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                    <span class="sr-only">Toggle navigation</span><i class="ti-menu"></i>
                    </button>
                    <a class="navbar-brand page-scroll" href="#top">
                    <img class="primary-logo" src="{{ URL::asset('kobuland/images/logo.jpg')}}" width="80" alt="">
                    <!--<img class="secondary-logo" src="temp2/assets/img/other/logo_big_light.png" width="130" alt="">-->
                    </a>
                </div>
                <!-- Collect the nav links for toggling -->
                <div class="collapse navbar-collapse navbar-ex1-collapse">
                    <ul class="nav navbar-nav">
                        <li>
                            <a class="page-scroll" href="/#top">Home</a>
                        </li>
                        <li>
                            <a class="page-scroll" href="/#about">About</a>
                        </li>
                        <li>
                            <a class="page-scroll" href="/#features">Features</a>
                        </li>
                        <li>
                            <a class="page-scroll" href="/#pricing">Pricing</a>
                        </li>
                        <li>
                            <a class="page-scroll" href="/contact">Contact</a>
                        </li>
                        <li>
                            <a class="page-scroll" href="/register">Register</a>
                        </li>
                        <li>
                            <a class="page-scroll" href="/login">Login</a>
                        </li>
                    </ul>
                </div>
                <!-- /.navbar-collapse -->
            </div>
            <!-- /.container -->
        </nav>
        
        <!-- Go to top arrow    
            ============================================= -->
        <a href="#top" class="goto-top ti-arrow-up"></a>

<!-- JavaScripts --> 
<script src="{{ URL::asset('kobuland/js/vendors/jquery/jquery.min.js') }}"></script>
<script src="{{ URL::asset('kobuland/js/vendors/wow.min.js') }}"></script> 
<script src="{{ URL::asset('kobuland/js/vendors/bootstrap.min.js') }}"></script> 
<script src="{{ URL::asset('kobuland/js/vendors/materialize.min.js') }}"></script> 
<script src="{{ URL::asset('kobuland/js/vendors/own-menu.js') }}"></script> 
<script src="{{ URL::asset('kobuland/js/vendors/flexslider/jquery.flexslider-min.js') }}"></script>
<script src="{{ URL::asset('kobuland/js/vendors/jquery.isotope.min.js') }}"></script> 
<script src="{{ URL::asset('kobuland/js/vendors/owl.carousel.min.js') }}"></script> 

<!-- SLIDER REVOLUTION 4.x SCRIPTS  --> 
<script type="text/javascript" src="{{ URL::asset('kobuland/rs-plugin/js/jquery.themepunch.tools.min.js') }}"></script> 
<script type="text/javascript" src="{{ URL::asset('kobuland/rs-plugin/js/jquery.themepunch.revolution.min.js') }}"></script> 
<script src="{{URL::asset('kobuland/js/main.js') }}"></script>

<!-- Necessary Scripts -->
<script src="{{ URL::asset('kobuland/js/one-page-nav.js') }}"></script>
<script src="{{ URL::asset('kobuland/js/scripts.js') }}"></script>
<script src="{{ URL::asset('kobuland/js/jquery.countdown.min.js') }}"></script>
<script src="{{ URL::asset('kobuland/js/jquery.matchHeight-min.js') }}"></script>
<script src="{{ URL::asset('kobuland/js/owl.carousel.js') }}"></script>
<script src="{{ URL::asset('kobuland/js/demo/demo5.js') }}"></script>
<script src="{{ URL::asset('kobuland/js/jquery.smartmenus.js') }}"></script>
<script src="{{ URL::asset('kobuland/js/smartmenu.script.js') }}"></script>
<script src="{{ URL::asset('kobuland/js/parsley.min.js') }}"></script>
<!-- page-wise script initialization -->
<script>
	jQuery(document).ready(function($){
		demo_5();				
	});
</script>
<script>
	jQuery(document).ready(function($){	            
		// initialize form validation
		$('#contact-4').parsley();	
	// match height
		$('.contact-4 .wrapper').matchHeight();					
	});
</script>

</body>
</html>