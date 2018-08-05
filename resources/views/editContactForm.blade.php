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
                                        <h4>Update Contact {{$contact->firstname. " ".$contact->lastname}}</h4>
                                    <div class="col-xs-2" style="float:right;">
                                        <div class="icon-big icon-success text-center">
                                       </div>
                                    </div> 
                                   </div>
    
                                
 <div class="content">
     {{Form::open(array('url' => '/home/submitEditContactForm', 'method' => 'post'))}}
      <div class="row">
          <div class="col-md-2"></div>
    <div class="col-md-6" >
                        <h2>Information</h2>                                 

                                        <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label>First Name</label>
                                                <input type="text" name="fname" class="form-control border-input" placeholder="First Name" value="{{$contact->firstname}}">
                                            </div>
                                        </div>
                                        </div>
                                         <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label>Last Name</label>
                                                <input type="text" name="lname" class="form-control border-input" placeholder="Last Name" value="{{$contact->lastname}}">
                                            </div>
                                        </div>
                                        </div>

                                        <input type="hidden" name="contact_id" value="{{$contact->contact_id}}" />
                                         <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label>Gender</label><br/>
                                               <input type="radio" name="gender" value="Male" {{$contact->gender == "Male" ? "checked" : ""}}> Male &nbsp;&nbsp;&nbsp;&nbsp; <input type="radio" name="gender" value="Female" {{$contact->gender == "Female" ? "checked" : ""}}> Female 
                                            </div>
                                        </div>
                                        </div>

                                          <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label>Email</label>
                                                <input type="email" name="email" class="form-control border-input" placeholder="Email" value="{{$contact->email}}">
                                            </div>
                                        </div>
                                        </div>

                                          <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label>Company</label>
                                                <input type="text" name="company"  class="form-control border-input" placeholder="Company" value="{{$contact->company}}">
                                            </div>
                                        </div>
                                        </div>

                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <label>Address</label>
                                                    <input type="text" name="address"  class="form-control border-input" placeholder="Address" value="{{$contact->address}}">
                                                </div>
                                            </div>
                                            </div>
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <label>Phone Number</label>
                                                    <input type="number" name="phone_number"  class="form-control border-input" placeholder="Phone Number" value="{{$contact->phone}}">
                                                </div>
                                            </div>
                                            </div>


                                          <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label>Facebook</label>
                                                <input type="url" name="fb_url" class="form-control border-input" placeholder="Facebook Profile Url" value="{{$contact->fb}}">
                                            </div>
                                        </div>
                                        </div>

                                          <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label>Twitter</label>
                                                <input type="url" name="twitter_url" class="form-control border-input" placeholder="Twitter Profile Url" value="{{$contact->twitter}}">
                                            </div>
                                        </div>
                                        </div>

                                          <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label>Instagram</label>
                                                <input type="url" name="insta_url" class="form-control border-input" placeholder="Instagram Profile Url" value="{{$contact->instagram}}">
                                            </div>
                                        </div>
                                        </div>
                                        <div class="row">
                                                <div class="col-md-12">
                                                    <div class="form-group">
                                                       <button type="submit" class="btn btn-primary">Update Contact</button> 
                                                    </div>
                                                </div>
                                                </div>
  
  </div>
</div>


</div>
{{Form::close()}}
</div>

@endsection