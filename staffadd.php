<!DOCTYPE HTML>
<html>
<body>

<?php
session_start();
include('connection.php');
$firstname = $_POST['fname'];
$lastname = $_POST['lname'];
$Address = $_POST['Address'];
$contact = $_POST['contact'];
$qualification = $_POST['qualification'];
$sal = $_POST['sal'];


$stmt = $conn->prepare("INSERT INTO staff(fname,lname,address,contact,qualification,sal) VALUES(?, ?, ?, ?,?,?)"); 
 $stmt->bind_param("sssisi", $firstname,$lastname,$Address,$contact,$qualification,$sal); 
 $stmt->execute();
 $result = $stmt->affected_rows;
 $stmt -> close();
 $conn -> close(); 
 
 if($result > 0)
 {
 header("location:insertsuc.php"); 
 }
 else
 {
 echo "Oops. Something went wrong. Please try again"; 
  ?>
 <a href="addstaff.php">Try Insert Again</a>
 <?php 
 }


?>
</body> 
</html>