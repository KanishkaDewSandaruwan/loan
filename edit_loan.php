<?php require_once "head_home.php"; ?>
    <main>

        <!-- Hero Start-->
        <div class="hero-area2  slider-height2 hero-overly2 d-flex align-items-center ">
            <div class="container">
                <div class="row">
                    <div class="col-xl-12">
                        <div class="hero-cap text-center pt-50">
                            <h2>Edit Application</h2>
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
                            <div class="row mt-5" id="depositandtemp">
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
                                    <button type="submit" name="both" class="btn apply-btn mt-30">APPLY NOW </button>
                                    <button type="button" name="" class="btn apply-btn mt-30" onclick="window.location.href = 'myloan.php' ">BACK </button>
                            </form>
                            <?php

                        if (isset($_POST['both'])) {

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
                            $extensions_arr_paysheet = array("jpg","jpeg","png","gif","pdf","doc","txt");
                            $extensions_arr_doc = array("pdf","doc","txt");

                            $member_id = $_SESSION['member_id'];
                            $loan_id = $_REQUEST['loan_id'];

                            $cdate = date("Y/m/d m:H:s");

                            if( in_array($imageFileType2,$extensions_arr) ){
                              move_uploaded_file($_FILES['file2']['tmp_name'],$target_dir.$name2);
                              $query="UPDATE loan SET signature_image='$name2' where loan_id = '$loan_id' ";
                              mysqli_query($con,$query);
                              echo '<script>alert("Updated Succussfully"); window.location.href="myloan.php";</script>';
                            }

                            if( in_array($imageFileType1,$extensions_arr_paysheet) ){
                              move_uploaded_file($_FILES['file1']['tmp_name'],$target_dir.$name1);
                              $query="UPDATE loan SET paysheet ='$name1' where loan_id = '$loan_id' ";
                              mysqli_query($con,$query);
                              echo '<script>alert("Updated Succussfully"); window.location.href="myloan.php";</script>';
                          }

                          if( in_array($imageFileType3,$extensions_arr_doc) ){
                              move_uploaded_file($_FILES['file3']['tmp_name'],$target_dir.$name3);
                              $query="UPDATE loan SET document ='$name3' where loan_id = '$loan_id' ";
                              mysqli_query($con,$query);
                              echo '<script>alert("Updated Succussfully"); window.location.href="myloan.php";</script>';
                          }

                          if(!empty($loan))
                          {

                            $query3="UPDATE loan SET loan_amount='$loan' where loan_id = '$loan_id' ";
                            $sql3=mysqli_query($con,$query3);
                            $query4="UPDATE loan SET current_balance='$loan' where loan_id = '$loan_id' ";
                            $sql4=mysqli_query($con,$query4);
                            echo "<script type=\"text/javascript\"> alert(\"Updated Succussfully\"); window.location= \"myloan.php\";</script>";
                          }
                          if(!empty($month))
                          {

                            $query3="UPDATE loan SET number_of_months='$month' where loan_id = '$loan_id' ";
                            $sql3=mysqli_query($con,$query3);
                            echo "<script type=\"text/javascript\"> alert(\"Updated Succussfully\"); window.location= \"myloan.php\";</script>";
                          }

                            
                        } ?>
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