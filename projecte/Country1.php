<?php
error_reporting(0);
$con = mysql_connect("localhost","root","");
mysql_select_db("employescheduling",$con);

$state = $_POST["stateid"];
$city = $_POST["cityid"];
$area = $_POST["countryname"];

$str = "insert into countrymaster(stateid,cityid,countryname) values($state,$city,'$country')";
echo $str;
mysql_query($str);

echo "record inserted.";
header("location:country.php")
	
?>