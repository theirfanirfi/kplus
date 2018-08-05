@extends('layouts.adminmasterlayout')
@section('maincontent')
<?php use App\Http\Models\Skill; ?>
<script src="http://code.jquery.com/jquery-2.0.3.min.js"></script>
                <div class="card" >

                    <div class="header">
                            <h4>Preferred Business Ideas</h4>
                       </div>

                    
                 <div class="content" >
                     <div class="row">
                       <div class="col-md-1">
                         <a style="clear:both;float:left;margin:12px 2px;" href="{{URL::to('/admin/addidea')}}" class="btn btn-secondary">Add Business Idea</a>
                       </div>
                     </div>

                     <div class="row">
                       <div class="col-md-1"></div>
                      <div class="col-md-10">
                             <table class="table">
                                <th>Title</th>
                                <th>Description</th>
                                <th>Belong to Skill</th>
                                <th>Edit | Delete</th>
                                @foreach($ideas as $i)
                                <tr>
                                  
                                    <td>
                                        {{$i->pb_title}}
                                      </td>
                                      
                                    <td>{{ substr($i->pb_description,0,100)}} </td>
                                      <td>
                                        <?php $skill = Skill::find($i->skill_id); ?>  
                                        {{$skill->skill_title}}</td>
                                    <td><a href="{{URL::to('/admin/editPidea/')}}/{{$i->pb_id}}"  class="fa fa-pencil" style="color:green;"></a> &nbsp; | <a href="#" onclick="return false;" back_url="{{URL::to('/admin/bidea/')}}" url_to="{{URL::to('/admin/deleteIdea/')}}/{{$i->pb_id}}" class="fa fa-trash deleteIdea" style="color:red;"></a></td>
                                </tr>
                                @endforeach
                             </table>
                         </div>
                     </div>







                </div>
                </div>

@endsection