<?php 
	$host = "127.0.0.1";
	$user = "root";
	$pass = "";
	$database = "facevote";

	$connect = mysql_connect($host, $user, $pass);
	if(! $connect){
		die(mysql_error());
	} else {
		mysql_select_db($database);
	}
 ?>