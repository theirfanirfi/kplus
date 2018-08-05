<?php  use Illuminate\Http\Request;
use Illuminate\Support\Facades\URL;
use App\Http\Models\Follow;
use App\Http\Models\Enterprise;
?>


<!DOCTYPE html>
<html lang="en" class="app">

<head>
    <meta charset="utf-8" />
    <title>KobuPlus | Web Application</title>
    <meta name="description" content="app, web app, Kobuplus, Enterprise Management, Leads Management, off screen nav" />   
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
    @yield('og')
    <link rel="apple-touch-icon" sizes="76x76" href="assets/img/apple-icon.png">
    <link rel="icon" type="image/png" sizes="96x96" href="assets/img/favicon.png">
    <link rel="stylesheet" href="{!! URL::to('/clientui/css/bootstrap.css') !!}" type="text/css" />
    <link rel="stylesheet" href="{!! URL::to('/clientui/css/animate.css') !!}" type="text/css" />
    <link rel="stylesheet" href="{!! URL::to('/clientui/css/font-awesome.min.css') !!}" type="text/css" />
       <link rel="stylesheet" href="{!! URL::to('/clientui/css/font.css') !!}" type="text/css" />

        <!--  Paper Dashboard core CSS    -->
   {{-- <link href="{!! URL::asset('/assets/css/paper-dashboard.css') !!}" rel="stylesheet"/> --}}

    <link rel="stylesheet" href="{!! URL::to('/clientui/js/calendar/bootstrap_calendar.css') !!}" type="text/css" />
    <link rel="stylesheet" href="{!! URL::to('/clientui/css/app.css') !!}" type="text/css" />
    <link href="{!! URL::asset('/assets/css/themify-icons.css') !!}" rel="stylesheet">

    <link rel="stylesheet" href="{!! URL::to('/clientui/css/atoms.css') !!}" type="text/css" />
    {{-- Copied CSS --}}
    <link href="{!! URL::asset('css/chat.css') !!} " rel="stylesheet">
    <link href="{!! URL::asset('css/alert.css') !!} " rel="stylesheet">
    <link href="{!! URL::asset('css/normalize.min.css') !!} " rel="stylesheet">

    {{-- Curl from web --}}
    
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
   
    <link href="{!! URL::asset('css/userlist.css') !!} " rel="stylesheet">


    <!--[if lt IE 9]>
    <script src="js/ie/html5shiv.js"></script>
    <script src="js/ie/respond.min.js"></script>
    <script src="js/ie/excanvas.js"></script>
  <![endif]-->
</head>

