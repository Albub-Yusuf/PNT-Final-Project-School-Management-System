<?php

namespace App\Http\Controllers;

use App\Student;
use Illuminate\Http\Request;
use File;
use DB;

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
            'day'=>$day,'month'=>$month,'year'=>$year,'sessions'=>$request->sessions,'birth_certificate_number'=>
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
        $data['title'] = 'Edit Student Info';
        $data['student_info'] = $student;
        return view('student.edit',$data);
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
        /**
         $request->validate([

        'sessions' => 'required',
         'name' => 'required',
        'father_name' => 'required',
        'father_occupation' => 'required',
        'mother_name' => 'required',
        'phone' => 'required',
        'email' => 'required',
        'present_address' => 'required',
        'permanent_address' => 'required',
        'birth_certificate' => 'required',
        'classes' => 'required',
            'year'=>'required',
             'month'=>'required',
           'day'=>'required',
       //'dob' => 'required',
        'gender' => 'required'

        ]);
**/
         $student_r = $request->except('_token','_method');

        //dd($request->all());

        //File Upload students image
        $student_image = '';
        $studentImage='';
        if($request->hasFile('student_image')){
            if($request->hasFile('student_image')){
                $student_image = $request->file('student_image');
                $student_image->move('Backend/assets/img/students/',$student_image->getClientOriginalName());
                File::delete($request->student_image);
                $studentImage = 'Backend/assets/img/students/'.$student_image->getClientOriginalName();
                //dd($studentImage);


            }

        }
        //File Upload student signature
        $student_signature = '';
        $studentSignature='';
        if($request->hasFile('student_signature')){
            if($request->hasFile('student_signature')){
                $student_signature = $request->file('student_signature');
                $student_signature->move('Backend/assets/img/students/',$student_signature->getClientOriginalName());
                File::delete($request->student_signature);
                $studentSignature = 'Backend/assets/img/students/'.$student_signature->getClientOriginalName();
                //dd($studentSignature);

            }

        }

        //File Upload guardian image
        $guardian_image = '';
        $guardianImage='';
        if($request->hasFile('guardian_image')){
            if($request->hasFile('guardian_image')){
                $guardian_image = $request->file('guardian_image');
                $guardian_image->move('Backend/assets/img/guardian/',$guardian_image->getClientOriginalName());
                File::delete($request->guardian_image);
                $guardianImage = 'Backend/assets/img/guardian/'.$guardian_image->getClientOriginalName();
               // dd($guardianImage);
            }

        }
       //dd($student_image);
        if(($studentImage == NULL) && ($guardianImage == NULL) && ($studentSignature == Null)){
            echo "Inside If Branch";

            Student::where('id',$student->id)->update(['name'=>$request->name,'father_name'=>$request->father_name,
                'mother_name'=>$request->mother_name,'phone'=>$request->phone,'email'=>$request->email,
                'permanent_address'=>$request->permanent_address,'present_address'=>$request->present_address,
                'day'=>$request->day,'month'=>$request->month,'year'=>$request->year,'sessions'=>$request->sessions,'birth_certificate_number'=>
                    $request->birth_certificate,'gender'=>$request->gender,'class'=>$request->classes,'department'=>'None','father_occupation'=>
                    $request->father_occupation

            ]);

            return redirect()->route('student.index');

        }elseif(($studentImage != NULL) && ($guardianImage == NULL) && ($studentSignature == Null) ){

            echo "only upload student image";
            Student::where('id',$student->id)->update(['name'=>$request->name,'father_name'=>$request->father_name,
                'mother_name'=>$request->mother_name,'phone'=>$request->phone,'email'=>$request->email,
                'permanent_address'=>$request->permanent_address,'present_address'=>$request->present_address,
                'day'=>$request->day,'month'=>$request->month,'year'=>$request->year,'sessions'=>$request->sessions,'birth_certificate_number'=>
                    $request->birth_certificate,'gender'=>$request->gender,'class'=>$request->classes,'department'=>'None','student_image'=>$studentImage,'father_occupation'=>
                    $request->father_occupation]);
            return redirect()->route('student.index');



        }elseif(($studentImage == NULL) && ($guardianImage != NULL) && ($studentSignature != Null)){
            echo "Only guardian image uploaded";
            Student::where('id',$student->id)->update(['name'=>$request->name,'father_name'=>$request->father_name,
                'mother_name'=>$request->mother_name,'phone'=>$request->phone,'email'=>$request->email,
                'permanent_address'=>$request->permanent_address,'present_address'=>$request->present_address,
                'day'=>$request->day,'month'=>$request->month,'year'=>$request->year,'sessions'=>$request->sessions,'birth_certificate_number'=>
                    $request->birth_certificate,'gender'=>$request->gender,'class'=>$request->classes,'department'=>'None','guardian_image'=>$guardianImage,'father_occupation'=>
                    $request->father_occupation]);
            return redirect()->route('student.index');

        }elseif(($studentImage == NULL) && ($guardianImage == NULL) && ($studentSignature != Null)){
            echo "Only student signature uploaded";
            Student::where('id',$student->id)->update(['name'=>$request->name,'father_name'=>$request->father_name,
                'mother_name'=>$request->mother_name,'phone'=>$request->phone,'email'=>$request->email,
                'permanent_address'=>$request->permanent_address,'present_address'=>$request->present_address,
                'day'=>$request->day,'month'=>$request->month,'year'=>$request->year,'sessions'=>$request->sessions,'birth_certificate_number'=>
                    $request->birth_certificate,'gender'=>$request->gender,'class'=>$request->classes,'department'=>'None','student_signature'=>$studentSignature,'father_occupation'=>
                    $request->father_occupation]);
            return redirect()->route('student.index');



        }elseif(($studentImage != NULL) && ($guardianImage != NULL) && ($studentSignature == Null)){
            echo "student image and guardian image uploaded";
            Student::where('id',$student->id)->update(['name'=>$request->name,'father_name'=>$request->father_name,
                'mother_name'=>$request->mother_name,'phone'=>$request->phone,'email'=>$request->email,
                'permanent_address'=>$request->permanent_address,'present_address'=>$request->present_address,
                'day'=>$request->day,'month'=>$request->month,'year'=>$request->year,'sessions'=>$request->sessions,'birth_certificate_number'=>
                    $request->birth_certificate,'gender'=>$request->gender,'class'=>$request->classes,'department'=>'None','student_image'=>$studentImage,'guardian_image'=>$guardianImage,'father_occupation'=>
                    $request->father_occupation]);
            return redirect()->route('student.index');


        }elseif(($studentImage != NULL) && ($guardianImage == NULL) && ($studentSignature != Null)){
            echo "student image and student signature uploaded";
            Student::where('id',$student->id)->update(['name'=>$request->name,'father_name'=>$request->father_name,
                'mother_name'=>$request->mother_name,'phone'=>$request->phone,'email'=>$request->email,
                'permanent_address'=>$request->permanent_address,'present_address'=>$request->present_address,
                'day'=>$request->day,'month'=>$request->month,'year'=>$request->year,'sessions'=>$request->sessions,'birth_certificate_number'=>
                    $request->birth_certificate,'gender'=>$request->gender,'class'=>$request->classes,'department'=>'None','student_image'=>$studentImage,'student_signature'=>$studentSignature,'father_occupation'=>
                    $request->father_occupation]);
            return redirect()->route('student.index');

        }elseif(($studentImage == NULL) && ($guardianImage != NULL) && ($studentSignature != Null)){
            echo "student signature and guardian image is uploaded";
            Student::where('id',$student->id)->update(['name'=>$request->name,'father_name'=>$request->father_name,
                'mother_name'=>$request->mother_name,'phone'=>$request->phone,'email'=>$request->email,
                'permanent_address'=>$request->permanent_address,'present_address'=>$request->present_address,
                'day'=>$request->day,'month'=>$request->month,'year'=>$request->year,'sessions'=>$request->sessions,'birth_certificate_number'=>
                    $request->birth_certificate,'gender'=>$request->gender,'class'=>$request->classes,'department'=>'None','student_signature'=>$studentSignature,'guardian_image'=>$guardianImage,'father_occupation'=>
                    $request->father_occupation]);
            return redirect()->route('student.index');
        }else{
            echo "student image signature and guardian image will be uploaded";
            Student::where('id',$student->id)->update(['name'=>$request->name,'father_name'=>$request->father_name,
                'mother_name'=>$request->mother_name,'phone'=>$request->phone,'email'=>$request->email,
                'permanent_address'=>$request->permanent_address,'present_address'=>$request->present_address,
                'day'=>$request->day,'month'=>$request->month,'year'=>$request->year,'sessions'=>$request->sessions,'birth_certificate_number'=>
                    $request->birth_certificate,'gender'=>$request->gender,'class'=>$request->classes,'department'=>'None','student_image'=>$studentImage,'student_signature'=>$studentSignature,'guardian_image'=>$guardianImage,'father_occupation'=>
                    $request->father_occupation]);
            return redirect()->route('student.index');
        }


    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function destroy(Student $student)
    {
        File::delete($student->student_image);
        File::delete($student->student_signature);
        File::delete($student->guardian_image);
        $student->delete();

        return redirect()->route('student.index');
    }

    public function request(){

        $data['title'] = 'Student Addmission Request';
        $data['requests'] = student::where('status','pending')->orderBy('id','DESC')->get();
        return view('student.request',$data);
        //dd($data);
    }

    public function studentInfo($id){

       $data['title'] = 'Student Info';
       $data['studentInfo'] = Student::where('id',$id)->first();
      // $sessions = Student::select('sessions')->where('id',$id)->get();
       //$class = Student::select('class')->where('id',$id)->get();
       //dd($sessions);
      // $data['seat_availability'] = Student::where('sessions',$data['studentInfo']->sessions)->where('class',$data['studentInfo']->class)->count();
       return view('student.requestedStudentInfo',$data);
    }

    public function admittedStudent(Request $request){

        Student::where('id',$request->id)->update(['status'=>$request->status]);
        Student::where('id',$request->id)->forceDelete();

        DB::table('selectedStudents')->insert(
            [

                'sid' => $request->sid,
                'roll' => $request->roll,
                'name' => $request->name,
                'username' => $request->username,
                'password' => $request->password,
                'father_name' => $request->father_name,
                'mother_name' => $request->mother_name,
                'phone' => $request->phone,
                'email' => $request->email,
                'permanent_address' => $request->permanent_address,
                'present_address' => $request->present_address,
                'day' => $request->day,
                'month' => $request->month,
                'year' => $request->year,
                'sessions' => 2019,
                'birth_certificate_number' => $request->birth_certificate_number,
                'nationality' => $request->nationality,
                'gender' => $request->gender,
                'class' => $request->class,
                'department' => $request->department,
                'student_image' => $request->student_image,
                'student_signature' => $request->student_signature,
                'guardian_image' => $request->guardian_image,
                'father_occupation' => $request->father_occupation,
                'created_at' => now()

            ]
        );



        DB::table('guardians')->insert(
            [

                'sid' => $request->sid,
                'name' => $request->father_name,
                'phone' => $request->phone,
                'email' => $request->email,
                'password' => $request->password,
                'present_address' => $request->present_address,
                'permanent_address' => $request->permanent_address,
                'guardian_image' => $request->guardian_image,
                'created_at' => now()

            ]
        );



        return redirect()->route('dashboard');
    }

    public function waitingListStudent(Request $request){

        echo "Inside Student Waiting List";
    }

    public function addguardian(){

    }


}
