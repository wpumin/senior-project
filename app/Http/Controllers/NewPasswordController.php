<?php

namespace App\Http\Controllers;

use App\User;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Crypt;
use Illuminate\Http\Request;
use LogicException;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Validator;
use Blocktrail\CryptoJSAES\CryptoJSAES;

class NewPasswordController extends Controller
{
    public function __construct(Request $request)
    {
        $this->request = $request;
    }


    public function newPassword()
    {
        try {
            $validate = Validator::make($this->request->all(), [
                'email' => 'required',
                'password' => 'required|min:8|max:20',
                'confirm_password' => 'required'
            ]);
            if ($validate->fails()) {

                return $this->responseRequestError('pass_too_short');
            }

            // if ($user = User::where('email', $this->decrypt($this->request->email))->first()) {

            //     if ($this->request->password == $this->request->confirm_password) {

            //         $user->password = Hash::make($this->request->password);
            //         if ($user->save()) {

            return $this->responseRequestSuccess('Success!');
            //         }
            //     } else {

            //         return $this->responseRequestError('pass_not_same');
            //     }
            // } else {
            //     return $this->responseRequestError('error');
            // }
        } catch (DecryptException $e) {
            return 'ไม่พบข้อมูล';
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
    /*
    |--------------------------------------------------------------------------
    | function สำหรับ encrypt
    |--------------------------------------------------------------------------
     */
    protected function encrypt($key)
    {
        $passphrase = "my passphrase";

        return CryptoJSAES::encrypt($key, $passphrase);
    }
    /*
    |--------------------------------------------------------------------------
    | function สำหรับ decrypt
    |--------------------------------------------------------------------------
     */
    protected function decrypt($key)
    {
        $passphrase = "my passphrase";

        return CryptoJSAES::decrypt($key, $passphrase);
    }
}
