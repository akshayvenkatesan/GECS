<!DOCTYPE html>
<html lang="en">
<head>
  <!-- Theme Made By www.w3schools.com - No Copyright -->
  <title>GECS</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <style>
  body {
      font: 20px Montserrat, sans-serif;
      line-height: 1.8;
      color: #f5f6f7;
  }
  p {font-size: 16px;}
  .margin {margin-bottom: 45px;}
  .bg-1 { 
      background-color: #1abc9c; /* Green */
      color: #ffffff;
  }
  .bg-2 { 
      background-color: #474e5d; /* Dark Blue */
      color: #ffffff;
  }
  .bg-3 { 
      background-color: #ffffff; /* White */
      color: #555555;
  }
  .bg-4 { 
      background-color: #2f2f2f; /* Black Gray */
      color: #fff;
  }
  .container-fluid {
      padding-top: 70px;
      padding-bottom: 70px;
  }
  .navbar {
      padding-top: 15px;
      padding-bottom: 15px;
      border: 0;
      border-radius: 0;
      margin-bottom: 0;
      font-size: 12px;
      letter-spacing: 5px;
  }
  .navbar-nav  li a:hover {
      color: #1abc9c !important;
  }
  </style>
</head>
<body>

<!-- Navbar -->
		<nav class="navbar navbar-default bg-3">
			<div class="container">
				<div class="navbar-header">
					<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
						<span class="icon-bar"></span>
						
					</button>
					<a href="https://dhi.nic.in"><img src="<?php echo base_url(); ?>images/logo.jpg " title="Department of Heavy Industries"  /></a> 
				</div>
				<div class="collapse navbar-collapse" id="myNavbar">
					<ul class="nav navbar-nav navbar-right">
						<br>
						<li><a href="index.php/auth/registration">User Registration</a></li>
                                                <li><a href="index.php/auth/login">Login</a></li>
						
					</ul>
				</div>
			</div>
		</nav>
		
		<!-- First Container -->
		<div class="container-fluid bg-1 text-center">
			<h3 class="margin">DHIGECS(GST Concession Certificate Scheme) Beta Version</h3>
			<img src="<?php echo base_url(); ?>images/handicapped.png " class="" style="display:inline" alt="DHI Banner" width="350" height="350">
			<h3></h3>
		</div>
		
		<div class="" align=center>
			<a href="https://www.nic.in" > Designed and Developed by NIC-DHI</a> 
		</div>

</body>
</html>
