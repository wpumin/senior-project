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

// about (external page)
Route::get('/about', function () {
    return view('service.index');
});

// block url

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

// parent
Route::group(array('prefix' => 'parent'), function () {
    Route::get('/index', function () {
        return view('parent.index');
    });
    Route::get('/payment/overview', function () {
        return view('parent.payment_overview');
    });
    Route::get('/payment/confirm', function () {
        return view('parent.payment_confirm');
    });
    Route::get('/appointment', function () {
        return view('parent.appointment');
    });
    Route::get('/report', function () {
        return view('parent.report');
    });
    Route::get('/profile', function () {
        return view('parent.profile');
    });
    Route::get('/dashboard', function () {
        return view('parent.dashboard');
    });
    Route::get('/news/detail', function () {
        return view('news.news_detail');
    });
});

// driver
Route::group(array('prefix' => 'driver'), function () {
    Route::get('/index', function () {
        return view('driver.index');
    });
    Route::get('/appointment', function () {
        return view('driver.appointment');
    });
    Route::get('/broadcast', function () {
        return view('driver.broadcast');
    });
    Route::get('/profile', function () {
        return view('driver.profile');
    });
    Route::get('/news/detail', function () {
        return view('news.news_detail');
    });
});

// driver
Route::group(array('prefix' => 'admin'), function () {
    Route::get('/index', function () {
        return view('admin.index');
    });
    Route::get('/management/news', function () {
        return view('admin.news');
    });
    Route::get('/management/news/create', function () {
        return view('admin.news_create');
    });
    Route::get('/payment/overview/car1', function () {
        return view('admin.payment_overview');
    });
    Route::get('/payment/overview/car2', function () {
        return view('admin.payment_overview');
    });
    Route::get('/payment/confirm/car1', function () {
        return view('admin.payment_confirm');
    });
    Route::get('/payment/confirm/car2', function () {
        return view('admin.payment_confirm');
    });
    Route::get('/management/parent', function () {
        return view('admin.parent_management');
    });
    Route::get('/management/parent/create', function () {
        return view('admin.parent_management_create');
    });
    Route::get('/management/staff', function () {
        return view('admin.staff_management');
    });
    Route::get('/management/staff/create', function () {
        return view('admin.staff_management_create');
    });
    Route::get('/dashboard/car1', function () {
        return view('admin.dashboard');
    });
    Route::get('/dashboard/car2', function () {
        return view('admin.dashboard');
    });
    Route::get('/profile', function () {
        return view('admin.profile');
    });
    Route::get('/news/detail', function () {
        return view('news.news_detail_admin');
    });
});



Auth::routes();
Route::post('register/user', 'RegisterUserController@register_user');
Route::post('register/student', 'RegisterStudentController@register_student');
Route::post('/login', 'LoginController@login')->name('login');
Route::post('/pass_forgot', 'ForgotPasswordController@pass_forgot');
Route::post('/forgotpassword/againotp', 'ForgotPasswordController@againOTP');
Route::post('/newpassword', 'NewPasswordController@NewPassword');
Route::post('/receive_otp', 'ForgotPasswordController@receiveOTP');
Route::post('/appointment', 'AppointmentController@createAppointment');
Route::post('/report', 'ReportController@createReport');
Route::post('/bill', 'PaymentController@addPayment');


Route::get('/driver/index', 'RefreshController@run');
Route::get('/admin/car-overview/car1', 'RefreshController@runAdmin');
Route::get('/admin/car-overview/car2', 'RefreshController@runAdmin');
Route::get('/tasks/refresh', 'RefreshController@refresh');
Route::get('/tasks/refresh/student', 'RefreshController@student');
Route::get('tasks/refresh/order', 'RefreshController@order_report');

Route::post('tasks/refresh/report', 'RefreshController@report');
Route::post('/tasks/refresh/appointment', 'RefreshController@appointment');
Route::post('/tasks/refresh/appointment/student', 'AppointmentController@list');


// Route::get('firebase/{lat}/{long}', 'FirebaseController@index');
Route::get('firebase/getlocation', 'FirebaseController@get_location')->middleware('cros');
