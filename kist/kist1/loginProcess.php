<?php
include('connect.php');
session_start();

$stuNum = $_POST['stuNum'];
$stuIc = $_POST['stuIc'];
$query = "SELECT * FROM student where stuNum='$stuNum' AND stuIc='$stuIc'";
$result = mysql_query($query) or die("Query failed");

if(mysql_num_rows($result) <= 0)
	{
	header("location:view.php");
	}
	else
	{
	$rec = mysql_fetch_array($result);
	$_SESSION['stuName']=$rec['stuName'];
	header("location:view.php");
	}
?>
	