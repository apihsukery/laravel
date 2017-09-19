<?php
include('connect.php');
session_start();
//view selected id
$num=$_GET['Number'];
$result = mysql_query("SELECT * FROM user WHERE stuNum='$num'" );
$permohonan = mysql_query("SELECT * FROM permohonan WHERE stuNum='$num'" );
$room2 = mysql_query("SELECT * FROM permohonan" );
$room3 = mysql_query("SELECT * FROM rayuan" );
$rayuan = mysql_query("SELECT * FROM rayuan WHERE stuNum='$num'" );

// make sure user is logged in
if (!$_SESSION['name']) {
    $loginError = "You are not logged in.";
    header("location:indexLogin.php");
 }

$rec = mysql_fetch_array($result);
$check = mysql_fetch_array($permohonan);
$check1 = mysql_fetch_array($rayuan);
$room = mysql_fetch_array($room2);
$room1 = mysql_fetch_array($room3);

$count=0;
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
<link href="css/lecturer.css" rel="stylesheet" type="text/css" />

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
<div class="rectangleResult"><h2>Kolej IbnuSina Floor 5</h2></div>
<div class="triangleResult-l"></div>
<div class="triangleResult-r"></div>
<div class="info">
<br><br><br><br><br><br><br>
<table align="center">
<tr><td>
<table border=1>
	<tr>
		<td><?php $count = mysql_query("SELECT * FROM permohonan WHERE roomNum='KI101'"); 
$num_rows = mysql_num_rows($count); 
					echo $$num_rows;
					if($$num_rows==6)
					{ echo FULL; }
					else{
						?>
					<a class="glidebutton" href="roomProcess.php?Number=<?php print($rec['stuNum']);?>&noBilik=KI101" onclick="return confirm('Are you sure to choose this room?');"><span data-text=" <?php echo $num_rows ,"/6";?> ">KI 101</span></a>
					<?php } ?>	</td>	
		<td>B</td>
		<td><?php $count = mysql_query("SELECT * FROM permohonan WHERE roomNum='KI102'"); 
$num_rows = mysql_num_rows($count); 
					echo $$num_rows;
					if($$num_rows==6)
					{ echo FULL; }
					else{
						?>
					<a class="glidebutton" href="roomProcess.php?Number=<?php print($rec['stuNum']);?>&noBilik=KI102" onclick="return confirm('Are you sure to choose this room?');"><span data-text=" <?php echo $num_rows ,"/6";?> ">KI 102</span></a>
					<?php } ?>	</td>	
	</tr>
	<tr>
		<td><?php $count = mysql_query("SELECT * FROM permohonan WHERE roomNum='KI103'"); 
$num_rows = mysql_num_rows($count); 
					echo $$num_rows;
					if($$num_rows==6)
					{ echo FULL; }
					else{
						?>
					<a class="glidebutton" href="roomProcess.php?Number=<?php print($rec['stuNum']);?>&noBilik=KI103" onclick="return confirm('Are you sure to choose this room?');"><span data-text=" <?php echo $num_rows ,"/6";?> ">KI 103</span></a>
					<?php } ?>	</td>		
		<td>L</td>
		<td><?php $count = mysql_query("SELECT * FROM permohonan WHERE roomNum='KI104'"); 
$num_rows = mysql_num_rows($count);  
					echo $$num_rows;
					if($$num_rows==6)
					{ echo FULL; }
					else{
						?>
					<a class="glidebutton" href="roomProcess.php?Number=<?php print($rec['stuNum']);?>&noBilik=KI104" onclick="return confirm('Are you sure to choose this room?');"><span data-text=" <?php echo $num_rows ,"/6";?> ">KI 104</span></a>
					<?php } ?>	</td>	
	</tr>
	<tr>
		<td><?php $count = mysql_query("SELECT * FROM permohonan WHERE roomNum='KI105'"); 
$num_rows = mysql_num_rows($count); 
					echo $$num_rows;
					if($$num_rows==6)
					{ echo FULL; }
					else{
						?>
					<a class="glidebutton" href="roomProcess.php?Number=<?php print($rec['stuNum']);?>&noBilik=KI105" onclick="return confirm('Are you sure to choose this room?');"><span data-text=" <?php echo $num_rows ,"/6";?> ">KI 105</span></a>
					<?php } ?>	</td>	
		<td>O</td>
		<td><?php $count = mysql_query("SELECT * FROM permohonan WHERE roomNum='KI106'"); 
$num_rows = mysql_num_rows($count); 
					echo $$num_rows;
					if($$num_rows==6)
					{ echo FULL; }
					else{
						?>
					<a class="glidebutton" href="roomProcess.php?Number=<?php print($rec['stuNum']);?>&noBilik=KI106" onclick="return confirm('Are you sure to choose this room?');"><span data-text=" <?php echo $num_rows ,"/6";?> ">KI 106</span></a>
					<?php } ?>	</td>	
	</tr>
	<tr>
		<td><?php $count = mysql_query("SELECT * FROM permohonan WHERE roomNum='KI107'"); 
