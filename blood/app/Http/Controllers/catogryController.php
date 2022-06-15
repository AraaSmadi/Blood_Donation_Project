<?php

namespace App\Http\Controllers;
use App\Models\blood_doner;
use Illuminate\Http\Request;

class catogryController extends Controller
{
    public function datadonor (){
        $a= blood_doner::all()->where('b_d_blood_type','1');
        $a+= blood_doner::all()->where('b_d_blood_type','2');
        $b= blood_doner::all()->where('b_d_blood_type','3');
        $b+= blood_doner::all()->where('b_d_blood_type','4');
        $ab= blood_doner::all()->where('b_d_blood_type','5');
        $ab+= blood_doner::all()->where('b_d_blood_type','6');
        $o= blood_doner::all()->where('b_d_blood_type','7');
        $o+= blood_doner::all()->where('b_d_blood_type','8');
        return view('catogry',compact('a','b' ,'ab', 'o'));
    }


    public function numberdonor(blood_doner $blood_doner)
    {
        $a= blood_doner::where('b_d_blood_type','1')->count();
        $a+= blood_doner::where('b_d_blood_type','2')->count();
        $b= blood_doner::where('b_d_blood_type','3')->count();
        $b+= blood_doner::where('b_d_blood_type','4')->count();
        $ab= blood_doner::where('b_d_blood_type','5')->count();
        $ab+= blood_doner::where('b_d_blood_type','6')->count();
        $o= blood_doner::where('b_d_blood_type','7')->count();
        $o+= blood_doner::where('b_d_blood_type','8')->count();
    return view('catogry',compact('a','b' ,'ab', 'o'));
    }
}
