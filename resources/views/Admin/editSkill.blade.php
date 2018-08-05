@extends('layouts.adminmasterlayout')
@section('maincontent')
<script src="http://code.jquery.com/jquery-2.0.3.min.js"></script>
                <div class="card" >

                    <div class="header">
                            <h4>Skill : {{$skill->skill_title}}</h4>
                            <p><strong> Created at: </strong> {{$skill->created_at}}</p>
                            <p><strong> Updated at: </strong> {{$skill->updated_at}}</p>
                       </div>

                    
                 <div class="content" >
                     <div class="row"></div>

                     <div class="row">
                       <div class="col-md-1"></div>
                      <div class="col-md-10">

                            {{ Form::open(['url' => 'admin/editskillform', 'method' => 'post']) }}
                            <div class="row">

                                    <h3 style='color:green;'> {{session()->get('msg-success')}}</h3>
                                    <h3 style='color:red;'> {{session()->get('msg-failure')}}</h3>
                               

                                    <div class="col-md-7">
                                        <div class="form-group">
                                            <label>Skill Title</label>
                                            <input type="text" class="form-control border-input" placeholder="Skill Title" value="{{$skill->skill_title}}" name="skill_title" />
                                        </div>
                                    <input type="hidden" name="skill_id" value="{{$skill->skill_id}}"
                                    </div>
                                </div>
                                    <div class="row">
                                            <div class="col-md-7">
                                                <div class="form-group">
                                                    <label>Skill Description</label>
                                                    <textarea rows="10" class="form-control border-input" name="skill_description">{{$skill->skill_description}}</textarea>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                        <div class="col-md-2">
                                        <div class="text-center">
                                                <button type="submit" class="btn btn-info btn-fill btn-wd">Update Skill</button>
                                            </div>
                                            <div class="clearfix"></div>
                                        </div>
                                    </div>
                                    {{Form::close()}}
                         
                     </div>







                </div>
                </div>
@endsection