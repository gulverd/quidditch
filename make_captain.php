<?php

	ob_start();
	include 'db.php';

	$user_id   = $_GET['user_id'];
	$club_id   = $_GET['club_id'];
	$member_id = $_GET['member_id'];

	$query   = "UPDATE club_member SET captain_status = 0 WHERE club_id = '$club_id'";

	$run     = mysqli_query($conn,$query);

	$query2  = "UPDATE club_member SET captain_status = 1 WHERE id = '$member_id'";
	$run2    = mysqli_query($conn,$query2);

	header('location: view_club.php?club_id='.$club_id.'&user_id='.$user_id);

?>