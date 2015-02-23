<?php 
	$url = "http://graph.facebook.com/zuck";
	$user = json_decode(file_get_contents($url));
	$friends = array();
	foreach ($user as $friend) {
		$friends['gender'] = $friend;
	}
	// echo $user['gender'];
 	echo json_encode($friends);
 ?>
