<?php
session_start();

?>
<html>
<head>
<title>User Login</title>
</head>
<body>
<p align=center><b> Welcome <?php echo $_SESSION["userid"]; ?>.</p></b>
<?php
include('connection.php');
if(isset($_SESSION["userid"])) 
{

$sql = "SELECT UID,fname,lname,jdate,mno,pincode,pac FROM membership where userid='{$_SESSION["userid"]}'";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
    
    while($row = mysqli_fetch_assoc($result)) {
        
 echo "<p align=center>[id: " . $row["UID"]. " ]&nbsp&nbsp&nbsp[ Name: " . $row["fname"]. " " . $row["lname"]. "]&nbsp&nbsp&nbsp[JOINDATE: " . $row["jdate"]. " ]&nbsp&nbsp&nbsp[MOBILE NO: " . $row["mno"]. "]&nbsp&nbsp&nbsp[PINCODE: " . $row["pincode"]. "]&nbsp&nbsp&nbsp[AMOUNT: " . $row["pac"]. "] <br> </p>";   }


} else {
    echo "0 results";
}



?>

<?php
}
else echo "<h1>Please login first .</h1>";
?>
</body>
</html>

<form action="logout.php">
  <div align="center">
  <input type="submit" value="logout"> 
  </div>
</form>