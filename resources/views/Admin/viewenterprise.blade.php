@extends('layouts.adminmasterlayout')

@section('maincontent')
<!-- BEGIN CORE CSS -->
<link rel="stylesheet" href="{{ URL::asset('css/jasny-bootstrap.min.css') }}">
<link rel="stylesheet" href="{{ URL::asset('css/jquery.dataTables.min.css') }}">
    <link rel="stylesheet" href="{{ URL::asset('css/dataTables.bootstrap.css') }}">
    <link rel="stylesheet" href="http://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css" />



<!-- END CORE CSS -->

<!-- BEGIN PLUGINS CSS -->
<link rel="stylesheet" href="{{ URL::asset('css/plugins.css') }}">

<link rel="stylesheet" href="{{ URL::asset('css/alertify.bootstrap.css') }}">
<link rel="stylesheet" href="{{ URL::asset('css/alertify.core.css') }}">
<link rel="stylesheet" href="{{ URL::asset('css/alertify.default.css') }}">


<!-- END PLUGINS CSS -->

<!-- BEGIN SHORTCUT AND TOUCH ICONS -->

<!-- END SHORTCUT AND TOUCH ICONS -->

<script src="{{ URL::asset('js/modernizr.min.js') }}"></script>
<script src="{{ URL::asset('js/angular.min.js') }}"></script>
<script src="{{ URL::asset('js/myscript.js') }}"></script>

	<div class="content">

		
		<!-- content -->
		<div class="row">
		<div class="col-md-12">
			<div class="panel">
				<div class="panel-heading">
					<div class="panel-title">
          <h4>{{ $enterprise->b_name }}</h4>
          <h5>Address: {{ $enterprise->b_address }}</h5>
          <h5>Country: {{ $enterprise->country }}</h5>
          <h5>Region/State: {{ $enterprise->region_state }}</h5>
          </div>
				</div><!--.panel-heading-->
				<div class="panel-body">
                    <h3>Users</h3>
        <div class="overflow-table">
					<table class="table table-responsive display datatables-basic">
						<thead>
							<tr>
								<th>Full Name</th>
								<th>gender</th>
								<th>email</th>
								<th>phone</th>
								<th>FB URL</th>
								<th>Twitter URL</th>								
								<th>Instagram URL</th>
								<th>Created on</th>
								<th>Action</th>

								
							</tr>
						</thead>

						<tfoot>
							<tr>
                                    <th>Full Name</th>
                                    <th>gender</th>
                                    <th>email</th>
                                    <th>phone</th>
                                    <th>FB URL</th>
                                    <th>Twitter URL</th>								
                                    <th>Instagram URL</th>
                                    <th>Created on</th>
                                    <th>Action</th>
                                
                                    

							</tr>
						</tfoot>

						<tbody>
						@if(!empty($users))
							@foreach($users as $u)
							<tr>
							<td>{{  $u->e_firstname}} {{ $u->e_lastname }}</td>
								<td>{{ $u->e_user_gender }}</td>
								<td>{{$u->e_user_email}}</td>
								<td>{{ $u->_user_phone }}</td>
                                <td><a href="{{ $u->e_user_fb}}">Facebook</a></td>
							<td><a href="{{ $u->e_user_twitter }}">Twitter</a></td>
								<td> 
                                    <a href="{{ $u->e_user_instagram }}">Instagram</a>
                                </td>
								
								<td><?php echo substr($u->created_at,0,10); ?></td>
								<td>

				<a href="{{URL::to('/admin/deleteEnterpriseUser')}}/{{$u->e_user_id}}" class="btn btn-deep-orange btn-ripple">Delete</a>
								</td>
							</tr>
						@endforeach
						@endif


						</tbody>
					</table>
					</div><!--.overflow-table-->



