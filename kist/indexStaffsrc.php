<?php
include('connect.php');
session_start();

//view selected id

$num=$_POST['Number'];
$result = mysql_query("SELECT * FROM user WHERE stuNum='$num'" );
$list = mysql_query("SELECT * FROM user WHERE type='STUDENT'" );
$list1 = mysql_query("SELECT * FROM user WHERE type='STAFF'" );
//$listCount = mysql_query("SELECT * FROM user WHERE type='STUDENT'" );
$listCount1 = mysql_query("SELECT * FROM user WHERE type='STAFF'" );

$search=$_POST['nama'];
$listSrc = mysql_query("SELECT * from user WHERE name LIKE '%$search%' and type='STUDENT'");
$listSrc1 = mysql_query("SELECT * from user WHERE name LIKE '%$search%' and type='STUDENT'");

$count = 0;
$count1 = 0;
while(mysql_fetch_array($listSrc1,MYSQL_BOTH))
{
	$count = $count + 1;
}
while(mysql_fetch_array($listCount1,MYSQL_BOTH))
{
	$count1 = $count1 + 1;
}





// make sure user is logged in
if (!$_SESSION['name']) {
    $loginError = "You are not logged in.";
    header("location:indexLogin.php");
 }

$rec = mysql_fetch_array($result);

if(isset($_POST['nama'])){
  $nama=$_POST['nama'];
//execute the SQL query and return records
$search = mysql_query("SELECT * FROM user where name like '%$nama%' ");

}

?>


<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<meta http-equiv="Content-type" content="text/html; charset=utf-8" />
	<title>Staff Dashboard</title>
	<link rel="stylesheet" href="staff/style.css" type="text/css" media="all" />
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
			    <li><a href="#" class="active"><span>List User</span></a></li>
			    <li><a href="IbnuSina.php?Number=<?php echo $rec['stuNum'];?>"><span>Kolej IbnuSina</span></a></li>
			    <li><a href="Albiruni.php?Number=<?php echo $rec['stuNum'];?>"><span>Kolej Albiruni</span></a></li>
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
						<?php echo "<h2 class=left>Staff List (" .$count1. ")</h2>" ?>
					</div>
					<!-- End Box Head -->	

					<!-- Table -->
					<div class="table">
						<table width="100%" border="0" cellspacing="0" cellpadding="0" class="sortable">
							<tr>
								<th>Staff Number</th>
								<th>Name</th>
								<th>Email</th>
								<th width="110" class="ac">Action</th>
							</tr>
							<?php
								while($row=mysql_fetch_array($list1,MYSQL_BOTH)){ ?>
								<tr>
									<td><?php echo $row['stuNum']; ?></td>
									<td><?php echo $row['name']; ?></td>
									<td><?php echo $row['email']; ?></a></td>
									<?php
									if($num!=$row['stuNum']){ ?>
									<td><center><a href="studentDelete.php?stuNum=<?php print ($row['stuNum']);?>&id=<?php echo $rec['stuNum'];?>" class="ico del">Delete</a></center></td>
									<?php }
									else{ ?>
									<td><font color="red"><center>YOU</center></font></td> <?php
									} ?>
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
				<div class="box">
					<!-- Box Head -->
					<div class="box-head">
						<?php echo "<h2 class=left>Student List (" .$count. ")</h2>" ?>
						<div class="right">
						<form name="search" method="POST" action="indexStaffsrc.php">
							<label>search student</label>
							<input type="hidden" name="Number" value="<?php echo $rec['stuNum'];?>">
							<input type="text" name="nama" id="nama" value="" required/>
							<input type="submit" class="button" name="sbt" value="Search"/>
						</form>
						</div>
					</div>
					<!-- End Box Head -->	

					<!-- Table -->
					<div class="table">
						<table width="100%" border="0" cellspacing="0" cellpadding="0" class="sortable">
							<tr>
								<th>Student Number</th>
								<th>Password</th>
								<th>Name</th>
								<th width="110" class="ac">Action</th>
							</tr>
							<?php
								while($row=mysql_fetch_array($listSrc,MYSQL_BOTH)){ ?>
								<tr>
									<td><?php echo $row['stuNum']; ?></td>
									<td><?php echo $row['pass']; ?></td>
									<td><?php echo $row['name']; ?></a></td>
									<td><a href="studentDelete.php?stuNum=<?php print ($row['stuNum']);?>&id=<?php echo $rec['stuNum'];?>" class="ico del">Delete</a><a href="studentInfoApp.php?stuNum=<?php print ($row['stuNum']);?>&id=<?php echo $rec['stuNum'];?>" class="ico info">Info</a></td>
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
				
				

			</div>
			<!-- End Content -->
			
			<!-- Sidebar -->
			<div id="sidebar">
				
				<!-- Box -->
				<div class="box">
					
					<!-- Box Head -->
					<div class="box-head">
						<h2>Add New User</h2>
					</div>
					<!-- End Box Head-->
					
					<div class="box-content">
						<form name="add" method="post" action="addUser.php">
							<input type="hidden" name="idStaff" value="<?php echo $rec['stuNum'];?>">
							<table border="0">
								<tr>
									<td>ID Number:</td>
								</tr>
								<tr>
									<td><input type="text" name="id" size="20" required></td>
								</tr>
								<tr>
									<td>Password:</td>
								</tr>
								<tr>
									<td><input type="text" name="pass" size="20" required></td>
								</tr>
								<tr>
									<td>Name:</td>
								</tr>
								<tr>
									<td><input type="text" name="name" size="20" id="name" onblur="caps(this.id)" required></td>
								</tr>
								<tr>
									<td>IC Number:</td>
								</tr>
								<tr>
									<td><input type="text" name="ic" size="20" required></td>
								</tr>
								<tr>
									<td>Email:</td>
								</tr>
								<tr>
									<td><input type="text" name="email" size="20" required></td>
								</tr>
								<tr>
									<td>Type:</td>
								</tr>
								<tr>
									<td><Select name="type">
										<option value="STUDENT">Student</option>
										<option value="STAFF">Staff</option></select>
									</td>
								</tr>
							</table><br>
							<input type="submit" name="add" class="add-button" value="Add User   ">
						</form>
						<br><br><br>
					</div>
				</div>
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