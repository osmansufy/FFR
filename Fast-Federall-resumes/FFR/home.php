<?php 
/**
 * Template Name:HOME
 */
?>

<?php get_header();?>

<body <?php body_class();?>>
    <?php get_template_part("hero"); ?>
    <!--       Banner area-->
    <section class="banner bg banner-bg overlay">
        <div class="banner-inner">
            <div class="container">
                <div class="row">
                    <div class="banner-content">
                        <div class="banner-text">
                            <h1>
                                <?php the_field('banner_title'); ?>
                            </h1>
                            <p>
                                <?php the_field('banner_info'); ?>
                            </p>
                            <div class="button-div flexify">
                                <?php 
                            $sign_up=get_field('banner_signup_button_links');
                            if ($sign_up) {?>

                                <a href="<?php echo $sign_up['sign_up_button_url']; ?>" class="btn">
                                    <?php echo $sign_up['sign_up_button_text']; ?></a>

                                <?php };
                            ?>


                                <?php
                         $learn_more=get_field('learn_more');
                                if ($learn_more) { ?>
                                <a href="<?php echo $learn_more['learn_more_url'];?>" data-rel="lightcase" class="btn btn-new">
                                    <img src="<?php echo get_template_directory_uri().'/assets/images/play-btn.svg'; ?>" width="50">
                                    <?php echo $learn_more['learn_more_text']; ?>
                                </a>

                                <?php  }; ?>




                            </div>
                            <p class="banner-satisfiction">
                                <?php the_field('button_label'); ?>
                            </p>
                        </div>
                        <div class="banner-feature">
                            <div class="feature-box flexify">
                                <?php
                            if( have_rows('features-item') ):
                                

                                                // loop through the rows of data
                                                while ( have_rows('features-item') ) : the_row();
                                                $image=get_sub_field('image');
                                                ?>


                                <div class="feature-single-box flexify">
                                    <div class="icon feature-icon"> <img src="<?php echo $image['url']; ?>" width="90" alt=""> </div>
                                    <div class="feature-text">
                                        <p>
                                            <?php echo the_sub_field('description');?>
                                        </p>
                                    </div>
                                </div>
                                <?php 
                                        endwhile;
                                               endif;

                                                ?>




                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--       Banner area ends-->
    <!--    Promise area-->
    <section class="promise section-padding">
        <div class="promise-inner">
            <?php 
            $promise_h=get_field('promise_h');
            if ($promise_h) { ?>
            <div class="section-heading text-center">
                <h2>
                    <?php echo $promise_h;?>
                </h2>
            </div>
            <?php   }
           
            ?>

            <div class="section-content">
                <div class="container">
                    <div class="row">
                        <?php 
                            if (have_rows('promise_item')) {
                                while(have_rows('promise_item')):the_row();
                                $p_image=get_sub_field('promise-image')
                                ?>
                        <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                            <div class="promise-box blue-rect">
                                <img src="<?php echo $p_image['url'];?>" alt="Connect">
                                <div class="promise-desc">

                                    <h4>
                                        <?php echo the_sub_field('promise_title');?>

                                    </h4>
                                    <p>
                                        <?php echo the_sub_field('promise_info');?>
                                    </p>

                                </div>
                            </div>
                        </div>
                        <?php endwhile; };
                            ?>



                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--    Promise area ends-->
    <!--    Service area-->
    <section class="services section-padding">
        <div class="service-inner"> <img src="<?php echo get_theme_file_uri(); ?>/assets/images/shape_blue.png" class="shape-img shape-blue" alt=""> <img src="<?php echo get_template_directory_uri().'/assets/images/shape_green.png';?>" class="shape-img shape-green" alt=""> <img src="assets/images/shape_pink.png" class="shape-img shape-pink" alt=""> <img src="assets/images/shape_yellow.png" class="shape-img shape-yellow" alt="">
            <div class="section-heading text-center">
                <h2>We’ll do the writing</h2>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                        <div class="inner-wrapper">
                            <div class="services-box">
                                <div class="icon services-icon flexify"> <img src="<?php echo get_template_directory_uri().'/assets/images/services_copywritting.svg';?>" width="150" alt="Copywriting"> </div>
                                <?php $service=get_field('service1');
                                if ($service) {?>
                                <h3>
                                    <?php echo $service['section-title'];?>

                                </h3>
                                <p>
                                    <?php echo $service['section-description']?>
                                </p>
                                <?php  }
                                ?>
                            </div>
                            <div class="services-box">
                                <div class="icon services-icon flexify"> <img src="<?php echo get_template_directory_uri().'/assets/images/services_resume.svg';?>" width="200" alt="Copywriting"> </div>
                                <?php $service=get_field('service2');
                                if ($service) {?>
                                <h3>
                                    <?php echo $service['section-title'];?>

                                </h3>
                                <p>
                                    <?php echo $service['section-description']?>
                                </p>
                                <?php  }
                                ?>
                            </div>
                            <div class="services-box">
                                <div class="icon services-icon flexify"> <img src="<?php echo get_template_directory_uri().'/assets/images/services_resume.svg';?>" width="200" alt="Copywriting"> </div>
                                <?php $service=get_field('service3');
                                if ($service) {?>
                                <h3>
                                    <?php echo $service['section-title'];?>

                                </h3>
                                <p>
                                    <?php echo $service['section-description']?>
                                </p>
                                <?php  }
                                ?>
                            </div>
                            <div class="services-box">
                                <div class="icon services-icon flexify"> <img src="<?php echo get_template_directory_uri().'/assets/images/services_resume.svg';?>" width="200" alt="Copywriting"> </div>
                                <?php $service=get_field('service4');
                                if ($service) {?>
                                <h3>
                                    <?php echo $service['section-title'];?>

                                </h3>
                                <p>
                                    <?php echo $service['section-description']?>
                                </p>
                                <?php  }
                                ?>
                            </div>

                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                        <div class="inner-wrapper">
                            <div class="services-box mt150">
                                <div class="icon services-icon flexify"> <img src="<?php echo get_template_directory_uri().'/assets/images/services_blog.svg';?>" width="130" alt="Copywriting"> </div>
                                <?php $service=get_field('service5');
                                if ($service) {?>
                                <h3>
                                    <?php echo $service['section-title'];?>

                                </h3>
                                <p>
                                    <?php echo $service['section-description']?>
                                </p>
                                <?php  }
                                ?>
                            </div>
                            <div class="services-box mt150">
                                <div class="icon services-icon flexify"> <img src="<?php echo get_template_directory_uri().'/assets/images/services_blog.svg';?>" width="130" alt="Copywriting"> </div>
                                <?php $service=get_field('service6');
                                if ($service) {?>
                                <h3>
                                    <?php echo $service['section-title'];?>

                                </h3>
                                <p>
                                    <?php echo $service['section-description']?>
                                </p>
                                <?php  }
                                ?>
                            </div>
                            <div class="services-box mt150">
                                <div class="icon services-icon flexify"> <img src="<?php echo get_template_directory_uri().'/assets/images/services_blog.svg';?>" width="130" alt="Copywriting"> </div>
                                <?php $service=get_field('service7');
                                if ($service) {?>
                                <h3>
                                    <?php echo $service['section-title'];?>

                                </h3>
                                <p>
                                    <?php echo $service['section-description']?>
                                </p>
                                <?php  }
                                ?>
                            </div>
                            <div class="button-wrapper text-center"> <a href="checkout.php" class="btn">Sign Up Starting at $197</a> </div>
                            <!--
                            <div class="services-box mt250">
                                <div class="icon services-icon flexify"> <img src="<?php echo get_template_directory_uri().'/assets/images/services_creative-writting.svg';?>" width="130" alt="Copywriting"> </div>
                                <h3>Creative Writing</h3>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore. </p>
                            </div>
