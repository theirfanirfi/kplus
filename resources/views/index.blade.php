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
<link rel="stylesheet" href="{{ URL::asset('kobuland/css/materialize.min.css') }}">
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
  
  <!-- Hero Header -->
    <section class="hero-header-13 bg-cover-simple" id="top">
        <div class="container text-center padding-top-100">
           {{--  <img class="img-center img-responsive" src="{{ URL::asset('kobuland/images/kobu.png')}}" alt="KobuPlus"> --}}
            <div id="countdown">
                <div class="counter">
                <span class="value center-align" style="font-size:55px; font-weight:700; line-height: 50px;">Busines Creation <br>Made Easy and Fast</span>
                    <span class="value center-align" style="font-weight: 500;">Don't spend your time planning and researching <br>the market We've done that for you</span>
                    <span class="value center-align" style="font-weight: 500;">Create, manage and Grow your Business.</span>
                </div>
            </div>
            <a href="#0" class="bttn bttn-med bttn-orange bttn75 bttn-scale margin-top50">Signup for Free</a>
            <!-- mouse scroll animation -->
            <div class="mouse-wrapper">
                <a href="#content" class="page-scroll mouse mouse-light">
                    <div class="wheel"></div>
                </a>
            </div>
        </div>
    </section>      
  
  <!-- Content -->
  <div id="content"> 
    
    <!-- Services -->
    <section class="welcome padding-top-100 padding-bottom-100" id="about">
      <div class="container"> 
        <!-- HEADING BLOCK -->
        <div class="heading-block text-center margin-bottom-80">
          <h3>Welcome To KobuPlus</h3>
          <hr>
          <span class=" margin-top-20">KobuPlus is an innovative enterprise creation and business relationship management platform designed for start-ups and emerging entrepreneurs to build a business around what they are passionate about. KobuPlus primarily harnesses user’s skills set to identify and create business opportunities and
