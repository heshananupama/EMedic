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
    return view('auth/login');
});

Auth::routes();

Route::get('/home', 'HomeController@index');
Route::post('/patientRegister', 'PatientController@create');
Route::get('/registerPatient', 'PatientController@show');

Route::post('/api/addNew', 'PatientController@addMeasurement');
//gg