<?php

namespace App\Http\Controllers;

use App\Sessions;
use Illuminate\Http\Request;

class SessionController extends Controller
{
    public function create(){

        $data['title'] = 'Create Session';
        return view('session.create',$data);
    }

    public function store(Request $request){
        $request->validate(['sessions' => 'required']);
        Sessions::create(['sessions'=>$request->sessions]);
        return redirect()->route('dashboard');

    }
}
