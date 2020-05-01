<?php
	error_reporting(0);
	$con = mysql_connect("localhost","root","");
	mysql_select_db("employescheduling",$con);
$a=$_POST['name'];
$q="update  countrymaster set countryname='$a' where countryid=".$_GET['countryid'];
mysql_query($q);

header("location:country.php");
?>