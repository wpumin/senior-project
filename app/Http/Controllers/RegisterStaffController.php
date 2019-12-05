<?php

namespace App\Http\Controllers;

use App\Role;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class RegisterStaffController extends Controller
{
    public function __construct(Request $request)
    {
        $this->request = $request;
    }

    public function staff()
    {

        $cookie = $this->request->cookie('role_number');


        if (isset($cookie)) {

            if ($this->request->cookie('role_number') == '3') {

                return view('admin.staff_management_create');
            }
            \abort(404);
        }
        return redirect('/');
    }

    public function store()
    {
        // dd($this->request->all());

        $this->validate($this->request, [

            'password' => 'min:5|max:35',
            'cpassword' => 'min:5|max:35|same:password',
            'email' => '',
            'cemail' => 'same:email'


        ]);

        $user = new User();

        DB::beginTransaction();

        if ($this->request->file('staffImage')) {
            $image_filename = $this->request->file('staffImage')->getClientOriginalName();
            $image_name = $this->request->input('first_name') . '_' . $image_filename;
            $public_path = 'images/Users/';
            $destination = base_path() . "/public/" . $public_path;
            $this->request->file('staffImage')->move($destination, $image_name);
            $user->image = $public_path . $image_name;
        }

        // 'image' => $this->request->input('image'),
        $user->role_id = $this->request->input('role_id');
        // $user->relationship_id = $this->request->input('relationship_id');
        $user->car_id = $this->request->input('car_id');
        $user->prefix = $this->request->input('prefix');
        $user->first_name = $this->request->input('first_name');
        $user->last_name = $this->request->input('last_name');
        $user->phone = $this->request->input('phone');
        $user->line_id = $this->request->input('line_id');
        $user->email = $this->request->input('email');
        $user->address = $this->request->input('address');
        $user->username = $this->request->input('username');
        if ($this->request->input('password') != null) {
            $user->password = Hash::make($this->request->input('password'));
        }
        $user->lattitude = $this->request->input('lattitude');
        $user->longtitude = $this->request->input('longtitude');
        $staff->secure_code = $this->strRandom_ref();

        $user->save();

        DB::commit();

        return redirect('/admin/management/staff');
    }

    public function edit_staff($id)
    {
        $staff = User::where('id', $id)->first();

        $role = Role::where('id', $staff->role_id)->first();

        return view('admin.staff_management_edit', [

            'id' => $staff->id,
            'image' => $staff->image,
            'prefix' => $staff->prefix,
            'first_name' => $staff->first_name,
            'last_name' => $staff->last_name,
            'car_id' => $staff->car_id,
            'phone' => $staff->phone,
            'line_id' => $staff->line_id,
            'email' => $staff->email,
            'address' => $staff->address,
            'username' => $staff->username,
            'role_id' => $staff->role_id,
            'role' => $role->name

        ]);
    }

    public function update_staff()
    {

        $this->validate($this->request, [

            'email' => '',
            'cemail' => 'same:email'


        ]);

        $staff = User::where('id', $this->request->input('staff_id'))->first();

        DB::beginTransaction();

        if ($this->request->file('staffImage')) {
            $image_filename = $this->request->file('staffImage')->getClientOriginalName();
            $image_name = $this->request->input('first_name') . '_' . $image_filename;
            $public_path = 'images/Users/';
            $destination = base_path() . "/public/" . $public_path;
            $this->request->file('staffImage')->move($destination, $image_name);
            $staff->image = $public_path . $image_name;
        }

        // 'image' => $this->request->input('image'),
        $staff->role_id = $this->request->input('role_id');
        // $user->relationship_id = $this->request->input('relationship_id');
        $staff->car_id = $this->request->input('car_id');
        $staff->prefix = $this->request->input('prefix');
        $staff->first_name = $this->request->input('first_name');
        $staff->last_name = $this->request->input('last_name');
        $staff->phone = $this->request->input('phone');
        $staff->line_id = $this->request->input('line_id');
        $staff->email = $this->request->input('email');
        $staff->address = $this->request->input('address');
        $staff->username = $this->request->input('username');
        if ($this->request->input('password') != null) {

            $this->validate($this->request, [

                'password' => 'min:5|max:35',
                'cpassword' => 'min:5|max:35|same:password',


            ]);

            $staff->password = Hash::make($this->request->input('password'));
        }
        $staff->lattitude = $this->request->input('lattitude');
        $staff->longtitude = $this->request->input('longtitude');
        $staff->secure_code = $this->strRandom_ref();

        $staff->save();

        DB::commit();

        return redirect('/admin/management/staff');
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
