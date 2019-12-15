<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\News;
use App\Student;
use App\User;
use DateTime;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ParentController extends Controller
{
    public function __construct(Request $request)
    {
        $this->request = $request;
    }

    public function index()
    {
       //Check login
       $auth = User::where('id', $this->request->cookie('use_id'))->where('secure_code', $this->request->cookie('secure'))->where('status', 1)->first();

       if (!$auth) {
           return redirect('/');
       }

            if ($this->request->cookie('role_number') == '1') {

                $news = News::whereIn('role_id', [1, 4])->where('news_statuses_id', 1)->get();
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

                            if ($time_now > $n->release_time) {

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

                return view('parent.index', [
                    'datas' => $data['info'],

                ]);
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

            if ($this->request->cookie('role_number') == '1') {

                $news = News::where('id', $id)->whereIn('role_id', [1, 4])->where('news_statuses_id', 1)->first();
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

    public function list_student($id, $token)
        {
                //Check login
                $auth = User::where('id', $this->request->cookie('use_id'))->where('secure_code', $this->request->cookie('secure'))->where('status', 1)->first();

                if (!$auth) {
                    return redirect('/');
                }

                if ($this->request->cookie('role_number') == '1') {

                    $students = Student::where('user_id', $this->request->cookie('use_id'))->get();

                    $data['info'] = [];
                    $data['check_in'][] = [];
                    $count = 0;

                    $date_check = [];
                    $day_check = [];
                    $down_check = [];

                    $check = 0;

                    foreach ($students as $s) {

                        $num = 0;
                        $info = DB::table('check_in')->where('card_id', $s->card_id)->get();

                        foreach ($info as $i) {

                            if ($i->get_on_id == '1' && $i->period_time == '1') {
                                array_push($date_check, $i->date_check);
                                array_push($day_check, $i->time_check);
                            } else {
                                array_push($down_check, $i->time_check);
                            }
                        }

                        $data['check_in'][$check][$num++] = $date_check;
                        $data['check_in'][$check][$num++] = $day_check;
                        $data['check_in'][$check][$num++] = $down_check;

                        $date_check = [];
                        $day_check = [];
                        $down_check = [];

                        $check++;

                        $data['info'][$count++] = [

                            'nickname' => $s->nickname

                        ];
                    }

                    return view('parent.dashboard', [
                        'datas' => $data['info']
                    ]);

                    return $this->responseRequestSuccess($data['check_in']);
                }
                \abort(404);

    }

    public function ajax_list_student()
    {

            if ($this->request->cookie('role_number') == '1') {

                $students = Student::where('user_id', $this->request->input('user_id'))->get();

                $data['check_in'][] = [];

                $date_check = [];
                $day_check = [];
                $down_check = [];

                $check = 0;

                foreach ($students as $s) {

                    $num = 0;
                    $name = $s->nickname;
                    $info = DB::table('check_in')->where('card_id', $s->card_id)->orderBy('id', 'DESC')->limit(14)->get();

                    foreach ($info as $i) {

                        if ($i->get_on_id == '1' && $i->period_time == '1') {
                            array_push($date_check, $i->date_check);
                            array_push($day_check, $i->time_check);
                        } elseif ($i->get_on_id == '2' && $i->period_time == '2') {
                            array_push($down_check, $i->time_check);
                        }
                    }

                    $data['check_in'][$check][$num++] = $date_check;
                    $data['check_in'][$check][$num++] = $day_check;
                    $data['check_in'][$check][$num++] = $down_check;
                    $data['check_in'][$check][$num++] = $name;


                    $date_check = [];
                    $day_check = [];
                    $down_check = [];

                    $check++;
                }

                return $this->responseRequestSuccess($data['check_in']);
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

            if ($this->request->cookie('role_number') == '1') {

                return view('parent.profile');
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
