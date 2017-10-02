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
</head>
<body>
	<?php 
		$now = date("Y / m / d");
		include 'db.php';
		include 'nav_in.php';
	?>
	<div class="col-md-12">
		<div class="container">
			<div class="col-md-12 dashboard_title_wrp">
				<h2>სიახლეები / მედია</h2>
			</div>
			<div class="col-md-12 buti_wrapper_partners">
				<a href="add_new_blog.php" class="btn btn-default"><i class="fa fa-plus" aria-hidden="true"></i> დაამატეთ ახალი სიახლე</a>
			</div>
			<div class="col-md-12 dashboard_buttons_main_wrp">
				<table class="table table-bordered">
					<tr class="table_header">
						<td id="cent_td">დასახელება</td>
						<td id="cent_td">კონტენტი</td>
						<td id="cent_td">სურათი</td>
						<td id="cent_td">თარიღი</td>
						<td id="cent_td">წაშლა</td>
					</tr>

					<?php 

						$query = "SELECT * FROM blog ORDER BY id DESC";
						$run   = mysqli_query($conn,$query);

						while($row = mysqli_fetch_array($run)){
							$id 	    = $row['id'];			
							$title 	    = $row['blog_title'];
							$content    = $row['blog_content'];
							$pic_1 		= $row['blog_picture'];
							$year 		= $row['blog_date'];

							if($content == '' or is_null($content)){
								$content = '<span class="glyphicon glyphicon-remove" id="del"></span>';
							}else{
								$content = '<span class="glyphicon glyphicon-ok" id="ok"></span>';
							}
							if($pic_1 == '' or is_null($pic_1)){
								$pic_1 = '<span class="glyphicon glyphicon-remove" id="del"></span>';
							}else{
								$pic_1 = '<span class="glyphicon glyphicon-ok" id="ok"></span>';
							}
						
							echo '<tr>
								<td id="cent_td">'.$title.'</td>
								<td id="cent_td">'.$content.'</td>
								<td id="cent_td">'.$pic_1.'</td>
								<td id="cent_td">'.$year.'</td>';
						echo'</td>								
								<td id="cent_td">
									<button type="button" data-toggle="modal" data-target="#myModal'.$id.'">
									  <span class="glyphicon glyphicon-trash" id="dl"></span>
									</button>
									<div class="modal fade" id="myModal'.$id.'" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
									  <div class="modal-dialog" role="document">
									    <div class="modal-content">
									      <div class="modal-header">
									        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
									        <h4 class="modal-title" id="myModalLabel">სიახლის წაშლა</h4>
									      </div>
									      <div class="modal-body">
											<p>
												დარწმუნებული ხართ, რომ გინდათ წაშალოთ სიახლე : <span id="del">'.$title.'</span> ?
											</p>
									      </div>
									      <div class="modal-footer">
									        <button type="button" class="btn btn-default" data-dismiss="modal" id="butia">გაუქმება</button>
									        <button type="button" class="btn btn-danger" id="butia"><a href="del_training.php?training_id='.$id.'"><span class="glyphicon glyphicon-trash"></span> წაშლა</a></button>
									      </div>
									    </div>
									  </div>
									</div>
								</td>
								</td>
							</tr>'; 
						}

					?>
				</table>
			</div>
		</div>
	</div>
</body>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<script src="js/bootstrap.min.js"></script>
</html>
