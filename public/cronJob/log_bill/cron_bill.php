
<?php
$con = mysqli_connect("103.86.51.224", "bearbusc_test", "123123123", "bearbusc_test");

// Check connection
if (mysqli_connect_errno()) {
    echo "Failed to connect to MySQL: " . mysqli_connect_error();
}
echo "Connected" . "<br>";

$sql = "SELECT * FROM students";
$result = $con->query($sql);

$day = date('d');
$month = date('m');
$year = date('Y') + 543;
$full = $day . '-' . $month . '-' . $year;

while ($row = mysqli_fetch_array($result)) {

    $sql_num_bill = "SELECT tran_key FROM payment_logs ORDER BY tran_key DESC LIMIT 1";
    $result_sql_num_bill = $con->query($sql_num_bill);
    $key = mysqli_fetch_array($result_sql_num_bill);
    $tran_key = (!isset($key['tran_key']) ? "0001" : sprintf('%04d', $key['tran_key'] + 1));

    $user_id = $row['user_id'];
    $car_id = $row['car_id'];
    $price = $row['price'];
    $image_qr = 'images/qrcode_pay/' . $price . '.png';

    $sql_bill = "INSERT INTO payment_logs (tran_key, month, year, user_id, status_id, car_id, price, qr_code, created_at)
VALUES ('$tran_key', '$month', '$year', '$user_id', '1', '$car_id', '$price', '$image_qr', '$full')";
    $con->query($sql_bill);
}

$myfile = fopen("'$full'.txt", "w") or die("Unable to open file!");
fclose($myfile);

$name_month = ["ว่าง", "มกราคม", "กุมภาพันธ์", "มีนาคม", "เมษายน", "พฤษภาคม", "มิถุนายน", "กรกฎาคม", "สิงหาคม", "กันยายน", "ตุลาคม", "พฤศจิกายน", "ธันวาคม"];
// dd($name_month[$month]);

$word = 'บิล ของเดือน "' . $name_month[$month] . '" เข้าแล้ว.';
// var_dump($word);
// die();

$response = sendMessage($word);
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


mysqli_close($con);

$con->close();
echo "Success!";
