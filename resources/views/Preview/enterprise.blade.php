<?php  use Illuminate\Http\Request;
use Illuminate\Support\Facades\URL;
?>
<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>{{$enterprise->b_name}}</title>
        <meta name="description" content="">
      
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="{!! URL::asset('pre/css/normalize.css') !!} " rel="stylesheet">
        <link href="{!! URL::asset('pre/css/font-awesome.css') !!} " rel="stylesheet">
        <link href="{!! URL::asset('pre/css/bootstrap.min.css') !!} " rel="stylesheet">
        <link href="{!! URL::asset('pre/css/templatemo-style.css') !!} " rel="stylesheet">
        <script src="{!! URL::asset('pre/js/vendor/modernizr-2.6.2.min.js') !!}"></script>
        <link href="{!! URL::asset('assets/alertify.bootstrap.css') !!}" rel="stylesheet">
        <link href="{!! URL::asset('assets/alertify.core.css') !!}" rel="stylesheet">
        <link href="{!! URL::asset('assets/alertify.default.css') !!} " rel="stylesheet">
        <link href="{!! URL::asset('css/userlist.css') !!} " rel="stylesheet">
        <script src="{!! URL::asset('assets/alertify.min.js') !!}"></script>
    </head>
    <body>
        <!--[if lt IE 7]>
            <p class="browsehappy">You are using an <strong>outdated</strong> browser. Please upgrade your browser</a> to improve your experience.</p>
        <![endif]-->
    
        <div class="responsive-header visible-xs visible-sm">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="top-section">
                            <div class="profile-image">
                                <img src="{{URL::to('/') }}/{{$enterprise->logo_path}}" alt="Volton">
                            </div>
                            <div class="profile-content">
                                <h3 class="profile-title">{{$enterprise->b_name}}</h3>
                                <p class="profile-description">Business Idea: {{$enterprise->p_b_idea}}</p>
                            </div>
                        </div>
                    </div>
                </div>
                <a href="#" class="toggle-menu"><i class="fa fa-bars"></i></a>
                <div class="main-navigation responsive-menu">
                        <ul class="navigation">
                                @foreach($dts as $t)
                                <li><a href="#{{$t->dt_title}}">{{$t->dt_title}}</a></li>
                               
                                @endforeach
                            </ul>
                </div>
            </div>
        </div>

        <!-- SIDEBAR -->
        <div class="sidebar-menu hidden-xs hidden-sm">
            <div class="top-section">
                <div class="profile-image">
                    <img src="{{URL::to('/') }}/{{$enterprise->logo_path}}" alt="">
                </div>
                <h3 class="profile-title">{{$enterprise->b_name}}</h3>
                <p class="profile-description">Business idea: {{$enterprise->p_b_idea}}</p>
            </div> <!-- top-section -->
            <div class="main-navigation">
                <ul class="navigation">
                    @foreach($dts as $t)
                    <li><a href="#{{$t->dt_title}}">{{$t->dt_title}}</a></li>
                   
                    @endforeach
                </ul>
            </div> <!-- .main-navigation -->
            <div class="social-icons">
                <ul>
                    <li><a onclick="share(this);" url="{{URL::current()}}" share="" title="{{$enterprise->b_name}}" id="fb" href="#"><i class="fa fa-facebook"></i></a></li>
                    <li><a onclick="share(this);" url="{{URL::current()}}" share="" title="{{$enterprise->b_name}}" id="twitter" href="#"><i class="fa fa-twitter"></i></a></li>
                    <li><a onclick="share(this);" url="{{URL::current()}}" share="" title="{{$enterprise->b_name}}" id="ln" href="#"><i class="fa fa-linkedin"></i></a></li>
                    <li><a onclick="share(this);" url="{{URL::current()}}" share="" title="{{$enterprise->b_name}}" id="gp" href="#"><i class="fa fa-google-plus"></i></a></li>
                </ul>
            </div> <!-- .social-icons -->
        </div> <!-- .sidebar-menu -->
        

        

        <!-- MAIN CONTENT -->
        <div class="main-content">
            <div class="fluid-container">

                <div class="content-wrapper">
                
                 
                    
                

                    <!-- Plans -->
                    <div class="page-section" id="plans">
                    <div class="row">
                        <div class="col-md-12">
                            <h4 class="widget-title">Business Plans</h4>
                            <ul class="navigation">
                                    @foreach($dts as $t)
                                    <li><a id="{{$t->dt_title}}" href="{{URL::to('/preview/documents/')}}/{{$t->dt_id}}/{{$enterprise->e_id}}">{{$t->dt_title}}</a></li>
                                   
                                    @endforeach
                                </ul>
                        </div>
                    </div>
                    
                    </div>
                    <hr>

                    <!-- CONTACT -->
                    <div class="page-section" id="contact">
                    <div class="row">
                        <div class="col-md-12">
                            <h4 class="widget-title">Message Enterprise</h4>
                            <p></p> </div>
                    </div>
                    <div class="row">
                        <form action="#" method="post" class="contact-form">
                            <fieldset class="col-md-4 col-sm-6">
                                <input type="text" id="your-name" placeholder="Your Name...">
                            </fieldset>
                            <fieldset class="col-md-4 col-sm-6">
                                <input type="email" id="email" placeholder="Your Email...">
                            </fieldset>
                            <fieldset class="col-md-4 col-sm-12">
                                <input type="text" id="your-subject" placeholder="Subject...">
                            </fieldset>
                            <fieldset class="col-md-12 col-sm-12">
                                <textarea name="message" id="message" cols="30" rows="6" placeholder="Leave your message..."></textarea>
                            </fieldset>
                            <fieldset class="col-md-12 col-sm-12">
                                <input type="submit" class="button big default" value="Send Message">
                            </fieldset>
                        </form>
                    </div> <!-- .contact-form -->
                    </div>
                    <hr>

                    <div class="row" id="footer">
                        <div class="col-md-12 text-center">
                            <p class="copyright-text">Copyright &copy; KobuPlus</p>
                        </div>
                    </div>

                </div>

            </div>
        </div>

     
        <script src="{!! URL::asset('pre/js/vendor/jquery-1.10.2.min.js') !!}"></script>
        <script src="{!! URL::asset('pre/js/vendor/plugins.min.js') !!}"></script>
        <script src="{!! URL::asset('pre/js/vendor/main.min.js') !!}"></script>
        <script src="{!! URL::asset('assets/js/myscript.js') !!}"></script>
        

    </body>
</html>