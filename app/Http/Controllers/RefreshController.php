<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Student;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cookie;

class RefreshController extends Controller
{

    public function run()
    {
        $car_id = Cookie::get('car_id');

        $no = Student::where('status', 1)->where('car_id', $car_id)->count();
        $up = Student::where('status', 2)->where('car_id', $car_id)->count();
        $down = Student::where('status', 3)->where('car_id', $car_id)->count();
        $self = Student::where('status', 4)->where('car_id', $car_id)->count();

        $data['no'] = $no;
        $data['up'] = $up;
        $data['down'] = $down;
        $data['self'] = $self;

        return view('driver.index', $data);
    }


    public function refresh()
    {

        $car_id = Cookie::get('car_id');

        $no = Student::where('status', 1)->where('car_id', $car_id)->count();
        $up = Student::where('status', 2)->where('car_id', $car_id)->count();
        $down = Student::where('status', 3)->where('car_id', $car_id)->count();
        $self = Student::where('status', 4)->where('car_id', $car_id)->count();

        $data['no'] = $no;
        $data['up'] = $up;
        $data['down'] = $down;
        $data['self'] = $self;

        return $this->responseRequestSuccess($data);
    }

    public function student()
    {
        $car_id = Cookie::get('car_id');

        $users = DB::table('students')
            ->join('users', 'students.user_id', '=', 'users.id')
            ->join('cars', 'students.car_id', '=', 'cars.id')
            ->join('schools', 'students.school_id', '=', 'schools.id')
            ->select('students.*', 'users.mobile', 'users.fullname_u', 'users.relationship', 'cars.name', 'schools.name_school')->where('cars.id', $car_id)
            ->get();

        $data['student'] = $users;

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
