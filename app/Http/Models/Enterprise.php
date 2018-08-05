<?php

namespace App\Http\Models;

use Illuminate\Database\Eloquent\Model;
use App\User;
use App\Http\Models\UpgradePlan;
class Enterprise extends Model
{
    //
    protected $table = "enterprises";
    protected $primaryKey = "e_id";

    public function getEnterprise()
    {
        return Enterprise::where('user_id','=',$this->id)->get()->first();
    }

    public function getUser()
    {
        return User::where('id','=',$this->user_id)->get()->first();
    }

    public function returnPlan()
    {
        return UpgradePlan::where(['user_id' => $this->user_id, 'isActive' => 1])->get()->first()->plan_title;
    }
}
