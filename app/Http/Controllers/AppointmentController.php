<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Student;
use App\Appointment;
use LogicException;
use Validator;
use Illuminate\Support\Facades\DB;

class AppointmentController extends Controller
{
    public function __construct(Request $request)
    {
        $this->request = $request;
    }

    public function createAppointment()
        {
            $user = User::all()->toArray();
            $student = Student::all()->toArray();
            $validate = Validator::make($this->request->all(), [
                'user_id' => 'required',
                'period_time' => 'required',
                'date' => 'required',
                'content' => ''
            ]);
            if ($validate->fails()) {
                throw new LogicException($validate->errors());
            }
            DB::beginTransaction();
            $res['member'] = Appointment::create([
                'user_id' => $this->request->input('user_id'),
                'period_time' => $this->request->input('period_time'),
                'date' => $this->request->input('date'),
                'content' => $this->request->input('content')
                ]);
            DB::commit();
        }
    
}
