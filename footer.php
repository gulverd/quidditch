<?php

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
   <footer id="footer-area"> <!-- START FOOTER -->
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="row">
					<div class="cntct-footer">
                        <div class="col-md-5">
                            <div class="phone-support">
                                <h6>დაგვირეკეთ: </h6>
                                <b><?php echo $c_phone1;?></b>
                            </div>

                            <ul class="social-links"> <!-- SOCIAL ICONS -->
                           
                              <a href=""><i class="fa fa-facebook-square" aria-hidden="true"></i></a>
                           
                            
                              <a href=""><i class="fa fa-youtube-play" aria-hidden="true" style="color: red"></i></a>
                           
                            </ul>

                        </div>

                             <div class="phone-support">
                                <h6>მოგვწერეთ: </h6>
                                <b style="text-transform: lowercase;"><?php echo $c_email;?></b>
                            </div>
                        </div>
                    </div>
					</div>

                    <span class="spacing"></span>

                    <div class="row footer-links"><!-- FOOTER LINK -->
                        <div class="hosing-pakages col-md-3 wow fadeIn" data-wow-delay="0.1s">
                            <h4>მასწავლებლებისთვის</h4>
                            <ul>
                                <li><a href="registration.php">რეგისტრაცია</a></li>
                                <li><a href="about.php">თამაშის შესახებ</a></li>
                            </ul>
                        </div>

                        <div class="services-pakages col-md-3 wow fadeIn" data-wow-delay="0.3s">
                            <h4>მოსწავლე</h4>
                            <ul>
                                <li><a href="teams.php">გუნდები</a></li>
                                <li><a href="auth.php">ავტორიზაცია</a></li>
                                <li><a href="faq.php">კითხვა/პასუხი</a></li>
                              
                            </ul>
                        </div>

                        <div class="company-pakages col-md-3 wow fadeIn" data-wow-delay="0.5s">
                            <h4>სხვა</h4>
                            <ul>
                               <span style="color:white">შემოთავაზებების ან შენიშვნების შემთხვევაში დაგვირეკეთ <br> <?php echo $c_phone1;?> </span>	
                            </ul>
                        </div>

                        <div class="col-md-3 footer-cntct-info wow fadeIn" data-wow-delay="0.7s">
                            <a class="footer-logo" href="#">English Book in Georgia</a>

                            <div class="mobandmail">
                                <span><b>ტელეფონი:<br></b> <?php echo $c_phone1;?></span>
                                <span><b>ელ-ფოსტა:</b> <?php echo $c_email;?></span>
                                <span><b>მისამართი:<br></b> <?php echo $c_address1;?></span>
                            </div>
                            

                        </div>

                    </div><!-- END FOOTER LINK -->
                </div>
            </div>
        </div>
    </footer><!-- END FOOTER -->