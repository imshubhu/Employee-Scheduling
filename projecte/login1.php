<?php

error_reporting(0);
$con=mysql_connect("localhost","root","");
mysql_select_db("empsechedule",$con);

$username=$_POST["username"];
$password=$_POST["password"];

$q= "select *from adminlogin where username='$username' and password='$password' ";
echo $q;

$query=mysql_query($q);
$no=mysql_num_rows($query);

if($no==0)
{
	header("location:membersarea1.php");
}
else
{
header("location:membersarea.php");
}

?>