    <header>
        <div class="animation-header"><!-- HEADRR ANIMATION -->
            <span class='stars'></span>
            <span class="starsbg"></span>
            <span class="white-background-header"></span>
            <span class="space-ship"></span>
        </div><!-- END HEADER ANIMATION -->
		
        <?php include 'nav_bar.php';?>

        <div class="domain-section"><!-- DOMAIN SERCTION START -->

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

		<div class="sliderheader owl-carousel owl-theme owl-or-theme-build">
            <div class="item">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="big-title">
                                <span class="wow fadeIn" data-wow-delay="0.2s">იპოვე ან დაამატე შენი გუნდი</span>
                            </div>
                            <div class="head-light-title">
                                <span class="text-change"></span>
                            </div>
                            <div class="domain-search-holder">
                                <form id="domain-search">
                                    <input id="domain-text" type="text" name="domain" placeholder="ჩაწერეთ სკოლის დასახელება..." />
                                </form>
                                <div class="suggestionsa">
                                    <ul class="suggestions_ula">

                                    </ul>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <button class="btn btn-danger" type="button" data-toggle="modal" data-target="#myModal">
                                    ვერ პოულობ შენ სკოლას? </br>
                                    დაგვიკავშირდით
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
			</div>
			
			
			<div class="item">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                       
					    <div class="col-md-6">
                    <div class="plans-no-index-info">
                        <h4>Competition 2018 </h4><!-- TITTLE -->
                        <p>თამაშში მონაწილეობის მისაღებად აუცილებელია რომ მონაწილეები იყვნენ საქართველოს საჯარო/კერძო სკოლის მოსწავლეები 9 დან 12 კლასის ჩათვლით.

</p>
                        <p>მოსწავლეებისგან უნდა დაკომპლექტდეს 5 კაციანი გუნდები, სადაც 1 კაპიტანია.</p>
                     
                    </div>
                </div>

				
					    <div class="col-md-6 tablet-padding-plans">
                    <div class="plans-non"><!-- FIRST PLAN -->
                        <h5>გუნდის სახელი</h5>
                        <div class="info-palns">
                            <span>ადმინისტრაციის წარმომადგენელი</span>
                            <span>5 გუნდის წევრი</span>
                        </div>
                        <div>
                            <a class="btn-ordr-plan" href="registration.php">დარეგისტრირდი</a>
                        </div>
                    </div>

                    <div class="plans-non spsclone-non-plans"><!-- SECOND PLAN -->
                        <h5>როგორ?</h5>
                        <div class="info-palns">
                            <p><i class="fa fa-check-circle" aria-hidden="true"></i>დარეგისტრირდი</p>
                            <p><i class="fa fa-check-circle" aria-hidden="true"></i>გაიარე ვერიფიკაცია</p>
                        </div>
                        <div>
                            <a class="btn-ordr-plan" href="registration.php">ვრცლად</a>
                        </div>
                    </div>

					
					
                    </div>
                </div>
            </div>
			</div>
			
			
			</div>
			

        </div><!-- DOMAIN SECTION END -->
    </header>



