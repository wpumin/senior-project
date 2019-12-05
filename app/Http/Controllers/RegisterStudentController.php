<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\School;
use App\Student;
use LogicException;
use Illuminate\Http\Request;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\DB;

class RegisterStudentController extends Controller
{
    public function __construct(Request $request)
    {
        $this->request = $request;
    }

    public function register_student()
    {
        try {

            $validator = Validator::make($this->request->all(), [
                'user_id' => 'required',
                'std_status_id' => 'required',
                'school_id' => 'required',
                'car_id' => 'required',
                'district_id' => 'required',
                'card_id' => 'required',
                'prefix' => 'required',
                'first_name' => 'required',
                'last_name' => 'required',
                'nickname' => 'required',
                'phone' => 'required',
                // 'lattitude' => 'required',
                // 'longtitude' => 'required',
                'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
                // 'image_map' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048'
            ]);

            if ($validator->fails()) {
                $errors = $validator->errors();
                return $this->responseRequestError('error', $errors);
            }


            //validator_phone
            $validator_phone = Validator::make($this->request->all(), [
                'phone' => 'required|digits_between:9,10',
            ]);


            //validator_phone
            if ($validator_phone->fails()) {
                $errors_ph = $validator_phone->errors();
                return $this->responseRequestError('not_rule_phone', $errors_ph);
            }
            $student = new Student();
            DB::beginTransaction();

            if ($this->request->file('image')) {
                $image_filename = $this->request->file('image')->getClientOriginalName();
                $image_name = $this->request->input('first_name') . '_' . $image_filename;
                $public_path = 'images/Students/';
                $destination = base_path() . "/public/" . $public_path;
                $this->request->file('image')->move($destination, $image_name);
                $student->image = $public_path . $image_name;
            }

            // 'image' => $this->request->input('image'),
            $student->user_id = $this->request->input('user_id');
            $student->std_status_id = $this->request->input('std_status_id');
            $student->school_id = $this->request->input('school_id');
            $student->car_id = $this->request->input('car_id');
            $student->district_id = $this->request->input('district_id');
            $student->card_id = $this->request->input('card_id');
            $student->prefix = $this->request->input('prefix');
            $student->first_name = $this->request->input('first_name');
            $student->last_name = $this->request->input('last_name');
            $student->nickname = $this->request->input('nickname');
            $student->phone = $this->request->input('phone');
            // $student->lattitude = $this->request->input('lattitude');
            // $student->longtitude = $this->request->input('longtitude');


            $student->save();

            DB::commit();
            return $this->responseRequestSuccess('Success!');
        } catch (Exception $e) {
            return response()->json($this->formatResponse($e->getMessage()));
        }
    }

    public function edit_student($id)
    {
        $student = Student::where('id', $id)->get();

        // dd($student);

        foreach ($student as $s) {
            // dd($u);


            if ($s) {

                $school = School::where('id', $s->school_id)->first();

                $data['info'][0] = [

                    'no' => $s->id,
                    'image' => $s->image,
                    'prefix' => $s->prefix,
                    'first_name' => $s->first_name,
                    'last_name' => $s->last_name,
                    'nickname' => $s->nickname,
                    'phone' => $s->phone,
                    'school_id' => $s->school_id,
                    'school' => $school->name_school,
                    'car_id' => $s->car_id,




                ];
            }
        }

        return view('admin.student_edit', [

            'datas' => $data['info'],

        ]);
    }

    public function update_student()
    {
        // dd($this->request->all());

        $student = Student::where('id', $this->request->input('student_id'))->first();

        DB::beginTransaction();

        if ($this->request->file('userprofile_picture')) {
            $image_filename = $this->request->file('userprofile_picture')->getClientOriginalName();
            $image_name = $this->request->input('first_name') . '_' . $image_filename;
            $public_path = 'images/Students/';
            $destination = base_path() . "/public/" . $public_path;
            $this->request->file('userprofile_picture')->move($destination, $image_name);
            $student->image = $public_path . $image_name;
        }

        $student->school_id = $this->request->input('school_id');
        $student->car_id = $this->request->input('car_id');
        $student->prefix = $this->request->input('prefix');
        $student->first_name = $this->request->input('first_name');
        $student->last_name = $this->request->input('last_name');
        $student->nickname = $this->request->input('nickname');
        $student->phone = $this->request->input('phone');
        $student->save();

        DB::commit();

        return redirect('/admin/management/parent');
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
