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
<!-- BODY START -->
<body data-spy="scroll" data-offset="80">

    <!-- PREELOADER START -->
    <div class="se-pre-con">
        <div class="timer"><span>გთხოვთ დაელოდოთ...</span></div>
    </div>
	<!-- END PREELOADER -->
	 <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                                      <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                          <div class="modal-header">
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                            <h4 class="modal-title" id="myModalLabel">დაგვიკავშირდით</h4>
                                          </div>
                                          <div class="modal-body">
                                            <form action="" method="POST">
                                                <div class="form-group">
                                                    <label>სახელი და გვარი</label>
                                                    <input type="text" name="full_name" class="form-control">
                                                </div>
                                                <div class="form-group">
                                                    <label>ტელეფონის ნომერი</label>
                                                    <input type="text" name="phone" class="form-control">
                                                </div>
                                                <div class="form-group">
                                                    <label>სკოლის დასახელება</label>
                                                    <input type="text" name="school" class="form-control">
                                                </div>
                                                <div class="form-group">
                                                    <input type="submit" name="submit2" class="btn btn-primary" id="send_button" value="გაგზავნა">
                                                </div>
                                            </form> 
                                          </div>
                                        </div>
                                      </div>
                                    </div>
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
                    <div class="col-md-12 auth_title_wrp">
                        <h3>ავტორიზაცია</h3>
                        <p>თუ ხართ რეგისტრირებული მომხმარებელი, გთხოვთ შეიყვანოთ თქვენი პირადი ნომერი და დააჭიროთ ღილაკს "ავტორიზაცია".</p>
                        <p>თუ არ ხართ რეგისტრირებული სისტემაში, გთხოვთ <a href="registration.php" id="edit">დარეგისტრირდეთ</a>.</p>
                        <p>თუ ხართ სკოლის მოსწავლე <a data-toggle="modal" data-target="#myModal">შეგვატყობინე</a> შენი სკოლის შესახებ.</p>
                    </div>
                    <div class="col-md-12 auth_content_wrp">
                      <form action="" method="POST" id="form1">   
                        <div class="form-group">
                          <label>პირადი ნომერი</label>
                          <input type="number" name="p_id" class="form-control"  autocomplete="off" autosave="off" id="p_id" placeholder="გთხოვთ მიუთითოთ თქვენი პირადი ნომერი">
                        </div>
                        <div class="form-group">
                            <input type="submit" name="submit" class="btn btn-primary but" value="ავტორიზაცია">
                        </div>
                      </form>
                    </div>
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
  
  if(isset($_POST['submit'])){

    $p_id   = $_POST['p_id'];

    $query  = "SELECT * FROM users WHERE p_id = '$p_id'";
    $run    = mysqli_query($conn,$query);

    if(mysqli_num_rows($run) >= 1){
      while($row = mysqli_fetch_array($run)){
        $user_id = $row['id'];
        
        header('location: profile.php?user_id='.$user_id);
      }
    }else{
      echo '<div class="error_message_p_id2">ესეთი პირადი ნომერი არ არის რეგისტრირებული სისტემაში</div>';
    }


  }



                                        if(isset($_POST['submit2'])){
                                            $full_name = $_POST['full_name'];
                                            $phone     = $_POST['phone'];
                                            $school    = $_POST['school'];

                                            $headers = "Content-Type: text/html; charset=utf-8";
                                            $message .= "<html><body>";
                                            $message .= "Full Name: ".$full_name . " PHONE: " .$phone . " School: ". $school;
                                            $message .= "</body></html>";


                                            mail('t.tskhvediani@englishbook.co.uk', 'SChOOL PROBLEM', $message, $headers);

                                            header('location: auth.php');
                                        }

                                    ?>

