<?php

namespace App\Http\Controllers;

use App\News;
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
    public function index()
    {
        return view('admin.news_test_form');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin._form_news');
    }

    //create
    public function create_store(Request $request)
    {


        $validator = Validator::make(
            $request->all(),
            [
                'imgInp' => 'image|mimes:jpeg,png,jpg,gif|max:2048',
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
            $destination = base_path() . "/public/" . $public_path;
            $request->file('imgInp')->move($destination, $image_name);
            $news->image = $public_path . $image_name;
            $news->save();
        }
        $news->save();

        DB::commit();


        return redirect('admin/management/news');
        return $this->responseRequestSuccess('success');
        // return $image_name;
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

        $news = News::find($request->get('news_id'));

        $day = date('d');
        $month = date('m');
        $year = date('Y') + 543;

        $full = $day . '/' . $month . '/' . $year;
        // dd($request->all());

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
            $destination = base_path() . "/public/" . $public_path;
            $request->file('imgInp')->move($destination, $image_name);
            $news->image = $public_path . $image_name;
            $news->save();
            // // $news['image']->save();
            // return $this->responseRequestSuccess('Success!');
            // return $this->responseRequestSuccess($image_name);
            // return $image_name;
        }
        $news->save();

        DB::commit();


        return redirect('admin/management/news');
        return $this->responseRequestSuccess('success');
        // return $image_name;
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
