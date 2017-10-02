<?php ob_start();?>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="user-scalable=0, initial-scale=1.0">
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="style.css">
	<title>Quidditch 2K18 - Admin</title>
	<link href="https://fonts.googleapis.com/css?family=Advent+Pro" rel="stylesheet">
	<script src="//cdn.ckeditor.com/4.5.11/full/ckeditor.js"></script>
</head>
<body>
	<?php 
		include 'db.php';
		include 'nav_in.php';
		$date  = date('Y / m / d');
		$now   = date("YmdHms");
	?>
	<div class="col-md-12">
		<div class="container">
			<div class="col-md-12 dashboard_title_wrp">
				<h2>სიახლეები / მედია</h2>
			</div>
			<div class="col-md-12 buti_wrapper_partners">
				<a href="blog.php" class="btn btn-default"><i class="fa fa-long-arrow-left" aria-hidden="true"></i> უკან დაბრუნება</a>
			</div>
			<div class="col-md-12 dashboard_buttons_main_wrp">
				<form method="post" action="" enctype="multipart/form-data">
					<div class="form-group">
						<label>სიახლის დასახელება</label>
						<input type="text" name="title" class="form-control" placeholder="დასახელება">
					</div>
					<div class="form-group">
						<label>სურათი</label>
						<input type="file" name="image1" class="form-control">
					</div>
					<div class="form-group">
						<label>სიახლის შინაარსი</label>
						<textarea name="desc"></textarea>
		        		<script>
		           			CKEDITOR.replace('desc');
		       	 		</script>
					</div>
					<div class="form-group">
						<input type="submit" name="submit" value="სიახლის დამატება" class="btn btn-primary submit">
					</div>
				</form>
			</div>
		</div>
	</div>
</body>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<script src="js/bootstrap.min.js"></script>
</html>

<?php

	if(isset($_POST['submit'])){
		$title 		  = $_POST['title'];
		$desc  		  = $_POST['desc'];
		

		if(isset($_FILES['image1']) or isset($_FILES['image2']) or isset($_FILES['image3'])){
			$errors= array();
			$file_name1  = $_FILES['image1']['name'];
			$file_size1  = $_FILES['image1']['size'];
			$file_tmp1   = $_FILES['image1']['tmp_name'];
			$file_type1  = $_FILES['image1']['type'];   
			$file_ext1   = strtolower(end(explode('.',$_FILES['image1']['name'])));
			$extensions1 = array("jpeg","jpg","png"); 


			if(empty($errors)==true){

			    if($file_name1 == '' or is_null($file_name1)){
			    	$fl_name1 = '';
			    }else{
			    	$fl_name1    = $now.'1'.'.'.$file_ext1; 
			    	move_uploaded_file($file_tmp1,"..//imgs/blog/".$fl_name1);
			    }

				$queryI = "INSERT INTO blog (blog_title,blog_content,blog_date,blog_picture) VALUES ('$title','$desc','$date','$fl_name1')";
				$runI   = mysqli_query($conn,$queryI);

			    header('Location: blog.php');

			}else{

				$queryI = "INSERT INTO blog (blog_title,blog_content,blog_date) VALUES ('$title','$desc','$date')";
				$runI   = mysqli_query($conn,$queryI);

				header('Location: blog.php');

			    print_r($errors);
			}
		}
	}
?>