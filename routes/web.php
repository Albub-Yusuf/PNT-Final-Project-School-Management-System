<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});


Route::get('admin/login','AdminLoginController@loginForm')->name('admin.login.form');
Route::post('admin/login','AdminLoginController@login')->name('login');

Route::middleware('auth')->group(function(){

  Route::get('dashboard','DashboardController@index')->name('dashboard');
  Route::get('admin/create','UserController@create')->name('admin.create');


  Route::resource('user','UserController');
  Route::get('user/manage','UserController@manageAdmin')->name('user.manage');
  Route::post('user/{id}/restore','UserController@restore')->name('user.restore');
  Route::post('user/{id}/delete','UserController@delete')->name('user.delete');

  Route::get('student/request','StudentController@request')->name('student.request');
  Route::get('student/request/{id}','StudentController@studentInfo')->name('student.request.info');
  Route::resource('student','StudentController');



});

Route::get('logout',function(){
	auth()->logout();
	return redirect()->route('admin.login.form');
})->name('logout');
