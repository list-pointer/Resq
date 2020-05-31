<?php 
	require 'resq.php';
	$edu = new resq;
	$edu->setId($_REQUEST['id']);
	$edu->setLat($_REQUEST['lat']);
	$edu->setLng($_REQUEST['lng']);
	$status = $edu->updateregister_garageWithLatLng();
	if($status == true) {
		echo "Updated...";
	} else {
		echo "Failed...";
	}
 ?>