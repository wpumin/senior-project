<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\News;
use App\News_status;
use App\Role;
use App\Relationship;
use Carbon\Carbon;
use App\User;
use Firebase\JWT\JWT;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class NewsController extends Controller
{
    public function __construct(Request $request)
    {
        $this->request = $request;
    }

    public function index()
    {

        $news = News::get();

        $data['info'] = [];
        $count = 0;

        // dd($users);

        foreach ($news as $n) {

            $user = User::where('id', $n->user_id)->first();

            $data['info'][$count++] = [
                'id' => $n->id,
                'title' => $n->title,
                'updated_at' => $n->news_at,
                'time' => $n->updated_at,
                'name' => $user->username,
                'status' => $n->news_statuses_id
            ];
        }

        // dd($data['info']);

        return view('admin.news', [
            'datas' => $data['info'],

        ]);
    }

    public function del_new($id)
    {

        $news = News::where('id', $id)->first();
        $news->delete();

        $news = News::get();

        $data['info'] = [];
        $count = 0;

        // dd($users);

        foreach ($news as $n) {

            $user = User::where('id', $n->user_id)->first();

            $data['info'][$count++] = [
                'id' => $n->id,
                'title' => $n->title,
                'created_at' => $n->news_at,
                'name' => $user->username,
                'status' => $n->news_statuses_id
            ];
        }

        // dd($data['info']);

        return view('admin.news', [
            'datas' => $data['info'],

        ]);
    }

    public function edit_new($id)
    {

        $news = News::where('id', $id)->first();

        $role = Role::where('id', $news['role_id'])->first();

        $status = News_status::where('id', $news['news_statuses_id'])->first();

        $data['info'] = [];
        $count = 0;

        // dd($news['user_id']);
        return view('admin.news_edit', [
            'id' => $news['id'],
            'title' => $news['title'],
            'image' => $news['image'],
            'id_user' => $news['user_id'],
            'role_id' => $news['role_id'],
            'role_name' => $role->name,
            'status_id' => $news['news_statuses_id'],
            'status_name' => $status->name,
            'release_date' => $news['release_date'],
            'release_time' => $news['release_time'],
            'content' => $news['content']
        ]);
    }

    function action(Request $request)
    {
        // dd($request->all());
        $validation = Validator::make($request->all(), [
            'select_file' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
            // 'newsid' => 'required',
            // 'title' => 'required',
        ]);
        if ($validation->passes()) {
            $image = $request->file('select_file');
            $new_name = rand() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('images'), $new_name);

            return response()->json([
                'news_id' => $request->input('newsid'),
                'message'   => 'Image Upload Successfully',
                'uploaded_image' => '<img src="/images/' . $new_name . '" class="img-thumbnail" width="300" />',
                'class_name'  => 'alert-success'
            ]);
        } else {
            return response()->json([
                'news_id' => $request->input('news_id'),
                'message'   => $validation->errors()->all(),
                'uploaded_image' => '',
                'class_name'  => 'alert-danger'
            ]);
        }
    }

    public function update_new()
    {

        $validator = Validator::make(
            $this->request->all(),
            [
                'file' => '',
                'id' => '',
                'title' => '',
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

        $id = $this->request->input('id');
        $news = News::find($id);

        // var_dump($news['id']);
        // $news->delete();

        $day = date('d');
        $month = date('m');
        $year = date('Y') + 543;

        $full = $day . '/' . $month . '/' . $year;

        // $news_new = new News();

        // DB::beginTransaction();

        // $news_new->user_id = $this->request->input('user_id');
        // $news_new->news_status_id = $this->request->input('status_id');
        // $news_new->role_id = $this->request->input('role_id');
        $news->title = $this->request->input('title');
        // $news_new->content = $this->request->input('content');
        // $news_new->release_date = $this->request->input('release_date');
        // $news_new->release_time = $this->request->input('release_time');
        // $news_new->news_at = $full;

        if ($this->request->file('file')) {
            $image_filename = $this->request->file('file')->getClientOriginalName();
            $image_name =  $image_filename;
            $public_path = 'images/News/';
            $destination = base_path() . "/public/" . $public_path;
            $this->request->file('file')->move($destination, $image_name);
            $news->image = $public_path . $image_name;
            // $news_new->save();
            // // $news['image']->save();
            // return $this->responseRequestSuccess('Success!');
        }
        // $news->save();

        // $res['App_log'] = News::create([
        //     'image' => 'test',
        //     'user_id' => '1',
        //     'news_statuses_id' => '1',
        //     'role_id' => '1',
        //     'title' => '1',
        //     'content' => '1',
        //     'release_date' => '1',
        //     'release_time' => '1',
        //     'news_at' => '1'
        // ]);
        // return $full;
        // DB::commit();

        // $extension = $this->request->file('file')->getClientOriginalExtension();
        // $dir = 'uploads/';
        // $filename = uniqid() . '_' . time() . '.' . $extension;
        // $this->request->file('file')->move($dir, $filename);
        // $news->update($this->request->all());
        // $id = $this->request->input('id');
        // $news->update($this->request->all());
        return var_dump($news);
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
