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
                                <h4 class="title">Add Nurse/Doctor Profile</h4>
                            </div>
                            <div class="content">
                                <form action="insertmedecine.php" method="post">
                                    <div class="row">
                                        <div class="col-md-5">
                                            <div class="form-group">
                                                <label>Hospital name</label>
                                                <input type="text" class="form-control" placeholder="Hospital Name" name="hospital_name" >
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label>Names</label>
                                                <input type="text" class="form-control" placeholder="Names (both)" name="names">
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="row">
                                                <div class="form-group col-md-12">
                                                    <label for="exampleInputEmail1">Email address</label>
                                                    <input type="email" class="form-control" placeholder="Email" name="email">
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="form-group col-md-12">
                                                    <label for="exampleInputEmail1">Password</label>
                                                    <input class="form-control" placeholder="account pwd" name="pwd">
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <input type="hidden" name="type" value="medicale">
                                    <input type="hidden" name="regdate" value="<?php echo $d;?>">
                                    <input type="hidden" name="status" value="active">

                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label>Address</label>
                                                <input type="text" class="form-control" placeholder="Hospital Address" name="hopaddress" >
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>City</label>
                                                <input type="text" class="form-control" placeholder="City">
                                            </div>
                                        </div>

                                         <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Telephone</label>
                                                <input type="text" class="form-control" placeholder="+243......." name="phone">
                                            </div>
                                        </div>
                                    <div class="row">
                                        <div class="col-md-4">
                                        
                                            <button type="submit" class="btn btn-info btn-fill ">Add profile</button>
                                
                                        </div>
                                    </div>
                                   
                                </form>
                            </div>
                        </div>
                    </div>

                </div>
            </div>