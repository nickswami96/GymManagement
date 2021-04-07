<?php
session_start();
$message="";
if(count($_POST)>0) {
include('connection.php');
$result = mysqli_query($conn,"SELECT * FROM admin WHERE userid='" . $_POST["userid"] . "' and password = '". $_POST["password"]."'");
$row  = mysqli_fetch_array($result);
if(is_array($row)) {
$_SESSION["userid"] = $row['userid'];
$_SESSION["password"] = $row['password'];
} else {
$message = "<p align=center><b>Invalid Username or Password!</b></p>";
}
}
if(isset($_SESSION["userid"])) {
header("Location:admin.php");
}
?>



<!DOCTYPE html>
<html>
<body>
<head>
<style>
body{
        background-image: url("adlog.jpg");
 
         background-size: cover;
     }

p {
  font-size: 40px;
}
input[type=password] {
  
  border: none;
  color: gray;
  padding: 15px 40px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 19px;
  margin: 2px 4px;
   border-radius: 15px;
     color: gray;
  cursor: pointer;
}


 input[type=text] {
  
  border: none;
  color: gray;
  padding: 15px 40px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 19px;
  margin: 2px 4px;
   border-radius: 15px;
     color: gray;
  cursor: pointer;
}

  

     .button {
  
  border: none;
  color: white;
  padding: 15px 15px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 19px;
  margin: 200px 100px;
   border-radius: 15px;
     color: black;
  cursor: pointer;
}

.button:hover {
  background-color: #D0D3D4;
  color: white;
}
     
</style>
</head>

<b><p align="center">Welcome Sir</p><b>


<form name="adlog" method="post" action="" >
<div class="message"><?php if($message!="") { echo $message; } ?></div>
  
  <div style="text-align: center; padding-right: 40px" >
  <input type="text" name="userid"  placeholder="Admin ID" >
  </div>
  <br>
 
   <div style="text-align: center; padding-right: 40px" >
  <input type="password" name="password"  placeholder="Password">
   </div>
  <br><br>
  <button type="submit"  class="button" style="position:relative; top:-160px; left: 40%;">Login</button>
</form> 
</body>
</html>
