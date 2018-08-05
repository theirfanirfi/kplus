@extends('layouts.masterlayout')
@section('maincontent')
 <div class="panel panel-default atoms-long">
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
                        
    <div class="header atoms-add-user panel-heading">
       <div class="col-lg-10">
        <h4 class="docs-head">Document: {{$doc->d_title}}</h4>
        </div>
        <div class="col-lg-2 atoms-button" style="padding-top: 10px;">
            <div class="icon-big icon-success text-center">
                <a href="{{URL::to('/home/editDocument/')}}/{{$doc->d_id}}">
                <i class="ti-pencil"></i>
                </a>

                <a href="#" onclick="deleteDoc(this);" back_url="{{URL::to('/home/doctype')}}/{{$doc->dt_id}}/{{$doc->e_id}}" url_to_delete={{URL::to('/home/deleteDocument/')}}/{{$doc->d_id}}">
                    <i style="color:red;" class="ti-trash"></i>

                </a>
           </div>
        </div> 
    </div>
    
                                
 <div class="panel-body">
   <div class="description">
        <p style="clear:both;text-justify:inter-word;font-size:10px;"><?php echo $doc->d_description; ?></p>
   </div>
    
</div>

@endsection