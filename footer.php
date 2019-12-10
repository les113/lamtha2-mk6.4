<div class="footerwrap hide-phone">
	<div class="row footerlinks">
		<div class="grid_3">
			<?php dynamic_sidebar( 'sidebar-6' ); ?>
		</div>
		<div class="grid_3">
			<?php dynamic_sidebar( 'sidebar-7' ); ?>
		</div>
		<div class="grid_3">
			<?php dynamic_sidebar( 'sidebar-8' ); ?>
		</div>
		<div class="grid_3">
			<?php dynamic_sidebar( 'sidebar-9' ); ?>
		</div>
	</div>
</div>

<footer>
	<div class="row">
		<div class="grid_10">
			<div class="footermenu">
				<?php wp_nav_menu( array( 'theme_location' => 'foot-menu','menu_class' => 'footermenu' ) ); ?>
			</div>
        </div>
		<div class="grid_2 socialicons right">
		<!--
		<ul>
			<li><a href="http://www.facebook.com/Lamtha2" target="_blank"><img src="<?php bloginfo( 'template_url' ); ?>/images/facebook.png"  alt="facebook" /></a></li>
			<li><a href="https://plus.google.com/103441208537925331672/" target="_blank"><img src="<?php bloginfo( 'template_url' ); ?>/images/googleplus.png" alt="googleplus"/></a></li>
			<li><a href="https://twitter.com/lamtha2" target="_blank"><img src="<?php bloginfo( 'template_url' ); ?>/images/twitter.png"  alt="twitter" /></a></li>
		</ul> 			--> 
        </div>
	</div>
	<div class="row">
		<div class="grid_12">
			Copyright <?php echo date("Y"); ?>, Lamtha2 are website designers in Aylesbury, Buckinghamshire <br/>		
		</div>
	</div>
</footer>

<?php wp_footer();?>

<!-- scripts -->
<?php include('inc/includescripts.php') ?>
	
<!-- analytics -->
<?php include('inc/analytics.php') ?>
