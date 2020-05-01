<?php
error_reporting(0);
$con = mysql_connect("localhost","root","");
mysql_select_db("employescheduling",$con);


$First = $_POST["firstname"];
$Last = $_POST["lastname"];
$Address = $_POST["address"];
$Email = $_POST["email"];
$Country_Id = $_POST["country"];
$State_Id = $_POST["state"];
$City_Id = $_POST["city"];
$Mobile = $_POST["mobileno"];
$Username = $_POST["username"];
$Password = $_POST["password"];
$Gender = $_POST["gender"];

$str = "insert into registration(firstname, lastname, address, email, countryid, stateid, cityid, mobilename, username, password, gender) values('$First','$Last','$Address','$Email',$Country_Id,$State_Id,$City_Id,'$Mobile','$Username','$Password','$Gender')";

mysql_query($str);

echo "record inserted.";

header("location:registration.php")

?>
