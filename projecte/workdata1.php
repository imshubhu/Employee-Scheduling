<?php
error_reporting(0);
$con = mysql_connect("localhost","root","");
mysql_select_db("employescheduling",$con);

$company = $_POST["company"];
$projectt = $_POST["projectt"];
$projectc = $_POST["projectc"];
$projecti = $_POST["projecti"];
$other = $_POST["other"];


$str = "insert into workdata(company,projectt,projectc,projecti,other) values('$company','$projectt','$projectc','$projecti','$other')";
echo $str;
mysql_query($str);

echo "record inserted.";
header("location:report.php")
	
?>