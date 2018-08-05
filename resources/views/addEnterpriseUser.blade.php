@extends('layouts.masterlayout')
@section('maincontent')
 <div class="panel panel-default" >
                        
                                <div class="header">
                                        <h4>Enterprise {{$enterprise->b_name}} users</h4>
                                    <div class="col-xs-2" style="float:right;">
                                        <div class="icon-big icon-success text-center">
                                          <a href="{{ URL::to('/home/adduser/'.$enterprise->e_id )}}" class="btn btn-success"><i class="ti-plus"></i> Add User</a>  
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
                                    	<th>Role</th>
                                    	<th>Action</th>
                                    </thead>
                                    <tbody>
                                      
                                        <tr>
                                        	
                                        	<td>Okechukwu Thomas</td>
                                        	<td>Enterprise one</td>
                                        	<td>Role 1</td>
                                        	<td><i class="fa fa-pencil"></i> | <i class="fa fa-trash"></i></td>
                                        </tr>

                                           <tr>
                                        	
                                        	<td>Okechukwu Thomas</td>
                                        	<td>Enterprise two</td>
                                        	<td>Role 3</td>
                                        	<td><i class="fa fa-pencil"></i> | <i class="fa fa-trash"></i></td>
                                        </tr>
                                    </tbody>
                                </table>

                                                         
                                                        </div>
                                            </div>
                                     
                            </div>
                            </div>

@endsection