<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Role;
use App\Relationship;
use Carbon\Carbon;
use App\User;
use Firebase\JWT\JWT;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class LoginController extends Controller
{
    public function __construct(Request $request)
    {
        $this->request = $request;
    }

    public function index()
    {
        return view('index');
    }

    public function login()
    {
        // validator
        $validator = Validator::make($this->request->all(), [
            'username' => 'required',
            'password' => 'required',
        ]);
        if ($validator->fails()) {
            $errors = $validator->errors();
            return $this->responseRequestError($errors);
        }

        $user = User::where('username', $this->request->input('username'));
        // ->first()
        $has = $user->first();

        // dd($has);

        if ($has) {

            $check = $user->where('status', 0)->first();



            if ($check) {


                if (Hash::check($this->request->input('password'), $check->password)) {

                    $token = $this->jwt($check);
                    // dd($token);
                    $check->token = $token;
                    $check->last_login_date = Carbon::now();
                    $check->secure_code = $this->strRandom_ref();
                    $check->status = 1;
                    $check->save();

                    $role = Role::where('id', $check->role_id)->first();
                    $relationship = Relationship::where('id', $check->relationship_id)->first();

                    $check->role_name = $role->name;
                    $check->relationship_name = $relationship->name;

                    // dd($check);

                    if ($check->role_id == '2') {

                        return $this->responseRequestSuccess($check)
                            ->withCookie(cookie('role_number', $check->role_id, 60))
                            ->withCookie(cookie('car_num', $check->car_id, 60));
                    } else {
                        return $this->responseRequestSuccess($check)
                            ->withCookie(cookie('role_number', $check->role_id, 60));
                    }
                } else {
                    return $this->responseRequestError('incorrect_password');
                }
            } else {

                return $this->responseRequestError('occupied');
            }
        } else {
            // \abort(419);
            return $this->responseRequestError('no_user');
        }
    }
    public function logout($id, $secure)
    {

        // dd($id . ' ' . $secure);

        $user = User::where('id', $id)->where('secure_code', $secure)->first();

        if ($user) {

            $user->status = 0;
            $user->secure_code = $this->strRandom_ref();
            $user->save();

            return redirect('/' . "");
            return view('auth.login');
        }

        \abort(404);
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
}
