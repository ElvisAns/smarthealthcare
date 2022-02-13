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
	<meta name="description" content="We are Automatica Technology corp. This is our tool to monitor patient remotely using IoT technology">
	<meta property="og:title" content="Automatica Technology E-Health Plateform">
	<meta property="og:type" content="website">
	<meta property="fb:app_id" content="246270049874183">
	<meta property="og:description" content="This is our tool to monitor patient and consumer 3rd Persona remotely using IoT technology">

	<meta property="og:image" content="images/favicon.png">
	<meta property="og:image:width" content="150">
	<meta property="og:image:height" content="150">

    <meta name="google-site-verification" content="+nxGUDJ4QpAZ5l9Bsjdi102tLVC21AIh5d1Nl23908vVuFHs34="/>
	<title>Smart HealthCare monitor</title>
    <meta name="robots" content="noindex,nofollow">

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

				<!--li>
					<a class="btn disabled" data-value="Reports" href="#">Reports</a>
				</li>

				<li>
					<a class="btn disabled" data-value="settings" href="#">Settings</a>
				</li-->

				<li>
					<a class="nav-link" data-value="developpers" href="https://github.com/ElvisAns/">Developpers</a>
				</li>

			</ul>
		</div>
	</div>
</nav>

<header>
	<div class="container">
		<div class="login_form">
				<div class="row">
					
					<div class="col-md-4  col-sm-3 ">
					</div>

					<div class="col-md-4  col-sm-6  login-card">
						<a name="here"></a>
						<img src="images/default-avatar.png" class="profile-img-card">
						<p style="font-size: 10px;"> You may found credential for demo account on about page <a href="about.php">here</a></p>
           				 <p class="profile-name-card text-danger"> <?php if(isset($_GET['response'])){ echo $_GET['response'];} ?>

           				 </p>

						<form class="form-signin" action="authentificate.php" method="post" >
							<div class="form-group"><input class="form-control" type="email" required="" placeholder="demo_doctor@e-health.app" autofocus="" id="inputEmail" name="email" ></div>
              		  		<div class="form-group"><input class="form-control" type="password" required="" placeholder="12345678" id="inputPassword" name="password"></div>
                
                		
                    		<div class="form-group">
                    			<div class="checkbox">
                       			 	<label>
                       			 		<input type="checkbox" name="optionsCheckboxes" disabled checked>Remember me
                        			</label>
                    			</div>
                    		</div>
                    		<div class="form-group">

                				<button class="btn btn-primary btn-block btn-lg btn-signin" type="submit">login</button>
							</div>
						</form>
					</div>
					<div class="col-md-3 col-sm-3 ">
					</div>
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


 