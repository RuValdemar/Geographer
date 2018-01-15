<?php 
	require '../vendor/autoload.php';
	use MenaraSolutions\Geographer\Earth;
	use MenaraSolutions\Geographer\Country;

	$earth = new Earth();		

	$country = $earth->findOneByCode($_POST['country']);

	echo json_encode($country->getStates()->sortBy('name')->toArray());
?>