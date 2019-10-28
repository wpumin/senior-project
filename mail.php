<?php

$con = mysqli_connect("103.86.51.224", "bearbusc_test", "123123123", "bearbusc_test");

// Check connection
if (mysqli_connect_errno()) {
    echo "Failed to connect to MySQL: " . mysqli_connect_error();
}
echo "Connected" . "<br>";
$now = $POST['email'];
$strSQL = "SELECT * FROM otp WHERE email = '$now'";

$objQuery = mysql_query($strSQL);

$objResult = mysql_fetch_array($objQuery);

if (!$objResult) {

    echo "Not Found Username or Email!";
} else {

    echo "Your password send successful.<br>Send to mail : " . $objResult["Email"];



    $strTo = $objResult["email"];

    $strSubject = "Your Account information username and password.";

    $strHeader = "Content-type: text/html; charset=windows-874\n"; // or UTF-8 //

    $strHeader .= "From: webmaster@thaicreate.com\nReply-To: webmaster@thaicreate.com";

    $strMessage = "";

    $strMessage .= "Welcome : " . $objResult["Name"] . "<br>";

    $strMessage .= "Username : " . $objResult["Username"] . "<br>";

    $strMessage .= "Password : " . $objResult["Password"] . "<br>";

    $strMessage .= "=================================<br>";

    $strMessage .= "ThaiCreate.Com<br>";

    $flgSend = mail($strTo, $strSubject, $strMessage, $strHeader);
}

mysql_close();
