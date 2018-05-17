<?php

	// Register Custom Navigation Walker
	require_once get_template_directory() . '/class-wp-bootstrap-navwalker.php';
	// Theme Menu Setup
	function wpmenu_theme_setup(){
		// Nav menus
		register_nav_menus( array(
			'primary' => __( 'Primary Menu'),
		) );
	}
	add_action('after_setup_theme', 'wpmenu_theme_setup');

	function bolton_theme_styles(){
		wp_enqueue_style('bootstrap_css', get_theme_file_uri('/css/bootstrap.min.css') );
        wp_enqueue_style( 'twentyseventeen-style', get_stylesheet_uri() );
		wp_enqueue_style('slick_css', get_theme_file_uri('/css/slick.css'));
		wp_enqueue_style('slick_theme_css', get_theme_file_uri('/css/slick-theme.css'));
	}
	add_action('wp_enqueue_scripts', 'bolton_theme_styles');
	
	function bolton_theme_js(){
		
		wp_enqueue_script('bootstrap_js', get_theme_file_uri('/js/bootstrap.min.js'), array( 'jquery' ), '1.0', true );
		wp_enqueue_script('slick_js', get_theme_file_uri('/js/slick-min.js'), array( 'jquery' ), '1.0', true );
		wp_enqueue_script('main_js', get_theme_file_uri('/js/main.js'), array( 'jquery' ), '1.0', true );

	}
	add_action('wp_enqueue_scripts', 'bolton_theme_js');
?>