<br/>
<br/>



                    <h3>Contacts</h3>
                    <div class="overflow-table">
                                <table class="table table-responsive display datatables-basic">
                                    <thead>
                                        <tr>
                                            <th>Full Name</th>
                                            <th>Company</th>
                                            <th>gender</th>
                                            <th>email</th>
                                            <th>phone</th>
                                            <th>FB URL</th>
                                            <th>Twitter URL</th>								
                                            <th>Instagram URL</th>
                                            <th>Created on</th>
                                            <th>Action</th>
            
                                            
                                        </tr>
                                    </thead>
            
                                    <tfoot>
                                        <tr>
                                                <th>Full Name</th>
                                                <th>Company</th>
                                                <th>gender</th>
                                                <th>email</th>
                                                <th>phone</th>
                                                <th>FB URL</th>
                                                <th>Twitter URL</th>								
                                                <th>Instagram URL</th>
                                                <th>Created on</th>
                                                <th>Action</th>
                                                
            
                                        </tr>
                                    </tfoot>
            
                                    <tbody>
                                    @if(!empty($contacts))
                                        @foreach($contacts as $c)
                                        <tr>
                                        <td>{{  $c->firstname}} {{ $c->lastname }}</td>
                                            <td>{{ $c->gender }}</td>
                                            <td>{{ $c->company }}</td>
                                            <td>{{$c->email}}</td>
                                            <td>{{ $c->phone }}</td>
                                            <td><a href="{{ $c->fb}}">Facebook</a></td>
                                        <td><a href="{{ $c->twitter }}">Twitter</a></td>
                                            <td> 
                                                <a href="{{ $c->instagram }}">Instagram</a>
                                            </td>
                                            
                                            <td><?php echo substr($c->created_at,0,10); ?></td>
                                            <td>
            
                            <a href="{{URL::to('/admin/deleteEnterpriseContact')}}/{{$c->contact_id}}" class="btn btn-deep-orange btn-ripple">Delete</a>
                                            </td>
                                        </tr>
                                    @endforeach
                                    @endif
            
            
                                    </tbody>
                                </table>
                                </div><!--.overflow-table-->
            

                                <br/>
<br/>



                    <h3>Document Types</h3>
                    <div class="overflow-table">
                            <table class="table table-responsive display datatables-basic">
                                <thead>
                                    <tr>
                                        <th>Title</th>
                                        <th>Description</th>
                                        <th>Total Sub Docs</th>
                                     
                                        <th>Action</th>
        
                                    
                                    </tr>
                                </thead>
        
                                <tfoot>
                                    <tr>
                                            <th>Title</th>
                                            <th>Description</th>
                                            <th>Total Sub Docs</th>
                                           
                                            <th>Action</th>
        
                                    </tr>
                                </tfoot>
        
                                <tbody>
                                @if(!empty($docs))
                                    @foreach($docs as $d)
                                    <tr>
                                    <td id="title{{$d->dt_id}}">{{$d->dt_title}}</td>
                                        
                                        <td id="desc{{$d->dt_id}}"><?php echo substr($d->dt_description,0,50); ?></td>
                                        
                                        
                                    <td>{{$d->returnCount()}}</td>
             
                                        <td>
                                        <a href="{{URL::to('/admin/viewSubDocs')}}/{{$d->dt_id}}" class="btn btn-primary">View Sub Docs</a>
                                        
                                        <a href="{{URL::to('/admin/deleteDocType')}}/{{$d->dt_id}}" class="btn btn-danger">Delete</a>
                                        </td>
                                    </tr>
                                @endforeach
                                @endif
        
        
                                </tbody>
                            </table>
                            </div><!--.overflow-table-->
        
				</div><!--.panel-body-->
			</div><!--.panel-->
		</div><!--.col-md-12-->
	</div><!--.row-->


		<!-- content -->

	</div><!--.content-->

	<!-- BEGIN GLOBAL AND THEME VENDORS -->
	<script src="{{ URL::asset('js/global-vendors.js') }}"></script>
	<!-- END GLOBAL AND THEME VENDORS -->

	<!-- BEGIN PLUGINS AREA -->
	<!-- END PLUGINS AREA -->

	<!-- PLUGINS INITIALIZATION AND SETTINGS -->
	<!-- END PLUGINS INITIALIZATION AND SETTINGS -->

	<!-- PLEASURE -->
	<script src="{{ URL::asset('js/pleasure.js') }}"></script>	<script src="{{ URL::asset('js/jasny-bootstrap.min.js') }}"></script>	<script src="{{ URL::asset('js/pleasure.js') }}"></script>


	<!-- ADMIN 1 -->
	<script src="{{ URL::asset('js/layout.js') }}"></script>
	<script src="{{ URL::asset('js/alertify.min.js') }}"></script>
	<script src="{{ URL::asset('js/jquery.dataTables.min.js') }}"></script>
	<script src="{{ URL::asset('js/dataTables.bootstrap.js') }}"></script>
	<script src="{{ URL::asset('js/tables-datatables.js') }}"></script>

	<!-- BEGIN INITIALIZATION-->
	<script>


	$(document).ready(function () {
		Pleasure.init();
		Layout.init();
		TablesDataTables.init();
	});
	</script>
@endsection
