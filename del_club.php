<?php

	ob_start();
	include 'db.php';

	$user_id = $_GET['user_id'];
	$club_id = $_GET['club_id'];
	//echo $club_id;

	$query   = "DELETE FROM clubs WHERE id = '$club_id'";
	$run     = mysqli_query($conn,$query);

	$query2  = "DELETE FROM club_member WHERE club_id = '$club_id'";
	$run2    = mysqli_query($conn,$query2);

	header('location: profile.php?user_id='.$user_id);

?>