<?php 

require_once 'connection.php';
require_once 'admin.php'; //Check login 

if(isset($_REQUEST['accept']))
{
	$id = $_REQUEST['accept'];

		$query3="UPDATE loan SET status='Accepted' WHERE loan_id='".$id."'";
		$sql3=mysqli_query($con,$query3);
	  	echo "<script type=\"text/javascript\"> alert(\"Updated Succussfully\"); window.location= \"loan.php\";</script>";
}
else if(isset($_REQUEST['cancel']))
{
	$id = $_REQUEST['cancel'];

		$query3="UPDATE loan SET status='Cancel'  WHERE loan_id='".$id."'";
		$sql3=mysqli_query($con,$query3);
	  	echo "<script type=\"text/javascript\"> alert(\"Updated Succussfully\"); window.location= \"loan.php\";</script>";
}
else if(isset($_REQUEST['accept_loan']))
{
	$id = $_REQUEST['accept_loan'];

		$query3="UPDATE saving SET status='Accepted' WHERE saving_id='".$id."'";
		$sql3=mysqli_query($con,$query3);
	  	echo "<script type=\"text/javascript\"> alert(\"Updated Succussfully\"); window.location= \"saving.php\";</script>";
}
else if(isset($_REQUEST['cancel_loan']))
{
	$id = $_REQUEST['cancel_loan'];

		$query3="UPDATE saving SET status='Cancel'  WHERE saving_id='".$id."'";
		$sql3=mysqli_query($con,$query3);
	  	echo "<script type=\"text/javascript\"> alert(\"Updated Succussfully\"); window.location= \"saving.php\";</script>";
}

 ?>