$num_rows = mysql_num_rows($count);  
					echo $$num_rows;
					if($$num_rows==6)
					{ echo FULL; }
					else{
						?>
					<a class="glidebutton" href="roomProcess.php?Number=<?php print($rec['stuNum']);?>&noBilik=KI107" onclick="return confirm('Are you sure to choose this room?');"><span data-text=" <?php echo $num_rows ,"/6";?> ">KI 107</span></a>
					<?php } ?>	</td>	
		<td>C</td>
		<td><?php $count = mysql_query("SELECT * FROM permohonan WHERE roomNum='KI108'"); 
$num_rows = mysql_num_rows($count);  
					echo $$num_rows;
					if($$num_rows==6)
					{ echo FULL; }
					else{
						?>
					<a class="glidebutton" href="roomProcess.php?Number=<?php print($rec['stuNum']);?>&noBilik=KI108" onclick="return confirm('Are you sure to choose this room?');"><span data-text=" <?php echo $num_rows ,"/6";?> ">KI 108</span></a>
					<?php } ?>	</td>	
	</tr>
	<tr>
		<td><?php $count = mysql_query("SELECT * FROM permohonan WHERE roomNum='KI109'"); 
$num_rows = mysql_num_rows($count); 
					echo $$num_rows;
					if($$num_rows==6)
					{ echo FULL; }
					else{
						?>
					<a class="glidebutton" href="roomProcess.php?Number=<?php print($rec['stuNum']);?>&noBilik=KI109" onclick="return confirm('Are you sure to choose this room?');"><span data-text=" <?php echo $num_rows ,"/6";?> ">KI 109</span></a>
					<?php } ?>	</td>		
		<td>K</td>
		<td><?php $count = mysql_query("SELECT * FROM permohonan WHERE roomNum='KI110'"); 
$num_rows = mysql_num_rows($count);  
					echo $$num_rows;
					if($$num_rows==6)
					{ echo FULL; }
					else{
						?>
					<a class="glidebutton" href="roomProcess.php?Number=<?php print($rec['stuNum']);?>&noBilik=KI110" onclick="return confirm('Are you sure to choose this room?');"><span data-text=" <?php echo $num_rows ,"/6";?> ">KI 110</span></a>
					<?php } ?>	</td>	
	</tr>
	<tr>
		<td><?php $count = mysql_query("SELECT * FROM permohonan WHERE roomNum='KI111'"); 
$num_rows = mysql_num_rows($count);  
					echo $$num_rows;
					if($$num_rows==6)
					{ echo FULL; }
					else{
						?>
					<a class="glidebutton" href="roomProcess.php?Number=<?php print($rec['stuNum']);?>&noBilik=KI111" onclick="return confirm('Are you sure to choose this room?');"><span data-text=" <?php echo $num_rows ,"/6";?> ">KI 111</span></a>
					<?php } ?>	</td>	
		<td></td>
		<td><?php $count = mysql_query("SELECT * FROM permohonan WHERE roomNum='KI112'"); 
$num_rows = mysql_num_rows($count);  
					echo $$num_rows;
					if($$num_rows==6)
					{ echo FULL; }
					else{
						?>
					<a class="glidebutton" href="roomProcess.php?Number=<?php print($rec['stuNum']);?>&noBilik=KI112" onclick="return confirm('Are you sure to choose this room?');"><span data-text=" <?php echo $num_rows ,"/6";?> ">KI 112</span></a>
					<?php } ?>	</td>	
	</tr>
	<tr>
		<td><?php $count = mysql_query("SELECT * FROM permohonan WHERE roomNum='KI113'"); 
$num_rows = mysql_num_rows($count); 
					echo $$num_rows;
					if($$num_rows==6)
					{ echo FULL; }
					else{
						?>
					<a class="glidebutton" href="roomProcess.php?Number=<?php print($rec['stuNum']);?>&noBilik=KI113" onclick="return confirm('Are you sure to choose this room?');"><span data-text=" <?php echo $num_rows ,"/6";?> ">KI 113</span></a>
					<?php } ?>	</td>		
		<td>A</td>
		<td><?php $count = mysql_query("SELECT * FROM permohonan WHERE roomNum='KI114'"); 
$num_rows = mysql_num_rows($count);  
					echo $$num_rows;
					if($$num_rows==6)
					{ echo FULL; }
					else{
						?>
					<a class="glidebutton" href="roomProcess.php?Number=<?php print($rec['stuNum']);?>&noBilik=KI114" onclick="return confirm('Are you sure to choose this room?');"><span data-text=" <?php echo $num_rows ,"/6";?> ">KI 114</span></a>
					<?php } ?>	</td>	
	</tr>
	<tr>
		<td><?php $count = mysql_query("SELECT * FROM permohonan WHERE roomNum='KI115'"); 
