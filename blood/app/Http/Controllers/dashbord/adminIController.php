<?php

namespace App\Http\Controllers\dashbord;
use App\Models\blood_type;
use App\Models\blood_doner;
use App\Models\admin;
// use Illuminate\Support\Facades\DB;
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
    public function show(blood_doner_needed $user)
    {
        $users=blood_doner_needed::all();


//
        $bds= blood_doner::join('blood_types', 'blood_doners.b_d_blood_type', '=', 'blood_types.id')
               ->get(['blood_doners.*', 'blood_types.name']);




        return view('dashbord.doners',compact('users','bds'));

    }
    public function show0(blood_doner_needed $user)
    {
        $users=blood_doner_needed::join('blood_types', 'blood_doner_neededs.b_d_blood_type', '=', 'blood_types.id')
        ->get(['blood_doner_neededs.*', 'blood_types.name']);
        // $bds=blood_doner::all();

        return view('dashbord.needed',compact('users'));

    }
    public function show1(blood_doner_needed $user)
    {$name = admin::all()->where('roll', '1');


        $u = blood_doner::all()->count();
        $d=blood_doner::all();
        $data=session('d');
        $s=blood_doner_needed::all()->count();
        $a=admin::all()->where('roll', '1')->count();
        return view('dashbord.index',compact('u','s','a','name','data'));

    }
    // public function show2(blood_doner_needed $user)
    // {$name = admin::all()->where('roll', '1');
    //     $u = blood_doner::all()->count();
    //     $d=blood_doner::all();
    //     $s=blood_doner_needed::all()->count();
    //     $a=admin::all()->where('roll', '1')->count();
    //     return view('dashbord.layout.nav',compact('d'));

    // }


    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $avtive=blood_doner::find($id);
        // dd($avtive);
        $avtive->status=1;
        $avtive->save();
        return redirect('admindoners');
    }
    public function edit1($id)
    {
        $avtive=blood_doner::find($id);
        // dd($avtive);
        $avtive->status=2;
        $avtive->save();
        return redirect('admindoners');
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
