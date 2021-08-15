<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\User;


class LoginController extends Controller
{
    //
    public function login_control(Request $request)
    {
        if (Auth::attempt([
           'email'=>$request->email,
           'password'=>$request->password
       ]))
         {
            $slug = User::where('email',$request->email)->first();
            
            
            if ($slug->department === "admin") {
                return view('/admin.index');
            }
            else if ($slug->department === "emis") {
                return view('/emis.index');
            }
            else if ($slug->department === "schAdmin") {
                return view('/school.index');

            // }else if ($slug->role === "Nurse") {
            //     return redirect('/nurse-index');
            // }else if ($slug->role === "super") {
            //     return redirect('/super');
            // }
            // else if ($slug->role === "admin" && $slug->status === "Pending") {
            //     return redirect('/intro');
            }
            
        }
        
       return back()->with('error')->with('error','Email/Password invalid');

   
}
}