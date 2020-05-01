<?php
error_reporting(0);
$con = mysql_connect("localhost","root","");
mysql_select_db("employescheduling",$con);

$name = $_POST["name"];
$email = $_POST["email"];
$mobile = $_POST["mobile"];
$subject = $_POST["subject"];
$message = $_POST["message"];

$str = "insert into feedback(name,email,mobileno,subject,message) values('$name','$email','$mobile','$subject','$message')";
echo $str;
mysql_query($str);

echo "record inserted.";
header("location:shubham.php")
	
?>