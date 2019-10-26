<?php

namespace App\Http\Controllers;

use App\Otp;
use App\User;
use Carbon\Carbon;

use App\Http\Controllers\Controller;
use App\Mail\Sendmail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Validator;
use Blocktrail\CryptoJSAES\CryptoJSAES;

class ForgotPasswordController extends Controller
{
    public function __construct(Request $request)
    {
        $this->request = $request;
    }

    public function pass_forgot()
    {

        $validator = Validator::make($this->request->all(), [
            'email' => 'required',
        ]);

        if ($validator->fails()) {
            $errors = $validator->errors();
            return $this->responseRequestError($errors);
        }

        $user = User::where('email', $this->request->input('email'))->first();

        if ($user) {

            $template_html = 'mail.forgot_password';

            // Create OTP
            $genREF = $this->strRandom_ref();
            $genOTP = $this->strRandom_otp();

            $template_data = [

                'ref' => $genREF,
                'otp' => $genOTP
            ];

            $otp = new Otp();
            $otp->email = $this->request->input('email');
            $otp->ref = $genREF;
            $otp->otp = $genOTP;

            if ($otp->save()) {

                Mail::to($user->email)->send(new Sendmail('ลืมรหัสผ่าน === Forgot', $genREF, $genOTP));

                // Mail::send($template_html, $template_data, function ($msg) use ($user) {
                //     // dd($user->email);
                //     $msg->subject('ลืมรหัสผ่าน === Forgot');
                //     $msg->to([$user->email]);
                //     $msg->from('dviver100@gmail.com', 'Bear-Bus');
                // });

                $info = [
                    'email' => $this->encrypt($user->email),
                    'username' => $this->encrypt($user->username),
                    'ref' => $this->encrypt($otp->ref)
                ];

                return $this->responseRequestSuccess($info);
            }
        } else {
            return $this->responseRequestError('error');
        }

        return $this->responseRequestSuccess($otp->save());
    }
    public function receiveOTP()
    {

        $validate = Validator::make($this->request->all(), [

            'ref' => 'required',
            'otp' => 'required'
        ]);

        if ($validate->fails()) {
            $errors = $validate->errors();
            return $this->responseRequestError($errors);
        }

        $userOTP = Otp::where('otp', $this->request->otp)->where('ref', $this->decrypt($this->request->ref))->first();

        if ($userOTP) {
            return $this->responseRequestSuccess('success');
        } else {
            return $this->responseRequestError('error');
        }
    }
    /*
    |--------------------------------------------------------------------------
    | OTP again
    |--------------------------------------------------------------------------
     */
    public function againOTP()
    {
        $template_html = 'mail.forgot_password';

        // Create OTP
        $genREF = $this->strRandom_ref();
        $genOTP = $this->strRandom_otp();

        $user = User::where('email', decrypt($this->request->input('email')))->first();

        $template_data = [

            'ref' => $genREF,
            'otp' => $genOTP
        ];
        $otp = new Otp();
        $otp->email = decrypt($this->request->input('email'));
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
