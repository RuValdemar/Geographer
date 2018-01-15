<?php 
require 'vendor/autoload.php';
use MenaraSolutions\Geographer\Earth;
use MenaraSolutions\Geographer\Country;

$earth = new Earth();
#dd($earth); /*dd debugea*/
#dd($earth->getCountries()->toArray());

$countries = $earth->getCountries()->toArray();

$country = $earth->findOneByCode('BR'); /*Devuelve la información del pais*/
#dd($country->toArray());

$states = $country->getStates();
#dd($states->toArray());

$state = $states->findOne(['code' => 'BR-GO']);
#dd($state->toArray());

$cities = $state->getCities();
dd($cities->toArray());