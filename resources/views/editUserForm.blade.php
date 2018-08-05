@extends('layouts.masterlayout')
@section('maincontent')
 <div class="panel panel-default atoms-long atoms-big" >
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
            <h4 style="text-transform: uppercase;"><span style="font-weight: 500;">Edit User:</span>  <span style="font-weight: 300;">{{$info->e_firstname. " ".$info->e_lastname}}</span></h4>
        <div class="col-xs-2" style="float:right;">
            <div class="icon-big icon-success text-center">
           </div>
        </div> 
    </div>
                                    
    <div class="panel-body">
     {{Form::open(array('url' => '/home/submitEditForm', 'method' => 'post'))}}
        <div class="row">
            <div class="col-md-6" >
                <h3 class="atoms-edit-form">Personal Information</h3>                                 

                <div class="row atoms-group">
                    <div class="form-group">
                        <label>First Name</label>
                        
                            <input type="text" value="{{$info->e_firstname}}" name="fname" class="form-control border-input" placeholder="First Name">
                        
                        <div class="error"></div>
                    </div>
                </div>
                <div class="row atoms-group">
                    
                        <div class="form-group">
                            <label>Last Name</label>
                            <input type="text" name="lname" data-validation="length alphanumeric" data-validation-length="min4" value="{{$info->e_lastname}}" class="form-control border-input" placeholder="Last Name">
                            <div class="error"></div>
                        
                    </div>
                </div>

                <div class="row atoms-group">
                    
                        <div class="form-group">
                            <label>Gender</label><br/>
                           <input type="radio" name="gender" {{$info->e_user_gender == "Male" ? "checked" : ""}} value="Male"> Male &nbsp;&nbsp;&nbsp;&nbsp; <input type="radio" name="gender" value="Female" {{$info->e_user_gender == "Female" ? "checked" : ""}}> Female 
                        <div class="error"></div>
                            
                        </div>
                </div>

                <div class="row atoms-group">
                    
                        <div class="form-group">
                            <label>Email</label>
                            <input type="email" value="{{$info->e_user_email}}" name="email" class="form-control border-input" placeholder="Email" value="">
                            
                            <div class="error"></div>
                        </div>
                </div>

                <div class="row atoms-group">
                    
                        <div class="form-group">
                            <label>Phone Number</label>
                            <input type="number" name="phone_number" value="{{$info->e_user_phone}}"  class="form-control border-input" placeholder="Phone Number" value="">
                        <div class="error"></div>
                            
                        </div>
                </div>


                <div class="row atoms-group">
                    
                        <div class="form-group">
                            <label>Facebook</label>
                            <input type="url" name="fb_url" value="{{$info->e_user_fb}}" class="form-control border-input" placeholder="Facebook Profile Url" value="">
                            
                            <div class="error"></div>
                        </div>
                </div>

                <div class="row atoms-group">
                    
                        <div class="form-group">
                            <label>Twitter</label>
                            <input type="url" name="twitter_url" value="{{$info->e_user_twitter}}" class="form-control border-input" placeholder="Twitter Profile Url" value="">
                        <div class="error"></div>
                            
                        </div>
                </div>

                <div class="row atoms-group">
                    
                        <div class="form-group">
                            <label>Instagram</label>
                            <input type="url" name="insta_url" value="{{$info->e_user_instagram}}" class="form-control border-input" placeholder="Instagram Profile Url">
                            <div class="error"></div>
                        
                        </div>
                </div>
                <input type="hidden" name="user_id" value="{{$user->id}}" />
      
            </div>


            <div class="col-md-6">
                <h3 class="atoms-edit-form">Login Information</h3> 
                <div class="row atoms-group">
                    
                        <div class="form-group">
                            <label>Username</label>
                            <input type="text" value="{{$user->name}}" class="form-control border-input" placeholder="Company" name="username">
                        <div class="error"></div>
                        </div>
                </div>
                <!-- <div class="row">
                
                    <div class="form-group">
                        <label>Role</label>
                        <select class="form-control border-input">
                          <option>Select User Role</option>
                        </select>
                    </div>
                </div> -->

                <div class="row atoms-group">
                    
                        <div class="form-group">
                            <label>Password</label>
                            <input type="password" value="{{$user->password}}" name="password" class="form-control border-input" placeholder="password" value="">
                            <div class="error"></div>                    
                        </div>
                </div>

                <div class="row atoms-group">
                    
                        <div class="form-group">
                            <label>Repeat Password</label>
                            <input type="password" class="form-control border-input" name="confirm_password" placeholder="Repeat Password" value="">
                            <div class="error"></div>                 
                        </div>
                </div>
            </div>
        </div>

        <div class="row">
           <div class="col-md-6" style="margin:0 auto;float:none;margin-bottom:10px;">
                <h3 class="atoms-edit-form">Permissions</h2>
                <p class="atoms-group">Check these boxes to grant this User access to your enterprise. The User will be able to Add, Update and Delete information.</p> 
                <br/>

                <div class="col-md-6">
                    <input type="Checkbox" {{$info->e_business_permission  == 1 ? "checked" : ""}}  name="b_plan" />
                    &nbsp;&nbsp;
                    <strong>Business Plan</strong>
                </div>

                <div class="col-md-6">
                    <input type="Checkbox" {{$info->e_contacts_permission  == 1 ? 'checked' : ''}} name="contacts" />
                    &nbsp;&nbsp;
                    <strong>Contacts</strong>
                </div>

                <div class="col-md-6">  
                    <input type="Checkbox" {{$info->e_permission == 1 ? 'checked' : ''}} name="enterprises"/> 
                    &nbsp;&nbsp; 
                    <strong>Enterprise</strong>
                </div>

                <div class="col-md-6">  
                    <input type="Checkbox" {{$info->e_social_ads == 1 ? 'checked' : ''}} name="socialAds" /> 
                    &nbsp;&nbsp; <strong>Social Ads</strong>
                </div>

                <div class="col-md-6">  
                    <input type="Checkbox" {{$info->e_sharedocs == 1 ? 'checked' : ''}} name="shareDocuments"/> 
                    &nbsp;&nbsp; 
                    <strong>Share Documents</strong>
                </div>
                <div class="col-md-6">  
                    <input type="Checkbox" {{$info->e_settings == 1 ? 'checked' : ''}} name="enterprise_settings" /> 
                    &nbsp;&nbsp; 
                    <strong>Enterprise Settings</strong>
                </div>
            
                <div class="col-md-6">  
                    <input type="Checkbox" {{$info->e_user_permission == 1 ? 'checked' : ''}} name="users"/> 
                    &nbsp;&nbsp; 
                    <strong>Users</strong>
                </div>
        </div>
        
        <button class="btn btn-success" style="float: right;margin-right: 80px;" id="subBtn">Update</button>

        </div>
    </div>
{{Form::close()}}
</div>
@endsection