@extends('layouts.masterlayout')
@section('maincontent')
<link href="{!! URL::asset('css/email-inbox.css') !!}" rel="stylesheet"/>

<div class="row">
<div class="col-md-12">
    
     <div class="panel panel-default atoms-long">
            @if (session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    @if (session('error'))
        <div class="alert alert-danger">
            {{ session('error') }}
        </div>
    @endif
<div class="panel-body">
    <div class="row">
            <div class="email-app">
                    <nav>
                        <ul class="nav">
                            <li class="nav-item">
                            <a class="nav-link" href="{{URL::to('/home/chatwithEnterprise/')}}/{{$from->e_id}}/{{$to->e_id}}"><i class="fa fa-inbox"></i> Inbox <span class="badge badge-danger"></span></a>
                            </li>
                          
                        </ul>
                    </nav>
                    <main>
                        <p class="text-center">New Message</p>
                        {{Form::open(['url' => '/home/sendmsgg', 'method' => 'post'])}}
                       
                            <div class="form-row mb-3">
                                <label for="to" class="col-2 col-sm-1 col-form-label">To:</label>
                                <div class="col-10 col-sm-11">
                                    <input type="email" class="form-control" id="to" placeholder="Type email" value="{{$to->b_name}} : {{$to->email}}" readonly>
                                    <input type="hidden" name="to_e_id" value={{$to->e_id}} />
                                    <input type="hidden" name="from_e_id" value="{{$from->e_id}}" />
                                </div>
                                <label class="col-2 col-sm-1 col-form-label">Subject:</label>
                                <div class="col-10 col-sm-11">
                                <input type="text" class="form-control" name="msg_subject" placeholder="Subject" >
                                </div>
                            </div>
                          
                      
                        <div class="row">
                            <div class="col-sm-12 ml-auto">
                               
                                <div class="form-group mt-4 atoms-form">
                                    <textarea class="form-control" id="message" name="msg_description" rows="12"></textarea>
                                </div>
                                <div class="form-group" style="margin-left: 2%;">
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