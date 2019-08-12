<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data['title']='Admin List';
        $data['users'] = User::all();
        return view('admin.index',$data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data['title'] = 'Create Admin';
        return view('admin.create',$data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
         //bcrypt($request->password);

        $request->validate([
            'adminType'=> 'required',
            'name' => 'required',
            'phone' => 'required',
            'email' => 'required',
            'password' =>'required',
            'status' => 'required'
        ]);

        $user = $request->except('_token','_method');
        $user['password'] = bcrypt($request->password);

        //dd($request->all());

        //File Upload
        if($request->hasFile('file')){
            $file = $request->file('file');
            $file->move('Backend/assets/img/user/',$file->getClientOriginalName());
            $user['file'] = 'Backend/assets/img/user/'.$file->getClientOriginalName();
        }


        //dd($file);


        User::create($user);
      //  session()->flash('message','Admin Created Successfully');
        return redirect()->route('user.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

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
