<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Payment_inform;
use App\Payment_log;
use LogicException;
use Validator;
use Illuminate\Support\Facades\DB;

class PaymentController extends Controller
{
    public function __construct(Request $request)
    {
        $this->request = $request;
    }

    public function index()
    {
        $data = Payment_log::get();

        // dd($data);

        return view('admin.payment_confirm', [
            'datas' => $data
        ]);
    }

    public function addPayment()
    {

        try {

            $validate = Validator::make($this->request->all(), [
                'tran_key' => 'required',
                'student_id' => 'required',
                'timepicker' => 'required',
                'date' => 'required',
                'content' => '',
                'bill_image' => '',
                'bank_id' => 'required',
                'pm_status_id' => 'required'
            ]);
            if ($validate->fails()) {
                throw new LogicException($validate->errors());
            }

            $payment = Payment_inform::create($this->request->all());
            $word_date = explode("/", $this->request->input('date'));
            $word_time = explode(":", $this->request->input('timepicker'));

            $date = '';
            $time = '';

            foreach ($word_time as $key) {
                $time .= $key;
            }
            foreach ($word_date as $key) {
                $date .= $key;
            }
            $result = $date . '_' . $time;

            // dd($this->request->input('timepicker'));

            DB::beginTransaction();
            if ($this->request->file('bill_image')) {
                $image_filename = $this->request->file('bill_image')->getClientOriginalName();
                // $image_filename = base64_encode(file_get_contents($request->file('bill_image')));
                $image_name = $this->request->input('tran_key') . '_' . $result . '_' . $image_filename;
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
