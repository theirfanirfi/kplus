@extends('layouts.adminmasterlayout')
@section('maincontent')
<script src="http://code.jquery.com/jquery-2.0.3.min.js"></script>
                <div class="card" >

                    <div class="header">
                    <h4>Settings</h4>
                       </div>

                    
                 <div class="content" >
                     <div class="row"></div>

                     <div class="row">
                       <div class="col-md-1"></div>
                      <div class="col-md-4">
                        <h4>General Settings</h4>
                      <form action="{{URL::to('/admin/updateEmailUsername')}}" method="post">
                      <label>Full Name: </label><input type="text" name="username" value="{{$user->name}}" class="form-control" />
                      <label>Email: </label><input type="email" name="email" value="{{$user->email}}" class="form-control" />
                      {!! csrf_field() !!}
                        <br/>
                      <button type="submit" class="btn btn-primary">Submit</button>

                    </form>
                    
                      </div>
                      <div class="col-md-1"></div>
                    <div class="col-md-4">
                        <h4>Account Setting</h4>
                        <p>Change password</p>
                    <form action="{{URL::to('admin/updateAccount')}}" method="POST">
                    <label>
                        Current Password
                    </label>
                    <input type="password" name="current_password" class="form-control" />
                    <label>New Password</label>
                    {!! csrf_field() !!}
                    
                    <input type="password" name="new_password" class="form-control" />
                    <br/>
                    <button type="submit" class="btn btn-primary">Submit</button>
  
                </form>
                    </div>

                    







                </div>
                </div>
@endsection