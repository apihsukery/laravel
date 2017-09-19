<?php
include('connect.php');
session_start();

//view selected id
$num=$_GET['Number'];
$result = mysql_query("SELECT * FROM user WHERE stuNum='$num'" );
$list = mysql_query("SELECT * FROM permohonan WHERE status='In Progress' and stuGender='FEMALE'" );
$list1 = mysql_query("SELECT * FROM rayuan WHERE status='In Progress' and stuGender='FEMALE'" );
$count = mysql_query("SELECT * FROM permohonan WHERE status='In Progress' and stuGender='FEMALE'" );
$count1 = mysql_query("SELECT * FROM rayuan WHERE status='In Progress' and stuGender='FEMALE'" );
$approved = mysql_query("SELECT * FROM permohonan WHERE status='Approved' and stuGender='FEMALE'" );
$approved1 = mysql_query("SELECT * FROM rayuan WHERE status='Approved' and stuGender='FEMALE'" );
$countApproved=0;
$countApproved1=0;
$totalApproved=0;
$countApply=0;
$countApply1=0;
$totalApply=0;
while(mysql_fetch_array($approved,MYSQL_BOTH))
{
	$countApproved = $countApproved + 1;
}
while(mysql_fetch_array($approved1,MYSQL_BOTH))
{
	$countApproved1 = $countApproved1 + 1;
}
$totalApproved = $countApproved + $countApproved1;
while(mysql_fetch_array($count,MYSQL_BOTH))
{
	$countApply = $countApply + 1;
}
while(mysql_fetch_array($count1,MYSQL_BOTH))
{
	$countApply1 = $countApply1 + 1;
}
$totalApply = $countApply + $countApply1;
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
			    <li><a href="#" class="active"><span>Kolej Albiruni</span></a></li>
			    <li><a href="Approved list.php?Number=<?php echo $rec['stuNum'];?>"><span>Approved</span></a></li>
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
		
		
		<div class="msg msg-error">
			<p><strong>Please approve carefully!, after you approve you cannot change it back.</strong></p>
		</div>
		<!-- Main -->
		<div id="main">
			<div class="cl">&nbsp;</div>
			
			<!-- Content -->
			<div id="content">
				
				<!-- Box -->
				<div class="box">
					<!-- Box Head -->
					<div class="box-head">
						<?php echo "<h2 class=left>Student In Application (" . $totalApply . ")</h2>"; ?>
						<div class="right">
						<?php echo "<label>Total Approved " . $totalApproved . " /1800</label>"; ?>
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
								while($row=mysql_fetch_array($list,MYSQL_BOTH)){ ?>
								<tr>
									<td><?php echo $row['stuNum']; ?></td>
									<td><?php echo $row['stuIC']; ?></td>
									<td><?php echo $row['stuName']; ?></a></td>
									<td><a href="studentInfo.php?stuNum=<?php print ($row['stuNum']);?>&id=<?php echo $rec['stuNum'];?>" target="_blank" /><img src="images/info_button.png" height="30" width="30" alt="Info" />   <a href="studentAR.php?stuNum=<?php print ($row['stuNum']);?>&id=<?php echo $rec['stuNum'];?>&code=2&ar=1" /><img src="images/button_ok.png" height="30" width="30" alt="Approve" />   <a href="studentAR.php?stuNum=<?php print ($row['stuNum']);?>&id=<?php echo $rec['stuNum'];?>&code=2&ar=2" /><img src="images/button_cancel.png" height="30" width="30" alt="Reject" /></td>
								</tr>
								<?php } while($row=mysql_fetch_array($list1,MYSQL_BOTH)){ ?>
								<tr>
									<td><font color="green"><?php echo $row['stuNum']; ?></font></td>
									<td><font color="green"><?php echo $row['stuIC']; ?></font></td>
									<td><font color="green"><?php echo $row['stuName']; ?></a></font></td>
									<td><a href="studentInfoR.php?stuNum=<?php print ($row['stuNum']);?>&id=<?php echo $rec['stuNum'];?>" target="_blank"/><img src="images/info_button.png" height="30" width="30" alt="Info" />   <a href="studentAR1.php?stuNum=<?php print ($row['stuNum']);?>&id=<?php echo $rec['stuNum'];?>&code=2&ar=1" /><img src="images/button_ok.png" height="30" width="30" alt="Approve" />   <a href="studentAR1.php?stuNum=<?php print ($row['stuNum']);?>&id=<?php echo $rec['stuNum'];?>&code=2&ar=2" /><img src="images/button_cancel.png" height="30" width="30" alt="Reject" /></td>
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