generate relevant business documents such as business plans, business model, pitch, financial
plans, etc. </span> </div>
        
        <!-- Icon Row -->
        <div class="text-center margin-bottom-50"> <img class="img-responsive" src="{{ URL::asset('kobuland/images/intro-tabs-1.jpg')}}" alt="" > </div>
        <div class="services-welcome text-center" id="features">
          <ul class="row">
            
            <!-- Services -->
            <li class="col-md-3">
              <div class="icon"> <i class="ion-ios-speedometer-outline"></i> </div>
              <h5 class="margin-top-40 margin-bottom-20" >Create Enterprise</h5>
              <p>KobuPlus Makes it 50% easier to create your business using the skills you possess. </p>
            </li>
            
            <!-- Services -->
            <li class="col-md-3">
              <div class="icon"> <i class="ion-android-contract"></i> </div>
              <h5 class="margin-top-40 margin-bottom-20" >Take Control</h5>
              <p>Easily access all your business functions and processes with a single login and dashboard. </p>
            </li>
            
            <!-- Services -->
            <li class="col-md-3">
              <div class="icon"> <i class="ion-ios-color-wand-outline"></i> </div>
              <h5 class="margin-top-40 margin-bottom-20">Automate it</h5>
              <p>From contact management to sales email and marketing campaigns, KobuPlus automates everything.</p>
            </li>
            
            <!-- Services -->
            <li class="col-md-3">
              <div class="icon"> <i class="ion-ios-infinite-outline"></i> </div>
              <h5 class="margin-top-40 margin-bottom-20">Support</h5>
              <p>Get the most of our KobuPlus paltform with our priority customer support interaction 24/7</p>
            </li>
          </ul>
        </div>
      </div>
    </section>
    
    <!-- PROMO -->
    <section class="video-sec text-center padding-bottom-100 padding-top-100" style="background-image:linear-gradient(to right bottom, rgba(9, 66, 161, 0.5),rgba(10, 65, 181, 0.5)), url({{ URL::asset('kobuland/images/bg/video-bg.jpg')}});">
      <div class="container">
        <h3 class="text-white text-uppercase letter-space-2">Video section</h3>
        <a href="#." class="waves-effect waves-light video-btn"><i class="fa fa-play"></i></a>
        <h6 class="text-white font-bold text-uppercase letter-space-4 margin-top-40">Watch our Intro clip for quick insight</h6>
      </div>
    </section>
        
    <!-- TEAM MEMBER -->
    <!--<section class="explore-tabs purple-bg padding-top-100">
      <div class="container"> -->
        
        <!-- Nav tabs -->
        <!--<ul class="nav nav-pills padding-bottom-50" role="tablist">
          <li role="presentation" class="active"><a href="#branch" role="tab" data-toggle="tab"><i class="icon-puzzle"></i> Elegant Design
            <hr>
            </a></li>
          <li role="presentation"><a href="#project" role="tab" data-toggle="tab"><i class="icon-layers"></i> different layout
            <hr>
            </a></li>
          <li role="presentation"><a href="#news" role="tab" data-toggle="tab"><i class="icon-diamond"></i> unique elements
            <hr>
            </a></li>
          <li role="presentation"><a href="#contact" role="tab" data-toggle="tab"><i class="icon-emoticon-smile"></i> user friendly
            <hr>
            </a></li>
        </ul>
      </div>
      <div class="light-gray-bg padding-top-100">
        <div class="container"> -->
          <!-- Tab panes -->
          <!--<div class="tab-content">--> 
            
            <!-- Branch -->
            <!--<div role="tabpanel" class="tab-pane fade in active" id="branch">
              <div class="row">
                <div class="col-md-5">
                  <h4 class="text-uppercase margin-bottom-30 letter-space-1 margin-top-20">Elegant Design</h4>
                  <p>That's just a little bit more than the law will allow. In 1972 a crack commando unit was sent to prison by a military court for a crime they didn't commit.</p>
                  <p>These Happy Days are yours and mine Happy Days. Just sit right back and you'll hear a tale a tale of a fateful trip that started from this tropic port aboard this tiny ship. Goodbye gray sky hello blue. There's nothing can hold me when I hold you. </p>
                  <a href="#." class="waves-effect waves-light btn btn-white margin-top-30 margin-right-20">contact us</a> <a href="#." class="waves-effect waves-ripple btn margin-top-30 margin-left-20">purchase now</a> </div>
                <div class="col-md-7"> <img src="images/ipad-large.png" alt="" > </div>
              </div>
            </div>-->
            
            <!-- project -->
           <!-- <div role="tabpanel" class="tab-pane fade" id="project">
              <div class="row">
                <div class="col-md-5">
                  <h4 class="text-uppercase margin-bottom-30 letter-space-1 margin-top-20">Different layout</h4>
                  <p>That's just a little bit more than the law will allow. In 1972 a crack commando unit was sent to prison by a military court for a crime they didn't commit.</p>
                  <p>These Happy Days are yours and mine Happy Days. Just sit right back and you'll hear a tale a tale of a fateful trip that started from this tropic port aboard this tiny ship. Goodbye gray sky hello blue. There's nothing can hold me when I hold you. </p>
                  <a href="#." class="waves-effect waves-light btn btn-white margin-top-30 margin-right-20">contact us</a> <a href="#." class="waves-effect waves-ripple btn margin-top-30 margin-left-20">purchase now</a> </div>
                <div class="col-md-7"> <img src="images/ipad-large.png" alt="" > </div>
              </div>
            </div>-->
            
            <!-- news -->
            <!--<div role="tabpanel" class="tab-pane fade" id="news">
              <div class="row">
                <div class="col-md-5">
                  <h4 class="text-uppercase margin-bottom-30 letter-space-1 margin-top-20">unique elements</h4>
                  <p>That's just a little bit more than the law will allow. In 1972 a crack commando unit was sent to prison by a military court for a crime they didn't commit.</p>
                  <p>These Happy Days are yours and mine Happy Days. Just sit right back and you'll hear a tale a tale of a fateful trip that started from this tropic port aboard this tiny ship. Goodbye gray sky hello blue. There's nothing can hold me when I hold you. </p>
                  <a href="#." class="waves-effect waves-light btn btn-white margin-top-30 margin-right-20">contact us</a> <a href="#." class="waves-effect waves-ripple btn margin-top-30 margin-left-20">purchase now</a> </div>
                <div class="col-md-7"> <img src="images/ipad-large.png" alt="" > </div>
              </div>
            </div>-->
            
            <!-- contact -->
           <!-- <div role="tabpanel" class="tab-pane fade" id="contact">
              <div class="row">
                <div class="col-md-5">
                  <h4 class="text-uppercase margin-bottom-30 letter-space-1 margin-top-20">user friendly</h4>
                  <p>That's just a little bit more than the law will allow. In 1972 a crack commando unit was sent to prison by a military court for a crime they didn't commit.</p>
                  <p>These Happy Days are yours and mine Happy Days. Just sit right back and you'll hear a tale a tale of a fateful trip that started from this tropic port aboard this tiny ship. Goodbye gray sky hello blue. There's nothing can hold me when I hold you. </p>
                  <a href="#." class="waves-effect waves-light btn btn-white margin-top-30 margin-right-20">contact us</a> <a href="#." class="waves-effect waves-ripple btn margin-top-30 margin-left-20">purchase now</a> </div>
                <div class="col-md-7"> <img src="images/ipad-large.png" alt="" > </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>-->
    
    <!-- PROMO -->
    <!--<section class="promo text-center padding-bottom-100 padding-top-100" style="background:url(images/bg/promo-bg.jpg) no-repeat;">
      <div class="container">
        <h6>We have used latest Technology</h6>
        <h3>True Material Design For Your Business</h3>
        <a href="#." class="waves-effect waves-light btn btn-white margin-right-20">purchase now</a> <a href="#." class="waves-effect waves-ripple btn margin-left-20">purchase now</a> </div>
    </section>-->
    
    <!-- TESTIMONIALS -->
    <!--<section class="padding-bottom-100 padding-top-100">
      <div class="container">--> 
        <!-- HEADING BLOCK -->
   <!--     <div class="heading-block text-center margin-bottom-80">
          <h3>Our Work Process</h3>
          <hr>
          <span class=" margin-top-20">The weather started getting rough - the tiny ship was tossed. If not for the courage of the fearless crew the Minnow would be lost. the Minnow always wanted to have a neighbor just like you. I've always wanted to live in a neighborhood with you. </span> </div>
        <div class="work-process">
          <ul class="icon-follow">
            <li>
              <div class="icon"> <i class="icon-bulb"></i> </div>
              <h6 class="text-uppercase">Ideas</h6>
            </li>
            <li>
              <div class="icon"> <i class="icon-puzzle"></i> </div>
              <h6 class="text-uppercase">plans</h6>
            </li>
            <li>
              <div class="icon"> <i class="icon-pencil"></i> </div>
              <h6 class="text-uppercase">Design</h6>
            </li>
            <li>
              <div class="icon"> <i class="icon-layers"></i> </div>
              <h6 class="text-uppercase">development</h6>
            </li>
            <li>
              <div class="icon"> <i class="icon-rocket"></i> </div>
              <h6 class="text-uppercase">launch</h6>
            </li>
          </ul>
          <p class="into-type"> And they're always glad you came. And you know where you were then. Girls were girls and men were men. Mister we could use a man like Herbert Hoover again. They call him Flipper Flipper faster than lightning.</p>
          <div class="text-center margin-top-30"> <img class="img-responsive" src="images/iphone-landscape.png" alt=""> </div>
        </div>
      </div>
    </section>-->
    
    <!-- TESTIMONIALS -->
    <!--<section class="testimonial style-2 light-gray-bg">
      <div class="container">
        <div class="row">
          <div class="col-md-4">
            <div class="pink-bg padding-left-40 padding-right-40 padding-top-80 padding-bottom-80">
              <h6 class="text-uppercase text-white letter-space-2 margin-bottom-40 font-16px font-normal">We love our clients</h6>
              <p class="text-white line-height-28">The Brady Bunch the Brady Bunch that's the way we all became the Brady Bunch. Come and listen to a story about a man named Jed mountaineer barely kept his family fed. Just sit right back and you'll.</p>
              <a href="#." class="waves-effect waves-light btn  btn-white margin-right-20 margin-top-50"> get a quote</a> </div>
          </div>-->
          
          <!-- Slider -->
          <!--<div class="col-md-8">
            <div class="single-slides"> -->
              
              <!-- Slider item -->
             <!-- <div class="item">
                <div class="avatar"> <img src="images/avatar.jpg" alt="" > </div>
                <div class="stars"> <i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i> </div>
                <p>Friendly neighbors there that's where we meet. Can you tell me how to get how to get to Sesame Street! Here's the story of a lovely lady who was bringing up three very lovely girls. Said Californ'y is the place you ought to be 
                  So they loaded up the truck and moved to Beverly. Hills that is stars.</p>
                <h6>Micheal Anderson</h6>
              </div>-->
              
              <!-- Slider item -->
              <!--<div class="item">
                <div class="avatar"> <img src="images/avatar.jpg" alt="" > </div>
                <div class="stars"> <i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i> </div>
                <p>Friendly neighbors there that's where we meet. Can you tell me how to get how to get to Sesame Street! Here's the story of a lovely lady who was bringing up three very lovely girls. Said Californ'y is the place you ought to be 
                  So they loaded up the truck and moved to Beverly. Hills that is stars.</p>
                <h6>Micheal Anderson</h6>
              </div>-->
              
              <!-- Slider item -->
              <!--<div class="item">
                <div class="avatar"> <img src="images/avatar.jpg" alt="" > </div>
                <div class="stars"> <i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i> </div>
                <p>Friendly neighbors there that's where we meet. Can you tell me how to get how to get to Sesame Street! Here's the story of a lovely lady who was bringing up three very lovely girls. Said Californ'y is the place you ought to be 
                  So they loaded up the truck and moved to Beverly. Hills that is stars.</p>
                <h6>Micheal Anderson</h6>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <section class="padding-top-100 padding-bottom-100">-->
    
    
      <!--<div class="container"> -->
        <!-- HEADING BLOCK --> <!--
        <div class="heading-block text-center margin-bottom-80">
          <h3>Our Expert Team Members</h3>
          <hr>
          <span class=" margin-top-20">The weather started getting rough - the tiny ship was tossed. If not for the courage of the fearless crew the Minnow would be lost. the Minnow always wanted to have a neighbor just like you. I've always wanted to live in a neighborhood with you. </span> </div>
      </div>-->
      
      <!-- Team -->
     <!-- <div class="expert-team">
        <div class="container">
          <ul class="row">-->
            <!-- TEAM MEMBER -->
            <!--<li class="col-md-3">
              <article class="z-depth-1 padding-30">
                <div class="img-circle"> <img src="images/team-img-1.jpg" alt="">
                  <h5>James Hopper</h5>
                  <span>Lead Developer</span>
                  <p>We finally got a piece of the pie. Makin' your way in the world today week long.</p>
                  <ul class="social-icons">
                    <li><a href="#."><i class="fa fa-facebook"></i></a></li>
                    <li><a href="#."><i class="fa fa-twitter"></i></a></li>
                    <li><a href="#."><i class="fa fa-google"></i></a></li>
                  </ul>
                </div>
              </article>
            </li>-->
            
            <!-- TEAM MEMBER --><!--
            <li class="col-md-3">
              <article class="z-depth-1 padding-30">
                <div class="img-circle"> <img src="images/team-img-1.jpg" alt="">
                  <h5>martin guptil</h5>
                  <span>web Developer</span>
                  <p>We finally got a piece of the pie. Makin' your way in the world today week long.</p>
                  <ul class="social-icons">
                    <li><a href="#."><i class="fa fa-facebook"></i></a></li>
                    <li><a href="#."><i class="fa fa-twitter"></i></a></li>
                    <li><a href="#."><i class="fa fa-google"></i></a></li>
                  </ul>
                </div>
              </article>
            </li>-->
            
            <!-- TEAM MEMBER --><!--
            <li class="col-md-3">
              <article class="z-depth-1 padding-30">
                <div class="img-circle"> <img src="images/team-img-1.jpg" alt="">
                  <h5>andrew hilson</h5>
                  <span>Designer</span>
                  <p>We finally got a piece of the pie. Makin' your way in the world today week long.</p>
                  <ul class="social-icons">
                    <li><a href="#."><i class="fa fa-facebook"></i></a></li>
                    <li><a href="#."><i class="fa fa-twitter"></i></a></li>
                    <li><a href="#."><i class="fa fa-google"></i></a></li>
                  </ul>
                </div>
              </article>
            </li>-->
            
            <!-- TEAM MEMBER --><!--
            <li class="col-md-3">
              <article class="z-depth-1 padding-30">
                <div class="img-circle"> <img src="images/team-img-1.jpg" alt="">
                  <h5>robert jakis</h5>
                  <span>Marketing</span>
                  <p>We finally got a piece of the pie. Makin' your way in the world today week long.</p>
                  <ul class="social-icons">
                    <li><a href="#."><i class="fa fa-facebook"></i></a></li>
                    <li><a href="#."><i class="fa fa-twitter"></i></a></li>
                    <li><a href="#."><i class="fa fa-google"></i></a></li>
                  </ul>
                </div>
              </article>
            </li>
          </ul>
        </div>
      </div>
    </section>
    -->
    
    
   <!-- <section class="welcome padding-top-100 padding-bottom-100" style="background:url(images/bg/bg-1.jpg) no-repeat; background-size:cover;">
      <div class="container"> -->
        
        <!-- Icon Row -->
        <!--<div class="row">
          <div class="col-md-7">
            <ul class="row margin-top-50">-->
              
              <!-- Services -->
             <!-- <li class="col-md-6 margin-bottom-50">
                <div class="media">
                  <div class="media-left">
                    <div class="icon"> <i class="icon-rocket"></i> </div>
                  </div>
                  <div class="media-body">
                    <h5>multipurpose</h5>
                    <p>Takin' a break from all your wo ries sure would help a lot. </p>
                  </div>
                </div>
              </li>-->
              
              <!-- Services -->
            <!--  <li class="col-md-6 margin-bottom-50">
                <div class="media">
                  <div class="media-left">
                    <div class="icon"> <i class="icon-screen-smartphone"></i> </div>
                  </div>
                  <div class="media-body">
                    <h5>responsive</h5>
                    <p>Takin' a break from all your wo ries sure would help a lot. </p>
                  </div>
                </div>
              </li>
              -->
              <!-- Services -->
       <!--       <li class="col-md-6">
                <div class="media">
                  <div class="media-left">
                    <div class="icon"> <i class="icon-layers"></i> </div>
                  </div>
                  <div class="media-body">
                    <h5>business layout</h5>
                    <p>Takin' a break from all your wo ries sure would help a lot. </p>
                  </div>
                </div>
              </li>
              <li class="col-md-6">
                <div class="media">
                  <div class="media-left">
                    <div class="icon"> <i class="icon-support"></i> </div>
                  </div>
                  <div class="media-body">
                    <h5>full support</h5>
                    <p>Takin' a break from all your wo ries sure would help a lot. </p>
                  </div>
                </div>
              </li>
            </ul>
            <a href="#." class="waves-effect waves-light btn btn-white margin-top-50 margin-right-20">CONTACT US</a> <a href="#." class="waves-effect waves-ripple margin-top-50  btn margin-left-20">purchase now</a> </div>
        </div>
      </div>
    </section>-->
    <!-- End of section-->
    
    
    <section class="padding-top-100 padding-bottom-100" style="background-color:#f3f8fb;" id="pricing" >
      <div class="container"> 
        
        <!-- HEADING BLOCK -->
        <div class="heading-block text-center margin-bottom-50">
          <h3>Choose Your Pricing</h3>
          <hr>
          <span class=" margin-top-20">Wethear you just want to try out the platform, or you have a business ranging from a small to medium startups to big enterprises. There is a plan for you. See our pricing below.  </span> </div>
        
        <!-- PLAN -->
        <div class="price-plan">
          <ul class="row">
            
            <!-- PLAN 1 -->
            <li class="col-md-4">
              <article class="z-depth-1 padding-bottom-40">
                <div class="head-price">
                  <h4>Free</h4>
                  <div class="price z-depth-1"> ₦0.0 <span style="font-size:11px; font-weight:100;">/Month</span> </div>
                </div>
                <ul>
                  <li>1 Enterprise</li>
                  <li>1 User</li>
                  <li>50 Contacts</li>
                  <li>Upload Business Logo</li>
                  <li>Document Templates</li>
                  <li>Contacts Management</li>
                  <li>Document Management</li>
                  <li>Quick Start Guide</li>
                  <li>KobuPlus Leraning Resource</li>
                  <li> - </li>
                  <li> - </li>
                  <li> - </li>
                  <li> - </li>
                  <li> - </li>
                  <li> - </li>
                  <li> - </li>
                  <li> - </li>
                  {{-- <li> - </li>
                  <li> - </li>
                  <li> - </li> --}}
                </ul>
                <a href="#." class="waves-effect waves-light btn btn-white">Register</a> </article>
            </li>
            
            <!-- PLAN 2 -->
            <li class="col-md-4">
              <article class="z-depth-1 padding-bottom-40">
                <div class="head-price">
                  <h4>startup</h4>
                  <div class="price z-depth-1"> ₦5000 <span style="font-size:11px; font-weight:100;">/Month</span> </div>
                </div>
                <ul>
                  <li>1 Enterprise</li>
                  <li>2 Users</li>
                  <li>100 Contacts</li>
                  <li>Upload Business Logo</li>
                  <li>Document Templates</li>
                  <li>Contacts Management</li>
                  <li>Document Management</li>
                  <li>Quick Start Guide</li>
                  <li>KobuPlus Leraning Resource</li>
                  <li>Events/Calenders</li>
                  <li>Send Emails</li>
                  <li>Reports</li>
                  <li>Dashboard Notification</li>
                  <li>Fully Customuzable</li>
                  <li>Download Business Plan</li>                  
                  <li> - </li>
                  <li> - </li>
                  {{-- <li> - </li>
                  <li> - </li>
                  <li> - </li> --}}
                </ul>
                <a href="#." class="waves-effect waves-light btn btn-white">Register</a> </article>
            </li>
            
            
            <!-- PLAN 3 -->
            <li class="col-md-4">
              <article class="z-depth-1 padding-bottom-40">
                <div class="head-price">
                  <h4>Enterprise</h4>
                  <div class="price z-depth-1"> ₦9000 <span style="font-size:11px; font-weight:100;">/Month</span></div>
                </div>
                <ul>
                  <li>2 Enterprise</li>
                  <li>5 Users</li>
                  <li>500 Contacts</li>
                  <li>Upload Business Logo</li>
                  <li>Document Templates</li>
                  <li>Contacts Management</li>
                  <li>Document Management</li>
                  <li>Quick Start Guide</li>
                  <li>KobuPlus Leraning Resource</li>
                  <li>Events/Calenders</li>
                  <li>Send Emails</li>
                  <li>Reports</li>
                  <li>Dashboard Notification</li>
                  <li>Fully Customuzable</li>
                  <li>Download Business Plan</li>
                  <li>Social Media Marketing</li>
                  <li>Integration with 3rd Party Apps</li>
                  {{-- <li>Lead Management</li>
                  <li>Client Management</li>
                  <li>Chat Functionality</li>
                  <li>Email Tracking</li> --}}
                </ul>
                <a href="#." class="waves-effect waves-light btn btn-white">Register</a> </article>
            </li>
          </ul>
        </div>
      </div>
    </section>
        
      <!-- Contact Section 4 -->
            {{-- <section class="contact-4 section-padding" id="contact">
                <div class="container"> --}}
                    <!-- main heading and sub-text -->
                    {{-- <div class="heading-block text-center margin-bottom-50">
          <h3>Contact Us</h3>
          <hr>
          <span class=" margin-top-20">The weather started getting rough - the tiny ship was tossed. If not for the courage of the fearless crew the Minnow would be lost. the Minnow always wanted to have a neighbor just like you. I've always wanted to live in a neighborhood with you. </span> </div> --}}
                    <!-- all deatils -->
{{--                     <div class="col-md-10 just-center all-details-wrapper">
 --}}                        <!-- part 1 -->
                       {{--  <div class="col-md-6">
                            <div class="wrapper transition"> --}}
                                <!-- heading -->
                                {{-- <h5 class="text-blue">
                                    Call Us at <span class="display-inline text-black">+234 806 836 3644</span>
                                </h5>
                                <div class="row margin-top30">
                                    <div class="col-md-6"> --}}
                                        <!-- details -->
                                        {{-- <div class="details"> --}}
                                            <!-- detail head -->
                                            {{-- <span class="det-head">Address</span> --}}
                                            <!-- info -->
                                            {{-- <span class="my-detail">273, Main Street, Near Building, 202, Main City Warri</span>
                                        </div>
                                        <div class="details">
                                            <span class="det-head">Phone</span>
                                            <span class="my-detail">+234 806 836 3644</span>
                                        </div> --}}
                                        {{-- <div class="details">
                                            <span class="det-head">Fax</span>
                                            <span class="my-detail">+234 806 836 3644</span>
                                        </div> --}}
                                    {{-- </div>
                                    <div class="col-md-6">
                                        <div class="details">
                                            <span class="det-head">E-Mail</span>
                                            <span class="my-detail">info@kobuplus.com</span>
                                        </div> --}}
                                        {{-- <div class="details">
                                            <span class="det-head">Skype</span>
                                            <span class="my-detail">company_skype</span>
                                        </div> --}}
                                    {{-- </div>
                                    <div class="col-md-12"> --}}
                                        <!-- Get Direction button -->
                                        {{-- <form class="no-margin" action="http://maps.google.com/maps" method="get" target="_blank">
                                            <input type="hidden" name="daddr" value="273, Main Street, Near Building, 202, Main City Warri, Nigeria" />
                                            <button type="submit" class="bttn bttn-med bttn-scale bttn-blue">Get directions</button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div> --}}
                        <!-- part 2 -->
                        {{-- <div class="col-md-6">
                            <div class="wrapper transition"> --}}
                                <!-- heading -->
{{--                                 <h5 class="text-blue">Send a Message</h5>
 --}}                                <!-- contact form -->
                                {{-- <form id="contact-4">
                                    <label>Your Email ID</label>
                                    <input type="email" id="urmail" placeholder="Enter your email ID" data-parsley-required>
                                    <label>Your Message</label>
                                    <textarea placeholder="Enter your message here" data-parsley-minlength="20" data-parsley-maxlength="100" data-parsley-required-message="Enter some text" data-parsley-minlength-message="Come on! You need to enter at least a 20 character comment.." data-parsley-required></textarea>   <button class="bttn bttn-med bttn-scale bttn-green">Send</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </section> --}}
        
        <!-- HEADING BLOCK -->
        <!--<div class="heading-block text-center margin-bottom-80">
          <h3>Contact Us, We are waiting..!</h3>
          <hr>
          <span class=" margin-top-20">One morning, when Gregor Samsa woke from troubled dreams, he found himself transformed in his bed into a horrible vermin. </span> </div>
        <div class="services-welcome text-center">
          <ul class="row">-->
            
            <!-- Services -->
           <!-- <li class="col-md-4">
              <article class="z-depth-1">
                <div class="icon"> <i class="icon-pencil"></i> </div>
                <h5 class="margin-top-30 margin-bottom-10" >Web design</h5>
                <p>Takin' a break from all your worries sure would help a lot. Sunny Days sweepin' the clouds away. On 
                  my way to where the air is sweet. </p>
                <a href="#." class="waves-effect waves-ripple btn">read more</a> </article>
            </li>-->
            
            <!-- Services -->
           <!-- <li class="col-md-4">
              <article class="z-depth-1">
                <div class="icon"> <i class="ion-code"></i> </div>
                <h5 class="margin-top-30 margin-bottom-10">Web development</h5>
                <p>Takin' a break from all your worries sure would help a lot. Sunny Days sweepin' the clouds away. On 
                  my way to where the air is sweet. </p>
                <a href="#." class="waves-effect waves-ripple btn">read more</a> </article>
            </li>-->
            
            <!-- Services -->
           <!-- <li class="col-md-4">
              <article class="z-depth-1">
                <div class="icon"> <i class="icon-graph"></i> </div>
                <h5 class="margin-top-30 margin-bottom-10">Web analytics</h5>
                <p>Takin' a break from all your worries sure would help a lot. Sunny Days sweepin' the clouds away. On 
                  my way to where the air is sweet. </p>
                <a href="#." class="waves-effect waves-ripple btn">read more</a> </article>
            </li>
          </ul>
        </div>-->

    
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

      {{-- <div class="col-md-8 center-align"> <img class="margin-bottom-20" src="{{ URL::asset('kobuland/images/logo.jpg')}}" alt="" >
          <p style="font-size: 18px;">KobuPlus is an innovative enterprise creation and business relationship management platform designed for start-ups and emerging entrepreneurs to build a business around what they are passionate about. KobuPlus primarily harnesses user’s skills set to identify and create business opportunities and generate relevant business documents such as business plans, business model, pitch, financial plans, etc. </p> --}}
          
          <!-- Social Icon -->
          {{-- <ul class="social-icons">
            <li><a href="#."><i class="fa fa-facebook"></i></a></li>
            <li><a href="#."><i class="fa fa-twitter"></i></a></li>
            <li><a href="#."><i class="fa fa-instagram"></i></a></li>
          </ul>
        </div> --}}

      <div class="col-md-2"> 
        </div>
        
      </div>
      
      <!-- Links -->
      <ul class="bottom-links">
        <li><a href="#top">Home </a></li>
        <li><a href="#about"> About us </a></li>
        <li><a href="#features"> Features </a></li>
        <li><a href="#pricing"> Pricing </a></li>
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
                            <a class="page-scroll" href="#top">Home</a>
                        </li>
                        <li>
                            <a class="page-scroll" href="#about">About</a>
                        </li>
                        <li>
                            <a class="page-scroll" href="#features">Features</a>
                        </li>
                        <li>
                            <a class="page-scroll" href="#pricing">Pricing</a>
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