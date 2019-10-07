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
        'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        'first_name' => 'required',
        'last_name' => 'required',
        'nickname' => 'required',
        'mobile' => 'required',
        'school' => 'required',
        'address' => 'required',
        'lattitude' => 'required',
        'longtitude' => 'required',
        // 'image_map' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048'
        ]);
   
    //validator mobile
    $validator_mobile = Validator::make($this->request->all(), [
        'mobile' => 'required|digits_between:9,10',
    ]);

    if ($validator->fails()) {
        $errors = $validator->errors();
        return $this->responseRequestError('error', $errors);
    }

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
        $student->image = $public_path . $image_name;
    }
    
        // 'image' => $this->request->input('image'),
        $student->first_name = $this->request->input('first_name');
        $student->last_name = $this->request->input('last_name');
        $student->nickname = $this->request->input('nickname');
        $student->mobile = $this->request->input('mobile');
        $student->school = $this->request->input('school');
        $student->address = $this->request->input('address');
        $student->lattitude = $this->request->input('lattitude');
        $student->longtitude = $this->request->input('longtitude');

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
