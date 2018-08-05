@extends('layouts.masterlayout')
@section('maincontent')
<script src="//cdnjs.cloudflare.com/ajax/libs/moment.js/2.9.0/moment.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/fullcalendar/2.2.7/fullcalendar.min.js"></script>
<link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/fullcalendar/2.2.7/fullcalendar.min.css"/>


<div class="row">
<div class="col-md-12">
     <div class="panel panel-default atoms-long">
         <div class="panel-heading">
             <button class="btn btn-primary" id="addEvent" style="margin:4px;">Add Event</button>
         </div>
            {!! $calendar->calendar() !!}
            {!! $calendar->script() !!}
     </div>
    </div>
</div>
@endsection