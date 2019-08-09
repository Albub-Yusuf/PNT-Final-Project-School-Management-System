<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Session;

class AdminLoginController extends Controller
{
    public function loginForm(){
    	$data['title'] = 'Admin Login';
    	return view('admin.login',$data);
    }

    public function login(Request $request){

    	$request->validate([

    		'email' => 'required|email',
    		'password' => 'required'
    	]);

    	$mail = $request->email;

    	
        $credentials = $request->only('email', 'password');

        if (Auth::attempt($credentials)) {
            // Authentication passed...
        	//echo "Logged In";
            //return redirect()->route('dashboard');
            //$data['auth-info'] = auth()->user();
           

           return redirect()->intended('dashboard');
        }
        else{
            echo "not working";
            echo "<br>";
            //echo bcrypt('admin123');
        }

        Session::flash('message');
        return redirect()->back()->withInput(['email'=>$request->email]);


    }
}
