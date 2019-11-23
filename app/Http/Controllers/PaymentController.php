<?php

namespace App\Http\Controllers;

use App\Car;
use App\District;
use Illuminate\Http\Request;
use App\Payment_inform;
use App\Payment_log;
use App\Payment_status;
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

    public function index($car)
    {
        $inform = Payment_inform::get();

        $data['info'] = [];
        $count = 0;

        if ($car == 'car1') {
            $car_num = 1;
        } else {
            $car_num = 2;
        }

        // dd($inform);
        $bank_1 = 0;
        $bank_2 = 0;
        $bank_3 = 0;
        $bank_4 = 0;

        $month_sub = ["มกราคม", "กุมภาพันธ์", "มีนาคม", "เมษายน", "พฤษภาคม", "มิถุนายน", "กรกฎาคม", "สิงหาคม", "กันยายน", "ตุลาคม", "พฤศจิกายน", "ธันวาคม"];
        $month_now = $month_sub[date('m') - 1];
        $year_now = date('Y') + 543;

        // dd($year_now);

        foreach ($inform as $d) {

            $log = Payment_log::where('id', $d->payment_log_id)->first();
            $std = Student::where('id', $log->student_id)->first();

            // dd($d);

            if ($std->car_id == $car_num) {

                $parent = User::where('id', $std->user_id)->first(); // เอาข้อมูลผู้ปกครองออกมาไม่เป็น
                $school = School::where('id', $std->school_id)->first();
                $district = District::where('id', $std->district_id)->first();



                if ($d->bank_id == '1') {

                    $bank_1++;
                } else if ($d->bank_id == '2') {
                    $bank_2++;
                } else if ($d->bank_id == '3') {
                    $bank_3++;
                } else if ($d->bank_id == '4') {
                    $bank_4++;
                }

                $data['info'][$count++] = [

                    'id' => $d->id,
                    'student_id' => $std->id,
                    'tran_key' => $log->tran_key,
                    'date' => $d->date . ' ' . $d->timepicker,
                    'bank_id' => $d->bank_id,
                    'bill_image' => $d->imgInp,

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
            }



            // dd($data['info']);
            // var_dump($data['info']);
        }

        // dd($data['info']);

        return view('admin.payment_confirm', [
            'datas' => $data['info'],
            'bank_1' => $bank_1,
            'bank_2' => $bank_2,
            'bank_3' => $bank_3,
            'bank_4' => $bank_4,
            'month_now' => $month_now,
            'year_now' => $year_now
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

    public function overview($id)
    {

        $students = Student::where('user_id', $id)->get();

        $data['info'] = [];
        $count = 0;

        // dd($students);

        foreach ($students as $d) {

            $bill = Payment_log::where('student_id', $d->id)->get();

            // dd($bill);

            foreach ($bill as $b) {

                // $status_bill = Payment_status::where('id', $b->pm_status_id)->first();
                // dd($b);
                $district = District::where('id', $d->district_id)->first();
                $school = School::where('id', $d->school_id)->first();
                $car = Car::where('id', $d->car_id)->first();

                $data['info'][$count++] = [

                    'tran_key' => $b->tran_key,
                    'status' => $b->pm_status_id,
                    'fullname' => $d->prefix . ' ' . $d->first_name . ' ' . $d->last_name,
                    'name' => $d->nickname,
                    'school' => $school->name_school,
                    'car_id' =>  $car->name,
                    'car_name' => $car->name_driver,
                    'month' => $b->month,
                    'year' => $b->year,
                    'price' => $district->price,
                    'qrcode' => $b->qr_code

                ];
            }
        }


        // dd($data['info']);



        return view('parent.payment_overview', [
            'data' => $data['info']
        ]);
    }

    public function parent_list($id)
    {

        $students = Student::where('user_id', $id)->get();

        $data['info'] = [];
        $count = 0;

        // dd($students);

        foreach ($students as $d) {

            $bill = Payment_log::where('student_id', $d->id)->get();

            // dd($bill);

            foreach ($bill as $b) {

                // $status_bill = Payment_status::where('id', $b->pm_status_id)->first();
                // dd($b);
                $district = District::where('id', $d->district_id)->first();
                $school = School::where('id', $d->school_id)->first();
                $car = Car::where('id', $d->car_id)->first();

                $data['info'][$count++] = [

                    'tran_key' => $b->tran_key

                ];
            }
        }


        // dd($data['info']);



        return view('parent.payment_confirm', [
            'data' => $data['info']
        ]);
    }

    public function admin_list($car)
    {

        if ($car == 'car1') {
            $car_num = 1;
        } else {
            $car_num = 2;
        }

        $bill = Payment_log::get();

        $month_sub = ["ม.ค.", "ก.พ.", "มี.ค.", "เม.ย.", "พ.ค.", "มิ.ย.", "ก.ค.", "ส.ค.", "ก.ย.", "ต.ค.", "พ.ย.", "ธ.ค."];

        // dd($status_1);

        // $students = Student::where('user_id', $id)->get();

        $data['info'] = [];
        $count = 0;

        $status_1 = 0; //ค้างชำระ
        $status_2 = 0; //ชำระ
        $status_3 = 0; //รอการยืนยัน


        foreach ($bill as $b) {

            $stu = Student::where('id', $b->student_id)->first();


            if ($stu->car_id == $car_num) {

                $district = District::where('id', $stu->district_id)->first();
                $school = School::where('id', $stu->school_id)->first();
                $user = User::where('id', $stu->user_id)->first();

                if ($b->pm_status_id == '1') {
                    $status_1++;
                } else if ($b->pm_status_id == '2') {
                    $status_2++;
                } else if ($b->pm_status_id == '3') {
                    $status_3++;
                }

                if ($b->month == ($month_sub[date('m') - 1])) {


                    $data['info'][$count++] = [

                        'nickname' => $stu->nickname,
                        'tran_key' => $b->tran_key,
                        'status_bill' => $b->pm_status_id,
                        'school' => $school->name_school,
                        'parent_name' => $user->prefix . ' ' . $user->first_name . ' ' . $user->last_name,
                        'phone' => $user->phone,
                        'price' => $district->price,

                    ];
                }
            }
        }

        // dd($data['info']);


        return view('admin.payment_overview', [
            'data' => $data['info'],
            'no_1' => $status_1,
            'no_2' => $status_2,
            'no_3' => $status_3,
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
