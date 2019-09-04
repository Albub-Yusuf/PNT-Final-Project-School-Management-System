<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class DashboardController extends Controller
{
    public function index(){

        $mmonth = date('m');
        $month = (int)$mmonth;
        $yyear = date('y');
        $year = (int)$yyear;
        $a = array();




        $a = DB::table('fees')->select('amount')->where([
           ['month', '=', 9],
            ['year','=', 2019]
        ])->get();
//dd($data);
dd(array_sum($a));
    	//$data['title'] = 'Dashboard';
    	//return view('admin.dashboard',$data);
    }
}
