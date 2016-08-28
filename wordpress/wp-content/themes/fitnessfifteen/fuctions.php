<?php
	/*THEME SUPPORT*/
	add_theme_support( 'post-thumbnails' ); 
	/**
	 * Enqueues Styles
	 */
	function add_fitnessfifteen_styles() {
			//enqueue site's google font
			wp_enqueue_style( 'font_style', "https://fonts.googleapis.com/css?family=Roboto");
			//enqueue site's logo font
			wp_enqueue_style( 'logo_style', get_template_directory_uri()."/css/logo-style.css");
			 //enqueue bootstrap stylesheet
			wp_enqueue_style( 'bootstrap_style', "https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css");
			//enqueue boostrap theme stylesheet
			wp_enqueue_style( 'bootstrap_theme_style', "https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap-theme.min.css");
			//enqueue main stylesheet
			wp_enqueue_style( 'style', get_stylesheet_uri());
			//enqueue stylesheet for blog
			wp_enqueue_style( 'blog_style', get_template_directory_uri()."/css/blog-style.css");
			//enqueue stylesheet for individual posts
			wp_enqueue_style( 'post_style', get_template_directory_uri()."/css/post-style.css");
			//enqueue stylesheet for scrolling nav
			wp_enqueue_style( 'scrolling_nav_style', get_template_directory_uri()."/css/scrolling-nav.css");
			//enqueue stylesheet for slide
			wp_enqueue_style( 'slide_style', get_template_directory_uri()."/css/slide-style.css");
	}
	add_action( 'wp_enqueue_scripts', 'add_fitnessfifteen_styles' );
	/**
	* Enqueues Scripts
	*/
	function add_fitnessfifteen_scripts(){
		//enqueue jquery script
		wp_enqueue_script('jquery');
		//enqueue bootstrap script
		wp_enqueue_script('boostrap_script', "http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js");
		//enqueue easing animation for scroll
		wp_enqueue_script('easing_script',get_template_directory_uri()."/js/jquery.easing.min.js");
		//enqueue scrolling nav script
		wp_enqueue_script('scrolling_nav_script',get_template_directory_uri()."/js/scrolling-nav.js");
		//enqueue script for making nav responsive
		wp_enqueue_script('responsive_script',get_template_directory_uri()."/js/responsiveScript.js");
		//enqueue script for signing up users
		wp_enqueue_script('signup_script',get_template_directory_uri()."/js/signup-script.js");
		//enqueue script for slide
		//wp_enqueue_script('slide_script',get_template_directory_uri()."/js/slide-script.js");
		//enqueue script for client testimonial animation
		wp_enqueue_script('clients_script',get_template_directory_uri()."/js/clients-script.js");
	}
	add_action( 'wp_enqueue_scripts', 'add_fitnessfifteen_scripts' );
	/*
	* Remove 32px margin-top on html element that wordpress defaults through inclusion of an admin bar
	*/
	function remove_admin_login_header() {
		remove_action('wp_head', '_admin_bar_bump_cb');
	}
	add_action('get_header', 'remove_admin_login_header');
	/*
	* Pagination Functionality
	*/
	function custom_pagination($numpages = '', $pagerange = '', $paged='') {
		if (empty($pagerange)) {
			$pagerange = 2;
		}
		/**
		* This first part of our function is a fallback
		* for custom pagination inside a regular loop that
		* uses the global $paged and global $wp_query variables.
		* 
		* It's good because we can now override default pagination
		* in our theme, and use this function in default quries
		* and custom queries.
		*/
		global $paged;
		if (empty($paged)) {
			$paged = 1;
		}
		if ($numpages == '') {
			global $wp_query;
			$numpages = $wp_query->max_num_pages;
			if(!$numpages) {
		    	$numpages = 1;
			}
		}
		/** 
		* We construct the pagination arguments to enter into our paginate_links
		* function. 
		*/
		$pagination_args = array(
		'base'            => get_pagenum_link(1) . '%_%',
		'format'          => 'page/%#%',
		'total'           => $numpages,
		'current'         => $paged,
		'show_all'        => False,
		'end_size'        => 1,
		'mid_size'        => $pagerange,
		'prev_next'       => True,
		'prev_text'       => __('&laquo;'),
		'next_text'       => __('&raquo;'),
		'type'            => 'plain',
		'add_args'        => false,
		'add_fragment'    => ''
		);
		$paginate_links = paginate_links($pagination_args);
		if ($paginate_links) {
			echo "<nav class='custom-pagination'>";
			echo "<span class='page-numbers page-num'>Page " . $paged . " of " . $numpages . "</span> ";
			echo $paginate_links;
			echo "</nav>";
		}
	}
?>
