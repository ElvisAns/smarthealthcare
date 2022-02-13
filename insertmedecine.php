<?php 
 	
    require "connexion.php";
 
    // Create connection

   if(isset($_POST['email'], $_POST['pwd'])){
   

   $conn = new mysqli($servername, $username, $password, $dbname);
    // Check connection
    if ($conn->connect_error) {
        die("Database Connection failed: " . $conn->connect_error);
    }

    $hop=$_POST['hospital_name'];
	$name = $_POST['names'];
    $pwd=$_POST['pwd'];
    $email=$_POST['email'];
    $type=$_POST['type'];
    $date=$_POST['regdate'];
    $status=$_POST['status'];
    $hopAdress=$_POST['hopaddress'];
    $phone=$_POST['phone'];

    echo $hop;
    echo $date;

 $sql1 =  "INSERT  INTO accounts (Names,email,password,type,`Registration date`,`status`,`Adress`,`hopital name`,Telephone) VALUES ('".$name."', '".$email."', PASSWORD('".$pwd."'), '".$type."','".$date."','".$status."','".$hopAdress."', '".$hop."', '".$phone."')";

                   if ($conn->query($sql1)==TRUE) 
                    {
                        header('location:add_medical.php?return=OK');
                        exit();
                    } 

                    else{
                       header('location:add_medical.php?return=ERROR');
                        exit();
                    }
                    mysqli_close($conn);
   }
   else
    echo "string";
?>

    