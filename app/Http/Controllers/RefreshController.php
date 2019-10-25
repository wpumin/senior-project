<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Student;
use App\User;
use App\Appointment;
use App\Report;
use App\Period_time;
use App\Payment_log;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cookie;
use Illuminate\Support\Facades\Validator;

class RefreshController extends Controller
{
    public function __construct(Request $request)
    {
        $this->request = $request;
    }

    public function run()
    {

        $no = Student::where('status', 1)->where('car_id', $this->request->car_id)->count();
        $up = Student::where('status', 2)->where('car_id', $this->request->car_id)->count();
        $down = Student::where('status', 3)->where('car_id', $this->request->car_id)->count();
        $self = Student::where('status', 4)->where('car_id', $this->request->car_id)->count();

        $data['no'] = $no;
        $data['up'] = $up;
        $data['down'] = $down;
        $data['self'] = $self;

        return view('driver.index', $data);
    }


    public function refresh()
    {

        $no = Student::where('status', 1)->where('car_id', $this->request->car_id)->count();
        $up = Student::where('status', 2)->where('car_id', $this->request->car_id)->count();
        $down = Student::where('status', 3)->where('car_id', $this->request->car_id)->count();
        $self = Student::where('status', 4)->where('car_id', $this->request->car_id)->count();

        $data['no'] = $no;
        $data['up'] = $up;
        $data['down'] = $down;
        $data['self'] = $self;

        return $this->responseRequestSuccess($data);
    }

    public function student()
    {

        $users = DB::table('students')
            ->join('users', 'students.user_id', '=', 'users.id')
            ->join('cars', 'students.car_id', '=', 'cars.id')
            ->join('schools', 'students.school_id', '=', 'schools.id')
            ->select('students.*', 'users.mobile', 'users.fullname_u', 'users.relationship', 'cars.name', 'schools.name_school')->where('cars.id', $this->request->car_id)
            ->get();
        $data['student'] = $users;

        return $this->responseRequestSuccess($data);
    }

    public function appointment()
    {
        $appointment = DB::table('appointments')
            ->join('users', 'appointments.user_id', '=', 'users.id')
            ->join('period_times', 'appointments.period_time_id', '=', 'period_times.id')
            ->join('students', 'appointments.student_id', '=', 'students.id')
            ->select('appointments.*', 'students.fullname_s', 'students.nickname', 'period_times.name')
            ->get();

        $data['appointment'] = $appointment;


        return $this->responseRequestSuccess($data);
    }



    /*
    |--------------------------------------------------------------------------
    | response เมื่อข้อมูลส่งถูกต้อง
    |--------------------------------------------------------------------------
     */
    protected function responseRequestSuccess($ret)
    {
        return response()->json(['status' => 'success', 'data' => $ret], 200)
            ->header('Access-Control-Allow-Origin', '*')
            ->header('Access-Control-Allow-Methods', 'GET, POST, PUT, DELETE, OPTIONS');
    }
    /*
    |--------------------------------------------------------------------------
    | response เมื่อข้อมูลมีการผิดพลาด
    |--------------------------------------------------------------------------
     */
    protected function responseRequestError($status = '', $ret = '', $message = 'Bad request', $statusCode = 200)
    {
        return response()->json(['status' => $status, 'data' => $ret, 'error' => $message], $statusCode)
            ->header('Access-Control-Allow-Origin', '*')
            ->header('Access-Control-Allow-Methods', 'GET, POST, PUT, DELETE, OPTIONS');
    }
}
