<!DOCTYPE html>
<html lang="en">
<head>
    <?php wp_head(); ?>  
</head>
<body>
    <header class="site-header">
        <div class="nav-container">
            <a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="home-button">Home</a>
            <?php
            wp_nav_menu( array(
                'theme_location' => 'header-menu',
                'container'      => 'nav',
                'container_class'=> 'main-nav',
                'home_link'      =>  'Home',
                'menu_class'     => 'nav-list',
            ) );
            ?>
        </div>
        <hr>
    </header>