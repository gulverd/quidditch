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

  $query   = "SELECT * FROM users WHERE id = '$user_id'";
  $run     = mysqli_query($conn,$query);

  while($row = mysqli_fetch_array($run)){
    $fname   = $row['fname'];
    $lname   = $row['lname'];
    $p_id    = $row['p_id'];
    $phone   = $row['phone'];
    $email   = $row['email'];
    $school  = $row['school'];
  }

  $query2  = "SELECT * FROM schools WHERE id = '$school'";
  $run2    = mysqli_query($conn,$query2);

  while($row2 = mysqli_fetch_array($run2)){
    $school_name = $row2['school_name'];
    $region      = $row2['region'];
    $city        = $row2['city'];
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
                    <div class="col-md-12 auth_title_wrp">
                        <h3>მომხმარებლის გვერდი</h3>
                        <p>მოგესალმებით, <?php echo $fname;?>!</p>
                        <p>გთხოვთ დაამატოთ გუნდები და დააკომპლექტოთ წევრებისაგან.</p>
                    </div>
                    <div class="col-md-12 auth_content_wrp">
                      <div class="col-md-12">
                    <h4>ჩემი გუნდები</h4>
                </div>
                <div class="col-md-12">
                  <table class="table table-bordered">
                    <tr id="table_head">
                      <td id="td_cent">დათვალიერება / დამატება</td>
                      <td>გუნდის დასახელება</td>
                      <td>გუნდის წევრები</td>
                      <td id="td_cent">გადახდა</td>
                      <td id="td_cent">რედაქტირება</td>
                      <td id="td_cent">წაშლა</td>
                    </tr>
                    <?php 
                      $query4 = "SELECT * FROM clubs WHERE mentor_id = '$user_id'";
                      $run4   = mysqli_query($conn,$query4);

                      if(mysqli_num_rows($run4)>=1){
                        while($row4 = mysqli_fetch_array($run4)){
                            $club_name1 = $row4['club_name'];
                            $club_id1   = $row4['id'];
                            $pay_status = $row4['pay_status'];
                            
                            $query5     = "SELECT * FROM club_member WHERE club_id = '$club_id1'";
                            $run5       = mysqli_query($conn,$query5);

                            $count_member = mysqli_num_rows($run5);

                            if($pay_status == 1){
                              $del_button  = '<button type="button" class="btn btn-default buts disabled">
                                                <span class="glyphicon glyphicon-trash" id="dl"></span>
                                              </button>';
                            }else{
                              $del_button  = '<button type="button" class="btn btn-danger">
                                              <a href="del_club.php?club_id='.$club_id1.'&user_id='.$user_id.'" class="dell">
                                                <span class="glyphicon glyphicon-trash"></span> წაშლა
                                              </a>
                                            </button>';
                            }

                            if($count_member >= 4){
                              if($pay_status == 1){

                                $credit_card = '<button type="button" class="btn btn-default buts disabled">
                                                <i class="fa fa-credit-card-alt" aria-hidden="true" ></i>
                                              </button>';
                                
                              }else{
                                $credit_card = '<button type="button" class="btn btn-default buts">
                                                <a href="payment.php?club_id='.$club_id1.'&user_id='.$user_id.'"<i class="fa fa-credit-card-alt" aria-hidden="true"></i></a>
                                              </button>';
                              }
                              
                            }else{
                              $credit_card = '';
                            }

                            echo ' 
                                <tr>
                                  <td id="td_cent">
                                    <button type="button" class="btn btn-default buts">
                                      <a href="view_club.php?club_id='.$club_id1.'&user_id='.$user_id.'" id="view">
                                        <i class="fa fa-eye" aria-hidden="true"></i>
                                      </a>
                                    </button>
                                  </td>
                                  <td class="padd_top">'.$club_name1.'</td>
                                  <td id="td_cent" class="padd_top">წევრების რაოდენობა ('.$count_member.' / 5)</td>
                                  <td id="td_cent">
                                    '.$credit_card.'
                                  </td>
                                  <td id="td_cent">
                                     <button type="button" class="btn btn-default buts">
                                      <a href="edit_club.php?club_id='.$club_id1.'&user_id='.$user_id.'" id="edit"><i class="fa fa-pencil-square-o" aria-hidden="true"></i>
                                      </a>
                                    </button>
                                  </td>
                                  <td id="td_cent">
                                    '.$del_button.'
                                    </div>
                                  </td>
                                </tr>
                            ';
                        }
                      }else{
                        echo '<tr class="max_clubs"><td colspan="6" id="del">ამ დროისათვის არ გაქვთ გუნდები დამატებული. გთხოვთ დაამატოთ.</td></tr>';
                      }

                    ?>  



                  </table>
                </div>
                <div class="col-md-12">
                  <h4>გუნდების დამატება</h4>
                </div>
                <?php
                  if(mysqli_num_rows($run4) < 3){
                
                   echo ' <div class="col-md-12">
                      <form action="" method="POST">
                        <div class="form-group">
                          <label>გუნდის დასახელება</label>
                          <input type="text" name="club_name" class="form-control" id="phone" autocomplete="OFF">
                          <div class="error_message_phone">

                          </div>
                        </div>
                        <div class="form-group">
                          
                        </div>
                      </form>
                    </div>';
                  
                    }else{
                    echo '<div class="col-md-12 max_clubs">თქვენ უკვე დამატებული გაქვთ მაქსიმალური რაოდენობის გუნდი</div>';
                  }
                ?>


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
  


  if(isset($_POST['regist_club'])){
    $club_name = $_POST['club_name'];

    $query3    = "INSERT INTO clubs(club_name,club_school_id,mentor_id) VALUES ('$club_name','$school','$user_id')";
    $run3      = mysqli_query($conn,$query3);

    $name = "გილოცავთ ". $fname.", თქვენ წარმატებით დაამატეთ გუნდი ". $club_name." გაცნობებთ რომ თანხის გადახდის შემდეგ თქვენი გუნდი გახდება ვერიფიცირებული და მიიღებს სავარჯიშო შეკითხვების პაკეტს.";
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

    header('location: profile.php?user_id='.$user_id);
  }

?>


<script type="text/javascript">
  $(document).ready(function(){
    
    $("#phone").keyup(function(){
      if($('#phone').val().length <= 1){

      }else{ 
          
          $.ajax({
            type: "POST",
            url: "ajax5.php",
            data:'key='+$(this).val(),
            beforeSend: function(){
              //$("#id_submit").prop('disabled', false); // disable button
            },
            success: function(data){ 
              $('.error_message_phone').show(); 
              $(".error_message_phone").html(data);
            },
          });
        }
    }); 
  }); 
</script>

<!--       }else{
        
      } -->