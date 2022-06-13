<?php

namespace App\Http\Controllers;
use App\Models\blood_doner_needed;
use App\Http\Requests\Storeblood_doner_neededRequest;
use App\Http\Requests\Updateblood_doner_neededRequest;
use App\Models\blood_type;
use App\Models\blood_doner;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Validator;
use Session ;
use Illuminate\Support\Facades\Hash;
use Symfony\Component\Console\Input\Input;

class BloodDonerNeededController extends Controller
{


    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function index(Request $request)
    {
        if(Session::has('user_email'))
        {
            $user = blood_doner_needed::where('b_d_n_email' , Session::get('user_email'))->first();
            if(isset($user)){
               $doner = blood_doner::all();
               $blood = blood_type::all();
                 return view('registration_patient.profile_patient' , compact('user','doner' , 'blood'));
            }
            else{
                $user = blood_doner::where('b_d_email' , Session::get('user_email'))->first();
                $doner = blood_doner::all();
                $blood = blood_type::all();
                return view('blood_doner.profile' , compact('user','doner' , 'blood'));
            }
        }
     return redirect('login');
       
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        if(Session::has('user_email'))
        {
            $user = blood_doner_needed::where('b_d_n_email' , Session::get('user_email'))->first();
            if(isset($user)){
               $doner = blood_doner::all();
               $blood = blood_type::all();
                 return view('registration_patient.profile_patient' , compact('user','doner' , 'blood'));
            }
            else{
                $user = blood_doner::where('b_d_email' , Session::get('user_email'))->first();
                $doner = blood_doner::all();
                $blood = blood_type::all();
                return view('blood_doner.profile' , compact('user','doner' , 'blood'));
            }
        }
        $type = blood_type::all();
        return view('registration_patient.register' , compact('type'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\Storeblood_doner_neededRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Storeblood_doner_neededRequest $req)
    {
        if(Session::has('user_email'))
        {
            $user = blood_doner_needed::where('b_d_n_email' , Session::get('user_email'))->first();
            if(isset($user)){
               $doner = blood_doner::all();
               $blood = blood_type::all();
                 return view('registration_patient.profile_patient' , compact('user','doner' , 'blood'));
            }
            else{
                $user = blood_doner::where('b_d_email' , Session::get('user_email'))->first();
                $doner = blood_doner::all();
                $blood = blood_type::all();
                return view('blood_doner.profile' , compact('user','doner' , 'blood'));
            }
        }
        
         $input =Validator::make($req->all(), [
            'b_d_n_name'=>'required|max:255',
            'b_d_n_gender'=>'required|max:255',
            'b_d_n_phone'=>'required|max:255|unique:blood_doner_neededs',
            'b_d_n_address'=>'required|max:255',
            'b_d_n_email'=>'required|max:255|unique:blood_doner_neededs',
            'b_d_n_password'=>'min:6|required_with:password_confirmation|same:password_confirmation',
            'password_confirmation' => 'min:6',
            'b_d_n_age'=>'required|max:255',
            'b_d_blood_type'=>'required|max:255'
         ])->validate();
         
         $input['b_d_n_password'] = Hash::make($input['b_d_n_password']);
        
        blood_doner_needed::create($input);
        return redirect('patient');
    }
   
    /**
     * Display the specified resource.
     *
     * @param  \App\Models\blood_doner_needed  $blood_doner_needed
     * @return \Illuminate\Http\Response
     */
    public function show(blood_doner_needed $blood_doner_needed)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\blood_doner_needed  $blood_doner_needed
     * @return \Illuminate\Http\Response
     */
    public function edit(blood_doner_needed $blood_doner_needed)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\Updateblood_doner_neededRequest  $request
     * @param  \App\Models\blood_doner_needed  $blood_doner_needed
     * @return \Illuminate\Http\Response
     */
    public function update(Updateblood_doner_neededRequest $request, blood_doner_needed $blood_doner_needed)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\blood_doner_needed  $blood_doner_needed
     * @return \Illuminate\Http\Response
     */
    public function destroy(blood_doner_needed $blood_doner_needed)
    {
        //
    }
}
