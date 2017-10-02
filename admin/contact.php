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

		$now = date("YmdHms");

		include 'db.php';
		include 'nav_in.php';

		$query2  = "SELECT * FROM contact";
		$run2    = mysqli_query($conn,$query2);

		if(mysqli_num_rows($run2) >= 1){
			while($row2 = mysqli_fetch_array($run2)){
				$c_phone1      = $row2['phone'];
				$c_address1    = $row2['address'];
				$c_email       = $row2['email'];
			}
		}else{
				$c_phone1      = '';
				$c_address1    = '';
				$c_email       = '';
		}

	
	?>
	<div class="col-md-12">
		<div class="container">
			<div class="col-md-12 dashboard_title_wrp">
				<h2>Contact Information</h2>
			</div>
			<div class="col-md-12 dashboard_buttons_main_wrp">
				<form method="post">
					<div class="form-group">
						<label>Phone</label>
						<input type="text" name="phone1" class="form-control" placeholder="Ex: 599999999" value="<?php echo $c_phone1;?>">
					</div>
					<div class="form-group">
						<label>Email</label>
						<input type="text" name="email" class="form-control" placeholder="Ex: info@englishbook.ge" value="<?php echo $c_email;?>">
					</div>
					<div class="form-group">
						<label>Address</label>
						<input type="text" name="address1" value="<?php echo $c_address1;?>" class="form-control" placeholder="Chavchavadze 14 , Tbilisi , Georgia">
					</div>
					<div class="form-group">
						<input type="submit" name="submit" value="Update" class="btn btn-primary submit">
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
			$phone1     = $_POST['phone1'];
			$email      = $_POST['email'];
			$address1   = $_POST['address1'];


		$query = "UPDATE 
		contact 
		SET phone 	= '$phone1', 
			email   = '$email',
			address = '$address1'";
		$run   = mysqli_query($conn,$query);

		header('Location: contact.php');
	}