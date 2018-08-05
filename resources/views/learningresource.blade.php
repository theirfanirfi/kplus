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
                                        <h4>Kobu Plus Learning Resources</h4>
                                   
                                   </div>
    
                                
                                            <div class="panel-body" id="changepage" >
                                                <div class="row">
                                                    <div class="col-md-1"></div>
                                                        <div class="col-md-11">
        <table>
        @if(!empty($resources))
        @foreach ($resources as $r)
            
            <tr>
                <td>
                <i class="ti-control-forward"></i>&nbsp;<a style="font-size:20px;" href="{{URL::to('/home/viewResource/')}}/{{$r->lr_id}}">{{$r->lr_title}}</a>
                </td>
                
            </tr>
        @endforeach
            
        @endif
        </table>                         

                                                         
                                                        </div>
                                            </div>
                                     
                            </div>
                            </div>

@endsection