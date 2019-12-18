<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Student;
use App\School;
use App\User;
use App\News;
use App\Check_in;
use App\Relationship;
use DateTime;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class RefreshController extends Controller
{
    public function __construct(Request $request)
    {
        $this->request = $request;
    }

    public function run()
    {
            //Check login
            $auth = User::where('id', $this->request->cookie('use_id'))->where('secure_code', $this->request->cookie('secure'))->where('status', 1)->first();

            if (!$auth) {
                return redirect('/');
            }

            if ($this->request->cookie('role_number') == '2') {

                $no = Student::where('std_status_id', 1)->where('car_id', $this->request->cookie('car_num'))->count();
                $up = Student::where('std_status_id', 2)->where('car_id', $this->request->cookie('car_num'))->count();
                $down = Student::where('std_status_id', 3)->where('car_id', $this->request->cookie('car_num'))->count();
                $self = Student::where('std_status_id', 4)->where('car_id', $this->request->cookie('car_num'))->count();

                $data['no'] = $no;
                $data['up'] = $up;
                $data['down'] = $down;
                $data['self'] = $self;

                $news = News::whereIn('role_id', [2, 4])->where('news_statuses_id', 1)->get();

                $d = date('d');
                $m = date('m');
                $y = date('Y') + 543;

                $full = $d . '/' . $m . '/' . $y;
                $time_now = date('h:i A');
                $full_now = DateTime::createFromFormat('d/m/Y', $full);

                $data['info'] = [];
                $count = 0;

                if ($news) {

                    foreach ($news as $n) {

                        $release_date = DateTime::createFromFormat('d/m/Y', $n->release_date);

                        if ($release_date <= $full_now) {

                            if ($n->release_time <= $time_now) {

                                $data['info'][$count++] = [

                                    'id' => $n->id,
                                    'image' => $n->image,

                                ];

                            } else {

                                $data['info'][$count++] = [

                                    'id' => null,
                                    'image' => null,

                                ];
                            }
                        } else {

                            $data['info'][$count++] = [

                                'id' => null,
                                'image' => null,

                            ];
                        }
                    }
                } else {

                    $data['info'][$count++] = [

                        'id' => null,
                        'image' => null,

                    ];
                }

                return view('driver.index', [

                    'datas' => $data['info'],
                    'no' => $no,
                    'up' => $up,
                    'down' => $down,
                    'self' => $self

                ]);
            }
            \abort(404);

    }

    public function runAdminOne()
    {
        //Check login
        $auth = User::where('id', $this->request->cookie('use_id'))->where('secure_code', $this->request->cookie('secure'))->where('status', 1)->first();

        if (!$auth) {
            return redirect('/');
        }

        if ($this->request->cookie('role_number') != '3') {
            \abort(404);
        }

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

    public function runAdminTwo()
    {
        //Check login
        $auth = User::where('id', $this->request->cookie('use_id'))->where('secure_code', $this->request->cookie('secure'))->where('status', 1)->first();

        if (!$auth) {
            return redirect('/');
        }

        if ($this->request->cookie('role_number') != '3') {
            \abort(404);
        }

        $no = Student::where('std_status_id', 1)->where('car_id', '2')->count();
        $up = Student::where('std_status_id', 2)->where('car_id', '2')->count();
        $down = Student::where('std_status_id', 3)->where('car_id', '2')->count();
        $self = Student::where('std_status_id', 4)->where('car_id', '2')->count();

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
            ->select('students.*', 'users.phone', 'users.relationship_id', 'cars.name', 'schools.name_school', 'users.lattitude', 'users.longtitude')
            ->where('cars.id', $this->request->car_id)
            ->orderBy('students.id', 'asc')
            ->orderBy('students.std_status_id', 'desc')
            ->get();

        $data['student'] = $users;
        $data['student_info'] = [];
        $count = 0;

        foreach ($data['student'] as $stu) {

            $user_id = User::where('id', $stu->user_id)->first();
            $full_name = $user_id->first_name . ' ' . $user_id->last_name;

            $relationship_id = Relationship::where('id', $stu->relationship_id)->first();

            $data['student_info'][$count++] = [
                'id' => $stu->id,
                'nickname' => $stu->nickname,
                'nickname_modal' => $stu->nickname,
                // 'car_id' => $stu->car_id,
                'fullname_s' => $stu->first_name . '' . $stu->last_name,
                'first_name' => $stu->first_name,
                'last_name' => $stu->last_name,
                'std_status_id' => $stu->std_status_id,
                'image' => $stu->image,
                'name_school' => $stu->name_school,
                'user_name' => $full_name,
                'relationship' => $relationship_id->name,
                'phone' => $stu->phone,
                'lattitude' => $user_id->lattitude,
                'longtitude' => $user_id->longtitude,
            ];
        }

        return $this->responseRequestSuccess($data['student_info']);
       
    }

    public function appointments()
    {
        $appointment = DB::table('appointments')
            ->join('period_times', 'appointments.period_time_id', '=', 'period_times.id')
            ->join('app_statuses', 'appointments.app_status_id', '=', 'app_statuses.id')
            ->join('students', 'appointments.student_id', '=', 'students.id')
            ->select('appointments.*', 'students.nickname', 'period_times.name', 'app_statuses.app_status_name')
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

    public function report($id, $token)
    {
            //Check login
            $auth = User::where('id', $this->request->cookie('use_id'))->where('secure_code', $this->request->cookie('secure'))->where('status', 1)->first();

            if (!$auth) {
                return redirect('/');
            }

                if ($this->request->cookie('role_number') == '1') {

                    $report = DB::table('reports')
                        ->join('users', 'reports.user_id', '=', 'users.id')
                        ->join('type_reports', 'reports.type_id', '=', 'type_reports.id')
                        ->select('reports.*', 'type_reports.type_name')
                        ->where('reports.user_id', $id)
                        ->orderBy('reports.created_at', 'desc')
                        ->get();

                    $data['info'] = [];
                    $count = 0;

                    foreach ($report as $d) {

                        $data['info'][$count++] = [
                            'title' => $d->title,
                            'content' => $d->content,
                            'created_at' => $d->created_at,
                            'type_name' => $d->type_name
                        ];

                    }

                    return view('parent.report', [
                        'data' => $data['info']
                    ]);
                }
                \abort(404);
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
            ->select('students.*', 'schools.name_school', 'cars.name', 'cars.name_driver', 'users.lattitude', 'users.longtitude')
            ->where('students.user_id', $this->request->input('user_id'))
            ->get();

        $data['student'] = $student;

        return $this->responseRequestSuccess($data);
    }
    public function dashboard($car)
    {
            $car_num = 0;

            if ($car == 'car1') {
                $car_num = 1;
            }

            if ($car == 'car2') {
                $car_num = 2;
            }

            //Check login
            $auth = User::where('id', $this->request->cookie('use_id'))->where('secure_code', $this->request->cookie('secure'))->where('status', 1)->first();

            if (!$auth) {
                return redirect('/');
            }

            $month = date('m');
            $year = date('Y') + 543;

            $data['info'][] = [];
            $check_count = 0;

            /** ------------------------ */
            $day_up = [];
            $day_up_check = [];

            /** ------------------------ */
            $day_down = [];
            $day_down_check = [];

            /** ------------------------ */
            $ev_up = [];
            $ev_up_check = [];

            /** ------------------------ */
            $ev_down = [];
            $ev_down_check = [];


            if ($this->request->cookie('role_number') == '3') {

                $students = Student::where('car_id', $car_num)->get();
                $num = 0;

                foreach ($students as $student) {

                    $school = School::where('id', $student->school_id)->first();

                    $checks = Check_in::where('card_id', $student->card_id)->where('filter', $month)->get();

                    for ($i = 0;$i <= 30; $i++) {

                        $day = (!isset($i) ? "00" : sprintf('%02d', $i + 1));
                        $full = $day.'/'.$month.'/'.$year;

                        foreach ($checks as $check) {


                            if ($full == $check->date_check) {

                                if (in_array($check->date_check, $day_up)) {

                                }else{

                                    if ($check->get_on_id == '1' && $check->period_time == '1') {

                                        array_push($day_up, $full); /**CHECK DATE */
                                        array_push($day_up_check, 1);

                                    }

                                }/** DAY UP */

                                if (in_array($check->date_check, $day_down)) {

                                }else{

                                    if ($check->get_on_id == '2' && $check->period_time == '1') {

                                        array_push($day_down, $full); /**CHECK DATE */
                                        array_push($day_down_check, 1);

                                    }

                                }/**DAY DOWN */

                                if (in_array($check->date_check, $ev_up)) {

                                }else{

                                    if ($check->get_on_id == '1' && $check->period_time == '2') {

                                        array_push($ev_up, $full); /**CHECK DATE */
                                        array_push($ev_up_check, 1);

                                    }

                                }/**EV UP */

                                if (in_array($check->date_check, $ev_down)) {

                                }else{

                                    if ($check->get_on_id == '2' && $check->period_time == '2') {

                                        array_push($ev_down, $full); /**CHECK DATE */
                                        array_push($ev_down_check, 1);

                                    }

                                }/**EV DOWN */

                            }/**END IF */

                        } /**END FOREACH */


                        /**DAY UP */
                        if (in_array($full, $day_up)) {

                            /**CHECK DATE */

                        }else{
                            array_push($day_up, "out".$full);
                            array_push($day_up_check, 0);
                        }


                        /**DAY DOWN */
                        if (in_array($full, $day_down)) {

                            /**CHECK DATE */

                        }else{
                            array_push($day_down, "out".$full);
                            array_push($day_down_check, 0);
                        }


                        /**EV UP */
                        if (in_array($full, $ev_up)) {

                            /**CHECK DATE */

                        }else{
                            array_push($ev_up, "out".$full);
                            array_push($ev_up_check, 0);
                        }


                        /**EV DOWN */
                        if (in_array($full, $ev_down)) {

                            /**CHECK DATE */

                        }else{
                            array_push($ev_down, "out".$full);
                            array_push($ev_down_check, 0);
                        }
                    }

                    $data['info'][$check_count] = [

                        'name' => $student->nickname,
                        'school' => $school->name_school,
                        'check_day_up' => $day_up_check,
                        'check_day_down' => $day_down_check,
                        'check_ev_up' => $ev_up_check,
                        'check_ev_down' => $ev_down_check

                    ];

                    $check_count++;
                    $num++;
                    $day_up = [];
                    $day_up_check = [];

                    $day_down = [];
                    $day_down_check = [];

                    $ev_up = [];
                    $ev_up_check = [];

                    $ev_down = [];
                    $ev_down_check = [];

                }

                return view('admin.dashboard', [
                    'infos' => $data['info']
                ]);
            }
            \abort(404);

    }

    public function admin_profile()
    {
            //Check login
            $auth = User::where('id', $this->request->cookie('use_id'))->where('secure_code', $this->request->cookie('secure'))->where('status', 1)->first();

            if (!$auth) {
                return redirect('/');
            }

            if ($this->request->cookie('role_number') == '3') {

                return view('admin.profile');
            }
            \abort(404);

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
