<?php

namespace App\Http\Controllers;

use Carbon\Carbon;

use App\Http\Controllers\Controller;
use App\News;
use App\Student;
use App\User;
use DateTime;
use Firebase\JWT\JWT;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use LogicException;



class ParentController extends Controller
{
    public function __construct(Request $request)
    {
        $this->request = $request;
    }

    public function index()
    {
        $cookie = $this->request->cookie('role_number');
        // dd(isset($cookie));

        if (isset($cookie)) {

            if ($this->request->cookie('role_number') == '1') {

                $news = News::where('role_id', 1)->where('news_statuses_id', 1)->get();
                // dd($news[0]);
                $d = date('d');
                $m = date('m');
                $y = date('Y') + 543;

                // dd($d);

                $full = $d . '/' . $m . '/' . $y;
                $time_now = date('H:i');

                $full_now = new DateTime($full);
                // dd($date1);
                // dd($news[0]['release_time'] > $time_now);

                // dd($news[0]['news_at'] > $full);

                $data['info'] = [];
                $count = 0;



                if ($news) {

                    foreach ($news as $n) {
                        // dd(new DateTime($n->release_date));
                        // $release_date = new DateTime($n->release_date);

                        // dd($full_now >= $n->release_date);

                        if ($full_now >= $n->release_date) {

                            // dd($time_now > $n->release_time);
                            if ($time_now > $n->release_time) {
                                // dd($n);
                                $data['info'][$count++] = [

                                    'id' => $n->id,
                                    'image' => $n->image,
                                    // 'created_at' => $n->news_at,
                                    // 'name' => $user->username,
                                    // 'status' => $n->news_statuses_id



                                ];
                            } else {

                                $data['info'][$count++] = [

                                    'id' => null,
                                    'image' => null,
                                    // 'created_at' => $n->news_at,
                                    // 'name' => $user->username,
                                    // 'status' => $n->news_statuses_id



                                ];
                            }
                        } else {

                            $data['info'][$count++] = [

                                'id' => null,
                                'image' => null,
                                // 'created_at' => $n->news_at,
                                // 'name' => $user->username,
                                // 'status' => $n->news_statuses_id



                            ];
                        }
                    }
                } else {

                    $data['info'][$count++] = [

                        'id' => null,
                        'image' => null,
                        // 'created_at' => $n->news_at,
                        // 'name' => $user->username,
                        // 'status' => $n->news_statuses_id



                    ];
                }



                // dd($data['info']);

                return view('parent.index', [
                    'datas' => $data['info'],

                ]);
            }
            \abort(404);
        }
        return redirect('/');
    }

    public function show_news($id)
    {
        $cookie = $this->request->cookie('role_number');
        // dd(isset($cookie));

        if (isset($cookie)) {

            if ($this->request->cookie('role_number') == '1') {

                $news = News::where('id', $id)->where('role_id', 1)->where('news_statuses_id', 1)->first();
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

    public function list_student($id, $token)
    {
        $cookie = $this->request->cookie('role_number');
        // dd(isset($cookie));
        $auth = User::where('id', $id)->where('token', $token)->first();

        if ($auth) {

            if (isset($cookie)) {

                if ($this->request->cookie('role_number') == '1') {
                    $students = Student::where('user_id', $id)->get();


                    $data['info'] = [];
                    $data['check_in'][] = [];
                    $count = 0;

                    $date_check = [];
                    $day_check = [];
                    $down_check = [];

                    $check = 0;



                    foreach ($students as $s) {
                        $num = 0;

                        // dd($s);

                        $info = DB::table('check_in')->where('card_id', $s->card_id)->get();

                        // if ($info) {

                        foreach ($info as $i) {

                            if ($i->get_on_id == '1' && $i->period_time == '1') {
                                array_push($date_check, $i->date_check);
                                array_push($day_check, $i->time_check);
                            } else {
                                array_push($down_check, $i->time_check);
                            }
                        }

                        // dd($list_c);

                        $data['check_in'][$check][$num++] = $date_check;
                        $data['check_in'][$check][$num++] = $day_check;
                        $data['check_in'][$check][$num++] = $down_check;

                        // }
                        $date_check = [];
                        $day_check = [];
                        $down_check = [];

                        $check++;


                        $data['info'][$count++] = [

                            'nickname' => $s->nickname

                        ];
                    }

                    // dd($data['check_in']);

                    return view('parent.dashboard', [
                        'datas' => $data['info']
                    ]);

                    return $this->responseRequestSuccess($data['check_in']);
                }
                \abort(404);
            }
            return redirect('/');
        }

        \abort(404);
    }

    public function ajax_list_student()
    {
        $cookie = $this->request->cookie('role_number');
        // dd(isset($cookie));

        if (isset($cookie)) {

            if ($this->request->cookie('role_number') == '1') {
                $students = Student::where('user_id', $this->request->input('user_id'))->get();

                $data['check_in'][] = [];
                $count = 0;

                $date_check = [];
                $day_check = [];
                $down_check = [];

                $check = 0;



                foreach ($students as $s) {
                    $num = 0;
                    $name = $s->nickname;

                    // dd($s);

                    $info = DB::table('check_in')->where('card_id', $s->card_id)->orderBy('id', 'DESC')->limit(14)->get();
                    // dd($info);

                    // if ($info) {

                    foreach ($info as $i) {

                        if ($i->get_on_id == '1' && $i->period_time == '1') {
                            array_push($date_check, $i->date_check);
                            array_push($day_check, $i->time_check);
                        } elseif ($i->get_on_id == '2' && $i->period_time == '2') {
                            array_push($down_check, $i->time_check);
                        }
                    }

                    // dd($list_c);

                    $data['check_in'][$check][$num++] = $date_check;
                    $data['check_in'][$check][$num++] = $day_check;
                    $data['check_in'][$check][$num++] = $down_check;
                    $data['check_in'][$check][$num++] = $name;

                    // }
                    $date_check = [];
                    $day_check = [];
                    $down_check = [];

                    $check++;
                }


                return $this->responseRequestSuccess($data['check_in']);
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

            if ($this->request->cookie('role_number') == '1') {

                return view('parent.profile');
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
