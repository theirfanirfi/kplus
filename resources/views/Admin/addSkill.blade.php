@extends('layouts.adminmasterlayout')
@section('maincontent')
<script src="http://code.jquery.com/jquery-2.0.3.min.js"></script>
                <div class="card" >

                    <div class="header">
                            <h4>Add New Skill</h4>
                       </div>

                    
                 <div class="content" >
                     <div class="row"></div>

                     <div class="row">
                       <div class="col-md-1"></div>
                      <div class="col-md-10">
                            <h3 style='color:green;'> {{session()->get('msg-success')}}</h3>
                            <h3 style='color:red;'> {{session()->get('msg-failure')}}</h3>
                       
                        {{ Form::open(['url' => 'admin/addskillForm', 'method' => 'post']) }}
                            <div class="row">
                                    <div class="col-md-7">
                                        <div class="form-group">
                                            <label>Skill Title</label>
                                            <input type="text" class="form-control border-input" placeholder="Skill Title" name="skill_title" />
                                        </div>
                                    </div>
                                </div>
                                    <div class="row">
                                            <div class="col-md-7">
                                                <div class="form-group">
                                                    <label>Skill Description</label>
                                                    <textarea rows="10" class="form-control border-input" name="skill_description"></textarea>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                        <div class="col-md-2">
                                        <div class="text-center">
                                                <button type="submit" class="btn btn-info btn-fill btn-wd">Add Skill</button>
                                            </div>
                                            <div class="clearfix"></div>
                                        </div>
                                    </div>
                                {{Form::close() }}
                         
                     </div>







                </div>
                </div>
@endsection