<?php
session_start();

if(!isset($_SESSION['loggedin'])){
    header('location:index.php');
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
        
            <?php include 'main_monitor_panel.php';?>
        </div>


        <footer class="footer">
            <div class="container-fluid">
                <p class="copyright pull-right">
                    &copy; <script>document.write(new Date().getFullYear())</script> <a href="https://github.com/ElvisAns/">ansimapersic@gmail.com from Automatica</a>, made with love for a healthy world
                </p>
            </div>
        </footer>

    </div>
</div>


</body>

<?php include 'ecg_and_notifier.php';?>
</html>
