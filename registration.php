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
  
  <link rel="stylesheet" type="text/css" href="src/jquery.geokbd.css">
  <script type="text/javascript" src="https://code.jquery.com/jquery-1.11.2.min.js"></script>
  <script type="text/javascript" src="src/jquery.geokbd.js"></script>
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
<body data-spy="scroll" data-offset="80">  <script type="text/javascript">
    $('.switch').geokbd();
  </script>
<input class="switch active-kbd" type="checkbox" checked="true" id="switchera1">
  <span class="switch switchButton" id="switchera2">some span</span>
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
                    <div class="col-md-12 auth_title_wrp">
                        <h3>რეგისტრაცია</h3>
                        <p>თუ ხართ რეგისტრირებული მომხმარებელი, გთხოვთ შეიყვანოთ თქვენი პირადი ნომერი და დააჭიროთ ღილაკს "ავტორიზაცია".</p>
                        <p>თუ არ ხართ რეგისტრირებული სისტემაში, გთხოვთ <a href="registration.php" id="edit">დარეგისტრირდეთ</a>.</p>
                    </div>
                    <div class="col-md-12 auth_content_wrp">
                      <form action="" method="POST" id="form1">
                        <div class="form-group">
                          <label>მიუთითეთ სკოლა</label>
                          <input type="text" name="schoola" class="form-control"  id="tag" autocomplete="off" autosave="off" placeholder="ფილტრაციისთვის ჩაწერეთ: ქალაქი, რეგიონი, ან სკოლის დასახელება">
                          <div class="suggestions">
                            <ul class="suggestions_ul">

                            </ul>
                          </div>
                        </div>
                        <div class="form-group">
                          <input type="text" name="school" class="form-control astami"  autocomplete="off" autosave="off" readonly id="schoola">
                        </div>
                        <div class="form-group">
                          <label>სახელი</label>
                          <input type="text" name="fname" class="form-control"  autocomplete="off" autosave="off" id="fname" placeholder="გთხოვთ მიუთითოთ თქვენი სახელი">
                          <div class="error_message_fname">
                            გთხოვთ შეიყვანოთ მინიმუმ 3 სიმბოლო
                          </div>
                        </div>
                        <div class="form-group">
                          <label>გვარი</label>
                          <input type="text" name="lname" class="form-control"  autocomplete="off" autosave="off" id="lname" placeholder="გთხოვთ მიუთითოთ თქვენი გვარი">
                          <div class="error_message_lname">
                            გთხოვთ შეიყვანოთ მინიმუმ 3 სიმბოლო
                          </div>
                        </div>
                        <div class="form-group">
                          <label>პირადი ნომერი</label>
                          <input type="number" name="p_id" class="form-control"  autocomplete="off" autosave="off" id="p_id" placeholder="გთხოვთ მიუთითოთ თქვენი პირადი ნომერი">
                          <div class="error_message_p_id">

                          </div>
                        </div>
                        <div class="form-group">
                          <label>მობილურის ნომერი</label>
                          <input type="number" name="phone" class="form-control"  autocomplete="off" autosave="off" id="phone" placeholder="გთხოვთ მიუთითოთ თქვენი მობილურის ნომერი">
                          <div class="error_message_phone">

                          </div>
                        </div>
                        <div class="form-group">
                          <label>ელ-ფოსტა</label>
                          <input type="email" name="email" class="form-control"  autocomplete="off" autosave="off" id="emaila" placeholder="გთხოვთ მიუთითოთ თქვენი ელ-ფოსტის მისამართი">
                          <div class="error_message_email">

                          </div>
                        </div>
                        <div class="form-group">
                            <input type="submit" name="submit" class="btn btn-primary but" value="რეგისტრაცია">
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

    $fname   = $_POST['fname'];
    $lname   = $_POST['lname'];
    $phone   = $_POST['phone'];
    $email   = $_POST['email'];
    $p_id    = $_POST['p_id'];
    $school2 = $_POST['school'];

    $query  = "INSERT INTO users 
              (fname,lname,p_id,phone,email,school) 
              VALUES 
              ('$fname','$lname','$p_id','$phone','$email','$school2')";
    $run    = mysqli_query($conn,$query);

    $name = "გილოცავთ ". $fname.", თქვენ წარმატებით დარეგისტრირდით Quidditch Intellectual Competition 2018-ის თამაშებზე.
                გუნდების დასამატებლად გთხოვთ გაიაროთ ".$autha." თქვენი პირადი ნომრით:".$p_id." გისურვებთ წარმატებას, Quidditch 2018 Team";
    $text = rawurlencode($name);
    
    $url  = 'http://smsco.ge/api/sendsms.php?username=995557514566&password=995557514566123&recipient=995'.$phone.'&message='.$text;


    $ch = curl_init();

    //set the url, number of POST vars, POST data
    curl_setopt($ch, CURLOPT_URL, $url);

    //execute post
    $result = curl_exec($ch);

    //close connection
    curl_close($ch);

    var_dump($result);

    $autha = "<a href='http://onlinebookshop.ge/qgaming/auth.php'>ავტორიზაცია</a>";
    $headers = "Content-Type: text/html; charset=utf-8";
    $message .= "<html><body>";
    $message .= "გილოცავთ ". $fname.", თქვენ წარმატებით დარეგისტრირდით Quidditch Intellectual Competition 2018-ის თამაშებზე.
                გუნდების დასამატებლად გთხოვთ გაიაროთ ".$autha." თქვენი პირადი ნომრით:".$p_id." გისურვებთ წარმატებას, Quidditch 2018 Team";
    $message .= "</body></html>";

    $message2 = "დარეგისტრიდა ახალი მომხმარებელი პირადი ნომრით:".$p_id . " სახელი და გვარი: ".$fname . " " . $lname ." ტელეფონის ნომერი: ". $phone. " სკოლის ID: ". $school;

    mail($email, 'Quidditch 2K18', $message, $headers);
    mail('t.tskhvediani@englishbook.co.uk', 'Quidditch 2K18', $message2, $headers);

    header('location: auth.php');

  }

