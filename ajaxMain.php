
<?php
	
	include 'db.php';
	
	$key 	= $_POST['key'];
	$keya 	= "%".$key."%";
	//echo $kayea;
	if($key != ''){

		$query = "SELECT id, school_name FROM schools WHERE school_name like '$keya'";
		$run   = mysqli_query($conn,$query);

		while($row = mysqli_fetch_array($run)){

			$id 		 = $row['id'];
			$school_name = $row['school_name'];

			echo '<a href="view_school_teams.php?school_id='.$id.'"><li class="suggestions_lia" title="'.$school_name.'">'.$school_name.'</li></a>';

		}
	}
	
?>