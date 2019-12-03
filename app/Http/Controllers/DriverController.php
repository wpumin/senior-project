<?php

namespace App\Http\Controllers;

use App\App_status;
use App\Appointment;
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

    public function list_student($car)
    {
        $cookie = $this->request->cookie('role_number');
        // dd(isset($cookie));

        if (isset($cookie)) {

            if ($this->request->cookie('role_number') == '2') {

                $students = Student::where('car_id', $car)->get();

                $data['info'] = [];
                $count = 0;

                $day = date('d');
                $month = date('m');
                $year = date('Y') + 543;

                $full = $day . '/' . $month . '/' . $year;

                // dd($full);

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
                            'fullname' => $s->prefix . $s->first_name . ' ' . $s->last_name,
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
            \abort(404);
        }
        return redirect('/');
    }

    public function del_app($car, $id)
    {
        $cookie = $this->request->cookie('role_number');
        // dd(isset($cookie));

        if (isset($cookie)) {

            if ($this->request->cookie('role_number') == '2') {

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
                            'fullname' => $s->prefix . $s->first_name . ' ' . $s->last_name,
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
            \abort(404);
        }
        return redirect('/');
    }

    public function accept_app($car, $id)
    {
        $cookie = $this->request->cookie('role_number');
        // dd(isset($cookie));

        if (isset($cookie)) {

            if ($this->request->cookie('role_number') == '2') {
                $appointment = Appointment::where('id', $id)->first();
                $appointment->app_status_id = 2;
                $appointment->save();

                $student = Student::where('id', $appointment->student_id)->first();
                $student->std_status_id = 4;
                $student->save();

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
                            'fullname' => $s->prefix . $s->first_name . ' ' . $s->last_name,
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
                // dd($news[0]);
                $d = date('d');
                $m = date('m');
                $y = date('Y') + 543;

                // dd($d);

                $full = $d . '/' . $m . '/' . $y;
                $time_now = date('H:i');


                // dd($full);
                // dd($news[0]['release_time'] > $time_now);

                // dd($news[0]['news_at'] > $full);

                $data['info'] = [];
                $count = 0;

                // dd($news->news_at);

                // foreach ($news as $n) {
                // dd($n->release_time > $time_now);
                // if ($news) {

                if ($news->release_date <= $full) {

                    if ($news->release_time < $time_now) {

                        $user = User::where('id', $news->user_id)->first();

                        $data['info'][$count++] = [

                            'id' => $news->id,
                            'image' => $news->image,
                            'title' => $news->title,
                            'content' => $news->content,
                            'release_date' => $news->release_date . ' ' . $news->release_time,
                            'name' => $user->username,
                            'status' => $news->news_statuses_id



                        ];
                    }
                }
                // }


                // }

                // dd($data['info']);

                return view('news.news_detail', [
                    'datas' => $data['info'],

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
