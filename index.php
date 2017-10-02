<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Meta Tags -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="წინასწარი რეგისტრაცია დაიწყო">
    <meta name="author" content="nedjai">
    <link rel="icon" href="favicon.ico">
    <!-- Tittle -->
    <title>Quidditch Competition 2018 </title>

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

    <!-- Global Site Tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-106893430-1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments)};
  gtag('js', new Date());

  gtag('config', 'UA-106893430-1');
</script>
</head>
<!-- BODY START -->
<body data-spy="scroll" data-offset="80">
  <div id="fb-root"></div>
  <script>(function(d, s, id) {
    var js, fjs = d.getElementsByTagName(s)[0];
    if (d.getElementById(id)) return;
    js = d.createElement(s); js.id = id;
    js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.6";
    fjs.parentNode.insertBefore(js, fjs);
  }(document, 'script', 'facebook-jssdk'));</script>

  <!-- Your embedded video player code -->

    <!-- PREELOADER START -->
<!--     <div class="se-pre-con">
        <div class="timer"><span>გთხოვთ დაელოდოთ...</span></div>
    </div> -->
	<!-- END PREELOADER -->

    <?php
        include 'db.php';
        include 'header.php';
        include 'main_buttons.php';
        include 'about_main.php';
        include 'facts_main.php'; 
        include 'media_main.php';
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

<script type="text/javascript">

  $(document).ready(function(){

    $("#domain-text").keyup(function(){
      if($('#domain-text').val() != ''){
        $.ajax({
          type: "POST",
          url: "ajaxMain.php",
          data:'key='+$(this).val(),
          beforeSend: function(){
            $("#search-box").css("background","#FFF url(LoaderIcon.gif) no-repeat 165px");
          },
          success: function(data){
            $('.suggestionsa').show();
            $(".suggestions_ula").html(data);
              $('.suggestions_ula li').click(function(){ 
                var id    = $(this).attr('id');
                var title = $(this).attr('title');
                $('#domain-text').val(title);
                $('#domain-text').val(id);
                $('.suggestionsa').hide();
              });
          }
          });
      }else{
        $('.suggestionsa').hide();
      }     

    });

  });
</script>  