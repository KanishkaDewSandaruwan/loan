<?php 
require_once 'connection.php';
require_once 'user.php';
?>
<!doctype html>
<html class="no-js" lang="zxx">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>Welfare Society RDA</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="manifest" href="site.webmanifest">
        <link rel="shortcut icon" type="image/x-icon" href="img/logo.png">

        <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>

        <!-- CSS here -->
            <link rel="stylesheet" href="assets/css/bootstrap.min.css">
            <link rel="stylesheet" href="assets/css/owl.carousel.min.css">
            <link rel="stylesheet" href="assets/css/slicknav.css">
            <link rel="stylesheet" href="assets/css/flaticon.css">
            <link rel="stylesheet" href="assets/css/animate.min.css">
            <link rel="stylesheet" href="assets/css/magnific-popup.css">
            <link rel="stylesheet" href="assets/css/fontawesome-all.min.css">
            <link rel="stylesheet" href="assets/css/themify-icons.css">
            <link rel="stylesheet" href="assets/css/slick.css">
            <link rel="stylesheet" href="assets/css/nice-select.css">
            <link rel="stylesheet" href="assets/css/style.css">
   </head>

   <body>
    <!-- Preloader Start -->
    <div id="preloader-active">
        <div class="preloader d-flex align-items-center justify-content-center">
            <div class="preloader-inner position-relative">
                <div class="preloader-circle"></div>
                <div class="preloader-img pere-text">
                    <img src="img/logo.png" alt="">
                </div>
            </div>
        </div>
    </div>
    <!-- Preloader Start -->
    <header>
        <!-- Header Start -->
        <div class="header-area header-transparent">
                <div class="main-header  header-sticky">
                    <div class="container-fluid">
                        <div class="row align-items-center">
                            <!-- Logo -->
                            <div class="col-xl-2 col-lg-2 col-md-1">
                                <div class="logo">
                                    <a href="index.php"><img width="200px" src="img/logo_home.png" alt=""></a>
                                </div>
                            </div>
                            <div class="col-xl-10 col-lg-10 col-md-10">
                            <div class="menu-main d-flex align-items-center justify-content-end">
                                <!-- Main-menu -->
                                <div class="main-menu f-right d-none d-lg-block">
                                    <nav> 
                                        <ul id="navigation">  
                                            <li><a href="index.php">Home</a></li>
                                            <li><a href="about.php">About</a></li>
                                            <li class="active"><a href="">My Account</a>
                                                <ul class="submenu">
                                                    <li><a href="myloan.php">My Loan Details</a></li>
                                                    <li><a href="mysaving.php">My Saving Details</a></li>
                                                    <li><a href="myaccount.php">My Details</a></li>
                                                    <li><a href="logout.php">Log Out</a></li>
                                                </ul>
                                            </li>
                                            <li ><a href="contact.php">Contact</a></li>
                                        </ul>
                                    </nav>
                                </div>
                                <div class="header-right-btn f-right d-none d-lg-block">
                                    <a href="apply.php" class="btn header-btn">Apply Now </a>
                                </div>
                            </div>
                            </div>   
                            <!-- Mobile Menu -->
                            <div class="col-12">
                                <div class="mobile_menu d-block d-lg-none"></div>
                            </div>
                        </div>
                    </div>
                </div>
        </div>
        <!-- Header End -->
    </header>
    <main>

        <!-- Hero Start-->
        <div class="hero-area2  slider-height2 hero-overly2 d-flex align-items-center ">
            <div class="container">
                <div class="row">
                    <div class="col-xl-12">
                        <div class="hero-cap text-center pt-50">
                            <h2>My Saving Account</h2>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--Hero End -->
        <!-- ================ contact section start ================= -->
        <section class="contact-section">
            <div class="container-fluid">
                <?php $member_id = $_SESSION['member_id'];
                $viewquery1 = "SELECT * FROM saving where status = 'Accepted' OR status = 'Pending' AND member_id = '$member_id' ";
                $viewresult1 = mysqli_query($con,$viewquery1);

                if ($row1 = mysqli_fetch_assoc($viewresult1)) { ?>
            <div class="row">
                        <div class="col-md-8">
                          <h1>Saving Account</h1>
                          <?php $member_id = $_SESSION['member_id'];
                                $viewquery1 = " SELECT * FROM saving where status = 'Accepted' OR status = 'Pending' AND member_id = '$member_id' ";
                                $viewresult1 = mysqli_query($con,$viewquery1);
                                $row1 = mysqli_fetch_assoc($viewresult1);

                                $bank_image = $row1['saving_signature_image'];
                                $image_src1 = "upload/document/".$bank_image;

                                $viewquery3 = " SELECT * FROM member where member_id = '$member_id' ";
                                $viewresult3 = mysqli_query($con,$viewquery3);
                                $row3 = mysqli_fetch_assoc($viewresult3);

                                $viewquery2 = " SELECT * FROM holder where member_id = '$member_id' ";
                                $viewresult2 = mysqli_query($con,$viewquery2);
                                $row2 = mysqli_fetch_assoc($viewresult2); ?>

                            <div class="row p-3 mt-5"><span style="font-size: 35px; font-weight: bold;">Account Balance : </span> <span style="font-size: 35px; font-weight: bold; color: red; margin-left: 15px;"><?php echo $row1['balance'] ?></span></div>
                            <div class="row p-3">
                                <span>Name : </span> <span><?php echo $row3['name'] ?></span>
                            </div>
                            <div class="row p-3">
                                <span>Phone : </span> <span><?php echo $row3['phone'] ?></span>
                            </div>
                            <div class="row p-3">
                                <span>Address : </span> <span><?php echo $row3['address'] ?></span>
                            </div>
                            <div class="row p-3">
                                <span>NIC Number : </span> <span><?php echo $row3['nic'] ?></span>
                            </div>
                            <div class="row p-3"><span>PF Number : </span> <span><?php echo $row2['pf_no'] ?></span></div>
                            <div class="row p-3"><span>Work Station Address : </span> <span><?php echo $row2['station_address'] ?></span></div>
                            <div class="row p-3"><span>Saving Monthly Amount : </span> <span><?php echo $row1['saving_amount'] ?></span></div>
                            <div class="row p-3"><span>Status : </span> <span><?php echo $row1['status'] ?></span></div>
                            <div class="row p-3"><div class="row p-3"><img style="width: 300px; margin-top: 10px;" src="<?php echo $image_src1; ?>" alt=""></div></div>
                        </div>
                        <div class="col-md-4">
                            <div class="table-responsive-xl">
                                <table class="table text-nowrap mb-0">
                                    <thead class="bg-dark text-white">
                                    <tr>
                                        <th class="font-weight-semi-bold border-top-0 py-2">Deposit Amount</th>
                                        <th class="font-weight-semi-bold border-top-0 py-2">Deposit Date</th>
                                    </tr>
                                    </thead>
                                    <?php 
                                    $count=1;
                                        $member_id = $_SESSION['member_id'];
                                        $viewquery1 = " SELECT * FROM saving where member_id = '$member_id' ";
                                        $viewresult1 = mysqli_query($con,$viewquery1);
                                        $row1 = mysqli_fetch_assoc($viewresult1);
                                        $saving_id = $row1['saving_id'];

                                        $viewquery = " SELECT * FROM deposit_saving where saving_id = '$saving_id'";
                                        $viewresult = mysqli_query($con,$viewquery);?>
                                    <tbody>
                                     <?php while($row = mysqli_fetch_assoc($viewresult)) { ?>
                                    <tr>
                                        <td class="py-3"><?php echo $row['amount']; ?></td>
                                        <td class="py-3"><?php echo $row['trndate']; ?></td>
                                    </tr>
                                     <?php $count++; } ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                </div>
                    <?php }else{ ?>
                        <h1>No Any Saving Account Found. Please Apply Saving Account</h1><a style="color: blue" href="apply.php">Click here...</a>
                    <?php } ?>
                   
            </div>
        </section>
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
		
		<!-- Nice-select, sticky -->
        <script src="./assets/js/jquery.nice-select.min.js"></script>
		<script src="./assets/js/jquery.sticky.js"></script>
        <script src="./assets/js/jquery.magnific-popup.js"></script>

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