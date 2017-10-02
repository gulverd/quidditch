<?php

	ob_start();
	include 'db.php';

	$user_id   = $_GET['user_id'];
	$member_id = $_GET['member_id'];
	$club_id   = $_GET['club_id'];
	//echo $club_id;

	$query   = "DELETE FROM club_member WHERE id = '$member_id'";
	$run     = mysqli_query($conn,$query);

	header('location: view_club.php?club_id='.$club_id.'&user_id='.$user_id);

?>