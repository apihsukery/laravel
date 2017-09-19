<?php
include('connect.php');
session_start();
//view selected id
$num=$_GET['Number'];
$result = mysql_query("SELECT * FROM user WHERE stuNum='$num'" );
$permohonan = mysql_query("SELECT * FROM permohonan WHERE stuNum='$num'" );

// make sure user is logged in
if (!$_SESSION['name']) {
    $loginError = "You are not logged in.";
    header("location:indexLogin.php");
 }

$rec = mysql_fetch_array($result);
$check = mysql_fetch_array($permohonan);
?>

<html>

<head>

<script>

function caps(id){
    document.getElementById(id).value = document.getElementById(id).value.toUpperCase();
}

function checkf(id){
   	if(document.getElementById(id).value =="DIED"){
   		document.permohonan.fsal.value=="0"
   		document.permohonan.fjob.value=="-"
   	}
}
function checkm(id){
   	if(document.getElementById(id).value =="DIED"){
   		document.permohonan.msal.value=="0"
   		document.permohonan.mjob.value=="-"
   	}
}


</script>


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
<?php
if($check)
{ ?>
	<center><h2>You already apply the college<br>Please wait for your result</h2></center>
<?php
}
else 
{
	?>
<form name="permohonan" action="processPermohonan.php" method="post">

<p><font color="red">Please fill this form carefully. After you submit, you cannot edit this form.</font></p>

<fieldset>	
<legend><h2>Student Infomation</h2></legend>	
<table border="0" width="100%">
	<tr>
		<td width="23%">Student Number</td>
		<td width="77%">:<input name="stuNum" type="text" value="<?php echo $rec['stuNum'];?>" size="45" required></td>
	</tr>	
	<tr>
		<td>Name</td>
		<td>:<input name="name" type="text" value="<?php echo $rec['name'];?>" size="45" id="text" onBlur="caps(this.id)" required></td>
	</tr>	
	<tr>
		<td>IC Number</td>
		<td>:<input name="ic" type="text" value="<?php echo $rec['ic'];?>" size="45" required></td>
	</tr>
	<tr>
		<td>Program</td>
		<td>:<select name="prog" required>
				<option value="">Please choose your program</option>
				<option value="KEJURURAWATAN">KEJURURAWATAN</option>
				<option value="PEMBANTU PERUBATAN">PEMBANTU PERUBATAN</option>
				<option value="DIAGNOSTIC RADIOGRAFI">DIAGNOSTIC RADIOGRAFI</option>
				<option value="SAINS SENAMAN & SUKAN">SAINS SENAMAN & SUKAN</option>
                <option value="TEKNOLOGI MAKMAL PERUBATAN">TEKNOLOGI MAKMAL PERUBATAN</option>
                <option value="KESIHATAN PERSEKITARAN">KESIHATAN PERSEKITARAN</option>
                <option value="PEMBANTU KESIHATAN AWAM">PEMBANTU KESIHATAN AWAM</option>
                <option value="TERAPI CARA KERJA">TERAPI CARA KERJA</option>
                <option value="PEMBANTU FARMASI">PEMBANTU FARMASI</option>
                <option value="FISIOTERAPI">FISIOTERAPI</option>
                <option value="RADIOTERAPI">RADIOTERAPI</option>
                <option value="TEKNOLOGI KARDIOVASKULAR">TEKNOLOGI KARDIOVASKULAR</option>
                <option value="ORTOTIK & PROSTETIK">ORTOTIK & PROSTETIK</option>
                <option value="MEDIKAL INFORMATIK">MEDIKAL INFORMATIK</option>
                
			
			</select>
		</td>
	</tr>
	<tr>
		<td>Phone Number</td>
		<td>:<input name="PhoneNum" type="text" size="45" required></td>
	</tr>
	<tr>
		<td>Semester</td>
		<td>:<select name="sem" required>
				<option value="">Please choose your semester</option>
				<option value="1">1</option>
				<option value="2">2</option>
				<option value="3">3</option>
				<option value="4">4</option>
				<option value="5">5</option>
				<option value="6">6</option>
				<option value="7">7</option>
				<option value="8">8</option>
			</select>
		</td>
	</tr>
	<tr>
		<td>Gender</td>
		<td>:<input name="gender" type="radio" value="MALE" required>Male<input name="gender" type="radio" value="FEMALE">Female</td>
	</tr>
</table>
</fieldset>
<br><br>
<fieldset>
<legend><h2>Parent Information</h2></legend>
<table border="0" width="100%">
	<tr>
		<td width="23%">Father Name</td>
		<td width="77%">:<input name="fname" type="text" size="45" id="fntext" onBlur="caps(this.id)" required></td>
	</tr>	
	<tr>
		<td>Father Status</td>
		<td>:<select name="fstatus" id="listStatus" onChange="checkf(this.id)" required>
				<option value="STILL ALIVE">STILL ALIVE</option>
				<option value="DIED">DIED</option>
				<option value="RETIRED">RETIRED</option>
			</select>
		</td>
	</tr>
	<tr>
		<td>Father Job</td>
		<td>:<input name="fjob" type="text" size="45" id="fjtext" onBlur="caps(this.id)"><font><br>*Ignore this form if Father died</font></td>
	</tr>
	<tr>
		<td>Father Salary</td>
		<td>:RM<input name="fsal" type="text" size="41"><font><br>*Ignore this form if Father died</font></td>
	</tr>
	<tr>
		<td>Mother Name</td>
		<td>:<input name="mname" type="text" size="45" id="mntext" onBlur="caps(this.id)" required></td>
	</tr>	
	<tr>
		<td>Mother Status</td>
		<td>:<select name="mstatus" id="mlistStatus" onChange="checkm(this.id)" required>
				<option value="STILL ALIVE">STILL ALIVE</option>
				<option value="DIED">DIED</option>
				<option value="RETIRED">RETIRED</option>
			</select>
		</td>
	</tr>
	<tr>
		<td>Mother Job</td>
		<td>:<input name="mjob" type="text" size="45" id="mjtext" onBlur="caps(this.id)"><font><br>*Ignore this form if Mother died</font></td>
	</tr>
	<tr>
		<td>Mother Salary</td>
		<td>:RM<input name="msal" type="text" size="41"><font><br>*Ignore this form if Mother died</font></td>
	</tr>
	<tr>
		<td>Address</td>
		<td>:<input name="addr" type="text" size="45" id="addrtext" onBlur="caps(this.id)" required></td>
	</tr>
	<tr>
		<td>Poscode</td>
		<td>:<input name="poscode" type="text" size="5" required></td>
	</tr>
	<tr>
		<td>City</td>
		<td>:<input name="city" type="text" size="45" id="citytext" onBlur="caps(this.id)" required></td>
	</tr>
	<tr>
		<td>State</td>
		<td>:<select name="state" required>
				<option value="">Please choose state</option>
				<option value="JOHOR">JOHOR</option>
              <option value="MELAKA">MELAKA</option>
              <option value="NEGERI SEMBILAN">NEGERI SEMBILAN</option>
              <option value="PERAK">PERAK</option>
              <option value="KEDAH">KEDAH</option>
              <option value="PERLIS">PERLIS</option>
              <option value="PAHANG">PAHANG</option>
              <option value="TERENGGANU">TERENGGANU</option>
              <option value="KELANTAN">KELANTAN</option>
              <option value="SARAWAK">SARAWAK</option>
              <option value="SABAH">SABAH</option>
              <option value="SELANGOR">SELANGOR</option>
              <option value="WILAYAH PERSEKUTUAN">WILAYAH PERSEKUTUAN</option>
			</select>
		</td>
	</tr>
	
    
    
    
</table>
</fieldset>
<br><br>
<fieldset>
<legend><h2>Tangunggan</h2></legend>
<table border="0" width="100%">
	<tr>
		<td width="23%">Child</td>
		<td>:<select name="child" required>
				<option value="1">1</option>
				<option value="2">2</option>
				<option value="3">3</option>
				<option value="4">4</option>
				<option value="5">5</option>
				<option value="6">6</option>
				<option value="7">7</option>
				<option value="8">8</option>
				<option value="9">9</option>
				<option value="10">10</option>
				<option value="More than 10">More than 10</option>
			</select>
		</td>
	</tr>
	<tr>
		<td width="23%">IPTA</td>
		<td>:<select name="ipta">
				<option value="0">0</option>
				<option value="1">1</option>
				<option value="2">2</option>
				<option value="3">3</option>
				<option value="4">4</option>
				<option value="5">5</option>
				<option value="6">6</option>
				<option value="7">7</option>
				<option value="8">8</option>
				<option value="9">9</option>
				<option value="10">10</option>
				<option value="More than 10">More than 10</option>
			</select>
		</td>
	</tr>
	<tr>
		<td width="23%">IPTS</td>
		<td>:<select name="ipts">
				<option value="0">0</option>
				<option value="1">1</option>
				<option value="2">2</option>
				<option value="3">3</option>
				<option value="4">4</option>
				<option value="5">5</option>
				<option value="6">6</option>
				<option value="7">7</option>
				<option value="8">8</option>
				<option value="9">9</option>
				<option value="10">10</option>
				<option value="More than 10">More than 10</option>
			</select>
		</td>
	</tr>
	<tr>
		<td width="23%">High School</td>
		<td>:<select name="hs">
				<option value="0">0</option>
				<option value="1">1</option>
				<option value="2">2</option>
				<option value="3">3</option>
				<option value="4">4</option>
				<option value="5">5</option>
				<option value="6">6</option>
				<option value="7">7</option>
				<option value="8">8</option>
				<option value="9">9</option>
				<option value="10">10</option>
				<option value="More than 10">More than 10</option>
			</select>
		</td>
	</tr>
	<tr>
		<td width="23%">Primary School</td>
		<td>:<select name="ps">
				<option value="0">0</option>
				<option value="1">1</option>
				<option value="2">2</option>
				<option value="3">3</option>
				<option value="4">4</option>
				<option value="5">5</option>
				<option value="6">6</option>
				<option value="7">7</option>
				<option value="8">8</option>
				<option value="9">9</option>
				<option value="10">10</option>
				<option value="More than 10">More than 10</option>
			</select>
		</td>
	</tr>
	<tr>
		<td width="23%">Pra School</td>
		<td>:<select name="pras">
				<option value="0">0</option>
				<option value="1">1</option>
				<option value="2">2</option>
				<option value="3">3</option>
				<option value="4">4</option>
				<option value="5">5</option>
				<option value="6">6</option>
				<option value="7">7</option>
				<option value="8">8</option>
				<option value="9">9</option>
				<option value="10">10</option>
				<option value="More than 10">More than 10</option>
			</select>
		</td>
	</tr>
	<tr>
		<td width="23%">Not School</td>
		<td>:<select name="ns">
				<option value="0">0</option>
				<option value="1">1</option>
				<option value="2">2</option>
				<option value="3">3</option>
				<option value="4">4</option>
				<option value="5">5</option>
				<option value="6">6</option>
				<option value="7">7</option>
				<option value="8">8</option>
				<option value="9">9</option>
				<option value="10">10</option>
				<option value="More than 10">More than 10</option>
			</select>
		</td>
	</tr>
</table>
</fieldset>
<br><br>
<fieldset>
<legend><h2>Emergency</h2></legend>
<table border="0" width="100%">
	<tr>
		<td width="23%">Name</td>
		<td width="77%">:<input name="ename" type="text" size="45" id="entext" onBlur="caps(this.id)" required></td>
	</tr>
	<tr>
		<td>Phone Number</td>
		<td>:<input name="ePhoneNum" type="epntext" size="45" required></td>
	</tr>
	<tr>
		<td>Relationship</td>
		<td>:<select name="relationship">
				<option value="FATHER">FATHER</option>
				<option value="MOTHER">MOTHER</option>
				<option value="BROTHER">BROTHER</option>
				<option value="SISTER">SISTER</option>
				<option value="HUSBAND">HUSBAND</option>
				<option value="WIFE">WIFE</option>
				<option value="GRANDFATHER">GRANDFATHER</option>
				<option value="GRANDMOTHER">GRANDMOTHER</option>
				<option value="UNCLE">UNCLE</option>
				<option value="AUNTIE">AUNTIE</option>
				<option value="COUSIN">COUSIN</option>
			</select>
		</td>
	</tr>
</table>
</fieldset>
<br>
<input type="submit" name="sbmit" value="Send">
</form>
<?php
}
?>
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