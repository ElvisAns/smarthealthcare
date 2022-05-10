<head>
    <?php
    if(isset($_POST['logout'])){


    if($_POST['logout']=="65633hjbfe8374t3853847374bjsbyfg"){
        session_destroy();
        header('location:index');
    }
}
    ?>
	<meta charset="utf-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />

	<meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
    <meta name="viewport" content="width=device-width" />
	<link rel="icon" type="image/png" href="ehealth.png">

    
	<meta name="description" content="E-health is a unifed healhcare platform used to monitor patients health condition">
	<meta property="og:title" content="Automatica E-Health Plateform">
	<meta property="og:type" content="webapp">
	<meta property="fb:app_id" content="246270049874183">
	<meta property="og:description" content="E-health is a unifed healhcare platform used to monitor patients health condition">

	<meta property="og:image" content="ehealthfull.png">
	<meta property="og:image:width" content="150">
	<meta property="og:image:height" content="150">

	<title>E-health</title>

    <link href="assets/css/bootstrap.min.css" rel="stylesheet" />

    <link href="assets/css/animate.min.css" rel="stylesheet"/>

    <link href="assets/css/light-bootstrap-dashboard.css?v=1.4.0" rel="stylesheet"/>


    <script type="text/javascript" src="assets/js/plotly.min.js"></script>
    
    <link href="assets/css/demo.css" rel="stylesheet" />

    <link rel="stylesheet" type="text/css" href="css/font-awesome/css/font-awesome.min.css" />
<!--Start of Tawk.to Script-->
<script type="text/javascript">
var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
(function(){
var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
s1.async=true;
s1.src='https://embed.tawk.to/5e607109c32b5c191739a5ad/default';
s1.charset='UTF-8';
s1.setAttribute('crossorigin','*');
s0.parentNode.insertBefore(s1,s0);
})();
</script>
<!--End of Tawk.to Script-->

    <!--     Fonts and icons     -->
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
    <link href='https://fonts.googleapis.com/css?family=Roboto:400,700,300' rel='stylesheet' type='text/css'>
    <link href="assets/css/pe-icon-7-stroke.css" rel="stylesheet" />

</head>