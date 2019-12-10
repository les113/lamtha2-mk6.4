<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="utf-8" />
	<title><?php
	/*
	 * Print the <title> tag based on what is being viewed.
	 */
	global $page, $paged;

	wp_title( '|', true, 'right' );

	// Add the blog name.
	bloginfo( 'name' );

	// Add the blog description for the home/front page.
	$site_description = get_bloginfo( 'description', 'display' );
	if ( $site_description && ( is_home() || is_front_page() ) )
		echo " | $site_description";
	?>
	</title>

	<meta name="msapplication-TileColor" content="#015565"/><!-- this works -->
	<meta name="msapplication-TileImage" content="<?php bloginfo( 'template_url' ); ?>/images/metro-tile.png"/><!-- this doesnt! -->
	<meta name="format-detection" content="telephone=no"><!-- remove default styling of telno links applied by iphone!!! -->

	<!-- CSS -->
	<!-- owl carousel 
	<link rel="stylesheet" href="<?php bloginfo( 'template_url' ); ?>/scripts/owlcarousel/owl.carousel.min.css">
	<link rel="stylesheet" href="<?php bloginfo( 'template_url' ); ?>/scripts/owlcarousel/owl.theme.min.css">-->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/owl-carousel/1.3.3/owl.carousel.min.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/owl-carousel/1.3.3/owl.theme.css">
	<!-- colorbox -->
	<link rel="stylesheet" href="<?php bloginfo( 'template_url' ); ?>/scripts/colorbox/colorbox.css" type="text/css" media="screen"/>
	<!-- uitotop -->
	<link rel="stylesheet" href="<?php bloginfo( 'template_url' ); ?>/scripts/jquery.ui.totop/css/ui.totop.css" type="text/css" media="screen"/>	
	<!-- styles -->
	<link rel="stylesheet" href="<?php bloginfo( 'template_url' ); ?>/css/styles.css" type="text/css" media="screen"/>	
	<!-- fonts -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" >
	<link href="https://fonts.googleapis.com/css?family=Open+Sans|Quicksand" rel="stylesheet">
	
	<!--[if lt IE 9]>
		<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
		<link rel="stylesheet" href="<?php bloginfo( 'template_url' ); ?>/css/iestyles.css">
	<![endif]-->
	
	<!-- Favicons -->
	<link rel="shortcut icon" href="<?php bloginfo( 'template_url' ); ?>/images/favicon.ico">

	<!-- Mobile Specific Metas -->
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" /> 
	
	<?php wp_head(); ?>	

</head>

<body>

<!-- internet explorer countdown -->
<!--[if lt IE 8]><div style='clear: both; height: 112px; padding:0; position: relative;'><a href="http://www.theie7countdown.com/ie-users-info"><img src="http://www.theie7countdown.com/assets/badge_iecountdown.png" border="0" height="112" width="348" alt="" /></a></div><![endif]-->

<div class="headerwrap">
	<header class="row">
		<div class="grid_6">
			<a href="http://www.lamtha2.co.uk"><img src="<?php bloginfo( 'template_url' ); ?>/images/logo.png" width="320" height="100" alt="Lamtha2 Logo"></a>
        </div>
        <div class="grid_4 offset_2">
			<div id="topcontact">
				<span class="fa fa-phone"></span>
				<a href="tel:<?php include('inc/telno.php') ?>"><?php include('inc/telno.php') ?></a>
				<br/>
				<span class="fa fa-envelope-o" style="margin-top:10px;"></span>
				<?php include('inc/email.php') ?>
			</div>
        </div>
	</header>
	<nav class="row">
		<div class="grid_12">
				<div>
					<div class="mobmenubutton show-phone"><a href="#"><span class="fa fa-bars fa-2x"></span></a></div>
					<div><?php wp_nav_menu( array( 'theme_location' => 'top-menu','menu_class' => 'mainmenu' ) ); ?></div>
				</div>
		</div>
	</nav>
</div>