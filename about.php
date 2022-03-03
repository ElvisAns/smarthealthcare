<?php
session_start();

if(isset($_SESSION['loggedin'])){
    header('location:dashboard.php');
    exit();
}

?>
<!DOCTYPE html>

<html lang="en">
<head>
	<title>Smart healthCare monitor</title>

    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<link rel="icon" type="image/png" href="images/favicon.png">
    <link href="assets/css/bootstrap.min.css" rel="stylesheet" />
	<link rel="stylesheet" type="text/css" href="css/theme.css">
	<script type="text/javascript" src="js/bootstrap.min.js"></script>
	<script type="text/javascript" src="js/theme.js"></script>
    <link rel="stylesheet" type="text/css" href="css/font-awesome/css/font-awesome.min.css" />
	
  <script src="js/jquery.min.js"></script>
  <script src="js/bootstrap.min.js"></script>

</head>
<body>
	
	<!--nav bar -->

<nav class="navbar navbar-expand-lg fixed-top"> 
	<div class="container-fluid">
		<div class="navbar-header">
			<button class="navbar-toggle" type="button" data-toggle="collapse" data-target="#navbarSuportedContent" aria-controls="navbarSuportedContent"aria-expanded="false" aria-label="Toggle navigation">
			<span class="fa fa-bars"></span>
			</button>

			<a class="navbar-brand" href="index.php">Home</a>
		</div>		
		<div class="collapse navbar-collapse" id="navbarSuportedContent">
			<ul class="nav navbar-nav navbar-right">
				<li>
					<a class="nav-link" data-value="about" href="about.php">About</a>
				</li>

				<li>
					<a class="nav-link" data-value="system overview" href="systeme_overview.php">System overview</a>
				</li>


				<li>
					<a class="nav-link" data-value="developpers" href="https://github.com/ElvisAns/">Developpers</a>
				</li>

			</ul>
		</div>
	</div>
</nav>

<header>
	<div class="container">
				<div class="row">

					<div class="col-md-2 col-sm-12 ">
					</div>
					<div class="col-md-5  col-sm-12">
						<h1>Welcome to the "Patient Monitoring Tool"</h1>
						<p> Please connect <a class="here" href="index.php">here</a> using your given account information (demo_doctor@e-health.app, demo_admin@e-health.app, demo_patient1@e-health.app and 12345678 as password)

							<blockquote class="blockquote text-left"><p class="mb-0" style="color: #000; font-weight:bolder;">
									the patient monitoring tool is a Internet of things based health system.E-health is an emerging field in the intersection of medical informatics, public health and business, referring to health services and information delivered or enhanced through the Internet and related technologies. In a broader sense, the term characterizes not only a technical development, but also a state-of-mind, a way of thinking, an attitude, and a commitment for networked, global thinking, to improve health care locally, regionally, and worldwide by using information and communication technology.
									<span class="label" style="color: #000; font-weight:bold;">
										Our System Interconnect Electronic equipement and Informatic system to
										monitor your heartbeat & the oxygiene <br> concentration in blood  (Measured Though the Heartbeat sensor) also your body and room temperature (though the temperature sensor assets)
									</span>
							<footer class="blockquote-footer">Make a great world</footer></blockquote>
						</p>

						
					</div>

					<div class="col-md-3  col-sm-6 ">
						      <img class="d-block w-100 img-responsive" src="images/cardio.png" alt="Third slide">
					</div>
					<div class="col-md-2 col-sm-12 ">
					</div>
				</div>
		
	</div>
</header>
<footer class="page-footer font-small ">

	<div class="footer-copyright text-center py-3 footer">
		<div class="row">
			<div class="col-6">
				<a class="footer-copyright" href="https://drc-automatica.netlify.app">
					<img src="images/logo brand.png"  width="120px">
				</a>
			</div>
			
			<div class="col-6">
				&copy; 2021 copyright, Automatica, all right reserved <br> To book now please access our website : 
			<a href="https://drc-automatica.netlify.app" >here</a> or email us on <a href="" >automaticardc@gmail.com</a> <br><a href=" https://github.com/ElvisAns/" class="footer-copyright">Chief developer's profile</a>
			</div>
		</div>
		
	</div>
</footer>

</body>

</html>


 