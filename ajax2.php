
<?php
	
	include 'db.php';
	
	$key 	= $_POST['key'];
	
	if($key != ''){
		$query = "SELECT * FROM users WHERE p_id = '$key'";
		$run   = mysqli_query($conn,$query);
		
		if(mysqli_num_rows($run) >= 1){
			echo 'ეს პირადი ნომერი უკვე დარეგისტრირებულია სისტემაში!';
		}
	}
	
?>