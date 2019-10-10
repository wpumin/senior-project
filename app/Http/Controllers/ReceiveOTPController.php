<?php

namespace App\Http\Controllers;

use App\Otp;
use App\User;
use Carbon\Carbon;

use App\Http\Controllers\Controller;
use Firebase\JWT\JWT;
use Illuminate\Support\Facades\Crypt;
use Illuminate\Http\Request;
use LogicException;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Validator;
use Blocktrail\CryptoJSAES\CryptoJSAES;


class ReceiveOTPController extends Controller
{
    public function receiveOTP(Request $request)
    {
        try {
        $validate = Validator::make($request->all(), [

            'ref' => 'required',
            'otp' => 'required'
        ]);

        if ($validate->fails()) {
            throw new LogicException($validate->errors()->first()); 
        }

        $userOTP = Otp::where('otp', $request->otp)->where('ref', decrypt($request->ref))->first();

        if ($userOTP) {

            return $this->responseRequestSuccess('success');
        } else {
            return $this->responseRequestError('error');
            }
        }catch (DecryptException $e) {
            return 'ไม่พบข้อมูล';
        }
    }

    /*
    |--------------------------------------------------------------------------
    | ตัวเข้ารหัส JWT
    |--------------------------------------------------------------------------
     */
    protected function jwt($user)
    {
        $payload = [
            'iss' => "lumen-jwt", // Issuer of the token
            'sub' => $user->id, // Subject of the token
            'iat' => time(), // Time when JWT was issued.
            'exp' => time() + env('JWT_EXPIRE_HOUR') * 60 * 60, // Expiration time
        ];
        return JWT::encode($payload, env('JWT_SECRET'));
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