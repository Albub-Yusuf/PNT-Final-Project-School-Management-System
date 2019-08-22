<?php

namespace App\Http\Controllers;

use App\Teacher;
use Illuminate\Http\Request;
use File;

class TeacherController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data['title'] = 'Teachers List';
        $data['teachers'] = Teacher::orderBy('id','DESC')->get();
        return view('teacher.index',$data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data['title'] = 'Create Teacher';
        return view('teacher.create',$data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $password = bcrypt($request->password);
        $teacher_image = '';
        //File Upload Students
        if($request->hasFile('teacher_image')){
            $file = $request->file('teacher_image');
            $file->move('Backend/assets/img/teachers/',$file->getClientOriginalName());
            $teacher_image = 'Backend/assets/img/teachers/'.$file->getClientOriginalName();
        }
        Teacher::create([

            'code' => $request->tcode,
            'name' => $request->name,
            'ms_major' => $request->ms_major,
            'ms_academy' => $request->ms_academy,
            'ms_result' => $request->ms_result,
            'bs_major' => $request->bs_major,
            'bs_academy' => $request->bs_academy,
            'bs_result' => $request->bs_result,
            'conducting_subject' => $request->conducting_subject,
            'phone' => $request->phone,
            'email' => $request->email,
            'password' => $password,
            'present_address' => $request->present_address,
            'permanent_address' => $request->permanent_address,
            'join_date' => $request->join_date,
            'teacher_image'=>$teacher_image,

        ]);

        return redirect()->route('dashboard');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $data['title'] = 'Teacher Profile';
        $data['teacherInfo'] = Teacher::where('id',$id)->first();

        return view('teacher.profile',$data);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data['title'] = 'Edit Teacher Info';
        $data['teacherInfo'] = Teacher::where('id',$id)->first();
        return view('teacher.edit',$data);
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
        //File Upload
        $image='';
        if($request->hasFile('teacher_image')){
            if($request->hasFile('teacher_image')){
                $file = $request->file('teacher_image');
                $file->move('Backend/assets/img/teachers/',$file->getClientOriginalName());
                File::delete($request->file);
                $image = 'Backend/assets/img/teachers/'.$file->getClientOriginalName();
            }

        }
        if($image != NULL){
            Teacher::where('id',$id)->update([
               'teacher_image'=>$image
            ]);
        }

        Teacher::where('id',$id)->update([

            'code' => $request->tcode,
            'name' => $request->name,
            'ms_major' => $request->ms_major,
            'ms_academy' => $request->ms_academy,
            'ms_result' => $request->ms_result,
            'bs_major' => $request->bs_major,
            'bs_academy' => $request->bs_academy,
            'bs_result' => $request->bs_result,
            'conducting_subject' => $request->conducting_subject,
            'phone' => $request->phone,
            'email' => $request->email,
            'present_address' => $request->present_address,
            'permanent_address' => $request->permanent_address,
            'join_date' => $request->join_date

        ]);

        return redirect()->route('dashboard');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Teacher::where('id',$id)->delete();
        return redirect()->route('dashboard');
    }
}
