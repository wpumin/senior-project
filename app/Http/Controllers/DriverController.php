<?php

namespace App\Http\Controllers;

use App\Appointment;
use App\Http\Controllers\Controller;
use App\News;
use App\Relationship;
use App\School;
use App\Student;
use App\User;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class DriverController extends Controller
{
    public function __construct(Request $request)
    {
        $this->request = $request;
    }

    public function list_student($car, $id, $token)
    {

        $driver = User::where('id', $this->request->cookie('use_id'))->where('secure_code', $this->request->cookie('secure'))->where('car_id', $car)->where('status', 1)->first();

        if (!$driver) {
            return redirect('/');
        }

            //check role equal driver.
            if ($this->request->cookie('role_number') == '2') {

                $data['info'] = [];
                $count = 0;

                $day = date('d');
                $month = date('m');
                $year = date('Y') + 543;

                $full = $day . '/' . $month . '/' . $year;

                // ชื่อเล่น
                // สถานะ
                // รูปเด็ก
                // ชื่อโรงเรียน
                // ชื่อ user
                // ความสัมพันธ์
                // เบอร์

                $appointment = Appointment::where('appointment_at', $full)->orderBy('appointments.created_at', 'asc')->get();

                if (\count($appointment) > 0) {

                    foreach ($appointment as $app) {

                        $s = Student::where('id', $app->student_id)->where('car_id', $car)->first();

                        if ($s) {

                            $school = School::where('id', $s->school_id)->first();

                            $user = User::where('id', $app->user_id)->first();
                            $relation = Relationship::where('id', $user->relationship_id)->first();

                            $data['info'][$count++] = [
                                'no' => $app->id,
                                'nickname' => $s->nickname,
                                'fullname' => $s->prefix . $s->first_name . ' ' . $s->last_name,
                                'app_status' => $app->app_status_id,
                                'photo_stu' => $s->image,
                                'period_time' => $app->period_time_id,
                                'school' => $school->name_school,
                                'parent_name' => $user->prefix . $user->first_name . ' ' . $user->last_name,
                                'relationship' => $relation->name,
                                'phone' => $user->phone,
                                'created_at' => $app->created_at
                            ];
                        }
                    }

                    return view('driver.appointment', [
                        'datas' => $data['info'],
                        'date_' => $full
                    ]);
                }

                return view('driver.appointment', [
                    'datas' => $data['info'],
                    'date_' => $full
                ]);
            }
            \abort(404);
    }

    public function del_app($car, $id, $user_id, $token)
    {

            //Check login
            $auth = User::where('id', $this->request->cookie('use_id'))->where('secure_code', $this->request->cookie('secure'))->where('status', 1)->first();

            if (!$auth) {
                return redirect('/');
            }

            if ($this->request->cookie('role_number') == '2') {

                $driver = User::where('id', $this->request->cookie('use_id'))->where('secure_code', $this->request->cookie('secure'))->first();
                if (!$driver) {
                    \abort(419);
                }

                $appointment = Appointment::where('id', $id)->first();
                $stu = Student::where('id', $appointment->student_id)->first();

                if ($stu->car_id == $driver->car_id) {

                    $appointment->delete();
                } else {
                    return redirect('/driver/index');
                }

                return redirect('driver/appointment/' . $car . '/' . $user_id . '/' . $token);
            }
            \abort(404);

    }

    public function accept_app($car, $id, $user_id, $token)
    {
            //Check login
            $auth = User::where('id', $this->request->cookie('use_id'))->where('secure_code', $this->request->cookie('secure'))->where('status', 1)->first();

            if (!$auth) {
                return redirect('/');
            }

            if ($this->request->cookie('role_number') == '2') {

                $driver = User::where('id', $this->request->cookie('use_id'))->where('secure_code', $this->request->cookie('secure'))->first();
                if (!$driver) {
                    \abort(419);
                }

                $appointment = Appointment::where('id', $id)->first();
                $stu = Student::where('id', $appointment->student_id)->first();

                if ($stu->car_id == $driver->car_id) {

                    $appointment->app_status_id = 2;
                    $appointment->save();

                    $student = Student::where('id', $appointment->student_id)->first();
                    $student->std_status_id = 4;
                    $student->save();
                } else {
                    return redirect('/driver/index');
                }

                return redirect('driver/appointment/' . $car . '/' . $user_id . '/' . $token);
            }
            \abort(404);
    }

    public function broadcast()
    {
            //Check login
            $auth = User::where('id', $this->request->cookie('use_id'))->where('secure_code', $this->request->cookie('secure'))->where('status', 1)->first();

            if (!$auth) {
                return redirect('/');
            }

            if ($this->request->cookie('role_number') == '2') {
                return view('driver.broadcast');
            }

            \abort(404);

    }
    public function forgotRFID($car, $stu_id)
    {
        //Check login
        $auth = User::where('id', $this->request->cookie('use_id'))->where('secure_code', $this->request->cookie('secure'))->where('status', 1)->first();

        if (!$auth) {
            return redirect('/');
        }

            if ($this->request->cookie('role_number') == '2') {
                
                $driver = User::where('id', $this->request->cookie('use_id'))->where('secure_code', $this->request->cookie('secure'))->first();
                if (!$driver) {
                    \abort(419);
                }
                // dd($stu_id);
                $std = Student::where('car_id', $car)->where('id', $stu_id)->first();
                // dd($std);  
 
                // $stud = Student::where('id', $std->id)->first();
                
                if ($std->std_status_id = 1) {
                    $std->std_status_id = 2;
                    $std->save();
                } elseif($stud->std_status_id = 2) {
                    $std->std_status_id = 3;
                    $std->save();
                }else {
                    return redirect('/driver/index');
                }
            
                return redirect('/driver/index');        
        }
        \abort(404);
    }
    public function profile()
    {
            //Check login
            $auth = User::where('id', $this->request->cookie('use_id'))->where('secure_code', $this->request->cookie('secure'))->where('status', 1)->first();

            if (!$auth) {
                return redirect('/');
            }

            if ($this->request->cookie('role_number') == '2') {
                return view('driver.profile');
            }
            \abort(404);

    }
    public function show_news($id)
    {
        //Check login
        $auth = User::where('id', $this->request->cookie('use_id'))->where('secure_code', $this->request->cookie('secure'))->where('status', 1)->first();

        if (!$auth) {
            return redirect('/');
        }

            if ($this->request->cookie('role_number') == '2') {

                $news = News::where('id', $id)->whereIn('role_id', [2, 4])->first();
                $user = User::where('id', $news->user_id)->first();

                return view('news.news_detail', [
                    'id' => $news->id,
                    'image' => $news->image,
                    'title' => $news->title,
                    'content' => $news->content,
                    'release_date' => $news->release_date . ' ' . $news->release_time,
                    'name' => $user->username,
                    'status' => $news->news_statuses_id

                ]);
            }
            \abort(404);
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
