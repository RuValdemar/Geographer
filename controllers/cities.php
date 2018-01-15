<?php 
	require '../vendor/autoload.php';
	use MenaraSolutions\Geographer\Earth;
	use MenaraSolutions\Geographer\Country;

	$earth = new Earth();		

	$country = $earth->findOneByCode($_POST['country']);
	$states = $country->getStates();
	$state = $states->findOne(['code' => $_POST['state']]);

	echo json_encode($state->getCities()->sortBy('name')->toArray());
?>