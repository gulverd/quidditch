
<?php
	
	include 'db.php';
	
	$key 	= $_POST['key'];
	
	if($key != ''){
		$query = "SELECT * FROM clubs WHERE club_name = '$key'";
		$run   = mysqli_query($conn,$query);
		
		if(mysqli_num_rows($run) >= 1){
			echo 'ესეთი სახელით გუნდი უკვე არსებობს გთხოვთ მიუთითოთ სხვა სახელი!';
		}else{
			echo '<input type="submit" placeholder="შეიყვანეთ გუნდის დასახელება" name="regist_club" class="btn btn-primary" value="გუნდის დამატება" id="id_submit">';
		}
	}
	
?>