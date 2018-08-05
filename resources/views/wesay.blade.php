<?php
use App\Http\Models\DocTypes;
use App\Http\Models\Documents;
use App\Http\Models\SubDocs; 
?>
                         
                         <link href="{!! URL::to('/assets/css/bootstrap.min.css') !!}" rel="stylesheet" />
   
    <script src="{!! URL::asset('/assets/js/jquery-1.10.2.js') !!}" type="text/javascript"></script>
           
                                <div class="header">
                                   <div class="col-xs-2" style="float:right;">
                                        <div class="icon-big icon-success text-center">
                                       </div>
                                    </div> 
                                   </div>
                       
 <div class="content">
  <div class="container">
      <div class="row">
          <div class="col-md-12">
              <div class="col-md-8">
 <h1>Enterprise: {{$enterprise->b_name}}</h1>
 <h5>Address: {{$enterprise->b_address}}</h5>
 <h5>Business Idea: {{$enterprise->p_b_idea}}</h5>
              </div>
              <div class="col-md-4">
                  <button onclick="window.print();" style="float:right;margin-top:40px;" class="btn btn-primary">Print</button>
              </div>
            </div>
 <hr/>

@if(!empty($users))
 <h1>Users</h1>
 <table class="table table-responsive table-condensed">
     <th>Full Name</th>
     <th>Gender</th>
     <th>Email</th>
     <th>Phone</th>
 @foreach($users as $u)
        <tr>
            <td>{{$u->e_firstname}} {{$u->e_lastname}}</td>
            <td>{{$u->e_user_gender}}</td>
            <td>{{$u->e_user_email}}</td>
            <td>{{$u->e_user_phone}}</td>
        </tr>
 @endforeach
</table>
 <hr/>
 @endif
 
 @if(!empty($contacts))
 <h1>Contacts</h1>
 <table class="table table-responsive table-condensed">
     <th>Full Name</th>
     <th>Gender</th>
     <th>Email</th>
     <th>Phone</th>
 @foreach($contacts as $c)
        <tr>
            <td>{{$c->firstname}} {{$c->lastname}}</td>
            <td>{{$c->gender}}</td>
            <td>{{$c->email}}</td>
            <td>{{$c->phone}}</td>
        </tr>
 @endforeach
</table>
<hr/>
 @endif


 @if(!empty($dts))
 <h1>Business Documents</h1>
<ol>
@foreach($dts as $d)
<li>{{$d->dt_title}}</li>
@endforeach
</ol>
 @endif



 @if(!empty($dts))
 <h1>Business Documents</h1>
@foreach($dts as $d)
<h4>* {{$d->dt_title}}</h4>
<?php $sub = SubDocs::where('dt_id','=',$d->dt_id)->get(); ?>
@if(!empty($sub))
@foreach($sub as $s)
<h5 style="margin-left:42px;"> > {{$s->sd_title}}</h5>
<?php $doc = Documents::where('sd_id','=',$s->sd_id)->get()->first(); ?>
@if(!empty($doc))
<div  style="margin-left:52px;"><?php echo $doc->d_description; ?></div>
@endif
@endforeach
@endif
@endforeach
 @endif





</div>
</div>
</div>
</div>
