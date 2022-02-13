<?php

//header('Content-Type: text/event-stream');
//header('Cache-Control:no-cache');

//Creates new record as per request
//Connect to database
   
    
    require "connexion.php";
 
    // Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);
    // Check connection
    if ($conn->connect_error) {
        die("Database Connection failed: " . $conn->connect_error);
    }
    
    date_default_timezone_set("Africa/Kigali");
    //Get current date and time
    $d = date("Y-m-d");
    //echo " Date:".$d."<BR>";
    $t = date("H:i:s");
 
    if(!empty($_GET['id']))
    {
        $room_id = $_GET['id'];
        $ambient_temperature=$_GET['ambient'];
        $patient_temperature=$_GET['body'];
        $bpm=$_GET['bpm'];
        $SPO2=$_GET['spo2'];
        $ecg_stream=$_GET['ecg_stream'];

       // $query= 'SELECT * FROM `accounts`  WHERE `Device_id` = \'".$room_id."\' AND  `status` = \'active\' AND `type` = \'patient\'';
$query = "SELECT * FROM `accounts` WHERE `type` = 'patient' AND `status` = 'active' AND `Device_id` = '".$room_id."'"; 
        
            if ($result=mysqli_query($conn,$query)) 
            {

                if(mysqli_num_rows($result)>0)
                {
                    
                    while($row=mysqli_fetch_row($result))
                    {
                     


                   // $sql = "INSERT IGNORE INTO `real time patient state` (`id`,photo,noms,ecgStream,bpm,SPO2,BodyTemperature,`Room Temperature`) VALUES ('".$row[0]."', '".$row[1]."', '".$row[2]."', '".$ecg_stream."', '".$bpm."', '".$SPO2."','".$patient_temperature."','".$ambient_temperature."')";
                    
                    //$sql = "UPDATE `patient_monitor`.`real time patient state` SET `photo`='".$row[1]."',`noms`= '".$row[2]."', `ecgStream` ='".$ecg_stream."',`bpm`='".$bpm."', `SPO2`='".$SPO2."', `BodyTemperature`= '".$patient_temperature."', `Room Temperature`= '".$ambient_temperature."' WHERE `real time patient state`.`id` = '".$row[0]."'";

                   $sql0= "UPDATE `patient_monitor`.`real time patient state` SET  `noms` = '".$row[3]."', `ecgStream` = '".$ecg_stream."', `bpm` = '".$bpm."', `SPO2` = '".$SPO2."', `BodyTemperature` = '".$patient_temperature."', `Room Temperature` = '".$ambient_temperature."', `Date` = '".$d."' , `Time` = '".$t."' WHERE `real time patient state`.`id` = '".$row[17]."'";

                   $sql1 =  "INSERT IGNORE INTO logs (`id`,noms,bpm,SPO2,BodyTemperature,`Room Temperature`,`Date`,`Time`) VALUES ('".$row[17]."', '".$row[3]."', '".$bpm."', '".$SPO2."','".$patient_temperature."','".$ambient_temperature."','".$d."', '".$t."')";

                    if ($conn->query($sql0) === TRUE & $conn->query($sql1)==TRUE) 
                    {
                        echo "OK";
                    } 
                    
                     else 
                    {
                        echo "Error: " . $sql0 . "<br>" . $conn->error;
                        echo "<br>";
                        echo "Error: " . $sql1.  "<br>" . $conn->error;
                    }        
                
                  }

            $result->close();
            
            }

            else{
                echo "empty(var)";
            }
}
    }
 
    $conn->close();


flush();

?>