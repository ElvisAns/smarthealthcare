<?php
session_start();

if(!isset($_SESSION['loggedin'])){
    header('location:index');
    exit();
}

if($_SESSION['type']!="medicale")
{
    header('location:index');
    exit();
}
?>

<!doctype html>
<html lang="en">
<?php include 'appli_head.php';?>
<body>

<div class="wrapper">
    
    <?php include 'app_sidebar.php';?>

    <div class="main-panel">
        <?php include 'appli_nav.php';?>

        <div class="content">
        <?php include 'add_patient_main.php';?>
        </div>


        <footer class="footer">
            <div class="container-fluid">
                <p class="copyright pull-right">
                    &copy; <script>document.write(new Date().getFullYear())</script> <a href="#">ansimapersic@gmail.com</a>, made with love for a healthy world
                </p>
            </div>
        </footer>

    </div>
</div>
<?php include 'script_dependecies.php';?>

</body>
<script type="text/javascript">
    
        <?php if (isset($_GET['return'])){

            if($_GET['return']=='OK'){
            ?>


               $.notify({
                icon: 'pe-7s-gift',
                message: "Patient profile successfully created"

            },{
                type: 'info',
                timer: 4000
            });

        <?php 

    }
    else{
    ?>

               $.notify({
                icon: 'pe-7s-gift',
                message: "Error creating user"

            },{
                type: 'info',
                timer: 4000
            });

<?php }

    }?>
</script>
</html>
