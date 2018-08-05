@extends('layouts.masterlayout')
@section('maincontent')
<div class="row">
<div class="col-md-12">
     <div class="panel panel-default atoms-long">
         <div class="header atoms-header">

            @if(Session('superEnterpriseUser') == 1)             
             
             <div class="col-xs-1" style="float:right;">
                <div class="icon-big icon-success text-center">
                    <a back_url="{{URL::to('/home/MyEnterprises')}}" url_to_delete="{{URL::to('/home/dEnterprise/')}}/{{$enterprise->e_id}}"  onclick="deleteEnterprise(this);" href="#">
                        <i class="ti-trash atoms-ti-top" style="color:red;"></i></a>
                </div>
            </div> 

            @endif

             @if(Session('superEnterpriseUser') == 1)   
            <div class="col-xs-1" style="float:right;">
                <div class="icon-big icon-success text-center">
                    <a onclick="showPrintModal(this);" e_id="{{$enterprise->e_id}}" href="#">
                    <i class="ti-printer atoms-ti-top"></i>
                    </a>
                </div>
            </div>
            @endif

            @if(Session('superEnterpriseUser') == 1)   
            <div class="col-xs-1" style="float:right;">
                <div class="icon-big icon-success text-center">
                    <a href="{{URL::to('/preview/enterprise/')}}/{{$enterprise->e_id}}">
                    <i style="color:green;" class="ti-eye atoms-ti-top"></i>
                    </a>
                </div>
            </div> 
                @endif
             
             
              
            <h3 style="text-transform: uppercase;">{{ $enterprise->b_name }} | {{$enterprise->p_b_idea}}</h3>
            <p style="text-transform: uppercase; font-size: 16px; font-weight: 100; margin-top: -10px;">{{$enterprise->b_address}}</p>
        </div>
        <div class="content">
               <div class="footer">
                <hr />
                <div class="stats">
                    <i class="ti-calendar"></i> Created at: {{ substr($enterprise->created_at,0,10) }}
                </div>
            </div>
        </div>
    </div>
</div>
    
    
</div>
@if(Session('up') == 1 || Session('superEnterpriseUser') == 1)
  <a href="{{ URL::to('/home/addEnterpriseUser/'.$enterprise->e_id) }}  ">
    @else
    <a href="#" onclick="nop();">
        @endif
    <div class="col-lg-4 col-sm-6">
        <div class="panel panel-default">
            <div class="panel-body atoms-docs">
                <div class="row">
                    <div class="col-xs-4">
                        <div class="icon-big icon-success text-center">
                            <i class="fa fa-users atoms-ti-docs"></i>
                        </div>
                    </div>
                    <div class="col-xs-8">
                        <div class="numbers">
                            <p>Enterprise   {{ $enterprise->b_name }}</p>
                            Users
                        </div>
                    </div>
                </div>
                <div class="footer">
                    <hr />
                    <div class="stats">
                        <i class="ti-calendar"></i> Total Users: {{ $countusers }}
                    </div>
                </div>
            </div>
        </div>
    </div></a>


@if(Session('cp') == 1 || Session('superEnterpriseUser') == 1)

  <a href="{{ URL::to('/home/enterpriseContacts/'.$enterprise->e_id) }}  ">
   @else
   <a href="#" onclick="nop();">
   
   @endif 
    <div class="col-lg-4 col-sm-6">
        <div class="panel panel-default">
            <div class="panel-body atoms-docs">
                <div class="row">
                    <div class="col-xs-4">
                        <div class="icon-big icon-success text-center">
                            <i class="fa fa-columns atoms-ti-docs"></i>
                        </div>
                    </div>
                    <div class="col-xs-8">
                        <div class="numbers">
                            <p>Enterprise   {{ $enterprise->b_name }}</p>
                            Contacts
                        </div>
                    </div>
                </div>
                <div class="footer">
                    <hr />
                    <div class="stats">
                        <i class="ti-calendar"></i> Total Contacts: {{ $countcontacts }}
                    </div>
                </div>
            </div>
        </div>
    </div></a>


<a href="#" onclick="message(this);"><div class="col-lg-4 col-sm-6">
        <div class="panel panel-default">
            <div class="panel-body atoms-docs">
                <div class="row">
                    <div class="col-xs-4">
                        <div class="icon-big icon-success text-center">
                            <i class="fa fa-envelope-o atoms-ti-docs"></i>
                        </div>
                    </div>
                    <div class="col-xs-8">
                        <div class="numbers">
                            <p>Enterprise   {{ $enterprise->b_name }}</p>
                            Message
                        </div>
                    </div>
                </div>
                <div class="footer">
                    <hr />
                    <div class="stats">
                        
                    </div>
                </div>
            </div>
        </div>
    </div></a>


{{-- <a href="{{ URL::to('/home/enterpriseusers/'.$enterprise->e_id) }}  "><div class="col-lg-4 col-sm-6">
        <div class="panel panel-default">
            <div class="panel-body atoms-card">
                <div class="row">
                    <div class="col-xs-5">
                        <div class="icon-big icon-success text-center">
                            <i class="ti-agenda"></i>
                        </div>
                    </div>
                    <div class="col-xs-7">
                        <div class="numbers">
                            <p>Enterprise   {{ $enterprise->b_name }}</p>
                            Tasks
                        </div>
                    </div>
                </div>
                <div class="footer">
                    <hr />
                    <div class="stats">
                        <i class="ti-calendar"></i> Total Tasks: {{ $countcontacts }}
                    </div>
                </div>
            </div>
        </div>
    </div></a> --}}
@if(Session('docs') == 1 || Session('superEnterpriseUser') == 1)
<a href="{{ URL::to('/home/enterpriseDocs/'.$enterprise->e_id) }}  ">
@else
<a href="#" onclick="nop();">
@endif
    <div class="col-lg-4 col-sm-6">
        <div class="panel panel-default">
            <div class="panel-body atoms-docs">
                <div class="row">
                    <div class="col-xs-4">
                        <div class="icon-big icon-success text-center">
                            <i class="fa fa-file atoms-ti-docs"></i>
                        </div>
                    </div>
                    <div class="col-xs-8">
                        <div class="numbers">
                            <p>Enterprise   {{ $enterprise->b_name }}</p>
                            Docs
                        </div>
                    </div>
                </div>
                <div class="footer">
                    <hr />
                    <div class="stats">
                        <i class="ti-calendar"></i> Total Documents: {{ $countcontacts }}
                    </div>
                </div>
            </div>
        </div>
    </div></a>


@endsection