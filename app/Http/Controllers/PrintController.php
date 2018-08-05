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
use PDF;
use App\User;

class PrintController extends Controller
{

    Public function index(Request $req)
    {

        $data['enterprise'] = Enterprise::find($req->input('e_id'));
        if($req->input('print_users'))
        {
          $users = EnterpriseUser::where('e_id','=',$req->input('e_id'))->get();
          $data['users'] = $users;
            
        }

        if($req->input('print_contacts'))
        {
            $contacts = EnterpriseContact::where('e_id','=',$req->input('e_id'))->get();
            $data['contacts'] = $contacts;
            
        }

        if($req->input('print_documents')){
            $data['dts'] = DocTypes::where('e_id','=',$req->input('e_id'))->orwhere('e_id','=',0)->get();
    
        }
        // $pdf = PDF::loadView('wesay',$data);
        // return $pdf->download('enterprise.pdf');

        return view('wesay',$data);
    }
}
