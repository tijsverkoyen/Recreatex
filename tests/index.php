<?php

// default charset used in spoon.
define('SPOON_CHARSET', 'utf-8');

// include path
set_include_path('/Users/tijs/Projects/spoon'. PATH_SEPARATOR . get_include_path());
require_once 'spoon/spoon.php';

// parse headers
SpoonHTTP::setHeaders('content-type: text/html;charset=utf-8');

// require
require_once 'config.php';
require_once '../recreatex.php';

$recreatex = new Recreatex(SERVER, PORT);
$recreatex->setServiceContext(DIVISION_ID, LANGUAGE, SHOP_ID);

// $defaultPaging = Recreatex::buildPagingParameter(1, 2, 'Name', true);

// $response = $recreatex->isAvailable();
// $response = $recreatex->listArticleGroups();
// $response = $recreatex->findArticles('704f62b3-e2e0-4a70-b2f2-0c6eb4602a73', null, null, 'All');
// $response = $recreatex->findArticles('704f62b3-e2e0-4a70-b2f2-0c6eb4602a73', null, null, 'All', array('Group' => true, 'ImageUrl' => true, 'Image' => false, 'Price' => true));
// $response = $recreatex->findArticles('704f62b3-e2e0-4a70-b2f2-0c6eb4602a73', null, null, 'All', array('Group' => true, 'ImageUrl' => true, 'Image' => false, 'Price' => true), $defaultPaging);
// $response = $recreatex->listExpositionTypes();
// $response = $recreatex->findExpositions(null, 'a', null, null, null, null, array('ImageUrl' => true));
// @todo	test me $response = $recreatex->listExpositionPeriods($expositionId);
// @todo	test me $response = $recreatex->validateBasket();
// @todo	test me $response = $recreatex->checkoutBasket();
// @todo	test me $response = $recreatex->lockBasketItems();
// @todo	test me $response = $recreatex->unlockBasketItems();
// $response = $recreatex->listPaymentMethods();
// $response = $recreatex->authenticateUser('franky', 'franky');
// @todo	fix me $response = $recreatex->savePerson(null, null, null, null, null, null, null, null, 'NL');
// @todo	fix me$response = $recreatex->findPerson('bb58c92c-4f57-4a24-8160-f96f4bc3d878', null, $defaultPaging);
// $response = $recreatex->listCultureActivities();
// $response = $recreatex->findCultureEvents();

Spoon::dump($response);