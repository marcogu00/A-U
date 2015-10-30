<?php  
	function child_theme_au() {
	wp_enqueue_style( 'parent-theme-css', get_template_directory_uri() . '/style.css' );
	}
	add_action( 'wp_enqueue_scripts', 'child_theme_au' );
	add_filter('widget_text', 'do_shortcode');
	
	function register_menus() {
		register_nav_menus( array('menuprincipal' => 'Menu Principal'));
	}
	add_action( 'init', 'register_menus' );
	
	add_theme_support('post-thumbnails');
	
	add_action( 'after_setup_theme', 'woocommerce_support' );
	function woocommerce_support() {
	   add_theme_support( 'woocommerce' );
	}

?>	