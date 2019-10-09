<?php

namespace App\Http\Controllers;

use App\Otp;
use App\User;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Crypt;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Validator;
use Blocktrail\CryptoJSAES\CryptoJSAES;

class AgainOTPController extends Controller
{
    
    public function __construct(Request $request)
    {
        $this->request = $request;
    }

    public function againOTP()
    {
        // validator
        $validator = Validator::make($this->request->all(), [
            'email' => 'required',
        ]);
        if ($validator->fails()) {
            $errors = $validator->errors();
            return $this->responseRequestError($errors);
        }
       
        $template_html = 'mail.forgot_password';

        // Create OTP
        $genREF = $this->strRandom_ref();
        $genOTP = $this->strRandom_otp();

        $user = User::where('email', decrypt($this->request->email))->first();

        $template_data = [

            'ref' => $genREF,
            'otp' => $genOTP
        ];
        $otp = new Otp();
        $otp->email = decrypt($this->request->email);
        $otp->ref = $genREF;
        $otp->otp = $genOTP;

        if ($otp->save()) {
            Mail::send($template_html, $template_data, function ($msg) use ($user) {
                $msg->subject('ลืมรหัสผ่าน === Forgot');
                $msg->to([$user->email]);
                $msg->from('dviver100@gmail.com', 'ClickNext');
            });

            $info = [
                'email' => encrypt($user->email),
                'username' => encrypt($user->username),
                'ref' => encrypt($otp->ref)
            ];

            return $this->responseRequestSuccess($info);
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
    | function สำหรับ Random String
    |--------------------------------------------------------------------------
     */
    protected function strRandom_ref($length = 6)
    {
        return substr(str_shuffle('abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789'), 0, $length);
    }
    /*
    |--------------------------------------------------------------------------
    | function สำหรับ Random OTP
    |--------------------------------------------------------------------------
     */
    protected function strRandom_otp($length = 6)
    {
        return substr(str_shuffle('0123456789'), 0, $length);
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
