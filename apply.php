<?php require_once "head_home.php"; ?>
<?php 
$member_id = $_SESSION['member_id'];
$viewquery = "SELECT * FROM holder where member_id = '$member_id'";
$viewresult = mysqli_query($con,$viewquery);

$viewquery1 = "SELECT * FROM loan where status = 'Pending' OR status = 'Accept'  AND member_id = '$member_id' ";
$viewresult1 = mysqli_query($con,$viewquery1);

if (!mysqli_fetch_assoc($viewresult)) {
    echo '<script>window.location.href="register_hoalder.php";</script>';
} ?>
    <main>

        <!-- Hero Start-->
        <div class="hero-area2  slider-height2 hero-overly2 d-flex align-items-center ">
            <div class="container">
                <div class="row">
                    <div class="col-xl-12">
                        <div class="hero-cap text-center pt-50">
                            <h2>Apply Form</h2>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--Hero End -->
        <!-- Apply Area Start -->
        <div class="apply-area pt-150 pb-150">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-10">
                        <div class="apply-wrapper">
                            <!-- Form -->
                                <div class="row">
                                    <div class="col-lg-6">
                                       <div class="single-form">

                                         <?php 
                                        $member_id = $_SESSION['member_id'];
                                        $viewquery2 = "SELECT * FROM saving where status = 'Accepted' OR status = 'Pending' AND member_id = '$member_id' ";
                                        $viewresult2 = mysqli_query($con,$viewquery2); 
                                        $row = mysqli_fetch_assoc($viewresult2);

                                        $viewquery3 = "SELECT * FROM loan where status = 'Accepted' OR  status = 'Pending' AND member_id = '$member_id' ";
                                        $viewresult3 = mysqli_query($con,$viewquery3); 
                                        $row7 = mysqli_fetch_assoc($viewresult3);

                                        if (!isset($row7['loan_id']) || !isset($row['saving_id']) ) {?>


                                            <label>* Select LOAN Type </label>
                                            <div class="select-option mb-10">
                                                <select onchange="select()" name="select" id="select1">
                                                    <option selected></option>

                                                <?php 
                                                    $member_id = $_SESSION['member_id'];
                                                    $viewquery5 = "SELECT * FROM saving where status = 'Accepted' OR status = 'Pending' AND member_id = '$member_id' ";
                                                    $viewresult5 = mysqli_query($con,$viewquery5); 
                                                    $row5 = mysqli_fetch_assoc($viewresult5);

                                                    $viewquery4 = "SELECT * FROM loan where status = 'Accepted' OR status = 'Pending' AND member_id = '$member_id' ";
                                                    $viewresult4 = mysqli_query($con,$viewquery4); 
                                                    $row8 = mysqli_fetch_assoc($viewresult4); ?>

                                                <?php if (!isset($row8['loan_id']) && !isset($row5['saving_id'])) { ?>
                                                    <option>Saving Deposit & Temporary Loan</option>
                                                    <option>Temporary Loan</option>
                                                    <option>Saving Deposit</option>

                                                <?php }else if (!isset($row8['loan_id'])) { ?>
                                                    <option>Temporary Loan</option>

                                                <?php }else if (!isset($row5['saving_id'])) { ?>
                                                    <option>Saving Deposit</option>
                                                <?php } ?>
                                                </select>
                                            </div>
                                        <?php }else{ ?>
                                            <h1>You alrady Applied.</h1>
                                            <p>Please Visit My Loan <a class="text-primary ml-3" href="myloan.php">Loan</a></p>
                                            <p>Please Visit My Savings <a class="text-primary ml-3" href="mysaving.php">Savings</a></p>
                                        <?php } ?>
                                       </div>
                                    </div>
                                </div>
                                <script type="text/javascript">
                                    $(document).ready(function(){

                                        $("#select1").on("change",function(){
                                            if ($(this).val() == 'Saving Deposit & Temporary Loan') {
                                                $('#deposit').hide();
                                                $('#temporary').hide();
                                                $('#depositandtemp').show();
                                            }else if ($(this).val() == 'Saving Deposit') {
                                                $('#depositandtemp').hide();
                                                $('#temporary').hide();
                                                $('#deposit').show();
                                            }else if ($(this).val() == 'Temporary Loan') {
                                                $('#deposit').hide();
                                                $('#depositandtemp').hide();
                                                $('#temporary').show();

                                            }else{
                                                alert("Please Select Loan Type to Countinue");
                                            }
                                        });
                                    });
                                </script>
                            <div class="row mt-5" id="depositandtemp" style="display: none;">
                            <form action="" method="POST" enctype="multipart/form-data">
                                    <hr>
                                    <div class="col-lg-12">
                                        <div class="single-form">
                                             <label>* Saving Deposit Amount (Rs)</label>
                                             <input type="number" name="saving" placeholder="Enter Saving Deposit Amount (Rs)">
                                        </div>
                                     </div>

                                     <div class="col-lg-12">
                                        <div class="single-form">
                                             <label>* Temporary Loan Amount (Rs)</label>
                                             <input type="number" name="loan" placeholder="Enter Temporary Loan Amount (Rs)">
                                        </div>
                                     </div>

                                     <div class="col-lg-12">
                                        <div class="single-form">
                                             <label>* Number of Month</label>
                                             <input type="number" name="month" placeholder="Enter Number of Month">
                                             <label class="text-danger">Loan installement Maximum time Period is 10 Month </label>
                                        </div>
                                     </div>

                                     <div class="col-lg-12 mt-5">
                                       <div class="single-form">
                                            <label>* Paysheet Image or Document  </label>
                                            <input type='file' name='file1' />
                                       </div>
                                    </div>

                                    <div class="col-lg-12">
                                       <div class="single-form">
                                            <label>* Signature Image  </label>
                                            <input type='file' name='file2' />
                                       </div>
                                    </div>

                                    <div class="col-lg-12 mt-5">
                                       <div class="single-form">
                                            <label>* Filled Document (*.pdf, *.doc, *.text)  </label>
                                            <input type='file' name='file3' />
                                       </div>
                                    </div>
                                    <button type="submit" name="both" class="btn apply-btn mt-30">APPLY NOW </button>
                            </form>
                            <?php

                        if (isset($_POST['both'])) {

                            $saving = $_REQUEST['saving'];
                            $loan = $_REQUEST['loan'];
                            $month = $_REQUEST['month'];

                            $name1 = $_FILES['file1']['name'];
                            $name2 = $_FILES['file2']['name'];
                            $name3 = $_FILES['file3']['name'];

                            $target_dir = "upload/document/";

                            $target_file1 = $target_dir . basename($_FILES["file1"]["name"]);
                            $target_file2 = $target_dir . basename($_FILES["file2"]["name"]);
                            $target_file3 = $target_dir . basename($_FILES["file3"]["name"]);

                            $imageFileType1 = strtolower(pathinfo($target_file1,PATHINFO_EXTENSION));
                            $imageFileType2 = strtolower(pathinfo($target_file2,PATHINFO_EXTENSION));
                            $imageFileType3 = strtolower(pathinfo($target_file3,PATHINFO_EXTENSION));

                            $extensions_arr = array("jpg","jpeg","png","gif");
                            $extensions_arr_paysheet = array("jpg","jpeg","png","gif","pdf","docx","txt");
                            $extensions_arr_doc = array("pdf","docx","txt");

                            $member_id = $_SESSION['member_id'];

                            $cdate = date("Y/m/d m:H:s");

                                if (empty($saving)) {

                                    echo "<script>alert(\"Plese Enter Your Saving Amount.\");window.location.href=\"apply.php\";</script>";
                                    
                                }
                                elseif (empty($loan)) {
                                    
                                    echo "<script>alert(\"Plese EnterLoan Amount.\");window.location.href=\"apply.php\";</script>";
                                    
                                }elseif(empty($month)) { 
                                    
                                    echo "<script>alert(\"Please Enter Number of Month.\");window.location.href=\"apply.php\";</script>";
                                    
                                }elseif($month > 10) { 
                                    
                                    echo "<script>alert(\"Loan installement Maximum time Period is 10 Month.\");window.location.href=\"apply.php\";</script>";
                                    
                                }
                                elseif(!isset($_FILES['file1']) && empty($_FILES['file1']['name'])) { 
                                    
                                    echo "<script>alert(\"Please Upload Pay Sheet.\");window.location.href=\"apply.php\";</script>";
                                    
                                }
                                elseif(!isset($_FILES['file2']) && empty($_FILES['file2']['name'])) { 
                                    
                                    echo "<script>alert(\"Please Upload Signature Image.\");window.location.href=\"apply.php\";</script>";
                                    
                                }
                                elseif(!isset($_FILES['file3']) && empty($_FILES['file3']['name'])) { 
                                    
                                    echo "<script>alert(\"Please upload Fillded form Document. It is Mandatory for Apply.\");window.location.href=\"apply.php\";</script>";
                                    
                                }
                                else {

                                    if( in_array($imageFileType1,$extensions_arr_paysheet) ){
                                        if( in_array($imageFileType2,$extensions_arr) ){
                                            if( in_array($imageFileType3,$extensions_arr_doc) ){

                                                    move_uploaded_file($_FILES['file1']['tmp_name'],$target_dir.$name1);
                                                    move_uploaded_file($_FILES['file2']['tmp_name'],$target_dir.$name2);
                                                    move_uploaded_file($_FILES['file3']['tmp_name'],$target_dir.$name3);

                                                    $q1="INSERT INTO loan(member_id,loan_amount,number_of_months,signature_image,status,trndate,document,paysheet,current_balance,monthly_amount,number_of_paid) values('$member_id','$loan','$month','$name2','Pending','$cdate','$name3','$name1','$loan','Pending','Pending')";
                                                    $res1=mysqli_query($con,$q1);

                                                    $q2="INSERT INTO saving(member_id,saving_amount,trn_date,status,saving_signature_image,balance,request) values('$member_id','$saving','$cdate','Pending','$name2','0','No')";
                                                    $res2=mysqli_query($con,$q2);

                                                    if ( $res1){
                                                        if ($res2) {
                                                            echo "<script>alert(\"congratulations! your Application was Sent.\");window.location.href=\"apply.php\";</script>";
                                                        }else{
                                                            echo "<script>alert(\"Ohh Snap! Something went Wrong!.\");window.location.href=\"apply.php\";</script>";
                                                        }
                                                    }
                                                    else{
                                                        echo "<script>alert(\"Ohh Snap! Something went Wrong!.\");window.location.href=\"apply.php\";</script>";
                                                    }
                                            }
                                        }
                                    }
                                }
                            
                        } ?>
                            </div>
                            <div class="row mt-5" id="deposit" style="display: none;">
                                <form action="" method="POST" enctype="multipart/form-data">

                                    <hr>
                                    <div class="col-lg-12">
                                        <div class="single-form">
                                             <label>* Saving Deposit Amount (Rs)</label>
                                             <input type="number" name="saving" placeholder="Enter Saving Deposit Amount (Rs)">
                                        </div>
                                     </div>

                                     <div class="col-lg-12">
                                       <div class="single-form">
                                            <label>* Paysheet Image or Document  </label>
                                            <input type='file' name='file1' />
                                       </div>
                                    </div>

                                    <div class="col-lg-12">
                                       <div class="single-form">
                                            <label>* Signature Image  </label>
                                            <input type='file' name='file2' />
                                       </div>
                                    </div>
                                    <button type="submit" name="saving_account" class="btn apply-btn mt-30">APPLY NOW </button>
                                </form>
                                <?php

                        if (isset($_POST['saving_account'])) {

                                $saving = $_REQUEST['saving'];

                                $name1 = $_FILES['file1']['name'];
                                $name2 = $_FILES['file2']['name'];

                                $target_dir = "upload/document/";

                                $target_file1 = $target_dir . basename($_FILES["file1"]["name"]);
                                $target_file2 = $target_dir . basename($_FILES["file2"]["name"]);

                                $imageFileType1 = strtolower(pathinfo($target_file1,PATHINFO_EXTENSION));
                                $imageFileType2 = strtolower(pathinfo($target_file2,PATHINFO_EXTENSION));

                                $extensions_arr = array("jpg","jpeg","png","gif");
                                $extensions_arr_paysheet = array("jpg","jpeg","png","gif","pdf","docx","txt");

                                $member_id = $_SESSION['member_id'];

                                $cdate = date("Y/m/d m:H:s");

                                if (empty($saving)) {

                                    echo "<script>alert(\"Plese Enter Your Saving Amount.\");window.location.href=\"apply.php\";</script>";
                                    
                                }
                                elseif(!isset($_FILES['file1']) && empty($_FILES['file1']['name'])) { 
                                    
                                    echo "<script>alert(\"Please Upload Pay Sheet.\");window.location.href=\"apply.php\";</script>";
                                    
                                }
                                elseif(!isset($_FILES['file2']) && empty($_FILES['file2']['name'])) { 
                                    
                                    echo "<script>alert(\"Please Upload Signature Image.\");window.location.href=\"apply.php\";</script>";
                                    
                                }
                                else {

                                    if( in_array($imageFileType1,$extensions_arr_paysheet) ){
                                        if( in_array($imageFileType2,$extensions_arr) ){

                                                    move_uploaded_file($_FILES['file1']['tmp_name'],$target_dir.$name1);
                                                    move_uploaded_file($_FILES['file2']['tmp_name'],$target_dir.$name2);

                                                    $q2="INSERT INTO saving(member_id,saving_amount,trn_date,status,saving_signature_image,balance,request) values('$member_id','$saving','$cdate','Pending','$name2','0','No')";
                                                    $res2=mysqli_query($con,$q2);

                                                        if ($res2) {
                                                            echo "<script>alert(\"congratulations! your Saving Account Applying was successful.\");window.location.href=\"apply.php\";</script>";
                                                        }else{
                                                            echo "<script>alert(\"Ohh Snap! Something went Wrong!.\");window.location.href=\"apply.php\";</script>";
                                                        }
                                            
                                        }
                                    }
                                }
                            
                        } ?>
                            </div>
                            <div class="row mt-5" id="temporary" style="display: none;">
                            <form action="" method="POST" enctype="multipart/form-data">
                                    <hr>
    
                                     <div class="col-lg-12">
                                        <div class="single-form">
                                             <label>* Temporary Loan Amount (Rs)</label>
                                             <input type="number" name="loan" placeholder="Enter Temporary Loan Amount (Rs)">
                                        </div>
                                     </div>

                                     <div class="col-lg-12">
                                        <div class="single-form">
                                             <label>* Number of Month</label>
                                             <input type="number" name="month" placeholder="Enter Number of Month">
                                             <label class="text-danger">Loan installement Maximum time Period is 10 Month </label>
                                        </div>
                                     </div>

                                     <div class="col-lg-12 mt-5">
                                       <div class="single-form">
                                            <label>* Paysheet Image or Document  </label>
                                            <input type='file' name='file1' />
                                       </div>
                                    </div>

                                    <div class="col-lg-12">
                                       <div class="single-form">
                                            <label>* Signature Image  </label>
                                            <input type='file' name='file2' />
                                       </div>
                                    </div>

                                    <div class="col-lg-12 mt-5">
                                       <div class="single-form">
                                            <label>* Filled Document (*.pdf, *.doc, *.text)  </label>
                                            <input type='file' name='file3' />
                                       </div>
                                    </div>
                                <button type="submit" name="load_apply" class="btn apply-btn mt-30">APPLY NOW </button>
                            </form>
                            </div>
                                                         <?php

                        if (isset($_POST['load_apply'])) {

                            $loan = $_REQUEST['loan'];
                            $month = $_REQUEST['month'];

                            $name1 = $_FILES['file1']['name'];
                            $name2 = $_FILES['file2']['name'];
                            $name3 = $_FILES['file3']['name'];

                            $target_dir = "upload/document/";

                            $target_file1 = $target_dir . basename($_FILES["file1"]["name"]);
                            $target_file2 = $target_dir . basename($_FILES["file2"]["name"]);
                            $target_file3 = $target_dir . basename($_FILES["file3"]["name"]);

                            $imageFileType1 = strtolower(pathinfo($target_file1,PATHINFO_EXTENSION));
                            $imageFileType2 = strtolower(pathinfo($target_file2,PATHINFO_EXTENSION));
                            $imageFileType3 = strtolower(pathinfo($target_file3,PATHINFO_EXTENSION));

                            $extensions_arr = array("jpg","jpeg","png","gif");
                            $extensions_arr_paysheet = array("jpg","jpeg","png","gif","pdf","docx","txt");
                            $extensions_arr_doc = array("pdf","docx","txt");

                            $member_id = $_SESSION['member_id'];

                            $cdate = date("Y/m/d m:H:s");

                                if (empty($loan)) {
                                    
                                    echo "<script>alert(\"Plese EnterLoan Amount.\");window.location.href=\"apply.php\";</script>";
                                    
                                }
                                elseif(empty($month)) { 
                                    
                                    echo "<script>alert(\"Please Enter Number of Month.\");window.location.href=\"apply.php\";</script>";
                                    
                                }elseif(!isset($_FILES['file1']) && empty($_FILES['file1']['name'])) { 
                                    
                                    echo "<script>alert(\"Please Upload Pay Sheet.\");window.location.href=\"apply.php\";</script>";
                                    
                                }
                                elseif($month > 10) { 
                                    
                                    echo "<script>alert(\"Loan installement Maximum time Period is 10 Month.\");window.location.href=\"apply.php\";</script>";
                                    
                                }elseif(!isset($_FILES['file2']) && empty($_FILES['file2']['name'])) { 
                                    
                                    echo "<script>alert(\"Please Upload Signature Image.\");window.location.href=\"apply.php\";</script>";
                                    
                                }
                                elseif(!isset($_FILES['file3']) && empty($_FILES['file3']['name'])) { 
                                    
                                    echo "<script>alert(\"Please upload Fillded form Document. It is Mandatory for Apply.\");window.location.href=\"apply.php\";</script>";
                                    
                                }
                                else {

                                    if( in_array($imageFileType1,$extensions_arr_paysheet) ){
                                        if( in_array($imageFileType2,$extensions_arr) ){
                                            if( in_array($imageFileType3,$extensions_arr_doc) ){

                                                    move_uploaded_file($_FILES['file1']['tmp_name'],$target_dir.$name1);
                                                    move_uploaded_file($_FILES['file2']['tmp_name'],$target_dir.$name2);
                                                    move_uploaded_file($_FILES['file3']['tmp_name'],$target_dir.$name3);

                                                    $q1="INSERT INTO loan(member_id,loan_amount,number_of_months,signature_image,status,trndate,document,paysheet,current_balance,monthly_amount,number_of_paid) values('$member_id','$loan','$month','$name2','Pending','$cdate','$name3','$name1','$loan','Pending','Pending')";
                                                    $res1=mysqli_query($con,$q1);

                                                    if ( $res1){
                                                        echo "<script>alert(\"congratulations! your Loan Applying was successful.\");window.location.href=\"myloan.php\";</script>";
                                                    }
                                                    else{
                                                        echo "<script>alert(\"Ohh Snap! Something went Wrong!.\");window.location.href=\"apply.php\";</script>";
                                                    }
                                            }
                                        }
                                    }
                                }
                            
                        } ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Apply Area End -->

    </main>
    <footer>
        <!-- Footer Start-->
        <div class="footer-area">
            <div class="container">
                <div class="footer-bottom">
                    <div class="row d-flex justify-content-between align-items-center">
                        <div class="col-xl-9 col-lg-8">
                            <div class="footer-copy-right">
                                <p class="text-white">
                                 Copyright &copy;<script>document.write(new Date().getFullYear());</script>Welfare Society RDA. All Rights Reserved. <br> Created By : K.V.S.P.Bopitiya | SEU/IS/16/MIT/091</p>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-4">
                            <!-- Footer Social -->
                            <div class="footer-social f-right">
                                <?php $viewquery = "SELECT * FROM about";
                                  $viewresult = mysqli_query($con,$viewquery);
                                  $row0 = mysqli_fetch_assoc($viewresult); ?>
                                <a href="<?php echo $row0['twiter']; ?>"><i class="fab fa-twitter"></i></a>
                                <a href="<?php echo $row0['facebook']; ?>"><i class="fab fa-facebook-f"></i></a>
                                <a href="<?php echo $row0['instragram']; ?>"><i class="fab fa-instagram"></i></a>
                            </div>
                        </div>
                    </div>
               </div>
            </div>
        </div>
        <!-- Footer End-->
    </footer>
    <!-- Scroll Up -->
    <div id="back-top" >
        <a title="Go to Top" href="#"> <i class="fas fa-level-up-alt"></i></a>
    </div>


    <!-- JS here -->
		<!-- All JS Custom Plugins Link Here here -->
        <script src="./assets/js/vendor/modernizr-3.5.0.min.js"></script>
		<!-- Jquery, Popper, Bootstrap -->
		<script src="./assets/js/vendor/jquery-1.12.4.min.js"></script>
        <script src="./assets/js/popper.min.js"></script>
        <script src="./assets/js/bootstrap.min.js"></script>
	    <!-- Jquery Mobile Menu -->
        <script src="./assets/js/jquery.slicknav.min.js"></script>

		<!-- Jquery Slick , Owl-Carousel Plugins -->
        <script src="./assets/js/owl.carousel.min.js"></script>
        <script src="./assets/js/slick.min.js"></script>
		<!-- One Page, Animated-HeadLin -->
        <script src="./assets/js/wow.min.js"></script>
		<script src="./assets/js/animated.headline.js"></script>
        <script src="./assets/js/jquery.magnific-popup.js"></script>

		<!-- Nice-select, sticky -->
        <script src="./assets/js/jquery.nice-select.min.js"></script>
		<script src="./assets/js/jquery.sticky.js"></script>
        
        <!-- contact js -->
        <script src="./assets/js/contact.js"></script>
        <script src="./assets/js/jquery.form.js"></script>
        <script src="./assets/js/jquery.validate.min.js"></script>
        <script src="./assets/js/mail-script.js"></script>
        <script src="./assets/js/jquery.ajaxchimp.min.js"></script>
        
		<!-- Jquery Plugins, main Jquery -->	
        <script src="./assets/js/plugins.js"></script>
        <script src="./assets/js/main.js"></script>
        
    </body>
</html>