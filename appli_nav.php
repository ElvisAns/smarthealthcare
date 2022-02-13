<nav class="navbar navbar-default navbar-fixed">
            <div class="container-fluid">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navigation-example-2">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="fa fa-bars"></span>
                    </button>
                    <a class="navbar-brand" href="#">Dashboard</a>
                </div>
                <div class="collapse navbar-collapse">
                    

                    <ul class="nav navbar-nav navbar-right">
                        <li  style="margin: 15px;">
                              <img class="img-thumbnail profile-img-card img-circle" style="height:50;" width="50" src="<?php echo $_SESSION['imgSrc'];?>" alt="..."/><span class="text-dark"> <?php echo $_SESSION['name'] ;?></span>
                        </li>
                        <li class="dropdown" style="margin: 15px;">
										<button class="btn dropdown-toggle btn-info" data-toggle="dropdown" style="color: black; border-color: black;"><i class="pe-7s-tools"></i>Quick Tool
										<b class="caret"></b>
                                        </button>
                              <ul class="dropdown-menu">
                                <?php 

                                switch ($_SESSION['type']) {
                                    case 'admin':
                                        echo '

                                        <li><a href="add_medical.php"><i class="pe-7s-add-user"></i>Add Medical personna</a></li>
                                        
                                        <li><a href="#"><i class="pe-7s-graph3"></i>Statics</a></li>
                                        <li><a href="#"><i class="pe-7s-call"></i>Emergency</a></li>
                                        <li class="divider"></li>  

                                        ';
                                    break;

                                        case 'medicale':
                                        echo '
                                         <li><a href="add_patient.php"><i class="pe-7s-add-user"></i>Add patient</a></li>
                                        <li><a href="#"><i class="pe-7s-refresh-2"></i>Update graph</a></li>
                                        <li><a href="#"><i class="pe-7s-graph3"></i>Statics</a></li>
                                        <li><a href="#"><i class="pe-7s-call"></i>Emergency</a></li>
                                        <li class="divider"></li>
                                        
                                        <li><a href="#"><i class="pe-7s-help1"></i>How it works</a></li>

                                       ' ;
                                        break;
                                    
                                    default:
                                          echo '
                                         
                                        <li><a href="#"><i class="pe-7s-refresh-2"></i>Update graph</a></li>
                                        <li><a href="#"><i class="pe-7s-graph3"></i>Personal Statics</a></li>
                                        <li><a href="#"><i class="pe-7s-call"></i>Emergency</a></li>
                                        <li class="divider"></li>
                                        
                                        <li><a href="#"><i class="pe-7s-help1"></i>How it works</a></li>

                                       ' ;
                                        break;
                                }

                                ?>
                                
                              </ul>
                        </li>
                        <li style="margin: 15px;">
                            
                                <form action="#" method="post">
                                        <input type="hidden" name="logout" value="65633hjbfe8374t3853847374bjsbyfg">
                                        <button type="submit" class="btn btn-warning" style="border-color: black; background-color: white;"><i class="pe-7s-power"></i>Logout</button>
                                </form>
                            
                            
                        </li>
						<li class="separator hidden-lg"></li>
                    </ul>
                </div>
            </div>
        </nav>
