<?php require_once('dbconnection.php'); ?>
<?php
// clients
$maxRows_rs_clients = 10;
$pageNum_rs_clients = 0;
if (isset($_GET['pageNum_rs_clients'])) {
  $pageNum_rs_clients = $_GET['pageNum_rs_clients'];
}
$startRow_rs_clients = $pageNum_rs_clients * $maxRows_rs_clients;

mysql_select_db($database_lamtha2, $lamtha2);

// portfolio

$query_rs_clients = "SELECT pid, filename, alttext, description, sortorder FROM wp_ngg_pictures WHERE galleryid = 1 AND exclude = 0 ORDER BY sortorder ASC";
//$query_rs_clients = "SELECT pid, filename, alttext, description FROM wp_ngg_pictures WHERE galleryid = 1 AND exclude = 0 ORDER BY RAND()";

$query_limit_rs_clients = sprintf("%s LIMIT %d, %d", $query_rs_clients, $startRow_rs_clients, $maxRows_rs_clients);
$rs_clients = mysql_query($query_limit_rs_clients, $lamtha2) or die(mysql_error());
$row_rs_clients = mysql_fetch_assoc($rs_clients);

if (isset($_GET['totalRows_rs_clients'])) {
  $totalRows_rs_clients = $_GET['totalRows_rs_clients'];
} else {
  $all_rs_clients = mysql_query($query_rs_clients);
  $totalRows_rs_clients = mysql_num_rows($all_rs_clients);
}
$totalPages_rs_clients = ceil($totalRows_rs_clients/$maxRows_rs_clients)-1;

$queryString_rs_clients = "";
if (!empty($_SERVER['QUERY_STRING'])) {
  $params = explode("&", $_SERVER['QUERY_STRING']);
  $newParams = array();
  foreach ($params as $param) {
    if (stristr($param, "pageNum_rs_clients") == false && 
        stristr($param, "totalRows_rs_clients") == false) {
      array_push($newParams, $param);
    }
  }
  if (count($newParams) != 0) {
    $queryString_rs_clients = "&" . htmlentities(implode("&", $newParams));
  }
}
$queryString_rs_clients = sprintf("&totalRows_rs_clients=%d%s", $totalRows_rs_clients, $queryString_rs_clients);

?>

<?php
$rs_clients_endRow = 0;
$rs_clients_columns = 1; // number of columns
$rs_clients_hloopRow1 = 0; // first row flag
do {
if($rs_clients_endRow == 0  && $rs_clients_hloopRow1++ != 0) echo "";
?>

<h4>Client: <?php echo $row_rs_clients['alttext']; ?></h4>
<!--<p>URL: <a href="http://<?php echo $row_rs_clients['description']; ?>" target="_blank">visit site</a></p>-->
<p>Project detail: <a href="<?php bloginfo( 'siteurl' ); ?>/project-detail/?pid=<?php echo $row_rs_clients['pid']; ?>">here</a></p>
<div class="portfolioimg"><a class="colorbox" rel="group" href="<?php bloginfo( 'siteurl' ); ?>/wp-content/gallery/portfolio/<?php echo $row_rs_clients['filename']; ?>">
<img class="aligncenter size-full wp-image-80" alt="<?php echo $row_rs_clients['alttext']; ?>" data-original="<?php bloginfo( 'siteurl' ); ?>/wp-content/gallery/portfolio/<?php echo $row_rs_clients['filename']; ?>" width="800" height="auto"  /></a>
</div>

<hr/>

<?php  $rs_clients_endRow++;
if($rs_clients_endRow >= $rs_clients_columns) {
 $rs_clients_endRow = 0;
  }
} while ($row_rs_clients = mysql_fetch_assoc($rs_clients));
if($rs_clients_endRow != 0) {
while ($rs_clients_endRow < $rs_clients_columns) {
	echo("&nbsp;");
	$rs_clients_endRow++;
}
echo("");
}?>


<!-- recordset navigation  -->
<div>	  
<p>Showing <?php echo ($startRow_rs_clients + 1) ?> to <?php echo min($startRow_rs_clients + $maxRows_rs_clients, $totalRows_rs_clients) ?> of  <?php echo $totalRows_rs_clients ?> 
&nbsp;&nbsp;

	<?php if ($pageNum_rs_clients > 0) { // Show if not first page ?>
            <a href="<?php printf("%s?pageNum_rs_clients=%d%s", $currentPage, 0, $queryString_rs_clients); ?>">&lt;&lt;</a>
            <?php } // Show if not first page ?>
		&nbsp;	
        <?php if ($pageNum_rs_clients > 0) { // Show if not first page ?>
            <a href="<?php printf("%s?pageNum_rs_clients=%d%s", $currentPage, max(0, $pageNum_rs_clients - 1), $queryString_rs_clients); ?>">Prev</a>
            <?php } // Show if not first page ?>
      &nbsp;
	  <?php if ($pageNum_rs_clients < $totalPages_rs_clients) { // Show if not last page ?>
            <a href="<?php printf("%s?pageNum_rs_clients=%d%s", $currentPage, min($totalPages_rs_clients, $pageNum_rs_clients + 1), $queryString_rs_clients); ?>">Next</a>
            <?php } // Show if not last page ?>
      &nbsp;
	  <?php if ($pageNum_rs_clients < $totalPages_rs_clients) { // Show if not last page ?>
            <a href="<?php printf("%s?pageNum_rs_clients=%d%s", $currentPage, $totalPages_rs_clients, $queryString_rs_clients); ?>">&gt;&gt;</a>
            <?php } // Show if not last page ?>
</p>
<p><em>Due to circumstances beyond our control some sites are no longer active and are represented by a screenshot of the original design. </em><br/></p>
</div>

<?php
//mysql_free_result($rs_clients);
?>	

<!-- lazy load portfolio images -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/jquery.lazyload/1.9.3/jquery.lazyload.min.js" type="text/javascript" ></script>
<script>
	$(function() {
	// Add lazy class to all images  
	  $('img').addClass('lazy');
	// initialise lazyload  
		$("img.lazy").lazyload();
	});	
</script>

		