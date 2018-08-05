<!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8" />
	<link rel="apple-touch-icon" sizes="76x76" href="assets/img/apple-icon.png">
	<link rel="icon" type="image/png" sizes="96x96" href="assets/img/favicon.png">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />

	<title>KubuPlus</title>

	<meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
    <meta name="viewport" content="width=device-width" />

   <!-- Bootstrap core CSS     -->
   <link href="{!! URL::to('/assets/css/bootstrap.min.css') !!}" rel="stylesheet" />

   <!-- Animation library for notifications   -->
   <link href="{!! URL::asset('/assets/css/animate.min.css') !!}" rel="stylesheet"/>

   <!--  Paper Dashboard core CSS    -->
   <link href="{!! URL::asset('/assets/css/paper-dashboard.css') !!}" rel="stylesheet"/>
   <script src="{!! URL::asset('/assets/js/jquery-1.10.2.js') !!}" type="text/javascript"></script>
    

   <!--  Fonts and icons     -->
   <link href="http://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" rel="stylesheet">
   <link href='https://fonts.googleapis.com/css?family=Muli:400,300' rel='stylesheet' type='text/css'>
   <link href="{!! URL::asset('/assets/css/themify-icons.css') !!}" rel="stylesheet">
   
   <script src="//cdn.jsdelivr.net/npm/alertifyjs@1.11.0/build/alertify.min.js"></script>
   
   <!-- CSS -->
   <link rel="stylesheet" href="//cdn.jsdelivr.net/npm/alertifyjs@1.11.0/build/css/alertify.min.css"/>
   <!-- Default theme -->
   <link rel="stylesheet" href="//cdn.jsdelivr.net/npm/alertifyjs@1.11.0/build/css/themes/default.min.css"/>
   <!-- Semantic UI theme -->
   <link rel="stylesheet" href="//cdn.jsdelivr.net/npm/alertifyjs@1.11.0/build/css/themes/semantic.min.css"/>
   <!-- Bootstrap theme -->
   <link rel="stylesheet" href="//cdn.jsdelivr.net/npm/alertifyjs@1.11.0/build/css/themes/bootstrap.min.css"/>
   
   <!-- 
       RTL version
   -->
   <link rel="stylesheet" href="//cdn.jsdelivr.net/npm/alertifyjs@1.11.0/build/css/alertify.rtl.min.css"/>
   <!-- Default theme -->
   <link rel="stylesheet" href="//cdn.jsdelivr.net/npm/alertifyjs@1.11.0/build/css/themes/default.rtl.min.css"/>
   <!-- Semantic UI theme -->
   <link rel="stylesheet" href="//cdn.jsdelivr.net/npm/alertifyjs@1.11.0/build/css/themes/semantic.rtl.min.css"/>
   <!-- Bootstrap theme -->
   <link rel="stylesheet" href="//cdn.jsdelivr.net/npm/alertifyjs@1.11.0/build/css/themes/bootstrap.rtl.min.css"/>
   <script src="{!! URL::asset('/js/tinymce/jquery.tinymce.min.js') !!}"></script>
   <script src="{!! URL::asset('/js/tinymce/tinymce.min.js') !!}"></script>
   <script>tinymce.init({ selector:'textarea' });</script>

</head>
<body>

