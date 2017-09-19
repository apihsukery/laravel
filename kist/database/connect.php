<?php
error_reporting(E_ALL ^ E_DEPRECATED);
//connection to mySQL
$host="mysql.hostinger.my";
$username="u887268472_kist";
$password="u887268472_kist";


$link = mysql_connect($host,$username,$password)or die("Could not connect");
//connection to database
$db = mysql_select_db("u887268472_kist", $link)or die("Could not select database");
?>