
<?php include'header.php';?>
<?php
error_reporting(0);
$con = mysql_connect("localhost","root","");
mysql_select_db("employescheduling",$con);

?>

<div>

		<section class="login-page">
			<div class="inner-banner demo-2 text-center">
				
				<div id="breadcrumb_wrapper">
					<div class="container">		
						<h2>Country Master</h2>
				</div>
			</div>
			</div>
			<div class="login">
				<div class="container">
					<h3 align="center">Country Master</h3>
							<div class="login-form-grids">
								<form align="center" action="country1.php" method="post">
<?php
$str = "select * from statemaster";
$result = mysql_query($str);

echo "<select name='statemaster'>";
while($row = mysql_fetch_array($result))
{
	echo "<option value='".$row['stateid']."'>".$row['statename']."</option>";
}
echo "</select>";

			
?>

	<?php
$str = "select * from citymaster";
$result = mysql_query($str);

echo "<select name='citymaster'>";
while($row = mysql_fetch_array($result))
{
	echo "<option value='".$row['cityid']."'>".$row['cityname']."</option>";
}
echo "</select>";

			
?>
									<input type="text" name="areaname"  value="----Country Name----" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Name';}" required>	
									<input type="submit" value="Submit" >
								</form>
							</div>
						</div>
						</div>
		</section>
		<table align="center" width="600px" border="2" cellspacing="1" cellpadding="1">
						<tr>
							<th>Country ID</th>
							<th>State ID</th>
							<th>City ID</th>
							<th>Country Name</th>
							<th>Action</th>
							
						</tr>
					<?php
						
$str = "select * from country";
$result = mysql_query($str);

							while($row = mysql_fetch_assoc($result))
							{
								echo "<tr>";
								echo "<td>".$row['countryid']."</td>";
								echo "<td>".$row['stateid']."</td>";
								echo "<td>".$row['cityid']."</td>";
								echo "<td>".$row['countryname']."</td>";
								echo "<td><a href='countryedit.php'>Edit   |</a> <a href='countrydelete.php?coid=".$row['coid']." '>Delete</a>  </td>";
								echo "</tr>";
							}		
						?>
						
					</table>
		</div>
				</br>
				<script type="text/javascript" src="assets/js/jquery.min.js" type="text/javascript"></script>
            <script type="text/javascript" src="assets/js/bootstrap.min.js" type="text/javascript"></script>
            <script type="text/javascript" src="assets/js/scripts.js"></script>
            <!-- Isotope - Portfolio Sorting -->
            <script type="text/javascript" src="assets/js/jquery.isotope.js" type="text/javascript"></script>
            <!-- Mobile Menu - Slicknav -->
            <script type="text/javascript" src="assets/js/jquery.slicknav.js" type="text/javascript"></script>
            <!-- Animate on Scroll-->
            <script type="text/javascript" src="assets/js/jquery.visible.js" charset="utf-8"></script>
            <!-- Sticky Div -->
            <script type="text/javascript" src="assets/js/jquery.sticky.js" charset="utf-8"></script>
            <!-- Slimbox2-->
            <script type="text/javascript" src="assets/js/slimbox2.js" charset="utf-8"></script>
            <!-- Modernizr -->
            <script src="assets/js/modernizr.custom.js" type="text/javascript"></script>
            <!-- End JS -->
		</body>
		</html>
<?php include'footer.php';?>