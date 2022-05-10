<?php 
$d = date("Y-m-d");
    //echo " Date:".$d."<BR>";
$t = date("H:i:s");

?>
<div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="header">
                                <h4 class="title">RECORD A NEW PATIENT(DEVICE USER)</h4>
                            </div>
                            <div class="content">
                                <form action="insertpatient.php" method="post">
                                    <div class="row">
                                        <div class="col-md-5">
                                            <div class="form-group">
                                                <label>Hospital name</label>
                                                <input type="text" required minlength="5" class="form-control" placeholder="Hospital Name" name="hospital_name" >
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label>Names</label>
                                                <input type="text" required minlength="5" class="form-control" placeholder="Names (both)" name="names">
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="row">
                                                <div class="form-group col-md-12">
                                                    <label for="exampleInputEmail1">Email address</label>
                                                    <input type="email" class="form-control" required placeholder="Email" name="email">
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="form-group col-md-12">
                                                    <label for="exampleInputEmail1">Password</label>
                                                    <input class="form-control" required minlength="8" placeholder="account pwd" name="pwd">
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <input type="hidden" name="type" value="patient">
                                    <input type="hidden" name="regdate" value="<?php echo $d;?>">
                                    <input type="hidden" name="status" value="active">

                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label>Address</label>
                                                <input type="text" class="form-control" required minlength="4" placeholder="Hospital Address" name="hopaddress" >
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Nationality</label>
                                                <input type="text" class="form-control" required minlength="5" placeholder="Country of birth" name="country">
                                            </div>
                                        </div>

                                         <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Telephone</label>
                                                <input type="text" class="form-control" required minlength="10" placeholder="+243......." name="phone">
                                            </div>
                                    </div>
                                </div>
                                    <div class="row">
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label>Age</label>
                                                <input type="text" class="form-control" placeholder="age" name="age" >
                                            </div>

                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label>Weight</label>
                                                <input type="text" class="form-control" required  placeholder="Weight in Kg" name="weight" >
                                            </div>
                                            
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label>Device ID</label>
                                                <input type="text" class="form-control" required minlength="10" placeholder="the Device identifier" name="devId" >
                                            </div>
                                            
                                        </div>


                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label>Device Location</label>
                                                <input type="text" class="form-control" required minlength="5" placeholder="The Device Location" name="location" >
                                            </div>
                                            
                                        </div>

                                    </div>
                                     <div class="row">
                                        <div class="col-md-6">
                                        
                                           <div class="form-group">
                                                <label>Tutor Name</label>
                                                <input type="text" class="form-control" required minlength="5" ="The names of the tutor" name="tutor" >
                                            </div>
                                
                                        </div>
                                        <div class="col-md-6">
                                        
                                           <div class="form-group">
                                                <label>Tutor Phone</label>
                                                <input type="text" class="form-control" required minlength="5" placeholder="The phone no of the tutor" name="tutorphone" >
                                            </div>
                                
                                        </div>
                                    </div>
                                     <div class="row">
                                        <div class="col-md-6">
                                        
                                         <textarea rows="5" class="form-control" required placeholder="Consultant observation" name="observation"></textarea>
                                     </div>
                                 </div>
                                    <div class="row">
                                        <div class="col-md-4" style="padding-top:15px">
                                        
                                            <button type="submit" class="btn btn-info btn-fill" > Save</button>
                                
                                        </div>
                                    </div>
                                   
                                </form>
                            </div>
                        </div>
                    </div>

                </div>
            </div>