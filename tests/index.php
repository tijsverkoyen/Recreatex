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
	array('Amount' => $totalPrice, 'Currency' => 'EURO', 'PaymentMethodId' => 'b16e0cda-7c53-4e8a-8285-07f9fe3c7e51'),
);


// $response = $recreatex->authenticateUser(USERNAME, PASSWORD);
// $response = $recreatex->authenticateUser('1327508437', '1327508437');
// @todo implement me	$response = $recreatex->checkoutBasket('9e60c807-5f6f-415e-90cb-028c54d1554f', $basketItems, $payments, $totalPrice);
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
// @todo check me when there are expisitions	$response = $recreatex->listExpositionPeriods();
// $response = $recreatex->listExpositionTypes();
// $response = $recreatex->listPaymentMethods();
// $response = $recreatex->lockBasketItems($basketItems);
// $response = $recreatex->savePerson(null, null, array('First' => '[TEST] Tijs', 'Last' => 'Verkoyen', 'Middle' => ''), array('Street' => 'Kerkstraat', 'Number' => 108, 'ZipCode' => '9050', 'Town' => 'Gentbrugge', 'Country' => 'B', 'Box' => ''), null, 'rcx-001@verkoyen.eu', null, null, 'NL', null, null, null, null, null, null, array('Password' => time(), 'Username' => '1327490908'));
// $response = $recreatex->savePerson(null, null, array('First' => '[TEST] Tijs', 'Last' => 'Verkoyen', 'Middle' => ''), array('Street' => 'Kerkstraat', 'Number' => 108, 'ZipCode' => '9050', 'Town' => 'Gentbrugge', 'Country' => 'B', 'Box' => ''), null, time() . '@verkoyen.eu', null, null, 'NL', null, null, null, null, null, null, array('Password' => time(), 'Username' => time()));
// $response = $recreatex->savePerson('fdf0388b-6381-4558-8b79-7f00623b9b7f', null, null, null, null, null, null, null, null, null, null, null, null, null, 'Testing 123');
// $member = $response[0];
// $member['Comments'] = 'Last edited '. date('Y-m-d H:i:s');
// $response = $recreatex->savePersonByObject($member);
// $response = $recreatex->unlockBasketItems(array(array('@attributes' => array('xsi:type' => 'ArticleSaleLockTicket'), 'Id' => 'ec0ab572-ff67-4a37-a846-f3330748e9bb')));
// @todo implement me	$response = $recreatex->validateBasket('9e60c807-5f6f-415e-90cb-028c54d1554f', $basketItems, $payments, $totalPrice);

// output (Spoon::dump())
ob_start();
var_dump($response);
$output = ob_get_clean();

// cleanup the output
$output = preg_replace('/\]\=\>\n(\s+)/m', '] => ', $output);

// print
echo '<pre>' . htmlspecialchars($output, ENT_QUOTES, 'UTF-8') . '</pre>';