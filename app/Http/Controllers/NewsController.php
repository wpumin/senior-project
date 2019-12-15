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
            //Check login
            $auth = User::where('id', $this->request->cookie('use_id'))->where('secure_code', $this->request->cookie('secure'))->where('status', 1)->first();

            if (!$auth) {
                return redirect('/');
            }

            if ($this->request->cookie('role_number') == '3') {


                $news = News::get();
                $data['info'] = [];
                $count = 0;

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

                return view('admin.news', [
                    'datas' => $data['info'],

                ]);
            }
            \abort(404);
    }

    public function del_new($id)
    {
            //Check login
            $auth = User::where('id', $this->request->cookie('use_id'))->where('secure_code', $this->request->cookie('secure'))->where('status', 1)->first();

            if (!$auth) {
                return redirect('/');
            }

            if ($this->request->cookie('role_number') == '3') {

                $news = News::where('id', $id)->first();
                $news->delete();

                $news = News::get();
                $data['info'] = [];
                $count = 0;

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

                return view('admin.news', [
                    'datas' => $data['info'],

                ]);
            }
            \abort(404);
    }

    public function edit_new($id)
    {
            //Check login
            $auth = User::where('id', $this->request->cookie('use_id'))->where('secure_code', $this->request->cookie('secure'))->where('status', 1)->first();

            if (!$auth) {
                return redirect('/');
            }

            if ($this->request->cookie('role_number') == '3') {

                $news = News::where('id', $id)->first();
                $role = Role::where('id', $news['role_id'])->first();
                $status = News_status::where('id', $news['news_statuses_id'])->first();

                $data['info'] = [];
                $count = 0;

                // $this->validate($this->request, [
                //     'imgInp' => 'image|mimes:jpeg,png,jpg,gif|max:2048',
                //     'title' => 'required|max:120',
                //     'role_id' => 'required',
                //     'news_statuses_id' => 'required',
                //     'release_date' => 'required',
                //     'release_time' => 'required',
                //     'content' => 'required|min:50'
                // ], [
                //     'imgInp.required' => '* กรุณาอัพโหลดรูปภาพ',
                //     'imgInp.image' => '* ไฟล์ภาพต้องเป็น jpg, jpeg หรือ gif เท่านั้น',
                //     'imgInp.max' => '* ไฟล์ภาพต้องขนาดไม่เกิน 2MB',
                //     'title.required' => '* กรุณาใส่หัวข้อข่าวสาร',
                //     'title.max' => '* ความยาวของข้อความต้องไม่เกิน 100 อักขระ',
                //     'role_id.required' => '* กรุณาเลือกผู้ที่สามารถเห็นข่าวนี้ได้',
                //     'news_statuses_id.required' => '* กรุณาเลือกสถานะ', 
                //     'release_date.required' => '* กรุณาเลือกวันที่เผยแพร่',
                //     'release_time.required' => '* กรุณาเลือกเวลาเผยแพร่',
                //     'content.required' => '* กรุณากรอกรายละเอียดข่าว',
                //     'content.min' => '* ความยาวของข้อความต้องไม่ต่ำกว่า 50 อักขระ',
                // ]);

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
}
