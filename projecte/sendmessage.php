<?php
$name = $_POST["name"];
$mobile = $_POST["mobile"];
$email = $_POST["email"];
$contact_detail = $_POST["contact_detail"];

$str = "insert into contact(name,mobileno,email,contactdetail) values('$name','$mobile','$email','$contact_detail')";
echo $str;

$headers = "MIME-Version: 1.0\r\n";
$headers.= "Content-Type: text/plain;";
$headers.= "Charset=iso-8859-1\r\n";
$headers.= "From: $theiremail";

mail("techshubhu@gmail.com", $name, $mobile, $email, $contact_detail, $headers);
?>
<html>
<script language="Javascript">

<!--
// please keep these lines on when you copy the source
// made by: Nicolas - http://www.javascript-page.com

alert ("Thank you for your Message!")
//-->

</script>
<meta HTTP-EQUIV="REFRESH" content="0; header("location:index.php")>
</html>