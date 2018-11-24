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
	return view('student.templates.child');
});

Route::group(['prefix' => 'admin'],function(){
	
	Route::get('/', function () {
		return view('admin.templates.child');
	});
	
	// For Department Route
	Route::get('department/getDataTable','admin\DepartmentsController@getDataTable');
	Route::resource('department', 'admin\DepartmentsController');

	Route::resource('program', 'admin\ProgramsController');
});
