<?php
include('connect.php');
session_start();

$stuNum = $_POST['stuNum'];
$pass = $_POST['pass'];
$query = "SELECT * FROM user where stuNum='$stuNum' AND pass='$pass'";
$result = mysql_query($query) or die("Query failed");
$rec = mysql_fetch_array($result);

if(mysql_num_rows($result) <= 0)
	{
	header("location:indexError.php");
	}
	if($rec['type']=="STUDENT")
	{
	$_SESSION['name']=$rec['name'];
	header("location:indexUser.php?Number=$stuNum");
	}
	else if($rec['type']=="STAFF")
	{
		$_SESSION['name']=$rec['name'];
		header("location:indexStaff.php?Number=$stuNum");
	}
?>
	