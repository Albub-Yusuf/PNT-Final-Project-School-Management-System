<?php

namespace App\Http\Controllers;

use App\Student;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $serial =0;

        $data['serial'] =+$serial;

        $data['title'] = 'New Student List';
        $data['students'] = Student::orderBy('id','DESC')->paginate(5);
        return view('student.index',$data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data['title'] = 'Create Student';
        return view('student.create',$data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $date = $request->dob;
        list($year, $month, $day) = explode('-', $date);

      //  $request->validate([

            //$request->sessions => 'required',
           //  $request->name => 'required',

           // $request->father_name => 'required',
           // $request->father_occupation => 'required',
           // $request->mother_name => 'required',

           // $request->phone => 'required',
         //   $request->email => 'required',
           // $request->present_address => 'required',
           // $request->permanent_address => 'required',
            // $request->birth_certificate => 'required',
            // $request->classes => 'required',
            //  $request->dob => 'required',
            // $request->gender => 'required'

        //]);



        $data['year'] = $year;
        $data['month'] = $month;
        $data['day'] = $day;
        //dd($data);
       // dd($request->all());

        $student_image = '';
        $student_signature = '';
        $guardian_image = '';

        //File Upload Students
        if($request->hasFile('student_image')){
            $file = $request->file('student_image');
            $file->move('Backend/assets/img/students/',$file->getClientOriginalName());
            $student_image = 'Backend/assets/img/students/'.$file->getClientOriginalName();
        }

        //File Upload signature
        if($request->hasFile('student_signature')){
            $file = $request->file('student_signature');
            $file->move('Backend/assets/img/students/',$file->getClientOriginalName());
            $student_signature = 'Backend/assets/img/students/'.$file->getClientOriginalName();
        }

        //File Upload
        if($request->hasFile('guardian_image')){
            $file = $request->file('guardian_image');
            $file->move('Backend/assets/img/guardian/',$file->getClientOriginalName());
            $guardian_image = 'Backend/assets/img/guardian/'.$file->getClientOriginalName();
        }

        //dd($student_image);


        Student::create(['name'=>$request->name,'father_name'=>$request->father_name,
            'mother_name'=>$request->mother_name,'phone'=>$request->phone,'email'=>$request->email,
            'permanent_address'=>$request->permanent_address,'present_address'=>$request->present_address,
            'day'=>$day,'month'=>$month,'year'=>$year,'session'=>$request->sessions,'birth_certificate_number'=>
            $request->birth_certificate,'gender'=>$request->gender,'class'=>$request->classes,'department'=>'None','student_image'=>$student_image,'student_signature'=>$student_signature,'guardian_image'=>$guardian_image,'father_occupation'=>
            $request->father_occupation,

        ]);

        return redirect()->route('student.index');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function show(Student $student)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function edit(Student $student)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Student $student)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function destroy(Student $student)
    {
        //
    }
}
