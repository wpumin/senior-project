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

            $this->validate($this->request, [

                'user_id' => 'required',
                'type_id' => 'required',
                'title' => 'required|max:120',
                'message' => 'required|min:60|max:255',

            ], [
                'title.required' => '* กรุณาใส่หัวข้อ',
                'title.max' => '* ความยาวของข้อความต้องไม่เกิน 100 อักขระ',
                'type_id.required' => '* กรุณาเลือกประเภทการร้องเรียน',
                'message.required' => '* กรุณาใส่รายละเอียด',
                'message.min' => '* ความยาวข้อความต้องมีความยาวไม่ต่ำกว่า 50 อักขระ',
                'message.max' => '* ความยาวข้อความต้องมีความยาวไม่เกิน 200 อักขระ'
            ]);

            $day = date('d');
            $month = date('m');
            $year = date('Y') + 543;


            $full = $day . '/' . $month . '/' . $year;

            DB::beginTransaction();
            $res['data'] = Report::create([
                'user_id' => $this->request->input('user_id'),
                'type_id' => $this->request->input('type_id'),
                'title' => $this->request->input('title'),
                'content' => $this->request->input('message'),
                'report_at' => $full
            ]);
            DB::commit();
            session()->flash('success', 'Create Article Complete');
            return redirect('parent/report/' . $this->request->get('user_id') . '/' . $this->request->get('secure_code'));
        } catch (Exception $e) {
            return response()->json($this->formatResponse($e->getMessage()));
        }
    }

    public function list_report()
    {

        $cookie = $this->request->cookie('role_number');


        if (isset($cookie)) {

            if ($this->request->cookie('role_number') == '3') {

                $reports = Report::orderBy('reports.report_at', 'desc')->orderBy('reports.created_at', 'desc')->get();

                $data['info'] = [];
                $count = 0;



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

        if (isset($cookie)) {

            if ($this->request->cookie('role_number') == '3') {

                $news = News::where('id', $id)->first();
                $user = User::where('id', $news->user_id)->first();

                $d = date('d');
                $m = date('m');
                $y = date('Y') + 543;


                $full = $d . '/' . $m . '/' . $y;
                $time_now = date('H:i');


                $data['info'] = [];
                $count = 0;

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
