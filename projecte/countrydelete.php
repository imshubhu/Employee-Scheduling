<?php
error_reporting(0);
	$con = mysql_connect("localhost","root","");
	mysql_select_db("employescheduling",$con);
$id=$_GET['countryid'];
$a="delete from countrymaster where countryid='$id'";
mysql_query($a);
header("location:country.php");
?>
