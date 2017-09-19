<?php
include('connect.php');
session_start();

$idstaff = $_GET['id'];
$stuNum = $_GET['stuNum'];

$rayuan = mysql_query("SELECT * FROM rayuan WHERE stuNum='$stuNum'" );

$rec = mysql_fetch_array($rayuan);

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
<legend><h2>Appeal Infomation</h2></legend>
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
  <tr>
    <td>GPA last semester</td>
    <td>:<?php echo $rec['stuGPA'];?></td>
  </tr>
  <tr>
    <td>Father Salary</td>
    <td>:RM<?php echo $rec['fatherSalary'];?></td>
  </tr>
  <tr>
    <td>Mother Salary</td>
    <td>:RM<?php echo $rec['motherSalary'];?></td>
  </tr>
</table>
</fieldset>

<br><br> 

  </div><!-- #Contain --> 

  

      


  </div><!-- #Container -->   

  <!-- Footer --> 
  <div id="footer">

  </div><!-- #Footer --> 





</body>





</html>