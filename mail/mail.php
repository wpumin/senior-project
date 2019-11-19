<?php

$con = mysqli_connect("103.86.51.224", "bearbusc_test", "123123123", "bearbusc_test");

// Check connection
if (mysqli_connect_errno()) {
    echo "Failed to connect to MySQL: " . mysqli_connect_error();
}
echo "Connected" . "<br>";
$now = $_GET['email'];
$ref = $_GET['ref'];
$otp = $_GET['otp'];

$strSQL = "SELECT * FROM otp WHERE email = '$now'";
$result = $con->query($strSQL);

while ($row = mysqli_fetch_array($result)) {

    $strTo = $row['email'];

    $strSubject = "ลืมรหัสผ่าน === Forgot";

    $strHeader = "From: Bear-Bus";

    $strMessage = "ref :" . $ref . "\notp : " . $otp;

    $flgSend = @mail($strTo, $strSubject, $strMessage, $strHeader);  // @ = No Show Error //

    if ($flgSend) {

        echo "Email Sending.";
    } else {

        echo "Email Can Not Send.";
    }

    mysql_close($con);
}
