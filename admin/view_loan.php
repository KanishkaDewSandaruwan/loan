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
                <div class="h3 mb-0">Loan Monthly Payments</div>
                <div class="h3 mb-0"><button class="btn btn-lg btn-primary ml-3" type="button" onclick="window.location.href='loan.php'">Back</button></div>
            </div>

            <div class="row">
                <div class="col-6">
                    <div class="card mb-3 mb-md-4">
                        <div class="card-header">
                            <?php 
                            $loan_id = $_REQUEST['loan_id'];
                            $viewquery = " SELECT * FROM loan where loan_id  = '$loan_id' ";
                            $viewresult = mysqli_query($con,$viewquery);
                            $row = mysqli_fetch_assoc($viewresult); 

                            ?>
                            <h5 class="font-weight-semi-bold mb-0">Loan Amount is : <?php echo $row['loan_amount']; ?></h5>
                            <h5 class="font-weight-semi-bold mb-0">Current Balance Loan is : <?php echo $row['current_balance']; ?></h5>
                            <h5 class="font-weight-semi-bold mb-0">Monthly Pyament : <?php echo $row['monthly_amount']; ?></h5>
                            <h5 class="font-weight-semi-bold mb-0">Number of Months : <?php echo $row['number_of_months']; ?></h5>
                            <h5 class="font-weight-semi-bold mb-0">Number of Paid Months : <?php echo $row['number_of_paid']; ?></h5>
                            <h5 class="font-weight-semi-bold mb-0 mt-3">Loan Monthly Payments List</h5>
                        </div>

                        <div class="card-body pt-0">
                            <div class="table-responsive-xl">
                                <table class="table text-nowrap mb-0">
                                    <thead class="bg-primary text-white">
                                    <tr>
                                        <th class="font-weight-semi-bold border-top-0 py-2">Amount</th>
                                        <th class="font-weight-semi-bold border-top-0 py-2">Deposit Date</th>
                                        <th class="font-weight-semi-bold border-top-0 py-2">Balance</th>
                                    </tr>
                                    </thead>
                                    <?php 
                                    $count=1;
                                    $loan_id = $_REQUEST['loan_id'];
                                         $viewquery = " SELECT * FROM loan_payment where loan_id = '$loan_id' ";
                                          $viewresult = mysqli_query($con,$viewquery);?>
                                    <tbody>
                                     <?php while($row = mysqli_fetch_assoc($viewresult)) { ?>
                                    <tr>
                                        <td class="py-3"><?php echo $row['amount']; ?></td>
                                        <td class="py-3"><?php echo $row['trndate']; ?></td>
                                        <td class="py-3"><?php echo $row['balance']; ?></td>
                                    </tr>
                                     <?php  $count++; } ?>
                                    </tbody>
                                </table>
                            </div>
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