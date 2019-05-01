
<!--    HEader area-->
<header class="pos-abs">
        <div class="header-inner flexify">
           
            <div class="logo">
            <?php echo the_custom_logo(  ); ?>
                <a href="http://fastfederalresumes.com/">
                    <img src="<?php echo get_template_directory_uri().'/assets/images/site-logo.svg';  ?>" width="90" alt="Fast Federal Resumes">

                </a>
            </div>
       
            <div class="site-nav">
            <?php
            wp_nav_menu(array(
            'theme_location'=>'primary',
            'container'=>"",
            'menu_class'=>'flexify '


            ))
            ?>

                <!-- <ul class="flexify">
                    <li> <a href="<?php echo get_template_directory_uri().'/checkout.php?#faqs'; ?>">FAQ</a> </li>
                    <li> <a href="https://goo.gl/forms/KVjtFjeoj7TyNyQx1">WRITE WITH US</a> </li>
                    <li class="signup"> <a href="checkout.php">SIGN UP</a> </li>

                </ul> -->
            </div>
        </div>
    </header>
    <!--    HEader area ends-->