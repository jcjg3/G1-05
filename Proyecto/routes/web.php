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
    return view('principal');
});

Route::get('/contacto', function(){
    return view('publico.contacto');
})->name('contacto');

Route::get('/informacion', function(){
    return view('publico.informacion');
})->name('informacion');

//Route::resource('employees', 'EmployeeController');
//Route::resource('admin', 'AdminController');
//Route::resource('activity','ActivityController');
//Route::resource('patient','PatientController');

Route::resource('clinics','ClinicController');
Route::resource('activity','ActivityController');
Route::resource('patient','PatientController');
Auth::routes();
Route::group(['middleware' => 'admin'], function () {
    Route::resource('admin', 'AdminController');
});
Route::group(['middleware' => 'user'], function () {

    Route::resource('appoiment', 'AppoimentController');
    Route::resource('employee', 'EmployeeController');
});
//Route::get('/home', 'HomeController@index')->name('home');
//Route::resource('admin', 'AdminController');