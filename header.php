<?php

/**
 * The Header for our theme.
 *
 * Displays all of the <head> section
 *
 * @package Skele
 * @since Skele 1.0
 */

?><!DOCTYPE html>

<html <?php language_attributes(); ?>>

<head>
	<meta charset="<?php bloginfo('charset'); ?>" />
	<meta name="viewport" content="width=device-width" />
	<title><?php wp_title(' | ', true, 'right'); ?></title>
	<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />

	<!--[if lt IE 9]>
	<script src="<?php echo get_template_directory_uri(); ?>/js/html5.js" type="text/javascript"></script>
	<![endif]-->

	<script type="text/javascript">
	  var _gaq = _gaq || [];
	  _gaq.push(['_setAccount', 'UA-38944056-1']);
	  _gaq.push(['_trackPageview']);

	  (function() {
	    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
	    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
	    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
	  })();
	</script>

	<link href='http://fonts.googleapis.com/css?family=Source+Code+Pro:600' rel='stylesheet' type='text/css'>
	
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

	<div class="container">
	 	<div class="header">
			<a href="/"><img class="logo" src="<?php echo get_template_directory_uri();?>/images/logo.png" alt="chris mueller's logo"/></a>
			<nav class="primary">
				<ul>
					<li><a href="/">About</a></li>
					<li><a href="category/projects">Work</a></li>
				</ul>
			</nav>
			<hr>
		</div>