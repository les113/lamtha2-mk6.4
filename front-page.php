<?php
/*
The template for the homepage
*/
?>
<?php get_header(); ?>

<div class="herowrap hide-phone">
	<div class="row hero hideifnojs">
		<div id="slidercontainer" class="grid_12 center">
			<div id="prevBtn"><img src="<?php bloginfo( 'template_url' ); ?>/images/btn_prev.png" alt="prev" class="hide-phone"/></div>
			<div class="slideshow">
				<div class="firstslide">
				<span class="herotext"><?php echo get_post_meta($post->ID, "hero1-text", true); ?></span>
				<div><a href="/enquiry/"><img src="<?php bloginfo( 'template_url' ); ?>/images/getaquote.png" alt="get a quote" style="margin:16px 0;" /></a></div>
				<span class="herocontact hide-phone">or call us on <?php include('inc/telno.php') ?> to discuss your requirements</span>
				</div>
				<div class="slide">
				<span class="herotext"><?php echo get_post_meta($post->ID, "hero2-text", true); ?></span>
				<div><a href="/enquiry/"><img src="<?php bloginfo( 'template_url' ); ?>/images/getaquote.png" alt="get a quote" style="margin:16px 0;" /></a></div>
				<span class="herocontact hide-phone">or call us on <?php include('inc/telno.php') ?> to discuss your requirements</span>
				</div>
				<div class="slide">
				<span class="herotext"><?php echo get_post_meta($post->ID, "hero3-text", true); ?></span>
				<div><a href="/enquiry/"><img src="<?php bloginfo( 'template_url' ); ?>/images/getaquote.png" alt="get a quote" style="margin:16px 0;" /></a></div>
				<span class="herocontact hide-phone">or call us on <?php include('inc/telno.php') ?> to discuss your requirements</span>
				</div>
			</div>
			<div id="nextBtn" ><img src="<?php bloginfo( 'template_url' ); ?>/images/btn_next.png" alt="next" class="hide-phone"/></div>
        </div>
	</div>	
</div>
<div id="hero_shadow" class="hide-phone"></div>

<div class="homepage-serviceswrap">
	<?php include('inc/services.php') ?>
</div>

<div id="homepagecontent">
	<div class="row">
		<section class="grid_9">
			<!-- Start the Loop. --> 
			 <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

			 <!-- Display the Post's Content -->

			   <h1><?php the_title(); ?></h1>
			   <div class="dashedline"></div>
			   <?php the_content(); ?>

			 <!-- Stop The Loop (but note the "else:" - see next line). -->
			 <?php endwhile; else: ?>

			 <!-- The very first "if" tested to see if there were any Posts to -->
			 <!-- display.  This "else" part tells what do if there weren't any. -->
			 <h1>Page not found</h1>
			 <p>Sorry, that page no longer exists. The page may have been removed or you have followed an obsolete link.
			 Please use the site's navigation menus to try again.</p><p>&nbsp;</p><p>&nbsp;</p><p>&nbsp;</p><p>&nbsp;</p>

			 <!-- REALLY stop The Loop. -->
			 <?php endif; ?>

			<!-- /post -->
			
			<p>&nbsp;</p>
			
			<h2>Recent Projects</h2>
			<div class="dashedline"></div>
			
			<?php include('inc/recentwork.php') ?>

		</section>
		<div class="grid_3">		
			<?php dynamic_sidebar( 'sidebar-4' ); ?>
		</div>
	</div>
	
	<div class="row">
		<div class="grid_6">
			<?php dynamic_sidebar( 'sidebar-3' ); ?>	  
		</div>
		
		<div class="grid_6">
			<?php dynamic_sidebar( 'sidebar-1' ); ?>
		</div>
	</div>
</div>

	<!-- old version of jquery required for owlcarousel	-->
	<script  type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
	
	<!-- owl carousel - homepage recent work -->
	<!--<script  type="text/javascript" src="<?php bloginfo( 'template_url' ); ?>/scripts/owlcarousel/owl.carousel.min.js"></script>-->
	<script  type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/owl-carousel/1.3.3/owl.carousel.min.js"></script>
	<script  type="text/javascript" src="<?php bloginfo( 'template_url' ); ?>/scripts/owlcarousel/owl.carousel.settings.js"></script>

	<!-- jquery cycle - http://www.malsup.com/jquery/cycle/ - homepage slideshow -->
	<script  type="text/javascript" src="<?php bloginfo( 'template_url' ); ?>/scripts/jquery.cycle.all.min.js"></script>
	<script  type="text/javascript" src="<?php bloginfo( 'template_url' ); ?>/scripts/jquery.cycle.settings.js"></script>

<?php get_footer(); ?>

</body>
</html>