<?php

// require
require_once 'config.php';
require_once '../recreatex.php';

$recreatex = new Recreatex(SERVER, PORT);
$recreatex->setServiceContext(DIVISION_ID, LANGUAGE, SHOP_ID);

$defaultPaging = Recreatex::buildPagingParameter(1, 2, 'Name', true);

// $response = $recreatex->authenticateUser(USERNAME, PASSWORD);
// $response = $recreatex->authenticateUser('1327508437', '1327508437');
// @todo implement me $response = $recreatex->checkoutBasket('827dfe49-f95f-48fc-8242-1a5e52d9daa9', array(), array(), 10);
// $response = $recreatex->findArticles();
// $response = $recreatex->findArticles('ec0ab572-ff67-4a37-a846-f3330748e9bb');
// $response = $recreatex->findArticles(null, null, 'Appeljenever');
// $response = $recreatex->findCultureEvents();
// $response = $recreatex->findCultureEvents('7aa16bb5-1bda-42f6-a8b0-4cec0f849a45');
// $response = $recreatex->findCultureEvents(null, null, 'Abba The Show');
// @todo check me when there are expisitions	$response = $recreatex->findExpositions();
// $response = $recreatex->findPerson();
// $response = $recreatex->findPerson('9e60c807-5f6f-415e-90cb-028c54d1554f');
// $response = $recreatex->findPerson(null, '1327508480');
// $response = $recreatex->findPerson(null, null, 'rcx-001@verkoyen.eu');
// $response = $recreatex->findPerson(null, null, 'johan.blauwblomme@baltagroup.com', array('Categories' => true));
// $response = $recreatex->findPerson(null, null, null, array(), $defaultPaging);
// $response = $recreatex->isAvailable();
// $response = $recreatex->listActivityTypes();
// $response = $recreatex->listArticleGroups('Sale', true);
// $response = $recreatex->listArticleGroups('Rental');
// $response = $recreatex->listArticleGroups('All', true, false);
// $response = $recreatex->listCultureActivities();
// @todo implement me	$response = $recreatex->listExpositionPeriods();
// $response = $recreatex->listExpositionTypes();
// $response = $recreatex->listPaymentMethods();
// @todo implement me	$response = $recreatex->lockBasketItems();
// $response = $recreatex->savePerson(null, null, array('First' => '[TEST] Tijs', 'Last' => 'Verkoyen', 'Middle' => ''), array('Street' => 'Kerkstraat', 'Number' => 108, 'ZipCode' => '9050', 'Town' => 'Gentbrugge', 'Country' => 'B', 'Box' => ''), null, 'rcx-001@verkoyen.eu', null, null, 'NL', null, null, null, null, null, null, array('Password' => time(), 'Username' => '1327490908'));
// $response = $recreatex->savePerson(null, null, array('First' => '[TEST] Tijs', 'Last' => 'Verkoyen', 'Middle' => ''), array('Street' => 'Kerkstraat', 'Number' => 108, 'ZipCode' => '9050', 'Town' => 'Gentbrugge', 'Country' => 'B', 'Box' => ''), null, time() . '@verkoyen.eu', null, null, 'NL', null, null, null, null, null, null, array('Password' => time(), 'Username' => time()));
// $response = $recreatex->savePerson('fdf0388b-6381-4558-8b79-7f00623b9b7f', null, null, null, null, null, null, null, null, null, null, null, null, null, 'Testing 123');
// $member = $response[0];
// $member['Comments'] = 'Last edited '. date('Y-m-d H:i:s');
// $response = $recreatex->savePersonByObject($member);
// @todo implement me $response = $recreatex->unlockBasketItems();
// $response = $recreatex->unlockBasketItems(array(array('@attributes' => array('xsi:type' => 'ArticleSaleLockTicket'), 'Id' => 'ec0ab572-ff67-4a37-a846-f3330748e9bb')));
// @todo implement me $response = $recreatex->validateBasket();

Spoon::dump($response);