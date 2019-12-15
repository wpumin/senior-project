<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


class ContactController extends Controller_Make
{
    public function notify(Request $request)
    {
        $this->validate($request, [
            'exampleInputName' => ['required', 'regex:/^([A-Za-zก-ฮ])/'],
            'exampleInputEmail' => ['required', 'regex:/[0][0-9]{9}/'],
            'message' => 'required|min:50',
        ], [
            'exampleInputName.required' => '* กรุณาใส่ชื่อจริงและนามสกุล',
            'exampleInputName.regex' => '* กรุณากรอก a-z หรือ ก-ฮ เท่านั้น',
            'exampleInputEmail.required' => '* กรุณากรอกเบอร์โทรศัพท์',
            'exampleInputEmail.regex' => '* เบอร์โทรศัพท์ไม่ควรเกิน 10 หลัก',
            'message.required' => '* กรุณากรอกข้อความ',
            'message.min' => '* ความยาวของข้อความต้องไม่ต่ำกว่า 50 อักขระ',

        ]);

        $d = date('d');
        $m = date('m');
        $y = date('Y') + 543;

        $full = $d . '/' . $m . '/' . $y;

        $line_mes = "\n" . 'ชื่อผู้ติดต่อ: ' . $request->input('exampleInputName') . "\n" . 'เบอร์โทร: ' . $request->input('exampleInputEmail') . "\n" . 'ข้อความ: ' . $request->input('message') . "\n" . 'เมื่อ: ' . $full . ' ' . date('H:i') . ' น.';

        $line_api = 'https://notify-api.line.me/api/notify';
        $access_token = 'iH6S35EAqauC3c854d9Aegjw0lhSaH73lqpic5Q84Oa';

        $str = $line_mes;    //ข้อความที่ต้องการส่ง สูงสุด 1000 ตัวอักษร
        $image_thumbnail_url = '';  // ขนาดสูงสุด 240×240px JPEG
        $image_fullsize_url = '';  // ขนาดสูงสุด 1024×1024px JPEG
        $sticker_package_id = 2;  // Package ID ของสติกเกอร์
        $sticker_id = 34;    // ID ของสติกเกอร์

        $message_data = array(
            'message' => $str,
            'imageThumbnail' => $image_thumbnail_url,
            'imageFullsize' => $image_fullsize_url,
            'stickerPackageId' => $sticker_package_id,
            'stickerId' => $sticker_id
        );

        $result = $this->send_notify_message($line_api, $access_token, $message_data);
        session()->flash('success', 'Create Article Complete');
        return redirect('/public');
        // return response()->json(['status' => true]);
        // return response()->json(['Hello, Motherfucker']);
        // echo 'Hello';
    }

    private function send_notify_message($line_api, $access_token, $message_data)
    {
        $headers = array('Method: POST', 'Content-type: multipart/form-data', 'Authorization: Bearer ' . $access_token);

        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $line_api);
        curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
        curl_setopt($ch, CURLOPT_POSTFIELDS, $message_data);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        $result = curl_exec($ch);
        // Check Error
        if (curl_error($ch)) {
            $return_array = array('status' => '000: send fail', 'message' => curl_error($ch));
        } else {
            $return_array = json_decode($result, true);
        }
        curl_close($ch);
        return $return_array;
    }
}
