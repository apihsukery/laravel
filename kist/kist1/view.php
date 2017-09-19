<?php
//Connection to database
include 'connect.php';
$result = mysql_query("Select * from student, family, famliability, emergency order by stuName Asc",$link) or die("Database Error");
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
<!--<h2><table width="493" border="1">-->
<div id="content">
<div class="box">		
<center>


<h2><table width="579" border="1">
     <tr>
       <td height="26" colspan="4" bgcolor="#999999"><div align="center"><span class="style3">Student Detail</span></div></td>
  </tr>

<?php
//data looping
while($row = mysql_fetch_array($result, MYSQL_BOTH)){?>

<tr>
       <td height="25">Student ID</td>
       
       
       <td><?php echo $row['stuNum'];?></td>      
  </tr>

     <tr>
       <td height="24">Ic Number</td>
       
       
       <td><?php echo $row['stuIc'];?></td>
  </tr>
  
  <tr>
       <td height="25">Name</td>
       
       
      <td><?php echo $row['stuName'];?></td>
  </tr>

<tr>
       <td>Programme</td>
       
       
       <td><?php echo $row['stuProg'];?></td>
  </tr>

<tr>
       <td height="23">Contact No</td>
       
       
       <td><?php echo $row['stuPhoneNum'];?></td>
  </tr>
     <tr>
       <td height="22">Semester</td>
       
      
       <td><?php echo $row['stuSemester'];?></td>
  </tr>

<tr>
       <td height="22">Gender</td>
       <td><?php echo $row['stuGender'];?></td>
  </tr>
  
  <tr>
       <td height="22">Family Number</td>
       <td><?php echo $row['famNum'];?></td>
  </tr>
  
  <tr>
       <td height="22">Father Name</td>
       <td><?php echo $row['fatherName'];?></td>
  </tr>

<tr>
       <td height="22">Father Job</td>
       <td><?php echo $row['fatherJob'];?></td>
  </tr>

<tr>
       <td height="22">Father Salary</td>
       <td><?php echo $row['fatherSalary'];?></td>
  </tr>

<tr>
       <td height="22">Mother Name</td>
       <td><?php echo $row['motherName'];?></td>
  </tr>
  
  <tr>
       <td height="22">motherJob</td>
       <td><?php echo $row['motherJob'];?></td>
  </tr>
  
  <tr>
       <td height="22">Mother Salary</td>
       <td><?php echo $row['motherSalary'];?></td>
  </tr>
  
  <tr>
       <td height="22">Family Address</td>
       <td><?php echo $row['familyAddress'];?></td>
  </tr>

<tr>
       <td height="22">Poscode</td>
       <td><?php echo $row['poscode'];?></td>
  </tr>

<tr>
       <td height="22">City</td>
       <td><?php echo $row['city'];?></td>
  </tr>

<tr>
       <td height="22">State</td>
       <td><?php echo $row['state'];?></td>
  </tr>

<tr>
       <td height="22">Real Family</td>
       <td><?php echo $row['relFam'];?></td>
  </tr>

<tr>
       <td height="22">Number Liability</td>
       <td><?php echo $row['numliability'];?></td>
  </tr>

<tr>
       <td height="22">Number Child</td>
       <td><?php echo $row['numchild'];?></td>
  </tr>

<tr>
       <td height="22">Number IPTS</td>
       <td><?php echo $row['numipts'];?></td>
  </tr>


<tr>
       <td height="22">Number IPTA</td>
       <td><?php echo $row['numipta'];?></td>
  </tr>

<tr>
       <td height="22">Number High School</td>
       <td><?php echo $row['numhighschool'];?></td>
  </tr>
  
  <tr>
       <td height="22">Number Primary School</td>
       <td><?php echo $row['numprimschool'];?></td>
  </tr>

<tr>
       <td height="22">Number Pra School</td>
       <td><?php echo $row['numpraschool'];?></td>
  </tr>

<tr>
       <td height="22">Number Not School</td>
       <td><?php echo $row['numnotschool'];?></td>
  </tr>

<tr>
       <td height="26" colspan="4" bgcolor="#999999"><div align="center"><span class="style3">EMERGENCY</span></div></td>
  </tr>

<tr>
       <td height="22">Name</td>
       <td><?php echo $row['name'];?></td>
  </tr>

<tr>
       <td height="22">Number Phone</td>
       <td><?php echo $row['noPhone'];?></td>
  </tr>

<tr>
       <td height="22">Relationship</td>
       <td><?php echo $row['relationship'];?></td>
  </tr>


<td><div align="center"><a href="view_edit.php?user_id=<?php print($row['stuNum']);?>">edit</a></div></td>
<td><div align="center"><a href="delete.php?user_id=<?php print ($row['stuNum']);?>">delete
</a></div></td>
</tr>
<?php }
?> 
</table></center>

</div>
</div>
</p>


</div>
</div>

</div>
<!-- #container -->



</body>





</html>