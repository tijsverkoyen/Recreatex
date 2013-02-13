<?php

//require
require_once '../../../autoload.php';
require_once 'config.php';
session_start();

use \TijsVerkoyen\Recreatex\Recreatex;
use \TijsVerkoyen\Recreatex\ComplexType\Credential;

// create instance
$recreatex = new Recreatex(SERVER, PORT);
$recreatex->createServiceContext(SHOP_ID, DIVISION_ID, LANGUAGE);

try {
    // AuthenticateUser
//    $credential = new Credential();
//    $credential->setUsername(USERNAME);
//    $credential->setPassword(PASSWORD);
//    $response = $recreatex->authenticateUser($credential);
//    $response = $recreatex->authenticateUser(new Credential());


    // IsAvailable
//    $response = $recreatex->isAvailable();

    // FindPerson
//    $criteria = new \TijsVerkoyen\Recreatex\ComplexType\FindPersonsCriteria();
//    $criteria->setEmail('vorst@verkoyen.eu');
//    $response = $recreatex->findPerson($criteria);
} catch (Exception $e) {
    var_dump($e);
}

// output
var_dump($response);
