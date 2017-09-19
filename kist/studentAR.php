<?php
include('connect.php');
session_start();

$idstaff = $_GET['id'];
$stuNum = $_GET['stuNum'];
$code = $_GET['code'];
$AR = $_GET['ar'];

if($AR==1)
{
	$result = mysql_query("Update permohonan set status='Approved' where stuNum='$stuNum'" );
	$result = mysql_query("Update permohonan set roomNum='Tiada' where stuNum='$stuNum'" );

	if ($result)
	{
		echo "<script language='JavaScript'>alert('Approved Successful');</script>";
		if($code==1)
		{
			echo "<script>window.location='IbnuSina.php?Number=".$idstaff."'</script>";
		}
		if($code==2)
		{
			echo "<script>window.location='Albiruni.php?Number=".$idstaff."'</script>";
		}
	}
	else
	{
		echo "<script language='JavaScript'>alert('Error!!');</script>";
		if($code==1)
		{
			echo "<script>window.location='IbnuSina.php?Number=".$idstaff."'</script>";
		}
		if($code==2)
		{
			echo "<script>window.location='Albiruni.php?Number=".$idstaff."'</script>";
		}
	}
}
if($AR==2)
{
	$result = mysql_query("Update permohonan set status='Rejected' where stuNum='$stuNum'" );

	if ($result)
	{
		echo "<script language='JavaScript'>alert('Rejected Successful');</script>";
		if($code==1)
		{
			echo "<script>window.location='IbnuSina.php?Number=".$idstaff."'</script>";
		}
		if($code==2)
		{
			echo "<script>window.location='Albiruni.php?Number=".$idstaff."'</script>";
		}
	}
	else
	{
		echo "<script language='JavaScript'>alert('Error!!');</script>";
		if($code==1)
		{
			echo "<script>window.location='IbnuSina.php?Number=".$idstaff."'</script>";
		}
		if($code==2)
		{
			echo "<script>window.location='Albiruni.php?Number=".$idstaff."'</script>";
		}
	}
}
?>