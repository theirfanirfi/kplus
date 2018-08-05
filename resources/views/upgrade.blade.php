
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>KobuPlus - Upgrade</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
    <link href="http://netdna.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css" rel="stylesheet">
    <!-- JavaScript -->
<script src="//cdn.jsdelivr.net/npm/alertifyjs@1.11.0/build/alertify.min.js"></script>

<!-- CSS -->
<link rel="stylesheet" href="//cdn.jsdelivr.net/npm/alertifyjs@1.11.0/build/css/alertify.min.css"/>
<!-- Default theme -->
<link rel="stylesheet" href="//cdn.jsdelivr.net/npm/alertifyjs@1.11.0/build/css/themes/default.min.css"/>
<!-- Semantic UI theme -->
<link rel="stylesheet" href="//cdn.jsdelivr.net/npm/alertifyjs@1.11.0/build/css/themes/semantic.min.css"/>
<!-- Bootstrap theme -->
<link rel="stylesheet" href="//cdn.jsdelivr.net/npm/alertifyjs@1.11.0/build/css/themes/bootstrap.min.css"/>

<!-- 
    RTL version
-->
<link rel="stylesheet" href="//cdn.jsdelivr.net/npm/alertifyjs@1.11.0/build/css/alertify.rtl.min.css"/>
<!-- Default theme -->
<link rel="stylesheet" href="//cdn.jsdelivr.net/npm/alertifyjs@1.11.0/build/css/themes/default.rtl.min.css"/>
<!-- Semantic UI theme -->
<link rel="stylesheet" href="//cdn.jsdelivr.net/npm/alertifyjs@1.11.0/build/css/themes/semantic.rtl.min.css"/>
<!-- Bootstrap theme -->
<link rel="stylesheet" href="//cdn.jsdelivr.net/npm/alertifyjs@1.11.0/build/css/themes/bootstrap.rtl.min.css"/>
    <style type="text/css">
    	body{
    background:#eee;
    margin-top:20px;
}
.pt-inner {
    text-align: center;
}
.tile {
    background-color: #fff;
    margin-bottom: 30px;
    position: relative;
}
.tile {
    box-shadow: 0 1px 1px rgba(0,0,0,.07);
}
.pt-inner .pti-header {
    padding: 45px 10px 70px;
    color: #fff;
    position: relative;
    margin-bottom: 15px;
}
.bg-amber {
    background-color: #ffc107!important;
}
.bg-green {
    background-color: #4caf50!important;
}
.bg-cyan {
    background-color: #00bcd4!important;
}
.pt-inner .pti-header>h2 {
    margin: 0;
    line-height: 100%;
    color: #fff;
    font-weight: 100;
    font-size: 50px;
}
.pt-inner .pti-header>h2 small {
    color: #fff;
    letter-spacing: 0;
    vertical-align: top;
    font-size: 16px;
    font-weight: 100;
}
.pt-inner .pti-header .ptih-title {
    background-color: rgba(0,0,0,.1);
    padding: 8px 10px 9px;
    margin: 0 -10px;
    position: absolute;
    width: 100%;
    bottom: 0;
}
.pt-inner .pti-header .ptih-title {
    text-transform: uppercase;
}
.pt-inner .pti-body {
    padding: 0 23px;
}
.pt-inner .pti-body .ptib-item:not(:last-child) {
    border-bottom: 1px solid #eee;
}
.pt-inner .pti-body .ptib-item {
    padding: 15px 0;
    font-weight: 400;
}
.pt-inner .pti-footer {
    padding: 10px 20px 30px;
}
.pt-inner .pti-footer>a {
    width: 60px;
    height: 60px;
    border-radius: 50%;
    color: #fff;
    display: inline-block;
    line-height: 60px;
    font-size: 30px;
}
    </style>
