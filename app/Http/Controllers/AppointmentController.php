<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Appointment;
use LogicException;
use Validator;
use Illuminate\Support\Facades\DB;

class AppointmentController extends Controller
{
    public function __construct(Request $request)
    {
        $this->request = $request;
    }

    public function createAppointment()
    {

        try {

            $validate = Validator::make($this->request->all(), [
                'user_id' => 'required',
                'period_time' => 'required',
                'date' => 'required',
                'content' => ''
            ]);
            if ($validate->fails()) {
                throw new LogicException($validate->errors());
            }

            DB::beginTransaction();

            $res['member'] = Appointment::create([
                'user_id' => $this->request->input('user_id'),
                'period_time' => $this->request->input('period_time'),
                'date' => $this->request->input('date'),
                'content' => $this->request->input('content')
            ]);

            DB::commit();
            return $this->responseRequestSuccess('Success!');
        } catch (Exception $e) {
            return response()->json($this->formatResponse($e->getMessage()));
        }
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
