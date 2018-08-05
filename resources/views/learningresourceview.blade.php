@extends('layouts.masterlayout')
@section('maincontent')
 <div class="card" >
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
                        
                                <div class="header">
                                <h4>{{$resource->lr_title}}</h4>
                                   
                                   </div>
    
                                
                                            <div class="content" id="changepage" >
                                                <div class="row">
                                                    <div class="col-md-1"></div>
                                                        <div class="col-md-10" style="text-align:justify;">
        <?php echo $resource->lr_description; ?>                        

                                                         
                                                        </div>
                                            </div>
                                     
                            </div>
                            </div>

@endsection