<?php 
require_once 'connection.php';
require_once 'user.php';

$g = $_SESSION['member_id'];
	        $query2="DELETE FROM member WHERE member_id='$id'";
            mysqli_query($con,$query2);

	         header('location:user_logout.php');
 ?>