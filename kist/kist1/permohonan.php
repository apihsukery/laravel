<?php
session_start();
include("connect.php");
if(isset($_SESSION['student'])){

$stuNum = $_SESSION['student'];

$sql=" SELECT *
			FROM student 
			WHERE stuNum='$stuNum'";
		$query=mysql_query($sql)or die("Error: ".mysql_error());
		$data = mysql_fetch_assoc($query);


?>


<?php
include("connect.php");
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
         <a href=home.html>Home</a>
         
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
<div class="rectangle">
  <h2>Permohonan Kolej</h2>
</div>
<div class="triangle-l"></div>
<div class="triangle-r"></div>
<div class="info">
<h2>&nbsp;</h2>

<div id="content">
<div class="box">		
<center>
  <h2>&nbsp;</h2>
		
	<form id="form1" name="form1" method="post" action="processpermohonan.php">
		<table width="579" border="0">
     <tr>
       <td height="26" colspan="4" bgcolor="#999999"><div align="center"><span class="style3">Student Detail</span></div></td>
  </tr>
     <tr>
       <td width="92" height="20">&nbsp;</td>
       <td width="8">&nbsp;</td>
       <td width="130">&nbsp;</td>
       <td width="331">&nbsp;</td>
     </tr>
     <tr>
       <td height="25">Student ID</td>
       <td>:</td>
       <td colspan="2"><?php echo $stuNum;?>
       <input type="text" name="id" id="id" value="<?php echo $stuNum;?>" hidden /></td>
  </tr>
     <tr>
       <td height="20">Password</td>
       <td>:</td>
       <td colspan="2">
       <input name="password" type="text" id="password" size="50" value="<?php echo $data2['password'];?>"/></td>
  </tr>
     <tr>
       <td height="25">Name</td>
       <td>:</td>
       <td colspan="2">
       <input name="name" type="text" id="stuName" size="50" value="<?php echo $data['stuName'];?>"/></td>
  </tr>
     <tr>
       <td height="24">Ic Number</td>
       <td>:</td>
       <td colspan="2">
       <input name="ic" type="text" id="stuIc" size="50" value="<?php echo $data['stuIc'];?>" /></td>
  </tr>
     <tr>
       <td>Programme</td>
       <td>:</td>
       <td colspan="2">
       <input name="program" type="text" id="stuProg" size="50" value="<?php echo $data['stuProg'];?>" /></td>
  </tr>
     <tr>
       <td height="23">Contact No</td>
       <td>:</td>
       <td colspan="2">
       <input name="phone" type="text" size="50" /></td>
  </tr>
     <tr>
       <td height="22">Semester</td>
       <td>:</td>
       <td colspan="2">
       <input name="semester" type="text" id="stuSemester" size="50" value="<?php echo $data['stuSemester'];?>" /></td>
  </tr>
  <tr>
       <td height="22">Gender</td>
       <td>:</td>
       <td colspan="2">
       <input name="gender" type="text" id="stuGender" size="50" value="<?php echo $data['stuGender'];?>" /></td>
  </tr>
  
  <tr>
       <td height="27" colspan="4" bgcolor="#999999"><div align="center"><span class="style3">Family Detail</span></div></td>
  </tr>
     <tr>
       <td>&nbsp;</td>
       <td>&nbsp;</td>
       <td colspan="2">&nbsp;</td>
  </tr>
     <tr>
       <td height="25">Father Name</td>
       <td>:</td>
       <td colspan="2">
       <input name="name" type="text" size="50" /></td>
  </tr>
     <tr>
       <td height="24">Job</td>
       <td>:</td>
       <td colspan="2">
       <input name="kerja" type="text"  size="50"  /></td>
  </tr>
     <tr>
       <td>Salary</td>
       <td>:</td>
       <td colspan="2">
       <input name="fatSal" type="text" size="50" /></td>
  </tr>
     <tr>
       <td height="23">Mother Name</td>
       <td>:</td>
       <td colspan="2">
       <input name="name" type="text" size="50" /></td>
  </tr>
     <tr>
       <td height="22">Job</td>
       <td>:</td>
       <td colspan="2">
       <input name="kerja" type="text"  size="50"  /></td>
  </tr>
  <tr>
       <td height="22">Salary</td>
       <td>:</td>
       <td colspan="2">
       <input name="salary" type="text"  size="50" /></td>
  </tr>
  <tr>
       <td height="22">Family Number</td>
       <td>:</td>
       <td colspan="2">
       <input name="famnumber" type="text"  size="50" /></td>
  </tr>
  
  <tr>
       <td height="27" colspan="4" bgcolor="#999999"><div align="center"><span class="style3">Alamat Keluarga</span></div></td>
  </tr>
     <tr>
       <td>&nbsp;</td>
       <td>&nbsp;</td>
       <td colspan="2">&nbsp;</td>
  </tr>
     <tr>
       <td height="25">Street</td>
       <td>:</td>
       <td colspan="2">
       <input name="street" type="text" size="50" /></td>
  </tr>
   <tr>
       <td height="25">City</td>
       <td>:</td>
       <td colspan="2">
       <input name="city" type="text"  size="50" /></td>
  </tr>
  <td height="25">State</td>
       <td>:</td>
       <td colspan="2">
       <select name="state">
              <option selected>Choose One</option>
              <option value="Johor">Johor</option>
              <option value="Melaka">Melaka</option>
              <option value="Negeri Sembilan">Negeri Sembilan</option>
              <option value="Perak">Perak</option>
              <option value="Kedah">Kedah</option>
              <option value="Perlis">Perlis</option>
              <option value="Pahang">Pahang</option>
              <option value="Terengganu">Terengganu</option>
              <option value="Kelatan">Kelantan</option>
              <option value="Sarawak">Sarawak</option>
              <option value="Sabah">Sabah</option>
              <option value="Kuala Lumpur">Wilayah Persekutuan Kuala Lumpur</option>
              <option value="Labuan">Wilayah Persekutuan Labuan</option>
              <option value="Putrajaya">Wilayah Persekutuan Putrajaya</option>
            </select>
  
     <tr>
       <td height="29">&nbsp;</td>
       <td>&nbsp;</td>
       <td>&nbsp;</td>
       <td>&nbsp;</td>
     </tr>
     <tr>
       <td>&nbsp;</td>
       <td>&nbsp;</td>
       <td><input name="button2" type="button" class="cange_button" id="button2" value="Cancel"
       onclick="Close()" /></td>
       <td><input name="Submit" type="submit" class="cange_button" id="button" value="Send"
        /></td>
     </tr>
</table>
		<br><br>
	</form></center>

</div>
</div>



</div>
</div>

</div>
<!-- #container -->



</body>





</html>


<?php

}

else

	header("Location:index.php");
?>
