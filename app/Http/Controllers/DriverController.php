<?php

namespace App\Http\Controllers;

use App\App_status;
use App\Appointment;
use App\Period_time;
use Carbon\Carbon;

use App\Http\Controllers\Controller;
use App\News;
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

    public function list_student($car, $id, $token)
    {
        $cookie = $this->request->cookie('role_number');
        // dd($this->request->cookie('role_number'));
        $driver = User::where('id', $id)->where('secure_code', $token)->where('car_id', $car)->first();

        if (!$driver) {
            return redirect('/driver/index');
        }

        if (isset($cookie)) { //check have cookie.

            if ($this->request->cookie('role_number') == '2') { //check role equal driver

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

                // dd(\count($appointment));
                // dd($full);

                if (\count($appointment) > 0) {

                    // dd($appointment);

                    foreach ($appointment as $app) {

                        $s = Student::where('id', $app->student_id)->where('car_id', $car)->first();
                        if ($s) {


                            $school = School::where('id', $s->school_id)->first();

                            // dd($school);
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

                // dd(\count($data['info']));
                return view('driver.appointment', [
                    'datas' => $data['info'],
                    'date_' => $full
                ]);
            }
            \abort(404);
        }
        return redirect('/');
    }

    public function del_app($car, $id, $user_id, $token)
    {
        $cookie = $this->request->cookie('role_number');
        // dd(isset($cookie));

        if (isset($cookie)) {

            if ($this->request->cookie('role_number') == '2') {

                $driver = User::where('id', $user_id)->where('secure_code', $token)->first();
                if (!$driver) {
                    return redirect('/driver/index');
                }

                $appointment = Appointment::where('id', $id)->first();
                // dd($appointment->student_id);
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
        return redirect('/');
    }

    public function accept_app($car, $id, $user_id, $token)
    {
        $cookie = $this->request->cookie('role_number');
        // dd(isset($cookie));



        if (isset($cookie)) {

            if ($this->request->cookie('role_number') == '2') {

                $driver = User::where('id', $user_id)->where('secure_code', $token)->first();
                // dd($driver);
                if (!$driver) {
                    return redirect('/driver/index');
                }

                $appointment = Appointment::where('id', $id)->first();
                // dd($appointment->student_id);
                $stu = Student::where('id', $appointment->student_id)->first();
                // dd('stu' . $stu->car_id . ': ' . 'driver' . $driver->car_id);
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
        return redirect('/');
    }

    public function broadcast()
    {
        $cookie = $this->request->cookie('role_number');
        // dd(isset($cookie));

        if (isset($cookie)) {

            if ($this->request->cookie('role_number') == '2') {
                return view('driver.broadcast');
            }
            \abort(404);
        }
        return redirect('/');
    }
    public function profile()
    {
        $cookie = $this->request->cookie('role_number');
        // dd(isset($cookie));

        if (isset($cookie)) {

            if ($this->request->cookie('role_number') == '2') {
                return view('driver.profile');
            }
            \abort(404);
        }
        return redirect('/');
    }
    public function show_news($id)
    {
        $cookie = $this->request->cookie('role_number');
        // dd($this->request->cookie('role_number') == '2');

        if (isset($cookie)) {

            if ($this->request->cookie('role_number') == '2') {

                $news = News::where('id', $id)->first();
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
        return redirect('/');
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
