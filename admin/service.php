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
                                        <td class="py-3"><img style="width: 200px   " class="img-fluid" src="<?php echo $galaryimage_src; ?>"  alt="Service Images"></td>
                                        <td class="py-3">
                                            <!-- Example single danger button -->
                                            <div class="btn-group">
                                                  <button type="button" class="btn btn-danger dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                    Action
                                                  </button>
                                                  <div class="dropdown-menu">
                                                    <a class="dropdown-item" href="delete.php?id=<?php echo $row['id'] ?>">Delete</a>
                                                  </div>
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
                <h5 class="modal-title text-danger" id="exampleModalLabel">Add New Service</h5>
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