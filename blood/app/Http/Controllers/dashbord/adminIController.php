<?php

namespace App\Http\Controllers\dashbord;
use App\Models\toDo;
use App\Models\blood_type;
use App\Models\blood_doner;
use App\Models\admin;
use App\Models\contact;
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
    { $request->validate([
        'todo' => 'required'
    ]);
        toDo::create([
            'todo'=>$request->todo
        ]);
        return redirect('admin');
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

               $d=blood_doner::all();


        return view('dashbord.doners',compact('users','bds','d'));

    }


    public function show0(blood_doner_needed $user)
    {
        $users=blood_doner_needed::join('blood_types', 'blood_doner_neededs.b_d_blood_type', '=', 'blood_types.id')
        ->get(['blood_doner_neededs.*', 'blood_types.name']);
        // $bds=blood_doner::all();
        $d=blood_doner::all();
        return view('dashbord.needed',compact('users','d'));

    }





    public function show1(blood_doner_needed $user)
    {$name = admin::all()->where('roll', '1');


        $u = blood_doner::all()->count();
        $d=blood_doner::all();
        // $data=session('d');

        $mes=contact::orderBy('updated_at', 'desc')->paginate(4);

        $todo=toDo::orderBy('updated_at', 'desc')->paginate(4);;
        $s=blood_doner_needed::all()->count();
        $a=admin::all()->where('roll', '1')->count();
        return view('dashbord.index',compact('u','s','a','name','todo','mes','d'));

    }

                 public function show4(){
                    $d=blood_doner::all();
                 $mes=toDo::all();
                 return view('dashbord.table',compact('mes','d'));
        }









    // public function show2(blood_doner_needed $user)
    // {$name = admin::all()->where('roll', '1');
    //     $u = blood_doner::all()->count();
    //     $d=blood_doner::all();
    //       $mes=contact::orderBy('updated_at', 'desc')->paginate(4);

    //     $s=blood_doner_needed::all()->count();
    //     $a=admin::all()->where('roll', '1')->count();
    //     return view('dashbord.index',compact('d'));

    // }

    public function message()
    {  $message=contact::all();
        $d=blood_doner::all();

        return view('dashbord.form',compact('message','d'));

    }


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
        $avtive->status= 2 ;
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
       $todo =toDo::find($id);
       $todo->destroy($id);
       return redirect('admin');
    }
}
