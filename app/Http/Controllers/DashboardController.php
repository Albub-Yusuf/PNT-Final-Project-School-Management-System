<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class DashboardController extends Controller
{
    public function index(){

        $mmonth = date('m');
        $month = (int)$mmonth;
        $mnt = (int)$mmonth;
        $yyear = date('y');
        $my = (int)$yyear;



        //$count = DB::table('category_issue')->count();

        $data['total_fees'] = DB::table("fees")->where([
             ['month', '=', $mnt],
            ['year', '=', 2019]
        ])->sum('amount');

       // print_r($data);
        //$a = DB::table('fees')->select->sum('amount')->where([
          // ['month', '=', 9],
            //['year','=', 2019]
  //      ])->get();
//dd($data);
    // $res =   array_sum($a);
//dd($orders);

    	$data['title'] = 'Dashboard';
    	return view('admin.dashboard',$data);
    }
}
