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
                    <div class="domain-section-non-index"><!-- START DOMAIN SRARCH SECTION -->

<!--         <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h5>მოძებნე და შეუერთდი შენი სკოლის გუნდს! <span>თუ ვერ პოულობთ თქვენს სკოლას გთხოვთ აუცილებლად დაგვიკავშირდეთ ნომერზე: 0322 00 12 44</span></h5>
                    <div class="domain-search-holder-non-index">
                        <form id="domain-search" class="non-index-serch wow fadeIn" data-wow-delay="0.5s">
                            <input id="domain-text" type="text" name="domain" placeholder="ჩაწერეთ გუნდის დასახელება..." />
                        </form>
                    </div>
                </div>
            </div>
        </div> -->

    </div><!-- END DOMAIN SELECTION -->

   


    <br>
        <section id="hositng-plans">
                <div class="col-md-10 col-md-push-1">
                        <div class="pricing-container">
                             <?php
                                $queryLastTeams = "SELECT a.id,a.club_name,a.pay_status,a.club_school_id,b.school_name 
                                FROM clubs a 
                                JOIN schools b on a.club_school_id = b.id
                                ORDER BY a.id DESC";
                                
                                $runLastTeams   = mysqli_query($conn,$queryLastTeams);

                                if(mysqli_num_rows($runLastTeams) >= 1){
                                    while($rowLastTeams = mysqli_fetch_array($runLastTeams)){ 
                                        $id          = $rowLastTeams['id'];   
                                        $club_name   = $rowLastTeams['club_name']; 
                                        $pay_status  = $rowLastTeams['pay_status'];
                                        $school_name = $rowLastTeams['school_name'];

                                        if($pay_status == 1){
                                            echo '                            
                                                <div class="col-md-4">
                                                    <div class="plan spsl-plan wow fadeIn" data-wow-delay="0.3s"><!-- START PLAN -->
                                                        <div class="ribbon"><span>ვერიფიცირებული</span></div>
                                                        <div class="paln-head plantwo">
                                                              <span>'.$club_name.'</span>
                                                        </div>
                                                        <div class="plans-tag">'.$school_name.'</div>
                                                        <div class="plans-body" id="plans-body">
                                                            <ul style="list-style-type: none;">

                                                        ';  
                                                            $queryLastTeamMembers = "SELECT * FROM club_member WHERE club_id = '$id'";
                                                            $runLastTeamMembers   = mysqli_query($conn,$queryLastTeamMembers);

                                                            if(mysqli_num_rows($runLastTeamMembers) >= 1){
                                                                while($rowLastTeamMembers = mysqli_fetch_array($runLastTeamMembers)){
                                                                    $member_name    = $rowLastTeamMembers['member_name'];
                                                                    $captain_status = $rowLastTeamMembers['captain_status'];

                                                                    if($captain_status == 1){
                                                                        $memb_name  = '<li><i class="fa fa-copyright" aria-hidden="true"></i>'.$member_name.'</li>';
                                                                    }else{
                                                                        $memb_name  = '<li><i class="fa fa-user" aria-hidden="true"></i>'.$member_name.'</li>';
                                                                    }
                                                                    echo $memb_name;
                                                                }
                                                            }else{
                                                                for($i = 1; $i <= 5; $i++){
                                                                    echo '<li><i class="fa fa-ban" aria-hidden="true"></i> გუნდი ცარიელია</li>';
                                                                }
                                                            }

                                                        echo'
                                                           </ul>
                                                        </div>
                                                        <div class="plans-footer">
                                                            <a class="read_more" id="read_more">ვრცლად</a>
                                                        </div>
                                                    </div><!-- END PLAN -->
                                                </div>';
                                        }else{
                                            echo 
                                            '
                                                <div class="col-md-4">
                                                    <div class="plan spsl-plan wow fadeIn" data-wow-delay="0.3s"><!-- START PLAN -->                                                    
                                                        <div class="paln-head planone">
                                                              <span>'.$club_name.'</span>
                                                        </div>
                                                        <div class="plans-tag">'.$school_name.'</div>
                                            
                                                       <div class="plans-body" id="plans-body">
                                                            <ul style="list-style-type: none;">

                                                        ';  
                                                            $queryLastTeamMembers = "SELECT * FROM club_member WHERE club_id = '$id'";
                                                            $runLastTeamMembers   = mysqli_query($conn,$queryLastTeamMembers);

                                                            if(mysqli_num_rows($runLastTeamMembers) >= 1){
                                                                while($rowLastTeamMembers = mysqli_fetch_array($runLastTeamMembers)){
                                                                    $member_name    = $rowLastTeamMembers['member_name'];
                                                                    $captain_status = $rowLastTeamMembers['captain_status'];

                                                                    if($captain_status == 1){
                                                                        $memb_name  = '<li><i class="fa fa-copyright" aria-hidden="true"></i>'.$member_name.'</li>';
                                                                    }else{
                                                                        $memb_name  = '<li><i class="fa fa-user" aria-hidden="true"></i>'.$member_name.'</li>';
                                                                    }
                                                                    echo $memb_name;
                                                                }
                                                            }else{
                                                                for($i = 1; $i <= 5; $i++){
                                                                    echo '<li><i class="fa fa-ban" aria-hidden="true"></i> გუნდი ცარიელია</li>';
                                                                }                                                              
                                                            }

                                                        echo'
                                                           </ul>
                                                        </div>
                                                        <div class="plans-footer">
                                                            <a class="read_more" id="read_more">ვრცლად</a>
                                                        </div>
                                                    </div><!-- END PLAN -->
                                                </div>
                                            ';
                                        }
                                    }                                    
                                }

                            ?>
                    </div>
                </div>
        </section>
    <div class="services-fetures-page"><!-- SERVICE FETURES -->

        <div class="container">
            <div class="row">
                <div class="col-md-10 col-md-push-1">

                    <div class="col-md-4 tablat-photo-ins-t">
                        <div class="img-sec-serv-fet text-center">
                            <img src="img/demo/price.png" alt="support" />
                        </div>
                    </div>

                    <div class="col-md-8">
                        <div class="info-sec-serv-fet text-right">
                            <h5>როგორ მოვხვდე თამაშებზე?</h5>

                            <p>თამაშში მონაწილეობის მისაღებად აუცილებელია რომ მონაწილეები იყვნენ საქართველოს საჯარო/კერძო სკოლის მოსწავლეები 9 დან 12 კლასის ჩათვლით.<i style="    margin-right: 0;margin-left: 8px;" class="fa fa-arrows-h" aria-hidden="true"></i> </p>
                            <p>მოსწავლეებისგან უნდა დაკომპლექტდეს 5 კაციანი გუნდები, სადაც 1 კაპიტანია. <i style="    margin-right: 0;margin-left: 8px;" class="fa fa-arrows-h" aria-hidden="true"></i></p>
                            <p>თითოეულ სკოლას შეუძლია წარადგინოს ერთი ან რამოდენიმე გუნდი. <i style="    margin-right: 0;margin-left: 8px;" class="fa fa-arrows-h" aria-hidden="true"></i></p>
                            <p>ვერიფიკაციის გავლის შემდეგ გუნდებს ეგზავნებათ: <i style="    margin-right: 0;margin-left: 8px;" class="fa fa-arrows-h" aria-hidden="true"></i></p>
                            <span>თამაშების განრიგი და მოსამზადებელი კითხვების პაკეტი</span>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div><!-- END SERVICE FETURES -->
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

?>

<script type="text/javascript">

  $(document).ready(function(){

    $('.read_more').click(function(){
        $('#plans-body').toggle();
    });

  });

</script>  