?>
<script type="text/javascript">

  $(document).ready(function(){

    $("#tag").keyup(function(){
      if($('#tag').val() != ''){
        $.ajax({
          type: "POST",
          url: "ajax.php",
          data:'key='+$(this).val(),
          beforeSend: function(){
            $("#search-box").css("background","#FFF url(LoaderIcon.gif) no-repeat 165px");
          },
          success: function(data){
            $('.suggestions').show();
            $(".suggestions_ul").html(data);
              $('.suggestions_ul li').click(function(){ 
                var id    = $(this).attr('id');
                var title = $(this).attr('title');
                $('#tag').val(title);
                $('#schoola').val(id);
                $('.suggestions').hide();
              });
          }
          });
      }else{
        $('.suggestions').hide();
      }     

    });
//validation
/*    $("#form1 input").on("keyup change", function(){
        var inputValidate = true;
        $("#form1 input").each(function(index, element){      
            if ($(element).val() == "")
               inputValidate = false;
        });
        if (inputValidate)
            $(".but").show();
        else
            $(".but").hide();
    });*/

    $('#fname').keyup(function(){
      if($('#fname').val().length <=2){
        $('.error_message_fname').show();
      }else{
        $('.error_message_fname').hide();
      }
    });
    $('#lname').keyup(function(){
      if($('#lname').val().length <=2){
        $('.error_message_lname').show();
      }else{
        $('.error_message_lname').hide();
      }
    });
    $("#p_id").keyup(function(){
      if($('#p_id').val().length == 11){
        $.ajax({
          type: "POST",
          url: "ajax2.php",
          data:'key='+$(this).val(),
          beforeSend: function(){
            $("#search-box").css("background","#FFF url(LoaderIcon.gif) no-repeat 165px");
          },
          success: function(data){
            $('.error_message_p_id').show();
            $(".error_message_p_id").html(data);
            }
          });
      }else{
        $('.error_message_p_id').hide();
      }
    });
    
    $("#phone").keyup(function(){
      if($('#phone').val().length == 9){
        $.ajax({
          type: "POST",
          url: "ajax3.php",
          data:'key='+$(this).val(),
          beforeSend: function(){
            $("#search-box").css("background","#FFF url(LoaderIcon.gif) no-repeat 165px");
          },
          success: function(data){
            $('.error_message_phone').show();
            $(".error_message_phone").html(data);
            }
          });
      }else{
        $('.error_message_phone').hide();
      }
    }); 

    $("#emaila").keyup(function(){
      if($('#emaila').val().length >= 3){
        $.ajax({
          type: "POST",
          url: "ajax4.php",
          data:'key='+$(this).val(),
          beforeSend: function(){
            $("#search-box").css("background","#FFF url(LoaderIcon.gif) no-repeat 165px");
          },
          success: function(data){
            $('.error_message_email').show();
            $(".error_message_email").html(data);
            }
          });
      }else{
        $('.error_message_email').hide();
      }
    }); 


  });
</script>


