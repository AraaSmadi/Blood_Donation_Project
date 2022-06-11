<?php

namespace App\Http\Controllers;

use App\Models\blood_doner_needed;
use App\Http\Requests\Storeblood_doner_neededRequest;
use App\Http\Requests\Updateblood_doner_neededRequest;
use GuzzleHttp\Psr7\Request;
use Illuminate\Support\Facades\Redirect;

class BloodDonerNeededController extends Controller
{


    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $req)
    {
$patient = new blood_doner_needed ;
$patient->b_d_n_name =$req->Name ;
$patient->b_d_n_phone =$req->phone ;
$patient->b_d_n_address =$req->Address ;
$patient->b_d_n_age =$req->age ;
$patient->b_d_n_name =$req->Name ;
$patient->b_d_n_name =$req->Name ;
$patient->save();
return Redirect('index');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\Storeblood_doner_neededRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Storeblood_doner_neededRequest $request)
    {
        //
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