<div class="wrapper">
	<div class="sidebar" data-background-color="white" data-active-color="danger">

    <!--
		Tip 1: you can change the color of the sidebar's background using: data-background-color="white | black"
		Tip 2: you can change the color of the active button using the data-active-color="primary | info | success | warning | danger"
	-->

    	<div class="sidebar-wrapper">
            <div class="logo">
            <a href="{{URL::to('/admin')}}" class="simple-text">
                    Welcome <?php echo  Auth::check() && Auth::user()->role == 1 ? Auth::user()->name : " Guest "; ?>
                </a>
            </div>

            <ul class="nav">
                <li class="active">
                    <a href="{{ URL::to('/admin/skills') }}">
                        <i class="fa fa-database"></i>
                        <p>Skills</p>
                    </a>
                </li>

                <li class="">
                        <a href="{{ URL::to('/admin/bidea') }}">
                            <i class="ti-briefcase"></i>
                            <p>Business Ideas</p>
                        </a>
                    </li>

                <li class="">
                        <a href="{{URL::to('/admin/users')}}">
                            <i class="ti-user"></i>
                            <p>Users</p>
                        </a>
                    </li>

                    <li class="">
                            <a href="{{ URL::to('/admin/enterprises') }}">
                                <i class="fa fa-address-card-o"></i>
                                <p>Enterprises</p>
                            </a>
                        </li>
                    
                        <li class="">
                                <a href="{{ URL::to('/admin/documents') }}">
                                    <i class="fa fa-file-pdf-o"></i>
                                    <p>Documents</p>
                                </a>
                            </li>

                           
                               
                                    <li class="">
                                            <a href="{{ URL::to('/admin/learningresources') }}">
                                                <i class="fa fa-book"></i>
                                                <p>Learning Resources</p>
                                            </a>
                                        </li>
                                   
                                        

            </ul>
    	</div>
    </div>

    <div class="main-panel">
	<nav class="navbar navbar-default">
            <div class="container-fluid">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar bar1"></span>
                        <span class="icon-bar bar2"></span>
                        <span class="icon-bar bar3"></span>
                    </button>
               </div>
                <div class="collapse navbar-collapse">
                   <ul class="nav navbar-nav navbar-right">

                        <li class="dropdown">
                            <a href="{{URL::to('/admin/settings') }}" class="dropdown-toggle" data-toggle="dropdown">
                                  <i class="ti-settings"></i>
                                  <p>Settings</p>
                                
                            </a>
                            <ul class="dropdown-menu">
                              <li><a href="{{URL::to('/admin/settings') }}">Settings</a></li>
                              <li><a href="{{URL::to('/logout')}}">Logout</a></li>
                              <!-- Auth::logout()  -->
                      
                            </ul>
                      </li>
                    </ul>

                </div>
            </div>
        </nav>

        <div class="content">
            <div class="container-fluid">
                <div class="row">
                    @yield('maincontent')
                </div>
            </div>
        </div>


        <footer class="footer">
            <div class="container-fluid">
                <nav class="pull-left">
                    <ul>

                        <li>
                            
                        </li>
                    </ul>
                </nav>
				<div class="copyright pull-right">
                  <!--   &copy; <script>document.write(new Date().getFullYear())</script>, made with <i class="fa fa-heart heart"></i> by <a href="http://www.creative-tim.com">Creative Tim</a> -->
                </div>
            </div>
        </footer>

    </div>
</div>
<!-- view Resource -->
<div class="modal fade viewResource" id="exampleModal" style="" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel"></h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body" id="modal-description">
              
              
          </div>
          <div class="modal-footer">
              <form action="{{URL::to('admin/readmore')}}" method="post">
                {!! csrf_field() !!}
                
              <input type="hidden" name="lr_id" id="lr_id" />
          <button type="submit" class="btn btn-primary">Readmore</button>
              </form>
          </div>
        </div>
      </div>

</body>

     <!--   Core JS Files   -->
     <script src="{!! URL::asset('/assets/js/bootstrap.min.js') !!}" type="text/javascript"></script>
 
     <!--  Checkbox, Radio & Switch Plugins -->
     <script src="{!! URL::asset('/assets/js/bootstrap-checkbox-radio.js') !!}"></script>
 
     <!--  Charts Plugin -->
     <script src="{!! URL::asset('/assets/js/chartist.min.js') !!}"></script>
 
     <!--  Notifications Plugin    -->
     <script src="{!! URL::asset('/assets/js/bootstrap-notify.js') !!}"></script>
 
    
     <!-- Paper Dashboard Core javascript and methods for Demo purpose -->
     <script src="{!! URL::asset('/assets/js/paper-dashboard.js') !!}"></script>
     <script src="{!! URL::asset('/assets/js/myscript.js') !!}"></script>
     <link href="//cdnjs.cloudflare.com/ajax/libs/x-editable/1.5.0/bootstrap3-editable/css/bootstrap-editable.css" rel="stylesheet"/>
     <script src="//cdnjs.cloudflare.com/ajax/libs/x-editable/1.5.0/bootstrap3-editable/js/bootstrap-editable.min.js"></script>
    
 
     <script type="text/javascript">
         $(document).ready(function(){
 
            //  demo.initChartist();
 
            //  $.notify({
            //      icon: 'ti-gift',
            //      message: "Welcome to <b> Dashboard</b>"
 
            //  },{
            //      type: 'success',
            //      timer: 4000
            //  });

                      		Pleasure.init();
		Layout.init();
		TablesDataTables.init();
 
         });
     </script>

     @if(Session('success'))
     <script>
                    alertify.set('notifier','position', 'top-left');
 alertify.success("{{Session('success')}}");
    
         </script>
     @endif

     @if(Session('error'))
     <script>
                    alertify.set('notifier','position', 'top-left');
 alertify.error("{{Session('error')}}");
    
         </script>
     @endif


</html>
