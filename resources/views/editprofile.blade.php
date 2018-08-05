
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="utf-8">
        <title>Profile</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <script src="{{URL::to('assets/js/jquery-1.10.2.js') }}"></script>
        <link href="{{URL::to('assets/css/bootstrap.min.css') }}" rel="stylesheet">
        <link href="{{URL::to('assets/css/admin1.css') }}" rel="stylesheet">
        <link href="{{URL::to('assets/css/elements.css') }}" rel="stylesheet">
        <link href="{{URL::to('assets/css/jasny-bootstrap.min.css') }}" rel="stylesheet">
        <link href="{!! URL::asset('assets/alertify.bootstrap.css') !!}" rel="stylesheet">
        <link href="{!! URL::asset('assets/alertify.core.css') !!}" rel="stylesheet">
        <link href="{!! URL::asset('assets/alertify.default.css') !!} " rel="stylesheet">
        <script src="{!! URL::asset('assets/alertify.min.js') !!}"></script>
    
        <style type="text/css">
            .text-white{
    color:#fff;    
    }
    .bg-blue-500 {
        background-color: #2196f3;
    }
    .container-overlap {
        position: relative;
        padding: 32px 16px 64px;
    }
    .card .card-divider {
        display: block;
        margin-top: 10px;
        margin-bottom: 10px;
        border: 1px solid rgba(0,0,0,.12);
    }
    .image-list>a {
        margin-left: -8px;
    }
    .image-list>a:first-child {
        margin-left: 0;
    }
    .thumb32 {
        width: 32px!important;
        height: 32px!important;
    }
    .text-white{
        color:#fff;    
    }

    .container-fluid,
    .container-lg,
    .container-md,
    .container-sm,
    .container-xs {
        padding: 8px;
        width: auto
    }

    @media only screen and (min-width:480px) {
        .container-fluid,
        .container-lg,
        .container-md,
        .container-sm,
        .container-xs {
            padding: 16px
        }
    }

    @media only screen and (min-width:992px) {
        .container-fluid,
        .container-lg,
        .container-md,
        .container-sm,
        .container-xs {
            padding: 24px
        }
    }

    .container-lg {
        max-width: 1200px
    }

    .container-md {
        max-width: 992px
    }

    .container-sm {
        max-width: 768px
    }

    .container-xs {
        max-width: 480px
    }

    @media only screen and (max-width:1199px) {
        input[type=text],
        input[type=email],
        input[type=search],
        input[type=password] {
            -webkit-appearance: none
        }
        .container-unwrap {
            padding: 0
        }
        .container-unwrap>.row {
            margin: 0
        }
        .container-unwrap>.row>[class*=col-] {
            padding-left: 0;
            padding-right: 0
        }
        .container-unwrap .card {
            margin-bottom: 0
        }
    }

    .container-overlap {
        position: relative;
        padding: 32px 16px 64px
    }

    .container-overlap+.container-fluid,
    .container-overlap+.container-lg,
    .container-overlap+.container-md,
    .container-overlap+.container-sm,
    .container-overlap+.container-xs {
        padding-top: 0;
        margin-top: -32px
    }

    .container-overlap+.container-fluid .push-down,
    .container-overlap+.container-lg .push-down,
    .container-overlap+.container-md .push-down,
    .container-overlap+.container-sm .push-down,
    .container-overlap+.container-xs .push-down {
        display: block;
        height: 48px
    }
    .bg-indigo-500 {
        background-color: #3f51b5;
    }
    .container-overlap {
        position: relative;
        padding: 32px 16px 64px;
    }
    .fw {
        width: 100%!important;
    }
    .thumb64 {
        width: 64px!important;
        height: 64px!important;
    }
    .thumb48 {
        width: 48px!important;
        height: 48px!important;
    }

    .card {
        position: relative;
        border-radius: 3px;
        background-color: #fff;
        color: #4F5256;
        border: 1px solid rgba(0, 0, 0, .12);
        margin-bottom: 8px
    }

    @media only screen and (min-width:480px) {
        .card {
            margin-bottom: 16px
        }
    }

    @media only screen and (min-width:992px) {
        .card {
            margin-bottom: 24px
        }
    }

    .card .card-heading {
        padding: 16px;
        margin: 0
    }

    .card .card-heading>.card-title {
        margin: 0;
        font-size: 18px
    }

    .card .card-heading>.card-icon {
        float: right;
        color: rgba(255, 255, 255, .87);
        font-size: 20px
    }

    .card .card-heading>small {
        color: rgba(162, 162, 162, .92);
        letter-spacing: .01em
    }

    .card .card-body {
        position: relative;
        padding: 16px
    }

    .card .card-footer {
        padding: 16px;
        border-top: 1px solid rgba(162, 162, 162, .12)
    }

    .card .card-item {
        position: relative;
        display: block;
        min-height: 120px
    }

    .card .card-item>.card-item-text {
        position: absolute;
        bottom: 0;
        left: 0;
        right: 0;
        background-color: rgba(0, 0, 0, .35);
        margin: 0;
        color: #fff;
        padding: 8px
    }

    .card .card-item>.card-item-text a {
        color: inherit
    }

    .card .card-item>.card-item-image {
        display: block;
        width: 100%;
        height: 190px;
        background-repeat: no-repeat;
        background-position: center center;
        background-size: cover
    }

    .card .card-item.card-media {
        min-height: 280px;
        background-repeat: repeat;
        background-position: 50% 50%;
        background-attachment: scroll;
        background-origin: padding-box
    }

    .card .card-item.card-media .card-media-quote {
        padding: 16px;
        font-size: 35px
    }

    @media only screen and (min-width:768px) {
        .card .card-item.card-media .card-media-quote {
            font-size: 45px
        }
    }

    .card .card-item.card-media .card-media-quote>a {
        color: inherit;
        text-decoration: none
    }

    .card .card-item.card-media .card-media-quote:before {
        content: '“';
        display: block;
        font-size: 2em;
        line-height: 1;
        margin-top: .25em
    }

    .btn-label:after,
    .c-radio span:before,
    .container-overlap:before,
    .note-area.note-area-margin:after,
    .switch span:after {
        content: ""
    }

    .card.card-transparent {
        background-color: transparent;
        border: 0;
        -webkit-box-shadow: 0 0 0 #000;
        box-shadow: 0 0 0 #000
    }

    .card .card-offset {
        position: relative;
        padding-bottom: 36px;
        z-index: 10
    }

    .card .card-offset>.card-offset-item {
        position: absolute;
        top: -24px;
        left: 15px;
        right: 15px
    }

    .card .card-toolbar {
        position: relative;
        width: 100%;
        min-height: 64px;
        font-size: 18px;
        line-height: 64px;
        padding-left: 22px;
        z-index: 2
    }

    .card .card-subheader {
        padding: 16px 0 16px 16px;
        line-height: .75em;
        font-size: 14px;
        font-weight: 500;
        letter-spacing: .01em;
        color: rgba(0, 0, 0, .54)
    }

    .card .card-subheader+.mda-list>.mda-list-item:first-child>.mda-list-item-text,
    .card>.btn {
        padding-top: 16px
    }

    .card .card-subheader+.mda-list>.mda-list-item:first-child>.mda-list-item-icon,
    .card .card-subheader+.mda-list>.mda-list-item:first-child>.mda-list-item-img,
    .card .card-subheader+.mda-list>.mda-list-item:first-child>.mda-list-item-initial {
        margin-top: 10px
    }

    .card .card-divider {
        display: block;
        margin-top: 10px;
        margin-bottom: 10px;
        border: 1px solid rgba(0, 0, 0, .12)
    }

    .card .card-divider+.card-offset {
        margin-top: -10px
    }

    .card>.ui-datepicker,
    .card>.ui-datepicker-responsive>.ui-datepicker {
        width: 100%;
        -webkit-box-shadow: 0 0 0 #000;
        box-shadow: 0 0 0 #000;
        margin: 0
    }

    .card .editable-wrap,
    .card>.ui-datepicker-responsive>.ui-datepicker>table,
    .card>.ui-datepicker>table {
        width: 100%
    }

    .card>.list-group>.list-group-item {
        border-left: 0;
        border-right: 0
    }

    .card>.list-group>.list-group-item:first-child {
        border-top-left-radius: 0;
        border-top-right-radius: 0
    }

    .card>.list-group>.list-group-item:last-child {
        border-bottom-right-radius: 0;
        border-bottom-left-radius: 0;
        border-bottom: 0
    }

    .card>.table,
    .card>.table-responsive>.table {
        margin-bottom: 0
    }

    .card>.table-responsive {
        border: 0
    }

    .card>.btn {
        border-radius: 0;
        width: 100%;
        padding-bottom: 16px;
        text-align: center
    }

    .card>.btn:last-child {
        border-bottom-right-radius: 2px;
        border-bottom-left-radius: 2px
    }

    .card.card-map {
        min-height: 280px
    }

    .modal.modal-left .modal-dialog>.modal-content,
    .modal.modal-right .modal-dialog>.modal-content {
        min-height: 100%
    }

    .card.card-map .card-footer {
        position: absolute;
        bottom: 0;
        left: 0;
        right: 0;
        border: 0;
        background-color: transparent
    }


    .mda-list {
        list-style-type: none;
        margin: 0;
        padding: 0
    }

    .mda-list>.mda-list-item {
        padding: 0 22px
    }

    .mda-list>.mda-list-item:after,
    .mda-list>.mda-list-item:before {
        content: " ";
        display: table
    }

    .mda-list>.mda-list-item>.mda-list-item-icon,
    .mda-list>.mda-list-item>.mda-list-item-img,
    .mda-list>.mda-list-item>.mda-list-item-initial {
        float: left;
        width: 48px;
        height: 48px;
        margin-top: 20px;
        margin-bottom: 8px;
        margin-right: 20px;
        border-radius: 50%
    }

    .mda-list>.mda-list-item>.mda-list-item-icon {
        line-height: 42px;
        text-align: center
    }

    .mda-list>.mda-list-item>.mda-list-item-icon>em,
    .mda-list>.mda-list-item>.mda-list-item-icon>i {
        line-height: inherit
    }

    .mda-list>.mda-list-item>.mda-list-item-initial {
        line-height: 50px;
        text-align: center;
        font-size: 22px;
        font-weight: 300
    }

    .mda-list>.mda-list-item>.mda-list-item-text {
        float: left;
        padding: 20px 0
    }

    .mda-list>.mda-list-item>.mda-list-item-text.mda-2-line {
        padding-top: 26px
    }

    .mda-list>.mda-list-item>.mda-list-item-text h3 {
        font-size: 16px;
        font-weight: 400;
        letter-spacing: .01em;
        margin: 0 0 6px;
        line-height: .75em
    }

    .mda-list>.mda-list-item>.mda-list-item-text h4 {
        font-size: 14px;
        letter-spacing: .01em;
        font-weight: 400;
        margin: 10px 0 5px;
        line-height: .75em
    }

    .mda-list>.mda-list-item>.mda-list-item-text p {
        font-size: 14px;
        font-weight: 500;
        margin: 0;
        line-height: 1.6em
    }

    .mda-list>.mda-list-item>.mda-list-item-img+.mda-list-item-text,
    .mda-list>.mda-list-item>.mda-list-item-initial+.mda-list-item-text {
        width: calc(100% - 68px)
    }

    .mda-list.mda-list-bordered>.mda-list-item {
        border-bottom: 1px solid rgba(162, 162, 162, .16)
    }

    .card>.mda-list-bordered>.mda-list-item:last-child {
        border-bottom: 0
    }

    .media {
        margin-top: 15px
    }

    .media:first-child {
        margin-top: 0
    }

    .media,
    .media-body {
        overflow: hidden;
        zoom: 1
    }

    .media-body {
        width: 10000px
    }

    .media-object.img-thumbnail {
        max-width: none
    }
    .container-overlap+.container-lg, .container-overlap+.container-md, .container-overlap+.container-sm, .container-overlap+.container-xs {
        padding-top: 0;
        margin-top: -32px;
    }
    .media-right,
    .media>.pull-right {
        padding-left: 10px
    }

    .media-left,
    .media>.pull-left {
        padding-right: 10px
    }

    .media-body,
    .media-left,
    .media-right {
        display: table-cell;
        vertical-align: top
    }

    .media-middle {
        vertical-align: middle
    }

    .media-bottom {
        vertical-align: bottom
    }

    .media-heading {
        margin-top: 0;
        margin-bottom: 5px
    }

    .media-list {
        padding-left: 0;
        list-style: none
    }
        </style>
    </head>
    <body>
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet">
    <section class="container ng-scope ng-fadeInLeftShort" style="">
    <!-- uiView:  --><div class="ng-fadeInLeftShort ng-scope" style="">
    <div class="container-overlap bg-blue-500 ng-scope">
    <div class="media m0 pv">
        <div class="media-left"><a href="#">
        
            <div class="fileinput fileinput-new" data-provides="fileinput">
            <form action="{{URL::to('/home/submitProfileImage')}}" method="post" enctype="multipart/form-data">
                                <div class="fileinput-preview thumbnail img-circle" data-trigger="fileinput" style="width: 150px; height: 150px;">
                                    @if(!empty($user->image_path))
                                <img src="{{URL::to('/')}}/{{$user->image_path}}" style="width: 150px; height: 150px;" />
                                    @endif
                                </div>
                                <div>
                                    <span class="btn btn-default btn-file">
                                            {!! csrf_field() !!}

                                    <input type="hidden" name="user_id" value="{{$user->id}}" />
                                    <input type="file" name="profileImage"></span>
                                    <a href="#" class="btn btn-default fileinput-exists" data-dismiss="fileinput">Remove</a>
                                    <button type="submit" class="btn btn-default fileinput-exists">UPLOAD</button>
                                </div>
                            </div>
                        </form>
            
        <div class="media-body media-middle">
        <h4 class="media-heading text-white">{{$user->name}}</h4>
        <span class="text-white"></span>
        </div>
    </div>
    </div>
    <div class="container-fluid ng-scope">
    <div class="row">
        <!-- Left column-->
        <div class="col-md-7 col-lg-8">
        <form class="card ng-pristine ng-valid" action="{{ URL::to('/home/submitProfile') }}" method="post">
            {!! csrf_field() !!}

            <h5 class="card-heading pb0">
                About
            </h5>
            <div class="card-body">
            <p class="ng-scope ng-binding editable">
                <textarea class="form-control" name="about">
                    @if(!empty($user->about))
                        {{$user->about}}
                    @endif
                </textarea>

            </p>
            </div>
            <div class="card-divider"></div>
            <div class="card-offset">
            </div>
            <h5 class="card-heading pb0">Personal Information</h5>
            <div class="card-body">
            <table class="table table-striped">
                <tbody>
                <input type="hidden" name="user_id" value="{{$user->id}}" />
                <tr>
                    <td><em class="ion-egg icon-fw mr"></em>Birthday</td>
                    <td><span class="ng-scope ng-binding editable">
                    <input type="date" name="birthday" value="{{$user->bd}}" class="form-control" />
                    </td>
                </tr>
                
                <tr>
                    <td><em class="ion-man icon-fw mr"></em>Gender</td>
                    <td><span class="ng-scope ng-binding editable"></span>
                    <input type="radio" name="gender" value="Male" @if($user->gender == "Male") {{"checked"}} @endif /> Male
                    <input type="radio" name="gender" value="Female" @if($user->gender == "Female") {{"checked"}} @endif /> Female

                    </td>
                </tr>
                <tr>
                    <td><em class="ion-android-home icon-fw mr"></em>Address</td>
                    <td><span class="ng-scope ng-binding editable"></span>
                    <input class="form-control" placeholder="Enter your Address" type="text" name="address" value="@if(!empty($user->address)) {{$user->address}} @endif" />
                    </td>
                </tr>
                <tr>
                    <td><em class="ion-email icon-fw mr"></em>Email</td>
                <td><span class="ng-scope editable"></span>
                    <input type="email" name="email" value="@if($user->email) {{$user->email}} @endif" class="form-control" />
                    
                </td>
                </tr>
                <tr>
                    <td><em class="ion-ios-telephone icon-fw mr"></em>Contact phone</td>
                    <td><span class="ng-scope ng-binding editable"></span>
                    
                        <input class="form-control" placeholder="Phone Number" type="number" name="phone" value="{{$user->phone}}" />
                    
                        
                    </td>
                </tr>

                <tr>
                        <td>
                            <button type="submit" class="btn btn-primary">Update</button>
                        
                        </td>
                    </tr>
                </tbody>
            </table>
            </form>
            </div>
            <div class="card-divider"></div>
            <form class="card ng-pristine ng-valid" action="{{ URL::to('/home/submitProfileAccount') }}" method="post">
                {!! csrf_field() !!}
            
            <h5 class="card-heading pb0">Account - Change Password</h5>

            <div class="card-body">
            <table class="table table-striped">
                <tbody>
                        <tr>
                                <td><em class="ion-ios-telephone icon-fw mr"></em>Current Password</td>
                                <td><span class="ng-scope ng-binding editable"></span>
                                
                                    <input class="form-control" placeholder="Old Password" type="password" name="oldpassword"/>
                                <input type="hidden" name="user_id" value="{{$user->id}}" />
                                
                                </td>
                            </tr>
                <tr>
                    <td><em class="ion-ios-telephone icon-fw mr"></em>New Password</td>
                    <td><span class="ng-scope ng-binding editable"></span>
                    
                        <input class="form-control" placeholder="Password" type="password" name="password"/>
                    
                    
                    </td>
                </tr>

                <tr>
                        <td><em class="ion-ios-telephone icon-fw mr"></em>Confirm New Password</td>
                        <td><span class="ng-scope ng-binding editable"></span>
                        
                            <input class="form-control" placeholder="Confirm Password" type="password" name="cpassword" />
                        
                        
                        </td>
                    </tr>

                    
                <tr>
                        <td><em class="ion-ios-telephone icon-fw mr"></em></td>
                        <td><span class="ng-scope ng-binding editable"></span>
                        <button type="submit" style="float:right;" class="btn btn-primary">Update Account</button>
                        </td>
                    </tr>
        
            </table>
            
            </div>
            <div class="card-divider"></div>
        </div>
    </tbody>
    </form>
        <!-- Right column-->
        <div class="col-md-5 col-lg-4">
        <div class="card">
            <h5 class="card-heading">
                Contacts
            </h5>
            <div class="mda-list">
            
                    @if(!empty($followers))
                    @foreach($followers as $f)
                    <?php $e = Enterprise::find($f->followed_e_id); ?>
            
            <div class="mda-list-item"><img src="{{$e->logo_path}}" alt="List user" class="mda-list-item-img">
            
            
                <div class="mda-list-item-text mda-2-line">
                <h3><a href="#">{{$f->b_name}}</a></h3>
                <div class="text-muted text-ellipsis">{{$f->b_address}}</div>
                </div>
            

            </div>

            @endforeach
            @endif
            </div>
        </div>
        </div>
    </div>
    </div></div></section>

    <script src="{{URL::to('assets/js/bootstrap.min.js') }}"></script>
    <script src="{{URL::to('assets/js/global-vendors.js') }}"></script>
    <script src="{{URL::to('assets/js/pleasure.js') }}"></script>
    <script src="{{URL::to('assets/js/jasny-bootstrap.min.js') }}"></script>
    <script type="text/javascript">
        $(document).ready(function () {
            Pleasure.init();

        });
        </script>
    </script>

    @if(Session('success'))
    <script>
        alertify.success('{{Session('success')}}');
    </script>
    @endif

    @if(Session('error'))
    <script>
            alertify.error('{{Session('error')}}');
        </script>
    @endif
    </body>
    </html>