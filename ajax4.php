
<?php
	
	include 'db.php';
	
	$key 	= $_POST['key'];
	
	if($key != ''){
		$query = "SELECT * FROM users WHERE email = '$key'";
		$run   = mysqli_query($conn,$query);
		
		if(mysqli_num_rows($run) >= 1){
			echo 'ეს ელ-ფოსტა უკვე დარეგისტრირებულია სისტემაში!';
		}
	}
	
?>