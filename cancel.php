<?php 
require_once 'connection.php';
require_once 'user.php'; 

if(isset($_REQUEST['loan_id']))
{
	$id = $_REQUEST['loan_id'];

		$query3="UPDATE loan SET status='Cancel' WHERE loan_id='".$id."'";
		$sql3=mysqli_query($con,$query3);
	  	echo "<script type=\"text/javascript\"> alert(\"Updated Succussfully\"); window.location= \"myloan.php\";</script>";
}
else if(isset($_REQUEST['delete']))
{
	$id = $_REQUEST['delete'];

		$query3="DELETE FROM loan WHERE loan_id='".$id."'";
		$sql3=mysqli_query($con,$query3);
	  	echo "<script type=\"text/javascript\"> window.location= \"history.php\";</script>";
} ?>