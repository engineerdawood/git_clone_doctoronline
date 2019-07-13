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


Route::get('/home', function () {
    return view('home');
})->name('home');


Route::post('/adminlogin','AdminLoginController@adminlogin')->name('adminlogin');


Route::post('/patientlogin','AdminLoginController@patientlogin')->name('patientlogin');
    




Route::get('/contact', function () {
    return view('contact');
})->name('contact');


Route::get('/gallery', function () {
    return view('gallery');
})->name('gallery');


Route::get('/admin', function () {
    return view('admin');
})->name('admin');

Route::get('/', function () {
    return view('login');
})->name('login');


Route::post('store','patient_con@store');

Route::post('addadmin','AdminLoginController@addadmin');
Route::get('admin','patient_con@index');