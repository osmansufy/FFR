<footer class="footer-area">
        <div class="container">
            <div class="row">
                <div class="footer-inner">
                    <?php
                    $footer=get_field('footer_field');
                    if ($footer) {
                        ?>
                       
                    
                    <div class="copyright">
                        <p> <?php echo $footer['copy_right'] ?></p>
                    </div>
                    <div class="footer-logo"> <a href="<?php home_url() ?>"><img src="<?php echo $footer['footer_logo']['url']; ?>" alt="<?php echo $footer['footer_logo']['alt']; ?>"></a> </div>
                    <div class="footer-info">
                   

                            
                        <ul>
                        <?php
                        if( have_rows('footer_contact') ){
                        while( have_rows('footer_contact') ){ the_row(); 
                            
                            ?>
                       
                            <li><a href="mailto:ffr@gmail.com"><?php the_sub_field('contact_number') ?></a></li>

                            <?php 
                             }
                            }
                            ?>

                            </ul>
                        
                        
                        <ul class="social-share">
                            <li class="facebook">
                                <a href="" target="_blank"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                            <li class="twitter">
                                <a href="" target="_blank"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                            </li>
                            <li class="instagram">
                                <a href="" target="_blank"><i class="fa fa-instagram" aria-hidden="true"></i></a>
                            </li>
                            <!--<li class="linkedin"><a href="" target="_blank"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>-->
                        </ul>
                    </div>
                    <?php 
                    }
                    
                    ?>
                </div>
            </div>
        </div>
    </footer>