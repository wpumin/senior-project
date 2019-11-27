<?php

namespace App\Http\Controllers;

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
                'content' => $d->content,
                'name' => $user->prefix . ' ' . $user->first_name . ' ' . $user->last_name,
                'phone' => $user->phone,


            ];
        }

        return view('admin.index', [
            'data' => $data['info']
        ]);
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
