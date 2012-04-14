<?php

// require
require_once 'config.php';
require_once '../recreatex.php';

$recreatex = new Recreatex(SERVER, PORT);
$recreatex->setServiceContext(DIVISION_ID, LANGUAGE, SHOP_ID);

$defaultPaging = Recreatex::buildPagingParameter(1, 2, 'Name', true);
// $response = $recreatex->isAvailable();
// $response = $recreatex->authenticateUser(USERNAME, PASSWORD);
// $subcategories = array(
// 	array('Subcategory' => array('Id' => 'aaf5d152-bc45-462b-bf27-a8a99c270497', 'CategoryId' => 'fc950daf-e3a5-4b91-9edd-8c2dc70b00e5')),
// 	array('Subcategory' => array('Id' => '3bbcb4e4-d92f-4ca8-a033-a00b4970d0f9', 'CategoryId' => 'fc950daf-e3a5-4b91-9edd-8c2dc70b00e5')),
// 	array('Subcategory' => array('Id' => 'd1f667dd-a339-481c-899c-103077f8cc25', 'CategoryId' => 'a332558b-fcef-40df-89ff-565bb2286300')),
// 	array('Subcategory' => array('Id' => '8350674f-2aa1-4826-b032-563996b15ce7', 'CategoryId' => 'a332558b-fcef-40df-89ff-565bb2286300')),
// );
// $person = $recreatex->findPerson('96d66f0f-5a54-478b-83e0-e0a4a70b2d52');
// $person = $person[0];
// $person['Settings']['Subcategories'] = $subcategories;
// $response = $recreatex->savePersonSubcategoriesByObject($person);
// $response = $recreatex->savePerson(null, null, array('First' => '[TEST] Tijs', 'Last' => 'Verkoyen', 'Middle' => ''), array('Street' => 'Kerkstraat', 'Number' => 108, 'ZipCode' => '9050', 'Town' => 'Gentbrugge', 'Country' => 'B', 'Box' => ''), null, 'rcx-001@verkoyen.eu', null, null, 'NL', null, null, null, null, null, null, array('Password' => time(), 'Username' => time()));
// $response = $recreatex->savePerson('96d66f0f-5a54-478b-83e0-e0a4a70b2d52', null, array('First' => '[TEST] Tijs', 'Last' => 'Verkoyen', 'Middle' => ''), array('Street' => 'Kerkstraat', 'Number' => 108, 'ZipCode' => '9050', 'Town' => 'Gentbrugge', 'Country' => 'B', 'Box' => ''), array(), 'rcx-002@verkoyen.eu', '1985-06-20', null, 'NL', null, null, null, null, null, null, array('Password' => time(), 'Username' => time()));
// $person = $recreatex->findPerson('96d66f0f-5a54-478b-83e0-e0a4a70b2d52');
// $person = $person[0];
// $person['Comments'] = 'Last edited '. date('Y-m-d H:i:s');
// $response = $recreatex->savePersonByObject($person);
// $response = $recreatex->forgotPassword(USERNAME);
// $response = $recreatex->findPerson(null, null, null, null, null, null, null, array('Categories' => true, 'PriceGroups' => true));
// $response = $recreatex->findPerson('03121ba4-9796-4b38-a756-e840013c6f11', null, null, null, null, null, null, array('Categories' => true, 'PriceGroups' => true));
// $response = $recreatex->findPerson(null, null, 'rcx-001@verkoyen.eu', null, null, null, null, array('Categories' => true, 'PriceGroups' => true));
// $response = $recreatex->findPerson(null, null, 'rcx-002@verkoyen.eu', null, null, null, null, array('Categories' => true));
// $response = $recreatex->findPerson(null, null, null, null, null, null, null, array(), $defaultPaging);
// $priceGroups = array(array('PersonPriceGroup' => array('Id' => 'ff927dbb-440a-489e-8c18-61cc919d3e44')));
// $person = $recreatex->findPerson('96d66f0f-5a54-478b-83e0-e0a4a70b2d52');
// $person = $person[0];
// $person['Settings']['PriceGroups'] = $priceGroups;
// @todo	error	$response = $recreatex->savePersonPriceGroupsByObject($person);
// $response = $recreatex->listActivityTypes();
// @todo	empty response	$response = $recreatex->findActivities(null, null, null, null, 'b', null, null, null, array(), $defaultPaging);
// $response = $recreatex->listArticleGroups('Sale');
// $response = $recreatex->listArticleGroups('Rental');
// $response = $recreatex->listArticleGroups('All', true, false);
// @todo	empty response $response = $recreatex->findArticleCategories();
// $response = $recreatex->findArticles();
// $response = $recreatex->findArticles('8f7a16d1-c1b1-48c0-acde-01b322002722');
// $response = $recreatex->findArticles(null, null, 'Leffe');
// @todo	empty response	$response = $recreatex->listExpositionTypes();
// @todo	empty response	$response = $recreatex->findExpositionTypes();
// @todo	empty response	$response = $recreatex->findExpositions();
// @todo	empty response	$response = $recreatex->listExpositionPeriods();
// @todo	empty response	$response = $recreatex->listAudiences();

