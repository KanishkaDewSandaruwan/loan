<?php require_once "head.php"; ?>

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
                    <span class="side-nav-fadeout-on-closed media-body">Messege</span>
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
                <div class="h3 mb-0">Customize</div>
            </div>

            <div class="row">
                <div class="col-md-4">
                        <div class="row">
                      <h4 class="text-primary text-uppercase"><b>Home Page Slide Show Manage</b></h4>
                  </div>
                  <div class="row">
                      <button style="font-size: 20px;" data-toggle="modal" data-target="#addSlider"  class="btn col-md-12 btn-lg btn-dark mt-3 ml-3">Add Slide Show</button>
                      <button style="font-size: 20px;" data-toggle="modal" data-target="#changeSlider"  class="btn col-md-12 btn-lg btn-dark mt-3 ml-3">Edit Slide Show</button>
                      <button style="font-size: 20px;" onclick="window.location.href = 'removeslide.php'" class="btn col-md-12 btn-lg btn-dark mt-3 ml-3">Remove Slide Show</button>
                      <button style="font-size: 20px;" data-toggle="modal" data-target="#changeHeader" class="btn col-md-12 btn-lg btn-dark mt-3 ml-3">Header Image</button>
                  </div>

                    <div class="row mt-5">
                        <h4 class="text-primary text-uppercase"><b>  About Page Settings</b></h4>
                    </div>
                    <div class="row">
                        <button style="font-size: 20px;" data-toggle="modal" data-target="#changeDetails" class="btn col-md-12 btn-lg btn-dark mt-3 ml-3">Change About Details</button>
                    </div>

                     <div class="row mt-5">
                        <h4 class="text-primary text-uppercase"><b>Socity Settings</b></h4>
                    </div>
                    <div class="row">
                        <button style="font-size: 20px;" data-toggle="modal" data-target="#changeContact" class="btn col-md-12 btn-lg btn-dark mt-3 ml-3">Change Details</button>
                        <button style="font-size: 20px;" onclick="window.location.href='service.php'" class="btn col-md-12 btn-lg btn-dark mt-3 ml-3">Add Services</button>
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


    <div class="modal fade" id="changeSlider" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
          <div class="modal-dialog" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title text-danger" id="exampleModalLabel">Change Slide Show</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
                <form class="col-md-12 mt-3" method="POST" enctype="multipart/form-data">
                  <div class="modal-body">
                    
                    <p style="font-size: 20px; color: green">Slider Image 01</p>
                    <input type='file' name='file' /><br>

                    <p style="font-size: 20px; color: green">Slider Image 02</p>
                    <input type='file' name='file1' /><br>

                    <p style="font-size: 20px; color: green">Slider Image 03</p>
                    <input type='file' name='file2' /><br><br>

                    <div class="form-row">
                      <div class="form-group col-md-12">

                        <label for="name" class="a"><b>Title</b></label>
                        <input type="text" class="form-control" name="title" placeholder="Title">
                      </div>
                    </div>

                    <div class="form-row">
                      <div class="form-group col-md-12">

                        <label for="name" class="a"><b>Description</b></label>
                        <input type="text" class="form-control" name="desc" placeholder="Description">
                      </div>
                    </div>
                                
                  </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="submit" name="but_upload" class="btn btn-primary">Save changes</button>
              </div>
                </form>
                    <?php
                   if(isset($_POST['but_upload'])){

                    $title = $_REQUEST['title'];
                    $desc = $_REQUEST['desc'];
 
                      $name = $_FILES['file']['name'];
                      $name1 = $_FILES['file1']['name'];
                      $name2 = $_FILES['file2']['name'];


                      // $target_dir = "upload/";
                      $target_dir = "../upload/slider/";
                      $target_file = $target_dir . basename($_FILES["file"]["name"]);
                      $target_file1 = $target_dir . basename($_FILES["file1"]["name"]);
                      $target_file2 = $target_dir . basename($_FILES["file2"]["name"]);


                      // Select file type
                      $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
                      $imageFileType1 = strtolower(pathinfo($target_file1,PATHINFO_EXTENSION));
                      $imageFileType2 = strtolower(pathinfo($target_file2,PATHINFO_EXTENSION));


                      // Valid file extensions
                      $extensions_arr = array("jpg","jpeg","png","gif");

                      // Check extension
                      if( in_array($imageFileType,$extensions_arr) ){
                          move_uploaded_file($_FILES['file']['tmp_name'],$target_dir.$name);
                          $query="UPDATE slider_banner SET slider_banner_01='$name'";
                          mysqli_query($con,$query);
                          echo '<script>alert("Slide Show Image Change Success"); window.location.href="custom.php";</script>';
                      }
                      if( in_array($imageFileType1,$extensions_arr) ){
                          move_uploaded_file($_FILES['file1']['tmp_name'],$target_dir.$name1);   
                          $query="UPDATE slider_banner SET slider_banner_02='$name1'";
                          mysqli_query($con,$query);
                          echo '<script>alert("Slide Show Image Change Success"); window.location.href="custom.php";</script>';
                      }
                      if( in_array($imageFileType2,$extensions_arr) ){
                          move_uploaded_file($_FILES['file2']['tmp_name'],$target_dir.$name2);
                          $query="UPDATE slider_banner SET slider_banner_03='$name2'";
                          mysqli_query($con,$query);
                          echo '<script>alert("Slide Show Image Change Success"); window.location.href="custom.php";</script>';
                      }
                      if(!empty($title))
                      {

                        $query3="UPDATE slider_banner SET title='$title'";
                        $sql3=mysqli_query($con,$query3);
                          echo '<script>alert("Slide Show Image Change Success"); window.location.href="custom.php";</script>';
                      }
                      if(!empty($desc))
                      {

                        $query3="UPDATE slider_banner SET description='$desc'";
                        $sql3=mysqli_query($con,$query3);
                          echo '<script>alert("Slide Show Image Change Success"); window.location.href="custom.php";</script>';
                      }
                    }
                    
                  ?>
            </div>
          </div>
        </div>

