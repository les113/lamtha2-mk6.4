<?php
/**
 * The template for displaying Archive pages.
 *
 * Used to display archive-type pages if nothing more specific matches a query.
 * For example, puts together date-based pages if no date.php file exists.
 */
 ?>
 <?php get_header(); ?>

<div class="subpage-serviceswrap">
	<?php include('inc/services.php') ?>
</div>

<div id="pagecontent">
	<div class="row">
		<section class="grid_9">
		<h2><!-- archive -->
				<?php
					if ( is_day() ) :
						printf( __( 'Daily Archives: %s', 'twentytwelve' ), '<span>' . get_the_date() . '</span>' );
					elseif ( is_month() ) :
						printf( __( 'Monthly Archives: %s', 'twentytwelve' ), '<span>' . get_the_date( _x( 'F Y', 'monthly archives date format', 'twentytwelve' ) ) . '</span>' );
					elseif ( is_year() ) :
						printf( __( 'Yearly Archives: %s', 'twentytwelve' ), '<span>' . get_the_date( _x( 'Y', 'yearly archives date format', 'twentytwelve' ) ) . '</span>' );
					else :
						_e( 'Archives', 'twentytwelve' );
					endif;
				?>
		</h2>
		
			  <!-- Start the Loop. --> 
			 <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

			 <!-- Display the Post's Content -->

			   <h1><?php the_title(); ?></h1>
			   <div class="dashedline"></div>
			   <?php the_content(); ?>

			 <!-- Stop The Loop (but note the "else:" - see next line). -->
			 <?php endwhile; ?>
			 
			 <h4><?php next_posts_link('Older Posts') ?> - <?php previous_posts_link('Newer Posts') ?></h4>	
			
			 <?php else: ?>

			 <!-- The very first "if" tested to see if there were any Posts to -->
			 <!-- display.  This "else" part tells what do if there weren't any. -->
			 <h1>Page not found</h1>
			 <p>Sorry, that page no longer exists. The page may have been removed or you have followed an obsolete link.
			 Please use the site's navigation menus to try again.</p><p>&nbsp;</p><p>&nbsp;</p><p>&nbsp;</p><p>&nbsp;</p>

			 <!-- REALLY stop The Loop. -->
			 <?php endif; ?>

			<!-- /post -->
	
		</section>
		<div class="grid_3">
			<?php get_sidebar(); ?>
		</div>
	</div>
	
</div>

<?php get_footer(); ?>
</body>
</html>