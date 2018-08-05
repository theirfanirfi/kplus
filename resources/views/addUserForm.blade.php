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
                                        <h4>Add User to Enterprise {{$enterprise->b_name}}</h4>
                                    <div class="col-xs-2" style="float:right;">
                                        <div class="icon-big icon-success text-center">
                                       </div>
                                    </div> 
                                   </div>
    
                                
 <div class="content">
     {{Form::open(array('url' => '/home/submitEnterPriseUserForm', 'method' => 'post'))}}
      <div class="row">
    <div class="col-md-6" >
                        <h2>Information</h2>                                 

                                        <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>First Name</label>
                                                <input type="text" name="fname" class="form-control border-input" placeholder="First Name">
                                            </div>
                                        </div>
                                        </div>
                                         <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Last Name</label>
                                                <input type="text" name="lname" class="form-control border-input" placeholder="Last Name">
                                            </div>
                                        </div>
                                        </div>

                                        <input type="hidden" name="e_id" value="{{$enterprise->e_id}}" />
                                         <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Gender</label><br/>
                                               <input type="radio" name="gender" value="Male"> Male &nbsp;&nbsp;&nbsp;&nbsp; <input type="radio" name="gender" value="Female"> Female 
                                            </div>
                                        </div>
                                        </div>

                                          <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Email</label>
                                                <input type="email" name="email" class="form-control border-input" placeholder="Email" value="">
                                            </div>
                                        </div>
                                        </div>

                                          <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Phone Number</label>
                                                <input type="number" name="phone_number"  class="form-control border-input" placeholder="Phone Number" value="">
                                            </div>
                                        </div>
                                        </div>


                                          <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Facebook</label>
                                                <input type="url" name="fb_url" class="form-control border-input" placeholder="Facebook Profile Url" value="">
                                            </div>
                                        </div>
                                        </div>

                                          <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Twitter</label>
                                                <input type="url" name="twitter_url" class="form-control border-input" placeholder="Twitter Profile Url" value="">
                                            </div>
                                        </div>
                                        </div>

                                          <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Instagram</label>
                                                <input type="url" name="insta_url" class="form-control border-input" placeholder="Instagram Profile Url">
                                            </div>
                                        </div>
                                        </div>
  
  </div>


  <div class="col-md-6">
     <h2>Login Information</h2> 
    
                                        <div class="row">
                                       
                                        </div>
                                        <!-- <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Role</label>
                                                <select class="form-control border-input">
                                                  <option>Select User Role</option>
                                                </select>
                                            </div>
                                        </div>
                                        </div> -->

                                          <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Password</label>
                                                <input type="password" name="password" class="form-control border-input" placeholder="password" value="">
                                            </div>
                                        </div>
                                        </div>

                                          <div class="row">
                                    
                                        </div>
  </div>


 
</div>

<div class="row">
   <div class="col-md-6" style="margin:0 auto;float:none;margin-bottom:10px;">
     <h2>Permissions</h2>
     <p>Check these boxes to grant this User access to your enterprise.
    The User will be able to Add, Update and Delete information.</p> 
    <br/>
    <div class="col-md-6">  <input type="Checkbox"  name="b_plan" /> &nbsp;&nbsp; <strong>Business Plan</strong></div>
     <div class="col-md-6">  <input type="Checkbox" name="contacts" /> &nbsp;&nbsp; <strong>Contacts</strong></div>
    <div class="col-md-6">  <input type="Checkbox"  name="enterprises"/> &nbsp;&nbsp; <strong>Enterprise</strong></div>
     <div class="col-md-6">  <input type="Checkbox" name="socialAds" /> &nbsp;&nbsp; <strong>Social Ads</strong></div>
    <div class="col-md-6">  <input type="Checkbox"  name="shareDocuments"/> &nbsp;&nbsp; <strong>Share Documents</strong></div>
     <div class="col-md-6">  <input type="Checkbox" name="enterprise_settings" /> &nbsp;&nbsp; <strong>Enterprise Settings</strong></div>
    <div class="col-md-6">  <input type="Checkbox"  name="users"/> &nbsp;&nbsp; <strong>Users</strong></div>
    
  

  </div>
    <button class="btn btn-success" style="float: right;margin-right: 80px;">Submit</button>
</div>

</div>
{{Form::close()}}
</div>

@endsection