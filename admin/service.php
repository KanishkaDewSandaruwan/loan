<?php require_once "head.php"; ?>

<link rel="stylesheet" type="text/css" href="csss/style.css">

<main class="main">
   <!-- Sidebar Nav -->
    <aside id="sidebar" class="js-custom-scroll side-nav">
        <ul id="sideNav" class="side-nav-menu side-nav-menu-top-level mb-0">

            <!-- Dashboard -->
            <li class="side-nav-menu-item ">
                <a class="side-nav-menu-link media align-items-center" href="index.php">
              <span class="side-nav-menu-icon d-flex mr-3">
                <i class="gd-dashboard"></i>
              </span>
                    <span class="side-nav-fadeout-on-closed media-body">Dashboard</span>
                </a>
            </li>
            <!-- End Dashboard -->

            <!-- Member -->
            <li class="side-nav-menu-item ">
                <a class="side-nav-menu-link media align-items-center" href="member.php">
              <span class="side-nav-menu-icon d-flex mr-3">
                <i class="fas fa-users"></i>
              </span>
                    <span class="side-nav-fadeout-on-closed media-body">Member</span>
                </a>
            </li>
            <!-- End Member -->

            <!-- Users -->
            <li class="side-nav-menu-item side-nav-has-menu">
                <a class="side-nav-menu-link media align-items-center" href="#"
                   data-target="#subUsers">
                  <span class="side-nav-menu-icon d-flex mr-3">
                    <i class="gd-user"></i>
                  </span>
                    <span class="side-nav-fadeout-on-closed media-body">Users</span>
                    <span class="side-nav-control-icon d-flex">
                <i class="gd-angle-right side-nav-fadeout-on-closed"></i>
              </span>
                    <span class="side-nav__indicator side-nav-fadeout-on-closed"></span>
                </a>

                <!-- Users: subUsers -->
                <ul id="subUsers" class="side-nav-menu side-nav-menu-second-level mb-0">
                    <li class="side-nav-menu-item">
                        <a class="side-nav-menu-link" href="users.html">All Users</a>
                    </li>
                    <li class="side-nav-menu-item">
                        <a class="side-nav-menu-link" href="user-edit.html">Add new</a>
                    </li>
                </ul>
                <!-- End Users: subUsers -->
            </li>
            <!-- End Users -->

            <!-- Authentication -->
            <li class="side-nav-menu-item side-nav-has-menu">
                <a class="side-nav-menu-link media align-items-center" href="#"
                   data-target="#subPages">
              <span class="side-nav-menu-icon d-flex mr-3">
                <i class="gd-lock"></i>
              </span>
                    <span class="side-nav-fadeout-on-closed media-body">Authentication</span>
                    <span class="side-nav-control-icon d-flex">
                <i class="gd-angle-right side-nav-fadeout-on-closed"></i>
              </span>
                    <span class="side-nav__indicator side-nav-fadeout-on-closed"></span>
                </a>

                <!-- Pages: subPages -->
                <ul id="subPages" class="side-nav-menu side-nav-menu-second-level mb-0">
                    <li class="side-nav-menu-item">
                        <a class="side-nav-menu-link" href="login.html">Login</a>
                    </li>
                    <li class="side-nav-menu-item">
                        <a class="side-nav-menu-link" href="register.html">Register</a>
                    </li>
                    <li class="side-nav-menu-item">
                        <a class="side-nav-menu-link" href="password-reset.html">Forgot Password</a>
                    </li>
                    <li class="side-nav-menu-item">
                        <a class="side-nav-menu-link" href="password-reset-2.html">Forgot Password 2</a>
                    </li>
                    <li class="side-nav-menu-item">
                        <a class="side-nav-menu-link" href="email-verification.html">Email Verification</a>
                    </li>
                </ul>
                <!-- End Pages: subPages -->
            </li>
            <!-- End Authentication -->

            <!-- Settings -->
            <li class="side-nav-menu-item">
                <a class="side-nav-menu-link media align-items-center" href="settings.html">
              <span class="side-nav-menu-icon d-flex mr-3">
                <i class="gd-settings"></i>
              </span>
                    <span class="side-nav-fadeout-on-closed media-body">Settings</span>
                </a>
            </li>
            <!-- End Settings -->

            <!-- Static -->
            <li class="side-nav-menu-item active">
                <a class="side-nav-menu-link media align-items-center" href="custom.php">
              <span class="side-nav-menu-icon d-flex mr-3">
               <i class="fas fa-palette"></i>
              </span>
                    <span class="side-nav-fadeout-on-closed media-body">Customize Pages</span>
                </a>
            </li>
            <!-- End Static -->

        </ul>
    </aside>
    <!-- End Sidebar Nav -->

    <div class="content">
        <div class="py-4 px-3 px-md-4">

            <div class="mb-3 mb-md-4 d-flex justify-content-between">
                <div class="h3 mb-0">Service </div>
                <div class="h3 mb-0"><button class="btn btn-lg btn-primary" type="button" data-toggle="modal" data-target="#addservice" >Add New</button></div>
            </div>

            <div class="row">
                <div class="col-12">
                    <div class="card mb-3 mb-md-4">
                        <div class="card-header">
                            <h5 class="font-weight-semi-bold mb-0">Service List</h5>
                        </div>

                        <div class="card-body pt-0">
                            <div class="table-responsive-xl">
                                <table class="table text-nowrap mb-0">
                                    <thead class="bg-primary text-white">
                                    <tr>
                                        <th class="font-weight-semi-bold border-top-0 py-2">Title</th>
                                        <th class="font-weight-semi-bold border-top-0 py-2">Description</th>
                                        <th class="font-weight-semi-bold border-top-0 py-2">Image</th>
                                        <th class="font-weight-semi-bold border-top-0 py-2">Actions</th>
                                    </tr>
                                    </thead>
                                    <?php 
                                    $count=1;
                                         $viewquery = " SELECT * FROM service";
                                          $viewresult = mysqli_query($con,$viewquery);?>
                                    <tbody>
                                     <?php while($row = mysqli_fetch_assoc($viewresult)) { 
                                        $galaryimage = $row['image'];
                                        $galaryimage_src = "../upload/service/".$galaryimage; ?>
                                    <tr>
                                        <td class="py-3"><?php echo $row['title']; ?></td>
                                        <td class="py-3"><?php echo $row['description']; ?></td>
                                        <td class="py-3"><img style="width: 200px   " class="img-fluid" src="<?php echo $galaryimage_src; ?>"  alt="Gallery Images"></td>
                                        <td class="py-3">
                                            <div class="position-relative">
                                                <a id="dropDown16Invoker" class="link-dark d-flex" href="#" aria-controls="dropDown16" aria-haspopup="true" aria-expanded="false" data-unfold-target="#dropDown16" data-unfold-event="click" data-unfold-type="css-animation" data-unfold-duration="300" data-unfold-animation-in="fadeIn" data-unfold-animation-out="fadeOut">
                                                    <i class="gd-more-alt icon-text"></i>
                                                </a>

                                                <ul id="dropDown16" class="unfold unfold-light unfold-top unfold-right position-absolute py-3 mt-1 unfold-css-animation unfold-hidden fadeOut" aria-labelledby="dropDown16Invoker" style="min-width: 150px; animation-duration: 300ms; right: 0px;">
                                                    <li class="unfold-item">
                                                        <a class="unfold-link media align-items-center text-nowrap" href="#">
                                                            <i class="gd-pencil unfold-item-icon mr-3"></i>
                                                            <span class="media-body">Edit</span>
                                                        </a>
                                                    </li>
                                                    <li class="unfold-item">
                                                        <a class="unfold-link media align-items-center text-nowrap" href="#">
                                                            <i class="gd-close unfold-item-icon mr-3"></i>
                                                            <span class="media-body">Delete</span>
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </td>
                                    </tr>
                                     <?php   $count++; } ?>
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
      <div class="modal fade" id="addservice" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
          <div class="modal-dialog" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title text-danger" id="exampleModalLabel">Change Contact Details</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
                <form class="col-md-12 mt-3" method="POST" enctype="multipart/form-data">
                  <div class="modal-body">

                        Select Header image to upload:<br>
                        <input type="file" name="file" /><br><br>

                        <div class="form-row">
                      <div class="form-group col-md-12">
                        <input type="text" class="form-control" name="title" placeholder="Title">
                      </div>
                    </div>

                    <div class="form-row mt-3">
                      <div class="form-group col-md-12">
                        <input type="text" class="form-control" name="desc" placeholder="Description">
                      </div>
                    </div>


                                
                  </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="submit" name="service" class="btn btn-primary">Save changes</button>
              </div>
                </form>
                <?php
                      if(isset($_POST['service'])){
                        $title = $_REQUEST['title'];
                        $desc = $_REQUEST['desc'];

                          if(isset($_FILES['file']) && !empty($_FILES['file']['name'])) { 
                            if (!empty($title)) {
                              if (!empty($desc)) { 


                                $name = $_FILES['file']['name'];
                                $target_dir = "../upload/service/";
                                $target_file = $target_dir . basename($_FILES["file"]["name"]);
                                $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
                                $extensions_arr = array("jpg","jpeg","png","gif","mkv","mp4");

                                        if (in_array($imageFileType,$extensions_arr)) {

                                                move_uploaded_file($_FILES['file']['tmp_name'],$target_dir.$name);

                                                $q1="INSERT INTO service(title,description,image) values('$title','$desc','$name')";
                                                      $res1=mysqli_query($con,$q1);
                                                      if ( $res1)
                                                      {

                                                           echo '<script>alert("Service Adding is Scussessfully.");window.location.href="service.php"; </script>';
                                                      }else{
                                                        echo "<script>alert(\"Service Adding is Not Scussess\");</script>";
                                                      }

                                        }
                                      
                              }else{echo "<script>alert(\"Enter Description\");</script>";}
                            }else{echo "<script>alert(\"Enter Title\");</script>";}
                          }else{echo "<script>alert(\"Please Select image to upload\");</script>";}
                                  }
                  ?>
                    
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