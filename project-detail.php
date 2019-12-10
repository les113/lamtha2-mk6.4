<?php
/*
Template Name: project-details
*/
?>

<?php get_header(); ?>

<div class="subpage-serviceswrap">
	<?php include('inc/services.php') ?>
</div>

<div id="pagecontent">
	<div class="row">
		<section class="grid_8">
			
			  <!-- Start the Loop. --> 
			 <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

			 <!-- Display the Post's Content -->

			   <?php the_content(); ?>
			   
			   <?php include('inc/inc-project-detail.php') ?>	
					   
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
	
		</section>
		<div class="grid_4">
			<div class="sideform">			
			<p>&nbsp;</p>
			<h2>Project brief:</h2>
			<p>Graphical design and layout,<br/>
			site build,<br/>
			content management,<br/>
			hosting, domain &amp; email,<br/>
			maintenance.</p>
			
			<?php if ($row_rs_client['description'] != "") {?>
				<p><strong>Website: </strong><a href="http://<?php echo $row_rs_client['description']; ?>" target="_blank">visit site</a></p>
			<?php } ?>
			<button class="btn" onclick="goBack()" alt="back to portfolio">Back to portfolio</button></a>
			</div>
		</div>
	</div>
	
</div>

<?php get_footer(); ?>
</body>
</html>

