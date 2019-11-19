<?php

namespace App\Http\Controllers;

use App\District;
use Illuminate\Http\Request;
use App\Payment_inform;
use App\Payment_log;
use App\School;
use App\Student;
use App\User;
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
        $inform = Payment_inform::get();

        $data['info'] = [];
        $count = 0;

        // dd($inform);

        foreach ($inform as $d) {

            $std = Student::where('id', $d->student_id)->first();
            $parent = User::where('id', $std->user_id)->first(); // เอาข้อมูลผู้ปกครองออกมาไม่เป็น
            $school = School::where('id', $std->school_id)->first();
            $district = District::where('id', $std->district_id)->first();

            $id = $d->id;

            $data['info'][$count++] = [

                'id' => $d->id,
                'student_id' => $d->student_id,
                'tran_key' => $d->tran_key,
                'date' => $d->date . ' ' . $d->timepicker,
                'bank_id' => $d->bank_id,
                'bill_image' => $d->bill_image,

                'std_prefix' => $std->prefix,
                'std_first_name' => $std->first_name,
                'std_last_name' => $std->last_name,
                'nickname' => $std->nickname,
                'car_id' => $std->car_id,
                'parent_prefix' => $parent->prefix,
                'parent_first_name' => $parent->first_name,
                'parent_last_name' => $parent->last_name,
                'parent_phone' => $parent->phone,

                'school' => $school->name_school,

                'price' => $district->price,
            ];

            // dd($data['info']);
            // var_dump($data['info']);
        }

        // dd($data['info']);

        return view('admin.payment_confirm', [
            'datas' => $data['info']
        ]);
    }

    public function addPayment()
    {

        try {

            $validate = Validator::make($this->request->all(), [
                'tran_key' => 'required',
                // 'student_id' => 'required',
                'timepicker' => 'required',
                'date' => 'required',
                'content' => '',
                // 'bill_image' => '',
                'bank_id' => 'required',
                // 'pm_status_id' => 'required' defalut : 1
            ]);

            if ($validate->fails()) {
                throw new LogicException($validate->errors());
            }

            $student_id = Payment_log::where('tran_key', $this->request->input('tran_key'))->first();

            DB::beginTransaction();


            $payment = new Payment_inform();

            $payment->tran_key = $this->request->input('tran_key');
            $payment->student_id = $student_id['student_id'];
            $payment->timepicker = $this->request->input('timepicker');
            $payment->date = $this->request->input('date');
            $payment->content = $this->request->input('content');
            $payment->bank_id = $this->request->input('bank_id');
            $payment->pm_status_id = 1;
            // $word_date = explode("/", $this->request->input('date'));
            // $word_time = explode(":", $this->request->input('timepicker'));

            // $date = '';
            // $time = '';

            // foreach ($word_time as $key) {
            //     $time .= $key;
            // }
            // foreach ($word_date as $key) {
            //     $date .= $key;
            // }
            // $result = $date . '_' . $time;

            // dd($this->request->input('timepicker'));


            // if ($this->request->file('bill_image')) {
            //     $image_filename = $this->request->file('bill_image')->getClientOriginalName();
            //     // $image_filename = base64_encode(file_get_contents($request->file('bill_image')));
            //     $image_name = $this->request->input('tran_key') . '_' . $result . '_' . $image_filename;
            //     $public_path = 'images/Payments/';
            //     $destination = base_path() . "/public/" . $public_path;
            //     $this->request->file('bill_image')->move($destination, $image_name);
            //     $payment->bill_image = $public_path . $image_name;
            // }
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
