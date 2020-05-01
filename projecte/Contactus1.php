<?php
error_reporting(0);
$con = mysql_connect("localhost","root","");
mysql_select_db("employescheduling",$con);

$name = $_POST["name"];
$email = $_POST["email"];
$msubject = $_POST["msubject"];
$message = $_POST["message"];

$str = "insert into contact(name,email,msubject,message) values('$name','$email','$msubject','$message')";
echo $str;
mysql_query($str);

echo "record inserted.";
header("location:contact.php")
	
?>