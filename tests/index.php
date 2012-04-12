<?php

// require
require_once 'config.php';
require_once '../recreatex.php';

$recreatex = new Recreatex(SERVER, PORT);
$recreatex->setServiceContext(DIVISION_ID, LANGUAGE, SHOP_ID);

$defaultPaging = Recreatex::buildPagingParameter(1, 2, 'Name', true);
$basketItems = array(
	array('Quantity' => 1, 'UnitPrice' => 3.9, 'Article' => array('Id' => 'ec0ab572-ff67-4a37-a846-f3330748e9bb', 'Price' => 3.9), '@attributes' => array('xsi:type' => 'ArticleSale')),
	array('Quantity' => 2, 'UnitPrice' => 3.25, 'Article' => array('Id' => '8f7a16d1-c1b1-48c0-acde-01b322002722', 'Price' => 3.25), '@attributes' => array('xsi:type' => 'ArticleSale'))
);
$totalPrice = ((3.9 * 1) + (3.25) * 2);
$payments = array(
	array( 'Amount' => $totalPrice, 'Currency' => 'EURO', 'PaymentMethodId' => 'b16e0cda-7c53-4e8a-8285-07f9fe3c7e51'),
);

// $response = $recreatex->isAvailable();
// $response = $recreatex->authenticateUser(USERNAME, PASSWORD);	// @todo	test me with working credentials
// @todo	$response = $recreatex->savePersonSubcategories();
// $response = $recreatex->savePerson(null, null, array('First' => '[TEST] Tijs', 'Last' => 'Verkoyen', 'Middle' => ''), array('Street' => 'Kerkstraat', 'Number' => 108, 'ZipCode' => '9050', 'Town' => 'Gentbrugge', 'Country' => 'B', 'Box' => ''), null, 'rcx-001@verkoyen.eu', null, null, 'NL', null, null, null, null, null, null, array('Password' => time(), 'Username' => time()));
// $response = $recreatex->savePerson(null, null, array('First' => '[TEST] Tijs', 'Last' => 'Verkoyen', 'Middle' => ''), array('Street' => 'Kerkstraat', 'Number' => 108, 'ZipCode' => '9050', 'Town' => 'Gentbrugge', 'Country' => 'B', 'Box' => ''), null, time() . '@verkoyen.eu', null, null, 'NL', null, null, null, null, null, null, array('Password' => time(), 'Username' => time()));
// $response = $recreatex->savePerson('a1ef9d3f-3db8-47ac-819a-d988450419ab', null, null, null, null, null, null, null, null, null, null, null, null, null, 'Testing 123');
// $member = $response[0];
// $member['Comments'] = 'Last edited '. date('Y-m-d H:i:s');
// $response = $recreatex->savePersonByObject($member);
// $response = $recreatex->forgotPassword(USERNAME);
// $response = $recreatex->findPerson();
// $response = $recreatex->findPerson('8fdd4de4-aff1-4454-87c7-1972d1558a8a');
// $response = $recreatex->findPerson(null, null, 'rcx-001@verkoyen.eu');
// $response = $recreatex->findPerson(null, null, 'rcx-001@verkoyen.eu', null, null, null, null, array('Categories' => true));
// $response = $recreatex->findPerson(null, null, null, null, null, null, null, array(), $defaultPaging);
// @todo	$response = $recreatex->savePersonPriceGroups();
// $response = $recreatex->listActivityTypes();
// @todo	$response = $recreatex->findActivities(null, null, null, null, 'b');
// $response = $recreatex->listArticleGroups('Sale', true);
// $response = $recreatex->listArticleGroups('Rental');
// $response = $recreatex->listArticleGroups('All', true, false);
// @todo	$response = $recreatex->findArticleCategories();
// $response = $recreatex->findArticles();
// $response = $recreatex->findArticles('8f7a16d1-c1b1-48c0-acde-01b322002722');
// $response = $recreatex->findArticles(null, null, 'Leffe');
// @todo	$response = $recreatex->listExpositionTypes();
// @todo	$response = $recreatex->findExpositionTypes();
// @todo	$response = $recreatex->findExpositions();
// @todo	$response = $recreatex->listExpositionPeriods();
// @todo	$response = $recreatex->listAudiences();
// @todo	$response = $recreatex->validateBasket('9e60c807-5f6f-415e-90cb-028c54d1554f', $basketItems, $payments, $totalPrice);
// @todo	$response = $recreatex->validateBasketItem();
// @todo	$response = $recreatex->checkoutBasket('9e60c807-5f6f-415e-90cb-028c54d1554f', $basketItems, $payments, $totalPrice);
// @todo	$response = $recreatex->lockBasketItems($basketItems);
// @todo	$response = $recreatex->unlockBasketItems(array(array('Id' => '00000000-0000-0000-0000-000000000000')));
// @todo	$response = $recreatex->reCalculateBasket();
// @todo	$response = $recreatex->extendLockPeriod(array(array('Id' => '00000000-0000-0000-0000-000000000000')));
// $response = $recreatex->listPaymentMethods();
// $response = $recreatex->listCultureActivities();
// $response = $recreatex->findCultureEvents();
// $response = $recreatex->findCultureEvents('6e0b81f4-f588-4f38-a951-9d9a2981676e');
// $response = $recreatex->findCultureEvents(null, null, 'Abba The Show');
// $response = $recreatex->listHalls();
// @todo $response = $recreatex->getHallSeating('40dde1cc-ea9a-4947-872a-b92c310aca60');
// @todo	$response = $recreatex->getSeatAllocations('40dde1cc-ea9a-4947-872a-b92c310aca60');
// @todo	$response = $recreatex->findCultureReservations('8fdd4de4-aff1-4454-87c7-1972d1558a8a');
// @todo	$response = $recreatex->findPriceGroups();
// $response = $recreatex->listCategories();

// output (Spoon::dump())
ob_start();
var_dump($response);
$output = ob_get_clean();

// cleanup the output
$output = preg_replace('/\]\=\>\n(\s+)/m', '] => ', $output);

// print
echo '<pre>' . htmlspecialchars($output, ENT_QUOTES, 'UTF-8') . '</pre>';