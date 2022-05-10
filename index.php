<?php
session_start();

if(isset($_SESSION['loggedin'])){
    header('location:dashboard');
    exit();
}

?>
<!DOCTYPE html>

<html lang="en">
<head>
	<meta name="description" content="E-health is a unifed healhcare platform used to monitor patients health condition">
	<meta property="og:title" content="Automatica E-Health Plateform">
	<meta property="og:type" content="webapp">
	<meta property="fb:app_id" content="246270049874183">
	<meta property="og:description" content="E-health is a unifed healhcare platform used to monitor patients health condition">

	<meta property="og:image" content="ehealthfull.png">
	<meta property="og:image:width" content="150">
	<meta property="og:image:height" content="150">

	<title>E-health</title>

    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <link href="assets/css/bootstrap.min.css" rel="stylesheet" />
	<link rel="icon" type="image/png" href="ehealth.png">
	<link rel="stylesheet" type="text/css" href="css/log.css">
    <link rel="stylesheet" type="text/css" href="css/font-awesome/css/font-awesome.min.css" />

</head>

<body>
    
<div class="container">
    <section id="formHolder">
 
       <div class="row">
 
          <!-- Brand Box -->
          <div class="col-sm-6 brand">
             <a href="#" class="logo">E <span>.</span></a>
 
             <div class="heading">
                <h3>E-Health Monitor</h3>
                <p>say byebye to sudden death</p>
             </div>
          </div>
 
 
          <!-- Form Box -->
          <div class="col-sm-6 form">
 
             <!-- Login Form -->
             <div class="login form-peice switched">
                <form class="login-form" action="authentificate.php" method="post" >
                   <div class="form-group">
                      <label for="loginemail">Email Addrerss</label>
                      <input  id="loginemail"  autofocus="" name="email" required type="email">
                   </div>
 
                   <div class="form-group">
                      <label for="loginPassword">Password</label>
                      <input type="password" name="password" id="loginPassword"  required>
                   </div>
 
                   <div class="CTA">
                      <input type="submit" value="Login">
                      <a href="#" class="switch">I'm New</a>
                   </div>
                </form>
             </div><!-- End Login Form -->
 
 
             <!-- Signup Form -->
             <div class="signup form-peice">
                <form class="signup-form" action="#" method="post">
                    <p class="k">Welcome!</p>
                    
                     <?php if(isset($_GET['response'])):?>
                        <div class="alert alert-warning alert-dismissible" role="alert">
                           <strong>Can't login!</strong> <?=$_GET['response']?>
                        </div>
                     <?php endif;?>
                    <p style="font-size:1rem;">The patient monitoring tool is an Internet of things based healthcare system. 
                    Our System Interconnect Electronic equipement and a web application to monitor your heartbeat & the oxygiene
                    concentration in blood plus your temperature. <a target="_blank" href="https://drive.google.com/file/d/1Dk49aXsfDv07lNoJFKYdP_WonEkIg3-p/view?usp=sharing">More informations</a></p>
                    <p style="color:#182145;font-size:1rem;">For demo you may use : demo_doctor@e-health.app, demo_admin@e-health.app, demo_patient1@e-health.app. Password : 12345678</p>
                   <div class="CTA">
                      <a href="#" class="switch">Take me to login</a>
                   </div>
                </form>
             </div><!-- End Signup Form -->
          </div>
       </div>
 
    </section>
 
 
    <footer>
       <p>
          Made by <a href="https://drc-automatica.netlify.app/" target="_blank"><img src="logo automatica.png" class="automatica"></a>
       </p>
    </footer>
 
 </div>
<script src="js/jquery.min.js"></script>
<script src="./js/log.js"></script> 

</body>
</html>