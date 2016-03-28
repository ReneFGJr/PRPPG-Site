<!DOCTYPE html>
<?php wp_enqueue_script('jquery'); ?>
<?php wp_enqueue_script('bootstrap'); ?>
<html <?php language_attributes(); ?> class="no-js">
<head>
	<meta charset="<?php bloginfo('charset'); ?>">
	<meta name="viewport" content="width=device-width">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">
	<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>">
	<!--[if lt IE 9]>
	<script src="<?php echo esc_url( get_template_directory_uri() ); ?>/js/html5.js"></script>
	<![endif]-->
	<title><?php bloginfo('name'); ?> - <?php bloginfo('description'); ?></title>
	<?php wp_head(); ?>
</head>
<body>
	
      <!-- Barra superior -->
      <!-- ================================================== -->
		<?php
		require("menu_barra.php");
		?>      
      
    <!-- Barra MENU -->
    <!-- ================================================== -->
		<?php
		require("menu_top.php");
		?>