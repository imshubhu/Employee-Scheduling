<?php 
session_start();
error_reporting(0);
$con=mysql_connect("localhost","root","");
mysql_select_db("employescheduling",$con);
$role = $_POST["role"];
$username = $_POST["username"];
$password = $_POST["password"];

if($role == 1)
{
$str = "Select * from login where username='$username' and password='$password'";
$str1 = mysql_query($str);
$no = mysql_num_rows($str1);
echo $no;
	if($no == 0)
	{
		header("location:login.php?msg=invalid");
	}
	else
	{
		header("location:admin.php");
	}
}
if($role == 2)
{
$str = "Select * from registration where username='$username' and password='$password'";

$str1 = mysql_query($str);
$no = mysql_num_rows($str1);
echo $no;
if($no == 0)
{
	header("location:login.php?msg=invalid");
}
else
{
$str = "select * from registration";
$result = mysql_query($str);
$row = mysql_fetch_array($result);
$fname = $row['firstname'];
$lname = $row['lastname'];
$uid = $row['userid'];
$_SESSION['username'] = $firstname."  ".$lastname;
$_SESSION['uid'] = $uid;
header("location:shubham.php");
}
}
?>