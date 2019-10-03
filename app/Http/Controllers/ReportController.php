<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Report;
use App\Type_report;
use LogicException;
use Validator;
use Illuminate\Support\Facades\DB;

class ReportController extends Controller
{
    public function __construct(Request $request)
        {
            $this->request = $request;
        }

    public function createReport()
        {   
            $user = User::all()->toArray();
            $validate = Validator::make($this->request->all(), [
                'user_id' => 'required',
                'type_id' => 'required',
                'title' => 'required',
                'content' => 'required'
            ]);
            if ($validate->fails()) {
                throw new LogicException($validate->errors());
            }
            DB::beginTransaction();
            $res['member'] = Report::create([
                'user_id' => $this->request->input('user_id'),
                'type_id' => $this->request->input('type_id'),
                'title' => $this->request->input('title'),
                'content' => $this->request->input('content')
                ]);
            DB::commit();
        }
}
