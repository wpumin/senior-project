<?php

namespace App\Http\Controllers;

use Carbon\Carbon;

use App\Http\Controllers\Controller;
use App\Student;
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

    public function list_student($id)
    {
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

    public function ajax_list_student()
    {

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

            $info = DB::table('check_in')->where('card_id', $s->card_id)->limit(14)->get();
            // dd($info);

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
            $data['check_in'][$check][$num++] = $name;

            // }
            $date_check = [];
            $day_check = [];
            $down_check = [];

            $check++;
        }


        return $this->responseRequestSuccess($data['check_in']);
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
