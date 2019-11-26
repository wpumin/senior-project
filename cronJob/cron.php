<?php
$con = mysqli_connect("103.86.51.224", "bearbusc_test", "123123123", "bearbusc_test");

// Check connection
if (mysqli_connect_errno()) {
    echo "Failed to connect to MySQL: " . mysqli_connect_error();
}
echo "Connected" . "<br>";

$sql = "UPDATE students SET std_status_id=1";
$day = date('d');
$month = date('m');
$year = date('Y') + 543;
$full = $day . '-' . $month . '-' . $year;

if (mysqli_query($con, $sql)) {
    echo "Record was updated successfully.";
} else {
    echo "ERROR: Could not able to execute $sql. "
        . mysqli_error($con);
}

$myfile = fopen("'$full'.txt", "w") or die("Unable to open file!");
fclose($myfile);
mysqli_close($con);

$con->close();
echo "Success!";
