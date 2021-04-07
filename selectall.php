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

$sql = "SELECT UID, fname, lname, mno FROM membership";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
    // output data of each row
    while($row = mysqli_fetch_assoc($result)) {
        echo "id: " . $row["UID"]. " - Name: " . $row["fname"]. " " . $row["lname"]. " - Mobile NO: " . $row["mno"]. "<br>";
    }
} else {
    echo "0 results";
}

mysqli_close($conn);
?>