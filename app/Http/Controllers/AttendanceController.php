<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Sessions;
use App\Classes;
use DB;

class AttendanceController extends Controller
{
    public function index(){

        $data['title'] = 'Attendance List';
        //$data['status'] = 0;
        $data['sessions'] = Sessions::all();
        $data['classes'] = Classes::all();
        return view('teacher.attendanceList',$data);

    }

    public function giveAttendance(Request $request){

        //dd($request->all());
        $data['title'] = 'Give Attendance';
       // $data['status'] = 1;
        $data['class'] = $request->classes;
        $data['students'] = DB::table('selectedStudents')->where([
            ['sessions', '=', $request->sessions],
            ['class', '=', $request->classes],
        ])->get();
        return view('teacher.giveAttendance',$data);

    }

    public function store(Request $request){

       // echo "asdjhakjsdh";
        dd($request->all);
    }
}
