<?php

namespace App\Http\Controllers;

use App\News;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\DB;

class NewssController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct(Request $request)
    {
        $this->request = $request;
    }

    public function index()
    {
        //Check login
        $auth = User::where('id', $this->request->cookie('use_id'))->where('secure_code', $this->request->cookie('secure'))->where('status', 1)->first();

        if (!$auth) {
            return redirect('/');
        }

        if ($this->request->cookie('role_number') == '3') {

            return view('admin.news_test_form');
        }else {
            \abort(404);
        }


    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
            //Check login
            $auth = User::where('id', $this->request->cookie('use_id'))->where('secure_code', $this->request->cookie('secure'))->where('status', 1)->first();

            if (!$auth) {
                return redirect('/');
            }

            if ($this->request->cookie('role_number') == '3') {

                return view('admin.news_create');
            }
            \abort(404);

    }

    //create
    public function create_store(Request $request)
    {
            //Check login
            $auth = User::where('id', $this->request->cookie('use_id'))->where('secure_code', $this->request->cookie('secure'))->where('status', 1)->first();

            if (!$auth) {
                return redirect('/');
            }

            if ($this->request->cookie('role_number') == '3') {
                // $validator = Validator::make(
                //     $request->all(),
                //     [
                //         'imgInp' => 'image|mimes:jpeg,png,jpg,gif|max:2048',
                //     ]
                // );

                // if ($validator->fails())
                // return array(
                //     'fail' => true,
                //     'errors' => $validator->errors()
                // );
                $this->validate($this->request, [
                    'imgInp' => 'image|mimes:jpeg,png,jpg,gif|max:2048',
                    'title' => 'required|max:120',
                    'role_id' => 'required',
                    'news_statuses_id' => 'required',
                    'release_date' => 'required',
                    'release_time' => 'required',
                    'content' => 'required|min:50'
                ], [
                    'imgInp.required' => '* กรุณาอัพโหลดรูปภาพ',
                    'imgInp.image' => '* ไฟล์ภาพต้องเป็น jpg, jpeg หรือ gif เท่านั้น',
                    'imgInp.max' => '* ไฟล์ภาพต้องขนาดไม่เกิน 2MB',
                    'title.required' => '* กรุณาใส่หัวข้อข่าวสาร',
                    'title.max' => '* ความยาวของข้อความต้องไม่เกิน 100 อักขระ',
                    'role_id.required' => '* กรุณาเลือกผู้ที่สามารถเห็นข่าวนี้ได้',
                    'news_statuses_id.required' => '* กรุณาเลือกสถานะ',
                    'release_date.required' => '* กรุณาเลือกวันที่เผยแพร่',
                    'release_time.required' => '* กรุณาเลือกเวลาเผยแพร่',
                    'content.required' => '* กรุณากรอกรายละเอียดข่าว',
                    'content.min' => '* ความยาวของข้อความต้องไม่ต่ำกว่า 50 อักขระ',

                ]);

                $day = date('d');
                $month = date('m');
                $year = date('Y') + 543;

                $full = $day . '/' . $month . '/' . $year;

                DB::beginTransaction();

                $news = News::create($request->all());

                $news->news_at = $full;

                if ($request->has('imgInp')) {
                    $image_filename = $request->file('imgInp')->getClientOriginalName();
                    $image_name =  $image_filename;
                    $public_path = 'images/News/';
                    $destination = base_path() . "/public/" . $public_path; //Local
                    // $destination = '/home/bearbusc/domains/bear-bus.com/public_html/'. $public_path; //Server
                    $request->file('imgInp')->move($destination, $image_name);
                    $news->image = $public_path . $image_name;
                    $news->save();
                }
                $news->save();

                DB::commit();


                return redirect('admin/management/news');
                return $this->responseRequestSuccess('success');

            }
            \abort(404);
    }


    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */

    //update
    public function store(Request $request)
    {

            //Check login
            $auth = User::where('id', $this->request->cookie('use_id'))->where('secure_code', $this->request->cookie('secure'))->where('status', 1)->first();

            if (!$auth) {
                return redirect('/');
            }

            if ($this->request->cookie('role_number') == '3') {

            $validator = Validator::make(
                $request->all(),
                [
                    // 'imgInp' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
                    // 'fname' => 'required',
                    // 'lname' => 'required',
                    // 'user_id' => '',
                    // 'role_id' => '',
                    // 'status_id' => '',
                    // 'release_date' => '',
                    // 'release_time' => '',
                    // 'content' => '',
                    // ],
                    // [
                    //     'file.image' => 'The file must be an image (jpeg, png, bmp, gif, or svg)'
                ]
            );

            if ($validator->fails())
                return array(
                    'fail' => true,
                    'errors' => $validator->errors()
                );

            $news = News::where('id', $request->get('news_id'))->first();

            $day = date('d');
            $month = date('m');
            $year = date('Y') + 543;

            $full = $day . '/' . $month . '/' . $year;

            DB::beginTransaction();

            $news->user_id = $request->get('user_id');
            $news->news_statuses_id = $request->get('status_id');
            $news->role_id = $request->get('role_id');
            $news->title = $request->get('title');
            $news->content = $request->get('content');
            $news->release_date = $request->get('release_date');
            $news->release_time = $request->get('release_time');
            $news->news_at = $full;

            if ($request->has('imgInp')) {
                $image_filename = $request->file('imgInp')->getClientOriginalName();
                $image_name =  $image_filename;
                $public_path = 'images/News/';
                $destination = '/home/bearbusc/domains/bear-bus.com/public_html/'. $public_path;
                $request->file('imgInp')->move($destination, $image_name);
                $news->image = $public_path . $image_name;
                $news->save();

            }
            $news->save();

            DB::commit();


            return redirect('admin/management/news');
            return $this->responseRequestSuccess('success');
        }

        \abort(404);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
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
