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

            <div class="mb-3 mb-md-4 d-flex justify-content-between">
                <div class="h3 mb-0">Member</div>
                <div class="h3 mb-0"><button class="btn btn-lg btn-primary" type="button" onclick="window.location.href= 'member.php'" >Back</button></div>
            </div>

            <div class="row">
                <div class="col-12">
                    <div class="card mb-3 mb-md-4">
                        <div class="card-header">
                            <h5 class="font-weight-semi-bold mb-0">Holder Details</h5>
                        </div>
                        <?php $member_id = $_REQUEST['member_id'];
                         $viewquery = " SELECT * FROM holder where member_id = '$member_id' ";
                          $viewresult = mysqli_query($con,$viewquery);
                          if($row = mysqli_fetch_assoc($viewresult)) {  ?>

                        <div class="card-body pt-0">
                            <div class="table-responsive-xl">
                                <table class="table text-nowrap mb-0">
                                    <thead class="bg-primary text-white">
                                    <tr>
                                        <th class="font-weight-semi-bold border-top-0 py-2">PF. No</th>
                                        <th class="font-weight-semi-bold border-top-0 py-2">Station Address</th>
                                        <th class="font-weight-semi-bold border-top-0 py-2">Bank Account</th>
                                        <th class="font-weight-semi-bold border-top-0 py-2">Branch</th>
                                        <th class="font-weight-semi-bold border-top-0 py-2">Reg: Date</th>
                                        <th class="font-weight-semi-bold border-top-0 py-2">Bank Book Image</th>
                                        <th class="font-weight-semi-bold border-top-0 py-2">Actions</th>
                                    </tr>
                                    </thead>
                                    <?php 
                                    $count=1;
                                    $member_id = $_REQUEST['member_id'];
                                         $viewquery = " SELECT * FROM holder where member_id = '$member_id' ";
                                          $viewresult = mysqli_query($con,$viewquery);?>
                                    <tbody>
                                     <?php while($row = mysqli_fetch_assoc($viewresult)) { 
                                        $bank_image = $row['bank_image'];
                                         $image_src1 = "../upload/member/".$bank_image;?>
                                    <tr>
                                        <td class="py-3"><?php echo $row['pf_no']; ?></td>
                                        <td class="py-3"><?php echo $row['station_address']; ?></td>
                                        <td class="py-3"><?php echo $row['bank_account']; ?></td>
                                        <td class="py-3"><?php echo $row['bank_branch']; ?></td>
                                        <td class="py-3"><?php echo $row['trndate']; ?></td>
                                        <td class="py-3"><img style="width: 100%; margin-top: 10px;" src="<?php echo $image_src1; ?>" alt=""></td>
                                        <td class="py-3">
                                            <!-- Example single danger button -->
                                            <div class="btn-group">
                                                  <button type="button" class="btn btn-danger dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                    Action
                                                  </button>
                                                  <div class="dropdown-menu">
                                                    <a class="dropdown-item" href="edit_holder.php?holder_id=<?php echo $row['holder_id'] ?>&member_id=<?php echo $row['member_id'] ?>">Edit</a>
                                                    <a class="dropdown-item" href="delete.php?holder_id=<?php echo $row['holder_id'] ?>">Delete</a>
                                                  </div>
                                                </div>
                                        </td>
                                    </tr>
                                     <?php  $count++; } ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    <?php }else{ ?>
                            <h1 class="p-5 text-danger">No any Holder Details</h1>
                    <?php } ?>
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



        <!-- Modal -->
                    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                      <div class="modal-dialog" role="document">
                        <div class="modal-content">
                          <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel" style="text-align: center;">Change Password</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                              <span aria-hidden="true">&times;</span>
                            </button>
                          </div>
                            <form action="" method="POST"> 
                          <div class="modal-body">

                              <div class="form-group">
                                <label for="name"><i class="fas fa-users material-icons-name"></i></label>
                                <input required type="text" name="name" id="name" placeholder="Your Name"/>
                            </div>
                            <div class="form-group">
                                <label for="email"><i class="fas fa-envelope material-icons-name"></i></label>
                                <input required type="email" name="email" id="email" placeholder="Your Email"/>
                            </div>
                            <div class="form-group">
                                <label for="name"><i class="fas fa-search-location material-icons-name"></i></label>
                                <input required type="text" name="address" id="name" placeholder="Your Address"/>
                            </div>
                            <div class="form-group">
                                <label for="name"><i class="fas fa-info-circle material-icons-name"></i></label>
                                <input required type="text" name="nic" id="name" placeholder="Your NIC Number"/>
                            </div>
                            <div class="form-group">
                                <label for="name"><i class="fas fa-phone material-icons-name"></i></label>
                                <input required type="text" name="phone" id="name" placeholder="Your Phone Number"/>
                            </div>

                            <div class="form-group">
                                <label for="name"><i class="fas fa-users material-icons-name"></i></label>
                                <input required type="text" name="username" id="name" placeholder="Username"/>
                            </div>
                            <div class="form-group">
                                <label for="pass"><i class="fas fa-lock"></i></label>
                                <input required type="password" name="pass" id="pass" placeholder="Password"/>
                            </div>
                            <div class="form-group">
                                <label for="re-pass"><i class="fas fa-lock"></i></label>
                                <input required type="password" name="re_pass" id="re_pass" placeholder="Repeat your password"/>
                            </div>
                            <div class="form-group">
                                <input type="checkbox" name="checkbox" id="agree-term" class="agree-term" />
                                <label for="agree-term" class="label-agree-term"><span><span></span></span>I agree all statements in Terms of service</label>
                            </div>
                          </div>
                          <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                            <button type="submit" name="signup"  class="btn btn-primary">Save changes</button>
                          </div>
                           <?php

                        if (isset($_POST['signup'])) {

                            $name = $_REQUEST['name'];
                            $email = $_REQUEST['email'];
                            $address = $_REQUEST['address'];
                            $phone = $_REQUEST['phone'];
                            $nic = $_REQUEST['nic'];
                            $username = $_REQUEST['username'];
                            $psaaword = $_REQUEST['pass'];
                            $conpw = $_REQUEST['re_pass'];
                            $cdate = date("Y/m/d m:H:s");

                            $query2="SELECT * FROM member WHERE email='$email'";
                            $sql2=mysqli_query($con,$query2);

                            $query3="SELECT * FROM member WHERE phone='$phone'";
                            $sql3=mysqli_query($con,$query3);

                            $query4="SELECT * FROM member WHERE nic='$nic'";
                            $sql4=mysqli_query($con,$query4);

                            $query5="SELECT * FROM member WHERE username='$username'";
                            $sql5=mysqli_query($con,$query5);

                            if (empty($name)) {

                                echo "<script>alert(\"Plese Enter Your Name.\");window.location.href=\"member.php\";</script>";
                                
                            }
                            elseif (empty($email)) {
                                
                                echo "<script>alert(\"Plese Enter Your Email.\");window.location.href=\"member.php\";</script>";
                                
                            }
                            elseif (empty($address)) {
                                
                                echo "<script>alert(\"Plese Enter Your address.\");window.location.href=\"member.php\";</script>";
                                
                            }
                            elseif (empty($username)) {
                                
                                echo "<script>alert(\"Plese Enter Your Username.\");window.location.href=\"member.php\";</script>";
                                
                            }
                            elseif (empty($phone)) {
                                
                                echo "<script>alert(\"Plese Enter Your Phone Number.\");window.location.href=\"member.php\";</script>";
                                
                            }
                            elseif (empty($nic)) {
                                
                                echo "<script>alert(\"Plese Enter Your NIC Number.\");window.location.href=\"member.php\";</script>";
                                
                            }
                            elseif (empty($psaaword)) {
                                
                                echo "<script>alert(\"Plese Enter New Password.\");window.location.href=\"member.php\";</script>";
                                
                            }
                            elseif (empty($conpw)) {
                                
                                echo "<script>alert(\"Plese confirm Your Password.\");window.location.href=\"member.php\";</script>";
                            
                            }
                            elseif (!preg_match("/^([0]([0-9])([0-9])([0-9])([0-9])([0-9])([0-9])([0-9])([0-9])([0-9]))$/", $phone)) {

                                echo "<script>alert(\"Plese Enter Valid Phone Number.\");window.location.href=\"member.php\";</script>";
                                
                            }
                            elseif ($psaaword!=$conpw) {
                                
                                echo "<script>alert(\"Password is Not Match.\");window.location.href=\"member.php\";</script>";
                                
                            }
                            elseif (mysqli_num_rows($sql2)>0) {
                            
                                echo "<script>alert(\"Email already Exsisted.\");window.location.href=\"member.php\";</script>";
                                
                            }
                            elseif (mysqli_num_rows($sql5)>0) {
                            
                                echo "<script>alert(\"Username already Exsisted.\");window.location.href=\"member.php\";</script>";
                                
                            }
                            elseif (mysqli_num_rows($sql3)>0) {
                                
                                echo "<script>alert(\"Phone Number already Exsisted.\");window.location.href=\"member.php\";</script>";
                            }
                            elseif (mysqli_num_rows($sql4)>0) {
                            
                                echo "<script>alert(\"NIC Number already Exsisted.\");window.location.href=\"member.php\";</script>";
                                
                            }
                            elseif (empty($_POST['checkbox'])) {
                                echo '<script>alert("Plese Accept the Terms and Conditions.");window.location.href="member.php";</script>';
                            }
                            else {

                                $q1="INSERT INTO member(name,phone,address,nic,email,username,password,reg_date) values('$name','$phone','$address','$nic','$email','$username','".md5($psaaword)."','$cdate')";
                                $res1=mysqli_query($con,$q1);

                                if ( $res1){
                                    echo "<script>alert(\"congratulations! your registration was successful.\");window.location.href=\"member.php\";</script>";
                                }
                                else{
                                    echo "<script>alert(\"Ohh Snap! your registration Fail. Plese Try Again!.\");window.location.href=\"member.php\";</script>";
                                }
                            }
                        } ?>
                        </form>
                        </div>
                      </div>
                    </div>

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