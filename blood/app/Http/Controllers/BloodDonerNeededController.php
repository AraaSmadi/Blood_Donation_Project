<?php

namespace App\Http\Controllers;
use App\Models\blood_doner_needed;
use App\Http\Requests\Storeblood_doner_neededRequest;
use App\Http\Requests\Updateblood_doner_neededRequest;
use App\Models\blood_type;
use Illuminate\Support\Facades\Redirect;
use Validator;
class BloodDonerNeededController extends Controller
{


    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function index()
    {
        $type = blood_type::all();
        return view('registration_patient.register' , compact('type'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('registration_patient.register');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\Storeblood_doner_neededRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Storeblood_doner_neededRequest $req)
    {
         $input = Validator::make($req->all(), [
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
