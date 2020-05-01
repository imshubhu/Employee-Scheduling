<?php include'header.php';?>
<?php
error_reporting(0);
$con = mysql_connect("localhost","root","");
mysql_select_db("employescheduling",$con);

$str = "select * from statemaster";
$result = mysql_query($str);
?>
<?php
	$statename="";	
	
if(isset($_GET['stateid']))
{
	$q=mysql_query("select * from state where stateid=".$_GET['stateid']);
	$r=mysql_fetch_array($q);
	$sname=$r['statename'];
	
}



?>
<div>
	
		<section class="login-page">
			<div class="inner-banner demo-2 text-center">
				
				<div id="breadcrumb_wrapper">
					<div class="container">		
						<h2>State Master</h2>
				</div>
			</div>
			</div>
			<div class="login">
				<div class="container">
					<h3 align="center">State Master</h3>
							<div class="login-form-grids">
								<form align="center" action="
								<?php if(isset($_GET['stateid'])) 
								{
									echo "stateedit.php?sid=".$_GET['stateid'];
								} 
								else
								{ 
									echo "state1.php";
								}
								?>
								" method="post">
						<input type="text" name="statename" value="<?php echo $sname ?>" placeholder="State Name" required>
						<input type="submit" value="Submit" >
					</form>
							</div>
						</div>
						</div>
		</section>
				<table align="center" width="600px" border="5" cellspacing="1" cellpadding="1">
						<tr>
							<th>State ID</th>
							<th>State Name</th>
							<th>Action</th>
						</tr>
						<?php
							while($row = mysql_fetch_assoc($result))
							{
								echo "<tr>";
								echo "<td>".$row['stateid']."</td>";
								echo "<td>".$row['statename']."</td>";
								echo "<td><a href='stateedit.php?sid=".$row['sid']."'>Edit</a>  <a href='statedelete.php?sid=".$row['sid']." '>Delete</a>  </td>";
								echo "</tr>";
							}		
						?>
						
				</table>
		</div>
				<br/>

<?php include'footer.php';?>