 <?php
 session_start();

 $_SESSION['loggedin']=false;
 session_destroy();
 if(isset($_POST['logout'])){


    if($_POST['logout']=="65633hjbfe8374t3853847374bjsbyfg"){
        session_destroy();
        header('location:index.php');
    }
}
    
 ?>