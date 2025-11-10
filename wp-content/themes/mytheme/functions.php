<?php

function portfolio_features() {
    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');
}

add_action('after_setup_theme', 'portfolio_features');

function portfolio_files() {
    wp_enqueue_style('portfolio_main_styles', get_stylesheet_uri());
}

add_action('wp_enqueue_scripts', 'portfolio_files');

function mytheme_setup() {
        add_theme_support( 'custom-logo', array(
        'height'      => 100,
        'width'       => 400,
        'flex-height' => true,
        'flex-width'  => true,
    ) );
}

add_action('after_setup_theme', 'mytheme_setup');

?>

<?php 

function mytheme_enqueue_styles() {
    // Google Fonts
    wp_enqueue_style(
        'mytheme-google-fonts',
        'https://fonts.googleapis.com/css2?family=Inter:ital,opsz,wght@0,14..32,100..900;1,14..32,100..900&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap',
        array(),
        null
    );
}

add_action( 'wp_enqueue_scripts', 'mytheme_enqueue_styles' );

?>

<?php

/* Registers navigation menus for the theme. */

function register_navbar() {
    register_nav_menus(
        array(
            'header-menu' => 'Header Menu',
            'extra-menu' => 'Extra Menu',
            'footer-menu' => 'Footer Menu',
            'footer-legal' => 'Footer Legal Menu',
        )
    );
}

add_action('init', 'register_navbar');

?>

<?php
/* Calculates if the past has been made during this calendar year or not. */

function if_same_year($year) {
    $current_year = get_the_time('Y');
    if ($year == $current_year){
    return get_the_date('d.m');
    } else { 
        return get_the_date('d.m.y');
    }
}

?>

<?php

function post_time() {
    $post_time = get_the_date('U'); /* When the date was published (Unix timestamp) */
    $current_time = current_time('timestamp'); /* Current time (Unix timestamp) */
    $time_diff = $current_time - $post_time; /* Time difference in seconds */
    $current_year = get_the_time('Y');

    if ($time_diff < 3600) { /* Less than an hour ago */
        $minutes = floor($time_diff / 60);
        return $minutes . ' minutes ago';
    } elseif ($time_diff < 86400) { /* Less than a day ago */
        $hours = floor($time_diff / 3600);
        return $hours . ' hours ago';
    } else { /* Different year */
        return if_same_year($current_year);
    }
}

?>

<?php
function footer_watermark() {
    $year_established = 2025;
    $current_year = date('Y'); // safer outside The Loop
    $title = get_bloginfo('name');

    echo '<p>©';

    if ($current_year == $year_established) {
        echo $current_year . ' ' . $title;
    } else {
        echo $year_established . '-' . $current_year . ' ' . $title;
    }

    echo '</p>';
}
?>

<?php 

/* Turn images and captions into semantic elements. Figure and figcaption */

function custom_img_caption( $output, $attr, $content ) {
    // Merge default attributes
    $defaults = array(
        'id'      => '',
        'align'   => 'alignnone',
        'width'   => '',
        'caption' => ''
    );
    $attr = shortcode_atts( $defaults, $attr );

    // If no caption, return content unchanged
    if ( empty( $attr['caption'] ) ) {
        return $content;
    }

    // Build figure tag
    $id = $attr['id'] ? ' id="' . esc_attr( $attr['id'] ) . '"' : '';
    $class = trim( 'wp-caption ' . esc_attr( $attr['align'] ) );

    $figure  = '<figure' . $id . ' class="' . $class . '">';
    $figure .= do_shortcode( $content );
    $figure .= '<figcaption class="wp-caption-text">' . esc_html( $attr['caption'] ) . '</figcaption>';
    $figure .= '</figure>';

    return $figure;
}
add_filter( 'img_caption_shortcode', 'custom_img_caption', 10, 3 );
?>

<?php

function mytheme_enqueue_bootstrap() {
    // Enqueue Bootstrap CSS (from CDN)
    wp_enqueue_style(
        'bootstrap-css',
        'https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css',
        array(),
        '5.3.3'
    );

    // Enqueue your theme’s main stylesheet (style.css)
    wp_enqueue_style('mytheme-style', get_stylesheet_uri(), array('bootstrap-css'));

    // Enqueue Bootstrap JS (from CDN)
    wp_enqueue_script(
        'bootstrap-js',
        'https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js',
        array('jquery'),
        '5.3.3',
        true // Load in footer
    );
}
add_action('wp_enqueue_scripts', 'mytheme_enqueue_bootstrap');

?>