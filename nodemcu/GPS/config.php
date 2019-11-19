<?php



$now = $_GET['tambon'];

$location[1] = 'เทศบาลตำบลบ้านไร่';
$location[2] = 'ตำบลหูช้าง';
$location[3] = 'ตำบลเมืองการุ้ง';
$location[4] = 'ตำบลบ้านคลองโป่ง';
$location[5] = 'ตำบลเขาตะพาบ';
$location[6] = 'โรงเรียนหนองฉางวิทยา';
$location[7] = 'โรงเรียนธรรมานุวัตรวิทยา';
$location[8] = 'โรงเรียนวัดหนองขุนชาติ';


// $text = 'ถึง ' . $location[$now] . ' แล้ว';

// var_dump($text);
// die();

$con = mysqli_connect("103.86.51.224", "bearbusc_test", "123123123", "bearbusc_test");

// Check connection
if (mysqli_connect_errno()) {
    echo "Failed to connect to MySQL: " . mysqli_connect_error();
}
echo "Connected";

$sql = "SELECT * FROM districts WHERE id = '$now'";
$result = $con->query($sql);

while ($row = mysqli_fetch_array($result)) {

    if ($row['status'] == 1) {

        $sql_update = "UPDATE provinces SET status = 2 WHERE id = '$now'";
        mysqli_query($con, $sql_update);

        $text = 'ถึง ' . $row['name'] . ' แล้ว';


        $response = sendMessage($text);
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


/** notification */




function sendMessage($text)
{
    $content      = array(
        "en" => $text
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
