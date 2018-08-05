    @extends('layouts.masterlayout')
    @section('maincontent')
    <section class="panel panel-default atoms-long">
    <!-- uiView:  -->
    <div class="panel-body">
    <div class="container-overlap bg-blue-500 ng-scope">
    
        
        <div class="fileinput fileinput-new atoms-flex" data-provides="fileinput">
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
            </form>
        </div>
            
        <div class="media-body media-middle">
        <h4 class="media-heading text-black">{{$user->name}}</h4>
        <span class="text-black"></span>
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
             
                    @if(!empty($user->about))
                        {{$user->about}}
                    @endif
               

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
                    {{$user->bd}}
                    </td>
                </tr>
                
                <tr>
                    <td><em class="ion-man icon-fw mr"></em>Gender</td>
                    <td>{{$user->gender}}
                    </td>
                </tr>
                <tr>
                    <td><em class="ion-android-home icon-fw mr"></em>Address</td>
                    <td><span class="ng-scope ng-binding editable"></span>
                    {{$user->address}}
                    </td>
                </tr>
                <tr>
                    <td><em class="ion-email icon-fw mr"></em>Email</td>
                <td><span class="ng-scope editable"></span>
                    {{$user->email}}
                    
                </td>
                </tr>
                <tr>
                    <td><em class="ion-ios-telephone icon-fw mr"></em>Contact phone</td>
                    <td><span class="ng-scope ng-binding editable"></span>
                    {{$user->phone}}
                    
                        
                    </td>
                </tr>
                </tbody>
            </table>
            </form>
            </div>
            <div class="card-divider"></div>
            <form class="card ng-pristine ng-valid">
            
           <div class="card-body">
            <table class="table table-striped">
                <tbody>
                     
                </tbody>
            </table>
            
            </div>
            <div class="card-divider"></div>
        </div>
    
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
    </div>
</div>
</section>

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
    @endsection