$num_rows = mysql_num_rows($count);  
					echo $$num_rows;
					if($$num_rows==6)
					{ echo FULL; }
					else{
						?>
					<a class="glidebutton" href="roomProcess.php?Number=<?php print($rec['stuNum']);?>&noBilik=KI115" onclick="return confirm('Are you sure to choose this room?');"><span data-text=" <?php echo $num_rows ,"/6";?> ">KI 115</span></a>
					<?php } ?>	</td>		
		<td></td>
		<td><?php $count = mysql_query("SELECT * FROM permohonan WHERE roomNum='KI116'"); 
$num_rows = mysql_num_rows($count); 
					echo $$num_rows;
					if($$num_rows==6)
					{ echo FULL; }
					else{
						?>
					<a class="glidebutton" href="roomProcess.php?Number=<?php print($rec['stuNum']);?>&noBilik=KI116" onclick="return confirm('Are you sure to choose this room?');"><span data-text=" <?php echo $num_rows ,"/6";?> ">KI 116</span></a>
					<?php } ?>	</td>	
	</tr>
	<tr>
		<td><?php $count = mysql_query("SELECT * FROM permohonan WHERE roomNum='KI117'"); 
$num_rows = mysql_num_rows($count); 
					echo $$num_rows;
					if($$num_rows==6)
					{ echo FULL; }
					else{
						?>
					<a class="glidebutton" href="roomProcess.php?Number=<?php print($rec['stuNum']);?>&noBilik=KI117" onclick="return confirm('Are you sure to choose this room?');"><span data-text=" <?php echo $num_rows ,"/6";?> ">KI 117</span></a>
					<?php } ?>	</td>	
		<td></td>
		<td><?php $count = mysql_query("SELECT * FROM permohonan WHERE roomNum='KI118'"); 
$num_rows = mysql_num_rows($count);  
					echo $$num_rows;
					if($$num_rows==6)
					{ echo FULL; }
					else{
						?>
					<a class="glidebutton" href="roomProcess.php?Number=<?php print($rec['stuNum']);?>&noBilik=KI118" onclick="return confirm('Are you sure to choose this room?');"><span data-text=" <?php echo $num_rows ,"/6";?> ">KI 118</span></a>
					<?php } ?>	</td>	
	</tr>
	<tr>
		<td><?php $count = mysql_query("SELECT * FROM permohonan WHERE roomNum='KI119'"); 
$num_rows = mysql_num_rows($count);  
					echo $$num_rows;
					if($$num_rows==6)
					{ echo FULL; }
					else{
						?>
					<a class="glidebutton" href="roomProcess.php?Number=<?php print($rec['stuNum']);?>&noBilik=KI119" onclick="return confirm('Are you sure to choose this room?');"><span data-text=" <?php echo $num_rows ,"/6";?> ">KI 119</span></a>
					<?php } ?>	</td>		
		<td></td>
		<td><?php $count = mysql_query("SELECT * FROM permohonan WHERE roomNum='KI120'"); 
$num_rows = mysql_num_rows($count);  
					echo $$num_rows;
					if($$num_rows==6)
					{ echo FULL; }
					else{
						?>
					<a class="glidebutton" href="roomProcess.php?Number=<?php print($rec['stuNum']);?>&noBilik=KI120" onclick="return confirm('Are you sure to choose this room?');"><span data-text=" <?php echo $num_rows ,"/6";?> ">KI 120</span></a>
					<?php } ?>	</td>	
	</tr>


</table></td> <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
<td>
<table border=1 align="center">
	<tr>
		<td><?php $count = mysql_query("SELECT * FROM permohonan WHERE roomNum='KI121'"); 
$num_rows = mysql_num_rows($count);  
					echo $$num_rows;
					if($$num_rows==6)
					{ echo FULL; }
					else{
						?>
					<a class="glidebutton" href="roomProcess.php?Number=<?php print($rec['stuNum']);?>&noBilik=KI121" onclick="return confirm('Are you sure to choose this room?');"><span data-text=" <?php echo $num_rows ,"/6";?> ">KI 121</span></a>
					<?php } ?>	</td>	
		<td>B</td>
		<td><?php $count = mysql_query("SELECT * FROM permohonan WHERE roomNum='KI122'"); 
$num_rows = mysql_num_rows($count); 
					echo $$num_rows;
					if($$num_rows==6)
					{ echo FULL; }
					else{
						?>
					<a class="glidebutton" href="roomProcess.php?Number=<?php print($rec['stuNum']);?>&noBilik=KI122" onclick="return confirm('Are you sure to choose this room?');"><span data-text=" <?php echo $num_rows ,"/6";?> ">KI 122</span></a>
					<?php } ?>	</td>	
	</tr>
	<tr>
		<td><?php $count = mysql_query("SELECT * FROM permohonan WHERE roomNum='KI123'"); 
