@extends('layouts.masterlayout')
@section('maincontent')

 <div class="panel panel-default atoms-long" >
        

        <div class="panel-heading">
        <h4>Create Enterprise</h4>
        </div>


        <div class="panel-body" id="changepage" >
        <div class="row">
            <div class="col-md-6" style="margin:0 auto;float:none;margin-bottom:10px;" >
                    <p>You have not created enterprise - Create enterprise to begin.</p>
                <div class="form-group">
                <label>Select any three skills you posses</label>
                <br/>

                <div id="addSkills"></div>
             <br/>
               

           
                <br/>
                <select class="form-control border-input" id="skills">
                    <option>Select Skill</option>
                    @foreach ($skills as $s)

                    <option idea_url="{{URL::to('/home/ideasBySkill/')}}/{{$s->skill_id}}"  skill_name="{{$s->skill_title}}" value="{{$s->skill_id}}">{{$s->skill_title}}</option>
                    @endforeach
                </select>
                </div>

                <div class="row" id="second" style="display:none;">
                    <label>Select your preferred business idea.</label>
                    <br/>
                    <div class="col-md-6" id="preferredIdeas">

                    </div>
            </div>
                <br/>
                <div class="form-group">
                    <a href="#" refresh_url="{{URL::to('/home/addenterprise')}}" onclick="refreshWindow(this);" class="btn btn-danger">Cancel</a>
                    <button class="btn btn-primary" id="firstNext" next_url="{{ URL::to ('home/enterprisesecond') }}" next2_url="{{ URL::to('home/secondstep') }}" >Next</button>
                </div>
            </div>
        </div>                     
    </div>
</div>
                          
@endsection