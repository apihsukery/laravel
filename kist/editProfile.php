<?php
include('connect.php');
session_start();

$id = $_GET['Number'];

$result = mysql_query("SELECT * FROM user WHERE stuNum='$id'" );
$rec = mysql_fetch_array($result);
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
    
<form name="edit" method="post" action="editProcess.php">
  <input type="hidden" name="Number" value="<?php echo $rec['stuNum'];?>">
<table border="0" align="center">
<tr>
    <td>Name</td>
    <td>:<?php echo $rec['name'];?></td>
</tr>
<tr>
    <td>Staff ID</td>
    <td>:<?php echo $rec['stuNum'];?></td>
</tr>
<tr>
    <td>Staff IC</td>
    <td>:<?php echo $rec['ic'];?><td>
</tr>
<tr>
    <td>Password</td>
    <td>:<input type="text" name="pass" value="<?php echo $rec['pass'];?>" required></td>
</tr>
<tr>
    <td>Email</td>
    <td>:<input type="text" name="email" value="<?php echo $rec['email'];?>" required></td>
</tr>
<tr>
  <td colspan="2" align="center"><input type="submit" name="sbmit" value="Edit">
  </tr>
</table>
</form>


  </div><!-- #Contain --> 

  

      


  </div><!-- #Container -->   

  <!-- Footer --> 
  <div id="footer">

  </div><!-- #Footer --> 





</body>





</html>