<?php require_once "head.php"; ?>

<link rel="stylesheet" type="text/css" href="csss/style.css">

<main class="main">
   <!-- Sidebar Nav -->
    <aside id="sidebar" class="js-custom-scroll side-nav">
        <ul id="sideNav" class="side-nav-menu side-nav-menu-top-level mb-0">

            <!-- Dashboard -->
            <li class="side-nav-menu-item active">
                <a class="side-nav-menu-link media align-items-center" href="index.php">
              <span class="side-nav-menu-icon d-flex mr-3">
                <i class="gd-dashboard"></i>
              </span>
                    <span class="side-nav-fadeout-on-closed media-body">Dashboard</span>
                </a>
            </li>
            <!-- End Dashboard -->

            <!-- Member -->
            <li class="side-nav-menu-item">
                <a class="side-nav-menu-link media align-items-center" href="member.php">
              <span class="side-nav-menu-icon d-flex mr-3">
                <i class="fas fa-users"></i>
              </span>
                    <span class="side-nav-fadeout-on-closed media-body">Member</span>
                </a>
            </li>
            <!-- End Member -->

            <!-- Saving -->
            <li class="side-nav-menu-item">
                <a class="side-nav-menu-link media align-items-center" href="saving.php">
              <span class="side-nav-menu-icon d-flex mr-3">
                <i class="fas fa-money-check-alt"></i>
              </span>
                    <span class="side-nav-fadeout-on-closed media-body">Saving Accounts</span>
                </a>
            </li>
            <!-- End Saving -->

            <!-- Loan -->
            <li class="side-nav-menu-item">
                <a class="side-nav-menu-link media align-items-center" href="loan.php">
              <span class="side-nav-menu-icon d-flex mr-3">
               <i class="fas fa-landmark"></i>
              </span>
                    <span class="side-nav-fadeout-on-closed media-body">Loan</span>
                </a>
            </li>
            <!-- End Loan -->

            <!-- Messege -->
            <li class="side-nav-menu-item">
                <a class="side-nav-menu-link media align-items-center" href="messege.php">
              <span class="side-nav-menu-icon d-flex mr-3">
               <i class="fas fa-envelope"></i>
              </span>
                    <span class="side-nav-fadeout-on-closed media-body">Message</span>
                </a>
            </li>
            <!-- End Messege -->

            <!-- Customize -->
            <li class="side-nav-menu-item">
                <a class="side-nav-menu-link media align-items-center" href="custom.php">
              <span class="side-nav-menu-icon d-flex mr-3">
               <i class="fas fa-palette"></i>
              </span>
                    <span class="side-nav-fadeout-on-closed media-body">Customize Pages</span>
                </a>
            </li>
            <!-- End Customize -->

        </ul>
    </aside>
    <!-- End Sidebar Nav -->

    <div class="content">
        <div class="py-4 px-3 px-md-4">

            <div class="row">
                <div class="col-12">
                    <div class="col-md-12">
                        <div class="card-header">
                            <h5 class="font-weight-semi-bold mb-0">Edit Hoalder Details</h5>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="col-md-12">
                             <form class="col-md-12 mt-3" method="POST" enctype="multipart/form-data">
                              <div class="modal-body">

                                    <div class="form-group">
                                        <label for="name"><i class="fas fa-users material-icons-name"></i></label>
                                        <input type="text" name="name" id="name" placeholder="Your Name"/>
                                    </div>
                                    <div class="form-group">
                                        <label for="email"><i class="fas fa-envelope material-icons-name"></i></label>
                                        <input type="email" name="email" id="email" placeholder="Your Email"/>
                                    </div>
                                    <div class="form-group">
                                        <label for="name"><i class="fas fa-search-location material-icons-name"></i></label>
                                        <input type="text" name="address" id="name" placeholder="Your Address"/>
                                    </div>
                                    <div class="form-group">
                                        <label for="name"><i class="fas fa-info-circle material-icons-name"></i></label>
                                        <input type="text" name="nic" id="name" placeholder="Your NIC Number"/>
                                    </div>
                                    <div class="form-group">
                                        <label for="name"><i class="fas fa-phone material-icons-name"></i></label>
                                        <input type="text" name="phone" id="name" placeholder="Your Phone Number"/>
                                    </div>

                                    <div class="form-group">
                                        <label for="name"><i class="fas fa-users material-icons-name"></i></label>
                                        <input type="text" name="username" id="name" placeholder="Username"/>
                                    </div>
                                        
                              </div>
                          <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" onclick="window.location.href = 'member.php'" data-dismiss="modal">Back</button>
                            <button type="submit" name="holder" class="btn btn-primary">Save changes</button>
                          </div>
                            </form>
                            <?php
                                   if(isset($_POST['holder'])){

                                    $name = $_REQUEST['name'];
                                    $email = $_REQUEST['email'];
                                    $address = $_REQUEST['address'];
                                    $phone = $_REQUEST['phone'];
                                    $nic = $_REQUEST['nic'];
                                    $username = $_REQUEST['username'];

                                    $member_id = $_REQUEST['member_id'];

                                      
                                      if(!empty($name))
                                      {
                                        $query3="UPDATE member SET name='$name' where member_id = '$member_id'  ";
                                        $sql3=mysqli_query($con,$query3);
                                        echo "<script type=\"text/javascript\"> alert(\"Updated Succussfully\"); window.location= \"member.php\";</script>";
                                      }

                                      if(!empty($address))
                                      {
                                        $query3="UPDATE member SET address='$address' where member_id = '$member_id'  ";
                                        $sql3=mysqli_query($con,$query3);
                                        echo "<script type=\"text/javascript\"> alert(\"Updated Succussfully\"); window.location= \"member.php\";</script>";
                                      }

                                      if(!empty($email))
                                      {
                                        $query3="UPDATE member SET email='$email' where member_id = '$member_id'  ";
                                        $sql3=mysqli_query($con,$query3);
                                        echo "<script type=\"text/javascript\"> alert(\"Updated Succussfully\"); window.location= \"member.php\";</script>";
                                      }
                                      if(!empty($phone))
                                      {
                                        $query3="UPDATE member SET phone='$phone' where member_id = '$member_id'  ";
                                        $sql3=mysqli_query($con,$query3);
                                        echo "<script type=\"text/javascript\"> alert(\"Updated Succussfully\"); window.location= \"member.php\";</script>";
                                      }

                                      if(!empty($nic))
                                      {
                                        $query3="UPDATE member SET nic='$nic' where member_id = '$member_id'  ";
                                        $sql3=mysqli_query($con,$query3);
                                        echo "<script type=\"text/javascript\"> alert(\"Updated Succussfully\"); window.location= \"member.php\";</script>";
                                      }

                                      if(!empty($username))
                                      {
                                        $query3="UPDATE member SET username='$username' where member_id = '$member_id'  ";
                                        $sql3=mysqli_query($con,$query3);
                                        echo "<script type=\"text/javascript\"> alert(\"Updated Succussfully\"); window.location= \"member.php\";</script>";
                                      }


                                    }
                                    
                                  ?>

                        </div>
                    </div>
                </div>
            </div>


        </div>



        <!-- Footer -->
        <footer class="small p-3 px-md-4 mt-auto">
            <div class="row justify-content-between">
                <div class="col-lg text-center text-lg-right">
                    &copy;<script>document.write(new Date().getFullYear());</script> Welfare Society RDA. All Rights Reserved. Created By : K.V.S.P.Bopitiya | SEU/IS/16/MIT/091
                </div>
            </div>
        </footer>
        <!-- End Footer -->
    </div>
</main>


<script src="public/graindashboard/js/graindashboard.js"></script>
<script src="public/graindashboard/js/graindashboard.vendor.js"></script>

<!-- DEMO CHARTS -->
<script src="public/demo/resizeSensor.js"></script>
<script src="public/demo/chartist.js"></script>
<script src="public/demo/chartist-plugin-tooltip.js"></script>
<script src="public/demo/gd.chartist-area.js"></script>
<script src="public/demo/gd.chartist-bar.js"></script>
<script src="public/demo/gd.chartist-donut.js"></script>
<script>
    $.GDCore.components.GDChartistArea.init('.js-area-chart');
    $.GDCore.components.GDChartistBar.init('.js-bar-chart');
    $.GDCore.components.GDChartistDonut.init('.js-donut-chart');
</script>
</body>
</html>