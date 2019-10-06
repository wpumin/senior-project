<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Support\Facades\Validator;


class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo = '/home';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }

    public function login(Request $request)
    {
        // validator
        $validator = Validator::make($request->all(), [
            'username' => 'required',
            'password' => 'required',
        ]);
        dd($validator);
        if ($validator->fails()) {
            $errors = $validator->errors();
            return $this->responseRequestError($errors);
        }

        $user = Users::where('username', $request->username)->first();

        if ($user) {

            if (Hash::check($request->password, $user->password)) {

                if ($user['is_active'] == true) {

                    $token = $this->jwt($user);
                    $user->token = $token;
                    $user->last_login_date = Carbon::now();
                    $user->save();
                    return $this->responseRequestSuccess($user);
                } else {
                    return $this->responseRequestError('no_activate', $user);
                }
            } else {
                return $this->responseRequestError('wrong_pass');
            }
        } else {
            return $this->responseRequestError('wrong_pass');
        }
    }
}
