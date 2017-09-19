<?php
include('connect.php');
session_start();

//view selected id
$num=$_GET['Number'];
$result = mysql_query("SELECT * FROM user WHERE stuNum='$num'" );
$Ibnusina = mysql_query("SELECT * FROM permohonan WHERE status='Approved' and stuGender='MALE'" );
$Albiruni = mysql_query("SELECT * FROM permohonan WHERE status='Approved' and stuGender='FEMALE'" );
$Ibnusina1 = mysql_query("SELECT * FROM rayuan WHERE status='Approved' and stuGender='MALE'" );
$Albiruni1 = mysql_query("SELECT * FROM rayuan WHERE status='Approved' and stuGender='FEMALE'" );

$listIbnusina = mysql_query("SELECT * FROM permohonan WHERE status='Approved' and stuGender='MALE'" );
$listAlbiruni = mysql_query("SELECT * FROM permohonan WHERE status='Approved' and stuGender='FEMALE'" );
$listIbnusina1 = mysql_query("SELECT * FROM rayuan WHERE status='Approved' and stuGender='MALE'" );
$listAlbiruni1 = mysql_query("SELECT * FROM rayuan WHERE status='Approved' and stuGender='FEMALE'" );

$countApprovedM=0;
$countApprovedF=0;
$countApprovedM1=0;
$countApprovedF1=0;
while(mysql_fetch_array($listIbnusina,MYSQL_BOTH))
{
	$countApprovedM = $countApprovedM + 1;
}
while(mysql_fetch_array($listIbnusina1,MYSQL_BOTH))
{
	$countApprovedM1 = $countApprovedM1 + 1;
}
$totalApprovedM = $countApprovedM+$countApprovedM1;
$IbnusinaFree = 2700-$countApprovedM-$countApprovedM1;
while(mysql_fetch_array($listAlbiruni,MYSQL_BOTH))
{
	$countApprovedF = $countApprovedF + 1;
}
while(mysql_fetch_array($listAlbiruni1,MYSQL_BOTH))
{
	$countApprovedF1 = $countApprovedF1 + 1;
}
$totalApprovedF = $countApprovedF+$countApprovedF1;
$AlbiruniFree = 1800-$countApprovedF-$countApprovedF1;
// make sure user is logged in
if (!$_SESSION['name']) {
    $loginError = "You are not logged in.";
    header("location:indexLogin.php");
 }

$rec = mysql_fetch_array($result);

?>


<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<meta http-equiv="Content-type" content="text/html; charset=utf-8" />
	<title>Staff Dashboard</title>
	<link rel="stylesheet" href="staff/style1.css" type="text/css" media="all" />
	<script src="sorttable.js"></script>
	<script type="text/javascript">
function caps(id){
    document.getElementById(id).value = document.getElementById(id).value.toUpperCase();
}
</script>

	<script>

$(document).ready(function()
{
	$("#nama").keyup(function()
	{
		$("table" ).load("indexStaff.php tr",{nama:$(this).val()});

	});
});
</script>

</head>
<body>

<!-- Header -->
<div id="header">
	<div class="shell">
		<!-- Logo + Top Nav -->
		<div id="top">
			<h1>Staff Dashboard</h1>
			<div id="top-navigation">
				Welcome <strong><?php echo $rec['name'];?></a>
				<span>|</span>
				<a href="editProfile.php?Number=<?php echo $rec['stuNum'];?>">Profile Settings</a>
				<span>|</span>
				<a href="logout.php">Log out</a>
			</div>
		</div>
		<!-- End Logo + Top Nav -->
		
		<!-- Main Nav -->
		<div id="navigation">
			<ul>
			    <li><a href="indexStaff.php?Number=<?php echo $rec['stuNum'];?>"><span>List User</span></a></li>
			    <li><a href="IbnuSina.php?Number=<?php echo $rec['stuNum'];?>"><span>Kolej IbnuSina</span></a></li>
			    <li><a href="Albiruni.php?Number=<?php echo $rec['stuNum'];?>"><span>Kolej Albiruni</span></a></li>
			    <li><a href="#" class="active"><span>Approved</span></a></li>
			    <li><a href="Rejected list.php?Number=<?php echo $rec['stuNum'];?>"><span>Rejected</span></a></li>
			</ul>
		</div>
		<!-- End Main Nav -->
	</div>
</div>
<!-- End Header -->

