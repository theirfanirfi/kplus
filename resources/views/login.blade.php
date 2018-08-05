<!DOCTYPE html>
<html lang="en" class="no-js">
    <!-- Begin Head -->
    <head>
        <!-- Basic -->
        <meta charset="utf-8"/>
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>KubuPlus</title>
          <meta name="csrf-token" content="{{ csrf_token() }}">
        <meta name="keywords" content="" />
        <meta name="description" content="">
        <meta name="author" content="">

        <!-- Web Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Lato:300,400,400i|Montserrat:400,700" rel="stylesheet">

        <!-- Vendor Styles -->
        <link href="{{ URL::asset('landing/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet" type="text/css"/>
        <link href="{{ URL::asset('landing/css/animate.css') }}" rel="stylesheet" type="text/css"/>
        <link href="{{ URL::asset('landing/vendor/themify/themify.css') }}" rel="stylesheet" type="text/css"/>
        <link href="{{ URL::asset('landing/vendor/scrollbar/scrollbar.min.css') }}" rel="stylesheet" type="text/css"/>
        <link href="{{ URL::asset('landing/vendor/magnific-popup/magnific-popup.css') }}" rel="stylesheet" type="text/css"/>
        <link href="{{ URL::asset('landing/vendor/swiper/swiper.min.css" rel="stylesheet') }}" type="text/css"/>
        <link href="{{ URL::asset('landing/vendor/cubeportfolio/css/cubeportfolio.min.css') }}" rel="stylesheet" type="text/css"/>

        <link href="{!! URL::asset('assets/alertify.bootstrap.css') !!}" rel="stylesheet">
<link href="{!! URL::asset('assets/alertify.core.css') !!}" rel="stylesheet">
<link href="{!! URL::asset('assets/alertify.default.css') !!} " rel="stylesheet">
<script src="{!! URL::asset('assets/alertify.min.js') !!}"></script>

        <!-- Theme Styles -->
        <link href="{{ URL::asset('landing/css/style.css') }}" rel="stylesheet" type="text/css"/>
        <link href="{{ URL::asset('landing/css/global/global.css') }}" rel="stylesheet" type="text/css"/>

        <!-- Favicon -->
        <link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon">
        <link rel="apple-touch-icon" href="img/apple-touch-icon.png">
        <style>
        /* Shared */
.loginBtn {
  box-sizing: border-box;
  position: relative;
  /* width: 13em;  - apply for fixed size */
  margin: 0.2em;
  padding: 0 15px 0 46px;
  border: none;
  text-align: left;
  line-height: 34px;
  white-space: nowrap;
  border-radius: 0.2em;
  font-size: 16px;
  color: #FFF;
}
.loginBtn:before {
  content: "";
  box-sizing: border-box;
  position: absolute;
  top: 0;
  left: 0;
  width: 34px;
  height: 100%;
}
.loginBtn:focus {
  outline: none;
}
.loginBtn:active {
  box-shadow: inset 0 0 0 32px rgba(0,0,0,0.1);
}


