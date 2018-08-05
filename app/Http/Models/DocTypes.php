<?php

namespace App\Http\Models;
use App\Http\Models\SubDocs;
use Illuminate\Database\Eloquent\Model;

class DocTypes extends Model
{
    //
    protected $table = "document_types";
    protected $primaryKey = "dt_id";

    public function returnCount()
    {
        return SubDocs::where('dt_id','=',$this->dt_id)->get()->count();
    }
}
