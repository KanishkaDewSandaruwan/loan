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
                            <h2>My Account</h2>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--Hero End -->
        <!-- ================ contact section start ================= -->
        <section class="contact-section">
            <div class="container">
                <div class="row">
                    <?php 
                    $member_id = $_SESSION['member_id'];
                    $viewquery = "SELECT * FROM member where member_id = '$member_id' ";
                    $viewresult = mysqli_query($con,$viewquery);
                    $row0 = mysqli_fetch_assoc($viewresult);

                    $viewquery1 = "SELECT * FROM holder where member_id = '$member_id' ";
                    $viewresult1 = mysqli_query($con,$viewquery1);
                    $row1 = mysqli_fetch_assoc($viewresult1); 
                    $bank_image = $row1['bank_image'];
                    $image_src1 = "upload/member/".$bank_image;?>
                    
                    <div class="col-lg-3 offset-lg-1">
                        <h2 class="text-danger">My Details</h2>
                        <div class="media contact-info mt-5">
                            <span class="contact-info__icon"><i class="ti-home"></i></span>
                            <div class="media-body">
                                <h3>Name</h3>
                                <p><?php echo $row0['name']; ?></p>
                            </div>
                        </div>
                        <div class="media contact-info">
                            <span class="contact-info__icon"><i class="ti-home"></i></span>
                            <div class="media-body">
                                <h3>NIC Number</h3>
                                <p><?php echo $row0['nic']; ?></p>
                            </div>
                        </div>
                        <div class="media contact-info">
                            <span class="contact-info__icon"><i class="ti-home"></i></span>
                            <div class="media-body">
                                <h3>Address</h3>
                                <p><?php echo $row0['address']; ?></p>
                            </div>
                        </div>
                        <div class="media contact-info">
                            <span class="contact-info__icon"><i class="ti-tablet"></i></span>
                            <div class="media-body">
                                <h3>Phone Number</h3>
                                <p><?php echo $row0['phone']; ?></p>
                            </div>
                        </div>
                        <div class="media contact-info">
                            <span class="contact-info__icon"><i class="ti-email"></i></span>
                            <div class="media-body">
                                <h3>Email</h3>
                                <p><?php echo $row0['email']; ?></p>
                            </div>
                        </div>



                        <h3 class="text-danger mt-5">Hoalder Details</h3>
                         <div class="media contact-info mt-5">
                            <div class="media-body">
                                <h3>PF Number</h3>
                                <p><?php echo $row1['pf_no']; ?></p>
                            </div>
                        </div>
                        <div class="media contact-info">
                            <div class="media-body">
                                <h3>Station Address</h3>
                                <p><?php echo $row1['station_address']; ?></p>
                            </div>
                        </div>
                        <div class="media contact-info">
                            <div class="media-body">
                                <h3>Bank Account Number</h3>
                                <p><?php echo $row1['bank_account']; ?></p>
                            </div>
                        </div>
                        <div class="media contact-info">
                            <div class="media-body">
                                <h3>Bank Branch</h3>
                                <p><?php echo $row1['bank_branch']; ?></p>
                            </div>
                        </div>
                        <div class="media contact-info">
                            <div class="media-body">
                                <h3>Bank Image</h3>
                                <img style="width: 100%; margin-top: 10px;" src="<?php echo $image_src1; ?>" alt="">
                            </div>
                        </div>
                        <div class="media contact-info">
                            <div class="media-body">
                                <h3>Registerd Date</h3>
                                <p><?php echo $row1['trndate']; ?></p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 offset-lg-1">
                        <div class="row">
                                <p>Change Holder Acocount Details <a class="text-primary" data-toggle="modal" data-target="#changeHolder">Click Here...</a></p><br>
                                <p>Edit Profile <a class="text-primary" data-toggle="modal" data-target="#editprofile">Click Here...</a></p><br>
                                <p>Change UserName <a class="text-primary" data-toggle="modal" data-target="#exampleModalusernameChange">Click Here...</a></p>
                                <p>Change Password <a class="text-primary" data-toggle="modal" data-target="#exampleModal">Click Here...</a></p>
                                <p>Delete Account <a class="text-primary" href="delete_member.php">Click Here...</a></p>
                        </div>
                    </div>
                </div>
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
                     <!-- Modal -->
      <div class="modal fade" id="changeHolder" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
          <div class="modal-dialog" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title text-danger" id="exampleModalLabel">Change Holder Details</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
                <form class="col-md-12 mt-3" method="POST" enctype="multipart/form-data">
                  <div class="modal-body">

                              <div class="form-row">
                                  <div class="form-group col-md-12">
                                    <input type="text" name="pf" id="pf" class="form-control input-sm chat-input" placeholder="PF Number"/>
                                  </div>
                              </div>
                              <div class="form-row">
                                <div class="form-group col-md-12">
                                  <input type="text" name="address" id="address" class="form-control input-sm chat-input" placeholder="Station Address"/>
                                </div>
                              </div>
                              <div class="form-row">
                                <div class="form-group col-md-12">
                                  <input type="text" name="bank_account" id="bank_account" class="form-control input-sm chat-input" placeholder="Bank Account Number"/>
                                </div>
                              </div>
                              <div class="form-row">
                                <div class="form-group col-md-12">
                                  <input type="text" name="bank_branch" id="bank_branch" class="form-control input-sm chat-input" placeholder="Bank Branch"/>
                                </div>
                              </div>

                         Select Bank image to upload:<br>
                        <input type="file" name="file" /><br><br>
                            
                  </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
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
                      $target_dir = "upload/member/";
                      $target_file = $target_dir . basename($_FILES["file"]["name"]);


                      // Select file type
                      $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

                      // Valid file extensions
                      $extensions_arr = array("jpg","jpeg","png","gif");

                      // Check extension
                      if( in_array($imageFileType,$extensions_arr) ){
                          move_uploaded_file($_FILES['file']['tmp_name'],$target_dir.$name);
                          $query="UPDATE holder SET bank_image='$name'";
                          mysqli_query($con,$query);
                          echo '<script>alert("Header Details Change Success"); window.location.href="myaccount.php";</script>';
                      }
                      if(!empty($pf))
                      {
                        $query3="UPDATE holder SET pf_no='$pf'";
                        $sql3=mysqli_query($con,$query3);
                        echo "<script type=\"text/javascript\"> alert(\"Updated Succussfully\"); window.location= \"myaccount.php\";</script>";
                      }

                      if(!empty($address))
                      {
                        $query3="UPDATE holder SET station_address='$address'";
                        $sql3=mysqli_query($con,$query3);
                        echo "<script type=\"text/javascript\"> alert(\"Updated Succussfully\"); window.location= \"myaccount.php\";</script>";
                      }

                      if(!empty($bank_account))
                      {
                        $query3="UPDATE holder SET bank_account='$bank_account'";
                        $sql3=mysqli_query($con,$query3);
                        echo "<script type=\"text/javascript\"> alert(\"Updated Succussfully\"); window.location= \"myaccount.php\";</script>";
                      }
                      if(!empty($bank_branch))
                      {
                        $query3="UPDATE holder SET bank_branch='$bank_branch'";
                        $sql3=mysqli_query($con,$query3);
                        echo "<script type=\"text/javascript\"> alert(\"Updated Succussfully\"); window.location= \"myaccount.php\";</script>";
                      }


                    }
                    
                  ?>
                    
            </div>
          </div>
        </div>

            <!-- Modal -->
                    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                      <div class="modal-dialog" role="document">
                        <div class="modal-content">
                          <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel" style="text-align: center;">Change Password</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                              <span aria-hidden="true">&times;</span>
                            </button>
                          </div>
                            <form action="" method="POST"> 
                          <div class="modal-body">

                              <div class="form-row">
                                  <div class="form-group col-md-12">
                                    <input type="password" name="cpass" id="userPassword" class="form-control input-sm chat-input" placeholder="Current Password"/>
                                  </div>
                              </div>
                              <div class="form-row">
                                <div class="form-group col-md-12">
                                  <input type="password" name="npass" id="userPassword" class="form-control input-sm chat-input" placeholder="New Password"/>
                                </div>
                              </div>
                              <div class="form-row">
                                <div class="form-group col-md-12">
                                  <input type="password" name="conpass" id="userPassword" class="form-control input-sm chat-input" placeholder="Confirm Password"/>
                                </div>
                              </div>
                          </div>
                          <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                            <button type="submit" name="pass_change"  class="btn btn-primary">Save changes</button>
                          </div>
                           <?php
                            if(isset($_POST['pass_change']))
                            {


                            $currentpass=stripslashes($_REQUEST['cpass']);
                            $newpass=stripslashes($_REQUEST['npass']);
                            $confpass=stripslashes($_REQUEST['conpass']);
                            $g = $_SESSION['member_id'];

                            if(!empty($currentpass)){
                              if(!empty($newpass)){
                                if(!empty($confpass)){

                                  $loginsql="SELECT * FROM member WHERE password='".md5($currentpass)."'";
                                  $result=mysqli_query($con,$loginsql) or mysqli_errno();
                                  $rows=mysqli_fetch_assoc($result);

                                  $query5="SELECT password FROM member WHERE member_id='".$g."'";
                                  $sql5=mysqli_query($con,$query5);
                                  $row=mysqli_fetch_assoc($sql5);

                                  if(isset($rows['password'])==isset($row['password']))
                                  {
                                    if($newpass==$confpass){
                                      $query3="SELECT * FROM member WHERE password='$newpass'";
                                      $sql3=mysqli_query($con,$query3);

                                      if(mysqli_num_rows($sql3)>0)
                                      {
                                        echo "password already Exsisted";
                                      }
                                      else
                                      {
                                          $query2="UPDATE member SET password='".md5($newpass)."' WHERE member_id='".$g."'";
                                          $sql2=mysqli_query($con,$query2);
                                          echo "<script type=\"text/javascript\"> alert(\"Password Update Successfull\"); window.location.href='logout.php'; </script>"; 
                                      }

                                    }else{ echo "<script>alert(\"Password is Not Match\");</script>";} 
                                  }else{ echo "<script>alert(\"Current Password is Wrong\");</script>";} 
                                }else{ echo "<script>alert(\"Enter Confirm Password\");</script>";} 
                              }else{ echo "<script>alert(\"Enter New Password\");</script>";} 
                            }else{ echo "<script>alert(\"Enter Current Password\");</script>";} 

                            }
                        ?>
                        </form>
                        </div>
                      </div>
                    </div>

                    <!-- Modal Edit Profile-->
                    <div class="modal fade" id="editprofile" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                      <div class="modal-dialog" role="document">
                        <div class="modal-content">
                          <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel" style="text-align: center;">Change Profile Details</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                              <span aria-hidden="true">&times;</span>
                            </button>
                          </div>
                            <form action="" method="POST"> 
                          <div class="modal-body">

                              <div class="form-row">
                                  <div class="form-group col-md-12">
                                    <input type="text" name="name" id="name" class="form-control input-sm chat-input" placeholder="Your Name"/>
                                  </div>
                              </div>
                              <div class="form-row">
                                <div class="form-group col-md-12">
                                  <input type="text" name="phone" id="phone" class="form-control input-sm chat-input" placeholder="Phone Number"/>
                                </div>
                              </div>
                              <div class="form-row">
                                <div class="form-group col-md-12">
                                  <input type="text" name="address" id="address" class="form-control input-sm chat-input" placeholder="Your Address"/>
                                </div>
                              </div>
                              <div class="form-row">
                                <div class="form-group col-md-12">
                                  <input type="text" name="nic" id="nic" class="form-control input-sm chat-input" placeholder="Your NIC Number"/>
                                </div>
                              </div>
                          </div>
                          <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                            <button type="submit" name="pass_detail"  class="btn btn-primary">Save changes</button>
                          </div>
                            <?php
                                if(isset($_POST['pass_detail']))
                                {


                                    $name = $_REQUEST['name'];
                                    $phone = $_REQUEST['phone'];
                                    $address = $_REQUEST['address'];
                                    $nic = $_REQUEST['nic'];
                                    $geID = $_SESSION['member_id'];
                                    $cdate = date("Y/m/d m:H:s");


                                      
                                                if(!empty($name))
                                                  {
                                                    $query3="UPDATE member SET name='$name' WHERE member_id='".$geID."'";
                                                    $sql3=mysqli_query($con,$query3);
                                                    echo "<script type=\"text/javascript\"> alert(\"Updated Succussfully\"); window.location= \"myaccount.php\";</script>";
                                                  }

                                                  if(!empty($address))
                                                  {
                                                    $query3="UPDATE member SET address='$address' WHERE member_id='".$geID."'";
                                                    $sql3=mysqli_query($con,$query3);
                                                    echo "<script type=\"text/javascript\"> alert(\"Updated Succussfully\"); window.location= \"myaccount.php\";</script>";
                                                  }

                                                  if(!empty($phone))
                                                  {
                                                    if(preg_match("/^([0]([0-9])([0-9])([0-9])([0-9])([0-9])([0-9])([0-9])([0-9])([0-9]))$/", $phone)){
                                                        $query3="UPDATE member SET phone='$phone' WHERE member_id='".$geID."'";
                                                        $sql3=mysqli_query($con,$query3);
                                                        echo "<script type=\"text/javascript\"> alert(\"Updated Succussfully\"); window.location= \"myaccount.php\";</script>";

                                                      }else{echo "Enter Valid Phone Number";}
                                                  }

                                                  if(!empty($nic))
                                                  {
                                                    $query3="UPDATE member SET nic='$nic' WHERE member_id='".$geID."'";
                                                    $sql3=mysqli_query($con,$query3);
                                                    echo "<script type=\"text/javascript\"> alert(\"Updated Succussfully\"); window.location= \"myaccount.php\";</script>";
                                                  }


                                }
                            ?>
                        </form>
                        </div>
                      </div>
                    </div>
                         <!-- Modal -->
                    <div class="modal fade" id="exampleModalusernameChange" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                      <div class="modal-dialog" role="document">
                        <div class="modal-content">
                          <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel" style="text-align: center;">Change Username</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                              <span aria-hidden="true">&times;</span>
                            </button>
                          </div>
                            <form action="" method="POST"> 
                                <div class="modal-body">

                              <div class="form-row">
                                  <div class="form-group col-md-12">
                                    <input type="text" name="cuname" id="userPassword" class="form-control input-sm chat-input" placeholder="Current Username"/>
                                  </div>
                              </div>
                              <div class="form-row">
                                <div class="form-group col-md-12">
                                  <input type="text" name="nuname" id="userPassword" class="form-control input-sm chat-input" placeholder="New Username"/>
                                </div>
                              </div>
                          </div>
                          <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                            <button type="submit" name="submit"  class="btn btn-primary">Save changes</button>
                          </div>
                        </form>
                          <?php
                              if(isset($_POST['submit']))
                              {

                              $currenteuname=stripslashes($_REQUEST['cuname']);
                              $newuname=stripslashes($_REQUEST['nuname']);
                              $g = $_SESSION['member_id'];

                              if(!empty($currenteuname)){
                                if(!empty($newuname)){

                                    $loginsql="SELECT * FROM member WHERE username='".$currenteuname."'";
                                    $result=mysqli_query($con,$loginsql) or mysqli_errno();
                                    $rows=mysqli_fetch_assoc($result);

                                    $query5="SELECT username FROM member WHERE member_id='".$g."'";
                                    $sql5=mysqli_query($con,$query5);
                                    $row=mysqli_fetch_assoc($sql5);

                                    if(isset($rows['username'])==isset($row['username']))
                                    {
                                        $query3="SELECT * FROM member WHERE username='$newuname'";
                                        $sql3=mysqli_query($con,$query3);

                                        if(mysqli_num_rows($sql3)>0)
                                        {
                                          echo "<script>alert(\"username already Exsisted\");</script>";
                                        }
                                        else
                                        {
                                            $query2="UPDATE member SET username='".$newuname."' WHERE username='".$currenteuname."'";
                                            $sql2=mysqli_query($con,$query2);
                                            echo "<script type=\"text/javascript\"> alert(\"username Update Successfull\"); window.location.href='logout.php'; </script>"; 
                                        }
                                    }else{ echo "<script>alert(\"Current username is Wrong\");</script>";} 
                                
                                }else{ echo "<script>alert(\"Enter New username\");</script>";} 
                              }else{ echo "<script>alert(\"Enter Current username\");</script>";} 

                              }
                          ?>
                        </div>
                      </div>
                    </div>
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