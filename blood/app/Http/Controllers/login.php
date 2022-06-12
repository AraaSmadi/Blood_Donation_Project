<?php

namespace App\Http\Controllers;
use Validator;
use Illuminate\Http\Request;
use Auth;
class login extends Controller
{
    function index()
    {
     return view('login');
    }

    function checklogin(Request $request)
    {
     $this->validate($request, [
      'email'   => 'required|email',
      'Password'  => 'required|alphaNum|min:3'
     ]);

     $user_data = array(
      'email'  => $request->get('email'),
      'Password' => $request->get('password')
     );
}
function successlogin()
{
 return view('successlogin');
}

function logout()
{
 Auth::logout();
 return redirect('main');
}
}
