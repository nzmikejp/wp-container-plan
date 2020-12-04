        <?php echo do_shortcode('[section name="section-divider"]')?>
        <?php echo do_shortcode('[section name="get-plans"]')?>
        <?php echo do_shortcode('[section name="donate"]')?>

        </main>
        
        <footer>
            <div class="footer-upper">
                <div class="grid-container">
                    <div class="grid-x grid-padding-x">
                        <div class="cell-brand">
                            <img class="footer-brand" src="<?php echo get_template_directory_uri()?>/assets/img/logo.svg" alt="">
                        </div>
                        <div class="cell-container cell-lead">
                            <div class="font-bold-uppercase">About</div>

                            <?php wp_nav_menu( array(
                                'theme_location' => 'footer-menu-about',
                                'container' => 'ul',
                                'menu_class' => 'menu vertical'
                                )); 
                            ?>
                            
                        </div>
                        <div class="cell-container">
                            <div class="font-bold-uppercase">Professionals</div>

                            <?php wp_nav_menu( array(
                                'theme_location' => 'footer-menu-professionals',
                                'container' => 'ul',
                                'menu_class' => 'menu vertical'
                                )); 
                            ?>
                            
                        </div>
                        <div class="cell-container">
                            <div class="font-bold-uppercase">Follow</div>

                            <?php wp_nav_menu( array(
                                'theme_location' => 'footer-menu-social',
                                'container' => 'ul',
                                'menu_class' => 'menu vertical'
                                )); 
                            ?>
                            
                        </div>
                        <div class="cell-container">
                            <ul class="vertical menu">
                                <li class="font-bold-uppercase">Subscribe to keep up to date...</li>
                                <li><?php echo do_shortcode('[contact-form-7 id="81" title="Subscribe"]')?></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="footer-lower">
                <div class="grid-container">
                    <div class="cell-copyright">
                        &copy; Copyright <?php echo date("Y");?>  All Rights Reserved
                    </div>

                    <?php wp_nav_menu( array(
                        'theme_location' => 'footer-menu-legal',
                        'container' => 'ul',
                        'menu_class' => 'menu cell-menu'
                        )); 
                    ?>
                    
                </div>
            </div>
        </footer>
    </div>
    

    <?php wp_footer()?>

</body>
</html>