-->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--    Service area ends-->
    <!-- start who we are area -->
    <div class="section-wrapper">
        <section class="we-are-area we-are-shape">
            <div class="container">
                <div class="row">
                    <div class="we-are">
                        <?php $we=get_field('we_are'); 
                    if ($we) {
                        ?>
                        <div class="we-are-title">
                            <h2>
                                <?php echo $we['title'];?>
                            </h2>
                        </div>
                        <div class="we-are-content">
                            <p>
                                <?php echo $we['text1']; ?>
                            </p>
                            <p>
                                <?php echo $we['text2']; ?>
                            </p>
                        </div>

                        <?php  };
                    ?>

                    </div>
                </div>
            </div>
        </section>
    </div>
    <!-- end who we are area -->
    <!-- start meet our team area -->
    <section class="meet-team-area team-bg bg">
        <div class="container">
            <?php
        $team_h=get_field('team_heading');
        if ($team_h) {
            ?>
            <div class="row">
                <div class="section-heading">
                    <h3>
                        <?php echo $team_h; ?>
                    </h3>
                </div>
            </div>
            <div class="row">
                <div class="meet-team">
                    <?php 
                    if (have_rows('team_member')) {
                        while (have_rows('team_member'))  {the_row();
                            $team_image=get_sub_field('member_image');
                            ?>
                    <div class="single-team">
                        <div class="single-team-img">
                            <div class="single-team-img-box"> <img src="<?php echo $team_image['url']; ?>" alt="Team Member"> </div>
                        </div>
                        <div class="single-team-content">
                            <h3>
                                <?php echo get_sub_field('member_name'); ?>
                            </h3>
                            <p>
                                <?php echo get_sub_field('member_info'); ?>
                            </p>
                        </div>

                    </div>
                    <?php  }
                      
                    }
                    ?>



                </div>
            </div>
            <?php 
             }
            ?>
        </div>
    </section>
    <!-- end meet our team area -->
    <!-- start testimonial area -->
    <section class="testimonial-area">
        <div class="container">
            <div class="row">
                <?php 
                    $t_heading=get_field('testimonials_heading');
                    if ($t_heading) {?>
                <div class="section-heading">
                    <h3>
                      <?php echo $t_heading; ?> </h3>
                </div>
                <?php }
                    ?>

            </div>
        </div>
        <div class="testimonial-inner">
            <div class="testimonial-shape"></div>
            <div class="container">
                <div class="row">


                    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                        <ol class="carousel-indicators">
                            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                            <li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
                            <li data-target="#carouselExampleIndicators" data-slide-to="4"></li>
                            <li data-target="#carouselExampleIndicators" data-slide-to="5"></li>
                            <li data-target="#carouselExampleIndicators" data-slide-to="6"></li>
                        </ol>
                        <div class="carousel-inner">
                            <?php 
                                        if (have_rows('clients_testimonial')) {
                                            $count=0;
                                            while (have_rows('clients_testimonial'))  {
                                                the_row();
                                            $team_image=get_sub_field('clients_image');
                                            if ($count==0) {
                                                $cl='active';
                                                }else{
                                                $cl='';
                                            }

                                            
                                           
                                            
                                    ?>

                            <div class="carousel-item <?php echo $cl; ?>">


                                <div class="clients-testimonial">
                                    <div class="carousel-video"> <img src="<?php echo $team_image['url']; ?>" alt="">

                                    </div>
                                    <div class="carousel-text">
                                    <p class="clients-name">
                                            <?php echo get_sub_field('clients_text'); ?>

                                        </p>
                                        <p class="clients-text">
                                            <?php echo get_sub_field('clients_name'); ?>
                                        </p>
                                        
                                    </div>

                                </div>



                            </div>
                            <?php 
                                            $count++;}
                                        }

                                            ?>

                            <!--                             Left and right controls -->
                            
                        </div>
                        <a class="carousel-control-prev" href="#carouselExampleIndicators" data-slide="prev">
                                <img src="<?php echo get_theme_file_uri(); ?>/assets/images/ct-right.svg';?>" width="30" class="carousel-control-prev-icon"></a>
                            <a class="carousel-control-next" href="#carouselExampleIndicators" data-slide="next">
                                <img src="<?php echo get_theme_file_uri(); ?>/assets/images/ct-right.svg';?>" width="30" class="carousel-control-next-icon"></a>

                    </div>

                    
                </div>
            </div>
        </div>
    </section>
    <!-- end testimonial area -->
    <!-- start patrons area -->
    <section class="patrons-area">
        <div class="container">
            <?php
                $patrons=get_field('patrons_heading');
                if ($patrons) {
                ?>
            <div class="section-heading">
                <h3>
                    <?php echo $patrons; ?>
                </h3>
            </div>

            <div class="row">
            <?php if( have_rows('patrons_list') ): ?>
            
                <ul>
                <?php while( have_rows('patrons_list') ): the_row();

                ?>
                    <li>
                        <?php echo get_sub_field('patrons_li'); ?>
                    </li>
                    <?php endwhile ;?>
                </ul>
                <?php endif; ?>
            </div>
            <?php  };
                ?>
        </div>
        </div>
    </section>
    <!-- end patrons area -->
    <!-- start money back area -->
    <section class="mone-back-area money-back-shape">
        <div class="container">
            <?php 
            $money_back=get_field('money_back_area');
        
        
                    if ($money_back) {
                        ?>
                    <div class="row">
                   
                        <div class="money-back-title">
                        <h2><?php echo $money_back['money_back_title'] ;?></h2>
                    </div>
                    <p class="mone-back-text">
                    <?php echo $money_back['money_back_info']; ?>
                    
                

            </div>
            <div class="row">
                <div class="money-back-check">
                <?php 
                
                  if (have_rows('check_single')) {
                    
                    while (have_rows('check_single')) {
                        
                    
                    the_row();
                    $check_img=get_sub_field('check-image');
                        
                        ?>
                    <div class="single-check"> <img src="<?php echo $check_img['url'] ?>" alt=""><?php echo get_sub_field('check-info');?></div>
                  
                        
                  <?php  }
                }
                ?>
                    
                    <!--                    <div class="single-check"> <img src="<?php echo get_template_directory_uri().'/assets/images/check.svg';?>" alt="">16 hour per day customer support </div>-->
                </div>

                <div class="button-div-footer text-center">
                <?php 
                $money_btn=get_field('money_back_btn');
        
        
                    if ($money_btn) {
                        $money_btn_url = $money_btn['url'];
                        $money_btn_text=$money_btn['title'];
                        ?>
                    <a href="<?php echo esc_url ($money_btn_url )?>" class="btn"><?php echo esc_html($money_btn_text) ; ?></a>
                        <?php 
                    }
                        ?>
                
                </div>
            </div>

            </p>
                    <?php };
                    ?>

        </div>
    </section>
    <div class="money-back-img">
    <?php
            $money_back=get_field('money_back_area');
                    if ($money_back) {
                        ?>
    
        <a href="#"> <img src="<?php echo $money_back ['money_back_green_image']['url'];?>" alt=""></a>
        <?php
                    }
        ?>
    </div>
    <?php get_template_part("tell"); ?>
    <!-- end money back area -->
    <!-- start footer area -->
    <?php get_footer();?>
