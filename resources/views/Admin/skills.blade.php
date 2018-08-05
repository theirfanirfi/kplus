@extends('layouts.adminmasterlayout')
@section('maincontent')
<script src="http://code.jquery.com/jquery-2.0.3.min.js"></script>
                <div class="card" >

                    <div class="header">
                            <h4>Skills</h4>
                       </div>

                    
                 <div class="content" >
                     <div class="row">
                       <div class="col-md-1">
                         <a style="clear:both;float:left;margin:12px 2px;" href="{{URL::to('/admin/addskill')}}" class="btn btn-secondary">Add Skill</a>
                       </div>
                     </div>

                     <div class="row">
                       <div class="col-md-1"></div>
                      <div class="col-md-10">
                             <table class="table">
                                <th>Title</th>
                                <th>Description</th>
                                <th>Edit | Delete</th>
                                @foreach($skills as $s)
                                <tr>
                                  
                                    <td>
                                        <a href="#" class="skilltitle" data-placement="right" data-type="text" url_to="{{URL::to('/admin/updateSkillTitle')}}" skill_id="{{$s->skill_id}}" data-title="Enter Skill Title">{{$s->skill_title}} </a>
                                      </td>
                                      
                                    <td>
                                        <a href="#" class="skilldesc" data-placement="bottom" data-type="textarea" url_to="{{URL::to('/admin/updateSkilldesc')}}" skill_id="{{$s->skill_id}}" data-title="Enter Skill Description">{{ substr($s->skill_description,0,100)}} </a>
                                      </td>
                                    <td><a href="{{URL::to('/admin/editSkill/')}}/{{$s->skill_id}}" class="fa fa-pencil" style="color:green;"></a> &nbsp; | <a href="{{URL::to('/admin/editSkill/')}}/{{$s->skill_id}}" class="fa fa-trash" style="color:red;"></a></td>
                                </tr>
                                @endforeach
                             </table>
                         </div>
                     </div>







                </div>
                </div>


                <div class="modal fade" tabindex="-1" role="dialog">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title">Modal title</h4>
      </div>
      <div class="modal-body">
        <p>One fine body&hellip;</p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->

@endsection