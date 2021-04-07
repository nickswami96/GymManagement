<?php
session_start();
$message="";
if(count($_POST)>0) {
include('connection.php');
$result = mysqli_query($conn,"SELECT * FROM membership WHERE userid='" . $_POST["userid"] . "' and password = '". $_POST["password"]."'");
$row  = mysqli_fetch_array($result);
if(is_array($row)) {
$_SESSION["userid"] = $row['userid'];
$_SESSION["password"] = $row['password'];
} else {
$message = "<p align=center><b>Invalid Username or Password!</b></p>";
}
}
if(isset($_SESSION["userid"])) {
header("Location:session.php");
}
?>



<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body {font-family: Arial, Helvetica, sans-serif;}

div.col-25 {
  font-size: 20px;
}

body {
 background-image: url("abc.jpg");
 background-size: cover;
}
body {
  color: white;
}

img {
  border-radius: 75%;
}
input[type=text]{
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  box-sizing: border-box;
}
input[type=password]{
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  box-sizing: border-box;
}

button {
  background-color: #4CAF50;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  width: 100%;
}



.imgcontainer {
  text-align: center;
  margin: 5px 0 5px 0;
}


/* Change styles for span and cancel button on extra small screens */
@media screen and (max-width: 300px) {
  span.psw {
     display: block;
     float: none;
  }
  .cancelbtn {
     width: 100%;
  }
}
</style>
</head>
<body>



<form name="login" method="post" action="" >
<div class="message"><?php if($message!="") { echo $message; } ?></div>
 


 <div class="imgcontainer">
    <a href="/my%20project/index.html"><img src="xyz.jpg" alt="Avatar"style="width:300px";></a>

  </div>

  <div class="container">
    <label for="userid"><b>Username</b></label>
    <input type="text" placeholder="Enter Username" name="userid" required>

    <label for="password"><b>Password</b></label>
    <input type="password" placeholder="Enter Password" name="password" required>
        
    <button type="submit">Login</button>
    
  </div>

</form>

</body>
</html>