$num_rows = mysql_num_rows($count); 
					echo $$num_rows;
					if($$num_rows==6)
					{ echo FULL; }
					else{
						?>
					<a class="glidebutton" href="roomProcess.php?Number=<?php print($rec['stuNum']);?>&noBilik=KI123" onclick="return confirm('Are you sure to choose this room?');"><span data-text=" <?php echo $num_rows ,"/6";?> ">KI 123</span></a>
					<?php } ?>	</td>		
		<td>L</td>
		<td><?php $count = mysql_query("SELECT * FROM permohonan WHERE roomNum='KI124'"); 
$num_rows = mysql_num_rows($count);  
					echo $$num_rows;
					if($$num_rows==6)
					{ echo FULL; }
					else{
						?>
					<a class="glidebutton" href="roomProcess.php?Number=<?php print($rec['stuNum']);?>&noBilik=KI124" onclick="return confirm('Are you sure to choose this room?');"><span data-text=" <?php echo $num_rows ,"/6";?> ">KI 124</span></a>
					<?php } ?>	</td>	
	</tr>
	<tr>
		<td><?php $count = mysql_query("SELECT * FROM permohonan WHERE roomNum='KI125'"); 
$num_rows = mysql_num_rows($count);  
					echo $$num_rows;
					if($$num_rows==6)
					{ echo FULL; }
					else{
						?>
					<a class="glidebutton" href="roomProcess.php?Number=<?php print($rec['stuNum']);?>&noBilik=KI125" onclick="return confirm('Are you sure to choose this room?');"><span data-text=" <?php echo $num_rows ,"/6";?> ">KI 125</span></a>
					<?php } ?>	</td>	
		<td>O</td>
		<td><?php $count = mysql_query("SELECT * FROM permohonan WHERE roomNum='KI126'"); 
$num_rows = mysql_num_rows($count);  
					echo $$num_rows;
					if($$num_rows==6)
					{ echo FULL; }
					else{
						?>
					<a class="glidebutton" href="roomProcess.php?Number=<?php print($rec['stuNum']);?>&noBilik=KI126" onclick="return confirm('Are you sure to choose this room?');"><span data-text=" <?php echo $num_rows ,"/6";?> ">KI 126</span></a>
					<?php } ?>	</td>	
	</tr>
	<tr>
		<td><?php $count = mysql_query("SELECT * FROM permohonan WHERE roomNum='KI127'"); 
$num_rows = mysql_num_rows($count); 
					echo $$num_rows;
					if($$num_rows==6)
					{ echo FULL; }
					else{
						?>
					<a class="glidebutton" href="roomProcess.php?Number=<?php print($rec['stuNum']);?>&noBilik=KI127" onclick="return confirm('Are you sure to choose this room?');"><span data-text=" <?php echo $num_rows ,"/6";?> ">KI 127</span></a>
					<?php } ?>	</td>	
		<td>C</td>
		<td><?php $count = mysql_query("SELECT * FROM permohonan WHERE roomNum='KI128'"); 
$num_rows = mysql_num_rows($count); 
					echo $$num_rows;
					if($$num_rows==6)
					{ echo FULL; }
					else{
						?>
					<a class="glidebutton" href="roomProcess.php?Number=<?php print($rec['stuNum']);?>&noBilik=KI128" onclick="return confirm('Are you sure to choose this room?');"><span data-text=" <?php echo $num_rows ,"/6";?> ">KI 128</span></a>
					<?php } ?>	</td>	
	</tr>
	<tr>
		<td><?php $count = mysql_query("SELECT * FROM permohonan WHERE roomNum='KI129'"); 
$num_rows = mysql_num_rows($count);  
					echo $$num_rows;
					if($$num_rows==6)
					{ echo FULL; }
					else{
						?>
					<a class="glidebutton" href="roomProcess.php?Number=<?php print($rec['stuNum']);?>&noBilik=KI129" onclick="return confirm('Are you sure to choose this room?');"><span data-text=" <?php echo $num_rows ,"/6";?> ">KI 129</span></a>
					<?php } ?>	</td>		
		<td>K</td>
		<td><?php $count = mysql_query("SELECT * FROM permohonan WHERE roomNum='KI130'"); 
$num_rows = mysql_num_rows($count);  
					echo $$num_rows;
					if($$num_rows==6)
					{ echo FULL; }
					else{
						?>
					<a class="glidebutton" href="roomProcess.php?Number=<?php print($rec['stuNum']);?>&noBilik=KI130" onclick="return confirm('Are you sure to choose this room?');"><span data-text=" <?php echo $num_rows ,"/6";?> ">KI 130</span></a>
					<?php } ?>	</td>	
	</tr>
	<tr>
		<td><?php $count = mysql_query("SELECT * FROM permohonan WHERE roomNum='KI131'"); 
