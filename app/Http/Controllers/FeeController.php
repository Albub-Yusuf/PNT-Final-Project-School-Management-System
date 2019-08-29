<?php

namespace App\Http\Controllers;

use App\Classes;
use App\Fee;
use App\Sessions;
use Illuminate\Http\Request;

class FeeController extends Controller
{
    public function index(){

    }

    public function collectFee(){

        $data['title'] = 'Fee Collection';
        $data['sessions'] = Sessions::all();
        $data['classes'] = Classes::all();

        return view('admin.fee',$data);

    }

    public function store(Request $request){

        $date = $request->payment_date;
        list($year, $month, $day) = explode('-', $date);

        $status = 'paid';


        $data['year'] = $year;
        $data['month'] = $month;
        $data['day'] = $day;
        $data['status'] = 'paid';

        Fee::create(['sessions'=>$request->sessions,'class'=>$request->classes,
            'roll'=>$request->roll,'name'=>$request->name,'date'=>$request->payment_date,
            'day'=>$day,'month'=>$month,'year'=>$year,'amount'=>$request->amount,'collected_by'=>$request->collected_by,
            'status'=>$status
        ]);

        return redirect()->route('dashboard');

        //dd($request->all());


    }
}
