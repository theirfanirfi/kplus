@extends('layouts.masterlayout')
@section('maincontent')
   <div class="panel panel-default atoms-long" >
                        
<div class="panel-heading">
<h4>Create Enterprise</h4>
</div><script type= "text/javascript" src="{{URL::asset('/js/countries.js')}}"></script>


<div class="panel-body" id="changepage" >
        <div class="row">
            {{ Form::open(array('url' => 'home/submitEnterprise', 'files' => 'true')) }}
                <div class="col-md-8" style="margin:0 auto;float:none;margin-bottom:10px;" >
              <label>Enter your business information</label>
              <div class="form-group">

                    <input type="text" name="b_name" class="form-control border-input" placeholder="Business or Company Name">
                </div>

                <div class="form-group">

                        <input type="text" name="b_address" class="form-control border-input" placeholder="Business Address">
                    </div>
                    <div class="row">
                    <div class="col-md-6">
                          <!--  <select  id="skills" name="country">
                                    <option>Country</option>
                                    <option value="Pakistan">Pakistan</option>
                                    <option value="Iran">Iran</option>
                                    <option value="Afghanistan">Afghanistan</option>

                                </select> -->
                                <select class="form-control border-input" id="country" name ="country"></select>
                    </div>
                    <div class="col-md-6">
                       <!-- <select  id="skills" name="region">
                                    <option>Region/State/City</option>
                                    <option value="KP">KP</option>
                                    <option value="Balochistan">Balochistan</option>
                                    <option value="Sindh">Sindh</option>
                                    <option value="Punjab">Punjab</option>

                                </select>-->
                                <select class="form-control border-input" name="region" id ="state"></select>
                    </div>
                </div>
            <br/>

            <div class="row">
                    <div class="col-md-6">
                            <div class="form-group">

                                    <input type="number" name="phone" class="form-control border-input" placeholder="Phone">
                                </div>
                    </div>
                    <div class="col-md-6">
                            <div class="form-group">

                                    <input type="email" name="email" class="form-control border-input" placeholder="Email">
                                </div>
                    </div>
                </div>

                <br/>

                <div class="row" style="margin-left:18px;" id="ImageSec">
                    <div class="col-md-6">
                        <div class="row badge" style="float:right;">
                           <a href="#" style="color:white;text-decoration:none;" onclick="return hideImageSec();">Skip</a>
                        </div>
                       <img src="{{ URL::asset('/clientui/images/index.PNG') }}" style="width:50%; border-radius: 50%;" id="cf" />
                        <br/>
                        <br/>
                        <input type="file" name="file"  class="btn-secondary btn" id="clogo"/>
                    </div>
                </div>
                
                <br/>
                <button class="btn btn-success" type="submit" style="float:right;margin:4px;">Finish</button>
        

                <a href="#" class="btn btn-primary go-back" back_url="{{URL::to('/home/MyEnterprises')}}" onclick="goBack(this);" style="float:right;margin:4px;">Back</a> 

                </div>
            {{ Form::close() }}
            <script language="javascript">
                populateCountries("country", "state"); 
            </script>
        </div>

</div>
</div>

@endsection