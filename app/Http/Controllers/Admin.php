<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Models\Skill;
use App\Http\Models\PBIdea;
use App\Http\Models\Enterprise;
use App\Http\Models\LearningResource;
use App\Http\Models\DocTypes;
use App\Http\Models\SubDocs;
use Illuminate\Support\Facades\Hash;
use App\Http\Models\EnterpriseUser;
use App\Http\Models\EnterpriseContact;
use App\Http\Models\Documents;
use App\User;
use Auth;

class Admin extends Controller
{
    //

    public function index()
    {
        $data['skills'] = Skill::all();
        return view('Admin.skills',$data);
    }
    public function skills()
    {
        $data['skills'] = Skill::all();
        return view('Admin.skills',$data);
    }

    public function updateSkillTitle($skill_id,$value)
    {
        $skill = Skill::find($skill_id);
        $skill->skill_title = $value;
        if($skill->save())
        {
            echo "1";
        }
        else
        {
            echo "0";
        }

    }

    public function updateSkilldesc($skill_id,$value)
    {
        $skill = Skill::find($skill_id);
        $skill->skill_description = $value;
        if($skill->save())
        {
            echo "1";
        }
        else
        {
            echo "0";
        }
    }

    public function editSkill($id)
    {
        $skill = Skill::find($id);
        $data['skill'] = $skill;
        return view('Admin.editSkill',$data);
    }

    public function addskill()
    {
        return view('Admin.addskill');
    }

    public function addskillForm(Request $req)
    {
        $skill = new Skill();
        $skill->skill_title         = $req->input('skill_title');
        $skill->skill_description   = $req->input('skill_description');
        if($skill->save())
        {
            $req->session()->flash('msg-success', "Skill Added");
            return redirect('/admin/addskill');
        }
        else
        {
            
            $req->session()->flash('msg-failure', "Error occurred in Adding Skill. Please try again.");
            return redirect('/admin/addskill');            
        }
    }

    public function editskillform(Request $req)
    {
        $SKILL_ID = $req->input('skill_id');
        $SKILL_TITLE = $req->input('skill_title');
        $SKILL_DESCRIPTION = $req->input('skill_description');
        $skill = Skill::find($SKILL_ID);
        $skill->skill_title = $SKILL_TITLE;
        $skill->skill_description = $SKILL_DESCRIPTION;
        if($skill->save())
        {
            $req->session()->flash('msg-success', "Skill Updated");
            return redirect('/admin/editSkill/'.$SKILL_ID);
        }
        else
        {
            $req->session()->flash('msg-failure', "Error occurred in updating Skill. Please try again.");
            return redirect("/admin/editSkill/".$SKILL_ID);
        }
    }

    public function preferredBusinessIdea()
    {
        $data['ideas'] = PBIdea::all();
        return view('Admin.pbidea',$data);
    }

    public function addIdea()
    {
        $data['skills'] = Skill::all();
        return view('Admin.addidea',$data);
    }

    public function addIdeaForm(Request $req)
    {
        $PBTITLE = $req->input('idea_title');
        $PBDESCRIPTION = $req->input('idea_description');
        $SKILL_ID = $req->input('skill_id');

        $idea = new PBIdea();
        $idea->pb_title = $PBTITLE;
        $idea->pb_description = $PBDESCRIPTION;
        $idea->skill_id = $SKILL_ID;
        if($idea->save())
        {
            $req->session()->flash('msg-success', "Business Idea Added.");
            return redirect("/admin/addidea/");
        }
        else
        {
            $req->session()->flash('msg-failure', "Error Occurred. Please try again.");
            return redirect("/admin/addidea/");
        }
    }

    public function editIdea($id)
    {
        $idea = PBIdea::find($id);
        $data['idea'] = $idea;
        $data['skills'] = Skill::all();
        return view('Admin.editIdea',$data);
    }

