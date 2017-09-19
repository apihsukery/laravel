<?php
include('connect.php');
session_start();
//view selected id
$num=$_GET['Number'];
$result = mysql_query("SELECT * FROM user WHERE stuNum='$num'" );

// make sure user is logged in
if (!$_SESSION['name']) {
    $loginError = "You are not logged in.";
    header("location:indexLogin.php");
 }

$rec = mysql_fetch_array($result);

?>

<html>

<head>
<script type="text/javascript">
<?php

if (isset($_GET['loginfail'])) {
    echo "Please try again later";
}
?>
function validate_form()
{
	var valid = true;
	if(document.login.stuNum.value=="")
	{
		alert("Please fill Student Number");
		document.login.stuNum.focus();
		valid=false;
	}
	else if(document.login.pass.value=="")
	{
		alert("Please fill Password");
		document.login.pass.focus();
		valid=false;
	}
	return valid;
}
</script>
<link rel="stylesheet" href="css/general.css" type="text/css" />
<link href="css/style.css" rel="stylesheet" type="text/css" />

</head>
<body class="homepage">

<!-- Header --> 	

   <div id=center_header >
      <div id=left_header >
         <img src="images/kist.png" alt="" />
      </div><!-- #left_header -->
	  
	  

	  
	  
      <div id="menu" >
				
				
			<div id="login">
				<font face="lucida">
				<table>
				<tr align="right">
					<td><font color="black"><?php echo $rec['name'];?></font></td>
				</tr>
				<tr align="right">
					<td><font color="black"><?php echo $rec['stuNum'];?></font></td>
				</tr>
				<tr align="right">
					<td><font color="black"><script type="text/javascript">
var d=new Date()
var weekday=new Array("Sunday","Monday","Tuesday","Wednesday","Thursday","Friday","Saturday")
var monthname=new Array("Jan","Feb","Mar","Apr","May","Jun","Jul","Aug","Sep","Oct","Nov","Dec")
document.write(weekday[d.getDay()] + " ")
document.write(d.getDate() + " ")
document.write(monthname[d.getMonth()] + " ")
document.write(d.getFullYear())
</script></font></td>
				</tr>
				<tr align="right">
					<td><font color="black"><script type="text/javascript">

function GetClock(){
d = new Date();
nhour  = d.getHours();
nmin   = d.getMinutes();
nsec   = d.getSeconds();

     if(nhour ==  0) {ap = " AM";nhour = 12;} 
else if(nhour <= 11) {ap = " AM";} 
else if(nhour == 12) {ap = " PM";} 
else if(nhour >= 13) {ap = " PM";nhour -= 12;}

if(nmin <= 9) {nmin = "0" +nmin;}
if(nsec <= 9) {nsec = "0" +nsec;}


document.getElementById('clockbox').innerHTML=""+nhour+":"+nmin+":"+nsec+ap+"";
setTimeout("GetClock()", 1000);
}
window.onload=GetClock;
</script>
<div id="clockbox"></div>
</font></td>
				</tr>
				<tr align="right">
					<td>
						<a href="editProfile1.php?Number=<?php echo $rec['stuNum'];?>"/><img src="staff/images/edit.gif" />Profile Setting<a href="logout.php"/><img src="staff/images/logout.png" width="12" height="12"/>Logout
					</td>
				</tr>

				</table></font>
				
			</div>		
    
		</div><!-- #menu -->

   </div><!-- #center_header -->
<!-- #header -->

<!-- #container -->
<div id="container">

<div class="menu">
<ul>
<li class="l1"><a href="indexUser.php?Number=<?php print($rec['stuNum']);?>">Home</a></li>
<li class="l2"><a href="permohonanUser.php?Number=<?php print($rec['stuNum']);?>">College Application</a></li>
<li class="l3"><a href="resultUser.php?Number=<?php print($rec['stuNum']);?>">Result Application</a></li>
<li class="l4"><a href="rayuanUser.php?Number=<?php print($rec['stuNum']);?>">Appeal College Application</a></li>
<li class="l5"><a href="contactUser.php?Number=<?php print($rec['stuNum']);?>">Contact Us</a></li>
</ul>

</div>

<div class="bubble">
<div class="rectangleContact"><h2>Contact Us</h2></div>
<div class="triangleContact-l"></div>
<div class="triangleContact-r"></div>
<div class="info">
	<br><br><br><br><br><br><br>	<br><br><br>
<h2 align="center">Thanks for contacting us!</h2>
<br><br><br><br><br><br><br>	<br><br><br><br><br>
<!--<p>Name:</p>
<input type="text" name="name" />
<p>E-mail:</p>
<input type="text" name="email" />
<p>Subject:</p>
<input type="text" name="subject" />
<p>Message:</p>
<textarea name="message"></textarea></p>
<input class="send" type="submit" value="Send">
</form>-->

</div>
</div>

</div>
<!-- #container -->

<div id="footer">
	<p> Design by Mohamad Afif & Siti Hajar </p>	
</div>

</body>





</html>