<form action="edit.php" method="post">
<?php
include 'connect.php';
//view selected id
$edit_id=$_GET['user_id'];

$result = mysql_query("SELECT * FROM student WHERE stuNum='$edit_id'" );

//, family, famliability, emergency 
?>
<table width="212" border="1">
<?php while ( $user = mysql_fetch_array( $result ))


$id=$user['stuNum'];
$ic=$user['stuIc'];
$name=$user['stuName'];
$program=$user['stuProg'];
$phone= $user['stuPhoneNum'];
$sem=$user['stuSemester'];
$gender=$user['stuGender'];
$famnum=$user['famNum'];
$fathername=$user['fatherName'];
$fatherjob=$user['fatherJob'];
$fathersalary=$user['fathersalary'];
$mothername=$user['motherName'];
$motherjob=$user['motherJob'];
$mothersalary=$user['motherSalary'];
$familyaddress=$user['familyAddress'];
$poscode=$user['poscode'];
$city=$user['city'];
$state=$user['state'];
$relfamily=$user['relFam'];
$names=$user['name'];
$nophone=$user['noPhone'];
$relationship=$user['relationship'];

?>

<!DOCTYPE HTML>
<html>

<head>

<link rel="stylesheet" href="css/general.css" type="text/css" />
<link href="css/style.css" rel="stylesheet" type="text/css" />

</head>
<body class="homepage">

<!-- Header --> 	

   <div id=center_header >
      <div id=left_header >
         <img src="images/kist.png" alt="" />
      </div><!-- #left_header -->
	  
	  

	  
	  
      <div id=menu >
				
				
			<div id=login>
				
				
				
			</div>		
    
		</div><!-- #menu -->

   </div><!-- #center_header -->
<!-- #header -->

<!-- #container -->
<div id="container">

<div class="menu">
<ul>
<li class="l1"><a href="#">Home</a></li>
<li class="l2"><a href="#">Permohonan Kolej</a></li>
<li class="l3"><a href="#">Keputusan Kolej</a></li>
</ul>

</div>

<div class="bubble">
<div class="rectangle"><h2>Home</h2></div>
<div class="triangle-l"></div>
<div class="triangle-r"></div>
<div class="info">

<div id="content">
<h2><center>
<h2><table width="579" border="1">
     <tr>
       <td height="26" colspan="4" bgcolor="#999999"><div align="center"><span class="style3">Student Detail</span></div></td>
  </tr>


<tr>
<td width="75"><strong>Student ID</strong></td>
<td width="121"> <input name="txtld" type="text" value="<?php echo $edit_id ?>"></td>
</tr>
<tr>
<td width="75"><strong>Student IC</strong></td>
<td width="121"> <input name="txtlc" type="text" value="<?php echo $ic ?>"></td>
</tr>
<tr>
<td><strong>NAME</strong></td>
<td> <input name="txtName" type="text" value="<?php echo $name ?>"></td>
</tr>
<tr>
<td width="75"><strong>Programme</strong></td>
<td width="121"> <input name="txtProg" type="text" value="<?php echo $program ?>"></td>
</tr>
<tr>
<td width="75"><strong>Phone Number</strong></td>
<td width="121"> <input name="txtPhone" type="text" value="<?php echo $phone ?>"></td>
</tr>
<tr>
<td width="75"><strong>Semester</strong></td>
<td width="121"> <input name="txtSem" type="text" value="<?php echo $sem ?>"></td>
</tr>
<tr>
<td width="75"><strong>Gender</strong></td>
<td width="121"> <input name="txtGen" type="text" value="<?php echo $gender ?>"></td>
</tr>

<tr>
<td width="75"><strong>Family Number</strong></td>
<td width="121"> <input name="txtFamNum" type="text" value="<?php echo $famnum ?>"></td>
</tr>

<tr>
<td width="75"><strong>Father Name</strong></td>
<td width="121"> <input name="txtFatherName" type="text" value="<?php echo $fathername ?>"></td>
</tr>

<tr>
<td width="75"><strong>Father Job</strong></td>
<td width="121"> <input name="txtFatherJob" type="text" value="<?php echo $fatherjob ?>"></td>
</tr>

<tr>
<td width="75"><strong>Father Salary</strong></td>
<td width="121"> <input name="txtFatherSalary" type="text" value="<?php echo $fathersalary ?>"></td>
</tr>

<tr>
<td width="75"><strong>Mother Name</strong></td>
<td width="121"> <input name="txtMotherName" type="text" value="<?php echo $mothername ?>"></td>
</tr>

<tr>
<td width="75"><strong>Mother Job</strong></td>
<td width="121"> <input name="txtMotherJob" type="text" value="<?php echo $motherjob ?>"></td>
</tr>

<tr>
<td width="75"><strong>Mother Salary</strong></td>
<td width="121"> <input name="txtMotherSalary" type="text" value="<?php echo $mothersalary ?>"></td>
</tr>

<tr>
<td width="75"><strong>Family Address</strong></td>
<td width="121"> <input name="txtFamilyAddress" type="text" value="<?php echo $familyaddress ?>"></td>
</tr>

<tr>
<td width="75"><strong>Poscode</strong></td>
<td width="121"> <input name="txtPoscode" type="text" value="<?php echo $poscode ?>"></td>
</tr>

<tr>
<td width="75"><strong>City</strong></td>
<td width="121"> <input name="txtCity" type="text" value="<?php echo $city ?>"></td>
</tr>

<tr>
<td width="75"><strong>State</strong></td>
<td width="121"> <input name="txtState" type="text" value="<?php echo $state ?>"></td>
</tr>

<tr>
<td width="75"><strong>Rel Family</strong></td>
<td width="121"> <input name="txtRelFamily" type="text" value="<?php echo $relfamily ?>"></td>
</tr>



<tr>
       <td height="26" colspan="4" bgcolor="#999999"><div align="center"><span class="style3">EMERGENCY</span></div></td>
  </tr>

<tr>
<td width="75"><strong>Name</strong></td>
<td width="121"> <input name="txtName2" type="text" value="<?php echo $names ?>"></td>
</tr>

<tr>
<td width="75"><strong>Number Phone</strong></td>
<td width="121"> <input name="txtNumPhone" type="text" value="<?php echo $nophone ?>"></td>
</tr>

<tr>
<td width="75"><strong>Relationship</strong></td>
<td width="121"> <input name="txtRelationship" type="text" value="<?php echo $relationship ?>"></td>
</tr>

<td colspan="2"><div align="center"> <input type="submit" name="Submit" value="Submit">
</div></td>
</tr>
</table>
</center></p>

</div>
</div>
</div>

</div>
<!-- #container -->



</body>





</html>