<body>
    <section class="vbox">
        <header class="bg-dark dk header navbar navbar-fixed-top-xs">
            <div class="navbar-header aside-md">
                <a class="btn btn-link visible-xs" data-toggle="class:nav-off-screen,open" data-target="#nav,html">
                    <i class="fa fa-bars"></i>
                </a>
                <a href="#" class="navbar-brand" data-toggle="fullscreen"><img src="{{URL::asset('/clientui/images/klogo.png')}}" class="m-r-sm">KobuPlus</a>
                <a class="btn btn-link visible-xs" data-toggle="dropdown" data-target=".nav-user">
                    <i class="fa fa-cog"></i>
                </a>
            </div>
            <ul class="nav navbar-nav hidden-xs">
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle dker" data-toggle="dropdown">
                        <i class="fa fa-building-o"></i>
                        <span class="font-bold">Activity</span>
                    </a>
                    <section class="dropdown-menu aside-xl on animated fadeInLeft no-borders lt">
                        <div class="wrapper lter m-t-n-xs">
                            <a href="#" class="thumb pull-left m-r">
                              
                                {{-- <img src="{{URL::to('/')}}/{{$user->image_path}}" class="img-circle"> --}}
                            </a>
                            <div class="clear">
                                <a href="#"><span class="text-white font-bold">{{Auth::user()->name}}</a></span>

                                @if(Session('superEnterpriseUser') == 1)
                                @if(Session('plan_title') == "Enterprise")
                                <small class="block">{{Session('plan_title')}}</small>
                                <a href="{{URL::to('/home/upgrade')}}" class="btn btn-xs btn-success m-t-xs">Downgrade</a>
                                @else
                                <small class="block">{{Session('plan_title')}}</small>
                                <a href="{{URL::to('/home/upgrade')}}" class="btn btn-xs btn-success m-t-xs">Upgrade</a>
                                @endif
                                @endif
                            </div>
                        </div>
                        {{-- <div class="row m-l-none m-r-none m-b-n-xs text-center">
                            <div class="col-xs-4">
                                <div class="padder-v">
                                    <span class="m-b-xs h4 block text-white">245</span>
                                    <small class="text-muted">Followers</small>
                                </div>
                            </div>
                            <div class="col-xs-4 dk">
                                <div class="padder-v">
                                    <span class="m-b-xs h4 block text-white">55</span>
                                    <small class="text-muted">Following</small>
                                </div>
                            </div>
                            <div class="col-xs-4">
                                <div class="padder-v">
                                    <span class="m-b-xs h4 block text-white">235</span>
                                    <small class="text-muted">Matched</small>
                                </div>
                            </div>
                        </div> --}}
                    </section>
                </li>
                <li>
                    <div class="m-t m-l">
                        <a href="{{URL::to('/home/upgrade')}}" class="dropdown-toggle btn btn-xs btn-primary" title="Upgrade"><i class="fa fa-long-arrow-up"></i></a>
                    </div>
                </li>
            </ul>
            <ul class="nav navbar-nav navbar-right m-n hidden-xs nav-user">
          {{--       <li class="hidden-xs">
                    <a href="#" class="dropdown-toggle dk" data-toggle="dropdown">
                        <i class="fa fa-bell"></i>
                        <span class="badge badge-sm up bg-danger m-l-n-sm count">2</span>
                    </a>
                    <section class="dropdown-menu aside-xl">
                        <section class="panel bg-white">
                            <header class="panel-heading b-light bg-light">
                                <strong>You have <span class="count">2</span> notifications</strong>
                            </header>
                            <div class="list-group list-group-alt animated fadeInRight">
                                <a href="#" class="media list-group-item">
                                    <span class="pull-left thumb-sm">
                    <img src="images/avatar.jpg" alt="John said" class="img-circle">
                  </span>
                                    <span class="media-body block m-b-none">
                    Use awesome animate.css<br>
                    <small class="text-muted">10 minutes ago</small>
                  </span>
                                </a>
                                <a href="#" class="media list-group-item">
                                    <span class="media-body block m-b-none">
                    1.0 initial released<br>
                    <small class="text-muted">1 hour ago</small>
                  </span>
                                </a>
                            </div>
                            <footer class="panel-footer text-sm">
                                <a href="#" class="pull-right"><i class="fa fa-cog"></i></a>
                                <a href="#notes" data-toggle="class:show animated fadeInRight">See all the notifications</a>
                            </footer>
                        </section>
                    </section>
                </li> --}}
                <li class="dropdown hidden-xs">
                    <a href="{{ URL::to('/home/learningresource') }}" class="dropdown-toggle dker"><i class="fa fa-fw fa-caret-right atoms_right"></i> Quick Start Guide</a>
                    
                </li>
                <li class="dropdown hidden-xs">
                    <a href="#" id="fmodal" class="dropdown-toggle dker" data-toggle="dropdown"><i class="fa fa-fw fa-search"></i> Browse Enterprises</a>
                    
                </li>
                <li class="dropdown hidden-xs">
                    <a href="{{URL::to('/home/calendar') }}" class="dropdown-toggle dker"><i class="fa fa-fw fa-calendar"></i> Calender</a>
                    
                </li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                        {{-- <span class="thumb-sm avatar pull-left"> --}}
              {{-- <img src="{{URL::asset('/clientui/images/avatar.jpg')}}"> --}}
            {{-- </span>  --}}
            {{Auth::user()->name}} <b class="caret"></b>
                    </a>
                    <ul class="dropdown-menu animated fadeInRight">
                        <span class="arrow top"></span>
                        <li>
                            <a href="{{URL::to('/home/profile')}}">Profile</a>
                        </li>

                        @if(Session('cp') == 1 || Session('superEnterpriseUser') ==1)
                        <li>
                            <a href="{{URL::to('/home/editProfile')}}">Settings</a>
                        </li>
                        @endif
                        {{-- <li>
                            <a href="#">
                                <span class="badge bg-danger pull-right">3</span> Notifications
                            </a>
                        </li> --}}
                        <li>
                            <a onclick="showInviteModal(this);"  href="#">Invite to KobuPlus</a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="{{ URL::to('/logout') }}">Logout</a>
                        </li>
                    </ul>
                </li>
            </ul>
        </header>
        <section>
            <section class="hbox stretch">
                <!-- .aside -->
                <aside class="bg-dark lter aside-md hidden-print" id="nav">
                    <section class="vbox">
                        {{-- <header class="header bg-primary lter text-center clearfix">
                            <div class="btn-group">
                                <button type="button" class="btn btn-sm btn-dark btn-icon" title="New project"><i class="fa fa-plus"></i></button>
                                <div class="btn-group hidden-nav-xs">
                                    <button type="button" class="btn btn-sm btn-primary dropdown-toggle" data-toggle="dropdown">
                    Switch Project
                    <span class="caret"></span>
                  </button>
                                    <ul class="dropdown-menu text-left">
                                        <li><a href="#">Project</a></li>
                                        <li><a href="#">Another Project</a></li>
                                        <li><a href="#">More Projects</a></li>
                                    </ul>
                                </div>
                            </div>
                        </header> --}}
                        <section class="w-f scrollable">
                            <div class="slim-scroll" data-height="auto" data-disable-fade-out="true" data-distance="0" data-size="5px" data-color="#333333">

                                <!-- nav -->
                                <nav class="nav-primary hidden-xs">
                                    <ul class="nav">
                                        <li class="active">
                                          @if(Session('ep') == 1 || Session('superEnterpriseUser') == 1)
                                            <a href="{{ URL::to('/home/addenterprise/') }}" class="active">
                                              @else
                                            <a href="#" onclick="nop();">
                                            @endif 
                                                <i class="fa fa-building-o icon">
                          <b class="bg-danger"></b>
                        </i>
                                                <span>Create Enterprise</span>
                                            </a>
                                        </li>

                                        @if(Session('haveEnterprise')==1)
                                        <li>
                                            <a href="{{ URL::to('/home/MyEnterprises') }}">
                                                <i class="fa fa-dashboard icon">
                                                  <b class="bg-warning"></b>
                                                </i>
                                                
                                                <span>My Enterprise</span>
                                            </a>
                                        </li>
                                        @endif

                                        @if(Session('up') == 1 || Session('superEnterpriseUser') == 1 && Session('haveEnterprise')==1)
                                        <li>
                                            <a href="{{URL::to('/home/users')}}">
                                                <i class="fa fa-user icon">
                                                  <b class="bg-success"></b>
                                                </i>
                                                
                                                <span>Users</span>
                                            </a>                                        
                                        </li>
                                        @endif

                                        @if(Session('cp') == 1 || Session('superEnterpriseUser') ==1 && Session('haveEnterprise')==1)
                                        <li>
                                            <a href="{{ URL::to('/home/contacts') }}">
                                                <i class="fa fa-columns icon">
                                                  <b class="bg-primary"></b>
                                                </i>
                                                <span>Contacts</span>
                                            </a>
                                        </li>
                                        @endif

                                        @if(Session('haveEnterprise')==1)
                                        <li>
                                            <a href="{{ URL::to('/home/documents') }}">
                                                <i class="fa fa-file-text icon">
                                                  <b class="bg-info"></b>
                                                </i>
                                                <span>Documents</span>
                                            </a>
                                        </li>
                                        @endif

                                        @if(Session('haveEnterprise')==1)
                                        <li>
                                            <a href="#" onclick="message()">
                                                {{-- <b class="badge bg-danger pull-right">3</b> --}}
                                                <i class="fa fa-envelope-o icon">
                                                  <b class="bg-primary dker"></b>
                                                </i>
                                                <span>Messages</span>
                                            </a>
                                        </li>
                                        @endif
                                        
                                        <li>
                                            <a href="{{ URL::to('/home/learningresource') }}">
                                                <i class="fa fa-pencil icon">
                                                  <b class="bg-info"></b>
                                                </i>
                                                <span>Learning Resources</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#" onclick="showInviteModal(this);">
                                                <i class="fa fa-share icon">
                                                  <b class="bg-info"></b>
                                                </i>
                                                <span>Invite</span>
                                            </a>
                                        </li>
                                    </ul>
                                </nav>
                                <!-- / nav -->
                            </div>
                        </section>

                        <footer class="footer lt hidden-xs b-t b-dark">
                            
                            <a href="#nav" data-toggle="class:nav-xs" class="pull-right btn btn-sm btn-dark btn-icon">
                                <i class="fa fa-angle-left text"></i>
                                <i class="fa fa-angle-right text-active"></i>
                            </a>
                            <div class="btn-group hidden-nav-xs">
                                <button type="button" title="Chats" class="btn btn-icon btn-sm btn-dark" onclick=""><i class="fa fa-twitter"></i></button>
                                <button type="button" title="Contacts" class="btn btn-icon btn-sm btn-dark" onclick=""><i class="fa fa-facebook"></i></button>
                            </div>
                        </footer>
                    </section>
                </aside>
                <!-- /.aside -->
                <section id="content">
                    <section class="vbox">
                        <section class="scrollable padder">
                            <ul class="breadcrumb no-border no-radius b-b b-light pull-in">
                                <li><a href="/home"><i class="fa fa-home"></i> Home</a></li>
                                <li class="active">Dashboard</li>
                            </ul>
                           {{--  <div class="m-b-md">
                                <h3 class="m-b-none">Dashboard</h3>
                                <small>Welcome back, {{Auth::user()->name}}</small>
                            </div> --}}
                            
                            
                            <div class="row">
                              {{-- <div class="col-md-4">
                                <section class="panel panel-default">
                                    <div class="panel-body atoms-card">
                                      <div class="clearfix text-center m-t">
                                        <div class="inline">
                                          <div class="h1 m-t m-b-xs"><i class="fa fa-plus icon atoms-fa"></i></div>
                                          <big class="atoms-text m-b">Create Enterprise</big>
                                        </div>                      
                                      </div>
                                    </div>
                                  </section>
                                </div> --}}
                                @yield('maincontent')
                                
                            </div>
                        </section>
                    </section>
                    <a href="#" class="hide nav-off-screen-block" data-toggle="class:nav-off-screen" data-target="#nav"></a>
                </section>
                {{-- <aside class="bg-light lter b-l aside-md hide" id="notes">
                    <div class="wrapper">Notification</div>
                </aside> --}}
            </section>
        </section>
    </section>
  
  <footer class="footer">
            <div class="container-fluid">
                <nav class="pull-left">
                    <ul>

                        <li>
                        </li>
                    </ul>
                </nav>

                <div class="chat_box">
                        <div class="chat_head"> Chat</div>
                        <div class="chat_body"> 
                         <?php 
                         $user_id = Auth::user()->id;
                         $enterpirses = Enterprise::where('user_id','=',$user_id)->get(); ?>
                         @if(!empty($enterpirses))
                         @foreach ($enterpirses as $ee)
                             
                
                       <?php  $following = Follow::where('follower_e_id','=',$ee->e_id)->get(); ?>
                         @if(!empty($following))   
                         @foreach($following as $f)
                         <?php $e = Enterprise::find($f->followed_e_id); ?>
                       <a style="color:black;" href="{{URL::to('/home/chatwithEnterprise/')}}/{{$ee->e_id}}/{{$e->e_id}}"><div class="user">{{$e->b_name}}</div></a>
                        @endforeach
                        @endif
                        @endforeach
                        @endif
                        </div>

                      </div>
                    
        <div class="copyright pull-right">
         </div>
            </div>
        </footer>

     <!-- Modal -->
                <div class="modal modal-plan fade" id="exampleModal" style="" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                  <div class="modal-dialog" role="document">
                    <div class="modal-content">
                      <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Add New Plan</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                          <span aria-hidden="true">&times;</span>
                        </button>
                      </div>
                      <div class="modal-body">
                        <input type="text" class="form-control" id="dt_title" placeholder="Plan Title" style="border:1px solid black;" />
                        <br/>
                        <textarea class="form-control" id="dt_desc" rows="12" ></textarea>
                        <input type="hidden" id="url" e_id="<?php echo !empty($enterprise->e_id) ? $enterprise->e_id : ''; ?>" back_url="{{URL::to('/home/enterpriseDocs/')}}/{{!empty($enterprise->e_id) ? $enterprise->e_id : ''}}" />
                        {{ csrf_field() }}
                      </div>
                      <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="button" onclick="subNewPlan(this);" class="btn btn-primary">Save changes</button>
                      </div>
                    </div>
                  </div>
                </div>
    
                <!-- Sub Plan Modal -->
                <div class="modal modal-sub-plan fade submodal" id="exampleModal" style="" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                  <div class="modal-dialog" role="document">
                    <div class="modal-content">
                      <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Add New Plan</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                          <span aria-hidden="true">&times;</span>
                        </button>
                      </div>
                      <div class="modal-body">
                        <input type="text" class="form-control" id="sub_title" placeholder="Plan Title" style="border:1px solid black;" />
                        <br/>
                        <textarea class="form-control" id="sub_desc" rows="12" ></textarea>
                        <input type="hidden" id="dt_id" />
                        <input type="hidden" id="e_id" />
                        <input type="hidden" id="back_url" />
                        <input type="hidden" id="url2" />
                        {{ csrf_field() }}
                      </div>
                      <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="button" onclick="subNewSubPlan(this);" class="btn btn-primary">Save changes</button>
                      </div>
                    </div>
                  </div>
                </div>

                <div class="modal fade printmodal" id="exampleModal" style="" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                      <div class="modal-content">
                        <div class="modal-header">
                          <h5 class="modal-title" id="exampleModalLabel">Print Enterprise</h5>
                          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                          </button>
                        </div>
                        <div class="modal-body">
                            <p>Select Options to print</p>
                            {{Form::open(['url'=> '/print', 'method' => 'post'])}}
                            <table class="table">
                                <tr>
                                    <td>
                                <input type="checkbox"  id="users" name="print_users" /> Users

                                    </td>
                                    <td>
                                <input type="checkbox"  id="contacts" name="print_contacts" /> Contacts
                                        
                                    </td>
                                    <td>
                                <input type="checkbox" id="documents" name="print_documents"  /> Documents
                                        
                                    </td>
                                </tr>
                            </table>
                          <br/>
                          
                          
                          <input type="hidden" id="e_id_print" name="e_id" />
                          <input type="hidden" id="url_print" value="{{URL::to('/print/s')}}" />
                
                          {{ csrf_field() }}
                        </div>
                        <div class="modal-footer">
                          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                          <button type="submit"  class="btn btn-primary">Print</button>
                        </div>

                        {{Form::close()}}
                      </div>
                    </div>
                  </div>


    <!-- invite modal -->
                  <div class="modal fade invite" id="exampleModal" style="" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                      <div class="modal-content">
                        <div class="modal-header">
                          <h5 class="modal-title" id="exampleModalLabel">Invite Friend</h5>
                          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                          </button>
                        </div>
                        <div class="modal-body">
                           <p>Invite through Email, SMS or both.</p>
                            {{Form::open(['url'=> '/home/invite', 'method' => 'post', 'id' => 'inviteFormSubmit'])}}
                            <table class="table">
                                <tr>
                                    <td>
                                <input type="checkbox"  id="emailInvite" name="emailInvite" />Email

                                    </td>
                                    <td>
                                <input type="checkbox"  id="smsInvite" name="smsInvite" /> SMS
                                        
                                    </td>
                                
                                </tr>

                                <tr>
                                    <td>Friend Mobile Number: <td><input type="number" name="mobileNumber" class="form-control" id="mobileNumber" maxlength="11" placeholder="Mobile Number" /></td>
                                </tr>

                                <tr>
                                    <td>Friend Email: <td><input type="email" name="femail" class="form-control" id="femail" placeholder="Email" /></td>
                                </tr>

                                <tr>
                                <td colspan="2"><textarea class="form-control" name="invite_message" id="invite_message">{{Auth::user()->name}} has invited you to join KobuPlus.</textarea></td>
                                </tr>

                            </table>
                          <br/>
                          
                          
                          <input type="hidden" id="e_id_print" name="e_id" />
                
                          {{ csrf_field() }}
                        </div>
                        <div class="modal-footer">
                          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                          <button type="submit"  class="btn btn-primary">Send Invitation</button>
                        </div>

                        {{Form::close()}}
                      </div>
                    </div>
                  </div>
                {{-- End invite modal --}}

                {{-- Followers Modal --}}

                  <div class="modal fade followers" id="exampleModal" style="" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                      <div class="modal-content">
                       
                            <div class="col-xl-6">
                                <!--begin:: Widgets/User Progress -->
                                <div class="m-portlet m-portlet--full-height ">
                                    <div class="m-portlet__head">
                                        <div class="m-portlet__head-caption">
                                            <div class="m-portlet__head-title">
                                                <h3 class="m-portlet__head-text">
                                                   
                                                </h3>
                                            </div>
                                        </div>
                                        <div class="m-portlet__head-tools">
                                            <ul class="nav nav-pills nav-pills--brand m-nav-pills--align-right m-nav-pills--btn-pill m-nav-pills--btn-sm" role="tablist">
                                                <li class="nav-item m-tabs__item">
                                                    <a class="nav-link m-tabs__link active" data-toggle="tab" href="#m_widget4_tab1_content" role="tab">
                                                        Following
                                                    </a>
                                                </li>
                                                <li class="nav-item m-tabs__item">
                                                    <a class="nav-link m-tabs__link" data-toggle="tab" href="#m_widget4_tab2_content" role="tab">
                                                        Followers
                                                    </a>
                                                </li>
                                                <li class="nav-item m-tabs__item">
                                                    <a class="nav-link m-tabs__link" data-toggle="tab" href="#m_widget4_tab3_content" role="tab">
                                                        Matched
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="m-portlet__body">
                                        <div class="tab-content">
                                            <div class="tab-pane active" id="m_widget4_tab1_content">
                                                <div class="m-widget4 m-widget4--progress">
                                                 
                                                    <?php 
                                                    $user_id = Auth::user()->id;
                                                    $enterpirses = Enterprise::where('user_id','=',$user_id)->get(); ?>
                                                    @if(!empty($enterpirses))
                                                    @foreach($enterpirses as $ee)
                                                   <?php $followings = Follow::where('follower_e_id','=',$ee->e_id)->get();
                                                    
                                                    ?>
                                                    @if(!empty($followings))
                                                    @foreach($followings as $fo)
                                                   <?php $e = Enterprise::find($fo->followed_e_id); ?>
                                                    @if(!empty($e))
                                                    <div class="m-widget4__item item_{{$fo->f_id}}">
                                                        <div class="m-widget4__img m-widget4__img--pic">
                                                            <img src="{{URL::to('/')}}/{{$e->logo_path}}" alt="">
                                                        </div>
                                                        <div class="m-widget4__info">
                                                            <span class="m-widget4__title">
                                                                {{$e->b_name}}
                                                            </span>
                                                            <br>
                                                            <span class="m-widget4__sub">
                                                               {{$e->p_b_idea}}
                                                            </span>
                                                        </div>
                                                    
                                                        <div class="m-widget4__ext">
                                                            <a href="#" follwere_e_id="{{$fo->follower_e_id}}" followed_e_id="{{$fo->followed_e_id}}/{{$fo->f_id}}" url="{{URL::to('/home/unfollow')}}/{{$fo->f_id}}" f_id="{{$fo->f_id}}" onclick="unfollow(this);" class="m-btn m-btn--hover-brand m-btn--pill btn btn-sm btn-secondary">
                                                                unfollow
                                                            </a>
                                                        </div>
                                                    </div>
                                                    @endif
                                                    @endforeach
                                                    @else
                                                    <h1>You have not followed any enterprise</h1>
                                                    @endif
                                                    @endforeach
                                                    @endif

                                                </div>
                                            </div>
                                            <div class="tab-pane" id="m_widget4_tab2_content">
                                                <div class="m-widget4 m-widget4--progress">
                                                 
                                                    <?php 
                                                    $user_id = Auth::user()->id;
                                                    $enterpirses = Enterprise::where('user_id','=',$user_id)->get(); ?>
                                                    @if(!empty($enterpirses))
                                                    @foreach($enterpirses as $ee)
                                                   <?php $followings = Follow::where('follower_e_id','=',$ee->e_id)->get();
                                                    
                                                    ?>
                                                    @if(!empty($followings))
                                                    @foreach($followings as $fo)
                                                   <?php $e = Enterprise::find($fo->follower_e_id); ?>
                                                    @if(!empty($e))
                                                    <div class="m-widget4__item item_{{$fo->f_id}}">
                                                        <div class="m-widget4__img m-widget4__img--pic">
                                                            <img src="{{URL::to('/')}}/{{$e->logo_path}}" alt="">
                                                        </div>
                                                        <div class="m-widget4__info">
                                                            <span class="m-widget4__title">
                                                                {{$e->b_name}}
                                                            </span>
                                                            <br>
                                                            <span class="m-widget4__sub">
                                                               {{$e->p_b_idea}}
                                                            </span>
                                                        </div>
                                                    
                                                        <div class="m-widget4__ext">
                                                           <?php $cf = Follow::where('follower_e_id','=',$ee->e_id)->where('followed_e_id','=',$e->e_id)->get()->count(); ?> 
                                                           @if($cf > 0) 
                                                           <a href="#" follwere_e_id="{{$fo->follower_e_id}}" followed_e_id="{{$fo->followed_e_id}}/{{$fo->f_id}}" url="{{URL::to('/home/unfollow')}}/{{$fo->f_id}}" f_id="{{$fo->f_id}}" onclick="unfollow(this);" class="m-btn m-btn--hover-brand m-btn--pill btn btn-sm btn-secondary">
                                                                unfollow
                                                            </a>
                                                            @else
                                                            <a href="#" class_id="{{$e->e_id}}" url="{{URL::to('/home/followMatched/')}}/{{$ee->e_id}}/{{$e->e_id}}/{{$ee->user_id}}/{{$e->user_id}}" follower_e_id="{{$ee->e_id}}"  followed_e_id="{{$e->e_id}}" follower_user_id="{{$ee->user_id}}" followed_user_id="{{$e->user_id}}" onclick="followMatched(this);" class="m-btn m-btn--hover-brand m-btn--pill btn btn-sm btn-secondary">
                                                                    follow
                                                                 </a>
                                                            @endif
                                                        </div>
                                                    </div>
                                                    @endif
                                                    @endforeach
                                                    @else
                                                    <h1>You have no follower</h1>
                                                    @endif
                                                    @endforeach
                                                    @endif


                                                </div>
                                            </div>
                                            <div class="tab-pane" id="m_widget4_tab3_content">
                                                    <div class="m-widget4 m-widget4--progress">
                                                 
                                                            <?php
                                                            use Illuminate\Support\Facades\Auth;
                                                            $user_id = Auth::user()->id;
                                                            $es = Enterprise::where('user_id','=',$user_id)->get();
                                                            ?>
                                                            @if(!empty($es))
                                                            @foreach($es as $ee)
                                                           <?php $enterprises = Enterprise::where('p_b_idea','=',$ee->p_b_idea)->where('e_id','!=',$ee->e_id)->where('user_id','!=',Auth::user()->id)->get();
                                                            
                                                            ?>
                                                            @if(!empty($enterprises))
                                                            @foreach($enterprises as $e)
                                                            <?php $f = Follow::where('follower_e_id','=',$ee->e_id)->where('followed_e_id','=',$e->e_id)->get()->count(); ?>
                                                            @if(!($f > 0))
                                                            <div class="m-widget4__item item_{{$e->e_id}}">
                                                                <div class="m-widget4__img m-widget4__img--pic">
                                                                    <img src="{{URL::to('/')}}/{{$e->logo_path}}" alt="">
                                                                </div>
                                                                <div class="m-widget4__info">
                                                                    <span class="m-widget4__title">
                                                                        {{$e->b_name}}
                                                                    </span>
                                                                    <br>
                                                                    <span class="m-widget4__sub">
                                                                       {{$e->p_b_idea}}
                                                                    </span>
                                                                </div>
                                                            
                                                                <div class="m-widget4__ext">

                                                                    <a href="#" class_id="{{$e->e_id}}" url="{{URL::to('/home/followMatched/')}}/{{$ee->e_id}}/{{$e->e_id}}/{{$ee->user_id}}/{{$e->user_id}}" follower_e_id="{{$ee->e_id}}"  followed_e_id="{{$e->e_id}}" follower_user_id="{{$ee->user_id}}" followed_user_id="{{$e->user_id}}" onclick="followMatched(this);" class="m-btn m-btn--hover-brand m-btn--pill btn btn-sm btn-secondary">
                                                                       follow
                                                                    </a>
                                                                </div>
                                                            </div>
                                                            @endif
                                                            @endforeach
                                                            @else
                                                            <h1>You have not followed any enterprise</h1>
                                                            @endif
                                                            @endforeach
                                                            @endif
        
        
                                                        </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!--end:: Widgets/User Progress -->
                            
                        </div>
                        <div class="modal-footer">
                          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        </div>
                      </div>
                    </div>
                  </div>


                  <!-- add event modal -->
                  <div class="modal fade addEventagain" id="exampleModal" style="" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog" role="document">
                          <div class="modal-content">
                            <div class="modal-header">
                              <h5 class="modal-title" id="exampleModalLabel">Add Event</h5>
                              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                              </button>
                            </div>
                            <div class="modal-body">
                              
                                {{Form::open(['url'=> '/home/addevent', 'method' => 'post'])}}
                                
                              
                          <label>Event Title</label>    
                        <input type="text" id="event_title" name="event_title"  class="form-control" />
                        <label>Start Date</label>    
                        <input type="date" id="start_date" name="start_date" class="form-control" />
                        <label>End Date</label>    
                        <input type="date" id="end_date" name="end_date" class="form-control" />
                        <input type="hidden" id="user_id" name="user_id" value="{{Auth::user()->id}}" />
                    
                              {{ csrf_field() }}
                            </div>
                            <div class="modal-footer">
                              <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                              <button type="submit"  class="btn btn-primary">Add Event</button>
                            </div>
    
                            {{Form::close()}}
                          </div>
                        </div>
                      </div>



    <script src="{!! URL::asset('/clientui/js/jquery.min.js') !!}"></script>
    <!-- Bootstrap -->
    <script src="{!! URL::asset('/clientui/js/bootstrap.js') !!}"></script>
    <!-- App -->
    <script src="{!! URL::asset('/clientui/js/app.js') !!}"></script>
    <script src="{!! URL::asset('/clientui/js/app.plugin.js') !!}"></script>
    <script src="{!! URL::asset('/clientui/js/slimscroll/jquery.slimscroll.min.js') !!}"></script>
    <script src="{!! URL::asset('/clientui/js/charts/easypiechart/jquery.easy-pie-chart.js') !!}"></script>
    <script src="{!! URL::asset('/clientui/js/charts/sparkline/jquery.sparkline.min.js') !!}"></script>
    <script src="{!! URL::asset('/clientui/js/charts/flot/jquery.flot.min.js') !!}"></script>
    <script src="{!! URL::asset('/clientui/js/charts/flot/jquery.flot.tooltip.min.js') !!}"></script>
    <script src="{!! URL::asset('/clientui/js/charts/flot/jquery.flot.resize.js') !!}"></script>
    <script src="{!! URL::asset('/clientui/js/charts/flot/jquery.flot.grow.js') !!}"></script>
    <script src="{!! URL::asset('/clientui/js/charts/flot/demo.js') !!}"></script>

    <script src="{!! URL::asset('/clientui/js/calendar/bootstrap_calendar.js') !!}"></script>
    <script src="{!! URL::asset('/clientui/js/calendar/demo.js') !!}"></script>

    <script src="{!! URL::asset('/clientui/js/sortable/jquery.sortable.js') !!}"></script>
    <script src="{!! URL::asset('/assets/js/myscript.js') !!}"></script>
     <script src="{!! URL::asset('js/animatedModal.min.js') !!}"></script>
     {{-- Copied JS --}}

     <script src="{!! URL::asset('/assets/js/chartist.min.js') !!}"></script>
    <script src="{!! URL::asset('js/chat.js') !!}"></script>

    <!--  Notifications Plugin    -->
    <script src="{!! URL::asset('/assets/js/bootstrap-notify.js') !!}"></script>
    <script src="{!! URL::asset('/js/tinymce/jquery.tinymce.min.js') !!}"></script>
    <script src="{!! URL::asset('/js/tinymce/tinymce.min.js') !!}"></script>
    <script>tinymce.init({ selector:'textarea' });</script>
    <script src="//cdn.jsdelivr.net/npm/alertifyjs@1.11.0/build/alertify.min.js"></script>

  </body>

  <script src="{!! URL::asset('/assets/js/myscript.js') !!}"></script>
     <script src="{!! URL::asset('js/animatedModal.min.js') !!}"></script>
    <script>

        function nop()
        {
            alertify.set('notifier','position', 'top-left');
 alertify.error("You don't have permission to perform the action.");
        
        }

       
       /*  $.notify({
             message: "working"
         },
         {
             type: 'success',
             timer: 4000
         }
         );
        */ 

        function message()
        {
            $('.chat_body').slideToggle('slow');
        }
     </script>
    <input type="hidden" id="upgradeurl" value="{{URL::to('/home/upgrade/')}}" />
     @if(Session('error-upgrade'))
     <script>
     alertify.confirm('Upgrade Plan', '{{Session('error-upgrade')}}', function(){ var url = $('#upgradeurl').val();
     window.location.href = url; }
                     , function(){ });
     </script>
     @endif

</html>