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
                            
                                        <h5>Document: {{$doc->d_title}}</h5>
                                    <div class="col-xs-2" style="float:right;">
                                        <div class="icon-big icon-success text-center">
                                       </div>
                                    </div> 
                                   </div>
    
                                
 <div class="content">
     {{Form::open(array('url' => '/home/processDocumentEditForm', 'method' => 'post'))}}
      <div class="row">
          <div class="col-md-2"></div>
    <div class="col-md-6" >
                        <h2></h2>                                 

                                        <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label>{{$doc->d_title}}</label>
                                                <textarea name="document" rows="12" class="form-control border-input" >{{$doc->d_description}}</textarea>
                                            </div>
                                        </div>
                                        </div>
                                        

                                        <input type="hidden"  name="doc_id" value="{{$doc->d_id}}" />
                                     




                                         


                                        <div class="row">
                                                <div class="col-md-12">
                                                    <div class="form-group">
                                                       <button type="submit" class="btn btn-primary">Update Document</button> 
                                                    </div>
                                                </div>
                                                </div>
  
  </div>
</div>


</div>
{{Form::close()}}
</div>

@endsection