@extends('layouts.masterlayout')
@section('maincontent')
<?php
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Models\Enterprise;
use App\Http\Models\EnterpriseUser;
use App\Http\Models\EnterpriseContact;
use App\Http\Models\Skill;
use App\Http\Models\PBIdea;
use App\Http\Models\DocTypes;
use App\Http\Models\Documents;
use App\Http\Models\SubDocs;
use App\Http\Models\EnterpriseMessage;
use App\Http\Models\Follow;
use App\User; ?>
<link href="{!! URL::asset('css/email-inbox.css') !!}" rel="stylesheet"/>

<div class="row">
<div class="col-md-12">
     <div class="card">
        
                            <div class="content">
                                <div class="row">
                                        <div class="email-app mb-4">
                                                <nav>
                                                  <a href="{{URL::to('/home/composemsg/')}}/{{$msg->reciever_e_id}}/{{$msg->sender_e_id}}" class="btn btn-danger btn-block">New Message</a>
                                                  <ul class="nav">
                                                    <li class="nav-item">
                                                      <a class="nav-link" href="{{URL::to('/home/chatwithEnterprise/')}}/{{$msg->reciever_e_id}}/{{$msg->sender_e_id}}"><i class="fa fa-inbox"></i> Inbox @if($count > 0) <span class="badge badge-danger"></span> @endif</a>
                                                    </li>
                                             
                                                    <li class="nav-item">
                                                    <a class="nav-link" href="{{URL::to('home/enterpriseSentMsgs')}}/{{$msg->sender_e_id}}/{{$msg->reciever_e_id}}"><i class="fa fa-rocket"></i>Sent &nbsp; &nbsp; {{$sentcount}}</a>
                                                    </li>
                    
                                                  </ul>
                                                </nav>
                                                <main class="message">
                                                  <div class="toolbar">
                                                
                                                    
                                                    <button type="button" class="btn btn-light" onclick="deleteMsg(this);" url="{{URL::to('/home/deleteMsg/')}}/{{$msg->msg_id}}"  back_url="{{URL::to('/home/chatwithEnterprise/')}}/{{$msg->reciever_e_id}}/{{$msg->sender_e_id}}">
                                                      <span class="fa fa-trash-o"></span>
                                                    </button>
                                                    
                                                  </div>
                                                  <div class="details">
                                                    <div class="title">{{$msg->msg_subject}}</div>
                                                    <div class="header">
                                                      <img class="avatar" src="{{URL::to('/')}}/{{$enterprise->logo_path}}">
                                                      <div class="from">
                                                        <span>{{$enterprise->b_name}}</span>
                                                       {{$enterprise->email}}
                                                      </div>
                                                      <div class="date">{{$msg->created_at}}</div>
                                                    </div>
                                                    <div class="content" style="margin-bottom:12px;">
                                                      <?php echo $msg->msg_description; ?>
                                                    </div>

                                                    <?php $reply = EnterpriseMessage::where('in_reply','=',$msg->msg_id)->get(); 
                                                     ?>
                                                    @if($reply->count() > 0)
                                                    @foreach ($reply as $r )
                                                    <?php $en = Enterprise::find($r->sender_e_id);
                                                     ?>  

                                                    <div class="header">
                                                      
                                                      <img class="avatar" src="{{URL::to('/')}}/{{$en->logo_path}}">
                                                      <div class="from">
                                                        <span>{{$en->b_name}} Replied</span>
                                                      {{$en->email}}
                                                      </div>
                                                      <div class="date">{{$r->created_at}}</div>
                                                    </div>
                                                    <div class="content" style="margin-bottom:12px;">
                                                      <?php echo $r->msg_description; ?>
                                                    </div>
                                                       
                                                   
                                                    <?php $reply2 = EnterpriseMessage::where('in_reply','=',$r->msg_id)->get(); 
                                                     ?> 
                                                     @if($reply2->count() > 0)
                                                      @foreach ($reply2 as  $rr)
                                                      <?php $enn = Enterprise::find($rr->sender_e_id);
                                                      ?>  
 
                                                     <div class="header">
                                                       <img class="avatar" src="{{URL::to('/')}}/{{$enn->logo_path}}">
                                                       <div class="from">
                                                         <span>{{$enn->b_name}} Replied</span>
                                                       {{$enn->email}}
                                                       </div>
                                                       <div class="date">{{$rr->created_at}}</div>
                                                     </div>
                                                     <div class="content" style="margin-bottom:12px;">
                                                       <?php echo $rr->msg_description; ?>
                                                     </div>
                                                      @endforeach

                                                     @endif

                                                        
                                                    @endforeach

                                                    @endif
                                                    {{Form::open(['url' => '/home/sendmsg', 'method' => 'post'])}}
                                                   
                                                    <div class="form-row mb-3">
                                                        <div class="col-10 col-sm-11">
                                                           <input type="hidden" name="to_e_id" value="{{$msg->sender_e_id}}" />
                                                            <input type="hidden" name="from_e_id" value="{{$msg->reciever_e_id}}" />
                                                            <input type="hidden" name="msg_subject" value="{{$msg->msg_subject}}" />
                                                            <input type="hidden" name="in_reply" value={{$msg->msg_id}} />
                                                            <input type="hidden" name="msg_id" value={{$msg->msg_id}} />
                                                        </div>
                                              
                                                    </div>
                                                  
                                              
                                                <div class="row">
                                                    <div class="col-sm-11 ml-auto">
                                                       
                                                        <div class="form-group mt-4">
                                                            <textarea class="form-control" id="message" name="msg_description" rows="12" placeholder="Click here to reply"></textarea>
                                                        </div>
                                                        <div class="form-group">
                                                            <button type="submit" class="btn btn-success">Send</button>
                                                            
                                                        </div>
                                                    {{Form::close()}}
                                                    </div>
                                                  </div>
                                                </main>
                                              </div>
                                            
                               </div>
                                
                            </div>
                        </div>
</div>
    
    
</div>



@endsection