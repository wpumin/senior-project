
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


mysqli_close($con);

$con->close();
echo "Success!";
