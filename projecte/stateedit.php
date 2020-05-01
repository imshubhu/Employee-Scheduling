<?php
	error_reporting(0);
	$con = mysql_connect("localhost","root","");
	mysql_select_db("employescheduling",$con);
$a=$_POST['statename'];
$q="update  state set statename='$a' where stateid=".$_GET['stateid'];
mysql_query($q);

header("location:state.php");
?>