@extends('layouts.masterlayout')
@section('maincontent')
<?php use App\Http\Models\Enterprise; ?>

 <div class="panel panel-default" >   
    <div class="header">
        <h4>Users</h4>
        <div class="col-xs-2" style="float:right;">
            <div class="icon-big icon-success text-center">
              
            </div>
        </div> 
    </div>                
    <div class="content" id="changepage" >
        <div class="row">
            <div class="col-md-12" style="" >
                <table class="table table-striped">
                    <thead>
                    	<th>Name</th>
                    	<th>Enterprise</th>
                    	<th>Action</th>
                    </thead>
                    <tbody>
                        @foreach($users as $u)
                        <tr>
                        	
                            <td>{{$u->name}}</td>
                            <?php $e = Enterprise::find($u->e_id); ?>
                        	<td>{{$e->b_name}}</td>
                        
                        	<td><a href="{{URL::to('/home/editUserForm/')}}/{{$u->id}}"><i style="color:green;" class="fa fa-pencil"></i></a> | <a href="#" onclick="deleteUser(this);" back_url="{{URL::to('/home/users')}}" url_to_delete="{{URL::to('/home/deleteUser/')}}/{{$u->id}}" ><i style="color:red;" class="fa fa-trash"></i></a></td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>    
            </div>
        </div>
    </div>
</div>

@endsection