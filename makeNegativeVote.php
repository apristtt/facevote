<?php 
	require("conf.php");

	$local_id = $_REQUEST['local_id'];

	$query = mysql_query("UPDATE fbData SET fbNegativePoint = fbNegativePoint - 1 WHERE local_id = '$local_id'") or die(mysql_error());

	header("Location:index.php");
 ?>