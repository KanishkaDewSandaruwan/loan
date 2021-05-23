<?php
	require_once 'connection.php'; //insert connection to page
	session_start();

	if(!isset($_SESSION['member_id'])){
		header('location:login.php');
	}else{
		$id = $_SESSION['member_id'];
		$viewquery = " SELECT * FROM member where member_id = '$id'";
        $viewresult = mysqli_query($con,$viewquery); 
        $row1 = mysqli_fetch_assoc($viewresult);

        if (!isset($row1['name'])) {
        	header('location:login.php');
        }
	}
?>