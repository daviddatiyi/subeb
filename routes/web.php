<?php

use Illuminate\Support\Facades\Route;

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
    return view('landing.index');
});
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

//Login Route
Route::post('/login_control','LoginController@login_control');


// Staff Route
Route::get('/regStaff', 'staffController@index');
Route::post('/regStaff', 'staffController@store');
Route::get('/monthlyRet', 'staffController@monthlyRet');
Route::post('/monthlyReturns', 'staffController@monthlyReturns');

//Student Route
Route::get('/reg_student', 'studentsController@index');
Route::post('/regStudent', 'studentsController@stores');
Route::POST('/update-student', 'studentsController@updateStudent');
Route::resource('students', 'studentsController');


Route::get('/test', 'studentsController@test');



//school sessions route
Route::get('/session', 'sessionsController@index');
Route::post('/addSchoolSession', 'sessionsController@store');


//student Group Route
Route::get('/stdGroup', 'studentGroupController@index');
Route::post('/studentGroup', 'studentGroupController@store');
Route::post('student_groups', 'studentGroupController@update');


//student Class Route
Route::get('/studentClass', 'studentsClassController@index');
Route::post('/addStudentClass', 'studentsClassController@store');
Route::post('/updateStudentClass', 'studentsClassController@update');

//Student Shift Route
Route::get('/studentShift', 'shiftsController@index');
Route::post('/addStudentShift', 'shiftsController@store');


//Class streams Route
Route::post('/addClassStream', 'classStreamsController@store');
Route::get('/streams', 'classStreamsController@streams');

// turorials
// Route::resource('posts','PostController');
Route::resource('posts', 'PostController');


// 2nd tutorials
Route::get('product-list', 'ProductController@index');
Route::get('product-list/{id}/edit', 'ProductController@edit');
Route::post('product-list/store', 'ProductController@store');
Route::get('product-list/delete/{id}', 'ProductController@destroy');