    public function editideaForm(Request $req)
    {
        $IDEA_ID = $req->input('pb_id');
        $TITLE = $req->input('idea_title');
        $DESC = $req->input('idea_description');
        $SKILL_ID = $req->input('skill_id');
        $IDEA = PBIdea::find($IDEA_ID);
        $IDEA->pb_title = $TITLE;
        $IDEA->pb_description = $DESC;
        $IDEA->skill_id = $SKILL_ID;
        if($IDEA->save())
        {
            $req->session()->flash('msg-success', "Business Idea Updated.");
            return redirect("/admin/editPidea/".$IDEA_ID);
        }
        else
        {
            $req->session()->flash('msg-failure', "Error Occurred. Please try again.");
            return redirect("/admin/editPidea/".$IDEA_ID);
       
        }
    }

    public function deleteIdea($id)
    {
        $idea = PBIdea::find($id);
        $isDeleted = $idea->delete();
        echo $isDeleted ? "1" : "0";
    }

    public function users()
    {
        $users = User::where('role','!=',1)->get();
        $data['users'] = $users;
        return view('Admin.user',$data);
    }
    public function deleteUser($id)
    {
        $user = User::find($id);
        if($user->delete())
        {
            return redirect()->back()->with('success','User Deleted');
        }
        else
        {
            return redirect()->back()->with('error','Error occurred in deleting the user. Try again.');
            
        }
    }
    public function enterprises()
    {
        $data['enterprises'] = Enterprise::all();
        return view('Admin.enterprises',$data);
    }

    public function deleteEnterprise($id)
    {
        $enterprise = Enterprise::find($id);
        if($enterprise->delete())
        {
            return redirect()->back()->with('success','Enterprise Deleted');
        }
        else
        {
            return redirect()->back()->with('error','Error occurred in deleting the Enterprise. Try again.');
            
        }
    }

    public function learningresources()
    {
        $data['resources'] = LearningResource::all();
        return view('Admin.allresources',$data);
    }

    public function addresource()
    {
        return view('Admin.addresource');
    }

    public function deleteResource($id)
    {
        $re = LearningResource::find($id);
        if($re->delete())
        {
            return redirect()->back()->with('success',"Resource Deleted");
        }
        else
        {
            return redirect()->back()->with('error',"Error Occurred in deleting the Resource. Try again.");
            
        }
    }

    public function submitResource(Request $req)
    {
        $title = $req->input('r_title');
        $desc = $req->input('r_description');
        $resource = new LearningResource();
        $resource->lr_title = $title;
        $resource->lr_description = $desc;
        if($resource->save())
        {
            return redirect('/admin/learningresources')->with('success',"Learning Resource Added.");
        }
        else
        {
            return redirect('/admin/learningresources')->with('error',"Error Occurred in Adding the Learning Resource. Try again");
            
        }
    }

    public function readmore(Request $req)
    {
        $ID = $req->input('lr_id');

        $re = LearningResource::find($ID);
        $data['resource'] = $re;
        return view('Admin.readmore',$data);
    }

    public function documents()
    {
        $data['docs'] = DocTypes::where('e_id','=',0)->get();
        return view('Admin.alldoctypes',$data);
    }

    public function adddoc()
    {
        return view('Admin.adddoc');
    }

    public function submitDoc(Request $req)
    {
        $title = $req->input('title');
        $desc = $req->input('description');

        $d = new DocTypes();
        $d->dt_title = $title;
        $d->dt_description = $desc;
        $d->e_id = 0;
        if($d->save())
        {
            return redirect('/admin/documents')->with('success','Document Type Added.');
        }
        else
        {
            return redirect('/admin/documents')->with('error','Error Occurred in adding the Document. Try again.');
            
        }
        
    }

    public function addsubdoc($id)
    {
        $data['doc'] = DocTypes::find($id);
        return view('Admin.addsubdoc',$data);
    }