</head>
<body>
<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet">
<div class="container bootstrap snippet">
    <div class="row">
        <div class="col-sm-4">
            <div class="tile pt-inner">
                <div class="pti-header bg-amber">
                    <h2>N0 <small></small></h2>
                    <div class="ptih-title">Free</div>
                </div>
        
                <div class="pti-body">
                    <div class="ptib-item">
                        Create 1 Enterprise
                    </div>
                    <div class="ptib-item">
                        1 User
                    </div>
                    <div class="ptib-item">
                        50 Contacts
                    </div>
                    <div class="ptib-item">
                    Upload Business logo
                </div>
                    <div class="ptib-item">
                        Document Templates
                    </div>
                    <div class="ptib-item">
                       Contacts Management
                    </div>
                    <div class="ptib-item">
                        Documents Management
                    </div>

                    <div class="ptib-item">
                        Quick Start guide
                    </div>

                    <div class="ptib-item">
                        Learning Resources
                    </div>
                </div>
            <form action="{{URL::to('/home/free')}}" method="post">
                {{ csrf_field() }}
                <div class="pti-footer">
                    @if(Session('plan_title') == "Free")
                    <button class="btn bg-green" disabled>Current Plan</button>
                    
                    @else
                    @if(Session('plan_title') == "Enterprise" || Session('plan_title') == "STARTUP")
                    <button type="submit" class="btn bg-green">Downgrade</button>
                    @else
                    <button type="submit" class="btn bg-green">Upgrade</button>
                    
                    @endif
                    @endif
                </div>
            </form>
            </div>
        </div>
        <div class="col-sm-4">
            <div class="tile pt-inner">
                <div class="pti-header bg-green">
                    <h2>N5000<small></small></h2>
                    <div class="ptih-title">Start Up</div>
                </div>
        
                <div class="pti-body">
                    <div class="ptib-item">
                       Create 1 Enterprise 
                    </div>
                    <div class="ptib-item">
                        2 Users
                    </div>
                    <div class="ptib-item">
                        100 Contacts
                    </div>
                    <div class="ptib-item">
                   Upload Business Logo
                 </div>
                    <div class="ptib-item">
                    Document Templates
                    </div>

                    <div class="ptib-item">
                        Contact Management
                        </div>
                        <div class="ptib-item">
                            Document Management
                            </div>

                            <div class="ptib-item">
                               Quick Start Guide
                                </div>

                                <div class="ptib-item">
                                   Learning Resources
                                    </div>
                                    <div class="ptib-item">
                                        Event/Calendar
                                        </div>
                                        <div class="ptib-item">
                                            Send Emails
                                            </div>
                                            <div class="ptib-item">
                                                Dashboard Notification
                                                </div>
                                                <div class="ptib-item">
                                                    Download Business Plan
                                                    </div>
                </div>
            <form action="{{URL::to('/pay')}}" method="POST">
                <input type="hidden" name="email" value="{{$user->email}}"> {{-- required --}}
                <input type="hidden" name="first_name" value="{{$user->name}}">
            <input type="hidden" name="orderID" value="{{$orderId}}">
                <input type="hidden" name="amount" value="8000"> {{-- required in kobo --}}
                <input type="hidden" name="quantity" value="1">
            <input type="hidden" name="current_plan" value="{{Session('plan_title')}}" />
            <input type="hidden" name="upgrade_plan" value="STARTUP" />
                <input type="hidden" name="metadata" value="{{ json_encode($array = ['key_name' => 'value',]) }}" > {{-- For other necessary things you want to add to your payload. it is optional though --}}
                <input type="hidden" name="reference" value="{{ Paystack::genTranxRef() }}"> {{-- required --}}
                <input type="hidden" name="key" value="{{ config('paystack.secretKey') }}"> {{-- required --}}
      
                {{ csrf_field() }}
                <div class="pti-footer">
                    @if(Session('plan_title') == "STARTUP")
                    <button class="btn bg-green" disabled>Current Plan</button>
                    
                    @else
                    @if(Session('plan_title') == "Enterprise")
                    <button type="submit" class="btn bg-green">Downgrade</button>
                    @else
                    <button type="submit" class="btn bg-green">Upgrade</button>
                    
                    @endif
                    @endif
                </div>
            </form>
            </div>
        </div>
        <div class="col-sm-4">
            <div class="tile pt-inner">
                <div class="pti-header bg-cyan">
                    <h2>N9000<small></small></h2>
                    <div class="ptih-title">Enterprise</div>
                </div>
        
                <div class="pti-body">
                    <div class="ptib-item">
                        Create 2 Enterprise 
                     </div>
                     <div class="ptib-item">
                         5 Users
                     </div>
                     <div class="ptib-item">
                         500 Contacts
                     </div>
                     <div class="ptib-item">
                    Upload Business Logo
                  </div>
                     <div class="ptib-item">
                     Document Templates
                     </div>
 
                     <div class="ptib-item">
                         Contact Management
                         </div>
                         <div class="ptib-item">
                             Document Management
                             </div>
 
                             <div class="ptib-item">
                                Quick Start Guide
                                 </div>
 
                                 <div class="ptib-item">
                                    Learning Resources
                                     </div>
                                     <div class="ptib-item">
                                         Event/Calendar
                                         </div>
                                         <div class="ptib-item">
                                             Send Emails
                                             </div>
                                             <div class="ptib-item">
                                                 Dashboard Notification
                                                 </div>
                                                 <div class="ptib-item">
                                                     Download Business Plan
                                                     </div>
                                                     <div class="ptib-item">
                                                    Social Media Marketing    
                                                    </div>
                                                    <div class="ptib-item">
                                                    Integration with 3<sup>rd</sup> Party Apps
                                                    </div>

                                                    

                </div>
        
                <div class="pti-footer">
                        <form action="{{URL::to('/enterprisepay')}}" method="POST">
                            <input type="hidden" name="email" value="{{$user->email}}"> {{-- required --}}
                            <input type="hidden" name="first_name" value="{{$user->name}}">
                        <input type="hidden" name="orderID" value="{{$orderId}}">
                        <input type="hidden" name="plan_type" value="Enterprise" /> 
                            <input type="hidden" name="amount" value="9000"> {{-- required in kobo --}}
                            <input type="hidden" name="quantity" value="1">
                            <input type="hidden" name="current_plan" value="{{Session('plan_title')}}" />
                            <input type="hidden" name="upgrade_plan" value="Enterprise" />
                            <input type="hidden" name="metadata" value="{{ json_encode($array = ['key_name' => 'value',]) }}" > {{-- For other necessary things you want to add to your payload. it is optional though --}}
                            <input type="hidden" name="reference" value="{{ Paystack::genTranxRef() }}"> {{-- required --}}
                            <input type="hidden" name="key" value="{{ config('paystack.secretKey') }}"> {{-- required --}}
                  
                            {{ csrf_field() }}
                            <div class="pti-footer">
                                @if(Session('plan_title') == "Enterprise")
                                <button class="btn bg-green" disabled>Current Plan</button>
                                
                                @else
                                <button type="submit" class="btn bg-green">Upgrade</button>
                                @endif
                            </div>
                        </form> </div>
            </div>
        </div>        
	</div>
</div>

<script src="http://netdna.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>

	 @if(Session('error-upgrade-e'))
     <script>

    alertify.alert('Error', "{{Session('error-upgrade-e')}}", function(){  alertify.set('notifier','position', 'top-left'); alertify.success('Please meet the plan requirements and comeback again.'); });
     </script>
     @endif

     @if(Session('error-upgrade-u'))
     <script>

    alertify.alert('Error', "{{Session('error-upgrade-u')}}", function(){  alertify.set('notifier','position', 'top-left'); alertify.success('Please meet the plan requirements and comeback again.'); });
     </script>
     @endif

     @if(Session('error-upgrade-c'))
     <script>

    alertify.alert('Error', "{{Session('error-upgrade-e')}}", function(){  alertify.set('notifier','position', 'top-left'); alertify.success('Please meet the plan requirements and comeback again.'); });
     </script>
     @endif
</body>
</html>