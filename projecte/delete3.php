<?php
error_reporting(0);
	$con = mysql_connect("localhost","root","");
	mysql_select_db("cleanindia",$con);
$id=$_GET['userid'];
$a="delete from postcomplain where userid='$id'";
mysql_query($a);
header("location:viewcomp.php");
?>
