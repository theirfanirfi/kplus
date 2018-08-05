@extends('layouts.adminmasterlayout')
@section('maincontent')
<script src="http://code.jquery.com/jquery-2.0.3.min.js"></script>
                <div class="card" >

                    <div class="header">
                            <h4>Add New Business Idea</h4>
                       </div>

                    
                 <div class="content" >
                     <div class="row"></div>

                     <div class="row">
                       <div class="col-md-1"></div>
                      <div class="col-md-10">
                            <h3 style='color:green;'> {{session()->get('msg-success')}}</h3>
                            <h3 style='color:red;'> {{session()->get('msg-failure')}}</h3>
                       
                        {{ Form::open(['url' => 'admin/addideaForm', 'method' => 'post']) }}
                            <div class="row">
                                    <div class="col-md-7">
                                        <div class="form-group">
                                            <label>Business Idea Title</label>
                                            <input type="text" class="form-control border-input" placeholder="Business Idea Title" name="idea_title" />
                                        </div>
                                    </div>
                                </div>
                                    <div class="row">
                                            <div class="col-md-7">
                                                <div class="form-group">
                                                    <label>Business Idea Description</label>
                                                    <textarea rows="10" class="form-control border-input" name="idea_description"></textarea>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row">
                                                <div class="col-md-7">
                                                    <div class="form-group">
                                                        <label>Select Skill</label>
                                                        <Select name="skill_id" class="form-control border-input">
                                                            <option>Select Skill</option>
                                                            @foreach($skills as $skill)
                                                            <option value="{{$skill->skill_id}}">{{$skill->skill_title}}</option>
                                                            @endforeach
                                                        </Select>
                                                    </div>
                                                </div>
                                            </div>

                                        <div class="row">
                                        <div class="col-md-2">
                                        <div class="text-center">
                                                <button type="submit" class="btn btn-info btn-fill btn-wd">Add Business Idea</button>
                                            </div>
                                            <div class="clearfix"></div>
                                        </div>
                                    </div>
                                {{Form::close() }}
                         
                     </div>







                </div>
                </div>
@endsection