<?php

namespace App\Http\Controllers;

use App\News;
use Illuminate\Http\Request;
use App\Report;
use App\Type_report;
use App\Order_report;
use App\User;
use LogicException;
use Validator;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;

class ReportController extends Controller
{
    public function __construct(Request $request)
    {
        $this->request = $request;
    }

    public function createReport()
    {
        try {

            $validate = Validator::make($this->request->all(), [
                'user_id' => 'required',
                'type_id' => 'required',
                'title' => 'required',
                'content' => 'required',
            ]);

            if ($validate->fails()) {
                $errors = $validate->errors();
                return $this->responseRequestError('field_required');
            }
            $day = date('d');
            $month = date('m');
            $year = date('Y') + 543;


            // $name_month = ["ว่าง", "มกราคม", "กุมภาพันธ์", "มีนาคม", "เมษายน", "พฤษภาคม", "มิถุนายน", "กรกฎาคม", "สิงหาคม", "กันยายน", "ตุลาคม", "พฤศจิกายน", "ธันวาคม"];

            // // $word = 'บิล ของเดือน "' . $name_month[$month] . '" เข้าแล้ว.';
            // // dd(strval($word));

            $full = $day . '/' . $month . '/' . $year;

            DB::beginTransaction();
            $res['data'] = Report::create([
                'user_id' => $this->request->input('user_id'),
                'type_id' => $this->request->input('type_id'),
                'title' => $this->request->input('title'),
                'content' => $this->request->input('content'),
                'report_at' => $full
            ]);
            DB::commit();
            return $this->responseRequestSuccess($res['data']);
        } catch (Exception $e) {
            return response()->json($this->formatResponse($e->getMessage()));
        }
    }

    public function list_report()
    {
        // dd($this->request->cookie('role_id'));
        $cookie = $this->request->cookie('role_number');
        // dd(isset($cookie));

        if (isset($cookie)) {
            // dd(!isset($cookie));
            if ($this->request->cookie('role_number') == '3') {

                $reports = Report::get();

                $data['info'] = [];
                $count = 0;

                // dd($reports);

                foreach ($reports as $d) {

                    $type = Type_report::where('id', $d->type_id)->first();
                    $user = User::where('id', $d->user_id)->first();

                    $data['info'][$count++] = [

                        'id' => $d->id,
                        'title' => $d->title,
                        'type' => $type->type_name,
                        'date' => $d->report_at,
                        'time' => $d->created_at,
                        'content' => $d->content,
                        'name' => $user->prefix . ' ' . $user->first_name . ' ' . $user->last_name,
                        'phone' => $user->phone,


                    ];
                }

                $news = News::get();

                $data['info_news'] = [];
                $count_news = 0;

                // dd($news);
                if ($news) {

                    foreach ($news as $n) {

                        $user = User::where('id', $n->user_id)->first();

                        $data['info_news'][$count_news++] = [

                            'id' => $n->id,
                            'image' => $n->image,
                            'title' => $n->title,
                            'content' => $n->content,
                            'release_date' => $n->release_date . ' ' . $n->release_time,
                            'name' => $n->username,
                            'status' => $n->news_statuses_id



                        ];
                    }
                } else {

                    $data['info_news'][$count_news++] = [

                        'id' => '',
                        'image' => '',
                        'title' => '',
                        'content' => '',
                        'release_date' => '',
                        'name' => '',
                        'status' => ''



                    ];
                }

                // dd($data['info_news']);

                return view('admin.index', [
                    'data' => $data['info'],
                    'datas' => $data['info_news']
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

            if ($this->request->cookie('role_number') == '3') {

                // dd($id);
                $news = News::where('id', $id)->first();
                // dd($news);
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
                if ($news) {
                    // dd($news->release_date);
                    if ($full >= $news->release_date) {

                        // dd($time_now);
                        if ($time_now > $news->release_time) {

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
                        } else {

                            $data['info'][$count++] = [

                                'id' => '',
                                'image' => '',
                                'title' => '',
                                'content' => '',
                                'release_date' => '',
                                'name' => '',
                                'status' => ''



                            ];
                        }
                    } else {

                        $data['info'][$count++] = [

                            'id' => '',
                            'image' => '',
                            'title' => '',
                            'content' => '',
                            'release_date' => '',
                            'name' => '',
                            'status' => ''



                        ];
                    }
                } else {

                    $data['info'][$count++] = [

                        'id' => '',
                        'image' => '',
                        'title' => '',
                        'content' => '',
                        'release_date' => '',
                        'name' => '',
                        'status' => ''



                    ];
                }


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
