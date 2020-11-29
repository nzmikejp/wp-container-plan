<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="apple-touch-icon" sizes="180x180" href="<?php echo get_template_directory_uri()?>/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="<?php echo get_template_directory_uri()?>/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="<?php echo get_template_directory_uri()?>/favicon-16x16.png">
    <link rel="manifest" href="<?php echo get_template_directory_uri()?>/site.webmanifest">

    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/foundation-sites@6.6.3/dist/css/foundation.min.css" integrity="sha256-ogmFxjqiTMnZhxCqVmcqTvjfe1Y/ec4WaRj/aQPvn+I=" crossorigin="anonymous">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri()?>/assets/css/main.css">

    <title>Containerplan</title>

    <?php wp_head()?>
</head>
<body>
    <header class="main-header">
        <div class="nav-brand">
            <a href="/"><img src="<?php echo get_template_directory_uri()?>/assets/img/logo.svg" alt=""></a>
        </div>
        <nav class="nav-menu">
            <div class="menu-mobile">
                <div class="menu-btn">
                    <div class="menu-btn-burg"></div>
                </div>
            </div>

            <?php wp_nav_menu( array(
                'theme_location' => 'main-menu',
                'container' => 'ul',
                'menu_class' => 'menu'
                )); 
            ?>
            
        </nav>
    </header>
    <div class="mobile-nav-wrap">
        <img src="<?php echo get_template_directory_uri()?>/assets/img/x-tape.png" alt="">

        <?php wp_nav_menu( array(
            'theme_location' => 'main-menu',
            'container' => 'ul',
            'menu_class' => 'menu vertical'
            )); 
        ?>
    
    </div>