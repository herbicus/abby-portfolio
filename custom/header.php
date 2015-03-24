<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>" />
	<meta name="viewport" content="width=device-width" />

	<!-- <meta property="og:image" content="http://herbtorres.com/wp-content/themes/custom/assets/img/logo-z.png"/>
	<meta property="og:image:secure_url" content="http://herbtorres.com/wp-content/themes/custom/assets/img/logo-z.png" />
	
	<link rel="image_src" href="<?= get_template_directory_uri(); ?>/assets/img/logo-z.png"> -->

	<title><?php wp_title( ' | ', true, 'right' ); ?></title>
	<link rel="icon" href="<?= get_template_directory_uri(); ?>/assets/img/x-logo.png">
	<link rel="stylesheet" href="<?= get_template_directory_uri(); ?>/assets/css/styles.min.css">
	<!-- <link href='http://fonts.googleapis.com/css?family=Rajdhani:400,500,700' rel='stylesheet' type='text/css'> -->
	
	<script src="<?= get_template_directory_uri(); ?>/assets/js/vendor/modernizr-2.8.0.min.js"></script>
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
	<script src="http://cdnjs.cloudflare.com/ajax/libs/gsap/1.8.3/TweenMax.min.js"></script>
	<script src="<?= get_template_directory_uri(); ?>/assets/js/plugins/jquery.mixitup.min.js"></script>
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>
