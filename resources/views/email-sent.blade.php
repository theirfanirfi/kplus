@extends('layouts.masterlayout')
<?php 
use App\Http\Models\Enterprise;
 ?>
@section('maincontent')
<link href="{!! URL::asset('css/email-inbox.css') !!}" rel="stylesheet"/>

<div class="row">
<div class="col-md-12">
     <div class="card">
        
                            <div class="content">
                                <div class="row">
                               
                                        <div class="email-app mb-4">
                                                <nav>
                                                    <a href="{{URL::to('/home/composemsg/')}}/{{$sender_e_id}}/{{$reciever_e_id}}" class="btn btn-danger btn-block">New Message</a>
                                                    <ul class="nav">
                                                        <li class="nav-item">
                                                            <a class="nav-link" href="{{URL::to('/home/chatwithEnterprise/')}}/{{$reciever_e_id}}/{{$sender_e_id}}"><i class="fa fa-inbox"></i> Inbox @if($count != "0") <span class="badge badge-danger"></span> @endif </a>
                                                        </li>
                                                     
                                                        <li class="nav-item">
                                                            <a class="nav-link" href="#"><i class="fa fa-rocket"></i> Sent <span class="btn-link"></span></a>
                                                        </li>
                                                        
                                                       
                                                    </ul>
                                                </nav>
                                                <main class="inbox">
                                                    
                                            
                                                    <ul class="messages">
                                                        @foreach($msgs as $m)
                                                        <li class="message">
                                                            <a href="{{URL::to('/home/singlemsg/')}}/{{$m->msg_id}}/{{$m->sender_e_id}}/{{$m->reciever_e_id}}">
                                                                <div class="actions">
                                                                    <span class="action"><i class="fa fa-square-o"></i></span>
                                                                    <span class="action"><i class="fa fa-star-o"></i></span>
                                                                </div>
                                                                <div class="header">
                                                                    <?php $e = Enterprise::find($m->sender_e_id); ?>
                                                                    <span class="from">{{$e->b_name}}</span>
                                                                    <span class="date">
                                                                    <span class="fa fa-paper-clip"></span>{{$m->created_at}}</span>
                                                                </div>
                                                                <div class="title">
                                                                        {{$m->msg_subject}}
                                                                </div>
                                                                <div class="description">
                                                                    <?php echo substr($m->msg_description,0,200); ?>
                                                                </div>
                                                            </a>
                                                        </li>

                                                        @endforeach
                                                        
                                                        </ul>
                                                </main>
                                            </div>
                                            
                                    
                                </div>
                                
                            </div>
                        </div>
</div>
    
    
</div>



@endsection