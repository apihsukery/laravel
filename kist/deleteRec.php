<?php
include('connect.php');
session_start();

$idstaff = $_GET['id'];

//$delete = mysql_query("DELETE FROM user WHERE stuNum='$stuNum'" );
$delete = mysql_query("DELETE FROM permohonan" );
$delete = mysql_query("DELETE FROM keluarga" );
$delete = mysql_query("DELETE FROM tangunggan" );
$delete = mysql_query("DELETE FROM emergency" );
$delete = mysql_query("DELETE FROM rayuan" );

echo "<script language='JavaScript'>alert('Remove all record Successful');</script>";
echo "<script>window.location='indexStaff.php?Number=".$idstaff."'</script>";
		

?>