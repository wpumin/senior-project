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
    return view('public.index');
});

Route::post('line/notify', 'ContactController@notify');

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

    Route::get('/index', 'ParentController@index');

    Route::get('/payment/overview/{id}/{token}', 'PaymentController@overview');

    Route::get('/payment/confirm/{id}/{token}', 'PaymentController@parent_list');

    Route::post('/store', 'PaymentController@store');

    Route::get('/appointment/{id}/{token}', 'AppointmentController@list');

    Route::get('/report/{id}/{token}', 'RefreshController@report');

    Route::get('/profile', 'ParentController@profile');

    Route::get('/dashboard/{id}/{token}', 'ParentController@list_student');

    Route::post('/dashboard/info', 'ParentController@ajax_list_student');

    Route::get('/news/detail/{id}', 'ParentController@show_news');
});

// driver
Route::group(array('prefix' => 'driver'), function () {

    Route::get('/index', 'RefreshController@run');
    // Route::get('/index', 'DriverController@index');

    Route::get('/appointment/{car}/{id}/{token}', 'DriverController@list_student');

    Route::get('/appointment/{car}/del/{id}/{user_id}/{token}', 'DriverController@del_app');

    Route::get('/appointment/{car}/accept/{id}/{user_id}/{token}', 'DriverController@accept_app');

    Route::get('/broadcast', 'DriverController@broadcast');
    // Route::get('/profile', function () {
    //     return view('driver.profile');
    // });
    Route::get('/profile', 'DriverController@profile');
    Route::get('/news/detail/{id}', 'DriverController@show_news');
});

// driver
Route::group(array('prefix' => 'admin'), function () {

    Route::get('/index', 'ReportController@list_report');

    Route::get('/management/news', 'NewsController@index');

    Route::get('/management/news/edit/{id}', 'NewsController@edit_new');

    // Route::put('/management/news/update', 'NewsController@update_new');

    Route::get('/management/news/del/{id}', 'NewsController@del_new');

    // สำหรับสร้าง
    Route::post('/management/news/create/new', 'NewssController@create_store');
    Route::get('/management/news/create', 'NewssController@create');


    Route::get('/payment/confirm/{car}', 'PaymentController@index');

    Route::get('/payment/overview/{car}', 'PaymentController@admin_list');

    Route::get('/confirm/{car}/{id}', 'PaymentController@confirm');

    // Route::get('/payment/overview/car2', function () {
    //     return view('admin.payment_overview');
    // });
    Route::get('/management/parent', 'RegisterUserController@list_user');

    Route::get('/management/parent/edit/{id}', 'RegisterUserController@edit_user');

    Route::post('/management/parent/update', 'RegisterUserController@update_user');

    Route::get('/management/parent/del/{id}', 'RegisterUserController@del_user');

    Route::get('/management/student/edit',  function () {
        return view('admin.student_edit');
    });

    // Route::get('/management/parent/create', function () {
    //     return view('admin.parent_management_create');
    // });
    Route::get('/management/parent/create', 'RegisterUserController@create');

    Route::get('/management/staff', 'RegisterUserController@list_staff');

    // Route::get('/management/staff/create', function () {
    //     return view('admin.staff_management_create');
    // });
    Route::get('/management/staff/create', 'RegisterUserController@staff');
    // Route::get('/dashboard/car1', function () {
    //     return view('admin.dashboard');
    // });
    // Route::get('/dashboard/car2', function () {
    //     return view('admin.dashboard');
    // });
    Route::get('/dashboard/car1', 'RefreshController@dashboard1');
    Route::get('/dashboard/car2', 'RefreshController@dashboard2');
    // Route::get('/profile', function () {
    //     return view('admin.profile');
    // });
    Route::get('/profile', 'RefreshController@admin_profile');

    Route::get('/news/detail/{id}', 'ReportController@show_news');
});

Route::get('/map', function () {
    return view('map.map');
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

Route::get('/admin/car-overview/car1', 'RefreshController@runAdminOne');
Route::get('/admin/car-overview/car2', 'RefreshController@runAdminTwo');

Route::post('/tasks/refresh', 'RefreshController@refresh');
Route::post('/tasks/refresh/student', 'RefreshController@student');
Route::get('tasks/refresh/order', 'RefreshController@order_report');

Route::post('tasks/refresh/pf_student', 'RefreshController@pf_student');
// Route::get('tasks/refresh/report/{id}', 'RefreshController@report');
Route::post('/tasks/refresh/appointment', 'RefreshController@appointment');
Route::post('/tasks/refresh/appointment/student', 'AppointmentController@list_stu');


// Route::get('firebase/{lat}/{long}', 'FirebaseController@index');
Route::get('firebase/getlocation', 'FirebaseController@get_location')->middleware('cros');
// Route::get('admin/payment/confirm/car2', 'PaymentController@index');

// Route::get('image/upload', 'ImageUploadController@fileCreate');
// Route::post('image/upload/store', 'ImageUploadController@fileStore');
// Route::post('image/delete', 'ImageUploadController@fileDestroy');

Route::post('/ajax_upload/action', 'NewsController@action')->name('ajaxupload.action');

Route::resource('news', 'NewssController');
