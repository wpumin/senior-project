<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Relationship;
use App\Role;
use App\School;
use App\Student;
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
                'phone' => 'required',
                'line_id' => 'required',
                'email' => 'required',
                'address' => 'required',
                'username' => 'required',
                'password' => 'required',
                'lattitude' => 'required',
                'longtitude' => 'required',
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
                $errors_ph = $validator_phone->errors();
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
            $user->phone = $this->request->input('phone');
            $user->line_id = $this->request->input('line_id');
            $user->email = $this->request->input('email');
            $user->address = $this->request->input('address');
            $user->username = $this->request->input('username');
            $user->password = Hash::make($this->request->password);
            $user->lattitude = $this->request->input('lattitude');
            $user->longtitude = $this->request->input('longtitude');

            $user->save();

            DB::commit();
            return $this->responseRequestSuccess('Success!');
        } catch (Exception $e) {
            return response()->json($this->formatResponse($e->getMessage()));
        }
    }

    public function list_user()
    {
        $cookie = $this->request->cookie('role_number');
        // dd(isset($cookie));

        if (isset($cookie)) {

            if ($this->request->cookie('role_number') == '3') {


                $users = User::get();

                $data['info'] = [];
                $count = 0;

                // dd($users);

                foreach ($users as $u) {

                    if ($u->role_id == '1') {

                        $data['info'][$count++] = [

                            'no' => $u->id,
                            'username' => $u->username,
                            'first_name' => $u->first_name,
                            'last_name' => $u->last_name,
                            'phone' => $u->phone,
                            'date' => $u->created_at,


                        ];
                    }
                }

                // dd($data['info']);

                return view('admin.parent_management', [
                    'datas' => $data['info'],

                ]);
            }
            \abort(404);
        }
        return redirect('/');
    }

    public function edit_user($id)
    {
        $cookie = $this->request->cookie('role_number');
        // dd(isset($cookie));

        if (isset($cookie)) {

            if ($this->request->cookie('role_number') == '3') {


                $user = User::where('id', $id)->first();

                $data['info'] = [];
                $count = 0;

                $students = Student::where('user_id', $user->id)->get();

                // dd($user->role_id);

                if ($user->role_id == '1') {

                    $relation = Relationship::where('id', $user->relationship_id)->first();
                }


                foreach ($students as $u) {
                    // dd($u);


                    if ($u) {

                        $school = School::where('id', $u->school_id)->first();

                        $data['info'][$count++] = [

                            'no' => $u->id,
                            'image' => $u->image,
                            'prefix' => $u->prefix,
                            'first_name' => $u->first_name,
                            'last_name' => $u->last_name,
                            'nickname' => $u->nickname,
                            'phone' => $u->phone,
                            'school' => $school->name_school,
                            'car_id' => $u->car_id



                        ];
                    }
                }

                // dd($data['info']);

                return view('admin.parent_management_edit', [
                    'datas' => $data['info'],
                    'no' => $user->id,
                    'prefix' => $user->prefix,
                    'image' => $user->image,
                    'relation' => $relation->name,
                    'username' => $user->username,
                    'first_name' => $user->first_name,
                    'last_name' => $user->last_name,
                    'phone' => $user->phone,
                    'line_id' => $user->line_id,
                    'email' => $user->email,
                    'address' => $user->address,
                    'date' => $user->created_at,
                    'lat' => $user->lattitude,
                    'long' => $user->longtitude,

                ]);
            }
            \abort(404);
        }
        return redirect('/');
    }

    public function del_user($id)
    {
        $cookie = $this->request->cookie('role_number');
        // dd(isset($cookie));

        if (isset($cookie)) {

            if ($this->request->cookie('role_number') == '3') {
                $user = User::where('id', $id)->first();
                $user->delete();

                $data['info'] = [];
                $count = 0;

                $users = User::get();
                // dd($users);

                foreach ($users as $u) {

                    if ($u->role_id == '1') {

                        $data['info'][$count++] = [

                            'no' => $u->id,
                            'username' => $u->username,
                            'first_name' => $u->first_name,
                            'last_name' => $u->last_name,
                            'phone' => $u->phone,
                            'date' => $u->created_at,


                        ];
                    }
                }

                // dd($data['info']);

                return view('admin.parent_management', [
                    'datas' => $data['info'],

                ]);
            }
            \abort(404);
        }
        return redirect('/');
    }
    public function create()
    {
        $cookie = $this->request->cookie('role_number');
        // dd(isset($cookie));

        if (isset($cookie)) {

            if ($this->request->cookie('role_number') == '3') {

                return view('admin.parent_management_create');
            }
            \abort(404);
        }
        return redirect('/');
    }

    public function list_staff()
    {
        $cookie = $this->request->cookie('role_number');
        // dd(isset($cookie));

        if (isset($cookie)) {

            if ($this->request->cookie('role_number') == '3') {

                $users = User::get();

                $data['info'] = [];
                $count = 0;

                // dd($users);

                foreach ($users as $u) {

                    if ($u->role_id != '1') {

                        $role = Role::where('id', $u->role_id)->first();

                        $data['info'][$count++] = [

                            'username' => $u->username,
                            'role' => $role->name,
                            'first_name' => $u->first_name,
                            'last_name' => $u->last_name,
                            'phone' => $u->phone,
                            'date' => $u->created_at,


                        ];
                    }
                }

                // dd($data['info']);

                return view('admin.staff_management', [
                    'datas' => $data['info'],

                ]);
            }
            \abort(404);
        }
        return redirect('/');
    }
    public function staff()
    {
        $cookie = $this->request->cookie('role_number');
        // dd(isset($cookie));

        if (isset($cookie)) {

            if ($this->request->cookie('role_number') == '3') {

                return view('admin.staff_management_create');
            }
            \abort(404);
        }
        return redirect('/');
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
