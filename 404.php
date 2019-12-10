<?php get_header(); ?>

<div class="subpage-serviceswrap">
	<?php include('inc/services.php') ?>
</div>

<div id="pagecontent">
	<div class="row">
		<div class="grid_9">
			
			  

			 <!-- The very first "if" tested to see if there were any Posts to -->
			 <!-- display.  This "else" part tells what do if there weren't any. -->
			 <h1>Page not found</h1>
			 <p>Sorry, that page no longer exists. The page may have been removed or you have followed an obsolete link.
			 Please use the site's navigation menus to try again.</p><p>&nbsp;</p><p>&nbsp;</p><p>&nbsp;</p><p>&nbsp;</p>


	
		</div>
		<div class="grid_3">
			<?php wp_nav_menu( array( 'theme_location' => 'side-menu','menu_class' => 'sidemenu' ) ); ?>
		</div>
	</div>
	
</div>

<?php get_footer(); ?>
</body>
</html>