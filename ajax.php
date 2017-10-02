
<?php
	
	include 'db.php';
	
	$key 	= $_POST['key'];
	$keya 	= "%".$key."%";
	//echo $kayea;
	if($key != ''){
		$query = "SELECT * FROM schools WHERE school_name like '$keya' or region like '$keya' or city like '$keya'";
		$run   = mysqli_query($conn,$query);
		
		while($row = mysqli_fetch_array($run)){
			$id 	= $row['id'];
			$string = $row['city']. ' '. $row['region'] . ' ' . $row['school_name'];
			echo '<li class="suggestions_li" id="'.$id.'" title="'.$string.'">'.$string.'</li>';
		}
	}
	
?>