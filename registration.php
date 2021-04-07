<!DOCTYPE HTML>
<html>
<body>

<?php
session_start();
include('connection.php');
$firstname = $_POST['fname'];
$lastname = $_POST['lname'];
$Address = $_POST['Address'];
$pincode = $_POST['pincode'];
$Mobileno = $_POST['Mobileno'];
$jdate = $_POST['jdate'];
$emailid = $_POST['emailid'];
$bdate = $_POST['bdate'];
$GENDER = $_POST['GENDER'];
$userid = $_POST['userid'];
$password = $_POST['password'];
$pac=$_POST['pac'];
 

$rs=mysqli_query($conn,"select * from membership where userid='$userid'");
if (mysqli_num_rows($rs)>0)
{
	header("location:exist.php");
	echo "<br><br><br><div class=head1>Login Id Already Exists</div>";
	exit;
}

$stmt = $conn->prepare("INSERT INTO membership(fname,lname,address,pincode,mno,jdate,email,bdate,GENDER,userid,password,pac) VALUES(?, ?, ?, ?,?,?,?,?,?,?,?,?)"); 
 $stmt->bind_param("sssiissssssi", $firstname,$lastname,$Address,$pincode,$Mobileno,$jdate,$emailid,$bdate,$GENDER,$userid,$password,$pac); 
 $stmt->execute();
 $result = $stmt->affected_rows;
 $stmt -> close();
 $conn -> close(); 
 
 if($result > 0)
 {
 header("location:RegSuccess.php"); 
 }
 else
 {
 echo "Oops. Something went wrong. Please try again"; 
  ?>
 <a href="validation.php">Try Login</a>
 <?php 
 }


?>
</body> 
</html>