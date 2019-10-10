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
// Route::get('/driver/index', function () {
//     return view('driver.index');
// });

// payment
Route::get('/parent/payment/overview', function () {
    return view('parent.payment_overview');
});

Auth::routes();
Route::post('register/user', 'RegisterUserController@register_user');
Route::post('register/student', 'RegisterStudentController@register_student');
Route::post('/login', 'LoginController@login')->name('login');
Route::post('/forgotpassword', 'ForgotPasswordController@ForgotPassword');
Route::post('/newpassword', 'NewPasswordController@NewPassword');
Route::post('/receiveotp', 'ReceiveOTPController@receiveOTP');
Route::post('/againotp', 'AgainOTPController@againOTP');
Route::post('/appointment', 'AppointmentController@createAppointment');
Route::post('/report', 'ReportController@createReport');
Route::post('/bill', 'PaymentController@addPayment');

Route::get('/driver/index', 'RefreshController@run');
Route::get('/tasks/refresh', 'RefreshController@refresh');
Route::get('/tasks/refresh/student', 'RefreshController@student');
