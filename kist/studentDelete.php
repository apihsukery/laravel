<?php
include('connect.php');
session_start();

$idstaff = $_GET['id'];
$stuNum = $_GET['stuNum'];

$delete = mysql_query("DELETE FROM user WHERE stuNum='$stuNum'" );
$delete = mysql_query("DELETE FROM permohonan WHERE stuNum='$stuNum'" );
$delete = mysql_query("DELETE FROM keluarga WHERE stuNum='$stuNum'" );
$delete = mysql_query("DELETE FROM tangunggan WHERE stuNum='$stuNum'" );
$delete = mysql_query("DELETE FROM emergency WHERE stuNum='$stuNum'" );
$delete = mysql_query("DELETE FROM rayuan WHERE stuNum='$stuNum'" );

echo "<script language='JavaScript'>alert('Delete Successful');</script>";
echo "<script>window.location='indexStaff.php?Number=".$idstaff."'</script>";
		

?>