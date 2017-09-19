<?php

include('connect.php');
session_start();
//view selected id
$id = $_POST['idStaff'];
$stuNum = $_POST['id'];
$pass = $_POST['pass'];
$name = $_POST['name'];
$type = $_POST['type'];
$ic = $_POST['ic'];
$email = $_POST['email'];

$add = mysql_query("INSERT INTO user(stuNum,pass,name,ic,email,type) VALUES
('$stuNum','$pass','$name','$ic','$email','$type')" );

if($add)
{
	if($type=="STUDENT")
	{
		echo "<script language='JavaScript'>alert('New Student Has Been Added');</script>";
		echo "<script>window.location='indexStaff.php?Number=".$id."'</script>";
	}
	else
	{
		echo "<script language='JavaScript'>alert('New Staff Has Been Added');</script>";
		echo "<script>window.location='indexStaff.php?Number=".$id."'</script>";
	}
}
else{
	echo "<script language='JavaScript'>alert('Error occur. Please try again.');</script>";
	echo "<script>window.location='indexStaff.php?Number=".$id."'</script>";
}

?>