$num_rows = mysql_num_rows($count); 
					echo $$num_rows;
					if($$num_rows==6)
					{ echo FULL; }
					else{
						?>
					<a class="glidebutton" href="roomProcess.php?Number=<?php print($rec['stuNum']);?>&noBilik=KI131" onclick="return confirm('Are you sure to choose this room?');"><span data-text=" <?php echo $num_rows ,"/6";?> ">KI 131</span></a>
					<?php } ?>	</td>	
		<td></td>
		<td><?php $count = mysql_query("SELECT * FROM permohonan WHERE roomNum='KI132'"); 
$num_rows = mysql_num_rows($count);  
					echo $$num_rows;
					if($$num_rows==6)
					{ echo FULL; }
					else{
						?>
					<a class="glidebutton" href="roomProcess.php?Number=<?php print($rec['stuNum']);?>&noBilik=KI132" onclick="return confirm('Are you sure to choose this room?');"><span data-text=" <?php echo $num_rows ,"/6";?> ">KI 132</span></a>
					<?php } ?>	</td>	
	</tr>
	<tr>
		<td><?php $count = mysql_query("SELECT * FROM permohonan WHERE roomNum='KI133'"); 
$num_rows = mysql_num_rows($count); 
					echo $$num_rows;
					if($$num_rows==6)
					{ echo FULL; }
					else{
						?>
					<a class="glidebutton" href="roomProcess.php?Number=<?php print($rec['stuNum']);?>&noBilik=KI133" onclick="return confirm('Are you sure to choose this room?');"><span data-text=" <?php echo $num_rows ,"/6";?> ">KI 133</span></a>
					<?php } ?>	</td>		
		<td>B</td>
		<td><?php $count = mysql_query("SELECT * FROM permohonan WHERE roomNum='KI134'"); 
$num_rows = mysql_num_rows($count); 
					echo $$num_rows;
					if($$num_rows==6)
					{ echo FULL; }
					else{
						?>
					<a class="glidebutton" href="roomProcess.php?Number=<?php print($rec['stuNum']);?>&noBilik=KI134" onclick="return confirm('Are you sure to choose this room?');"><span data-text=" <?php echo $num_rows ,"/6";?> ">KI 134</span></a>
					<?php } ?>	</td>	
	</tr>
	<tr>
		<td><?php $count = mysql_query("SELECT * FROM permohonan WHERE roomNum='KI135'"); 
$num_rows = mysql_num_rows($count); 
					echo $$num_rows;
					if($$num_rows==6)
					{ echo FULL; }
					else{
						?>
					<a class="glidebutton" href="roomProcess.php?Number=<?php print($rec['stuNum']);?>&noBilik=KI135" onclick="return confirm('Are you sure to choose this room?');"><span data-text=" <?php echo $num_rows ,"/6";?> ">KI 135</span></a>
					<?php } ?>	</td>		
		<td></td>
		<td><?php $count = mysql_query("SELECT * FROM permohonan WHERE roomNum='KI136'"); 
$num_rows = mysql_num_rows($count); 
					echo $$num_rows;
					if($$num_rows==6)
					{ echo FULL; }
					else{
						?>
					<a class="glidebutton" href="roomProcess.php?Number=<?php print($rec['stuNum']);?>&noBilik=KI136" onclick="return confirm('Are you sure to choose this room?');"><span data-text=" <?php echo $num_rows ,"/6";?> ">KI 136</span></a>
					<?php } ?>	</td>	
	</tr>
	<tr>
		<td><?php $count = mysql_query("SELECT * FROM permohonan WHERE roomNum='KI137'"); 
$num_rows = mysql_num_rows($count); 
					echo $$num_rows;
					if($$num_rows==6)
					{ echo FULL; }
					else{
						?>
					<a class="glidebutton" href="roomProcess.php?Number=<?php print($rec['stuNum']);?>&noBilik=KI137" onclick="return confirm('Are you sure to choose this room?');"><span data-text=" <?php echo $num_rows ,"/6";?> ">KI 137</span></a>
					<?php } ?>	</td>	
		<td></td>
		<td><?php $count = mysql_query("SELECT * FROM permohonan WHERE roomNum='KI138'"); 
$num_rows = mysql_num_rows($count); 
					echo $$num_rows;
					if($$num_rows==6)
					{ echo FULL; }
					else{
						?>
					<a class="glidebutton" href="roomProcess.php?Number=<?php print($rec['stuNum']);?>&noBilik=KI138" onclick="return confirm('Are you sure to choose this room?');"><span data-text=" <?php echo $num_rows ,"/6";?> ">KI 138</span></a>
					<?php } ?>	</td>	
	</tr>
	<tr>
		<td><?php $count = mysql_query("SELECT * FROM permohonan WHERE roomNum='KI139'"); 
