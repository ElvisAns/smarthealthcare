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

    $tutor=$_POST['tutor'];
    $tutorphone=$_POST['tutorphone'];
    $devId=$_POST['devId'];
    $weight=$_POST['weight'];
    $age=$_POST['age'];
    $country=$_POST['country'];
    $location = $_POST['location'];

    //echo $location;

$sql1 =  "INSERT  INTO accounts (Names,email,password,type,`Registration date`,`status`,`Adress`,`hopital name`,Telephone,`Tutor Names`,`Tutor phone`,Device_id,Weight,Age,Nationality,Location) VALUES ('".$name."', '".$email."', PASSWORD('".$pwd."'), '".$type."','".$date."','".$status."','".$hopAdress."', '".$hop."', '".$phone."','".$tutor."','".$tutorphone."','".$devId."','".$weight."', '".$age."', '".$country."','".$location."' )";

$sql2 =  "INSERT  INTO `real time patient state` (noms,id) VALUES ('".$name."', '".$devId."')";
                   
                   
                   if ($conn->query($sql1)==TRUE & $conn->query($sql2)==TRUE ) 
                    {
                        header('location:add_patient?return=OK');
                        exit();
                    } 

                    else{
                       header('location:add_patient?return=ERROR');
                        exit();
                    }
                    mysqli_close($conn);
                    
   }
   else
    echo "string";
?>

    