<?php 
require 'vendor/autoload.php';
use MenaraSolutions\Geographer\Earth;
use MenaraSolutions\Geographer\Country;

$earth = new Earth();

$countries = $earth->getCountries()->toArray();

$country = $earth->findOneByCode('BR'); 

$states = $country->getStates();

$state = $states->findOne(['code' => 'BR-GO']);

$cities = $state->getCities();
dd($cities->toArray());