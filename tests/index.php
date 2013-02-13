<?php

//require
require_once '../../../autoload.php';
require_once 'config.php';
session_start();

use \TijsVerkoyen\Recreatex\Recreatex;

// create instance
$recreatex = new Recreatex(SERVER, PORT);
$recreatex->createServiceContext(SHOP_ID, DIVISION_ID, LANGUAGE);

try {
	// AuthenticateUser
	$credential = new \TijsVerkoyen\Recreatex\ComplexType\Credential();
	$credential->setUsername(USERNAME);
	$credential->setPassword(PASSWORD);
	$response = $recreatex->AuthenticateUser($credential);

	// IsAvailable
	$response = $recreatex->IsAvailable();

	// FindPerson
	$criteria = new \TijsVerkoyen\Recreatex\ComplexType\FindPersonsCriteria();
	$criteria->setEmail('php-recreatex@verkoyen.eu');
	$response = $recreatex->FindPerson($criteria);
} catch (Exception $e) {
  var_dump($e);
}

// output
var_dump($response);