<script type="text/javascript" src="./assets/scripts/main.js"></script></body>
<!-- Modal -->
        <div class="modal fade" id="addSlider" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
          <div class="modal-dialog" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title text-danger" id="exampleModalLabel">Add Slide Show</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
                <form class="col-md-12 mt-3" method="POST" enctype="multipart/form-data">
                  <div class="modal-body">
                   <p style="font-size: 20px; color: green">Slider Image 01</p>
                    <input type='file' name='file' /><br>

                    <p style="font-size: 20px; color: green">Slider Image 02</p>
                    <input type='file' name='file1' /><br>

                    <p style="font-size: 20px; color: green">Slider Image 03</p>
                    <input type='file' name='file2' /><br><br>

                    <div class="form-row">
                      <div class="form-group col-md-12">

                        <label for="name" class="a"><b>Title</b></label>
                        <input type="text" class="form-control" name="title" placeholder="Title">
                      </div>
                    </div>

                    <div class="form-row">
                      <div class="form-group col-md-12">

                        <label for="name" class="a"><b>Description</b></label>
                        <input type="text" class="form-control" name="desc" placeholder="Description">
                      </div>
                    </div>
                </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="submit" name="addslide" class="btn btn-primary">Save changes</button>
              </div>
            </form>
                    <?php
                   if(isset($_POST['addslide'])){

                    $title = $_REQUEST['title'];
                    $desc = $_REQUEST['desc'];
                   
                    $name = $_FILES['file']['name'];
                    $name1 = $_FILES['file1']['name'];
                    $name2 = $_FILES['file2']['name'];


                    // $target_dir = "upload/";
                    $target_dir = "../upload/slider/";
                    $target_file = $target_dir . basename($_FILES["file"]["name"]);
                    $target_file1 = $target_dir . basename($_FILES["file1"]["name"]);
                    $target_file2 = $target_dir . basename($_FILES["file2"]["name"]);


                    // Select file type
                    $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
                    $imageFileType1 = strtolower(pathinfo($target_file1,PATHINFO_EXTENSION));
                    $imageFileType2 = strtolower(pathinfo($target_file2,PATHINFO_EXTENSION));


                    // Valid file extensions
                    $extensions_arr = array("jpg","jpeg","png","gif");

                    $viewquery = " SELECT * FROM slider_banner";
                    $viewresult = mysqli_query($con,$viewquery);

                    if(mysqli_num_rows($viewresult)>0){
                        echo '<script>alert("Slide Show Alrady Addedd. You can Only Change Image"); window.location.href="custom.php";</script>';
                    }else{

                        // Check extension
                        if( in_array($imageFileType,$extensions_arr) ){
                          if( in_array($imageFileType1,$extensions_arr) ){
                            if( in_array($imageFileType2,$extensions_arr) ){
                                if (!empty($title)) {


                       
                                   $query = "INSERT into slider_banner(slider_banner_01,slider_banner_02,slider_banner_03,title,description) values('".$name."','".$name1."','".$name2."','$title','$desc')";
                                   mysqli_query($con,$query);
                                
                                   // Upload file
                                   move_uploaded_file($_FILES['file']['tmp_name'],$target_dir.$name);
                                   move_uploaded_file($_FILES['file1']['tmp_name'],$target_dir.$name1);
                                   move_uploaded_file($_FILES['file2']['tmp_name'],$target_dir.$name2);

                                    echo '<script>alert("Slide Show Inserted Success"); window.location.href="custom.php";</script>';
                              }else{echo "<script>alert(\"Enter Title\");</script>";}
                            
                          }
                         }
                        }
                   
                    }
                  }
                    
                  ?>
            </div>
          </div>
        </div>


                <!-- Modal -->
      <div class="modal fade" id="changeContact" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
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

                        <div class="form-row">
                      <div class="form-group col-md-12">
                        <label for="name" class="a"><b>Email Address</b></label>
                        <input type="text" class="form-control" name="email" placeholder="Email Address">
                      </div>
                    </div>

                    <div class="form-row">
                      <div class="form-group col-md-12">
                        <label for="name" class="a"><b>Phone Number</b></label>
                        <input type="text" class="form-control" name="phone" placeholder="Phone Number">
                      </div>
                    </div>

                    <div class="form-row">
                      <div class="form-group col-md-12">
                        <label for="name" class="a"><b>Address</b></label>
                        <input type="text" class="form-control" name="address" placeholder="Address">
                      </div>
                    </div>

                    <div class="form-row">
                      <div class="form-group col-md-12">
                        <label for="name" class="a"><b>Facebook</b></label>
                        <input type="text" class="form-control" name="fb" placeholder="Facebook">
                      </div>
                    </div>

                    <div class="form-row">
                      <div class="form-group col-md-12">
                        <label for="name" class="a"><b>Twitter</b></label>
                        <input type="text" class="form-control" name="twit" placeholder="Twitter">
                      </div>
                    </div>

                    <div class="form-row">
                      <div class="form-group col-md-12">
                        <label for="name" class="a"><b>Instragram</b></label>
                        <input type="text" class="form-control" name="insta" placeholder="Instragram">
                      </div>
                    </div>


                                
                  </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="submit" name="about" class="btn btn-primary">Save changes</button>
              </div>
                </form>
                <?php
                   if(isset($_POST['about'])){
 

                      $email = $_REQUEST['email'];
                      $phone = $_REQUEST['phone'];
                      $address = $_REQUEST['address'];

                      $fb = $_REQUEST['fb'];
                      $twit = $_REQUEST['twit'];
                      $insta = $_REQUEST['insta'];


                      if(!empty($email))
                      {
                        if(filter_var($email, FILTER_VALIDATE_EMAIL)){

                          $query1="SELECT * FROM employee WHERE email='$email'";
                          $sql1=mysqli_query($con,$query1);


                            if(mysqli_num_rows($sql1)>0)
                            {
                              echo "<script type=\"text/javascript\"> alert(\"Email is already Exsisted\");</script>";
                            }
                            else
                              {
                                $query3="UPDATE about SET email='$email'";
                                $sql3=mysqli_query($con,$query3);
                                echo "<script type=\"text/javascript\"> alert(\"Updated Succussfully\"); window.location.href='custom.php';</script>";
                              }
                        }
                      }
                      if(!empty($address))
                      {
                        $query3="UPDATE about SET address='$address'";
                        $sql3=mysqli_query($con,$query3);
                        echo "<script type=\"text/javascript\"> alert(\"Updated Succussfully\"); window.location= \"custom.php\";</script>";
                      }
                      if(!empty($phone))
                      {
                        if(preg_match("/^([0]([7189])([071628])([0-9])([0-9])([0-9])([0-9])([0-9])([0-9])([0-9]))$/", $phone)){
                            $query3="UPDATE about SET phone='$phone'";
                            $sql3=mysqli_query($con,$query3);
                            echo "<script type=\"text/javascript\"> alert(\"Updated Succussfully\"); window.location= \"custom.php\";</script>";

                          }else{echo "Enter Valid Phone Number";}
                      }

                      if(!empty($fb))
                      {
                        $query3="UPDATE about SET facebook='$fb'";
                        $sql3=mysqli_query($con,$query3);
                        echo "<script type=\"text/javascript\"> alert(\"Updated Succussfully\"); window.location= \"custom.php\";</script>";
                      }

                      if(!empty($twit))
                      {
                        $query3="UPDATE about SET twiter='$twit'";
                        $sql3=mysqli_query($con,$query3);
                        echo "<script type=\"text/javascript\"> alert(\"Updated Succussfully\"); window.location= \"custom.php\";</script>";
                      }

                      if(!empty($insta))
                      {
                        $query3="UPDATE about SET instragram='$insta'";
                        $sql3=mysqli_query($con,$query3);
                        echo "<script type=\"text/javascript\"> alert(\"Updated Succussfully\"); window.location= \"custom.php\";</script>";
                      }
                    }
                    
                  ?>
                    
            </div>
          </div>
        </div>

                 <!-- Modal -->
      <div class="modal fade" id="changeHeader" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
          <div class="modal-dialog" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title text-danger" id="exampleModalLabel">Change Header Image</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
                <form class="col-md-12 mt-3" method="POST" enctype="multipart/form-data">
                  <div class="modal-body">

                         Select Header image to upload:<br>
                        <input type="file" name="file" /><br><br>
                            
                  </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="submit" name="image_set_head" class="btn btn-primary">Save changes</button>
              </div>
                </form>
                <?php
                   if(isset($_POST['image_set_head'])){
 
                      $name = $_FILES['file']['name'];


                      // $target_dir = "upload/";
                      $target_dir = "../upload/home/";
                      $target_file = $target_dir . basename($_FILES["file"]["name"]);


                      // Select file type
                      $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

                      // Valid file extensions
                      $extensions_arr = array("jpg","jpeg","png","gif");

                      // Check extension
                      if( in_array($imageFileType,$extensions_arr) ){
                          move_uploaded_file($_FILES['file']['tmp_name'],$target_dir.$name);
                          $query="UPDATE slider_banner SET subpage_image='$name'";
                          mysqli_query($con,$query);
                          echo '<script>alert("Header Details Change Success"); window.location.href="custom.php";</script>';
                      }

                    }
                    
                  ?>
                    
            </div>
          </div>
        </div>

        <!-- Modal -->
      <div class="modal fade" id="changeDetails" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
          <div class="modal-dialog" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title text-danger" id="exampleModalLabel">Change Pharmacy Details</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
                <form class="col-md-12 mt-3" method="POST" enctype="multipart/form-data">
                  <div class="modal-body">

                         Select Header image to upload:<br>
                        <input type="file" name="file" /><br><br>

                        <div class="form-row">
                      <div class="form-group col-md-6">
                        <label for="title" class="a"><b>About Title</b></label><br>
                        <input type="text" class="form-control" name="title" placeholder="About Title">
                      </div>
                    </div>

                     <label for="title" class="a"><b>About Description</b></label><br><br>
                    <textarea id="summernote" name="editordata"></textarea>
                        <script>
                          $('#summernote').summernote({
                            placeholder: 'Details About this Package',
                            tabsize: 2,
                            height: 120,
                            toolbar: [
                              ['style', ['style']],
                              ['font', ['bold', 'underline', 'clear']],
                              ['color', ['color']],
                              ['para', ['ul', 'ol', 'paragraph']],
                            ]
                          });
                        </script><br><br>
                                
                  </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="submit" name="contact" class="btn btn-primary">Save changes</button>
              </div>
                </form>
                <?php
                   if(isset($_POST['contact'])){
 
                      $name = $_FILES['file']['name'];

                      $title = $_REQUEST['title'];
                      $desc = $_REQUEST['editordata'];


                      // $target_dir = "upload/";
                      $target_dir = "../upload/home/";
                      $target_file = $target_dir . basename($_FILES["file"]["name"]);


                      // Select file type
                      $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

                      // Valid file extensions
                      $extensions_arr = array("jpg","jpeg","png","gif");

                      // Check extension
                      if( in_array($imageFileType,$extensions_arr) ){
                          move_uploaded_file($_FILES['file']['tmp_name'],$target_dir.$name);
                          $query="UPDATE about SET image='$name'";
                          mysqli_query($con,$query);
                          echo '<script>alert("Updated Succussfully"); window.location.href="custom.php";</script>';
                      }

                      if(!empty($title))
                      {

                        $query3="UPDATE about SET title='$title'";
                        $sql3=mysqli_query($con,$query3);
                        echo "<script type=\"text/javascript\"> alert(\"Updated Succussfully\"); window.location= \"custom.php\";</script>";
                      }
                      if(!empty($desc))
                      {

                        $query3="UPDATE about SET description='$desc'";
                        $sql3=mysqli_query($con,$query3);
                        echo "<script type=\"text/javascript\"> alert(\"Updated Succussfully\"); window.location= \"custom.php\";</script>";
                      }
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