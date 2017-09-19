
<!DOCTYPE HTML>
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
	else if(document.login.icNum.value=="")
	{
		alert("Please fill IC Number");
		document.login.icNum.focus();
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
	  
	  

	  
	  
      <div id=menu >
				
				
			<div id=login>
				
				<table>
				<tr>
					<td><h1>Login</h1></td>
				</tr>	
				
					<form name="login" method="post" action="loginProcess.php" onSubmit="return validate_form();">
					<tr>
						<td>Student Number:</td>
						<td><input type="text" name="stuNum"></td>
					</tr>
					<tr>
						<td>Password</td>
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
<li class="l1"><a href="index.php">Home</a></li>
<li class="l2"><a href="permohonan.php">College Application</a></li>
<li class="l3"><a href="result.php">Result Application</a></li>
<li class="l4"><a href="rayuan.php">Appeal College Application</a></li>
<li class="l5"><a href="#">Contact Us</a></li>
</ul>

</div>

<div class="bubble">
<div class="rectangleContact"><h2>Contact Us</h2></div>
<div class="triangleContact-l"></div>
<div class="triangleContact-r"></div>
<div class="info">
<h2 align="center">Thanks for contacting us!</h2>

</div>
</div>

</div>
<!-- #container -->



</body>





</html>