<?php require_once('dbconnection.php'); ?>
<?php
$colname_rs_client = "-1";
if (isset($_GET['pid'])) {
  $colname_rs_client = (get_magic_quotes_gpc()) ? $_GET['pid'] : addslashes($_GET['pid']);
}
mysql_select_db($database_lamtha2, $lamtha2);
$query_rs_client = sprintf("SELECT pid, filename, alttext, description FROM wp_ngg_pictures WHERE pid = %s",
$colname_rs_client);
$rs_client = mysql_query($query_rs_client, $lamtha2) or die(mysql_error());
$row_rs_client = mysql_fetch_assoc($rs_client);
//$totalRows_rs_client = mysql_num_rows($rs_client);
?>

<h1>Client: <?php echo $row_rs_client['alttext']; ?></h1>	   
<div class="dashedline"></div>
<img class="aligncenter size-full wp-image-80" alt="<?php echo $row_rs_client['alttext']; ?>" 
src="<?php bloginfo( 'siteurl' ); ?>/wp-content/gallery/portfolio/<?php echo $row_rs_client['filename']; ?>" width="100%"/>
				
<?php
//mysql_free_result($rs_client);
?>
