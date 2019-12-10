<?php
/* the template for blog detail pages */
?>
<?php get_header(); ?>

<div class="subpage-serviceswrap">
	<?php include('inc/services.php') ?>
</div>

<div id="pagecontent">
	<div class="row">
		<div class="grid_9">

			  <!-- Start the Loop. --> 
			 <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

			 <!-- Display the Post's Content -->
			<article>
			   <h1><?php the_title(); ?></h1>
			   <div class="dashedline"></div>
			   <?php the_content(); ?>
			</article>
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

		<?php include('inc/social-links.php') ?>
		
		</div>
		
		<div class="grid_3">
			<?php get_sidebar(); ?>
		</div>
	</div>
	
</div>

<?php get_footer(); ?>
</body>
</html>