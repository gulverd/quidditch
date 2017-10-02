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
	<?php include 'nav.php';?>
	<div class="col-md-12">
		<div class="container">
			<div class="col-md-12 dashboard_title_wrp">
				<h2>Quidditch 2K18 - Admin Panel</h2>
			</div>
			<div class="col-md-12 dashboard_buttons_main_wrp">
				<div class="col-md-4 dashboard_buttonsi">
					<a href="teams.php">
					<div class="col-md-12 dashboard_buttons_wrp">
						<h2><i class="fa fa-users" aria-hidden="true"></i> გუნდები</h2>
					</div>
					</a>
				</div>
				<div class="col-md-4 dashboard_buttonsi">
					<a href="schools.php">
					<div class="col-md-12 dashboard_buttons_wrp">
						<h2><i class="fa fa-university" aria-hidden="true"></i> სკოლები</h2>
					</div>
					</a>
				</div>
				<div class="col-md-4 dashboard_buttonsi">
					<a href="contact.php">
					<div class="col-md-12 dashboard_buttons_wrp">
						<h2><i class="fa fa-phone" aria-hidden="true"></i> კონტაქტი</h2>
					</div>
					</a>
				</div>
				<div class="col-md-12 dashboard_buttonsi">
					<a href="blog.php">
					<div class="col-md-12 dashboard_buttons_wrp">
						<h2><i class="fa fa-rss" aria-hidden="true"></i> სიახლეები / მედია</h2>
					</div>
					</a>
				</div>
			</div>
		</div>
	</div>
</body>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<script src="js/bootstrap.min.js"></script>
</html>

