<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "gym";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$result=mysqli_query($conn,"SELECT count(*) as UID from membership");
$data=mysqli_fetch_assoc($result);
echo "Total User Number: " . $data["UID"];

$resulti=mysqli_query($conn,"SELECT count(*) as SID from staff");
$datai=mysqli_fetch_assoc($resulti);
echo nl2br("\r\nTotal Employee Number: " . $datai["SID"]);


mysqli_close($conn);
?>