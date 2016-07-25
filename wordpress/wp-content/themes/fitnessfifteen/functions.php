<?php
	/*THEME SUPPORT*/
	add_theme_support( 'post-thumbnails' ); 
	/**
	 * Enqueues Styles
	 */
	function add_fitnessfifteen_styles() {
			wp_enqueue_style( 'font_style', 'https://fonts.googleapis.com/css?family=Roboto'); //enqueue site's google font
			wp_enqueue_style( 'style', get_stylesheet_uri()); //enqueue style.css
			wp_enqueue_style( 'blog_style', get_template_directory_uri()."/css/blog-style.css"); //enqueue blog-style.css
			//wp_enqueue_style( 'style', get_template_directory_uri()."/style-responsive.css"); for other style sheets in fitnessfifteen
			wp_enqueue_style( 'scrolling_nav_style', get_template_directory_uri()."/css/scrolling-nav.css"); //enqueue scrolling-nav.css
	}
	add_action( 'wp_enqueue_scripts', 'add_fitnessfifteen_styles' );

	/**
	* Enqueues Scripts
	*/
	function add_fitnessfifteen_scripts(){
		wp_enqueue_script('jquery');
		wp_enqueue_script('easing_script',get_template_directory_uri()."/js/jquery.easing.min.js");
		wp_enqueue_script('scrolling_nav_script',get_template_directory_uri()."/js/scrolling-nav.js");
		wp_enqueue_script('responsive_script',get_template_directory_uri()."/js/responsiveScript.js");
	}
	add_action( 'wp_enqueue_scripts', 'add_fitnessfifteen_scripts' );

	/*
	* Remove 32px margin-top on html element that wordpress defaults through inclusion of an admin bar
	*/
	function remove_admin_login_header() {
		remove_action('wp_head', '_admin_bar_bump_cb');
	}
	add_action('get_header', 'remove_admin_login_header');

?>
