<?php require_once "head_home.php"; ?>
    <main>

        <!-- slider Area Start-->
        <?php 
    $slider_query = "SELECT * FROM slider_banner";
    $slider_query_result = mysqli_query($con,$slider_query);
    if(mysqli_num_rows($slider_query_result)>0){

        $row = mysqli_fetch_assoc($slider_query_result);
        $slider_banner_01 = $row['slider_banner_01'];
        $slider_banner_02 = $row['slider_banner_02'];
        $slider_banner_03 = $row['slider_banner_03'];

        $image_src1 = "upload/slider/".$slider_banner_01;
        $image_src2 = "upload/slider/".$slider_banner_02;
        $image_src3 = "upload/slider/".$slider_banner_03;

     ?>
        <div class="slider-area slider-height" data-background="">
            <div class="slider-active">
                <!-- Single Slider -->
                <div class="single-slider">
                    <div class="slider-cap-wrapper">
                        <div class="hero__caption">
                            <p data-animation="fadeInLeft" data-delay=".2s"><?php echo $row['title']; ?></p>
                            <h1 data-animation="fadeInLeft" data-delay=".5s"><?php echo $row['description']; ?></h1>
                            <!-- Hero Btn -->
                            <a href="apply.php" class="btn hero-btn" data-animation="fadeInLeft" data-delay=".8s">Apply for Loan</a>
                        </div>
                        <div class="hero__img">
                            <img src="<?php echo $image_src1; ?>" alt="">
                        </div>
                    </div>
                </div>
                <!-- Single Slider -->
                <div class="single-slider">
                    <div class="slider-cap-wrapper">
                        <div class="hero__caption">
                            <p data-animation="fadeInLeft" data-delay=".2s"><?php echo $row['title']; ?></p>
                            <h1 data-animation="fadeInLeft" data-delay=".5s"><?php echo $row['description']; ?></h1>
                            <!-- Hero Btn -->
                            <a href="apply.php" class="btn hero-btn" data-animation="fadeInLeft" data-delay=".8s">Apply for Loan</a>
                        </div>
                        <div class="hero__img">
                            <img src="<?php echo $image_src2; ?>" alt="">
                        </div>
                    </div>
                </div>
                <div class="single-slider">
                    <div class="slider-cap-wrapper">
                        <div class="hero__caption">
                            <p data-animation="fadeInLeft" data-delay=".2s"><?php echo $row['title']; ?></p>
                            <h1 data-animation="fadeInLeft" data-delay=".5s"><?php echo $row['description']; ?></h1>
                            <!-- Hero Btn -->
                            <a href="apply.php" class="btn hero-btn" data-animation="fadeInLeft" data-delay=".8s">Apply for Loan</a>
                        </div>
                        <div class="hero__img">
                            <img src="<?php echo $image_src3; ?>" alt="">
                        </div>
                    </div>
                </div>
            </div>

        </div>
    <?php } ?>
        <!-- slider Area End-->
        <!-- About Law Start-->
        <?php $viewquery = "SELECT * FROM about";
              $viewresult = mysqli_query($con,$viewquery);
              $row5 = mysqli_fetch_assoc($viewresult); 

              $about_image = $row5['image'];
              $image_src1 = "upload/home/".$about_image;
              ?>
        <div class="about-low-area section-padding2">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 col-md-12">
                        <!-- about-img -->
                        <div class="about-img ">
                            <div class="about-back-img ">
                                <img style="width: 100%" src="<?php echo $image_src1; ?>" alt="">
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-12">
                        <div class="about-caption mb-50">
                            <!-- Section Tittle -->
                            <div class="section-tittle mb-35">
                                <span style="font-size: 35px;">About Our Society</span>
                                <h2><?php echo $row5['title']; ?></h2>
                            </div>
                            <p><?php echo $row5['description']; ?></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- About Law End-->
        <!-- Services Area Start -->
        <div class="services-area pt-150 pb-150" data-background="assets/img/gallery/section_bg02.jpg">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-6 col-md-10">
                        <!-- Section Tittle -->
                        <div class="section-tittle text-center mb-80">
                            <span style="font-size: 35px;">Services that we are providing</span>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <?php 
                        $galary="SELECT * FROM service";
                        $query1 = mysqli_query($con,$galary); 

                        while ($row3 = mysqli_fetch_assoc($query1)) { 
                        $galaryimage = $row3['image'];
                        $galaryimage_src = "upload/service/".$galaryimage; 

                        $ext = pathinfo($galaryimage,PATHINFO_EXTENSION);
                        $extensions_arr = array("jpg","jpeg","png","gif"); ?>

                    <div class="col-lg-3 col-md-6 col-sm-6" >
                        <div class="single-cat text-center mb-50" style="height: 500px;">
                            <div class="cat-icon">
                                <img style="width: 100%" src="<?php echo $galaryimage_src; ?>" alt="">
                            </div>
                            <div class="cat-cap mt-3">
                                <h5><a href="services.html"><?php echo $row3['title']; ?></a></h5>
                                <p><?php echo $row3['description']; ?></p>
                            </div>
                        </div>
                    </div>
                <?php } ?>
                    

                 </div>
            </div>
        </div>
        <!-- Services Area End -->


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