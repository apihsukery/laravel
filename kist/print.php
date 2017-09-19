<?php
include('connect.php');
session_start();

$id = $_GET['Number'];

$result = mysql_query("SELECT * FROM user WHERE stuNum='$id'" );
$result1 = mysql_query("SELECT * FROM permohonan WHERE stuNum='$id'" );
$rec = mysql_fetch_array($result);
$rec1 = mysql_fetch_array($result1);
?>

<html>

<head>

<link href="css/print.css" rel="stylesheet" type="text/css" />


</head>
<body onload="window.print()">
<!-- Container -->  
<br><br><br><br><br><br><br><br><br>
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
    
  <input type="hidden" name="Number" value="<?php echo $rec['stuNum'];?>">
  
<table border="0" align="center">
<tr>
    <td>Name</td>
    <td>:<?php echo $rec['name'];?></td>
</tr>
<tr>
    <td>Student ID</td>
    <td>:<?php echo $rec['stuNum'];?></td>
</tr>
<tr>
    <td>Student IC</td>
    <td>:<?php echo $rec['ic'];?><td>
</tr>
<tr>
    <td>Phone Number</td>
    <td>:<?php echo $rec1['stuPhoneNum'];?></td>
</tr>
<tr>
    <td>Program</td>
    <td>:<?php echo $rec1['stuProg'];?></td>
</tr>
<tr>
    <td>Semester</td>
    <td>:<?php echo $rec1['stuSem'];?></td>
</tr>
<tr>
    <td>College</td>
    <?php 
    if($rec1['stuGender']=="MALE")
      { ?>
      <td>:IbnuSina</td>
      <?php
    }  ?>

    <?php 
    if($rec1['stuGender']=="FEMALE")
      { ?>
      <td>:Albiruni</td>
      <?php
    }  ?>
    
</tr>

<tr>
    <td>Room Number</td>
    <td>:<?php echo $rec1['roomNum'];?></td>

</table>



  </div><!-- #Contain --> 

  

      


  </div><!-- #Container -->   

  <!-- Footer --> 
  <div id="footer">

  </div><!-- #Footer --> 





</body>





</html>