<?php
  ob_start();
  include 'db.php';


    $query2  = "SELECT * FROM contact";
    $run2    = mysqli_query($conn,$query2);

    if(mysqli_num_rows($run2) >= 1){
        while($row2 = mysqli_fetch_array($run2)){
            $c_phone1      = $row2['phone'];
            $c_address1    = $row2['address'];
            $c_email       = $row2['email'];
        }
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
                    <div class="col-md-12">

                        <div class="col-md-12 about_title_wrp">
                            „Quidditch Intellectual Competition for Schools 2018“
                        </div>
                        <div class="col-md-12 about_picture_and_text_wrp">
                            <div class="col-md-12 about_picure_wrp">
                                <img src="img/moswavleebi.jpg" id="about_picture">
                            </div>
                            <div class="col-md-12 about_picture_text_wrp">
                                ქვიდიჩის წამყვანები და მონაწილეები დიდი ბრიტანეთში
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="col-md-12 about_title_wrp">                            
                                “Quidditch Competition 2018”-ის რეგისტრაცია იწყება 2 ოქტომბერს. იჩქარეთ, ადგილები შეზღუდულია. 
                            </div>
                            <div class="col-md-12">
                                <div class="col-md-12 about_text_wrp">
                                    <p>
                                        კომპანიები „ინგლისური წიგნი საქართველოში“ და “Macmillan Education” წარმოგიდგენთ ინტელექტუალური შეჯიბრის “Quidditch Competition” მეორე სეზონს.
                                    </p>
                                    <p>
                                        შეჯიბრი ჩატარდება ინგლისურ ენაზე და შედგება სამი დამოუკიდებელი და მეოთხე - ფინალური სერიისაგან. პირველი სამი სერია ჩატარდება რეგიონების მიხედვით - თბილისში, ქუთაისსა და ბათუმში.  თითოეული სერიის გამარჯვებული მონაწილეობას მიიღებს სუპერ-ფინალში, სადაც გამოვლინდება საბოლოო გამარჯვებული.
                                        თითოეული სკოლა წარმოდგენილი იქნება მაქსიმუმ სამი გუნდით, რომელიც შედგება IX-XII კლასის ხუთი მოსწავლისგან (მათ შორის ერთი კაპიტანი).
                                    </p>
                                    <p>
                                        თითოეულ სერიიდან ნახევარფინალში გადასული თითქმის ყველა გუნდი დასაჩუქრდება სხვადასხვა კომპანიისგან. 
                                        სერიების და სუპერ-ფინალის გამარჯვებული გუნდები დასაჩუქრდებიან ელექტრონული მკითხველებით, iPad-ებით, პორტატული კომპიუტერებით.
                                    </p> 
                                    <p>
                                        სიახლეები:
                                    </p>
                                </div>
                                <div class="col-md-12">
                                    <ul>
                                        <li>5 შეკითხვის ტიპი</li>
                                        <li>120 სათამაშო წუთი</li>
                                        <li>10 ძირითადი შეკითხვა</li>
                                        <li>თამაშის შედეგები “Live” რეჟიმში</li>
                                        <li>მოსამზადებელი შეკითხვების პაკეტი (რეგისტრაციის შემდეგ)</li>
                                        <li>300-ზე მეტი სკოლა მთელი საქართველოდან</li>
                                    </ul>
                                </div>
                        </div>

                    </div>
                    <section id="hositng-plans"><!-- HOSTING PLANS START -->
                        <div class="container">
    

                    <div class="col-md-10 col-md-push-1">
                        <div class="plans-fut">
                            <div class="row phone-no-last">
                                <div class="col-md-4"> <!-- WHY US -->
                                    <div class="ftr-host wow fadeIn" data-wow-delay="0.1s">
                                        <i class="fa fa-question" aria-hidden="true" id="fa-icona"></i>
                                        <h5>შეკითხვის ტიპები</h5>
                                        <p>თანამედროვე შეკითხვის ტიპები.</p>
                                    </div>
                                </div> <!-- END WHY US -->

                                <div class="col-md-4"> <!-- WHY US -->
                                    <div class="ftr-host wow fadeIn" data-wow-delay="0.3s">
                                        <i class="fa fa-users" aria-hidden="true" id="fa-icona"></i>
                                        <h5>გუნდური მუშაობა</h5>
                                        <p>პრობლემების გადაჭრა, თანაგუნდელებთან ერთად.</p>
                                    </div>
                                </div> <!-- END WHY US -->

                                <div class="col-md-4"> <!-- WHY US -->
                                    <div class="ftr-host no-right wow fadeIn" data-wow-delay="0.5s">
                                        <i class="fa fa-clock-o" aria-hidden="true" id="fa-icona"></i>
                                        <h5>+ სათამაშო დრო</h5>
                                        <p>შესარჩევი თამაშები გაორმაგდა.</p>
                                    </div>
                                </div>
                            </div> <!-- END WHY US -->

                            <div class="row phone-no-last">
                                <div class="col-md-4"> <!-- WHY US -->
                                    <div class="ftr-host no-bottm wow fadeIn" data-wow-delay="0.7s">
                                        <i class="fa fa-graduation-cap" aria-hidden="true" id="fa-icona"></i>
                                        <h5>სასწავლო დაწესებულებები</h5>
                                        <p>გუნდები მთელი საქართველოდან</p>
                                    </div>
                                </div> <!-- END WHY US -->

                                <div class="col-md-4"> <!-- WHY US -->
                                    <div class="ftr-host no-bottm wow fadeIn" data-wow-delay="0.9s">
                                        <i class="fa fa-gift" aria-hidden="true" id="fa-icona"></i>
                                        <h5>გაზრდილი საპრიზო ფონდი</h5>
                                        <p>უამრავი პრიზი, სხვადასხვა ეტაპისთვის</p>
                                    </div>
                                </div> <!-- END WHY US -->

                                <div class="col-md-4"> <!-- WHY US -->
                                    <div class="ftr-host no-bottm no-right wow fadeIn" data-wow-delay="1.1s">
                                        <i class="fa fa-registered" aria-hidden="true" id="fa-icona"></i>
                                        <h5>ყველა უფლება დაცულია</h5>
                                        <p>იჩქარეთ<br>
                                        ადგილები შეზღუდულია</p>
                                    </div>
                                </div> <!-- END WHY US -->
                            </div>
                        </div>
                    </div>

                </div>
            </div> <!-- END WHY US -->

            <div class="row techologhie-on-host"> 


               
            </div> <!-- TEC ON SERVER END -->
        </div>
    </section><!-- END HOST SERCTION -->
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
