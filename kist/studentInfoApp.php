<?php
include('connect.php');
session_start();

$idstaff = $_GET['id'];
$stuNum = $_GET['stuNum'];

$permohonan = mysql_query("SELECT * FROM permohonan WHERE stuNum='$stuNum'");
$rayuan = mysql_query("SELECT * FROM rayuan WHERE stuNum='$stuNum'");
$keluarga = mysql_query("SELECT * FROM keluarga WHERE stuNum='$stuNum'" );
$tanggungan = mysql_query("SELECT * FROM tanggungan WHERE stuNum='$stuNum'" );
$emergency = mysql_query("SELECT * FROM emergency WHERE stuNum='$stuNum'" );
$rec = mysql_fetch_array($permohonan);
$rayuan = mysql_fetch_array($rayuan);
$rec1 = mysql_fetch_array($keluarga);
$rec2 = mysql_fetch_array($tanggungan);
$rec3 = mysql_fetch_array($emergency);


if($rec['status']=="Approved" || $rayuan['status']=="Approved")
{
    
?>

<html>

<head>

<link href="css/info.css" rel="stylesheet" type="text/css" />


</head>
<body>
<!-- Container -->  

   <div id="container" >
          <!-- Header --> 
      <div id="header">
        <center><img src="images/kist.png" alt="" width="500" height="150" alt="Go to first page"/></center>


      </div><!-- #Header --> 

      <!-- Navigation --> 
      <div id="pemisah">
    </div><!-- #Navigation --> 
  <!-- Contain --> 
  <div id="data1">
    


<br><br><br><br>
    
<fieldset>
<legend><h2>Student Infomation</h2></legend>
<center><table border="0"></center>
  <tr>
    <td>Name</td>
    <td>:<?php echo $rec['stuName'];?></td>
  </tr>
  <tr>
    <td>Student ID</td>
    <td>:<?php echo $rec['stuNum'];?></td>
  </tr>
  <tr>
    <td>Student IC</td>
    <td>:<?php echo $rec['stuIC'];?></td>
  </tr>
  <tr>
    <td>Program</td>
    <td>:<?php echo $rec['stuProg'];?></td>
  </tr>
  <tr>
    <td>Phone Number</td>
    <td>:<?php echo $rec['stuPhoneNum'];?></td>
  </tr>
  <tr>
    <td>Semester</td>
    <td>:<?php echo $rec['stuSem'];?></td>
  </tr>
  <tr>
    <td>Gender</td>
    <td>:<?php echo $rec['stuGender'];?></td>
  </tr>
</table>
</fieldset>

<br><br>

<fieldset>
<legend><h2>Family Infomation</h2></legend>
<center><table border="0"></center>
  <tr>
    <td>Father Name</td>
    <td>:<?php echo $rec1['fatherName'];?></td>
  </tr>
  <tr>
    <td>Father Status</td>
    <td>:<?php echo $rec1['fatherStatus'];?></td>
  </tr>
  <tr>
    <td>Father Job</td>
    <td>:<?php echo $rec1['fatherJob'];?></td>
  </tr>
  <tr>
    <td>Father Salary</td>
    <td>:RM<?php echo $rec1['fatherSalary'];?></td>
  </tr><br>
  <tr>
    <td>Mother Name</td>
    <td>:<?php echo $rec1['motherName'];?></td>
  </tr>
  <tr>
    <td>Mother Status</td>
    <td>:<?php echo $rec1['motherStatus'];?></td>
  </tr>
  <tr>
    <td>Mother Job</td>
    <td>:<?php echo $rec1['motherJob'];?></td>
  </tr>
  <tr>
    <td>Mother Salary</td>
    <td>:RM<?php echo $rec1['motherSalary'];?></td>
  </tr>
  <tr>
    <td>Address</td>
    <td>:<?php echo $rec1['address'];?></td>
  </tr>
  <tr>
    <td>Poscode</td>
    <td>:<?php echo $rec1['poscode'];?></td>
  </tr>
  <tr>
    <td>City</td>
    <td>:<?php echo $rec1['city'];?></td>
  </tr>
  <tr>
    <td>State</td>
    <td>:<?php echo $rec1['state'];?></td>
  </tr>
</table>
</fieldset><br><br>

<fieldset>
<legend><h2>Family Dependents</h2></legend>
<center><table border="0"></center>
  <tr>
    <td>Child</td>
    <td>:<?php echo $rec2['child'];?></td>
  </tr>
  <tr>
    <td>IPTA</td>
    <td>:<?php echo $rec2['IPTA'];?></td>
  </tr>
  <tr>
    <td>IPTS</td>
    <td>:<?php echo $rec2['IPTS'];?></td>
  </tr>
  <tr>
    <td>High School</td>
    <td>:<?php echo $rec2['highSchool'];?></td>
  </tr>
  <tr>
    <td>Primary School</td>
    <td>:<?php echo $rec2['primSchool'];?></td>
  </tr>
  <tr>
    <td>Pra School</td>
    <td>:<?php echo $rec2['praSchool'];?></td>
  </tr>
  <tr>
    <td>Not School</td>
    <td>:<?php echo $rec2['notSchool'];?></td>
  </tr>
 </table>
 </fieldset> 

 <br><br>

<fieldset>
<legend><h2>Emergency</h2></legend>
<center><table border="0"></center>
  <tr>
    <td>Name</td>
    <td>:<?php echo $rec3['name'];?></td>
  </tr>
  <tr>
    <td>No Phone</td>
    <td>:<?php echo $rec3['noPhone'];?></td>
  </tr>
  <tr>
    <td>Relationship</td>
    <td>:<?php echo $rec3['relationship'];?></td>
  </tr>
 </table>
 </fieldset> 

  </div><!-- #Contain --> 

  

      


  </div><!-- #Container -->   

  <!-- Footer --> 
  <div id="footer">

  </div><!-- #Footer --> 





</body>





</html>

<?php
}
else{
echo "<script language='JavaScript'>alert('These students do not get college facilities');</script>";
    echo "<script>window.location='indexStaff.php?Number=".$idstaff."'</script>";
}
?>
