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

	<div class="content">

		
		<!-- content -->
		<div class="row">
		<div class="col-md-12">
			<div class="panel">
				<div class="panel-heading">
					<div class="panel-title">
                        <h1>Document: {{$sub->sd_title}}</h1>
          </div>
				</div><!--.panel-heading-->
				<div class="panel-body">
        <div class="overflow-table">
					<table class="table table-responsive display datatables-basic">
						<thead>
							<tr>
									<th>Title</th>
                                  
                                    <th>Action</th>

								
							</tr>
						</thead>

						<tfoot>
							<tr>
                                    <th>Title</th>
                                    <th>Action</th>

							</tr>
						</tfoot>

						<tbody>
						@if(!empty($docs))
							@foreach($docs as $d)
							<tr>
                            <td><a href="{{ URL::to('/admin/enterpriseviewdocs') }}/{{ $d->d_id }}">{{$d->d_title}}</a></td>
		

								<td>                                
									<a href="{{URL::to('/admin/deleteSubDocDoc')}}/{{$d->d_id}}" class="btn btn-danger">Delete</a>
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
