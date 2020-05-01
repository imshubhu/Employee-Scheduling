<?php

session_start();

$username = $_POST['username'];
$password = $_POST['password'];

if ($username&&$password)
{
	
		$connect = mysql_connect("127.0.0.1","root","") or die ("Couldnt connect to database");
		mysql_select_db("login") or die ("Couldnt find database");
		
		$query = mysql_query("SELECT * FROM users WHERE username='$username'");
		
		$numrows = mysql_num_rows($query);
		
		if ($numrows !=0)
			
		{
			
		while ($row = mysql_fetch_assoc($query))
		{
			
			$dbusername = $row['username'];
			$dbpassword = $row['password'];
			
		}
			if ($username==$dbusername&&$password==$dbpassword)
			{
				
				echo "Login successful. <a href='membersarea.php'>Click here to enter the member area</a>";
				$_SESSION['username']=$dbusername;
			}
			else
				echo "Incorrect password";
		}
		else
			die ("That username doesnt exist");
}
else	
	die ("Please enter a username and password");

?>