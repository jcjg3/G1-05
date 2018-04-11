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

/*Route::get('/', function () {
    return view('welcome');
});*/
Route::get('/', function(){
    return view('auth.login');
});

//Route::resource('employees', 'EmployeeController');
//Route::resource('admin', 'AdminController');
//Route::resource('activity','ActivityController');
//Route::resource('patient','PatientController');

Auth::routes();
Route::group(['middleware' => 'admin'], function () {
    Route::resource('admin', 'AdminController');
    Route::resource('clinics','ClinicController');
});
Route::group(['middleware' => 'user'], function () {
    Route::resource('employee', 'EmployeeController');
});
//Route::get('/home', 'HomeController@index')->name('home');
//Route::resource('admin', 'AdminController');