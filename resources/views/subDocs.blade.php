@extends('layouts.masterlayout')
@section('maincontent')
<?php 
use App\Http\Models\Documents;
use App\Http\Models\SubDocs;
?>
<link href="{!! URL::asset('/css/style.css') !!}" rel="stylesheet"/>

<div class="row">
        <h4 style='color:green;'></h4>
        <h4 style='color:red;'></h4>
        @if (session('success'))
        <div class="alert alert-success alert-white rounded">
                <button type="button" data-dismiss="alert" aria-hidden="true" class="close">×</button>
                <div class="icon">
                    <i class="fa fa-check"></i>
                </div>
                <strong>Success!</strong> 
                {{session('success')}}
            </div>
        
    @endif

    @if (session('error'))
    <div class="alert alert-danger alert-white rounded">
            <button type="button" data-dismiss="alert" aria-hidden="true" class="close">×</button>
            <div class="icon">
                <i class="fa fa-times-circle"></i>
            </div>
            <strong>Error!</strong> 
            {{session('error')}}
        </div>
    @endif
</div>

<div class="col-lg-12 col-sm-12">
            <div class="card">
                <div class="content">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-sm-4">
                                <div class="panel panel-dark-outline tabs-panel">
                                    <div class="panel-heading">
                                        <ul class="nav nav-tabs pull-left type-document">
                                            <li class="active"><a data-toggle="tab" href=".documents-panel" aria-expanded="true"> <i class="fa fa-file"></i> Business Plans </a></li>
                                        </ul>
                                        <div class="clear"></div>
                                    </div>
                                    <div class="panel-body tab-content">
                                        <div class="tab-pane active documents-panel atoms-docs-divide">
                                
                                            <div class="clear"></div>
                                            <div class="v-spacing-xs"></div>
                                    
                                            <ul class="folders list-unstyled">
                                               
                                                
                                            @foreach($dtypes as $t)
                                                <li> 
                                                    <a href="{{URL::to('/home/doctype/')}}/{{$t->dt_id}}/{{$enterprise->e_id}}">
                                                        <i class="fa fa-folder"></i> {{$t->dt_title}}

                                                        <?php /* $subdocs = SubDocs::where('dt_id','=',$t->dt_id)->get();
                                                        if($subdocs->count() > 0){
                                                            $count = $subdocs->count();
                                                            
                                                            $documents = Documents::where('sd_id','=',$subdocs->sd_id)->get();
                                                            $dcount = $documents->count();

                                                            $per = $dcount/$count * 100;
                                                            echo $per."%"; 
                                                        } */
                                                        ?>

                                                    </a>
                                                </li>
                                            @endforeach   
                                            </ul>
                                            <div class="v-spacing-xs"></div>
                                            
                                        </div>
                                        
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-8 tab-content no-bg no-border">
                                <div class="tab-pane active documents documents-panel">
                                     <a href="#" onclick="newSubPlan(this);" url="{{URL::to('/home/addSubDocPlan')}}" doctype="{{$dt}}" e_id="{{$enterprise->e_id}}" back_url="{{URL::to('/home/doctype/')}}/{{$dt}}/{{$enterprise->e_id}}"}}"><div class="document info">
                                                <div class="document-body">
                                                    <i class="fa fa-plus text-info"></i>
                                                </div>
                                                <div class="document-footer">
                                                    <span class="document-name">Add New Document</span>
                                                    <span class="document-description"> </span>
                                                </div>
                                            </div></a>
                                    @foreach($subdocs as $sd)
                                   <?php $doccount = Documents::where('sd_id','=',$sd->sd_id)->count() ?>
                                    @if($doccount > 0)
                                    <?php $doc = Documents::where('sd_id','=',$sd->sd_id)->get()->first(); ?>
                                   <a href="{{URL::to('/home/viewDoc/')}}/{{$doc->d_id}}"> <div class="document success">
                                        <div class="document-body">
                                            <i class="fa fa-file text-success"></i>
                                        </div>
                                        <div class="document-footer">
                                            <span class="document-name">{{$doc->d_title}} </span>
                                        <span class="document-description"> view Document </span>
                                        </div>
                                    </div> </a>
                                    @else

                                    <a href="{{URL::to('/home/createdoc/')}}/{{$sd->sd_id}}/{{$sd->dt_id}}/{{$enterprise->e_id}}"><div class="document danger">
                                            <div class="document-body">
                                                <i class="fa fa-plus text-danger"></i>
                                            </div>
                                            <div class="document-footer">
                                                <span class="document-name">{{$sd->sd_title}} </span>
                                                <span class="document-description">Click to create document. </span>
                                            </div>
                                        </div>
                                    </a>
                                

                                    @endif

                                    @endforeach
                   
                        
                                </div>
                            
                            </div>
                        </div>
                    </div>
                   
            </div>
        </div>
    </div>
                

@endsection