/* Facebook */
.loginBtn--facebook {
  background-color: #4C69BA;
  background-image: linear-gradient(#4C69BA, #3B55A0);
  /*font-family: "Helvetica neue", Helvetica Neue, Helvetica, Arial, sans-serif;*/
  text-shadow: 0 -1px 0 #354C8C;
}
.loginBtn--facebook:before {
  border-right: #364e92 1px solid;
  background: url('https://s3-us-west-2.amazonaws.com/s.cdpn.io/14082/icon_facebook.png') 6px 6px no-repeat;
}
.loginBtn--facebook:hover,
.loginBtn--facebook:focus {
  background-color: #5B7BD5;
  background-image: linear-gradient(#5B7BD5, #4864B1);
}


/* Google */
.loginBtn--google {
  /*font-family: "Roboto", Roboto, arial, sans-serif;*/
  background: #DD4B39;
}
.loginBtn--google:before {
  border-right: #BB3F30 1px solid;
  background: url('https://s3-us-west-2.amazonaws.com/s.cdpn.io/14082/icon_google.png') 6px 6px no-repeat;
}
.loginBtn--google:hover,
.loginBtn--google:focus {
  background: #E74B37;
}
        </style>
    </head>
    <!-- End Head -->

    <!-- Body -->
    <body>

       <!-- Body -->
    <body>

        <!--========== HEADER ==========-->
        <header class="navbar-fixed-top s-header js__header-sticky js__header-overlay">
            <!-- Navbar -->
            <div class="s-header__navbar">
                <div class="s-header__container">
                    <div class="s-header__navbar-row">
                        <div class="s-header__navbar-row-col">
                            <!-- Logo -->
                            <div class="s-header__logo">
                                <a href="index.html" class="s-header__logo-link">
                                    <img class="s-header__logo-img s-header__logo-img-default" src="{{ URL::asset('landing/img/kubuplus.png') }}" alt="kobuplus Logo">
                                    <img class="s-header__logo-img s-header__logo-img-shrink" src="{{ URL::asset('landing/img/kubuplusdark.png') }}" alt="kobuplus Logo">
                                </a>
                            </div>
                            <!-- End Logo -->
                        </div>
                        <div class="s-header__navbar-row-col">
                            <!-- Trigger -->
                            <a href="javascript:void(0);" class="s-header__trigger js__trigger">
                                <span class="s-header__trigger-icon"></span>
                                <svg x="0rem" y="0rem" width="3.125rem" height="3.125rem" viewbox="0 0 54 54">
                                    <circle fill="transparent" stroke="#fff" stroke-width="1" cx="27" cy="27" r="25" stroke-dasharray="157 157" stroke-dashoffset="157"></circle>
                                </svg>
                            </a>
                            <!-- End Trigger -->
                        </div>
                    </div>
                </div>
            </div>
            <!-- End Navbar -->

            <!-- Overlay -->
            <div class="s-header-bg-overlay js__bg-overlay">
                <!-- Nav -->
                <nav class="s-header__nav js__scrollbar">
                    <div class="container-fluid">
                        <!-- Menu List -->                                
                        <ul class="list-unstyled s-header__nav-menu">
                            <li class="s-header__nav-menu-item"><a class="s-header__nav-menu-link s-header__nav-menu-link-divider" href="#">About KubuPlus</a></li>
                                                </ul>
                        <!-- End Menu List -->

                        <!-- Menu List -->                                
                        <ul class="list-unstyled s-header__nav-menu">
                          <!--  <li class="s-header__nav-menu-item"><a class="s-header__nav-menu-link s-header__nav-menu-link-divider" href="about.html">About</a></li> -->
                    
                        </ul>
                        <!-- End Menu List -->
                    </div>
                </nav>
                <!-- End Nav -->
                
                <!-- Action -->
                <ul class="list-inline s-header__action s-header__action--lb">
                   <!-- <li class="s-header__action-item"><a class="s-header__action-link -is-active" href="#">En</a></li>
                    <li class="s-header__action-item"><a class="s-header__action-link" href="#">Fr</a></li> -->
                </ul>
                <!-- End Action -->

                <!-- Action -->
                <ul class="list-inline s-header__action s-header__action--rb">
                    <li class="s-header__action-item">
                        <a class="s-header__action-link" href="#">
                            <i class="g-padding-r-5--xs ti-facebook"></i>
                            <span class="g-display-none--xs g-display-inline-block--sm">Facebook</span>
                        </a>
                    </li>
                    <li class="s-header__action-item">
                        <a class="s-header__action-link" href="#">
                            <i class="g-padding-r-5--xs ti-twitter"></i>
                            <span class="g-display-none--xs g-display-inline-block--sm">Twitter</span>
                        </a>
                    </li>
                    <li class="s-header__action-item">
                        <a class="s-header__action-link" href="#">
                            <i class="g-padding-r-5--xs ti-youtube"></i>
                            <span class="g-display-none--xs g-display-inline-block--sm">Youtube</span>
                        </a>
                    </li>
                </ul>
                <!-- End Action -->
            </div>
            <!-- End Overlay -->
        </header>
        <!--========== END HEADER ==========-->

        <!--========== PROMO BLOCK ==========-->
        <div class="s-promo-block-v1 g-bg-color--primary-to-blueviolet-ltr g-fullheight--md">
            <div class="container g-ver-center--md g-padding-y-100--xs">
                <div class="row g-hor-centered-row--md g-margin-t-30--xs g-margin-t-20--sm">
                    <div class="col-lg-6 col-sm-6 g-hor-centered-row__col g-text-center--xs g-text-left--md g-margin-b-60--xs g-margin-b-0--md">
                        <div class="s-promo-block-v1__square-effect g-margin-b-60--xs">
                            <h1 class="g-font-size-32--xs g-font-size-45--sm g-font-size-50--lg g-color--white">KobuPlus<br></h1>
                            <p class="g-font-size-20--xs g-font-size-26--md g-color--white g-margin-b-0--xs">KobuPlus is an innovative enterprise creation and business relationship management platform designed for start-ups and emerging entrepreneurs to build a business around what they are passionate about..</p>
                        </div>
                        <span class="g-display-block--xs g-display-inline-block--lg g-margin-b-10--xs g-margin-b-10--lg">
                            <a id="registerBtn" href="" class="s-btn s-btn--xs s-btn--white-brd g-padding-x-30--xs g-radius--50">
                                <span class="s-btn__element--left">
                                    <i class="g-font-size-32--xs ti-user"></i>
                                </span>
                                <span class="s-btn__element--right g-padding-x-10--xs">
                                    <span class="g-display-block--xs g-font-size-11--xs">Don't have account?</span>
                                    <span class="g-font-size-16--xs">Register</span>
                                </span>
                            </a>
                        </span>
                        <span class="g-padding-x-0--xs g-padding-x-10--lg">
                            <a id="loginBtn" href="" class="s-btn s-btn--xs s-btn--white-brd g-padding-x-30--xs g-radius--50">
                                <span class="s-btn__element--left">
                                    <i class="g-font-size-32--xs ti-lock"></i>
                                </span>
                                <span class="s-btn__element--right g-padding-x-10--xs">
                                    <span class="g-display-block--xs g-font-size-11--xs">Have account?</span>
                                    <span class="g-font-size-16--xs">Login</span>
                                </span>
                            </a>
                        </span>

                        <a href="{{ URL::to('/loginWithFacebook') }}" class="btn loginBtn loginBtn--facebook">
                                Login with Facebook
                              </a>
                              
                              <a href="{{ URL::to('/loginWithGoogle') }}" class="btn loginBtn loginBtn--google">
                                Login with Google
                              </a>
                    </div>
                    <div class="col-lg-2"></div>

                    <!-- ============================ Login ================================= -->
                    <div class="col-lg-4 col-sm-4 g-hor-centered-row__col" id="login">
                        <div class="wow fadeInUp" data-wow-duration=".3" data-wow-delay=".1s">
                            <div class="center-block g-width-350--xs g-bg-color--white-opacity-lightest g-box-shadow__blueviolet-v1 g-padding-x-40--xs g-padding-y-60--xs g-radius--4">
                                <div class="g-text-center--xs g-margin-b-40--xs">
                                    <h2 class="g-font-size-30--xs g-color--white">Login</h2>
                                </div>
                            
                                     {!! Form::open(['url' => '/customlogin']) !!}
                                       {!! csrf_field() !!}
                                <div class="g-margin-b-30--xs">
                                     <input id="email" type="email" class="form-control s-form-v3__input" name="email" value="{{ old('email') }}" required autofocus>

                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                                </div>
                                
                                
                               
                                
                                <div class="g-margin-b-30--xs">

                                      <input id="password" type="password" class="form-control s-form-v3__input" name="password" required>

                                @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                                </div>
                                 {!! csrf_field() !!}
                                <div class="g-text-center--xs">
                                    <button type="submit" class="text-uppercase btn-block s-btn s-btn--md s-btn--white-bg g-radius--50 g-padding-x-50--xs g-margin-b-20--xs">Login</button>
                                   {!! Form::close() !!}
                                      <a class="g-color--white g-font-size-13--xs" href="{{ route('password.request') }}">
                                    Forgot Your Password?
                                </a>
                                </div>
                            </div>
                        </div>
                    </div>
                           


                        <!-- ============================= REGISTER ====================================== -->


                          <div class="col-lg-4 col-sm-4 g-hor-centered-row__col" id="register" style="display:none;">
                        <div class="wow fadeInUp" data-wow-duration=".3" data-wow-delay=".1s">
                            <form method="POST" action="{{ route('register') }}" class="center-block g-width-350--xs g-bg-color--white-opacity-lightest g-box-shadow__blueviolet-v1 g-padding-x-40--xs g-padding-y-60--xs g-radius--4">

                                 {{ csrf_field() }}
                                <div class="g-text-center--xs g-margin-b-40--xs">
                                    <h2 class="g-font-size-30--xs g-color--white">Signup for Free</h2>
                                </div>
                                <div class="g-margin-b-30--xs">
                                    <input type="text" name="name" class="form-control s-form-v3__input" placeholder="* Name" value="{{ old('name') }}" required autofocus>

                                     @if ($errors->has('name'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
                                </div>


                                 <div class="g-margin-b-30--xs">
                                    <input type="email" name="email" class="form-control s-form-v3__input" placeholder="* Email" value="{{ old('email') }}" required>

                                    @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                                </div>

                                <div class="g-margin-b-30--xs">
                                    <input type="password" name="password" class="form-control s-form-v3__input" placeholder="* Password" required>

                                  
                                @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                                </div>

                                
                                

                                <div class="g-margin-b-30--xs">
                                    <input type="password" class="form-control s-form-v3__input" name="password_confirmation" required>
                                </div>
                                <div class="g-text-center--xs">
                                    <button type="submit" class="text-uppercase btn-block s-btn s-btn--md s-btn--white-bg g-radius--50 g-padding-x-50--xs g-margin-b-20--xs">Signup</button>
                                    <a class="g-color--white g-font-size-13--xs" href="#">Forgot Password?</a>
                                </div>
                            </form>
                        </div>
                    </div>

                        <!--=============================== REGISTER BLOCK ENDS HERE ============================= -->

                </div>
            </div>
        </div>
        <!--========== END PROMO BLOCK ==========-->

        <!--========== PAGE CONTENT ==========-->
       


        <!-- Subscribe -->
        <div class="g-bg-color--primary-to-blueviolet-ltr">
            <div class="g-container--sm g-text-center--xs g-padding-y-80--xs g-padding-y-125--xsm">
                <div class="g-margin-b-60--xs">
                    <p class="text-uppercase g-font-size-14--xs g-font-weight--700 g-color--white-opacity g-letter-spacing--2 g-margin-b-25--xs">Subscribe</p>
                    <h2 class="g-font-size-32--xs g-font-size-36--md g-letter-spacing--1 g-color--white">Join Over 1000+ People</h2>
                </div>
                <div class="row">
                    <div class="col-sm-6 col-sm-offset-3 col-xs-10 col-xs-offset-1">
                        <form class="input-group">
                            <input type="email" class="form-control s-form-v1__input g-radius--left-50" name="email" placeholder="Enter your email">
                            <span class="input-group-btn">
                                <button type="submit" class="s-btn s-btn-icon--md s-btn-icon--white-brd s-btn--white-brd g-radius--right-50"><i class="ti-arrow-right"></i></button>
                            </span>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Subscribe -->


        <!-- Contact -->
        <div class="s-promo-block-v7 g-bg-position--center g-bg-color--dark-light" style="background: url('img/1920x1080/05.jpg') no-repeat;">
            <div class="g-container--sm g-padding-y-80--xs g-padding-y-125--xsm">
                <div class="g-text-center--xs g-margin-b-60--xs">
                    <p class="text-uppercase g-font-size-14--xs g-font-weight--700 g-color--white-opacity g-letter-spacing--2 g-margin-b-25--xs">Contact Us</p>
                    <h2 class="g-font-size-32--xs g-font-size-36--md g-color--white">Get in Touch</h2>
                </div>
                <form class="center-block g-width-500--sm g-width-550--md">
                    <div class="g-margin-b-30--xs">
                        <input type="text" class="form-control s-form-v3__input" placeholder="* Name">
                    </div>
                    <div class="row g-margin-b-50--xs">
                        <div class="col-sm-6 g-margin-b-30--xs g-margin-b-0--md">
                            <input type="email" class="form-control s-form-v3__input" placeholder="* Email">
                        </div>
                        <div class="col-sm-6">
                            <input type="text" class="form-control s-form-v3__input" placeholder="* Phone">
                        </div>
                    </div>
                    <div class="g-margin-b-80--xs">
                        <textarea class="form-control s-form-v3__input" rows="5" placeholder="* Your message"></textarea>
                    </div>
                    <div class="g-text-center--xs">
                        <button type="submit" class="text-uppercase s-btn s-btn--md s-btn--white-brd g-radius--50 g-padding-x-70--xs g-margin-b-20--xs">Submit</button>
                    </div>
                </form>
            </div>
        </div>
        <!-- End Contact -->
        <!--========== END PAGE CONTENT ==========-->

        <!--========== FOOTER ==========-->
        <footer class="g-bg-color--dark">
            <!-- Links -->
            <div class="g-hor-divider__dashed--white-opacity-lightest">
                <div class="container g-padding-y-80--xs">
                    <div class="row">
                        <div class="col-sm-2 g-margin-b-20--xs g-margin-b-0--md">
                            <ul class="list-unstyled g-ul-li-tb-5--xs g-margin-b-0--xs">
                                <li><a class="g-font-size-15--xs g-color--white-opacity" href="http://themeforest.net/item/metronic-responsive-admin-dashboard-template/4021469?ref=keenthemes">Home</a></li>
                                <li><a class="g-font-size-15--xs g-color--white-opacity" href="http://themeforest.net/item/metronic-responsive-admin-dashboard-template/4021469?ref=keenthemes">About</a></li>
                                <li><a class="g-font-size-15--xs g-color--white-opacity" href="http://themeforest.net/item/metronic-responsive-admin-dashboard-template/4021469?ref=keenthemes">Work</a></li>
                                <li><a class="g-font-size-15--xs g-color--white-opacity" href="http://themeforest.net/item/metronic-responsive-admin-dashboard-template/4021469?ref=keenthemes">Contact</a></li>
                            </ul>
                        </div>
                        <div class="col-sm-2 g-margin-b-20--xs g-margin-b-0--md">
                            <ul class="list-unstyled g-ul-li-tb-5--xs g-margin-b-0--xs">
                                <li><a class="g-font-size-15--xs g-color--white-opacity" href="http://themeforest.net/item/metronic-responsive-admin-dashboard-template/4021469?ref=keenthemes">Twitter</a></li>
                                <li><a class="g-font-size-15--xs g-color--white-opacity" href="http://themeforest.net/item/metronic-responsive-admin-dashboard-template/4021469?ref=keenthemes">Facebook</a></li>
                                <li><a class="g-font-size-15--xs g-color--white-opacity" href="http://themeforest.net/item/metronic-responsive-admin-dashboard-template/4021469?ref=keenthemes">Instagram</a></li>
                                <li><a class="g-font-size-15--xs g-color--white-opacity" href="http://themeforest.net/item/metronic-responsive-admin-dashboard-template/4021469?ref=keenthemes">YouTube</a></li>
                            </ul>
                        </div>
                        <div class="col-sm-2 g-margin-b-40--xs g-margin-b-0--md">
                            <ul class="list-unstyled g-ul-li-tb-5--xs g-margin-b-0--xs">
                                <li><a class="g-font-size-15--xs g-color--white-opacity" href="http://themeforest.net/item/metronic-responsive-admin-dashboard-template/4021469?ref=keenthemes">Subscribe to Our Newsletter</a></li>
                                <li><a class="g-font-size-15--xs g-color--white-opacity" href="http://themeforest.net/item/metronic-responsive-admin-dashboard-template/4021469?ref=keenthemes">Privacy Policy</a></li>
                                <li><a class="g-font-size-15--xs g-color--white-opacity" href="http://themeforest.net/item/metronic-responsive-admin-dashboard-template/4021469?ref=keenthemes">Terms &amp; Conditions</a></li>
                            </ul>
                        </div>
                        <div class="col-md-4 col-md-offset-2 col-sm-5 col-sm-offset-1 s-footer__logo g-padding-y-50--xs g-padding-y-0--md">
                            <h3 class="g-font-size-18--xs g-color--white">KubuPlus</h3>
                            <p class="g-color--white-opacity">KobuPlus primarily harnesses user’s skills set to identify and create business opportunities and generate relevant business documents such as business plans, business model, pitch, financial plans, etc.</p>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End Links -->

            <!-- Copyright -->
            <div class="container g-padding-y-50--xs">
                <div class="row">
                    <div class="col-xs-6">
                        <a href="index.html">
                            <img class="g-width-100--xs g-height-auto--xs" src="{{ URL::asset('landing/img/Kububotoom.png') }}" alt="kubuplus logo">
                        </a>
                    </div>
                    <div class="col-xs-6 g-text-right--xs">
                   </div>
                </div>
            </div>
            <!-- End Copyright -->
        </footer>
   
        <!-- Back To Top -->
        <a href="javascript:void(0);" class="s-back-to-top js__back-to-top"></a>

       <script type="text/javascript" src="{{ URL::asset('landing/vendor/jquery.min.js') }}"></script>
        <script type="text/javascript" src="{{ URL::asset('landing/vendor/jquery.migrate.min.js') }}"></script>
        <script type="text/javascript" src="{{ URL::asset('landing/vendor/bootstrap/js/bootstrap.min.js') }}"></script>
        <script type="text/javascript" src="{{ URL::asset('landing/vendor/jquery.smooth-scroll.min.js') }}"></script>
        <script type="text/javascript" src="{{ URL::asset('landing/vendor/jquery.back-to-top.min.js') }}"></script>
        <script type="text/javascript" src="{{ URL::asset('landing/vendor/scrollbar/jquery.scrollbar.min.js') }}"></script>
        <script type="text/javascript" src="{{ URL::asset('landing/vendor/magnific-popup/jquery.magnific-popup.min.js') }}"></script>
        <script type="text/javascript" src="{{ URL::asset('landing/vendor/swiper/swiper.jquery.min.js') }}"></script>
        <script type="text/javascript" src="{{ URL::asset('landing/vendor/waypoint.min.js') }}"></script>
        <script type="text/javascript" src="{{ URL::asset('landing/vendor/counterup.min.js') }}"></script>
        <script type="text/javascript" src="{{ URL::asset('landing/vendor/cubeportfolio/js/jquery.cubeportfolio.min.js') }}"></script>
        <script type="text/javascript" src="{{ URL::asset('landing/vendor/jquery.parallax.min.js') }}"></script>
        <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBsXUGTFS09pLVdsYEE9YrO2y4IAncAO2U') }}"></script>
        <script type="text/javascript" src="{{ URL::asset('landing/vendor/jquery.wow.min.js') }}"></script>

        <!-- General Components and Settings -->
        <script type="text/javascript" src="{{ URL::asset('landing/js/global.min.js') }}"></script>
        <script type="text/javascript" src="{{ URL::asset('landing/js/components/header-sticky.min.js') }}"></script>
        <script type="text/javascript" src="{{ URL::asset('landing/js/components/scrollbar.min.js') }}"></script>
        <script type="text/javascript" src="{{ URL::asset('landing/js/components/magnific-popup.min.js') }}"></script>
        <script type="text/javascript" src="{{ URL::asset('landing/js/components/swiper.min.js') }}"></script>
        <script type="text/javascript" src="{{ URL::asset('landing/js/components/counter.min.js') }}"></script>
        <script type="text/javascript" src="{{ URL::asset('landing/js/components/portfolio-3-col.min.js') }}"></script>
        <script type="text/javascript" src="{{ URL::asset('landing/js/components/parallax.min.js') }}"></script>
        <script type="text/javascript" src="{{ URL::asset('landing/js/components/google-map.min.js') }}"></script>
        <script type="text/javascript" src="{{ URL::asset('landing/js/components/wow.min.js') }}"></script>
           <script>
        $('#registerBtn').click(function(){
            $("#login").hide();
            $("#register").show("slow");

            return false;
        });

         $('#loginBtn').click(function(){
            $("#register").hide();
            $("#login").show("slow");

            return false;
        });
        </script>

@if(Session('error'))
<script>
    alertify.error('{{Session('error')}}');
</script>
@endif
    </body>
    <!-- End Body -->
</html>
