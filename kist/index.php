<!DOCTYPE HTML>
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

   <div id="center_header" >
      <div id="left_header" >
         <img src="images/kist.png" alt="" />
      </div><!-- #left_header -->
	  
	  

	  
	  
      <div id="menu" >
				
				
			<div id="login">
				
				<table>
				<tr>
					<td><h1>Login</h1></td>
				</tr>
				
					<form name="login" method="post" action="loginProcess.php" onSubmit="return validate_form();">
					<tr>
						<td>Student/Stafff ID:</td>
						<td><input type="text" name="stuNum"></td>
					</tr>
					<tr>
						<td>Password:</td>
						<td><input type="password" name="pass"></td>
					</tr>
					<tr>
						<td colspan=2 align="center"><input type="Submit" name="sbmit" value="Login"></td>
					</tr>
					</form>
				</table>
				
			</div>		
    
		</div><!-- #menu -->

   </div><!-- #center_header -->
<!-- #header -->

<!-- #container -->
<div id="container">

<div class="menu">

<ul>
<li class="l1"><a href="#">Home</a></li>
<li class="l2"><a href="permohonan.php">College Application</a></li>
<li class="l3"><a href="result.php">Result Application</a></li>
<li class="l4"><a href="rayuan.php">Appeal College Application</a></li>
<li class="l5"><a href="contact.php">Contact Us</a></li>
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