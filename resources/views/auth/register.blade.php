<!DOCTYPE html>
<html lang="en" class="bg-dark">
<head>
  <meta charset="utf-8" />
  <title>KobuPlus | Web Application</title>
  <meta name="description" content="app, web app, kobuplus, user dashboard, admin, flat, flat ui, ui kit, client dashboard" />
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" /> 
  <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

  <link rel="stylesheet" href="{!! URL::to('/clientui/css/bootstrap.css') !!}" type="text/css" />
    <link rel="stylesheet" href="{!! URL::to('/clientui/css/animate.css') !!}" type="text/css" />
    <link rel="stylesheet" href="{!! URL::to('/clientui/css/font-awesome.min.css') !!}" type="text/css" />
       <link rel="stylesheet" href="{!! URL::to('/clientui/css/font.css') !!}" type="text/css" />
    <link rel="stylesheet" href="{!! URL::to('/clientui/css/app.css') !!}" type="text/css" />
  <!--[if lt IE 9]>
    <script src="js/ie/html5shiv.js"></script>
    <script src="js/ie/respond.min.js"></script>
    <script src="js/ie/excanvas.js"></script>
  <![endif]-->
</head>
<body>
  <section id="content" class="m-t-lg wrapper-md animated fadeInUp">

    <div class="container aside-xxl">
      <a class="navbar-brand block" href="/"><img src="{{URL::asset('/clientui/images/KubuPlus.jpg')}}" ></a>
      <section class="panel panel-default bg-white m-t-lg">
        <header class="panel-heading text-center">
          <strong>Register</strong>
        </header>
        <form action="{{ route('register') }}" class="panel-body wrapper-lg" method="POST">
        {{ csrf_field() }}

          <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
            <label class="control-label" for="name">Name</label>
            <input id="name" name="name" type="text" placeholder="Your Name" class="form-control input-lg" value="{{ old('name') }}" required autofocus>

            @if ($errors->has('name'))
                <span class="help-block">
                    <strong>{{ $errors->first('name') }}</strong>
                </span>
            @endif

          </div>

          <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
            <label class="control-label" for="email">Email</label>
            <input id="email" name="email" type="email" placeholder="youremail@example.com" class="form-control input-lg" value="{{ old('email') }}" required>

            @if ($errors->has('email'))
                <span class="help-block">
                    <strong>{{ $errors->first('email') }}</strong>
                </span>
            @endif

          </div>

          <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
            <label class="control-label" for="password">Password</label>
            <input type="password" id="password" placeholder="Password" class="form-control input-lg" name="password" required>
            
            @if ($errors->has('password'))
                <span class="help-block">
                    <strong>{{ $errors->first('password') }}</strong>
                </span>
            @endif

          </div>

          <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
            <label class="control-label" for="password-confirm">Confirm Password</label>
            <input type="password" id="password-confirm" placeholder="Password" class="form-control input-lg" name="password_confirmation" required>
         </div>

          <button type="submit" class="btn btn-primary">Register</button>
          <div class="line line-dashed"></div>
          {{-- <a href="#" class="btn btn-facebook btn-block m-b-sm"><i class="fa fa-facebook pull-left"></i>Sign in with Facebook</a>
          <a href="#" class="btn btn-twitter btn-block"><i class="fa fa-twitter pull-left"></i>Sign in with Twitter</a>
          <div class="line line-dashed"></div> --}}
          <p class="text-muted text-center"><small>Already have an account?</small></p>
          <a href="/register" class="btn btn-default btn-block">Sign in</a>
        </form>
      </section>
    </div>
  </section>
  <!-- footer -->
  <footer id="footer">
    <div class="text-center padder">
      <p>
        <small>KobuPlus - Copyright<br>&copy; 2018</small>
      </p>
    </div>
@if(Session('error'))
<script>
    alertify.error('{{Session('error')}}');
</script>
@endif

  </footer>
  <!-- / footer -->

  <script src="{!! URL::asset('/clientui/js/jquery.min.js') !!}"></script>
    <!-- Bootstrap -->
  <script src="{!! URL::asset('/clientui/js/bootstrap.js') !!}"></script>
  <!-- App -->
    <script src="{!! URL::asset('/clientui/js/app.js') !!}"></script>
    <script src="{!! URL::asset('/clientui/js/app.plugin.js') !!}"></script>
    <script src="{!! URL::asset('/clientui/js/slimscroll/jquery.slimscroll.min.js') !!}"></script>
    <link href="{!! URL::asset('assets/alertify.bootstrap.css') !!}" rel="stylesheet">
<link href="{!! URL::asset('assets/alertify.core.css') !!}" rel="stylesheet">
<link href="{!! URL::asset('assets/alertify.default.css') !!} " rel="stylesheet">
<script src="{!! URL::asset('assets/alertify.min.js') !!}"></script>
  
</body>
</html>