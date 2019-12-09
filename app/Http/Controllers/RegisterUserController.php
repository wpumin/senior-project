<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Relationship;
use App\Role;
use App\School;
use App\Student;
use App\User;
use Exception;
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
        //Check login
        $auth = User::where('id', $this->request->cookie('use_id'))->where('secure_code', $this->request->cookie('secure'))->where('status', 1)->first();

        if (!$auth) {
            return redirect('/');
        }

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
            $user->secure_code = $this->strRandom_ref();

            $user->save();

            DB::commit();
            return $this->responseRequestSuccess('Success!');
        } catch (Exception $e) {
            return response()->json($this->formatResponse($e->getMessage()));
        }
    }
    public function list_user()
    {

            //Check login
            $auth = User::where('id', $this->request->cookie('use_id'))->where('secure_code', $this->request->cookie('secure'))->where('status', 1)->first();

            if (!$auth) {
                return redirect('/');
            }

            if ($this->request->cookie('role_number') == '3') {

                $users = User::get();

                $data['info'] = [];
                $count = 0;

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

                return view('admin.parent_management', [
                    'datas' => $data['info'],

                ]);
            }
            \abort(404);
    }

    public function edit_user($id)
    {
            //Check login
            $auth = User::where('id', $this->request->cookie('use_id'))->where('secure_code', $this->request->cookie('secure'))->where('status', 1)->first();

            if (!$auth) {
                return redirect('/');
            }

            if ($this->request->cookie('role_number') == '3') {


                $user = User::where('id', $id)->first();


                $data['info'] = [];
                $count = 0;

                $students = Student::where('user_id', $user->id)->get();


                if ($user->role_id == '1') {

                    $relation = Relationship::where('id', $user->relationship_id)->first();
                }


                foreach ($students as $u) {

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
                            'car_id' => $u->car_id,

                        ];
                    }
                }

                return view('admin.parent_management_edit', [
                    'datas' => $data['info'],
                    'no' => $user->id,
                    'prefix' => $user->prefix,
                    'image' => $user->image,
                    'relationship_id' => $user->relationship_id,
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
                    // 'district' =>

                ]);
            }
            \abort(404);
    }

    public function update_user()
    {
        //Check login
        $auth = User::where('id', $this->request->cookie('use_id'))->where('secure_code', $this->request->cookie('secure'))->where('status', 1)->first();

        if (!$auth) {
            return redirect('/');
        }

        $this->validate($this->request, [

            'parent_password' => 'min:5|max:35',
            'parent_password_confirm' => 'min:5|max:35|same:parent_password',
            'parent_email' => '',
            'parent_email_confirm' => 'same:parent_email'


        ], [

            'parent_password' => '* กรุณาตั้งรหัสผ่านมากกว่า 5 ตัว',
            'parent_password_confirm' => '* รหัสผ่านไม่ตรงกัน',

        ]);

        $user = User::where('id', $this->request->input('user_id_update'))->first();

        DB::beginTransaction();

        if ($this->request->file('parentImage0')) {
            $image_filename = $this->request->file('parentImage0')->getClientOriginalName();
            $image_name = $this->request->input('first_name') . '_' . $image_filename;
            $public_path = 'images/Users/';
            $destination = base_path() . "/public/" . $public_path;
            $this->request->file('parentImage0')->move($destination, $image_name);
            $user->image = $public_path . $image_name;
        }

        $user->relationship_id = $this->request->input('parent_relation');
        $user->prefix = $this->request->input('prefix_parent');
        $user->first_name = $this->request->input('parent_fname');
        $user->last_name = $this->request->input('parent_lname');
        $user->phone = $this->request->input('parent_phone');
        $user->line_id = $this->request->input('parent_line_id');
        $user->email = $this->request->input('parent_email');
        $user->address = $this->request->input('parent_address');
        $user->username = $this->request->input('parent_username');

        if ($this->request->input('parent_password') != null) {
            $user->password = Hash::make($this->request->input('parent_password'));
        }

        $user->lattitude = $this->request->input('lattitude');
        $user->longtitude = $this->request->input('longtitude');
        $user->secure_code = $this->strRandom_ref();

        $user->save();

        DB::commit();
        return redirect('admin/management/parent');
    }

    public function del_user($id)
    {
            //Check login
            $auth = User::where('id', $this->request->cookie('use_id'))->where('secure_code', $this->request->cookie('secure'))->where('status', 1)->first();

            if (!$auth) {
                return redirect('/');
            }

            if ($this->request->cookie('role_number') == '3') {
                $user = User::where('id', $id)->first();
                $user->delete();

                $data['info'] = [];
                $count = 0;

                $users = User::get();

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

                return view('admin.parent_management', [
                    'datas' => $data['info'],

                ]);
            }
            \abort(404);
    }
    public function create()
    {
            //Check login
            $auth = User::where('id', $this->request->cookie('use_id'))->where('secure_code', $this->request->cookie('secure'))->where('status', 1)->first();

            if (!$auth) {
                return redirect('/');
            }

            if ($this->request->cookie('role_number') == '3') {

                return view('admin.parent_management_create');
            }
            \abort(404);

    }

    public function store_user()
    {
        //Check login
        $auth = User::where('id', $this->request->cookie('use_id'))->where('secure_code', $this->request->cookie('secure'))->where('status', 1)->first();

        if (!$auth) {
            return redirect('/');
        }

        $user = new User();

        DB::beginTransaction();

        if ($this->request->file('parentImage0')) {
            $image_filename = $this->request->file('parentImage0')->getClientOriginalName();
            $image_name = $this->request->input('parent_fname') . '_' . $image_filename;
            $public_path = 'images/Users/';
            $destination = base_path() . "/public/" . $public_path;
            $this->request->file('parentImage0')->move($destination, $image_name);
            $user->image = $public_path . $image_name;
        }

        $user->role_id = 1;
        $user->relationship_id = $this->request->input('parent_relation');
        $user->car_id = null;
        $user->prefix = $this->request->input('prefix_parent');
        $user->first_name = $this->request->input('parent_fname');
        $user->last_name = $this->request->input('parent_lname');
        $user->phone = $this->request->input('parent_phone');
        $user->line_id = $this->request->input('parent_line_id');
        $user->email = $this->request->input('parent_email');
        $user->address = $this->request->input('address');
        $user->username = $this->request->input('parent_username');
        $user->password = Hash::make($this->request->input('parent_password'));
        // $user->district_id = $this->request->input('district_id');
        $user->lattitude = $this->request->input('lattitude');
        $user->longtitude = $this->request->input('longtitude');
        $user->secure_code = $this->strRandom_ref();

        $user->save();
        DB::commit();

        for ($i = 0; $i < count($this->request->input('prefix')); $i++) {

            $student = new Student();
            DB::beginTransaction();

            if ($this->request->file('userprofile_picture')[$i]) {
                $image_filename = $this->request->file('userprofile_picture')[$i]->getClientOriginalName();
                $image_name = $this->request->input('first_name')[$i] . '_' . $image_filename;
                $public_path = 'images/Students/';
                $destination = base_path() . "/public/" . $public_path;
                $this->request->file('userprofile_picture')[$i]->move($destination, $image_name);
                $student->image = $public_path . $image_name;
            }

            $student->user_id = $user->id;
            $student->std_status_id = 1;
            $student->school_id = $this->request->input('school')[$i];
            $student->car_id = $this->request->input('car')[$i];
            $student->district_id = $this->request->input('district_id')[$i];
            $student->card_id = "xxxxxxxx";
            $student->prefix = $this->request->input('prefix')[$i];
            $student->first_name = $this->request->input('first_name')[$i];
            $student->last_name = $this->request->input('last_name')[$i];
            $student->nickname = $this->request->input('nickname')[$i];
            $student->phone = "ไม่มีข้อมูล";


            $student->save();
            DB::commit();
        }


        return redirect('admin/management/parent');
    }

    public function list_staff()
    {
            //Check login
            $auth = User::where('id', $this->request->cookie('use_id'))->where('secure_code', $this->request->cookie('secure'))->where('status', 1)->first();

            if (!$auth) {
                return redirect('/');
            }

            if ($this->request->cookie('role_number') == '3') {

                $users = User::get();

                $data['info'] = [];
                $count = 0;

                foreach ($users as $u) {

                    if ($u->role_id != '1') {

                        $role = Role::where('id', $u->role_id)->first();

                        $data['info'][$count++] = [

                            'id' => $u->id,
                            'username' => $u->username,
                            'role' => $role->name,
                            'first_name' => $u->first_name,
                            'last_name' => $u->last_name,
                            'phone' => $u->phone,
                            'date' => $u->created_at,

                        ];
                    }
                }

                return view('admin.staff_management', [
                    'datas' => $data['info'],

                ]);
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
}