$num_rows = mysql_num_rows($count); 
					echo $$num_rows;
					if($$num_rows==6)
					{ echo FULL; }
					else{
						?>
					<a class="glidebutton" href="roomProcess.php?Number=<?php print($rec['stuNum']);?>&noBilik=KI139" onclick="return confirm('Are you sure to choose this room?');"><span data-text=" <?php echo $num_rows ,"/6";?> ">KI 139</span></a>
					<?php } ?>	</td>		
		<td></td>
		<td><?php $count = mysql_query("SELECT * FROM permohonan WHERE roomNum='KI140'"); 
$num_rows = mysql_num_rows($count); 
					echo $$num_rows;
					if($$num_rows==6)
					{ echo FULL; }
					else{
						?>
					<a class="glidebutton" href="roomProcess.php?Number=<?php print($rec['stuNum']);?>&noBilik=KI140" onclick="return confirm('Are you sure to choose this room?');"><span data-text=" <?php echo $num_rows ,"/6";?> ">KI 140</span></a>
					<?php } ?>	</td>	
	</tr>
	

</table></td>  <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
<td>
<table border=1 align="right">
	<tr>
		<td><?php $count = mysql_query("SELECT * FROM permohonan WHERE roomNum='KI141'"); 
$num_rows = mysql_num_rows($count); 
					echo $$num_rows;
					if($$num_rows==6)
					{ echo FULL; }
					else{
						?>
					<a class="glidebutton" href="roomProcess.php?Number=<?php print($rec['stuNum']);?>&noBilik=KI141" onclick="return confirm('Are you sure to choose this room?');"><span data-text=" <?php echo $num_rows ,"/6";?> ">KI 141</span></a>
					<?php } ?>	</td>	
		<td>B</td>
		<td><?php $count = mysql_query("SELECT * FROM permohonan WHERE roomNum='KI142'"); 
$num_rows = mysql_num_rows($count);  
					echo $$num_rows;
					if($$num_rows==6)
					{ echo FULL; }
					else{
						?>
					<a class="glidebutton" href="roomProcess.php?Number=<?php print($rec['stuNum']);?>&noBilik=KI142" onclick="return confirm('Are you sure to choose this room?');"><span data-text=" <?php echo $num_rows ,"/6";?> ">KI 142</span></a>
					<?php } ?>	</td>	
	</tr>
	<tr>
		<td><?php $count = mysql_query("SELECT * FROM permohonan WHERE roomNum='KI143'"); 
$num_rows = mysql_num_rows($count); 
					echo $$num_rows;
					if($$num_rows==6)
					{ echo FULL; }
					else{
						?>
					<a class="glidebutton" href="roomProcess.php?Number=<?php print($rec['stuNum']);?>&noBilik=KI143" onclick="return confirm('Are you sure to choose this room?');"><span data-text=" <?php echo $num_rows ,"/6";?> ">KI 143</span></a>
					<?php } ?>	</td>		
		<td>L</td>
		<td><?php $count = mysql_query("SELECT * FROM permohonan WHERE roomNum='KI144'"); 
$num_rows = mysql_num_rows($count); 
					echo $$num_rows;
					if($$num_rows==6)
					{ echo FULL; }
					else{
						?>
					<a class="glidebutton" href="roomProcess.php?Number=<?php print($rec['stuNum']);?>&noBilik=KI144" onclick="return confirm('Are you sure to choose this room?');"><span data-text=" <?php echo $num_rows ,"/6";?> ">KI 144</span></a>
					<?php } ?>	</td>	
	</tr>
	<tr>
		<td><?php $count = mysql_query("SELECT * FROM permohonan WHERE roomNum='KI101'"); 
$num_rows = mysql_num_rows($count);  
					echo $$num_rows;
					if($$num_rows==6)
					{ echo FULL; }
					else{
						?>
					<a class="glidebutton" href="roomProcess.php?Number=<?php print($rec['stuNum']);?>&noBilik=KI101" onclick="return confirm('Are you sure to choose this room?');"><span data-text=" <?php echo $num_rows ,"/6";?> ">KI 101</span></a>
					<?php } ?>	</td>	
		<td>O</td>
		<td><?php $count = mysql_query("SELECT * FROM permohonan WHERE roomNum='KI101'"); 
