<?php
	/*TO SET UP WORDPRESS BLOG FUNCTIONALITY*/
	/* Short and sweet */
	//define('WP_USE_THEMES', false);
	require('./wp-blog-header.php');
?>
<!DOCTYPE html>
<html>
	<head>
		<title>Fitness 15</title>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width">
		<link rel="shortcut icon" href="<?php echo get_stylesheet_directory_uri(); ?>/images/FF-Favicon.jpg" />
		<script type="text/javascript" src="http://code.jquery.com/jquery-2.2.4.min.js"></script>
		<script type="text/javascript" src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
		<?php wp_head() ?>
	</head>
	<body>
