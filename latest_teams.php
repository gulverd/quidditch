            <div class="row">
                <div class="col-md-12">
                    <div class="head-tittle">
                        <h5>ბოლოს დამატებული გუნდები</h5>
                        <span>ვერიფიცირებული გუნდები ყვითელი რიბონით</span>
                    </div>
                    <div class="col-md-10 col-md-push-1">
                        <div class="pricing-container">

                            <?php
                                $queryLastTeams = "SELECT a.id,a.club_name,a.pay_status,a.club_school_id,b.school_name 
                                FROM clubs a 
                                JOIN schools b on a.club_school_id = b.id
                                ORDER BY a.id DESC LIMIT 3";
                                
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
                                                        <div class="plans-body">
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
                                                            <a href="#">ვრცლად</a>
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
                                            
                                                       <div class="plans-body">
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
                                                            <a href="#">ვრცლად</a>
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



                </div>
            </div>
        