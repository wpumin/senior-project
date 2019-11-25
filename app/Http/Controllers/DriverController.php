<?php

namespace App\Http\Controllers;

use App\App_status;
use App\Appointment;
use Carbon\Carbon;

use App\Http\Controllers\Controller;
use App\Relationship;
use App\School;
use App\Student;
use App\User;
use Firebase\JWT\JWT;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use LogicException;



class DriverController extends Controller
{
    public function __construct(Request $request)
    {
        $this->request = $request;
    }

    public function list_student($car)
    {
        $students = Student::where('car_id', $car)->get();

        $data['info'] = [];
        $count = 0;

        $day = date('d');
        $month = date('m');
        $year = date('Y') + 543;

        $full = $day . '/' . $month . '/' . $year;

        foreach ($students as $s) {

            // ชื่อเล่น
            // สถานะ
            // รูปเด็ก
            // ชื่อโรงเรียน
            // ชื่อ user
            // ความสัมพันธ์
            // เบอร์

            $appointment = Appointment::where('student_id', $s->id)->where('appointment_at', $full)->first();


            if ($appointment) {
                $app_status = App_status::where('id', $appointment->app_status_id)->first();
                $school = School::where('id', $s->school_id)->first();
                $user = User::where('id', $appointment->user_id)->first();
                $relation = Relationship::where('id', $user->relationship_id)->first();

                $data['info'][$count++] = [
                    'no' => $appointment->id,
                    'nickname' => $s->nickname,
                    'app_status' => $appointment->app_status_id,
                    'photo_stu' => $s->image,
                    'school' => $school->name_school,
                    'parent_name' => $user->prefix . $user->first_name . ' ' . $user->last_name,
                    'relationship' => $relation->name,
                    'phone' => $user->phone

                ];
            }
        }

        return view('driver.appointment', [
            'datas' => $data['info'],
            'date_' => $full
        ]);
    }

    public function del_app($car, $id)
    {
        $appointment = Appointment::where('id', $id)->first();
        $appointment->delete();

        $students = Student::where('car_id', $car)->get();

        $data['info'] = [];
        $count = 0;

        $day = date('d');
        $month = date('m');
        $year = date('Y') + 543;

        $full = $day . '/' . $month . '/' . $year;

        foreach ($students as $s) {

            // ชื่อเล่น
            // สถานะ
            // รูปเด็ก
            // ชื่อโรงเรียน
            // ชื่อ user
            // ความสัมพันธ์
            // เบอร์

            $appointment = Appointment::where('student_id', $s->id)->where('appointment_at', $full)->first();

            if ($appointment) {
                $app_status = App_status::where('id', $appointment->app_status_id)->first();
                $school = School::where('id', $s->school_id)->first();
                $user = User::where('id', $appointment->user_id)->first();
                $relation = Relationship::where('id', $user->relationship_id)->first();

                $data['info'][$count++] = [
                    'no' => $appointment->id,
                    'nickname' => $s->nickname,
                    'app_status' => $appointment->app_status_id,
                    'photo_stu' => $s->image,
                    'school' => $school->name_school,
                    'parent_name' => $user->prefix . $user->first_name . ' ' . $user->last_name,
                    'relationship' => $relation->name,
                    'phone' => $user->phone

                ];
            }
        }

        return view('driver.appointment', [
            'datas' => $data['info'],
            'date_' => $full
        ]);
    }

    public function accept_app($car, $id)
    {

        $appointment = Appointment::where('id', $id)->first();
        $appointment->app_status_id = 2;
        $appointment->save();

        $students = Student::where('car_id', $car)->get();

        $data['info'] = [];
        $count = 0;

        $day = date('d');
        $month = date('m');
        $year = date('Y') + 543;

        $full = $day . '/' . $month . '/' . $year;

        foreach ($students as $s) {

            // ชื่อเล่น
            // สถานะ
            // รูปเด็ก
            // ชื่อโรงเรียน
            // ชื่อ user
            // ความสัมพันธ์
            // เบอร์

            $appointment = Appointment::where('student_id', $s->id)->where('appointment_at', $full)->first();

            if ($appointment) {
                $app_status = App_status::where('id', $appointment->app_status_id)->first();
                $school = School::where('id', $s->school_id)->first();
                $user = User::where('id', $appointment->user_id)->first();
                $relation = Relationship::where('id', $user->relationship_id)->first();

                $data['info'][$count++] = [
                    'no' => $appointment->id,
                    'nickname' => $s->nickname,
                    'app_status' => $appointment->app_status_id,
                    'photo_stu' => $s->image,
                    'school' => $school->name_school,
                    'parent_name' => $user->prefix . $user->first_name . ' ' . $user->last_name,
                    'relationship' => $relation->name,
                    'phone' => $user->phone

                ];
            }
        }

        return view('driver.appointment', [
            'datas' => $data['info'],
            'date_' => $full
        ]);
    }

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
