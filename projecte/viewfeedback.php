<html>
<head>
<meta http-equiv="content-type" content="text/html; charset=utf-8" />
        <meta name="description" content="">
        <meta name="author" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
        <!-- Favicon -->
        <link href="favicon.ico" rel="shortcut icon">
        <!-- Bootstrap Core CSS -->
        <link rel="stylesheet" href="assets/css/bootstrap.css" rel="stylesheet">
		

        <!-- Template CSS -->
        <link rel="stylesheet" href="assets/css/animate.css" rel="stylesheet">
        <link rel="stylesheet" href="assets/css/font-awesome.css" rel="stylesheet">
        <link rel="stylesheet" href="assets/css/nexus.css" rel="stylesheet">
        <link rel="stylesheet" href="assets/css/responsive.css" rel="stylesheet">
		<link href="assets/css/css2.css" rel="stylesheet" type="text/css" media="all" />	
		<div link rel="stylesheet" href="assets/css/custom.css" rel="stylesheet">
        
		
        <!-- Google Fonts-->
        <link href="http://fonts.googleapis.com/css?family=Roboto+Condensed:400,300" rel="stylesheet" type="text/css">
		<link rel='stylesheet prefetch' href='http://fonts.googleapis.com/css?family=Roboto:400,100,300,500,700,900|RobotoDraft:400,100,300,500,700,900'>
        <link rel='stylesheet prefetch' href='http://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css'>
</head>
<body>
<div id="body-bg">
            <!-- Phone/Email -->
            <div id="pre-header" class="background-gray-lighter">
                <div class="container no-padding">
                    <div class="row hidden-xs">
                        <div class="col-sm-6 padding-vert-5">
                            <strong>Phone:</strong>&nbsp;1-800-123-4567
                        </div>
                        <div class="col-sm-6 text-right padding-vert-5">
                            <strong>Email:</strong>&nbsp;loharshubham98@gmail.com
                        </div>
                    </div>
                </div>
            </div>
            <!-- End Phone/Email -->
            <!-- Header -->
            <div id="header">
                <div class="container">
                    <div class="row">
                        <!-- Logo -->
                        <div class="logo">
                            <a href="index.html" title="">
                                <img src="assets/img/login.png" alt="Logo" />
                            </a>
                        </div>
                        <!-- End Logo -->
                    </div>
                </div>
            </div>
            <!-- End Header -->
            <!-- Top Menu -->
            <div id="hornav" class="bottom-border-shadow">
                <div class="container no-padding border-bottom">
                    <div class="row">
                        <div class="col-md-8 no-padding">
                            <div class="visible-lg">
                                <ul id="hornavmenu" class="nav navbar-nav">
                                    <li>
                                        <a href="index.php" class="fa-home ">Home</a>
                                    </li>
									<li>
                                        <a href="#" class="fa-home ">Masterpage</a>
										<ul>
        
        <li><a href="country.php">Country Master</a></li>
		<li><a href="state.php">State Master</a></li>
		<li><a href="city.php">City Master</a></li>
		
      </ul>
                                    </li>
									
                                    <li>
                                    
                                        <a href="report.php" class="fa-copy ">Report</a>
                                        
                                    </li>
                                    <li>
                                        <a href="viewfeedback.php" class="fa-th active">View Feedback</a>
                                        
                                    </li>
                                    <li>
                                        <a href="logout.php" class="fa-comment ">Logout</a>
                                    </li>      
                                    
                                </ul>
                            </div>
                        </div>
                        <div class="col-md-3 no-padding">
                            <ul class="social-icons pull-right">
                                <li class="social-twitter">
                                    <a href="#" target="_blank" title="Twitter"></a>
                                </li>
                                <li class="social-facebook">
                                    <a href="#" target="_blank" title="Facebook"></a>
                                </li>
                                <li class="social-googleplus">
                                    <a href="#" target="_blank" title="Google+"></a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End Top Menu -->
            <!-- === END HEADER === -->
			<div id="slideshow" class="bottom-border-shadow">
                <div class="container no-padding background-white bottom-border">
                    <div class="row">
                        <!-- Carousel Slideshow -->
                        <div id="carousel-example" class="carousel slide" data-ride="carousel">
                            <!-- Carousel Indicators -->
                            <ol class="carousel-indicators">
                                <li data-target="#carousel-example" data-slide-to="0" class="active"></li>
                                <li data-target="#carousel-example" data-slide-to="1"></li>
                                <li data-target="#carousel-example" data-slide-to="2"></li>
                            </ol>
                            <div class="clearfix"></div>
                            <!-- End Carousel Indicators -->
                            <!-- Carousel Images -->
                            <div class="carousel-inner">
                                <div class="item active">
                                    <img src="assets/img/slide1.jpg">
                                </div>
                                <div class="item">
                                    <img src="assets/img/slide2.jpg">
                                </div>
                                <div class="item">
                                    <img src="assets/img/slide3.jpg">
                                </div>
                               
                            </div>
                            <!-- End Carousel Images -->
                            <!-- Carousel Controls -->
                            <a class="left carousel-control" href="#carousel-example" data-slide="prev">
                                <span class="glyphicon glyphicon-chevron-left"></span>
                            </a>
                            <a class="right carousel-control" href="#carousel-example" data-slide="next">
                                <span class="glyphicon glyphicon-chevron-right"></span>
                            </a>
                            <!-- End Carousel Controls -->
                        </div>
                        <!-- End Carousel Slideshow -->
                    </div>
            <!-- === BEGIN CONTENT === -->
            
                        
            <div id="content" class="bottom-border-shadow">
                <div class="container background-white bottom-border">
				<div class="margin-vert-40">
				<div class="padding-horiz-120">
				 <div class="col-md-9 text-center ">
<div>
<?php
error_reporting(0);
$con = mysql_connect("localhost","root","");
mysql_select_db("employescheduling",$con);

$str = "select * from feedback";
$result = mysql_query($str);

?>


<table align="center" width="600px" border="2" cellspacing="1" cellpadding="1">
						<tr>
							<th>Feedback Id</th>
							<th>Name</th>
							<th>Email</th>
							<th>Mobile No:</th>
							<th>Subject</th>
							<th>Message</th>
							<th></th>
							<th></th>
						</tr>
					<?php
						

							while($row = mysql_fetch_assoc($result))
							{
								echo "<tr>";
								echo "<td>".$row['feedbackid']."</td>";
								echo "<td>".$row['name']."</td>";
								echo "<td>".$row['email']."</td>";
								echo "<td>".$row['mobileno']."</th>";
								echo "<td>".$row['subject']."</td>";
								echo "<td>".$row['message']."</td>";
								
								echo "<td><a href='delete4.php'>  Delete</a></td>";
								echo "</tr>";
							}		
						?>
						
					</table>
					<br>
				  <br>
				  <br>
				  <br>
				  <br>
				  <br>
</div>
</body>
</br>
<?php include"footer.php";?>
</html>