<?php
session_start();
include("../connection.php");
if(isset($_SESSION['student'])){




?>


<?php
include("../connection.php");
?>


<!DOCTYPE HTML>
<html>

<head>

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
         <a href=home.html>Home</a>
         
      </div><!-- #menu -->

   </div><!-- #center_header -->
<!-- #header -->

<!-- #container -->
<div id="container">

<div class="menu">
<ul>
<li class="l1"><a href="#">Home</a></li>
<li class="l2"><a href="permohonan.php">Permohonan Kolej</a></li>
<li class="l3"><a href="#">Keputusan Kolej</a></li>
</ul>

</div>

<div class="bubble">
<div class="rectangle"><h2>Home</h2></div>
<div class="triangle-l"></div>
<div class="triangle-r"></div>
<div class="info">
<h2>Permohonan dihantar

<input name="button" type="button" class="cange_button" id="button" value="Close" onclick="CloseAndRefresh()" /></p>
</div>
</div>

</div>
<!-- #container -->



</body>





</html>


<?php

}

else

	header("Location:../index.php");
?>
