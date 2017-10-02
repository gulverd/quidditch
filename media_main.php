



    <section id="blog"> <!-- START BLOG SECTION -->
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="blog-titte"> <!-- THE TITTLE -->
                        <h5>სიახლეები</h5>
                    </div>

                    <?php

                        $queryBlog = "SELECT * FROM blog ORDER BY id DESC LIMIT 3";
                        $runBlog   = mysqli_query($conn,$queryBlog);

                        if(mysqli_num_rows($runBlog) >= 1){
                            
                            while($rowBlog = mysqli_fetch_array($runBlog)){
                                $blog_id        = $rowBlog['id'];
                                $blog_title     = $rowBlog['blog_title'];
                                $blog_date      = $rowBlog['blog_date'];
                                $blog_picture   = $rowBlog['blog_picture'];



                                echo 
                                '
                                    <div class="col-md-4">
                                        <article class="post-show wow fadeInLeft" data-wow-delay="0.1s"> <!-- BLOG -->
                                            <span class="cmsmasters-post-date">
                                                <span class="cmsmasters-day"><i class="fa fa-calendar-check-o" aria-hidden="true"></i></span>
                                                <span class="cmsmasters-mon">'.$blog_date.'</span>
                                            </span>
                                            <figure class="cmsmasters_img_rollover_wrap preloader">
                                                <div class="info-post">
                                                    <a href="blog-post.php?blog_id='.$blog_id.'"><img src="imgs/blog/'.$blog_picture.'" class="post-image" alt="blog image"></a>
                                                    <span></span>
                                                </div>
                                                <div class="post-sub">
                                                    <h2>
                                                        <a href="blog-post.php?blog_id='.$blog_id.'" title="" class="post-link">'.$blog_title.'</a>
                                                    </h2>
                                                </div>
                                            </figure>
                                        </article>
                                    </div>
                                ';
                            }

                        }else{
                            echo 'ამ ეტაპზე სიახლეები არ არის!';
                        }

                    ?>



                    
                </div>
            </div>
        </div>
    </section> <!-- END BLOG SERCTION -->