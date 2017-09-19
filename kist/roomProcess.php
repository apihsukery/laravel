<?php
include('connect.php');
session_start();

$num=$_GET['Number'];
$roomNumber=$_GET['noBilik'];
$result = mysql_query("SELECT * FROM user WHERE stuNum='$num'" );
$permohonan = mysql_query("SELECT * FROM permohonan WHERE stuNum='$num'" );
$rayuan = mysql_query("SELECT * FROM rayuan WHERE stuNum='$num'" );

if (!$_SESSION['name']) {
    $loginError = "You are not logged in.";
    header("location:indexLogin.php");
 }

$rec = mysql_fetch_array($result);
$check = mysql_fetch_array($permohonan);
$check1 = mysql_fetch_array($rayuan);

if($check['status']=="Approved")
{
	$checking = mysql_query("Update permohonan set roomNum='$roomNumber' where stuNum='$num'" );
}
else
{
	$checking = mysql_query("Update rayuan set roomNum='$roomNumber' where stuNum='$num'" );
}



if ($checking)
	{
		echo "<script language='JavaScript'>alert('Choosing Room Successful');</script>";
		
		echo "<script>window.location='resultUser.php?Number=".$num."'</script>";
	}
		
	else
	{
		echo "<script language='JavaScript'>alert('Error!!');</script>";
	
		echo "<script>window.location='resultUser.php?Number=".$num."'</script>";
	}





?>