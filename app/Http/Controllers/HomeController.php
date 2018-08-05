<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Models\Enterprise;
use App\Http\Models\EnterpriseUser;
use App\Http\Models\EnterpriseContact;
use App\Http\Models\Skill;
use App\Http\Models\PBIdea;
use App\Http\Models\DocTypes;
use App\Http\Models\Documents;
use App\Http\Models\SubDocs;
use App\Http\Models\EnterpriseMessage;
use App\Http\Models\Follow;
use Illuminate\Support\Facades\Hash;
use App\User;
use Paystack;
use App\Http\Models\UpgradePlan;
use App\Http\Models\EventsModel;
use App\Http\Models\LearningResource;
use Illuminate\Mail\Mailer;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $e = Enterprise::where('user_id','=',Auth::user()->id)->get()->count();
        $eu = EnterpriseUser::where('user_id','=',Auth::user()->id)->get()->count();
         if($e > 0 || $eu > 0)
         {
            session()->put('haveEnterprise',1);
         }
         else
         {
            session()->put('haveEnterprise',0);                
         }


        $user = Auth::user();
        if(!empty($user->e_id))
        {
            $enterprise = Enterprise::where('e_id','=',$user->e_id)->get()->first();
            $data['enterprise'] = $enterprise;
            return view('EnterprisesUserEnterprise',$data);
            exit();
        }

        $id = Auth::user()->id;
        $e = Enterprise::Where('user_id', '=', $id)->get();
        $data['countenterprise'] = $e->count() > 1 ? true : false;
        $data['skills'] = Skill::all();
        if($e->count() > 0)
        {
            $e = new Enterprise();
            $es = Enterprise::Where('user_id', '=', $id)->get();
            $data['enterprises'] = $es;
            return view('MyEnterprises',$data);
        }
        else
        {
            return view('enterprises',$data);
        } 
    }

    public function MyEnterprises()
    {
        $user = Auth::user();
        if(!empty($user->e_id))
        {
            $enterprise = Enterprise::where('e_id','=',$user->e_id)->get()->first();
            $data['enterprise'] = $enterprise;
            return view('EnterprisesUserEnterprise',$data);
            exit();
        }

        $id = Auth::user()->id;
        $e = Enterprise::Where('user_id', '=', $id)->get();
        $data['countenterprise'] = $e->count() > 1 ? true : false;
        $data['skills'] = Skill::all();        
        if($e->count() > 0)
        {
            $e = new Enterprise();
            $es = Enterprise::Where('user_id', '=', $id)->get();
            $data['enterprises'] = $es;
            return view('MyEnterprises',$data);
        }
        else
        {
            return view('enterprises',$data);
        } 
    }

    public function SingelEnterprise($id)
    {
        $enterprise = Enterprise::find($id);
        $eusers = EnterpriseUser::where('e_id','=', $id)->count();        
        $econtacts = EnterpriseContact::where('e_id','=', $enterprise->e_id)->count();
        $data['enterprise'] = $enterprise;
        $data['countusers'] = $eusers;        
        $data['countcontacts'] = $econtacts;

        return view('singleEnterprise',$data);
    }

    public function createEnterprise()
    {
        if(!($this->planObject() && $this->planObject()->created_enterprises < $this->planObject()->total_enterprises))
        {
            return redirect()->back()->with('error-upgrade','You can not create more enterprises. Either you have completed the limit or your plan is not letting you to create more. Check out the Upgrade Plans');
            exit();
        }
        $id = Auth::user()->id;
        $e = Enterprise::Where('user_id', '=', $id)->get();
        if($e->count() > 1){
            return redirect('/home/MyEnterprises')->with('success','User can create only two enterprises and you have already created two.');
        }
        else
        {
        $data['skills'] = Skill::all();
        return view('enterprises',$data);
        }
    }

    public function secondstep()
    {
        return view('enterprisesregsecond');
    }
    public function enterprisesecond(Request $request)
    {
        $SKILLS = array();
        $SKILLS = $request->input('skills');
        $PBI = $request->input('p_b');
        $request->session()->put('skills',$SKILLS);
        $request->session()->put('p_b',$PBI);
        echo "1";
    }

    public function submitEnterprise(Request $request)
    {
        $e = new Enterprise();
        $user_id = Auth::user()->id;
        $BNAME = $request->input('b_name');        
        $BADDR = $request->input('b_address');
        $COUNTRY = $request->input('country');
        $REGION = $request->input('region');
        $PHONE = $request->input('phone');
        $EMAIL = $request->input('email');
        $PBI = $request->session()->get('p_b');
        $SKILLS = $request->session()->get('skills');
        
        if($request->hasFile('file'))
        {
            $file = $request->file('file');
   
            $FILENAME = $file->getClientOriginalName();
            
         
            $FILEEXTENSION = $file->getClientOriginalExtension();
            $FILESIZE = $file->getSize();
            $FILEMEMTYPE = $file->getMimeType();
            $destinationPath = 'uploads/logos/';
            $file->move($destinationPath,$file->getClientOriginalName());
            $e->b_name = $BNAME;
            $e->b_address = $BADDR;
            $e->country = $COUNTRY;
            $e->region_state = $REGION;
            $e->phone = $PHONE;
            $e->email = $EMAIL;
            $e->skill_one = !empty($SKILLS[0]) ? $SKILLS[0] : "";            
            $e->skill_two = !empty($SKILLS[1]) ? $SKILLS[1] : "";
            $e->skill_three = !empty($SKILLS[2]) ? $SKILLS[2] : "";
            $e->p_b_idea = $PBI;
            $e->user_id = $user_id;
            $e->logo_name = $FILENAME;
            $e->logo_path = 'uploads/logos/'.$FILENAME;
            if($e->save())
            {
                $plan = UpgradePlan::where(['user_id'=>$user_id,'isActive'=>1])->get()->first();
                $plan->created_enterprises = $plan->created_enterprises + 1;
                $plan->save();
                $request->session()->flash('msg-success','Enterprise Created.');
                return redirect('/home/');
            }
            else
            {
                $request->session()->flash('msg-failure','Error Occurred in creating Enterprise. Try Again.');                
                return redirect('/home/');
            }

        }
        
        else
        {
            $e->b_name = $BNAME;
            $e->b_address = $BADDR;
            $e->country = $COUNTRY;
            $e->region_state = $REGION;
            $e->phone = $PHONE;
            $e->email = $EMAIL;
            $e->skill_one = !empty($SKILLS[0]) ? $SKILLS[0] : "";            
            $e->skill_two = !empty($SKILLS[1]) ? $SKILLS[1] : "";
            $e->skill_three = !empty($SKILLS[2]) ? $SKILLS[2] : "";
            $e->p_b_idea = $PBI;
            $e->user_id = $user_id;
            if($e->save())
            {
                $plan = UpgradePlan::where(['user_id'=>$user_id,'isActive'=>1])->get()->first();
                $plan->created_enterprises = $plan->created_enterprises + 1;
                $plan->save();
                return redirect('/home/');
            }
            else
            {
                return redirect('/home/');
            }

            
            
        }

    }

    public function addEnterpriseUser($id)
    {
        $data['users'] = User::where('e_id','=',$id)->get();
        $data['e_id'] = $id;
        return view('enterpriseusers',$data);
    }

    public function addUserForm($id)
    {
        if(!($this->planObject() && $this->planObject()->created_users < $this->planObject()->total_users))
        {
            return redirect()->back()->with('error-upgrade','You can not Add more Users to the Enterprise. Either you have completed the limit or your plan is not letting you to create more. Check out the Upgrade Plans');
            exit();
        }
        $data['enterprise'] = Enterprise::find($id);
        return view('addUserForm',$data);
    }

    public function allUsers()
    {
        //$data['users'] = User::where('role','!=','1')->get();
        $id = Auth::user()->id;
        $e = Enterprise::Where('user_id', '=', $id)->get();
        $data['enterprises'] = $e;
        return view('selectEnterprisesForUsers',$data);
    }

    public function fetchIdeasBySkillId($id)
    {
        $ideas = PBIdea::where('skill_id','=',$id)->get();
        echo json_encode($ideas);
    }

    public function submitEnterPriseUserForm(Request $req)
    {
        //personal information 

        $FNAME = $req->input('fname');
        $LNAME = $req->input('lname');
        $GENDER = $req->input('gender');
        $EMAIL = $req->input('email');
        $PHONE = $req->input('phone_number');
        $FB = $req->input('fb_url');
        $TWITTER = $req->input('twitter_url');
        $INSTA = $req->input('insta_url');
        $e_id = $req->input('e_id');
        //login information

        $password = $req->input('password');
        $user = new User();
        $user->name = $FNAME. " ".$LNAME;
        $user->email = $EMAIL;
        $user->password = Hash::make($password);
        $user->role = 2;
        $user->e_id = $e_id;
        $user->creater_id = Auth::user()->id;        
        $user->save();
        $user_id = $user->id;
      

        //permissions

        $BP = $req->input('b_plan') ? "1" : "0";
        $CONTACTS = $req->input('contacts') ? "1" : "0";
        $ENTERPRISES = $req->input('enterprises') ? "1" : "0";
        $SADS = $req->input('socialAds') ? "1" : "0";
        $sd = $req->input('shareDocuments') ? "1" : "0";
        $e_settings = $req->input('enterprise_settings') ? "1" : "0";
        $users = $req->input('users') ? "1" : "0";

        $eu = new EnterpriseUser();
        $eu->e_firstname = $FNAME;
        $eu->e_lastname = $LNAME;
        $eu->e_user_gender = $GENDER;
        $eu->e_user_email = $EMAIL;
        $eu->e_user_phone = $PHONE;
        $eu->e_user_fb = $FB;
        $eu->e_user_twitter = $TWITTER;
        $eu->e_user_instagram = $INSTA;
      
        $eu->e_user_password = $password;
        

        $eu->e_business_permission = $BP;
        $eu->e_contacts_permission = $CONTACTS;
        $eu->e_permission= $ENTERPRISES;
        $eu->e_social_ads = $SADS;
        $eu->e_sharedocs = $sd;
        $eu->e_settings = $e_settings;
        $eu->e_user_permission = $users;
        $eu->e_id = $e_id;
       $eu->user_id = $user_id;
       if($eu->save())
       {
           $plan = $this->planObject();
           $plan->created_users = $plan->created_users + 1;
           $plan->save();
           return redirect()->back()->with('success','User Added');
       }
       else
       {
        return redirect()->back()->with('error','Error occurred in adding the user. Try again.');
       }
    }

    public function editUserForm($id)
    {
        $data['user'] = User::find($id);
        $data['info'] = EnterpriseUser::where('user_id','=',$id)->get()->first();
        //var_dump($data['info']);
        return view('editUserForm',$data);
    }

    public function submitEditForm(Request $req)
    {
        //personal information 

        $FNAME = $req->input('fname');
        $LNAME = $req->input('lname');
        $GENDER = $req->input('gender');
        $EMAIL = $req->input('email');
        $PHONE = $req->input('phone_number');
        $FB = $req->input('fb_url');
        $TWITTER = $req->input('twitter_url');
        $INSTA = $req->input('insta_url');
        $user_id = $req->input('user_id');
        //login information

        $USERNAME = $req->input('username');
        $password = $req->input('password');
        $confirm_password = $req->input('confirm_password');
        $user = User::find($user_id);
        $user->name = $USERNAME;
        $user->email = $EMAIL;
        $user->password = $password;
        $user->role = 2;
        $user->save();
        
      

        //permissions

        $BP = $req->input('b_plan') ? "1" : "0";
        $CONTACTS = $req->input('contacts') ? "1" : "0";
        $ENTERPRISES = $req->input('enterprises') ? "1" : "0";
        $SADS = $req->input('socialAds') ? "1" : "0";
        $sd = $req->input('shareDocuments') ? "1" : "0";
        $e_settings = $req->input('enterprise_settings') ? "1" : "0";
        $users = $req->input('users') ? "1" : "0";

        $eu = EnterpriseUser::where('user_id','=',$user_id)->get()->first();
        $eu->e_firstname = $FNAME;
        $eu->e_lastname = $LNAME;
        $eu->e_user_gender = $GENDER;
        $eu->e_user_email = $EMAIL;
        $eu->e_user_phone = $PHONE;
        $eu->e_user_fb = $FB;
        $eu->e_user_twitter = $TWITTER;
        $eu->e_user_instagram = $INSTA;
        $eu->e_username = $USERNAME;
        $eu->e_user_password = $password;
        

        $eu->e_business_permission = $BP;
        $eu->e_contacts_permission = $CONTACTS;
        $eu->e_permission= $ENTERPRISES;
        $eu->e_social_ads = $SADS;
        $eu->e_sharedocs = $sd;
        $eu->e_settings = $e_settings;
        $eu->e_user_permission = $users;
       if($eu->save())
       {
           return redirect()->back()->with('success','User Updated');
       }
       else
       {
        return redirect()->back()->with('error','Error occurred in updating the user. Try again.');
       }
    }

    public function deleteUser($id)
    {
        $user = User::find($id);
        $info = EnterpriseUser::where('user_id','=',$id)->get()->first();
        if($user->delete() && $info->delete())
        {
            $plan = $this->planObject();
            $plan->created_users = $plan->created_users - 1;
            $plan->save();
            echo "1";
        }
        else
        {
            echo "0";
        }
    }

    public function enterpriseContacts($id)
    {
        $data['enterprise'] = Enterprise::find($id);
        $data['contacts'] = EnterpriseContact::where('e_id','=',$id)->get();
        return view('EnterpriseContacts',$data);
    }

    public function addContactForm($id)
    {
        if(!($this->planObject() && $this->planObject()->created_contacts < $this->planObject()->total_contacts )){
            return redirect()->back()->with('error-upgrade','You can not add more contacts. Either you have completed the limit or your plan is not letting you to create more. Check out the Upgrade Plans');
            exit();
        }
        $data['enterprise'] = Enterprise::find($id);
        
        return view('addContactForm',$data);
    }

    public function submitEnterPriseContactForm(Request $req)
    {
        $FNAME = $req->input('fname');
        $LNAME = $req->input('lname');
        $GENDER = $req->input('gender');
        $EMAIL = $req->input('email');
        $PHONE = $req->input('phone_number');
        $FB = $req->input('fb_url');
        $address = $req->input('address');
        $TWITTER = $req->input('twitter_url');
        $INSTA = $req->input('insta_url');
        $company = $req->input('company');
        $e_id = $req->input('e_id');

        $contact  = new EnterpriseContact();
        $contact->firstname = $FNAME;
        $contact->lastname = $LNAME;
        $contact->gender = $GENDER;
        $contact->email = $EMAIL;
        $contact->company = $company;
        $contact->phone = $PHONE;
        $contact->fb = $FB;
        $contact->address = $address;
        $contact->twitter = $TWITTER;
        $contact->instagram = $INSTA;
        $contact->e_id = $e_id;

        if($contact->save())
        {
            return redirect("/home/addContactForm/{$e_id}")->with('success','Contact Added');
        }
        else
        {
            return redirect("/home/addContactForm/{$e_id}")->with('error','Error Occurred in Adding the contact. try again.');
            
        }

    }

    public function editContactForm($id)
    {
        $data['contact'] = EnterpriseContact::find($id);
        
        return view('editContactForm',$data);
    }

    public function submitEditContactForm(Request $req)
    {
        $FNAME = $req->input('fname');
        $LNAME = $req->input('lname');
        $GENDER = $req->input('gender');
        $EMAIL = $req->input('email');
        $PHONE = $req->input('phone_number');
        $FB = $req->input('fb_url');
        $TWITTER = $req->input('twitter_url');
        $INSTA = $req->input('insta_url');
        $company = $req->input('company');
        $contact_id = $req->contact_id;
        $address = $req->input('address');

        $contact  = EnterpriseContact::find($contact_id);
        $contact->firstname = $FNAME;
        $contact->lastname = $LNAME;
        $contact->gender = $GENDER;
        $contact->email = $EMAIL;
        $contact->company = $company;
        $contact->phone = $PHONE;
        $contact->fb = $FB;
        $contact->address = $address;
        $contact->twitter = $TWITTER;
        $contact->instagram = $INSTA;

        if($contact->save())
        {
            return redirect("/home/editContact/{$contact_id}")->with('success','Contact Updated');
        }
        else
        {
            return redirect("/home/editContact/{$contact_id}")->with('error','Error Occurred in updating the contact. try again.');
            
        }
    }

    public function deleteContact($id)
    {
        $contact  = EnterpriseContact::find($id);
        $e_id = $contact->e_id;
        if($contact->delete())
        {
            echo "1";
        }
        else
        {
            echo "0";
        }

    }

    public function menuContacts()
    {
        $id = Auth::user()->id;
        $e = Enterprise::Where('user_id', '=', $id)->get();
        $data['enterprises'] = $e;
        return view('selectEnterprisesForContacts',$data);
    }

    public function documents()
    {
        $id = Auth::user()->id;
        $e = Enterprise::Where('user_id', '=', $id)->get();
        $data['enterprises'] = $e;
        
        return view('selectEnterprisesForDocuments',$data);
    }
    

    public function enterpriseDocs($id)
    {
        $data['enterprise'] = Enterprise::find($id);
        $data['dtypes'] = DocTypes::where('e_id','=',$id)->orWhere('e_id','=',0)->orderby('dt_id','desc')->get();
        return view('enterpriseDocs',$data);
    }

    public function documentsByType($id,$eid)
    {
        $data['subdocs'] = SubDocs::where('dt_id','=',$id)->get();
        $data['enterprise'] = Enterprise::find($eid);
        $data['dt'] = $id;
        $data['dtypes'] = DocTypes::where('e_id','=',$eid)->orWhere('e_id','=',0)->orderby('dt_id','desc')->get();
        return view('subDocs',$data);
    }

    public function createdoc($sdid,$dtid,$eid)
    {
        $data['sd'] = SubDocs::find($sdid);
        $data['dt'] = DocTypes::find($dtid);
        $data['enterprise'] = Enterprise::find($eid);
        $data['user_id'] = Auth::user()->id;
        return view('addDocumentForm',$data);
    }

    public function processDocument(Request $req)
    {
        $TITLE = $req->input('sd_name');
        $document = $req->input('document');
        $dt_id = $req->input('dt_id');
        $e_id = $req->input('e_id');
        $sd_id = $req->input('sd_id');
        $user_id = $req->input('user_id');

        $doc = new Documents();
        $doc->d_title = $TITLE;
        $doc->d_description = $document;
        $doc->dt_id = $dt_id;
        $doc->sd_id = $sd_id;
        $doc->e_id = $e_id;
        $doc->user_id = $user_id;

        if($doc->save())
        {
            return redirect("/home/doctype/{$dt_id}/{$e_id}")->with('success',"Document {$TITLE} Created");
        }
        else
        {
            return redirect("/home/doctype/{$dt_id}/{$e_id}")->with('error',"Document {$TITLE} could not Created. Try again.");
            
        }
    }

    public function viewDocument($id)
    {
        $doc = Documents::find($id);
        $enterprise = Enterprise::find($doc->e_id);
        $data['doc'] = $doc;
        $data['enterprise'] = $enterprise;
        
        return view('viewDocument',$data);
    }

    public function editDocument($id)
    {
        $data['doc'] = Documents::find($id);
        return view('editDocumentForm',$data);
    }

    public function processDocumentEditForm(Request $req)
    {
        $TITLE = $req->input('sd_name');
        $document = $req->input('document');
        
        $doc_id = $req->input('doc_id');

        $doc = Documents::find($doc_id);
   
        $doc->d_description = $document;

        if($doc->save())
        {
            return redirect("/home/viewDoc/{$doc_id}")->with('success',"Document Updated.");
        }
        else
        {
            return redirect("/home/viewDoc/{$doc_id}")->with('error',"Error occurred in updating the document. Try again.");
            
        }
    }

    public function deleteDocument($id)
    {
        $doc = Documents::find($id);
        if($doc->delete())
        {
            echo "1";
        }
        else
        {
            echo "0";
        }
    }

    public function dEnterprise($id)
    {
        $enterprise = Enterprise::find($id);

        if($enterprise->delete())
        {
            $plan = UpgradePlan::where(['user_id' => Auth::user()->id,'isActive' => 1])->get()->first();
            $plan->created_enterprises = $plan->created_enterprises - 1;
            $plan->save();
            echo "1";
        }
        else
        {
           echo "0";  
        }
    }

    public function msg($id)
    {
        $data['msgs'] = EnterpriseMessage::where('e_id','=',$id)->get();
        return view('email-inbox',$data);
    }

    public function singleMsg($msg_id,$sender_eid, $r_eid)
    {
        $msg = EnterpriseMessage::find($msg_id);
        $msg->status = 1;

        $data['count'] = EnterpriseMessage::where('reciever_e_id','=',$sender_eid)->where('status','=',0)->get()->count();
        $data['sentcount'] = EnterpriseMessage::where('sender_e_id','=',$sender_eid)->get()->count();
        $data['enterprise'] = Enterprise::find($msg->sender_e_id);
        $msg->update();
        $data['msg'] = $msg;
        return view('SingleMsg',$data);
    }

    public function composeMsg($sender_e_id,$reciever_e_id)
    {
        $to = Enterprise::find($reciever_e_id);
        $data['to'] = $to;
        $data['from'] = Enterprise::find($sender_e_id);
        return view('ComposeMsg',$data);
    }

    public function addEnterpriseDoc(Request $req)
    {
        $title = $req->input('ti');
        $des = $req->input('desc');
        $eid = $req->input('eid');
        $doc = new DocTypes();
        $doc->dt_title = $title;
        $doc->dt_description = $des;
        $doc->e_id = $eid;
        $user_id = Auth::user()->id;
        $doc->user_id = $user_id;
        if($doc->save())
        {
            echo "1";
        }
        else
        {
            echo "0";
        }

    }

    public function addSubDocPlan(Request $req)
    {
        $title = $req->input('ti');
        $des = $req->input('desc');
        $eid = $req->input('eid');
        $dt = $req->input('dt');
        $doc = new SubDocs();
        $doc->sd_title = $title;
        $doc->sd_description = $des;
        $doc->e_id = $eid;
        $doc->dt_id = $dt;
        $user_id = Auth::user()->id;
        $doc->user_id = $user_id;
        if($doc->save())
        {
            echo "1";
        }
        else
        {
            echo "0";
        }
    }

    public function unfollow($id)
    {
        $fo = Follow::find($id);
        if($fo->delete())
        {
            echo "1";
        }
        else
        {
            echo "0";
        }
    }

    public function followMatched($follower_e_id,$followed_e_id,$follower_user_id,$followed_user_id)
    {
        $f = new Follow();
        $f->follower_e_id = $follower_e_id;
        $f->follower_user_id = $follower_user_id;
        $f->followed_e_id = $followed_e_id;
        $f->followed_user_id = $followed_user_id;

        if($f->save())
        {
            echo "1";
        }
        else
        {
            echo "0";
        }
    }

    public function chatWithEnterprise($follower_id, $followed_id)
    {
        $msgs = EnterpriseMessage::where('reciever_e_id','=',$follower_id)->get();
        $data['msgs'] = $msgs;
        $data['sender_e_id'] = $follower_id;
        $data['reciever_e_id'] = $followed_id;
        $data['count'] = EnterpriseMessage::where('reciever_e_id','=',$follower_id)->where('status','=',0)->get()->count();
        $data['sentcount'] = EnterpriseMessage::where('sender_e_id','=',$follower_id)->get()->count();
        return view('email-inbox',$data);
    }

    public function deleteMsg($id)
    {
        $msg = EnterpriseMessage::find($id);
       
        if($msg->delete())
        {
            echo "1";
        }
        else
        {
            echo "0";
        }
    }

    public function sendMsg(Request $req)
    {
       $to = $req->input('to_e_id');
       $from = $req->input('from_e_id');
       $subject = $req->input('msg_subject');
       $sender_user_id = Auth::user()->id;
       $msg_desc = $req->input('msg_description');
       $msg = new EnterpriseMessage();
       $msg->reciever_e_id = $to;
       $msg->sender_e_id = $from;
       $msg->msg_subject = $subject;
       $msg->sender_user_id = $sender_user_id;
       $msg->msg_description = $msg_desc;
       $msg->in_reply = !empty($req->input('in_reply')) ? $req->input('in_reply') : 0;
       $msg_id = $req->input('msg_id');
       if($msg->save())
       {
        //singleMsg($msg_id,$sender_eid, $r_eid)
           return redirect("/home/singlemsg/{$msg_id}/{$from}/{$to}")->with('success','Message sent.');
       }
       else
       {
        return redirect("/home/singlemsg/{$msg_id}/{$from}/{$to}")->with('error','Error occurred in sending the message. try again.');
        
       }
    }


    public function sendMsgg(Request $req)
    {
       $to = $req->input('to_e_id');
       $from = $req->input('from_e_id');
       $subject = $req->input('msg_subject');
       $sender_user_id = Auth::user()->id;
       $msg_desc = $req->input('msg_description');
       $msg = new EnterpriseMessage();
       $msg->reciever_e_id = $to;
       $msg->sender_e_id = $from;
       $msg->msg_subject = $subject;
       $msg->sender_user_id = $sender_user_id;
       $msg->msg_description = $msg_desc;
        if($msg->save())
       {
        //singleMsg($msg_id,$sender_eid, $r_eid)
           return redirect("/home/chatwithEnterprise/{$from}/{$to}")->with('success','Message sent.');
       }
       else
       {
        return redirect("/home/chatwithEnterprise/{$from}/{$to}")->with('error','Error occurred in sending the message. try again.');
        
       }
    }

    public function emailSent($eid)
    {
        $enterprise = Enterprise::find($eid);
        $msgs = EnterpriseMessage::where('sender_e_id','=',$eid)->get();
        $data['msgs'] = $msgs;
        $data['enterprise'] = $enterprise;

        return view('email-sent',$data);
    }

    public function chatWithEnterpriseSent($follower_id, $followed_id)
    {
        $msgs = EnterpriseMessage::where('sender_e_id','=',$follower_id)->get();
        $data['msgs'] = $msgs;
        $data['sender_e_id'] = $follower_id;
        $data['reciever_e_id'] = $followed_id;
        $data['count'] = EnterpriseMessage::where('reciever_e_id','=',$follower_id)->where('status','=',0)->get()->count();
        $data['sentcount'] = EnterpriseMessage::where('sender_e_id','=',$follower_id)->get()->count();
        return view('email-sent',$data);
    }

    public function editProfile()
    {
        $data['user'] = Auth::user();
        $data['following'] = Follow::where('follower_e_id','=',Auth::user()->id)->get();
        return view('editprofile',$data);
    }

    public function submitProfile(Request $req)
    {
        $about = $req->input('about');
        $bd = $req->input('birthday');
        $gender = $req->input('gender');
        $address = $req->input('address');
        $email = $req->input('email');
        $phone = $req->input('phone');
        $user_id = $req->input('user_id');
        $user = User::find($user_id);
        $user->about = $about;
        $user->bd = $bd;
        $user->gender = $gender;
        $user->address = $address;
        $user->email = $email;
        $user->phone = $phone;

        if($user->save())
        {
            return redirect('/home/editProfile')->with('success','Profile Updated');
        }
        else
        {
            return redirect('/home/editProfile')->with('error','Error Occurred in updating Profile. Try again.');
       
        }

    }

    public function submitProfileImage(Request $req)
    {
        $user_id = $req->input('user_id');
        $image = $req->file('profileImage');
        $image_name = $image->getClientOriginalName();
        $user = User::find($user_id);
     //Move Uploaded File
        $destinationPath = 'uploads/profile';
        $image_path = $destinationPath.'/'.$image_name;
        if($image->move($destinationPath,$image->getClientOriginalName()))
        {
            $user->image_name = $image_name;
            $user->image_path = $image_path;
            if($user->save())
        {
            return redirect('/home/editProfile')->with('success','Profile Updated');
        }
        else
        {
            return redirect('/home/editProfile')->with('error','Error Occurred in updating Profile. Try again.');
       
        }
        }
        else
        {
            return redirect('/home/editProfile')->with('error','Error Occurred in updating Profile. Try again.');
       
       
        }
    }

    public function updateAccount(Request $req)
    {
        $pass = $req->input('password');
        $cpass = $req->input('cpassword');
        $user_id = $req->input('user_id');

        $user = User::find($user_id);
        $oldpass  = $req->input('oldpassword');

        if($pass === $cpass){
        if(Hash::check($oldpass, $user->password))
        {
          $hashedPassword = Hash::make($pass);

          $user->password = $hashedPassword;

          if($user->save())
          {
              return redirect('/home/editProfile')->with('success','Account Updated');
          }
          else
          {
              return redirect('/home/editProfile')->with('error','Error Occurred in updating Account. Try again.');
         
          }
          

        }
        else
        {
            return redirect('/home/editProfile')->with('error','you entered incorrect current password');
        }

    }
    else
    {
        return redirect('/home/editProfile')->with('error','New Password and Confirm Passwor are not matching.');
       
       
    }
        
    }


    public function UserProfile()
    {

        $data['user'] = Auth::user();
        $data['following'] = Follow::where('follower_e_id','=',Auth::user()->id)->get();
        return view('profile',$data);
    }

    public function invite(Request $req)
    {
        $isEmail = $req->input('emailInvite') != NULL ? true : false;
        $isSMS =   $req->input('smsInvite') != NULL ? true : false;
        $femail = $req->input('femail');
        $msg = $req->input('invite_message');
     
        if($isEmail)
        {
            $data = array('name'=>Auth::user()->name,'email'=>$femail,'msg'=>$msg);
   
      \Mail::send('email', $data, function($message) use($femail) {
         $message->to($femail, 'KobuPlush')->subject
            ('KobuPlus Invite');
         $message->from('ivite@kobuplus.com',Auth::user()->name);
      });
        }

        if($isSMS)
        {
            echo "SMS is also set";
        }
    }

    public function deleteCreatedPlan($id)
    {
        $d = DocTypes::find($id);
        $sub = SubDocs::where('dt_id','=',$id)->get();
        $doc = Documents::where('dt_id','=',$id)->get();
        if($d->delete())
        {
            if($sub->count() > 0)
            {
                $sub->delete();
            }

            if($doc->count() > 0)
            {
                $doc->delete();
            }



            echo "1";
        }
        else
        {
            echo "0";
        }
    }

    public function upgrade()
    {
        $data['user'] = Auth::user();
        $data['orderId'] = rand(0,1000);
        return view("upgrade",$data);
    }
    public function redirectToGateway(Request $req)
    {
        $CPLAN = $req->input('current_plan');
        $UPLAN = $req->input('upgrade_plan');
        $plan = UpgradePlan::where(['user_id'=>Auth::user()->id,'isActive'=>1])->get()->first();
       
        if($UPLAN == "Enterprise")
        {
            $ENTERPRISES = 2;
            $USERS = 5;
            $CONTACTS = 500;
        if(!($plan->created_enterprises <= $ENTERPRISES)){
            return redirect()->back()->with('error-upgrade-e',"You need to delete Enterprise(s). Because the Enterprise Plan do not provide the desired number of enterprises to be created.");
            exit();
        }
        else if(!($plan->created_users <= $USERS))
        {
            return redirect()->back()->with('error-upgrade-u',"You need to delete User(s). Because the Enterprise Plan do not provide the desired number of Users to be created.");
            exit();
        }
        else if(!($plan->created_contacts <= $CONTACTS))
        {
            return redirect()->back()->with('error-upgrade-c',"You need to delete Contacts(s). Because the Enterprise Plan do not provide the desired number of Contacts to be created.");
            exit();
        }
        }

        if($UPLAN == "STARTUP")
        {
            $ENTERPRISES = 1;
            $USERS = 2;
            $CONTACTS = 100;
        if(!($plan->created_enterprises <= $ENTERPRISES)){
            return redirect()->back()->with('error-upgrade-e',"You need to delete Enterprise(s). Because the Startup Plan do not provide the desired number of enterprises to be created.");
            exit();
        }
        else if(!($plan->created_users <= $USERS))
        {
            return redirect()->back()->with('error-upgrade-u',"You need to delete User(s). Because the Startup Plan do not provide the desired number of Users to be created.");
            exit();
        }
        else if(!($plan->created_contacts <= $CONTACTS))
        {
            return redirect()->back()->with('error-upgrade',"You need to delete Contacts(s). Because the Startup Plan do not provide the desired number of Contacts to be created.");
            exit();
        }
        }

        if($UPLAN == "Free")
        {
            $ENTERPRISES = 1;
            $USERS = 1;
            $CONTACTS = 50;
        if(!($plan->created_enterprises <= $ENTERPRISES)){
            return redirect()->back()->with('error-upgrade',"You need to delete Enterprise(s). Because the Free Plan do not provide the desired number of enterprises to be created.");
            exit();
        }
        else if(!($plan->created_users <= $USERS))
        {
            return redirect()->back()->with('error-upgrade',"You need to delete User(s). Because the Free Plan do not provide the desired number of Users to be created.");
            exit();
        }
        else if(!($plan->created_contacts <= $CONTACTS))
        {
            return redirect()->back()->with('error-upgrade-c',"You need to delete Contacts(s). Because the Free Plan do not provide the desired number of Contacts to be created.");
            exit();
        }
        }
        return Paystack::getAuthorizationUrl()->redirectNow();
    }

    public function redirectToGatewayy(Request $req)
    {
        return Paystack::getAuthorizationUrl()->redirectNow();
    }

    public function handleGatewayCallback()
    {
        $created_enterprises = 0;
        $created_users = 0;
        $created_contacts = 0;
        $paymentDetails = Paystack::getPaymentData();
        //echo $paymentDetails['message'];
        $data = $paymentDetails['data'];
      
        $status = $data['status'];
        if($status == "success" && $paymentDetails['status'] == "success"){
        $paidAt = $data['paidAt'];
        $ip = $data['ip_address'];
        $td = $data['transaction_date'];
        $authorization = $data['authorization'];
        $bank =  $authorization['bank'];
        $card_type = $authorization['card_type'];
        $country_code =  $authorization['country_code'];
       
        $plan = new UpgradePlan();
        $user = Auth::user();

        $previous = UpgradePlan::where(['user_id'=>$user->id,'isActive' => 1])->get();
        if($previous->count() > 0 )
        {
            $pre = $previous->first();
            $created_enterprises = $pre->created_enterprises;
            $created_users = $pre->created_users;
            $created_contacts = $pre->created_contacts;
            $pre->isActive = 0;
            $pre->save();
        }
//2 users
//100 contacts
//1 enterprise
if($data['amount'] == "9000")
{
    $plan->total_enterprises = 2;
        $plan->created_enterprises = $created_enterprises;
        $plan->total_users = 5;
        $plan->created_users = $created_users;
        $plan->total_contacts = 500;
    $plan->plan_title = "Enterprise";
    $plan->sm_marketing = 1;
    $plan->thirdPartyApps = 1;
        
}
else if($data['amount'] == "8000") {
    $plan->total_enterprises = 1;
    $plan->created_enterprises = $created_enterprises;
    $plan->total_users = 2;
    $plan->created_users = $created_users;
    $plan->total_contacts = 100;
    $plan->plan_title = "STARTUP";
}
      
        $plan->created_contacts = $created_contacts;
        $plan->event_calendar = 1;
        $plan->sending_emails = 1;
        $plan->dashboard_notifications = 1;
        
        $plan->download_business_plan = 1;
        $plan->status = "Upgraded";
        $plan->paidAt = $paidAt;
        $plan->ip = $ip;
        $plan->transaction_date = $td;
        $plan->bank = $bank;
        $plan->card_type = $card_type;
        $plan->country_code = $country_code;
        $plan->isActive = 1;
        $plan->user_id = $user->id;
        $plan->created_user_id = $user->id;
        if($plan->save())
        {
            Session()->forget('plan_title');
            Session()->put('plan_title',$plan->plan_title);
            return redirect('/home/')->with('success',"Plan upgraded successfully.");
        }
        else
        {
            return redirect('/home/')->with('error',"Error Occurred in upgrading the Plan.");
            
        }

        }

    }

    public function planObject()
    {
        $user_id = Auth::user()->id;
        $plan = UpgradePlan::where(['user_id'=>$user_id,'isActive'=>1])->get();
        if($plan->count() > 0)
        {
            return $plan->first();
        }
        else
        {
            return false;
        }
    }

    public function downToFree(Request $req)
    {
        $created_enterprises = 0;
        $created_users = 0;
        $created_contacts = 0;
        $plan = new UpgradePlan();
        $user = Auth::user();

      
        $previous = UpgradePlan::where(['user_id'=>$user->id,'isActive' => 1])->get();
        if($previous->count() > 0 )
        {
            $pre = $previous->first();
            $created_enterprises = $pre->created_enterprises;
            $created_users = $pre->created_users;
            $created_contacts = $pre->created_contacts;
            $pre->isActive = 0;
            $pre->save();
        }
        $plan->total_enterprises = 1;
        $plan->created_enterprises = $created_enterprises;
        $plan->total_users = 1;
        $plan->created_users = $created_users;
        $plan->total_contacts = 50;
        $plan->plan_title = "Free";
        $plan->created_contacts = $created_contacts;
        $plan->download_business_plan = 1;
        $plan->status = "Downgraded";
        $plan->isActive = 1;
        $plan->user_id = $user->id;
        $plan->created_user_id = $user->id;
        if($plan->save())
        {
            Session()->forget('plan_title');
            Session()->put('plan_title',$plan->plan_title);
            return redirect('/home/')->with('success',"Plan Downgraded");
        }
        else
        {
            return redirect('/home/')->with('error',"Error Occurred in downgrading the Plan.");
            
        }
    }

    public function calendar()
    {
        $events = [];

// $events[] = \Calendar::event(
//     'Event One', //event title
//     false, //full day event?
//     '2018-03-24T0800', //start time (you can also use Carbon instead of DateTime)
//     '2018-03-24T0800', //end time (you can also use Carbon instead of DateTime)
// 	0 //optionally, you can specify an event ID
// );
$uid = Auth::user()->id;
$myevents = EventsModel::where('user_id','=',$uid)->get();
if(!empty($myevents)){
foreach($myevents as $e)
{
    // $events[] = $a = array(
    //     $e->event_title,
    //     true,
    //     $e->start_time,
    //     $e->end_time
    // );

    $events[] = \Calendar::event(
        // "Valentine's Day", //event title
        // true, //full day event?
        // new \DateTime('2015-02-14'), //start time (you can also use Carbon instead of DateTime)
        // new \DateTime('2015-02-14'), //end time (you can also use Carbon instead of DateTime)
        // 'stringEventId' //optionally, you can specify an event ID
        $e->event_title,
        true,
        $e->start_time,
        $e->end_time
    );
}
}

// $events[] = \Calendar::event(
//     "Valentine's Day", //event title
//     true, //full day event?
//     new \DateTime('2015-02-14'), //start time (you can also use Carbon instead of DateTime)
//     new \DateTime('2015-02-14'), //end time (you can also use Carbon instead of DateTime)
// 	'stringEventId' //optionally, you can specify an event ID
// );

$calendar = \Calendar::addEvents($events) //add an array with addEvents
->setOptions([ //set fullcalendar options
		'firstDay' => 1
	])->setCallbacks([ //set fullcalendar callback options (will not be JSON encoded)
        'viewRender' => 'function() {}'
    ]);

return view('calendarr', compact('calendar'));
        
    }

    public function addevent(Request $req)
    {
        $title = $req->input('event_title');
        $startdate = $req->input('start_date');
        $end_date = $req->input('end_date');
        $user_id = $req->input('user_id');

        $event = new EventsModel();
        $event->event_title = $title;
        $event->start_time = $startdate;
        $event->end_time = $end_date;
        $event->fullday = 1;
        $event->user_id = $user_id;
        if($event->save())
        {
            return redirect()->back()->with('success',"Event Added.");
        }
        else
        {
            return redirect()->back()->with('error',"Error Occurred in adding the event. Try again.");
            
        }



    }

    public function redirectToProvider()
    {
        return \Socialite::driver('facebook')->redirect();
    }

    public function handleProviderCallback()
    {
        $user = \Socialite::driver('facebook')->user();

        dd($user);
    }

    public function learningresource()
    {
        $data['resources'] = LearningResource::all();
        return view('learningresource',$data);
    }

    public function viewResource($id)
    {
        $data['resource'] = LearningResource::find($id);
        return view('learningresourceview',$data);
    }
}
