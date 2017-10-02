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
        $club_namea     = $row['club_name'];
        $pay_status     = $row['pay_status'];
      $club_pay_codea = $row['club_pay_code'];

        if($pay_status === 1){
          $pay_status = '<span class="paied">გადახდილია</span>';
        }else{
          $pay_status = '<span class="unpaid">გადაუხდელია</span>';
        }
      }

    $queryClubMemberCount    = "SELECT * FROM club_member WHERE club_id = '$club_id'";
    $runQueryClubMemberCount = mysqli_query($conn,$queryClubMemberCount);


    $count  = mysqli_num_rows($runQueryClubMemberCount);

    $price  = $count*20;

     
    ?>
<!-- BODY START -->
<body data-spy="scroll" data-offset="80">

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
                        <h3>გადახდის რეკვიზიტები</h3>
                    </div>
                    <div class="col-md-12 auth_content_wrp">
                        <div class="col-md-12 registration_title_wrp">
                            გუნდი: <?php echo $club_namea;?>
                        </div>
                        <div class="col-md-12">
                            <div class="col-md-12 payment_button_wrp">
                                    <?php

                                    include 'cert/tbcpay.lib.php';

                                    $tetri   = $price *100;
                                    //$tetri = 0.01 *100;

                                    $Payment = new tbcpay( 'https://securepay.ufc.ge:18443/ecomm2/MerchantHandler', __DIR__ . '/cert/cert/tbcpay.pem', 'Globalupper1133)*', $_SERVER['REMOTE_ADDR'],  $tetri, 981, 'Order Number: '. $club_pay_codea, 'GE' );

                                    $start = $Payment->sms_start_transaction();

                                    if ( isset($start['TRANSACTION_ID']) AND !isset($start['error']) ) {
                                        $trans_id = $start['TRANSACTION_ID'];
                                    }

                                    //get_transaction_result($trans_id);

                                    //print $trans_id;

                                ?>
                                <?php if ( isset($start['error']) ) { ?>
                                    <h2>Error:</h2>
                                    <h1><?php echo $start['error']; ?></h1>

                                <?php } elseif (isset($start['TRANSACTION_ID'])) { ?>

                                

                                <script type="text/javascript" language="javascript">
                                    function redirect() {
                                      document.returnform.submit();
                                    }
                                </script>  
                                <?php

                                    $trans_checker      = "SELECT * FROM transactions WHERE payment_code = '$club_pay_codea'";
                                    $runTransChecker    = mysqli_query($conn,$trans_checker);

                                    if(mysqli_num_rows($runTransChecker) >= 1){
                                        $queryUpdateTrans      = "UPDATE transactions SET transaction_id = '$trans_id' WHERE payment_code = '$club_pay_codea'";
                                        mysqli_query($conn,$queryUpdateTrans);
                                    }else{
                                        $queryInsertTrans      = "INSERT INTO transactions (transaction_id,payment_code,payment_status) 
                                        VALUES ('$trans_id','$club_pay_codea',0)";
                                        mysqli_query($conn,$queryInsertTrans);
                                    }

                                ?>
                                <form name="returnform" action="https://securepay.ufc.ge/ecomm2/ClientHandler" method="POST">
                                    <input type="hidden" name="trans_id" value="<?php echo $trans_id; ?>">
                                    <input type="submit" name="submit" class="btn btn-default" id="payment_button" id="form_sbmt" value="გადაიხადე ONLINE">
                                </form>  
                                 <?php } //print $trans_id;?>    
                            </div>
                            <div class="col-md-12 auth_title_wrp">
                                <h3>ან</h3>
                            </div>
                        </div>
                        <div class="col-md-12 edit_club_wrp">
                            <p>რეგისტრაციის დასრულებისთვის გთხოვთ გადმორიცხოთ გუნდის მონაწილეობის საფასური  <span class="unpaid" id="code"><?php echo $price;?> ლარი</span> (<i>თითო მონაწილე = 20 ლარი</i>) ჩვენს საბანკო ანგარიშზე.</p>
                        </div>
                        <div class="col-md-12 edit_club_wrp">
                            <p>დანიშნულებაში აუცილებლად მიუთითეთ კოდი : <span class="unpaid" id="code"><?php echo $club_pay_codea;?></span> . წინააღმდეგ შემთხვევაში ვერ მოვახდენთ თქვენი გადახდის იდენთიფიკაციას</p>
                        </div>
                        <div class="col-md-12 edit_club_wrp bank">
                            <div class="col-md-12 padd bank_title">
                                საბანკო რეკვიზიტები
                            </div>
                            <div class="col-md-12 padd">
                                მიმღები: <strong>შპს “ინგლისური წიგნი საქართველოში”</strong>
                            </div>
                            <div class="col-md-12 padd">
                                საიდენთიფიკაციო კოდი: 205216023
                            </div>
                            <div class="col-md-12 padd">
                                ბ/კ  TBCBGE22
                            </div>
                            <div class="col-md-12 padd">
                                ა/ნ GE90 TB07 6923 6080 1000 02 GEL
                            </div>
                            <dic class="col-md-12 edit_club_wrp bank">
                                <p>გადმორიცხვის შემდეგ გადახდის ქვითარი ან ინტერნეტ ბანკის ამონაწერი გადმოგვიგზავნეთ მითითებულ ელ-ფოსტაზე: <span class="unpaid" id="code">payment@quidditch.ge</span></p>
                            </dic>
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

