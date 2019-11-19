<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Student;
use App\User;
use App\Appointment;
use App\Report;
use App\Period_time;
use App\Payment_log;
use App\Order_report;
use App\Relationship;
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

        $no = Student::where('std_status_id', 1)->where('car_id', $this->request->car_id)->count();
        $up = Student::where('std_status_id', 2)->where('car_id', $this->request->car_id)->count();
        $down = Student::where('std_status_id', 3)->where('car_id', $this->request->car_id)->count();
        $self = Student::where('std_status_id', 4)->where('car_id', $this->request->car_id)->count();

        $data['no'] = $no;
        $data['up'] = $up;
        $data['down'] = $down;
        $data['self'] = $self;



        return view('driver.index', $data);
    }

    public function runAdmin()
    {

        $no = Student::where('std_status_id', 1)->where('car_id', '1')->count();
        $up = Student::where('std_status_id', 2)->where('car_id', '1')->count();
        $down = Student::where('std_status_id', 3)->where('car_id', '1')->count();
        $self = Student::where('std_status_id', 4)->where('car_id', '1')->count();

        $data['no'] = $no;
        $data['up'] = $up;
        $data['down'] = $down;
        $data['self'] = $self;

        return view('admin.car-overview', $data);
    }

    public function refresh()
    {

        $no = Student::where('std_status_id', 1)->where('car_id', $this->request->car_id)->count();
        $up = Student::where('std_status_id', 2)->where('car_id', $this->request->car_id)->count();
        $down = Student::where('std_status_id', 3)->where('car_id', $this->request->car_id)->count();
        $self = Student::where('std_status_id', 4)->where('car_id', $this->request->car_id)->count();

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
            ->select('students.*', 'users.phone', 'users.relationship_id', 'cars.name', 'schools.name_school')->where('cars.id', $this->request->car_id)
            ->get();
        $data['student'] = $users;

        $data['student_info'] = [];
        $count = 0;

        foreach ($data['student'] as $stu) {
            // dd($stu);

            $user_id = User::where('id', $stu->user_id)->first();
            $full_name = $user_id->first_name . ' ' . $user_id->last_name;

            $relationship_id = Relationship::where('id', $stu->relationship_id)->first();

            // dd($full_name);

            $data['student_info'][$count++] = [
                'id' => $stu->id,
                'nickname' => $stu->nickname,
                'fullname_s' => $stu->first_name . '' . $stu->last_name,
                'first_name' => $stu->first_name,
                'last_name' => $stu->last_name,
                'std_status_id' => $stu->std_status_id,
                'image' => $stu->image,
                'name_school' => $stu->name_school,
                'user_name' => $full_name,
                'relationship' => $relationship_id->name,
                'phone' => $stu->phone,
                //เหลือจุดรับส่ง
                'lattitude' => $stu->lattitude,
                'longtitude' => $stu->longtitude,

            ];
        }

        // dd($data['student_info']);

        return $this->responseRequestSuccess($data['student_info']);
    }

    public function appointments()
    {
        $appointment = DB::table('appointments')
            // ->join('users', 'appointments.user_id', '=', 'users.id')
            ->join('period_times', 'appointments.period_time_id', '=', 'period_times.id')
            ->join('app_statuses', 'appointments.app_status_id', '=', 'app_statuses.id')
            ->join('students', 'appointments.student_id', '=', 'students.id')
            ->select('appointments.*', 'students.nickname', 'period_times.name', 'app_statuses.app_status_name')
            // ->where('appointments.user_id', $this->request->input('user_id'))
            ->orderBy('appointments.created_at', 'desc')
            ->get();

        $data['appointment'] = $appointment;

        return $this->responseRequestSuccess($data);
    }

    public function appointment()
    {
        // validator
        $validator = Validator::make($this->request->all(), [
            'user_id' => 'required',

        ]);
        if ($validator->fails()) {
            $errors = $validator->errors();
            return $this->responseRequestError($errors);
        }

        $appointment = DB::table('appointments')
            ->join('users', 'appointments.user_id', '=', 'users.id')
            ->join('period_times', 'appointments.period_time_id', '=', 'period_times.id')
            ->join('app_statuses', 'appointments.app_status_id', '=', 'app_statuses.id')
            ->join('students', 'appointments.student_id', '=', 'students.id')
            ->select('appointments.*', 'students.nickname', 'period_times.name', 'app_statuses.app_status_name')
            ->where('appointments.user_id', $this->request->input('user_id'))
            ->orderBy('appointments.created_at', 'desc')
            ->get();

        $data['appointment'] = $appointment;


        return $this->responseRequestSuccess($data);
    }

    public function report($id)
    {


        $day = date('d');
        $month = date('m');
        $year = date('Y') + 543;
        $full = $day . '-' . $month . '-' . $year;

        $report = DB::table('reports')
            ->join('users', 'reports.user_id', '=', 'users.id')
            ->join('type_reports', 'reports.type_id', '=', 'type_reports.id')
            ->select('reports.*', 'type_reports.type_name')
            ->where('reports.user_id', $id)
            ->orderBy('reports.created_at', 'desc')
            ->get();

        $data['info'] = [];
        $count = 0;

        // dd($report);

        foreach ($report as $d) {

            // dd($d->type_name);



            $data['info'][$count++] = [
                'title' => $d->title,
                'content' => $d->content,
                'created_at' => $d->created_at,
                'type_name' => $d->type_name
            ];

            // dd($data['info']);
            // var_dump($data['info']);
        }

        // dd($data['info']);

        return view('parent.report', [
            'data' => $data['info']
        ]);

        return $this->responseRequestSuccess($report);
    }

    public function pf_student()
    {
        // validator
        $validator = Validator::make($this->request->all(), [
            'user_id' => 'required',

        ]);
        if ($validator->fails()) {
            $errors = $validator->errors();
            return $this->responseRequestError($errors);
        }


        $student = DB::table('students')
            ->join('users', 'students.user_id', '=', 'users.id')
            ->join('schools', 'students.school_id', '=', 'schools.id')
            ->join('cars', 'students.car_id', '=', 'cars.id')
            ->join('std_statuses', 'students.std_status_id', '=', 'std_statuses.id')
            ->select('students.*', 'schools.name_school', 'cars.name', 'cars.name_driver')
            ->where('students.user_id', $this->request->input('user_id'))
            ->get();

        $data['student'] = $student;


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
