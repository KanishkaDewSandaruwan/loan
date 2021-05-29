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

                                          <div class="form-row">
                                              <div class="form-group col-md-12 mt-2">
                                                <input type="text" name="pf" id="pf" class="form-control input-sm chat-input" placeholder="PF Number"/>
                                              </div>
                                          </div>
                                          <div class="form-row">
                                            <div class="form-group col-md-12 mt-2">
                                              <input type="text" name="address" id="address" class="form-control input-sm chat-input" placeholder="Station Address"/>
                                            </div>
                                          </div>
                                          <div class="form-row">
                                            <div class="form-group col-md-12 mt-2">
                                              <input type="text" name="bank_account" id="bank_account" class="form-control input-sm chat-input" placeholder="Bank Account Number"/>
                                            </div>
                                          </div>
                                          <div class="form-row">
                                            <div class="form-group col-md-12 mt-2">
                                              <input type="text" name="bank_branch" id="bank_branch" class="form-control input-sm chat-input" placeholder="Bank Branch"/>
                                            </div>
                                          </div>
                                          <br>  <br>

                                     Select Bank image to upload:<br>
                                    <input type="file" name="file" /><br><br>
                                        
                              </div>
                          <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" onclick="window.location.href = 'holder.php?member_id=<?php echo $_REQUEST['member_id']; ?>'" data-dismiss="modal">Back</button>
                            <button type="submit" name="holder" class="btn btn-primary">Save changes</button>
                          </div>
                            </form>
                            <?php
                                   if(isset($_POST['holder'])){

                                     $address = $_REQUEST['address'];
                                      $pf = $_REQUEST['pf'];
                                      $bank_account = $_REQUEST['bank_account'];
                                      $bank_branch = $_REQUEST['bank_branch'];
                 
                                      $name = $_FILES['file']['name'];


                                      // $target_dir = "upload/";
                                      $target_dir = "../upload/member/";
                                      $target_file = $target_dir . basename($_FILES["file"]["name"]);

                                      $holder_id = $_REQUEST['holder_id'];
                                      $member_id = $_REQUEST['member_id'];

                                      // Select file type
                                      $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

                                      // Valid file extensions
                                      $extensions_arr = array("jpg","jpeg","png","gif");

                                      // Check extension
                                      if( in_array($imageFileType,$extensions_arr) ){
                                          move_uploaded_file($_FILES['file']['tmp_name'],$target_dir.$name);
                                          $query="UPDATE holder SET bank_image='$name' where holder_id = '$holder_id'  ";
                                          mysqli_query($con,$query);
                                          echo '<script>alert("Header Details Change Success"); window.location.href="holder.php?member_id='.$member_id.'";</script>';
                                      }
                                      if(!empty($pf))
                                      {
                                        $query3="UPDATE holder SET pf_no='$pf' where holder_id = '$holder_id'  ";
                                        $sql3=mysqli_query($con,$query3);
                                        echo "<script type=\"text/javascript\"> alert(\"Updated Succussfully\"); window.location= \"holder.php?member_id=$member_id\";</script>";
                                      }

                                      if(!empty($address))
                                      {
                                        $query3="UPDATE holder SET station_address='$address' where holder_id = '$holder_id'  ";
                                        $sql3=mysqli_query($con,$query3);
                                        echo "<script type=\"text/javascript\"> alert(\"Updated Succussfully\"); window.location= \"holder.php?member_id=$member_id\";</script>";
                                      }

                                      if(!empty($bank_account))
                                      {
                                        $query3="UPDATE holder SET bank_account='$bank_account' where holder_id = '$holder_id'  ";
                                        $sql3=mysqli_query($con,$query3);
                                        echo "<script type=\"text/javascript\"> alert(\"Updated Succussfully\"); window.location= \"holder.php?member_id=$member_id\";</script>";
                                      }
                                      if(!empty($bank_branch))
                                      {
                                        $query3="UPDATE holder SET bank_branch='$bank_branch' where holder_id = '$holder_id'  ";
                                        $sql3=mysqli_query($con,$query3);
                                        echo "<script type=\"text/javascript\"> alert(\"Updated Succussfully\"); window.location= \"holder.php?member_id=$member_id\";</script>";
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