<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\User;
use App\Http\Models\EnterpriseUser;
use App\Http\Models\UpgradePlan;

class LoginController extends Controller
{
    //
    public function index()
    {
        return view('index');
    }

    public function contact()
    {
        return view('contact');
    }

    public function logout()
    {
        Auth::logout();
        return redirect('/');
    }

    public function login(Request $req)
    {
        $email = $req->input('email');
        $password = $req->input('password');

        if(Auth::attempt(['email' => $email, 'password' => $password]))
        {
            $user = User::where('email','=',$email)->first();
            if($user->role == 1)
            {
                return redirect('/admin');
            }
            else if($user->role == 2)
            {
                $plan = UpgradePlan::where(['user_id' => $user->id, 'isActive' => 1])->get();
                if($plan->count() > 0)
                {
                    $p = $plan->first();
                    Session()->put('plan_title',$p->plan_title);
                }

                  //set user roles into session
                $user_id = $user->id;
                $u = EnterpriseUser::where('user_id','=',$user_id)->get();
                if($u->count() > 0)
                {
                    $user = $u->first();
                    Session()->put('bp',$user->e_business_permission);
                    Session()->put('cp',$user->e_contacts_permission);
                    Session()->put('ep',$user->e_permission);
                    Session()->put('sAds',$user->e_social_ads);
                    Session()->put('es',$user->e_settings);
                    Session()->put('up',$user->e_user_permission);
                    Session()->put('docs',$user->e_sharedocs);
                }
                else
                {
                    Session()->put('superEnterpriseUser',1);
                }

                return redirect('/home');                    
            }
            else if($user->role == 0)
            {
                $plan = UpgradePlan::where(['user_id' => $user->id, 'isActive' => 1])->get();
                if($plan->count() > 0)
                {
                    $p = $plan->first();
                    Session()->put('plan_title',$p->plan_title);
                }

                
                Session()->put('superEnterpriseUser',1);
                return redirect('/home');                    
                
            }
            else
            {
                return redirect('/home');
            }

            
        }
        else
        {
            return redirect()->back()->with('error','User credentials are not matching our record');
        }
    }

    public function loginWithFacebook()
    {
        return \Socialite::driver('facebook')->redirect();
    }

    public function sociallogin()
    {
        $u = \Socialite::driver('facebook')->user();
        $email = $u->getEmail();
        $pass = $u->getName().$user->getId();
        $user = User::where('email','=',$email)->get();
        if($user->count() > 0)
        {
            if(Auth::attempt(['email'=>$email,'password'=>$pass]))
            {
                $user = $user->first();
                if($user->role == 1)
            {
                return redirect('/admin');
            }
            else if($user->role == 2)
            {
                $plan = UpgradePlan::where(['user_id' => $user->id, 'isActive' => 1])->get();
                if($plan->count() > 0)
                {
                    $p = $plan->first();
                    Session()->put('plan_title',$p->plan_title);
                }

                  //set user roles into session
                $user_id = $user->id;
                $u = EnterpriseUser::where('user_id','=',$user_id)->get();
                if($u->count() > 0)
                {
                    $user = $u->first();
                    Session()->put('bp',$user->e_business_permission);
                    Session()->put('cp',$user->e_contacts_permission);
                    Session()->put('ep',$user->e_permission);
                    Session()->put('sAds',$user->e_social_ads);
                    Session()->put('es',$user->e_settings);
                    Session()->put('up',$user->e_user_permission);
                    Session()->put('docs',$user->e_sharedocs);
                }
                else
                {
                    Session()->put('superEnterpriseUser',1);
                }

                return redirect('/home');                    
            }
            else if($user->role == 0)
            {
                $plan = UpgradePlan::where(['user_id' => $user->id, 'isActive' => 1])->get();
                if($plan->count() > 0)
                {
                    $p = $plan->first();
                    Session()->put('plan_title',$p->plan_title);
                }

                
                Session()->put('superEnterpriseUser',1);
                return redirect('/home');                    
                
            }
            else
            {
                return redirect('/home');
            }

            }
            else
            {
                return redirect('/')->with('error','User can not be authenticated');
            }
        }
        else
        {
            $un = new User();
            $un->email = $email;
            $un->password = Hash::make($pass);
            $un->name = $u->getName();
            $un->role = 0;
            $un->image_path = $u->getAvatar();
            if($un->save())
            {
                return redirect('/')->with('success','Registeration using facebook succeeded. Click the Facebook login button again to continue.');
            }
            else
            {
                return redirect('/')->with('error','Registeration using facebook failed. Try again.');
          
            }
        }
        // $user->getId();
        // $user->getNickname();
        // $user->getName();
        // $user->getEmail();


    }


    /// login with google

    public function loginWithGoogle()
    {
        return \Socialite::driver('google')->redirect();
    }

    public function googlesociallogin()
    {
        $u = \Socialite::driver('google')->user();
        $email = $u->getEmail();
        $pass = $u->getName().$user->getId();
        $user = User::where('email','=',$email)->get();
        if($user->count() > 0)
        {
            if(Auth::attempt(['email'=>$email,'password'=>$pass]))
            {
                $user = $user->first();
                if($user->role == 1)
            {
                return redirect('/admin');
            }
            else if($user->role == 2)
            {
                $plan = UpgradePlan::where(['user_id' => $user->id, 'isActive' => 1])->get();
                if($plan->count() > 0)
                {
                    $p = $plan->first();
                    Session()->put('plan_title',$p->plan_title);
                }

                  //set user roles into session
                $user_id = $user->id;
                $u = EnterpriseUser::where('user_id','=',$user_id)->get();
                if($u->count() > 0)
                {
                    $user = $u->first();
                    Session()->put('bp',$user->e_business_permission);
                    Session()->put('cp',$user->e_contacts_permission);
                    Session()->put('ep',$user->e_permission);
                    Session()->put('sAds',$user->e_social_ads);
                    Session()->put('es',$user->e_settings);
                    Session()->put('up',$user->e_user_permission);
                    Session()->put('docs',$user->e_sharedocs);
                }
                else
                {
                    Session()->put('superEnterpriseUser',1);
                }

                return redirect('/home');                    
            }
            else if($user->role == 0)
            {
                $plan = UpgradePlan::where(['user_id' => $user->id, 'isActive' => 1])->get();
                if($plan->count() > 0)
                {
                    $p = $plan->first();
                    Session()->put('plan_title',$p->plan_title);
                }

                
                Session()->put('superEnterpriseUser',1);
                return redirect('/home');                    
                
            }
            else
            {
                return redirect('/home');
            }

            }
            else
            {
                return redirect('/')->with('error','User can not be authenticated');
            }
        }
        else
        {
            $un = new User();
            $un->email = $email;
            $un->password = Hash::make($pass);
            $un->name = $u->getName();
            $un->role = 0;
            $un->image_path = $u->getAvatar();
            if($un->save())
            {
                return redirect('/')->with('success','Registeration using Google Account succeeded. Click the Google login button again to continue.');
            }
            else
            {
                return redirect('/')->with('error','Registeration using Google failed. Try again.');
          
            }
        }
        // $user->getId();
        // $user->getNickname();
        // $user->getName();
        // $user->getEmail();


    }
    
}
