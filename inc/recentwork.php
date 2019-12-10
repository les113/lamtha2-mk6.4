<?php require_once('dbconnection.php'); ?>

<?php
mysql_select_db($database_lamtha2, $lamtha2);
//$query_portfolio = "SELECT pid, filename, alttext, description, sortorder FROM wp_ngg_pictures WHERE galleryid = 1 AND exclude = 0 ORDER BY RAND() LIMIT 16";
$query_portfolio = "SELECT pid, filename, alttext, description, sortorder FROM wp_ngg_pictures WHERE galleryid = 1 AND exclude = 0 ORDER BY sortorder ASC LIMIT 12";
$portfolio = mysql_query($query_portfolio, $lamtha2) or die(mysql_error());
$row_portfolio = mysql_fetch_assoc($portfolio);
$totalRows_portfolio = mysql_num_rows($portfolio);
?>

<div id="owlcarousel">
    <?php do { ?>  
	<a href="/portfolio/"> 
	<div class="item"><img src="http://www.lamtha2.co.uk/wp-content/gallery/portfolio/thumbs/thumbs_<?php echo $row_portfolio['filename']; ?>" alt="<?php echo $row_portfolio['alttext']; ?>" /></div>
	</a>
	<?php } while ($row_portfolio = mysql_fetch_assoc($portfolio)); ?>
</div>

<a title="Web Design Service" href="/portfolio/"><button class="btn">See more..</button></a>

<?php
//mysql_free_result($portfolio);
?>