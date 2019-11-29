<?php



$response = sendMessage('ตอนนี้รถรับส่งนักเรียนประสบอุบัติเหตุ ทำให้เกิดความล่าช้า.');
$return["allresponses"] = $response;
$return = json_encode($return);

$data = json_decode($response, true);
print_r($data);
$id = $data['id'];
print_r($id);

print("\n\nJSON received:\n");
print($return);
print("\n");


function sendMessage($text)
{
    $content      = array(
        "en" =>  $text
    );
    //    $hashes_array = array();
    //    array_push($hashes_array, array(
    //        "id" => "like-button",
    //        "text" => "Like",
    //        "icon" => "http://i.imgur.com/N8SN8ZS.png",
    //        "url" => "https://bear-bus.com"
    //    ));
    //    array_push($hashes_array, array(
    //        "id" => "like-button-2",
    //        "text" => "Like2",
    //        "icon" => "http://i.imgur.com/N8SN8ZS.png",
    //        "url" => "https://bear-bus.com"
    //    ));
    $fields = array(
        'app_id' => "74f3cba2-78c1-4a35-b99f-305a6e8137b5",
        'included_segments' => array(
            'All'
        ),
        'data' => array(
            "foo" => "bar"
        ),
        'contents' => $content,
        //        'web_buttons' => $hashes_array
    );

    $fields = json_encode($fields);
    print("\nJSON sent:\n");
    print($fields);

    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, "https://onesignal.com/api/v1/notifications");
    curl_setopt($ch, CURLOPT_HTTPHEADER, array(
        'Content-Type: application/json; charset=utf-8',
        'Authorization: Basic OGUyNjUyOTAtMWMxNi00YTJmLThmNTYtMTAwM2Q0ZTViMTg0'
    ));
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);
    curl_setopt($ch, CURLOPT_HEADER, FALSE);
    curl_setopt($ch, CURLOPT_POST, TRUE);
    curl_setopt($ch, CURLOPT_POSTFIELDS, $fields);
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, FALSE);

    $response = curl_exec($ch);
    curl_close($ch);

    return $response;
}

$con->close();
