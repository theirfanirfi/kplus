<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Models\Enterprise;
use App\Http\Models\DocTypes;
use App\Http\Models\SubDocs;
use App\Http\Models\Documents;

class PreviewController extends Controller
{
    //

    public function index()
    {
        echo "<h1>Select Enterprise to Preview</h1>";
        exit();
    }

    public function enterprise($eid)
    {
        $enterprise = Enterprise::find($eid);
        $data['enterprise'] = $enterprise;
        $data['dts'] = DocTypes::where('e_id','=',$eid)->orwhere('e_id','=',0)->orderby('dt_id','desc')->get();
        return view('Preview.enterprise',$data);
    }

    public function planSubDocs($id,$eid)
    {
        $sub = SubDocs::where('dt_id','=',$id)->get();
        $data['dt'] = DocTypes::find($id);
        $data['dts'] = DocTypes::where('e_id','=',$eid)->orwhere('e_id','=',0)->orderby('dt_id','desc')->get();
        $data['sub'] = $sub;
        $data['enterprise'] = Enterprise::find($eid);
        return view('Preview.docSubDocs',$data);
    }

    public function viewDoc($sid,$dtid)
    {
      
        $doc = Documents::where('sd_id','=',$sid)->get()->first();
        $data['doc'] = $doc;
        $data['sub'] = SubDocs::where('dt_id','=',$dtid)->get();
        $data['enterprise'] = Enterprise::find($doc->e_id);
        return view('Preview.viewDoc',$data);
    }
}
