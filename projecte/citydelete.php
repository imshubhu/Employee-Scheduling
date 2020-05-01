<?php
error_reporting(0);
	$con = mysql_connect("localhost","root","");
	mysql_select_db("employescheduling",$con);
$id=$_GET['cid'];
$a="delete from city where cid='$id'";
mysql_query($a);
header("location:city.php");
?>
