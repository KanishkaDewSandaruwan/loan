<?php require_once "head_home.php"; ?>
    <main>

        <!-- Hero Start-->
        <div class="hero-area2  slider-height2 hero-overly2 d-flex align-items-center ">
            <div class="container">
                <div class="row">
                    <div class="col-xl-12">
                        <div class="hero-cap text-center pt-50">
                            <h2>Register for Loan</h2>
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
                    <div class="col-lg-8">
                        <div class="apply-wrapper">
                            <!-- Form -->
                            <form action="" method="POST" enctype="multipart/form-data">
                                <div class="row">

                                    <div class="col-lg-6">
                                       <div class="single-form">
                                            <label>* PF No:  </label>
                                            <input type="text" name="pf" placeholder="Enter PF No: ">
                                       </div>
                                    </div>
                                    <div class="col-lg-12">
                                       <div class="single-form">
                                            <label>* Address for Station  </label>
                                            <input type="text" name="address" placeholder="Enter Address for Station ">
                                       </div>
                                    </div>
                                   <!-- Nice Select -->
                                   <div class="col-lg-6">
                                       <div class="single-form">
                                            <label>* Bank Account Number  </label>
                                            <input type="number" name="bank_account" placeholder="Enter Bank Account Number">
                                       </div>
                                    </div>

                                    <div class="col-lg-6">
                                       <div class="single-form">
                                            <label>* Bank Branch  </label>
                                            <input type="text" name="bank_branch" placeholder="Enter Bank Branch ">
                                       </div>
                                    </div>

                                    <div class="col-lg-12">
                                       <div class="single-form">
                                            <label>* Bank Account Front Page Image  </label>
                                            <input type='file' name='file' />
                                       </div>
                                    </div>
                                </div>
                                <button type="submit" name="submit" class="btn apply-btn mt-30">NEXT </button>
                            </form>
                             <?php

                        if (isset($_POST['submit'])) {

                            $address = $_REQUEST['address'];
                            $pf = $_REQUEST['pf'];
                            $bank_account = $_REQUEST['bank_account'];
                            $bank_branch = $_REQUEST['bank_branch'];

                            $name = $_FILES['file']['name'];
                            $target_dir = "upload/member/";
                            $target_file = $target_dir . basename($_FILES["file"]["name"]);
                            $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
                            $extensions_arr = array("jpg","jpeg","png","gif");

                            $member_id = $_SESSION['member_id'];

                            $cdate = date("Y/m/d m:H:s");

                            $query2="SELECT * FROM holder WHERE member_id='$member_id'";
                            $sql2=mysqli_query($con,$query2);


                            if (empty($address)) {
                                
                                echo "<script>alert(\"Plese Enter Your address.\");window.location.href=\"register_holder.php\";</script>";
                                
                            }
                            elseif (empty($pf)) {
                                
                                echo "<script>alert(\"Plese Enter Your Username.\");window.location.href=\"register_holder.php\";</script>";
                                
                            }
                            elseif (empty($bank_account)) {
                                
                                echo "<script>alert(\"Plese Enter Your Phone Number.\");window.location.href=\"register_holder.php\";</script>";
                                
                            }
                            elseif (empty($bank_branch)) {
                                
                                echo "<script>alert(\"Plese Enter Your NIC Number.\");window.location.href=\"register_holder.php\";</script>";
                                
                            }
                            elseif (mysqli_num_rows($sql2)>0) {
                            
                                echo "<script>alert(\"You Alrady Registed.\");window.location.href=\"apply.php\";</script>";
                                
                            }
                            else {

                                if( in_array($imageFileType,$extensions_arr) ){

                                        move_uploaded_file($_FILES['file']['tmp_name'],$target_dir.$name);

                                        $q1="INSERT INTO holder(member_id,pf_no,station_address,bank_account,bank_branch,trndate,bank_image) values('$member_id','$pf','$address','$bank_account','$bank_branch','$cdate','$name')";
                                        $res1=mysqli_query($con,$q1);
                                        if ( $res1){
                                            echo "<script>alert(\"congratulations! your registration was successful.\");window.location.href=\"apply.php\";</script>";
                                        }
                                        else{
                                            echo "<script>alert(\"Ohh Snap! your registration Fail. Plese Try Again!.\");window.location.href=\"register_holder.php\";</script>";
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