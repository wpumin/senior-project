<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Student;
use LogicException;
use Illuminate\Http\Request;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\DB;

class RegisterStudentController extends Controller
{
    public function __construct(Request $request)
    {
        $this->request = $request;
    }

    public function register_student()
    {
        try {

            $validator = Validator::make($this->request->all(), [
                'user_id' => 'required',
                'school_id' => 'required',
                'car_id' => 'required',
                'card_id' => 'required',
                'first_name' => 'required',
                'last_name' => 'required',
                'fullname' => 'required',
                'nickname' => 'required',
                'address' => 'required',
                'lattitude' => 'required',
                'longtitude' => 'required',
                'price' => 'required',
                'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
                // 'image_map' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048'
            ]);

            if ($validator->fails()) {
                $errors = $validator->errors();
                return $this->responseRequestError('error', $errors);
            }


            //validator mobile
            $validator_mobile = Validator::make($this->request->all(), [
                'mobile' => 'required|digits_between:9,10',
            ]);


            //validator mobile
            if ($validator_mobile->fails()) {
                $errors_ph = $validator_mobile->errors();
                return $this->responseRequestError('not_rule_mobile', $errors_ph);
            }
            $student = new Student();
            DB::beginTransaction();

            if ($this->request->file('image')) {
                $image_filename = $this->request->file('image')->getClientOriginalName();
                $image_name = $this->request->input('first_name') . '_' . $image_filename;
                $public_path = 'images/Students/';
                $destination = base_path() . "/public/" . $public_path;
                $this->request->file('image')->move($destination, $image_name);
                $student->image_stu = $public_path . $image_name;
            }

            // 'image' => $this->request->input('image'),
            $student->user_id = $this->request->input('user_id');
            $student->school_id = $this->request->input('school_id');
            $student->car_id = $this->request->input('car_id');
            $student->card_id = $this->request->input('card_id');
            $student->first_name = $this->request->input('first_name');
            $student->last_name = $this->request->input('last_name');
            $student->fullname_s = $this->request->input('fullname') . ' ' . $this->request->input('last_name');
            $student->nickname = $this->request->input('nickname');
            $student->mobile = $this->request->input('mobile');
            $student->address = $this->request->input('address');
            $student->lattitude = $this->request->input('lattitude');
            $student->longtitude = $this->request->input('longtitude');
            $student->price = $this->request->input('price');


            $student->save();

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
