 <?php 
 session_start();
 	
    require "connexion.php";
 
    // Create connection

   if(isset($_POST['email'], $_POST['password'])){
   

   $conn = new mysqli($servername, $username, $password, $dbname);
    // Check connection
    if ($conn->connect_error) {
        die("Database Connection failed: " . $conn->connect_error);
    }

    
	$sql1 = "SELECT email FROM `accounts` WHERE email= '".$_POST['email']."'";

    if ($result1=mysqli_query($conn,$sql1))
    {
    	if ($row1=mysqli_fetch_row($result1)){

    		
      		$sql2 = "SELECT password, Names, type, Photo FROM `accounts` WHERE password = PASSWORD('".$_POST['password']."') AND email= '".$_POST['email']."' ";
     
     		if ($result2=mysqli_query($conn,$sql2))
    			{
    			
					
					if ($row2=mysqli_fetch_row($result2))
     				{

   			  		if(TRUE)
     					{
						    session_regenerate_id();
					        $_SESSION['loggedin']=TRUE;
						    $_SESSION['name']=$row2[1];
                            $_SESSION['type']=$row2[2];
                            $_SESSION['imgSrc']=$row2[3];

						    header('location:dashboard');     
     					}
     			  }
            else
            {
            header('location: index?response=incorrect password');
            }

   				}
		}
	

	else{
	header('location:index?response=incorrect email');
	}
}
mysqli_close($conn);
}
else{
	 header('location:index');
}
?>

    