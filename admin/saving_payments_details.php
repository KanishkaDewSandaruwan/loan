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
                <div class="h3 mb-0">Saving Deposits</div>
                <div class="h3 mb-0"><button class="btn btn-lg btn-primary" type="button" data-toggle="modal" data-target="#exampleModal" >Add New</button><button class="btn btn-lg btn-primary ml-3" type="button" onclick="window.location.href='saving.php'">Back</button></div>
            </div>

            <div class="row">
                <div class="col-6">
                    <div class="card mb-3 mb-md-4">
                        <div class="card-header">
                            <?php 
                            $saving_id = $_REQUEST['saving_id'];
                            $viewquery = " SELECT * FROM saving where saving_id  = '$saving_id' ";
                            $viewresult = mysqli_query($con,$viewquery);
                            $row = mysqli_fetch_assoc($viewresult); ?>
                            <h5 class="font-weight-semi-bold mb-0">This Account Current Balance is : <?php echo $row['balance']; ?></h5>
                            <h5 class="font-weight-semi-bold mb-0">Monthly Saving Amount : <?php echo $row['saving_amount']; ?></h5>
                            <h5 class="font-weight-semi-bold mb-0 mt-3">Saving Deposits List</h5>
                        </div>

                        <div class="card-body pt-0">
                            <div class="table-responsive-xl">
                                <table class="table text-nowrap mb-0">
                                    <thead class="bg-primary text-white">
                                    <tr>
                                        <th class="font-weight-semi-bold border-top-0 py-2">Amount</th>
                                        <th class="font-weight-semi-bold border-top-0 py-2">Deposit Date</th>
                                        <th class="font-weight-semi-bold border-top-0 py-2">Actions</th>
                                    </tr>
                                    </thead>
                                    <?php 
                                    $count=1;
                                    $saving_id = $_REQUEST['saving_id'];
                                         $viewquery = " SELECT * FROM deposit_saving where saving_id = '$saving_id' ";
                                          $viewresult = mysqli_query($con,$viewquery);?>
                                    <tbody>
                                     <?php while($row = mysqli_fetch_assoc($viewresult)) { ?>
                                    <tr>
                                        <td class="py-3"><?php echo $row['amount']; ?></td>
                                        <td class="py-3"><?php echo $row['trndate']; ?></td>
                                        <td class="py-3">
                                            <!-- Example single danger button -->
                                            <div class="btn-group">
                                                  <button type="button" class="btn btn-danger dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                    Action
                                                  </button>
                                                  <div class="dropdown-menu">
                                                    <a class="dropdown-item" href="delete.php?saving_deposit_id=<?php echo $row['saving_deposit_id'] ?>&sid=<?php echo $row['saving_id'] ?>">Delete</a>
                                                  </div>
                                                </div>
                                        </td>
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



        <!-- Modal -->
                    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                      <div class="modal-dialog" role="document">
                        <div class="modal-content">
                          <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel" style="text-align: center;">Cash Deposit</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                              <span aria-hidden="true">&times;</span>
                            </button>
                          </div>
                            <form action="" method="POST"> 
                          <div class="modal-body">

                             <div class="col-lg-12">
                          <div class="single-form">
                               <input type="number" name="deposit" placeholder="Enter Deposit Amount (Rs)">
                          </div>
                       </div>

                          </div>
                          <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                            <button type="submit" name="add"  class="btn btn-primary">Save changes</button>
                          </div>
                           <?php

                        if (isset($_POST['add'])) {

                            $deposit = $_REQUEST['deposit'];
                            $saving_id = $_REQUEST['saving_id'];
                            $cdate = date("Y/m/d m:H:s");

                            $viewquery = " SELECT * FROM saving where saving_id  = '$saving_id' ";
                            $viewresult = mysqli_query($con,$viewquery);
                            $row = mysqli_fetch_assoc($viewresult);

                            if (empty($deposit)) {

                                echo "<script>alert(\"Plese Enter Your Name.\");window.location.href=\"saving_payments_details.php?saving_id=".$saving_id."\";</script>";
                                
                            }
                            if ($deposit < $row['saving_amount'] ) {

                                echo "<script>alert(\"Sorry!! Your amout is less than Monthly Saviang Amount.\");window.location.href=\"saving_payments_details.php?saving_id=".$saving_id."\";</script>";
                                
                            }
                            else {

                                $new_balance = $row['balance'] + $deposit;

                                

                                $q1="INSERT INTO deposit_saving(saving_id,amount,trndate) values('$saving_id','$deposit','$cdate')";
                                $res1=mysqli_query($con,$q1);

                                if ( $res1){

                                    $query3="UPDATE saving SET balance='$new_balance' WHERE saving_id='".$saving_id."'";
                                    $sql3=mysqli_query($con,$query3);

                                    echo "<script>alert(\"congratulations! Deposit Update successful.\");window.location.href=\"saving_payments_details.php?saving_id=".$saving_id."\";</script>";
                                }
                                else{
                                    echo "<script>alert(\"Ohh Snap! your Deposit Update Fail. Plese Try Again!.\");window.location.href=\"saving_payments_details.php?saving_id=".$saving_id."\";</script>";
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