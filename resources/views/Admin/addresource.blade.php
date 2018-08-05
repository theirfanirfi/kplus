@extends('layouts.adminmasterlayout')
@section('maincontent')
<script src="http://code.jquery.com/jquery-2.0.3.min.js"></script>
                <div class="card" >

                    <div class="header">
                            <h4>Add New Learning Resource</h4>
                       </div>

                    
                 <div class="content" >
                     <div class="row"></div>

                     <div class="row">
                       <div class="col-md-1"></div>
                      <div class="col-md-10">
                            <h3 style='color:green;'> {{session()->get('msg-success')}}</h3>
                            <h3 style='color:red;'> {{session()->get('msg-failure')}}</h3>
                       
                        {{ Form::open(['url' => 'admin/submitResource', 'method' => 'post']) }}
                            <div class="row">
                                    <div class="col-md-7">
                                        <div class="form-group">
                                            <label>Title</label>
                                            <input type="text" class="form-control border-input" placeholder="Resource Title" name="r_title" required />
                                        </div>
                                    </div>
                                </div>
                                    <div class="row">
                                            <div class="col-md-7">
                                                <div class="form-group">
                                                    <label>Description</label>
                                                    <textarea rows="10" class="form-control border-input" name="r_description"></textarea>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                        <div class="col-md-2">
                                        <div class="text-center">
                                                <button type="submit" class="btn btn-info btn-fill btn-wd">Add Resource</button>
                                            </div>
                                            <div class="clearfix"></div>
                                        </div>
                                    </div>
                                {{Form::close() }}
                         
                     </div>







                </div>
                </div>
@endsection