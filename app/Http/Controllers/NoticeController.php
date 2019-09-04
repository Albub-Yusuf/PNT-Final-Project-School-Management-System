<?php

namespace App\Http\Controllers;

use App\Notice;
use Illuminate\Http\Request;

class NoticeController extends Controller
{
    public function index(){
        $data['title'] = 'Notice List';
        $data['notices'] = Notice::orderBy('id','DESC')->get();
        return view('notice.index',$data);
    }
    public function create(){

        $data['title'] = 'Create Notice';
        //$data['notices'] = Notice::orderBy('id','DESC')->all();
        return view('notice.create',$data);
    }

    public function store(Request $request){


        $notice_image = '';
        if($request->hasFile('image')){
            $file = $request->file('image');
            $file->move('Backend/assets/img/notice/',$file->getClientOriginalName());
            $notice_image = 'Backend/assets/img/notice/'.$file->getClientOriginalName();
        }
        Notice::create(['title'=>$request->title,'details'=>$request->details,'image'=>$notice_image,'status'=>$request->status]);
        return redirect()->route('notice.index');
    }

    public function show($id){

    }

    public function edit($id){

    }

    public function update(Request $request,$id){

    }

    public function destroy($id){

    }
}
