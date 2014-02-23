<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>facevote</title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="css/bootstrap-theme.css">
	<style type="text/css">
	body{
		background-color: #2c3e50;
	}
	</style>
</head>
<body>
<?php 
	require("conf.php");
	$result = mysql_query("SELECT * FROM fbData ORDER by RAND() LIMIT 1") or die(mysql_error());
	while ($query = mysql_fetch_array($result)) {
?>
		<div class="container">
			<div class="panel panel-default" style="margin-top: 15px;">
				<div class="panel-body" style="margin-top: 5%; margin-bottom: 5%;">
					<div align="center">
						<img src="http://graph.facebook.com/<? echo $query['fbUsername']?>/picture?redirect=1&height=200&width=200"><br><br>
					
				<a href="makePositiveVote.php?local_id=<? echo $query['local_id'] ?>">
					<button class="btn btn-primary btn-lg">
						<span class="glyphicon glyphicon-thumbs-up"></span> <span class="badge"><? echo $query['fbPositivePoint'] ?></span>
					</button>
				</a>
				<a href="makeNegativeVote.php?local_id=<? echo $query['local_id'] ?>">
					<button class="btn btn-danger btn-lg">
						<span class="glyphicon glyphicon-thumbs-down"></span> <span class="badge"><? echo $query['fbNegativePoint'] ?></span>
					</button>
				</a><br>
					</div>
				</div>
			</div>
		</div>
	<? } ?>

</body>
</html>
?>