<?php

namespace App\Http\Controllers;

use App\Exam;
use App\Student;
use App\Subject;
use App\Test;
use Illuminate\Http\Request;
use App\Sessions;
use App\Classes;
use DB;
class TestController extends Controller
{
    public function index(){

        $data['title'] = 'Search';
        $data['sessions'] = Sessions::all();
        $data['classes'] = Classes::all();
        $data['exams'] = Exam::all();
        $data['subjects'] = Subject::all();

        return view('admin.test',$data);

    }

    public function show(Request $request){

        $data['sessions'] = $request->sessions;
        $data['class'] = $request->classes;
        $data['exam'] = $request->exams;
        $data['subject'] = $request->subjects;
        $data['title'] = 'Give marks';
        $data['students'] = DB::table('selectedStudents')->where([
            ['sessions', '=', $request->sessions],
            ['class', '=', $request->classes],
        ])->get();

        return view('admin.giveMarks',$data);


    }
    public function store(Request $request){

        try{

            Test::create(['exam_name'=>$request->exam_name,'sessions'=>$request->sessions,'class'=>$request->class,
                'roll'=>$request->roll1,'subject_name'=>$request->subject_name,'sub1_marks'=>$request->marks1
            ]);
            Test::create(['exam_name'=>$request->exam_name,'sessions'=>$request->sessions,'class'=>$request->class,
                'roll'=>$request->roll2,'subject_name'=>$request->subject_name,'sub1_marks'=>$request->marks2
            ]);
            Test::create(['exam_name'=>$request->exam_name,'sessions'=>$request->sessions,'class'=>$request->class,
                'roll'=>$request->roll3,'subject_name'=>$request->subject_name,'sub1_marks'=>$request->marks3
            ]);
            Test::create(['exam_name'=>$request->exam_name,'sessions'=>$request->sessions,'class'=>$request->class,
                'roll'=>$request->roll4,'subject_name'=>$request->subject_name,'sub1_marks'=>$request->marks4
            ]);
            Test::create(['exam_name'=>$request->exam_name,'sessions'=>$request->sessions,'class'=>$request->class,
                'roll'=>$request->roll5,'subject_name'=>$request->subject_name,'sub1_marks'=>$request->marks5
            ]);
            Test::create(['exam_name'=>$request->exam_name,'sessions'=>$request->sessions,'class'=>$request->class,
                'roll'=>$request->roll6,'subject_name'=>$request->subject_name,'sub1_marks'=>$request->marks6
            ]);
            Test::create(['exam_name'=>$request->exam_name,'sessions'=>$request->sessions,'class'=>$request->class,
                'roll'=>$request->roll7,'subject_name'=>$request->subject_name,'sub1_marks'=>$request->marks7
            ]);
            Test::create(['exam_name'=>$request->exam_name,'sessions'=>$request->sessions,'class'=>$request->class,
                'roll'=>$request->roll8,'subject_name'=>$request->subject_name,'sub1_marks'=>$request->marks8
            ]);
            Test::create(['exam_name'=>$request->exam_name,'sessions'=>$request->sessions,'class'=>$request->class,
                'roll'=>$request->roll9,'subject_name'=>$request->subject_name,'sub1_marks'=>$request->marks9
            ]);
            Test::create(['exam_name'=>$request->exam_name,'sessions'=>$request->sessions,'class'=>$request->class,
                'roll'=>$request->roll10,'subject_name'=>$request->subject_name,'sub1_marks'=>$request->marks10
            ]);
            Test::create(['exam_name'=>$request->exam_name,'sessions'=>$request->sessions,'class'=>$request->class,
                'roll'=>$request->roll11,'subject_name'=>$request->subject_name,'sub1_marks'=>$request->marks11
            ]);
            Test::create(['exam_name'=>$request->exam_name,'sessions'=>$request->sessions,'class'=>$request->class,
                'roll'=>$request->roll12,'subject_name'=>$request->subject_name,'sub1_marks'=>$request->marks12
            ]);
            Test::create(['exam_name'=>$request->exam_name,'sessions'=>$request->sessions,'class'=>$request->class,
                'roll'=>$request->roll13,'subject_name'=>$request->subject_name,'sub1_marks'=>$request->marks13
            ]);
            Test::create(['exam_name'=>$request->exam_name,'sessions'=>$request->sessions,'class'=>$request->class,
                'roll'=>$request->roll14,'subject_name'=>$request->subject_name,'sub1_marks'=>$request->marks14
            ]);
            Test::create(['exam_name'=>$request->exam_name,'sessions'=>$request->sessions,'class'=>$request->class,
                'roll'=>$request->roll15,'subject_name'=>$request->subject_name,'sub1_marks'=>$request->marks15
            ]);
            Test::create(['exam_name'=>$request->exam_name,'sessions'=>$request->sessions,'class'=>$request->class,
                'roll'=>$request->roll16,'subject_name'=>$request->subject_name,'sub1_marks'=>$request->marks16
            ]);
            Test::create(['exam_name'=>$request->exam_name,'sessions'=>$request->sessions,'class'=>$request->class,
                'roll'=>$request->roll17,'subject_name'=>$request->subject_name,'sub1_marks'=>$request->marks17
            ]);
            Test::create(['exam_name'=>$request->exam_name,'sessions'=>$request->sessions,'class'=>$request->class,
                'roll'=>$request->roll1,'subject_name'=>$request->subject_name,'sub1_marks'=>$request->marks18
            ]);
            Test::create(['exam_name'=>$request->exam_name,'sessions'=>$request->sessions,'class'=>$request->class,
                'roll'=>$request->roll19,'subject_name'=>$request->subject_name,'sub1_marks'=>$request->marks19
            ]);
            Test::create(['exam_name'=>$request->exam_name,'sessions'=>$request->sessions,'class'=>$request->class,
                'roll'=>$request->roll20,'subject_name'=>$request->subject_name,'sub1_marks'=>$request->marks20
            ]);





            return redirect()->route('test.index');

        }catch (\Exception $e) {

           // return $e->getMessage();
            return redirect()->route('test.index');

        }



    }
}
