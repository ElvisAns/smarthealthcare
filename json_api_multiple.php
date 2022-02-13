<?php

    require "connexion.php";
    // Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);
    // Check connection
    if ($conn->connect_error) {
        die("Database Connection failed: " . $conn->connect_error);
    }

 if(!empty($_GET['Request'])){

$Request=$_GET['Request'];
 
$x=0;

$sql = "SELECT * FROM `real time patient state` WHERE `id` = '".$Request."'";

$api_response=array();

    if ($result=mysqli_query($conn,$sql))
    {
      
      while ($row=mysqli_fetch_row($result))
      {

        $tableRow = array(
        'id' => $row[0],
        'name' => $row[1],
        'ecg' => $row[2],
        'bpm' => $row[3],
        'spo2' => $row[4],
        'body' => $row[5],
        'room' => $row[6],
        'Updatetime' => $row[8],
        'lastDate' => $row[7]

        );
        
        array_push($api_response, $tableRow);
      
      // Free result set
    
  }
   echo json_encode($api_response)."\n";
      mysqli_free_result($result);
    
 
    mysqli_close($conn);
}
}
?>

