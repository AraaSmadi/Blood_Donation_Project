<?php

namespace App\Http\Controllers\dashbord;
use App\Models\User;
use App\Models\blood_doner;

use App\Models\blood_doner_needed;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class adminIController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {


        return view('dashbord.index');
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
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(User $user)
    {
        $users=User::all();
        return view('dashbord.index',compact('users'));
    }


     public function show1(blood_doner $user1)
     {
       $users1=blood_doner::all();
       return view('dashbord.chart',compact('users1'));
   }



   // public function show2(blood_doner_needed $user2)
   // {
   //     $users2=blood_doner_needed::all();
    //    return view('dashbord.chart',compact('users2'));
   // }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
