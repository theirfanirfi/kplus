@extends('layouts.masterlayout')
@section('maincontent')
 <div class="panel panel-default atoms-long" >
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
                        
                                <div class="panel-heading">
                                        <h4>Enterprise: {{$enterprise->b_name}}</h4>
                                        <h5>Document Type: {{$dt->dt_title}}</h5>
                                        <h5>Document: {{$sd->sd_title}}</h5>
                                    <div class="col-xs-2" style="float:right;">
                                        <div class="icon-big icon-success text-center">
                                       </div>
                                    </div> 
                                   </div>
    
                                
 <div class="content" style="margin:0 3%;">
     {{Form::open(array('url' => '/home/processDocument', 'method' => 'post'))}}
      <div class="row">
    <div class="col-md-12">
                        <h2></h2>                                 

                                        <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label>{{$sd->sd_title}}</label>
                                                <textarea name="document" rows="12" class="form-control border-input" ></textarea>
                                            </div>
                                        </div>
                                        </div>
                                        

                                        <input type="hidden"  name="sd_id" value="{{$sd->sd_id}}" />
                                        <input type="hidden"  name="dt_id" value="{{$dt->dt_id}}" />
                                        <input type="hidden"  name="e_id" value="{{$enterprise->e_id}}" />
                                        <input type="hidden"  name="user_id" value="{{$user_id}}" />
                                        <input type="hidden"  name="sd_name" value="{{$sd->sd_title}}" />




                                         


                                        <div class="row">
                                                <div class="col-md-12">
                                                    <div class="form-group">
                                                       <button type="submit" class="btn btn-primary">Add Document</button> 
                                                    </div>
                                                </div>
                                                </div>
  
  </div>
</div>


</div>
{{Form::close()}}
</div>

@endsection