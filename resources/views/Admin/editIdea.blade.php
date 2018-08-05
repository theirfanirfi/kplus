@extends('layouts.adminmasterlayout')
@section('maincontent')
<script src="http://code.jquery.com/jquery-2.0.3.min.js"></script>
                <div class="card" >

                    <div class="header">
                            <h4>Business Idea : {{$idea->pb_title}}</h4>
                            <p><strong>Created at: </strong> {{$idea->created_at}}</p>
                            <p><strong>Modified at: </strong> {{$idea->updated_at}}</p>
                       </div>

                    
                 <div class="content" >
                     <div class="row"></div>

                     <div class="row">
                       <div class="col-md-1"></div>
                      <div class="col-md-10">
                            <h3 style='color:green;'> {{session()->get('msg-success')}}</h3>
                            <h3 style='color:red;'> {{session()->get('msg-failure')}}</h3>
                       
                        {{ Form::open(['url' => 'admin/editideaForm', 'method' => 'post']) }}
                            <div class="row">
                                    <div class="col-md-7">
                                        <div class="form-group">
                                            <label>Business Idea Title</label>
                                            <input type="text" class="form-control border-input" placeholder="Business Idea Title" name="idea_title" value="{{$idea->pb_title}}" />
                                            <input type="hidden" name="pb_id" value="{{$idea->pb_id}}" />
                                        </div>
                                    </div>
                                </div>
                                    <div class="row">
                                            <div class="col-md-7">
                                                <div class="form-group">
                                                    <label>Business Idea Description</label>
                                                    <textarea rows="10" class="form-control border-input" name="idea_description">{{$idea->pb_description}}</textarea>
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
                                                            <option value="{{$skill->skill_id}}" <?php echo $idea->skill_id == $skill->skill_id ? "selected" : ""; ?>>{{$skill->skill_title}}</option>
                                                            @endforeach
                                                        </Select>
                                                    </div>
                                                </div>
                                            </div>

                                        <div class="row">
                                        <div class="col-md-2">
                                        <div class="text-center">
                                                <button type="submit" class="btn btn-info btn-fill btn-wd">Update Business Idea</button>
                                            </div>
                                            <div class="clearfix"></div>
                                        </div>
                                    </div>
                                {{Form::close() }}
                         
                     </div>







                </div>
                </div>
@endsection