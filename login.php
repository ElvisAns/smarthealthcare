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
             <a href="#" class="logo"><img src="ehealth3.png"> <span></span></a>
 
             <div class="heading">
                <h3>E-Health</h3>
                <p>say byebye to sudden death</p>
             </div>
 
             <div class="success-msg">
                <p>Great! You are one of our members now</p>
                <a href="#" class="profile">Your Profile</a>
             </div>
          </div>
 
 
          <!-- Form Box -->
          <div class="col-sm-6 form">
 
             <!-- Login Form -->
             <div class="login form-peice switched">
                <form class="login-form" action="#" method="post">
                   <div class="form-group">
                      <label for="loginemail">Email Adderss</label>
                      <input type="email" name="loginemail" id="loginemail" required>
                   </div>
 
                   <div class="form-group">
                      <label for="loginPassword">Password</label>
                      <input type="password" name="loginPassword" id="loginPassword" required>
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
                   <div class="CTA">
                      <input type="submit" value="Signup Now" id="submit">
                      <a href="#" class="switch">I have an account</a>
                   </div>
                </form>
             </div><!-- End Signup Form -->
          </div>
       </div>
 
    </section>
 
 
    <footer>
       <p>
          Form made by: <a href="http://mohmdhasan.tk" target="_blank">Mohmdhasan.tk</a>
       </p>
    </footer>
 
 </div>
<script src="js/jquery.min.js"></script>
<script src="./js/log.js"></script> 

</body>
</html>