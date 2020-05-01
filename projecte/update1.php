<?php
error_reporting(0);
$con = mysql_connect("localhost","root","");
mysql_select_db("cleanindia",$con);


$First = $_POST["fname"];
$Last = $_POST["lname"];
$Address = $_POST["address"];
$State_Id = $_POST["state"];
$City_Id = $_POST["city"];
$Area_Id = $_POST["area"];
$Mobile = $_POST["mobile"];
$Email = $_POST["email"];
$Username = $_POST["uname"];
$Gender = $_POST["gender"];

$str = "insert into update(firstname, lastname, address, stateid, cityid, areaid, mobileno, email, username, gender) values('$First','$Last','$Address',$State_Id,$City_Id,$Area_Id,'$Mobile','$Email','$Username','$Gender')";

mysql_query($str);

echo "record inserted.";

header("location:update.php")

?>
