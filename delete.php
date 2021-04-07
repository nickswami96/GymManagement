<!DOCTYPE html>
<html lang="en">
<head>

<html>
<head>
<title>Delete an Employee</title>
</head>
<body>

<h3>Enter the Employee Number below to delete a record</h3>

<?php
if(isset($_POST['UID']))
{
$dbhost = 'localhost';
$dbuser = 'root';
$dbpass = "";

$conn = mysqli_connect($dbhost, $dbuser, $dbpass);
if(! $conn )
{
  die('Could not connect: ' . mysqli_error($conn));
}

$UID = $_POST['UID'];

$sql =   "DELETE FROM membership WHERE UID = $UID;";

mysqli_select_db($conn,'gym');
$retval = mysqli_query($conn,$sql);
if(! $retval )
{
  die('Could not delete data: ' . mysqli_error($conn));
}
     
echo "Deleted data successfully\n";
    
mysqli_close($conn);
}
else
{
?>
<form method="post" action="<?php $_PHP_SELF ?>">
<table width="400" border="0" cellspacing="1" cellpadding="2">
<tr>
<td width="100">UID</td>
<td><input name="UID" type="UID" id="UID"></td>
</tr>
<tr>
<td width="100"> </td>
<td> </td>
</tr>
<tr>
<td width="100"> </td>
<td>
<button type="submit">Delete</button>
</td>
</tr>
</table>
</form>
<?php
}
?>
</html>