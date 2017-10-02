<?php
  ob_start();
  include 'db.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Meta Tags -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="SKYHOST - Responsive Hosting Template">
    <meta name="author" content="nedjai">
    <link rel="icon" href="favicon.ico">
    <!-- Tittle -->
    <title>Quidditch Competition 2018 | მთავარი </title>

	<!-- Stylesheet -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
    <link href="css/responsive.css" rel="stylesheet">
    <link href="css/flaticon.css" rel="stylesheet">
    <link href="css/font-awesome.min.css" rel="stylesheet">
    <link href="css/animate.css" rel="stylesheet" />
    <link href="css/select2.min.css" rel="stylesheet" />
	<link rel="stylesheet" href="owlcarousel/assets/owl.carousel.min.css">
    <link rel="stylesheet" href="owlcarousel/assets/owl.theme.default.min.css">

    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<?php
  $user_id = $_GET['user_id'];
  $club_id = $_GET['club_id'];

  $query   = "SELECT * FROM clubs WHERE id='$club_id'";
  $run     = mysqli_query($conn,$query);

  while($row = mysqli_fetch_array($run)){
    $club_namea = $row['club_name'];
  }
?>
<!-- BODY START -->
<body data-spy="scroll" data-offset="80">

    <!-- PREELOADER START -->
    <div class="se-pre-con">
        <div class="timer"><span>გთხოვთ დაელოდოთ...</span></div>
    </div>
	<!-- END PREELOADER -->
	
	<!-- HEADER START -->
    <header>
        <div class="animation-header"><!-- HEADRR ANIMATION -->
            <span class='stars'></span>
            <span class="starsbg"></span>
            <span class="white-background-header"></span>
            <span class="space-ship"></span>
        </div><!-- END HEADER ANIMATION -->
        
        <?php include 'nav_bar.php';?>

        <div class="col-md-12">
            <div class="container"> 

                <div class="col-md-12 wrpa_auth">
                    <div class="col-md-12 back_wrp">
                      <a href="profile.php?user_id=<?php echo $user_id;?>"><i class="fa fa-step-backward" aria-hidden="true"></i> უკან დაბრუნება</a>
                    </div>
                    <form action="" method="POST">
                      <div class="form-group">
                        <label>გუნდის დასახელება</label>
                        <input type="text" name="club_name" class="form-control" value="<?php echo $club_namea;?>">
                      </div>
                      <div class="form-group">
                        <input type="submit" placeholder="შეიყვანეთ გუნდის დასახელება" name="regist_club" class="btn btn-primary" value="გუნდის სახელის რედაქტირება">
                      </div>
                    </form> 

                </div>
            </div>
        </div>

    </header>


    <?php
        include 'footer.php';
    ?>

    <!-- JAVASCRIPT -->
    <script src="js/wow.min.js"></script>
    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/text-changer.js"></script>
    <script src="js/select2.min.js"></script>
    <script src="js/contact.js"></script>
    <script src="js/smoothscroll.js"></script>
    <script src="js/counter.js"></script>
    <script src="js/page.js"></script>
    <script src="js/responsive-menu.js"></script>
	<script src="owlcarousel/owl.carousel.min.js"></script>

</body><!-- END BODY -->

</html>

<?php

  if(isset($_POST['regist_club'])){

    $club_name = $_POST['club_name'];

    $query3    = "UPDATE clubs SET club_name = '$club_name' WHERE id ='$club_id'";
    $run3      = mysqli_query($conn,$query3);

    header('location: profile.php?user_id='.$user_id);
  }