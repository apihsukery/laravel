<!DOCTYPE HTML>
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
	  
	  

	  
	  
      <div id=menu >
				
				
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
<li class="l1"><a href="index.php">Home</a></li>
<li class="l2"><a href="permohonan.php">College Application</a></li>
<li class="l3"><a href="#">Result Application</a></li>
<li class="l4"><a href="rayuan.php">Appeal College Application</a></li>
<li class="l5"><a href="contact.php">Contact Us</a></li>
</ul>

</div>

<div class="bubble">
<div class="rectangleResult"><h2>Result Application</h2></div>
<div class="triangleResult-l"></div>
<div class="triangleResult-r"></div>
<div class="info">
<br><br><br><br><br><br><br>	<br><br><br>
<h2><center>Please login first!</center></h2>
<br><br><br><br><br><br><br>	<br><br><br><br><br>

</div>
</div>

</div>
<!-- #container -->

<div id="footer">
	<p> Design by Mohamad Afif & Siti Hajar </p>	
</div>

</body>





</html>