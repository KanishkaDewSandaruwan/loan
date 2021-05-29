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
                <div class="h3 mb-0">Savings</div>
            </div>

            <div class="row">
                <div class="col-12">
                    <div class="card mb-3 mb-md-4">
                        <div class="card-header">
                            <h5 class="font-weight-semi-bold mb-0">Savings List</h5>
                        </div>

                        <div class="card-body pt-0">
                            <div class="table-responsive-xl">
                                <table class="table text-nowrap mb-0">
                                    <thead class="bg-primary text-white">
                                    <tr>
                                        <th class="font-weight-semi-bold border-top-0 py-2">Member</th>
                                        <th class="font-weight-semi-bold border-top-0 py-2">Saving Amount</th>
                                        <th class="font-weight-semi-bold border-top-0 py-2">Balance</th>
                                        <th class="font-weight-semi-bold border-top-0 py-2">Signature</th>
                                        <th class="font-weight-semi-bold border-top-0 py-2">Applyied Date</th>
                                        <th class="font-weight-semi-bold border-top-0 py-2">Any Request</th>
                                        <th class="font-weight-semi-bold border-top-0 py-2">Status</th>
                                        <th class="font-weight-semi-bold border-top-0 py-2">Actions</th>
                                    </tr>
                                    </thead>
                                    <?php 
                                    $count=1;
                                         $viewquery = " SELECT * FROM saving";
                                          $viewresult = mysqli_query($con,$viewquery);?>
                                    <tbody>
                                     <?php while($row = mysqli_fetch_assoc($viewresult)) { 

                                        $member_id = $row['member_id']; 

                                        $viewquery1 = " SELECT * FROM member where member_id = '$member_id'";
                                          $viewresult1 = mysqli_query($con,$viewquery1);
                                          $row1 = mysqli_fetch_assoc($viewresult1);

                                        $saving_signature_image = $row['saving_signature_image'];
                                        $image_src1 = "../upload/document/".$saving_signature_image;?>
                                    <tr>
                                        <td class="py-3"><?php echo $row1['name']; ?><br><?php echo $row1['phone']; ?><br><?php echo $row1['address']; ?></td>
                                        <td class="py-3"><?php echo $row['saving_amount']; ?></td>
                                        <td class="py-3"><?php echo $row['balance']; ?></td>
                                        <td class="py-3"><img style="width: 200px; margin-top: 10px;" src="<?php echo $image_src1; ?>" alt=""></td>
                                        <td class="py-3"><?php echo $row['trn_date']; ?></td>
                                        <td class="py-3"><?php echo $row['request']; ?></td>
                                        <td class="py-3"><?php echo $row['status']; ?></td>
                                        <td class="py-3">
                                            <!-- Example single danger button -->
                                            <div class="btn-group">
                                                  <button type="button" class="btn btn-danger dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                    Action
                                                  </button>
                                                  <div class="dropdown-menu">
                                                    <?php if ($row['status'] == 'Accepted' ) {?>
                                                    <a class="dropdown-item" href="saving_payments_details.php?saving_id=<?php echo $row['saving_id'] ?>">Deposit Details</a>
                                                    <a class="dropdown-item" href="saving_payments_details.php?saving_id=<?php echo $row['saving_id'] ?>">Send Response</a>
                                                    <div class="dropdown-divider"></div>
                                                    <a class="dropdown-item" href="manage_request.php?cancel_loan=<?php echo $row['saving_id'] ?>">Cancel</a>
                                                    <div class="dropdown-divider"></div>
                                                    <a class="dropdown-item" href="delete.php?saving_id=<?php echo $row['saving_id'] ?>">Delete</a>
                                                <?php }else{ ?>
                                                    <a class="dropdown-item" href="manage_request.php?accept_loan=<?php echo $row['saving_id'] ?>">Accept</a>
                                                    <a class="dropdown-item" href="manage_request.php?cancel_loan=<?php echo $row['saving_id'] ?>">Cancel</a>
                                                    <a class="dropdown-item" href="delete.php?saving_id=<?php echo $row['saving_id'] ?>">Delete</a>
                                                <?php } ?>
                                                  </div>
                                                </div>
                                        </td>
                                    </tr>
                                     <?php $count++; } ?>
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