<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Payment_inform;
use LogicException;
use Validator;
use Illuminate\Support\Facades\DB;

class PaymentController extends Controller
{
    public function __construct(Request $request)
    {
        $this->request = $request;
    }

    public function addPayment()
    {

        try {

        $validate = Validator::make($this->request->all(), [
            'tran_key' => 'required',
            'user_id' => 'required',
            'time' => 'required',
            'date' => 'required',
            'content' => 'required',
            'bill_image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048'
        ]);
        if ($validate->fails()) {
            throw new LogicException($validate->errors());
        }
        $payment = Payment_inform::create($this->request->all());

        dd(explode("/",$this->request->input('date')));

        DB::beginTransaction();
        if ($this->request->file('bill_image')) {
            $image_filename = $this->request->file('bill_image')->getClientOriginalName();
            $image_name = $this->request->input('first_name'). '_'. $this->request->input('date'). '_'. $this->request->input('time') . '_' . $image_filename;
            $public_path = 'images/Payments/';
            $destination = base_path() . "/public/" . $public_path;
            $this->request->file('bill_image')->move($destination, $image_name);
            $payment->bill_image = $public_path . $image_name;
        }
        $payment->save();

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
