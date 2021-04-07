<?php
session_start();
unset($_SESSION["userid"]);
unset($_SESSION["password"]);
header("Location:login.php");
?>