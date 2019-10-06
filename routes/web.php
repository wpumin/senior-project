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

// login

Route::get('/', function () {
    return view('auth.login');
});

Route::get('/forgot-password', function () {
    return view('auth.forgot-password');
});

Route::get('/confirm-otp', function () {
    return view('auth.confirm-otp');
});

Route::get('/create-newpassword', function () {
    return view('auth.create-newpassword');
});

// index

Route::get('/index', function () {
    return view('index');
});


Route::get('/email', function () {
    return view('auth.passwords.email');
});

Route::get('/reset', function () {
    return view('auth.passwords.reset');
});


Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');
Route::post('/auth/register', 'RegisterController@register');\
Route::post('/auth/login', 'LoginController@login');
Route::post('/appointment', 'AppointmentController@createAppointment');
Route::post('/report', 'ReportController@createReport');
Route::post('/bill', 'PaymentController@addPayment');


