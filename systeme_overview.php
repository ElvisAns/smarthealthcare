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
	<title>Smart HealthCare monitor</title>

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
					<a class="nav-link" data-value="system overview" href="#">System overview</a>
				</li>

				<li>
					<a class="nav-link" data-value="developpers" href="https://github.com/ElvisAns/">Developpers</a>
				</li>

			</ul>
		</div>
	</div>
</nav>

	<div class="container">
				<div class="row">

					<div class="col-md-12  col-sm-12">
						<h1 style="color: #f97300; font-weight: bolder;">Welcome to the "Patient Monitoring Tool"</h1>
						<p> Please connect <a class="here" href="index.php">here</a> using your given account information

							<blockquote class="blockquote text-left"><p class="mb-0">Save the life and enhance living experience through technology <footer class="blockquote-footer">Our favorite quote</footer></blockquote>
						</p>
						<img class="d-block w-100 img-responsive thumbnail" src="images/system.jpg" alt="Third slide">
						<p>
							For project overview and general details check the about section <a href="about.php">here</a>
							<br>
							Our devices is built up using certified materiels.
							The device is most suited to be implemented in hospitals to monitor patient state remotely.The purpose is to map patient monitoring on a given workstation (ie laptop,desktop and smartphone). It will simply, increase focusing and smarten the task for nurses while also reducing the sudden dies due to heart attack.

							<h2>DEVICE'S COMPONENTS</h2>

							<div class="row">
								<div class="col-md-3">
									<img src="images/healthcare device-1.jpg" class="d-block w-75 img-responsive thumbnail" style="float: left;">
								</div>
								
								<div class="col-md-6">
								<span style="text-align: justify;">
									This is the device itself. It need a power supply like your smartphone charger (5V and at least 2Amps output). To be remotely monitored you need at least a local connectivity to the LAN network inside the hospital. The monitoring from home is also possible through internet but this is not most guaranted because your internet quality may negatively affect the communication
									<br>
									<h3>Additional:</h3>
									<ul>
										<li>The device is equiped with an LCD to show off some basic informations</li>
										<li>The device has an output to directly wire any cooling fan which will be automatically controlled with Hysteresis logic for temperature controlling around the patient environment</li>
										<li>The device has a built-in clock display with a programmable alarms to remind you taking drugs </li>
										<li>If any thing goes wrong (lack of connectivity, patient state is bad, sensors are misplaced or are not working) A buzzer will be warming and signaling also through LEDS </li>
									</ul>
									<br>
								</span>
								</div>
							</div>

							<div class="row">
								<div class="col-md-2">
									<img class="d-block  img-responsive thumbnail" src="images/temperature sensor.jpg" style="float: left; height: 300px;">
								</div>
								<div class="col-md-2">

									<img src="images/heartbeat sensor.jpg" class="d-block  img-responsive thumbnail" style="float: left; height: 300px;">
								</div>
								<div class="col-md-5">
									<p style="text-align: justify;">
										This first picture is the sensor whose purpose is to senses the body temperature. The body temperature is a key parameter. It's shown that a human with more than 37.5 degree is logically ill in general
									</p>
									<p style="text-align: justify;">
										On the second illustation This is a combinaison of the fingertip (which help holding the sensor on your finger) and the Heart rate monitor. This part serve as the heartbeat sensor and also the SPO2 level measuring (Oxygiene concentration rate in the blood).
										<br>
										it's proven that a normal BPM should be mapped in  between 45BPM and 120BPM for matures.And for SPO2 the rate should not get down 95%. Otherwise the patient needs attention
									</p>
								</div>
							</div>


						<div class="row">
							<div class="col-md-12"><h2>SENSORS WEARING MAP</h2></div>
							<div class="col-md-3">

								<img src="images/wearing sensors -1.jpg" class="img-responsive thumbnail" style="float: left; width:100%;">
							</div>
							<div class="col-md-3">
								<p>
									To get better measurement please place sensors as illustated on the picture. The emplacement is not mandatory but you must keep in mind that where you are responsible of any malfunctionning due to the emplacement on your body.
								</p>
							</div>
						</div>
						
						
					</div>

				</div>
	</div>
	<div class="container">
				<div class="row" style="overflow-x: hidden;">
					<div class="col-md-2  col-sm-12"></div>
						<div class="col-md-8  col-sm-12">
							<iframe width="712" height="600" src="https://www.youtube.com/embed/QUuzK0L8gAA" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen>
							</iframe>
						</div>
					<div class="col-md-2  col-sm-12"></div>
				</div>
		
	</div>
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


 