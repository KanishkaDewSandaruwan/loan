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
                <div class="h3 mb-0">Add Loan Details</div>
            </div>

            <div class="row">
                <div class="col-6">
                    <div class="card mb-3 mb-md-4">
                        <div class="card-header">
                            <h5 class="font-weight-semi-bold mb-0">Add Loan Details</h5>
                        </div>

                        <div class="card">
                           <form action="" method="POST"> 
                  <div class="modal-body">

                      <div class="col-lg-12">
                          <div class="single-form">
                               <input type="number" name="loan" placeholder="Enter Saving Deposit Amount (Rs)">
                          </div>
                       </div>

                        <div class="col-lg-12 mt-5">
                          <div class="single-form">
                               <input  type="number" name="months" placeholder="Enter number of Month (Optional)">
                          </div>
                       </div>
                  </div>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" onclick="window.location.href ='loan.php' " data-dismiss="modal">Back</button>
                    <button type="submit" name="submit"  class="btn btn-primary">Save changes</button>
                  </div>
                   <?php

                        if (isset($_POST['submit'])) {


                            $loan = $_REQUEST['loan'];
                            $months = $_REQUEST['months'];
                            $loan_id = $_REQUEST['loan_id'];

                            $cdate = date("Y/m/d m:H:s");

                            if(!empty($loan))
                            {
                              $query3="UPDATE loan SET monthly_amount='$loan' WHERE loan_id='".$loan_id."'";
                              $sql3=mysqli_query($con,$query3);
                              echo "<script type=\"text/javascript\"> alert(\"Updated Succussfully\"); window.location= \"loan.php\";</script>";
                            }

                            if(!empty($months))
                            {
                              $query3="UPDATE loan SET number_of_months='$months' WHERE loan_id='".$loan_id."'";
                              $sql3=mysqli_query($con,$query3);
                              echo "<script type=\"text/javascript\"> alert(\"Updated Succussfully\"); window.location= \"loan.php\";</script>";
                            }


              
                        } ?>
                </form>
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