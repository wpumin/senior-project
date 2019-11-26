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


        return view('admin.news_edit', [
            // 'datas' => $data['info'],
            'title' => $news['title'],
            'image' => $news['image'],
            'role_id' => $news['role_id'],
            'role_name' => $role->name,
            'status_id' => $news['news_statuses_id'],
            'status_name' => $status->name,
            'release_date' => $news['release_date'],
            'release_time' => $news['release_time'],
            'content' => $news['content']


        ]);
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