$num_rows = mysql_num_rows($count); 
					echo $$num_rows;
					if($$num_rows==6)
					{ echo FULL; }
					else{
						?>
					<a class="glidebutton" href="roomProcess.php?Number=<?php print($rec['stuNum']);?>&noBilik=KI101" onclick="return confirm('Are you sure to choose this room?');"><span data-text=" <?php echo $num_rows ,"/6";?> ">KI 101</span></a>
					<?php } ?>	</td>	
	</tr>
	<tr>
		<td><?php $count = mysql_query("SELECT * FROM permohonan WHERE roomNum='KI101'"); 
$num_rows = mysql_num_rows($count); 
					echo $$num_rows;
					if($$num_rows==6)
					{ echo FULL; }
					else{
						?>
					<a class="glidebutton" href="roomProcess.php?Number=<?php print($rec['stuNum']);?>&noBilik=KI101" onclick="return confirm('Are you sure to choose this room?');"><span data-text=" <?php echo $num_rows ,"/6";?> ">KI 101</span></a>
					<?php } ?>	</td>	
		<td>C</td>
		<td><?php $count = mysql_query("SELECT * FROM permohonan WHERE roomNum='KI101'"); 
$num_rows = mysql_num_rows($count);  
					echo $$num_rows;
					if($$num_rows==6)
					{ echo FULL; }
					else{
						?>
					<a class="glidebutton" href="roomProcess.php?Number=<?php print($rec['stuNum']);?>&noBilik=KI101" onclick="return confirm('Are you sure to choose this room?');"><span data-text=" <?php echo $num_rows ,"/6";?> ">KI 101</span></a>
					<?php } ?>	</td>	
	</tr>
	<tr>
		<td><?php $count = mysql_query("SELECT * FROM permohonan WHERE roomNum='KI101'"); 
$num_rows = mysql_num_rows($count); 
					echo $$num_rows;
					if($$num_rows==6)
					{ echo FULL; }
					else{
						?>
					<a class="glidebutton" href="roomProcess.php?Number=<?php print($rec['stuNum']);?>&noBilik=KI101" onclick="return confirm('Are you sure to choose this room?');"><span data-text=" <?php echo $num_rows ,"/6";?> ">KI 101</span></a>
					<?php } ?>	</td>		
		<td>K</td>
		<td><?php $count = mysql_query("SELECT * FROM permohonan WHERE roomNum='KI101'"); 
$num_rows = mysql_num_rows($count); 
					echo $$num_rows;
					if($$num_rows==6)
					{ echo FULL; }
					else{
						?>
					<a class="glidebutton" href="roomProcess.php?Number=<?php print($rec['stuNum']);?>&noBilik=KI101" onclick="return confirm('Are you sure to choose this room?');"><span data-text=" <?php echo $num_rows ,"/6";?> ">KI 101</span></a>
					<?php } ?>	</td>	
	</tr>
	<tr>
		<td><?php $count = mysql_query("SELECT * FROM permohonan WHERE roomNum='KI101'"); 
$num_rows = mysql_num_rows($count);  
					echo $$num_rows;
					if($$num_rows==6)
					{ echo FULL; }
					else{
						?>
					<a class="glidebutton" href="roomProcess.php?Number=<?php print($rec['stuNum']);?>&noBilik=KI101" onclick="return confirm('Are you sure to choose this room?');"><span data-text=" <?php echo $num_rows ,"/6";?> ">KI 101</span></a>
					<?php } ?>	</td>	
		<td></td>
		<td><?php $count = mysql_query("SELECT * FROM permohonan WHERE roomNum='KI101'"); 
$num_rows = mysql_num_rows($count); 
					echo $$num_rows;
					if($$num_rows==6)
					{ echo FULL; }
					else{
						?>
					<a class="glidebutton" href="roomProcess.php?Number=<?php print($rec['stuNum']);?>&noBilik=KI101" onclick="return confirm('Are you sure to choose this room?');"><span data-text=" <?php echo $num_rows ,"/6";?> ">KI 101</span></a>
					<?php } ?>	</td>	
	</tr>
	<tr>
		<td><?php $count = mysql_query("SELECT * FROM permohonan WHERE roomNum='KI101'"); 
$num_rows = mysql_num_rows($count);  
					echo $$num_rows;
					if($$num_rows==6)
					{ echo FULL; }
					else{
						?>
					<a class="glidebutton" href="roomProcess.php?Number=<?php print($rec['stuNum']);?>&noBilik=KI101" onclick="return confirm('Are you sure to choose this room?');"><span data-text=" <?php echo $num_rows ,"/6";?> ">KI 101</span></a>
					<?php } ?>	</td>		
		<td>C</td>
		<td><?php $count = mysql_query("SELECT * FROM permohonan WHERE roomNum='KI101'"); 
