<?php
  ob_start();
  include 'db.php';
  $school_id = $_GET['school_id'];
$actual_link = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";

  $querya = "SELECT * FROM schools WHERE id = '$school_id'";
  $runa   = mysqli_query($conn,$querya);

  while($rowa = mysqli_fetch_array($runa)){
    $school_namea  = $rowa['school_name'];
  }
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
    <meta property="og:url"           content="<?php echo $actual_link;?>" />
    <meta property="og:type"          content="website" />
    <meta property="og:title"         content="Quidditch 2K18" />
    <meta property="og:description"   content="<?php $school_namea;?>" />
    <meta property="og:image"         content="http://onlinebookshop.ge/qgaming/img/logomap.png" />
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<!-- BODY START -->
<body data-spy="scroll" data-offset="80">
<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.10&appId=220248188400044";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>
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
                                                    <input type="submit" name="submit" class="btn btn-primary" id="send_button" value="გაგზავნა">
                                                </div>
                                            </form> 
                                          </div>
                                        </div>
                                      </div>
                                    </div>
        <div class="col-md-12">
            <div class="container"> 
                <div class="col-md-12 wrpa_auth">
                    <div class="col-md-12 auth_title_wrp">
                        <h3><?php echo $school_namea;?></h3>
                    </div>                
                <section id="hositng-plans">
                <div class="col-md-10 col-md-push-1">
                        <div class="pricing-container">
                             <?php
                                $queryLastTeams = "SELECT a.id,a.club_name,a.pay_status,a.club_school_id,b.school_name 
                                FROM clubs a 
                                JOIN schools b on a.club_school_id = b.id
                                 
                                WHERE a.club_school_id = '$school_id' ORDER BY a.id DESC";
                                
                                $runLastTeams   = mysqli_query($conn,$queryLastTeams);

                                if(mysqli_num_rows($runLastTeams) >= 1){
                                    echo 
                                    '<div class="col-md-12 messages_wrp" id="teams_share_wrp">
                                        გააზიარეთ თქვენი სკოლის გუნდები! 
                                        <div class="fb-share-button" data-href="'.$actual_link.'" data-layout="box_count" data-size="large" data-mobile-iframe="true"><a class="fb-xfbml-parse-ignore" target="_blank" href="https://www.facebook.com/sharer/sharer.php?u=https%3A%2F%2Fdevelopers.facebook.com%2Fdocs%2Fplugins%2F&amp;src=sdkpreparse">Share</a>
                                        </div>
                                    </div>';
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
                                }else{
                                    echo '<div class="col-md-12 messages_wrp">
                                            <p>ამ დროისთვის არ არის გუნდები აქტიური.</p>
                                            <p>თუ ხართ სკოლის წარმომადგენელი <a href="registration.php">დაამატეთ გუნდი.</a></p>
                                            <p>თუ ხართ სკოლის მოსწავლე <a data-toggle="modal" data-target="#myModal">შეგვატყობინე</a> შენი სკოლის შესახებ.</p>
                                          </div>
                                    ';
                                }

                            ?>
                    </div>
                </div>
        </section>                   
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
                                            $full_name = $_POST['full_name'];
                                            $phone     = $_POST['phone'];
                                            $school    = $_POST['school'];

                                            $headers = "Content-Type: text/html; charset=utf-8";
                                            $message .= "<html><body>";
                                            $message .= "Full Name: ".$full_name . " PHONE: " .$phone . " School: ". $school;
                                            $message .= "</body></html>";


                                            mail('t.tskhvediani@englishbook.co.uk', 'SChOOL PROBLEM', $message, $headers);

                                            header('location: index.php');
                                        }

                                    ?>

