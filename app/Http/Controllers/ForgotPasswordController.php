<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Carbon\Carbon;
use App\Otp;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Support\Facades\Validator;
class ForgotPasswordController extends Controller
{
    public function ForgotPassword(Request $request)
    {
        // validator
        $validator = Validator::make($request->all(), [
            'email' => 'required',
        ]);
        if ($validator->fails()) {
            $errors = $validator->errors();
            return $this->responseRequestError($errors);
        }

        $user = User::where('email', $request->email)->first();
        if ($user) {

            //if actived
            if ($user = User::where('email', $request->email)) {

                $template_html = 'mail.forgot_password';

                // Create OTP
                $genREF = $this->strRandom_ref();
                $genOTP = $this->strRandom_otp();

                $template_data = [

                    'ref' => $genREF,
                    'otp' => $genOTP
                ];
                
                $otp = new Otp();
                $otp->email = $request->email;
                $otp->ref = $genREF;
                $otp->otp = $genOTP;
                

                if ($otp->save()) {
                    Mail::send($template_html, $template_data, function ($msg) use ($user) {
                        $msg->subject('ลืมรหัสผ่าน === Forgot');
                        $msg->to([$user->email]);
                        $msg->from('dviver100@gmail.com', 'Bear-Bus');
                    });

                    $info = [
                        'email' => encrypt($user->email),
                        'username' => encrypt($user->username),
                        'ref' => encrypt($otp->ref)
                    ];

                    return $this->responseRequestSuccess($info);
                }
            } else {
                //not active
                return $this->responseRequestError('no_activate');
            }
        } else {
            return $this->responseRequestError('error');
        }
    }
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
    
}
