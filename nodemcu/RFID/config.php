<?php
$con = mysqli_connect("103.86.51.224", "bearbusc_test", "123123123", "bearbusc_test");

// Check connection
if (mysqli_connect_errno()) {
    echo "Failed to connect to MySQL: " . mysqli_connect_error();
}
echo "Connected";

$hourdiff = 0; // Replace the 0 with your timezone difference (;
$site = date("Y/m/d h:i:sa", time() + ($hourdiff * 3600)); // เวลา ณ ตอนนี้ เก็บลง database

$day_up = "06:00:00"; //เวลาขึ้นรถ เช้า
$day_down = "09:00:00"; //เวลาลงรถ เช้า

$night_up = "16:00:00"; //เวลาขึ้นรถ เย็น
$night_down = "19:00:00"; //เวลาขึ้นรถ เย็น

echo "<br>" . time() . "<br>";
echo strtotime($day_up) . "<br>";

$uuid = $_GET['uuid']; //รับค่า get จาก url
echo "-----------------------------<br>";

$sql = "SELECT * FROM students WHERE card_id = '$uuid'";

$result = $con->query($sql);
$nickname = '';

while ($row = mysqli_fetch_array($result)) {

    $nickname = $row['nickname'];

    if ($row['std_status_id'] == 1) {

        $sql_update = "UPDATE students SET std_status_id = 2 WHERE card_id = '$uuid'";
        mysqli_query($con, $sql_update);

        //ช่วงเช้าขามาโรงเรียน
        if (time() >= strtotime($GLOBALS['day_up']) && time() <= strtotime($GLOBALS['day_down'])) {


            $response = sendMessage(' ได้ขึ้นรถแล้ว (เช้า).');
            $return["allresponses"] = $response;
            $return = json_encode($return);

            $data = json_decode($response, true);
            print_r($data);
            $id = $data['id'];
            print_r($id);

            print("\n\nJSON received:\n");
            print($return);
            print("\n");
        } else {


            $response = sendMessage(' ได้ขึ้นรถแล้ว (เย็น).');
            $return["allresponses"] = $response;
            $return = json_encode($return);

            $data = json_decode($response, true);
            print_r($data);
            $id = $data['id'];
            print_r($id);

            print("\n\nJSON received:\n");
            print($return);
            print("\n");
        }
    } else if ($row['std_status_id'] == 2) {

        $sql_update = "UPDATE students SET std_status_id = 3 WHERE card_id = '$uuid'";
        mysqli_query($con, $sql_update);

        //ช่วงเช้าขามาโรงเรียน
        if (time() >= strtotime($GLOBALS['day_up']) && time() <= strtotime($GLOBALS['day_down'])) {


            $response = sendMessage(' ได้ลงรถแล้ว (เช้า).');
            $return["allresponses"] = $response;
            $return = json_encode($return);

            $data = json_decode($response, true);
            print_r($data);
            $id = $data['id'];
            print_r($id);

            print("\n\nJSON received:\n");
            print($return);
            print("\n");
        } else {


            $response = sendMessage(' ได้ลงรถแล้ว (เย็น).');
            $return["allresponses"] = $response;
            $return = json_encode($return);

            $data = json_decode($response, true);
            print_r($data);
            $id = $data['id'];
            print_r($id);

            print("\n\nJSON received:\n");
            print($return);
            print("\n");
        }
    }
}

function sendMessage($text)
{
    $content      = array(
        "en" => "น้อง " . $GLOBALS['nickname'] . $text
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
