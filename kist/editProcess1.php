<?php
include('connect.php');
session_start();

$id = $_POST['Number'];
$pass = $_POST['pass'];
$email = $_POST['email'];


$result = mysql_query("UPDATE user SET pass='$pass',email='$email' WHERE stuNum='$id'" );

if($result)
{
	echo "<script language='JavaScript'>alert('Edit Successful');</script>";
	echo "<script>window.location='indexUser.php?Number=".$id."'</script>";
}

?>