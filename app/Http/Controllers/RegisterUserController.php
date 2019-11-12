<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\User;
use LogicException;
use Illuminate\Http\Request;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\DB;

class RegisterUserController extends Controller
{
    public function __construct(Request $request)
    {
        $this->request = $request;
    }

    public function register_user()
    {   
        try {

        $validator = Validator::make($this->request->all(), [
        'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        'role_id' => 'required',
        'relationship_id' => 'required',
        'car_id' => 'required',
        'prefix' => 'required',
        'first_name' => 'required',
        'last_name' => 'required',
        // 'fullname_u' => 'required',
        // 'relationship' => 'required',
        'phone' => 'required',
        'line_id' => 'required',
        'email' => 'required',
        'address' => 'required',
        'datetime' => 'required',
        'username' => 'required',
        'password' => 'required'
        ]);
   
    //validator mobile
    $validator_phone = Validator::make($this->request->all(), [
        'phone' => 'required|digits_between:9,10',
    ]);

    //validator password
    $validator_pass = Validator::make($this->request->all(), [
        'password' => 'required|min:8|max:20',
    ]);

    //validator unique
    $validator_unique = Validator::make($this->request->all(), [
        'email' => 'required|email|unique:users',
        'username' => 'required|unique:users',
    ]);

    if ($validator->fails()) {
        $errors = $validator->errors();
        return $this->responseRequestError('error', $errors);
    }

    if ($validator_unique->fails()) {
        $errors_u = $validator_unique->errors();
        return $this->responseRequestError('same_data', $errors_u);
    }

    //validator password
    if ($validator_pass->fails()) {
        $errors_p = $validator_pass->errors();
        return $this->responseRequestError('not_rule_pass', $errors_p);
    }

    //validator mobile
    if ($validator_phone->fails()) {
        $errors_ph = $validator_mobile->errors();
        return $this->responseRequestError('not_rule_mobile', $errors_ph);
    }
    $user = new User();

    DB::beginTransaction();

    if ($this->request->file('image')) {
        $image_filename = $this->request->file('image')->getClientOriginalName();
        $image_name = $this->request->input('first_name') . '_' . $image_filename;
        $public_path = 'images/Users/';
        $destination = base_path() . "/public/" . $public_path;
        $this->request->file('image')->move($destination, $image_name);
        $user->image = $public_path . $image_name;
    }
    
        // 'image' => $this->request->input('image'),
        $user->role_id = $this->request->input('role_id');
        $user->relationship_id = $this->request->input('relationship_id');
        $user->car_id = $this->request->input('car_id');
        $user->prefix = $this->request->input('prefix');
        $user->first_name = $this->request->input('first_name');
        $user->last_name = $this->request->input('last_name');
        // $user->fullname_u = 'คุณ'.$this->request->input('first_name') . ' ' . $this->request->input('last_name');
        // $user->relationship = $this->request->input('relationship');
        $user->phone = $this->request->input('phone');
        $user->line_id = $this->request->input('line_id');
        $user->email = $this->request->input('email');
        $user->address = $this->request->input('address');
        $user->datetime = $this->request->input('datetime');
        $user->username = $this->request->input('username');
        $user->password = Hash::make($this->request->password);
 

    $user->save();

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
