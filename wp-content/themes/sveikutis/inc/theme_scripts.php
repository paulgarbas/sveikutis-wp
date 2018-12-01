<?php

function _s_scripts() {
    wp_enqueue_style('_s-themeStyle-carousel', get_template_directory_uri() . '/css/owl.carousel.css');
    wp_enqueue_style('_s-themeStyle-bootstrap', get_template_directory_uri() . '/css/bootstrap.min.css');
    wp_enqueue_style('_s-themeStyle-bootstrap-grid', get_template_directory_uri() . '/css/bootstrap-grid.min.css');
    wp_enqueue_style('_s-themeStyle-font-awesome', get_template_directory_uri() . '/css/font-awesome.min.css');
    wp_enqueue_style('_s-themeStyle-ionicons', get_template_directory_uri() . '/css/ionicons.css');
    wp_enqueue_style('_s-themeStyle-animate', get_template_directory_uri() . '/css/animate.css');
    wp_enqueue_style('_s-themeStyle-responsive', get_template_directory_uri() . '/css/responsive.css');
    wp_enqueue_style('_s-themeStyle-style', get_template_directory_uri() . '/css/style.css');
    wp_enqueue_style('_s-themeStyle-style2', get_template_directory_uri() . '/style.css');
    // wp_enqueue_style( 'sveikutis-style', get_stylesheet_uri() );
    
	wp_enqueue_script( 'sveikutis-navigation', get_template_directory_uri() . '/js/navigation.js', array(), '20151215', true );
	wp_enqueue_script( 'sveikutis-skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array(), '20151215', true );
    wp_enqueue_script('_s-font-awesome', 'https://use.fontawesome.com/releases/v5.0.10/js/all.js', array(), null, true);
    wp_enqueue_script('_s-jquery', 'https://code.jquery.com/jquery-3.3.1.js', array(), null, true);
	wp_enqueue_script( '-s-modernizer', get_template_directory_uri() . '/js/vendor/modernizr-2.6.2.min.js', array(), '20151215', true );
    wp_enqueue_script('_s-jquery', '//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js', array(), null, true);
	wp_enqueue_script( '_s-bootstrap', get_template_directory_uri() . '/js/bootstrap.min.js', array(), '20151215', true );
	wp_enqueue_script( '_s-owl-carousel', get_template_directory_uri() . '/js/owl.carousel.min.js', array(), '20151215', true );
	wp_enqueue_script( '_s-plugins', get_template_directory_uri() . '/js/plugins.js', array(), '20151215', true );
	wp_enqueue_script( '_s-waypoints', get_template_directory_uri() . '/js/min/waypoints.min.js', array(), '20151215', true );
	wp_enqueue_script( '_s-jquery-counterup', get_template_directory_uri() . '/js/jquery.counterup.js', array(), '20151215', true );
	wp_enqueue_script( '_s-jquery-easing', get_template_directory_uri() . '/js/jquery.easing.min.js', array(), '20151215', true );
	wp_enqueue_script( '_s-scrolling-nav', get_template_directory_uri() . '/js/scrolling-nav.js', array(), '20151215', true );
	wp_enqueue_script( '_s-code', get_template_directory_uri() . '/js/code.js', array(), '20151215', true );
	// wp_enqueue_script( '_s-google-map', get_template_directory_uri() . '/js/google-map-init.js', array(), '20151215', true );
	wp_enqueue_script( '_s-main', get_template_directory_uri() . '/js/main.js', array(), '20151215', true );
    
	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}

add_action('wp_enqueue_scripts', '_s_scripts');
?>
