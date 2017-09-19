<?php
include('connect.php');
session_start();
//view selected id
$stuNum = $_POST['stuNum'];
$result = mysql_query("SELECT * FROM user WHERE stuNum='$stuNum'" );

// make sure user is logged in
if (!$_SESSION['name']) {
    $loginError = "You are not logged in.";
    header("location:indexLogin.php");
 }

$rec = mysql_fetch_array($result);


//student information

$name = $_POST['name'];
$ic = $_POST['ic'];
$prog = $_POST['prog'];
$PhoneNum = $_POST['PhoneNum'];
$sem = $_POST['sem'];
$gender = $_POST['gender'];
$status = 'In Progress';

//parent information
$fname = $_POST['fname'];
$fstatus = $_POST['fstatus'];
$fjob = $_POST['fjob'];
$fsal = $_POST['fsal'];
$mname = $_POST['mname'];
$mstatus = $_POST['mstatus'];
$mjob = $_POST['mjob'];
$msal = $_POST['msal'];
$addr = $_POST['addr'];
$poscode = $_POST['poscode'];
$city = $_POST['city'];
$state = $_POST['state'];


//tanggungan
$child = $_POST['child'];
$ipta = $_POST['ipta'];
$ipts = $_POST['ipts'];
$hs = $_POST['hs'];
$ps = $_POST['ps'];
$pras = $_POST['pras'];
$ns= $_POST['ns'];

//emergency
$ename = $_POST['ename'];
$ePhoneNum = $_POST['ePhoneNum'];
$relationship= $_POST['relationship'];

//information student into dtabase
$permohonan = mysql_query("INSERT INTO permohonan(stuNum,stuIc,stuName,stuProg,stuPhoneNum,stuSem,stuGender,status) VALUES
('$stuNum','$ic','$name','$prog','$PhoneNum','$sem','$gender','$status')" );

//info family into dtabase
$keluarga = mysql_query("INSERT INTO keluarga(stuNum,fatherName,fatherStatus,fatherJob,fatherSalary,motherName,motherStatus,motherJob,motherSalary,address,poscode,city,state) VALUES
('$stuNum','$fname','$fstatus','$fjob','$fsal','$mname','$mstatus','$mjob','$msal','$addr','$poscode','$city','$state')" );

//insert tanggungan into dtabase
$tanggungan = mysql_query("INSERT INTO tanggungan(stuNum,Child,IPTA,IPTS,highSchool,primSchool,praSchool,notSchool) VALUES
('$stuNum','$child','$ipta','$ipts','$hs','$ps','$pras','$ns')" );

//insert data emergency into dtabase
$emergency = mysql_query("INSERT INTO emergency(stuNum,name,noPhone,relationship) VALUES
('$stuNum','$ename','$ePhoneNum','$relationship')" );



?>

<html>

<head>


<script type="text/javascript">
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
    
		</div>

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
<div class="rectanglePermohonan"><h2>College Application</h2></div>
<div class="trianglePermohonan-l"></div>
<div class="trianglePermohonan-r"></div>



<div class="info">


<div id="data">





	<center><h2>Your application has successful submit<br>Please wait for your result</h2></center>




</div>

<br><br><br><br>



</div>
</div>

</div>
<!-- #container -->

<div id="footer">
	<p> Design by Mohamad Afif & Siti Hajar </p>	
</div>

</body>





</html>