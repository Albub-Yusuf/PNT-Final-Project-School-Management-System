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
  Route::get('student/selected/profile/{id}','StudentController@studentProfile')->name('student.profile');
    Route::post('student/selected','StudentController@admittedStudent')->name('student.selected');
    Route::post('student/waiting','StudentController@waitingListStudent')->name('student.waiting');

    Route::get('student/list','StudentController@studentList')->name('student.list');
    Route::post('student/show/list','StudentController@studentSearchByClass')->name('student.show.list');
    Route::get('student/selected/edit/{id}','StudentController@selectedStudentEdit')->name('student.selected.edit');
    Route::post('student/selected/discard/{id}','StudentController@selectedStudentDelete')->name('student.selected.discard');
    Route::post('student/selected/update/{id}','StudentController@selectedStudentUpdate')->name('student.selected.update');

    Route::resource('student','StudentController');



});

Route::get('logout',function(){
	auth()->logout();
	return redirect()->route('admin.login.form');
})->name('logout');
