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

<!-- bjqs.css contains the *essential* css needed for the slider to work -->
    <link rel="stylesheet" href="bjqs.css">

    <!-- some pretty fonts for this demo page - not required for the slider -->
    <link href='http://fonts.googleapis.com/css?family=Source+Code+Pro|Open+Sans:300' rel='stylesheet' type='text/css'> 

    <!-- demo.css contains additional styles used to set up this demo page - not required for the slider --> 
    <link rel="stylesheet" href="demo.css">

    <!-- load jQuery and the plugin -->
    <script src="http://code.jquery.com/jquery-1.7.1.min.js"></script>
    <script src="js/bjqs-1.3.min.js"></script>

<link rel="stylesheet" href="css/general.css" type="text/css" />
<link href="css/style.css" rel="stylesheet" type="text/css" />

</head>
<body class="homepage">

<!-- Header --> 	

   <div id="center_header" >
      <div id="left_header" >
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
<div class="rectangleHome"><h2>Home</h2></div>
<div class="triangleHome-l"></div>
<div class="triangleHome-r"></div>
<div class="info">
<h2 align="center">WELCOME!</h2>

<div id="container1">
<!--  Outer wrapper for presentation only, this can be anything you like -->
      <div id="banner-slide">

        <!-- start Basic Jquery Slider -->
        <ul class="bjqs">
          <li><a href=""><img src="img/banner01.jpg"></a></li>
          <li><img src="img/banner02.jpg" ></li>
          <li><img src="img/banner03.jpg" ></li>
		  <li><img src="img/banner04.jpg" ></li>
          <li><img src="img/banner05.jpg" ></li>
		  <li><img src="img/banner06.jpg" ></li>
          <li><img src="img/banner07.jpg" ></li>
        </ul>
        <!-- end Basic jQuery Slider -->

      </div>
      <!-- End outer wrapper -->
      
      <!-- attach the plug-in to the slider parent element and adjust the settings as required -->
      <script class="secret-source">
        jQuery(document).ready(function($) {
          
          $('#banner-slide').bjqs({
            animtype      : 'slide',
            height        : 320,
            width         : 620,
            responsive    : true,
            randomstart   : true
          });
          
        });
      </script>
</div>
   
<!--<p><img src="images/page.jpg" alt="gamba1" width="306" height="240"><img src="images/Picture5.jpg" alt="gamba2" width="319" height="239"> <img src="images/Picture6.jpg" alt="gamba3" width="329" height="238"></p>-->
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>Nowadays, the hostel application process of Kolej Islam &amp; Sains Teknologi is still being handled manually. Some of the problem faced by student are difficulty of getting the hostel application form and sending back the form during fixed time. Futhermore, felo had to calculate marks of hostel application form manually and the calculating process spent a lot of time to proceed the hostel application form. Based on that problem , the Web-Based Hostel Application System for Kolej Islam &amp; Sains Teknologi has been developed which replaced the manual hostel application. The main purpose of the system is to provide the online application service to the student. Beside that, this system also include hostel booking and hostel appealing. The system is able to develop a well designed by implementing calculating process for hostel application.Hopefully , this system can be implement and will give an alternative for student to submit their application form by using website application.</p>
<p>&nbsp;</p>
<p><strong>Kolej IbnuSina</strong></p>
<p>The College is located 1.7 kilometers from the city downtown. This college provides accommodation to over 1,800 students. Each unit capable of giving comfort to 5 students. It also provides all the facilities required by the first year students to face campus life.</p>
<p><strong>Kolej Albiruni</strong></p>
<p>The College is located 5 km from the city downtown. This college provides accommodation to over 1,800 students. Each unit capable of giving comfort to 5 students. Equipped with furniture that provide comfort to the students live in campus life.  It also provides all the facilities required by the first year students to face campus life.</p>
</div>
</div>

</div>
<!-- #container -->

<div id="footer">
	<p> Design by Mohamad Afif & Siti Hajar </p>	
</div>


</body>





</html>