// @todo	empty response	$response = $recreatex->validateBasket('9e60c807-5f6f-415e-90cb-028c54d1554f', $basketItems, $payments, $totalPrice);
// @todo	error with price	$response = $recreatex->validateBasketItem();
// @todo	empty response	$response = $recreatex->checkoutBasket('9e60c807-5f6f-415e-90cb-028c54d1554f', $basketItems, $payments, $totalPrice);
// $product1 = $recreatex->findArticles('8f7a16d1-c1b1-48c0-acde-01b322002722');
// $product2 = $recreatex->findArticles('940eaa14-5582-49a1-9be7-d881127c3449');
// $basketItems = array(
// 	array('BasketItem' => array('@attributes' => array('xsi:type' => 'ArticleSale'), 'Quantity' => 5, 'Article' => $product1[0])),
// 	array('BasketItem' => array('@attributes' => array('xsi:type' => 'ArticleSale'), 'Quantity' => 10, 'Article' => $product2[0]))
// );
// $response = $recreatex->lockBasketItems($basketItems);
// $response = $recreatex->unlockBasketItems(array(array('Id' => '00000000-0000-0000-0000-000000000000')));
// $response = $recreatex->reCalculateBasket($basketItems);
// @todo	empty response	$response = $recreatex->extendLockPeriod(array(array('Id' => '00000000-0000-0000-0000-000000000000')));
// $response = $recreatex->listPaymentMethods();
// $response = $recreatex->listCultureActivities();
// $response = $recreatex->findCultureEvents();
// $response = $recreatex->findCultureEvents('6e0b81f4-f588-4f38-a951-9d9a2981676e');
// $response = $recreatex->findCultureEvents(null, null, 'Abba The Show');
// $response = $recreatex->listHalls();
// $response = $recreatex->getHallSeating('40dde1cc-ea9a-4947-872a-b92c310aca60');
// $response = $recreatex->getSeatAllocations('40dde1cc-ea9a-4947-872a-b92c310aca60');
// @todo	empty response $response = $recreatex->findCultureReservations('8fdd4de4-aff1-4454-87c7-1972d1558a8a');
// $response = $recreatex->findPriceGroups();
// $response = $recreatex->findPriceGroups('', 'Sales');
// $response = $recreatex->listCategories();

// output (Spoon::dump())
ob_start();
var_dump($response);
$output = ob_get_clean();

// cleanup the output
$output = preg_replace('/\]\=\>\n(\s+)/m', '] => ', $output);

// print
echo '<pre>' . htmlspecialchars($output, ENT_QUOTES, 'UTF-8') . '</pre>';