<!-- Container -->
<div id="container">
	<div class="shell">
		
		
		<br /><br /><br /><br />
		<!-- Main -->
		<div id="main">
			<div class="cl">&nbsp;</div>
			
			<!-- Content -->
			<div id="content">
				
				<!-- Box -->
				<div class="box">
					<!-- Box Head -->
					<div class="box-head">
						<?php echo "<h2 class=left>IbnuSina Approved (" . $totalApprovedM . ")</h2>"; ?>
						<div class="right">
						<?php echo "<label>Free Space: " . $IbnusinaFree . " more</label>"; ?>
						</div>
					</div>
					<!-- End Box Head -->	

					<!-- Table -->
					<div class="table">
						<table width="100%" border="0" cellspacing="0" cellpadding="0" class="sortable">
							<tr>
								<th>Student Number</th>
								<th>IC Number</th>
								<th>Name</th>
								<th width="110" class="ac">Action</th>
							</tr>
							<?php
								while($row=mysql_fetch_array($Ibnusina,MYSQL_BOTH)){ ?>
								<tr>
									<td><?php echo $row['stuNum']; ?></td>
									<td><?php echo $row['stuIC']; ?></td>
									<td><?php echo $row['stuName']; ?></a></td>
									<td align="center"><a href="studentInfo.php?stuNum=<?php print ($row['stuNum']);?>&id=<?php echo $rec['stuNum'];?>" target="_blank"/><img src="images/info_button.png" height="30" width="30" alt="Info" /></td>
								</tr>
							<?php } ?>
							<?php
								while($row=mysql_fetch_array($Ibnusina1,MYSQL_BOTH)){ ?>
								<tr>
									<td><font color="green"><?php echo $row['stuNum']; ?></font></td>
									<td><font color="green"><?php echo $row['stuIC']; ?></font></td>
									<td><font color="green"><?php echo $row['stuName']; ?></font></td>
									<td align="center"><a href="studentInfoR.php?stuNum=<?php print ($row['stuNum']);?>&id=<?php echo $rec['stuNum'];?>" target="_blank"/><img src="images/info_button.png" height="30" width="30" alt="Info" /></td>
								</tr>
							<?php } ?>
						</table>
						
						
						<!-- Pagging -->
						<!--<div class="pagging">
							<div class="left">Showing 1-12 of 44</div>
							<div class="right">
								<a href="#">Previous</a>
								<a href="#">1</a>
								<a href="#">2</a>
								<a href="#">3</a>
								<a href="#">4</a>
								<a href="#">245</a>
								<span>...</span>
								<a href="#">Next</a>
								<a href="#">View all</a>
							</div>
						</div> -->
						<!-- End Pagging -->
						
					</div>
					<!-- Table -->
					
				</div><br><br><br>

				<div class="box">
					<!-- Box Head -->
					<div class="box-head">
						<?php echo "<h2 class=left>Albiruni Approved (" . $totalApprovedF . ")</h2>"; ?>
						<div class="right">
						<?php echo "<label>Free Space: " . $AlbiruniFree . " more</label>"; ?>
						</div>
					</div>
					<!-- End Box Head -->	

					<!-- Table -->
					<div class="table">
						<table width="100%" border="0" cellspacing="0" cellpadding="0" class="sortable">
							<tr>
								<th>Student Number</th>
								<th>IC Number</th>
								<th>Name</th>
								<th width="110" class="ac">Action</th>
							</tr>
							<?php
								while($row=mysql_fetch_array($Albiruni,MYSQL_BOTH)){ ?>
								<tr>
									<td><?php echo $row['stuNum']; ?></td>
									<td><?php echo $row['stuIC']; ?></td>
									<td><?php echo $row['stuName']; ?></a></td>
									<td align="center"><a href="studentInfo.php?stuNum=<?php print ($row['stuNum']);?>&id=<?php echo $rec['stuNum'];?>" target="_blank" /><img src="images/info_button.png" height="30" width="30" alt="Info" /></td>
								</tr>
							<?php } ?>
							<?php
								while($row=mysql_fetch_array($Albiruni1,MYSQL_BOTH)){ ?>
								<tr>
									<td><font color="green"><?php echo $row['stuNum']; ?></font></td>
									<td><font color="green"><?php echo $row['stuIC']; ?></font></td>
									<td><font color="green"><?php echo $row['stuName']; ?></font></td>
									<td align="center"><a href="studentInfoR.php?stuNum=<?php print ($row['stuNum']);?>&id=<?php echo $rec['stuNum'];?>" target="_blank" /><img src="images/info_button.png" height="30" width="30" alt="Info" /></td>
								</tr>
							<?php } ?>
						</table>
						
						
						<!-- Pagging -->
						<!--<div class="pagging">
							<div class="left">Showing 1-12 of 44</div>
							<div class="right">
								<a href="#">Previous</a>
								<a href="#">1</a>
								<a href="#">2</a>
								<a href="#">3</a>
								<a href="#">4</a>
								<a href="#">245</a>
								<span>...</span>
								<a href="#">Next</a>
								<a href="#">View all</a>
							</div>
						</div> -->
						<!-- End Pagging -->
						
					</div>
					<!-- Table -->
					
				</div>
				<!-- End Box -->
				
				<!-- Box -->

			</div>
			<!-- End Content -->
			
			<!-- Sidebar -->
			<div id="sidebar">
				
				<!-- Box -->
				
				<!-- End Box -->
			</div>
			<!-- End Sidebar -->
			
			<div class="cl">&nbsp;</div>			
		</div>
		<!-- Main -->
	</div>
</div>
<!-- End Container -->

<!-- Footer -->
<div id="footer">
	<div class="shell">
		<span class="left">Design by Mohamad Afif & Siti Hajar</span>
	</div>
</div>
<!-- End Footer -->
	
</body>
</html>