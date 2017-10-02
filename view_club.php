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
  <link rel="stylesheet" type="text/css" href="src/jquery.geokbd.css">
  <script type="text/javascript" src="https://code.jquery.com/jquery-1.11.2.min.js"></script>
  <script type="text/javascript" src="src/jquery.geokbd.js"></script>
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
  $queryUser = "SELECT p_id FROm users WHERE id ='$user_id'";
  $runUser   = mysqli_query($conn,$queryUser);

  while($rowUser = mysqli_fetch_array($runUser)){
    $personal_id = $rowUser['p_id'];
  }
  
  $club_pay_code = $personal_id . '-'.$club_id;

  $queryCode = "UPDATE clubs SET club_pay_code = '$club_pay_code' WHERE id = '$club_id'";
  $runCodo   = mysqli_query($conn,$queryCode);

  $query   = "SELECT * FROM clubs WHERE id='$club_id'";
  $run     = mysqli_query($conn,$query);

  while($row = mysqli_fetch_array($run)){
    $club_namea = $row['club_name'];
    $pay_status = $row['pay_status'];
    $pay_statusa = $row['pay_status'];

    if($pay_status == 1){
      $pay_status = '<span class="paied">გადახდილია</span>';
      $del_button = '';


    }else{
      $pay_status = '<span class="unpaid">გადაუხდელია</span>';
      
      $del_button = '<a href="del_member.php?member_id='.$member_id.'&club_id='.$club_id.'&user_id='.$user_id.'" id="del"><i class="fa fa-trash" aria-hidden="true"></i></a>';


    }
  } 
  
?>
<!-- BODY START -->
<body data-spy="scroll" data-offset="80">
<script type="text/javascript">
    $('.switch').geokbd();
  </script>
<input class="switch active-kbd" type="checkbox" checked="true" id="switchera1">
  <span class="switch switchButton" id="switchera2">some span</span>
    <!-- PREELOADER START -->
<!--     <div class="se-pre-con">
        <div class="timer"><span>გთხოვთ დაელოდოთ...</span></div>
    </div> -->
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
                    <div class="col-md-12 auth_title_wrp">
                        <h3><?php echo $club_namea;?></h3>
                    </div>
                    <div class="col-md-12 auth_content_wrp">
                            <div class="col-md-12 edit_club_wrp">
            <div class="col-md-12">
              გადახდის სტატუსი:  <?php echo $pay_status;?>
            </div>
            <div class="col-md-6">
              <table class="table table-bordered">
                <tr id="table_head">
                  <td>გუნდის წევრის სახელი და გვარი</td>
                  <td id="td_cent">კაპიტანი</td>
                  <td id="td_cent">წაშლა</td>
                </tr>
                <?php
                  $query2 = "SELECT * FROM club_member WHERE club_id = '$club_id'";
                  $run2   = mysqli_query($conn,$query2);

                  if(mysqli_num_rows($run2)>=1) {
                    while($row2 = mysqli_fetch_array($run2)){
                      $member_id      = $row2['id'];
                      $member_name    = $row2['member_name'];
                      $captain_status = $row2['captain_status'];
                      if($captain_status == 1){
                        $captain_status = '<i class="fa fa-check-circle" aria-hidden="true" id="view"></i>';
                      }else{
                        $captain_status = '<a href="make_captain.php?member_id='.$member_id.'&club_id='.$club_id.'&user_id='.$user_id.'" id="capt_off"><i class="fa fa-check-circle" aria-hidden="true"></i></a>';
                      }
                      echo 
                      '<tr>
                        <td>'.$member_name.'</td>
                        <td id="td_cent">'.$captain_status.'</td>
                        <td id="td_cent">'.$del_button.'</td>
                      </tr>';
                    }
                  }else{
                    echo '<tr id="td_cent" class="max_clubs"><td colspan="3">ამ დროისათვის გუნდი ცარიელია, გთხოვთ დაამატოთ წევრები</td></tr>';
                  }
                ?>
              </table>
            </div>
            <div class="col-md-6">
              <?php
                if($pay_statusa == 1){
                  echo '';
                }else{
                  if(mysqli_num_rows($run2) < 5){
                    echo 
                      '<form action="" method="POST">
                        <div class="form-group">
                          <input type="text" name="member_name" class="form-control" placeholder="მოსწავლის სახელი და გვარი">
                        </div>
                        <div class="form-group">
                          <input type="submit" name="submit" class="btn btn-primary" value="გუნდის წევრის დამატება">
                        </div>
                      </form>';
                  }else{
                    echo '<div class="col-md-12 max_clubs">თქვენ უკვე დამატებული გაქვთ მაქსიმალური რაოდენობის გუნდის წევრები</div>';
                  }                  
                }

              ?>

            </div>
        </div>
    
                        
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

    $member_name = $_POST['member_name'];

    $query3    = "INSERT INTO club_member (member_name,club_id) VALUES ('$member_name','$club_id')";
    $run3      = mysqli_query($conn,$query3);

    header('location: view_club.php?club_id='.$club_id.'&user_id='.$user_id);
  }