$num_rows = mysql_num_rows($count);  
					echo $$num_rows;
					if($$num_rows==6)
					{ echo FULL; }
					else{
						?>
					<a class="glidebutton" href="roomProcess.php?Number=<?php print($rec['stuNum']);?>&noBilik=KI101" onclick="return confirm('Are you sure to choose this room?');"><span data-text=" <?php echo $num_rows ,"/6";?> ">KI 101</span></a>
					<?php } ?>	</td>	
	</tr>
	<tr>
		<td><?php $count = mysql_query("SELECT * FROM permohonan WHERE roomNum='KI101'"); 
$num_rows = mysql_num_rows($count);  
					echo $$num_rows;
					if($$num_rows==6)
					{ echo FULL; }
					else{
						?>
					<a class="glidebutton" href="roomProcess.php?Number=<?php print($rec['stuNum']);?>&noBilik=KI101" onclick="return confirm('Are you sure to choose this room?');"><span data-text=" <?php echo $num_rows ,"/6";?> ">KI 101</span></a>
					<?php } ?>	</td>		
		<td></td>
		<td><?php $count = mysql_query("SELECT * FROM permohonan WHERE roomNum='KI101'"); 
$num_rows = mysql_num_rows($count);  
					echo $$num_rows;
					if($$num_rows==6)
					{ echo FULL; }
					else{
						?>
					<a class="glidebutton" href="roomProcess.php?Number=<?php print($rec['stuNum']);?>&noBilik=KI101" onclick="return confirm('Are you sure to choose this room?');"><span data-text=" <?php echo $num_rows ,"/6";?> ">KI 101</span></a>
					<?php } ?>	</td>	
	</tr>
	<tr>
		<td><?php $count = mysql_query("SELECT * FROM permohonan WHERE roomNum='KI101'"); 
$num_rows = mysql_num_rows($count);  
					echo $$num_rows;
					if($$num_rows==6)
					{ echo FULL; }
					else{
						?>
					<a class="glidebutton" href="roomProcess.php?Number=<?php print($rec['stuNum']);?>&noBilik=KI101" onclick="return confirm('Are you sure to choose this room?');"><span data-text=" <?php echo $num_rows ,"/6";?> ">KI 101</span></a>
					<?php } ?>	</td>	
		<td></td>
		<td><?php $count = mysql_query("SELECT * FROM permohonan WHERE roomNum='KI101'"); 
$num_rows = mysql_num_rows($count);  
					echo $$num_rows;
					if($$num_rows==6)
					{ echo FULL; }
					else{
						?>
					<a class="glidebutton" href="roomProcess.php?Number=<?php print($rec['stuNum']);?>&noBilik=KI101" onclick="return confirm('Are you sure to choose this room?');"><span data-text=" <?php echo $num_rows ,"/6";?> ">KI 101</span></a>
					<?php } ?>	</td>	
	</tr>
	<tr>
		<td><?php $count = mysql_query("SELECT * FROM permohonan WHERE roomNum='KI101'"); 
$num_rows = mysql_num_rows($count);  
					echo $$num_rows;
					if($$num_rows==6)
					{ echo FULL; }
					else{
						?>
					<a class="glidebutton" href="roomProcess.php?Number=<?php print($rec['stuNum']);?>&noBilik=KI101" onclick="return confirm('Are you sure to choose this room?');"><span data-text=" <?php echo $num_rows ,"/6";?> ">KI 101</span></a>
					<?php } ?>	</td>		
		<td></td>
		<td><?php $count = mysql_query("SELECT * FROM permohonan WHERE roomNum='KI101'"); 
$num_rows = mysql_num_rows($count); 
					echo $$num_rows;
					if($$num_rows==6)
					{ echo FULL; }
					else{
						?>
					<a class="glidebutton" href="roomProcess.php?Number=<?php print($rec['stuNum']);?>&noBilik=KI101" onclick="return confirm('Are you sure to choose this room?');"><span data-text=" <?php echo $num_rows ,"/6";?> ">KI 101</span></a>
					<?php } ?>	</td>	
	</tr>
	

</table></td></tr>
</table>

<br><br><br>
<table align="center">
	<tr>
		<td>FLOOR</td>
		<td><a href="floor1KA.php?Number=<?php echo $rec['stuNum'];?>"/><img src="images/1.png" /></td>
		<td><a href="floor2KA.php?Number=<?php echo $rec['stuNum'];?>"/><img src="images/2.png" /></td>
		<td><a href="floor3KA.php?Number=<?php echo $rec['stuNum'];?>"/><img src="images/3.png" /></td>
		<td><a href="floor4KA.php?Number=<?php echo $rec['stuNum'];?>"/><img src="images/4.png" /></td>
		<td><a href="floor5KA.php?Number=<?php echo $rec['stuNum'];?>"/><img src="images/5.png" /></td>
	</tr>
</table>
<br><br><br><br><br><br><br><br>


</div>
</div>

</div>
<!-- #container -->

<div id="footer">
	<p> Design by Mohamad Afif & Siti Hajar </p>	
</div>

</body>





</html>