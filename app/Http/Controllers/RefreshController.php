<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Student;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class RefreshController extends Controller
{
    public function run()
    {
        $no = Student::where('status', 1)->count();
        $up = Student::where('status', 2)->count();
        $down = Student::where('status', 3)->count();
        $self = Student::where('status', 4)->count();

        $data['no'] = $no;
        $data['up'] = $up;
        $data['down'] = $down;
        $data['self'] = $self;

        return view('driver.index', $data);
    }


    public function refresh()
    {

        $no = Student::where('status', 1)->count();
        $up = Student::where('status', 2)->count();
        $down = Student::where('status', 3)->count();
        $self = Student::where('status', 4)->count();

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
            ->select('students.*', 'users.mobile', 'users.fullname_u', 'users.relationship', 'cars.name', 'schools.name_school')
            ->where('car_id', '1') // ลองใส่เทสเฉยๆ (ต๊)
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
