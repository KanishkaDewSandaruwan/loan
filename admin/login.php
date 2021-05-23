<?php 
require_once 'connection.php';
session_start();
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Title -->
    <title>Welfare Society RDA</title>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">

    <!-- Favicon -->
    <link rel="shortcut icon" href="../img/logo.png">

    <!-- Template -->
    <link rel="stylesheet" href="public/graindashboard/css/graindashboard.css">
  </head>

  <body class="">

    <main class="main">

      <div class="content">

			<div class="container-fluid pb-5">

				<div class="row justify-content-md-center">
					<div class="card-wrapper col-12 col-md-4 mt-5">
						<div class="card">
							<div class="card-body">
								<h4 class="card-title">Welfare Society RDA - Login</h4>
								<form method="POST">
									<div class="form-group">
										<label for="username">Username</label>
										<input id="username" type="text" class="form-control" name="uname" required="" autofocus="">
									</div>

									<div class="form-group">
										<label for="password">Password
										</label>
										<input id="password" type="password" class="form-control" name="password" required="">
									</div>


									<div class="form-group no-margin">
										<button class="btn btn-primary btn-block" type="submit" name="submit">Sign In</button>
									</div>
								</form>
								<?php if(isset($_POST['submit'])) {

					                        $uname = stripslashes($_REQUEST['uname']);
					                        $password = stripslashes($_REQUEST['password']);

					                        $signin = "SELECT * FROM member WHERE username ='$uname' AND password ='".md5($password)."'";
					                        $result3 = mysqli_query($con,$signin) or mysqli_errno();
					                        $rows4 = mysqli_num_rows($result3);
					                        
					                        if($rows4==1){
					                            if ($row1 = mysqli_fetch_assoc($result3)) {

					                                $id = $row1['username'];
					                                $_SESSION['username']=$id;
					                                echo "<script type=\"text/javascript\">window.location.href='index.php'; </script>";
					                            }
					                        }
					                        else{

					                            echo "<script>alert(\"Username or Password is incorrect.\");window.location.href=\"login.php\";</script>";
					                        }
					                    } ?>
							</div>
						</div>
						<footer class="footer mt-3">
							<div class="container-fluid">
								<div class="footer-content text-center small">
									<span class="text-muted">&copy; 2021 Welfare Society RDA. All Rights Reserved. Created By : K.V.S.P.Bopitiya | SEU/IS/16/MIT/091</span>
								</div>
							</div>
						</footer>
					</div>
				</div>



			</div>

      </div>
    </main>

	<script src="public/graindashboard/js/graindashboard.js"></script>
    <script src="public/graindashboard/js/graindashboard.vendor.js"></script>
  </body>
</html>