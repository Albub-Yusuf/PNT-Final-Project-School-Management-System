<?php

namespace App\Http\Controllers;

use App\Exam;
use App\Sessions;
use Illuminate\Http\Request;

class ExamController extends Controller
{
    public function create(){

        $data['title'] = 'Create Exam';
        $data['sessions'] = Sessions::all();
        return view('admin.createExam',$data);
    }

    public function store(Request $request){

        $request->validate([

            'exam_name' => 'required',
            'sessions' => 'required'

        ]);
        Exam::create(['exam_name'=>$request->exam_name,'sessions'=>$request->sessions]);
        return redirect()->route('dashboard');

    }

}
