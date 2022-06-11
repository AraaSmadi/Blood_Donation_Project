<?php

namespace App\Http\Controllers;

use App\Models\blood_doner;
use App\Http\Requests\Storeblood_donerRequest;
use App\Http\Requests\Updateblood_donerRequest;

class BloodDonerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('blood_doner.create');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\Storeblood_donerRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Storeblood_donerRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\blood_doner  $blood_doner
     * @return \Illuminate\Http\Response
     */
    public function show(blood_doner $blood_doner)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\blood_doner  $blood_doner
     * @return \Illuminate\Http\Response
     */
    public function edit(blood_doner $blood_doner)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\Updateblood_donerRequest  $request
     * @param  \App\Models\blood_doner  $blood_doner
     * @return \Illuminate\Http\Response
     */
    public function update(Updateblood_donerRequest $request, blood_doner $blood_doner)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\blood_doner  $blood_doner
     * @return \Illuminate\Http\Response
     */
    public function destroy(blood_doner $blood_doner)
    {
        //
    }
}