    public function submitSubDoc(Request $req)
    {
        $title = $req->input('title');
        $desc = $req->input('description');
        $dtid = $req->input('dt_id');

        $sdoc = new SubDocs();
        $sdoc->sd_title = $title;
        $sdoc->sd_description = $desc;
        $sdoc->dt_id = $dtid;

        if($sdoc->save())
        {
            return redirect('/admin/documents')->with('success','Sub Document Added.');
       
        }
        else
        {
            return redirect('/admin/documents')->with('error','Error Occurred in adding the sub document. Try again.');
       
        }

    }   

    public function viewSubDocs($id)
    {
        $data['dt'] = DocTypes::find($id);
        $data['docs'] = SubDocs::where('dt_id','=',$id)->get();
        return view('Admin.allsubdocs',$data);
    }

    public function settings()
    {
        $user= Auth::user();
        $data['user'] = $user;
        return view('Admin.settings',$data);
    }

    public function updateEmailUsername(Request $req)
    {
        $username = $req->input('username');
        $email = $req->input('email');
        $id = Auth::user()->id;
        $user = User::find($id);
        $user->name = $username;
        $user->email = $email;
        if($user->save())
        {
            return redirect()->back()->with('success','General Settings Updated.');

        }
        else
        {
            return redirect()->back()->with('error','Error Occurred in updating the settings. try again.');
        }
    }

    public function updateAccount(Request $req)
    {
        
        $current_password = $req->input('current_password');
        $new_password = $req->input('new_password');
        $id = Auth::user()->id;
        $user = User::find($id);
        if(Hash::check($current_password,$user->password)){
            $user->password = Hash::make($new_password);
        if($user->save())
        {
            return redirect()->back()->with('success','Account Updated.');

        }
        else
        {
            return redirect()->back()->with('error','Error Occurred in updating the settings. try again.');
        }
    }
    else{
        return redirect()->back()->with('error','Incorrect Current Password.');
       
    }
    }

    public function viewEnterprise($id)
    {
        $data['enterprise'] = Enterprise::find($id);
        $data['users'] = EnterpriseUser::where('e_id','=',$id)->get();
        $data['contacts'] = EnterpriseContact::where('e_id','=',$id)->get();
        $data['docs'] = DocTypes::where('e_id','=',$id)->orWhere('e_id','=',0)->get();
        return view('admin.viewenterprise',$data);
    }

    public function deleteEnterpriseUser($id)
    {
        $user = EnterpriseUser::find($id);
        if($user->delete())
        {
            return redirect()->back()->with('success',"User Deleted");
        }
        else
        {
            return redirect()->back()->with('error',"Error Occurred in deleting the user try again.");

        }
    }

    public function enterprisedocs($id)
    {
        $data['sub'] = SubDocs::find($id);
        $docs = Documents::where('sd_id','=',$id)->get();
        $data['docs'] = $docs;
       return view('admin.allsubdocsdocs',$data);
    }

    public function enterpriseviewdocs($id)
    {
        $doc = Documents::find($id);
        $data['doc'] = $doc;
        return view('admin.viewSubdocDoc',$data);
    }

    public function deleteSubDocDoc($id)
    {
        $doc = Documents::find($id);
        if($doc->delete())
        {
            return redirect()->back()->with('success','Document Deleted');
        }
        else
        {
            return redirect()->back()->with('error','Error Occurred in deleting the document. Try again.');

        }
    }

    public function deleteSubDoc($id)
    {
        $doc = SubDocs::find($id);
        if($doc->delete())
        {
            return redirect()->back()->with('success','Sub Document Deleted');
        }
        else
        {
            return redirect()->back()->with('error','Error Occurred in deleting the document. Try again.');

        }
    }

    public function deleteDocType($id)
    {
        $doc = DocTypes::find($id);
        if($doc->delete())
        {
            return redirect()->back()->with('success','Document Type Deleted');
        }
        else
        {
            return redirect()->back()->with('error','Error Occurred in deleting the document. Try again.');

        }
    }
}
