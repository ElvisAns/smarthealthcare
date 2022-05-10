<div class="container-fluid">
                

                            <?php 
                            $patient_datas=array();
                            $i=0;
                            $numberOfpatient=0;

                            require "connexion.php";
                         
                            // Create connection
                            $conn = new mysqli($servername, $username, $password, $dbname);
                            // Check connection
                            if ($conn->connect_error) {
                                die("Database Connection failed: " . $conn->connect_error);
                            }
                            switch ($_SESSION['type']) {
                                case 'patient':
                                     $sql = 'SELECT * FROM `accounts` WHERE `status` = \'active\' AND `type` = \'patient\'  AND `Names` = "'.$_SESSION['name'].'"';
                                    break;

                                case 'medicale':
                                   $sql = 'SELECT * FROM `accounts` WHERE `status` = \'active\' AND `type` = \'patient\'';
                                    break;
                                
                                default:
                                     $sql = 'SELECT * FROM `accounts` WHERE `status` = \'active\' AND `type` = \'uuuu\'';
                                    break;
                            }
                            

                            $result=mysqli_query($conn,$sql);

                            if (mysqli_num_rows($result)>0)
                            {
                                 

                                  while ($row=mysqli_fetch_assoc($result))
                                  {
                                    $tableRow = array(
                                        'name' => $row["Names"],
                                        'telephone' => $row["Telephone"],
                                        'photo' => $row["Photo"],
                                        'devId' => $row["Device_id"],
                                        'location' =>$row["Location"]
                                    );


                                    array_push($patient_datas, $tableRow);
                                   
                                  }

                                $numberOfpatient=mysqli_num_rows($result);
                              // Free result set
                            }
                         
                            mysqli_close($conn);




                            if( $numberOfpatient==0)
                                echo '<blockquote class="blockquote text-warning"><p class="mb-0"><i class="pe-7s-info"></i>You are getting an empty page, Three reason can cause this:
                            <ul>
                            <li>There no any registered patient</li> 
                            <p><i class="pe-7s-light"></i>if there is any... and still not getting any data, make sure that the patient is "active"
                            </p>
                            <p><i class="pe-7s-light"></i>Please go in the Quick tool section for adding patient or click <a  href="add_medical.php">here</a>
                            </p>
                            <li>You are not allowed to view patient data since you are not registered as a nurse or a doctor
                            </li>
                            <p><i class="pe-7s-light"></i>Check in the tool bar for perfoming other operation
                            </p>
                            </ul>
                            <footer class="blockquote-footer text-danger">Please read out privacy and policy in <a href="#"</a> about secion</footer></blockquote>';

                            while($i < $numberOfpatient){

                            ?>
                            <div class="row">
                                 <div class="col-md-4">
                                    <div class="card card-user" style="display:flex; justify-content:center; text-align:center;">
                                          
                                        <div class="content">
                                            <div class="patientName">
                                                <a href="#">
                                                     <img class="avatar border-gray" src="<?php echo $patient_datas[$i]['photo'];?>" alt="..."/>

                                                    <h4 class="title"><?php echo $patient_datas[$i]['name'];?> <br />
                                                    <small><?php echo $patient_datas[$i]['telephone'];?></small><br>
                                                    <small class="text-warning"><?=$patient_datas[$i]["location"]?></small>
                                                    </h4>
                                                </a>
                                            </div>
                                
                                            <ul class="nav">
                                                <li class="active patient_state" style="width:200px;">
                                                <i class="fa fa-heartbeat"  aria-hidden="true"></i> <span <?php echo "id=\"patient_bpm".$patient_datas[$i]['devId']."\""; ?> > </span>BPM
                                                </li>
                                                <li class="patient_state">
                                                <i class="fa fa-thermometer-full" aria-hidden="true"></i> Body: <span <?php echo "id=\"patient_tmp".$patient_datas[$i]['devId']."\""; ?> > </span>&deg;C
                                                </li>
                                                <li class="patient_state">
                                                <i class="fa fa-thermometer-empty" aria-hidden="true"></i> Room: <span  <?php echo "id=\"room_tmp".$patient_datas[$i]['devId']."\""; ?> > </span>&deg;C
                                                </li>
                                                <li class="patient_state">
                                                <i class="fa fa-tint" aria-hidden="true"></i> SPO2 : <span <?php echo "id=\"spo2_level".$patient_datas[$i]['devId']."\""; ?> > </span>%
                                                </li>
                                            </ul>
                                        </div>
                                    <hr>
                                </div>
                             </div>

                    <div class="col-md-8">
                        <div class="card-ecg">
                            <div class="content">
                                <div  <?php echo "id=\"ECG${i}\""; ?> class="ct-chart"></div>
                            </div>
                        </div>
                    </div>
                </div>


                            <?php

                            $i++;
                        }

                            ?>
      
            </div>