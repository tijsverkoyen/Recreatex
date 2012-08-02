<?php

//require
require_once 'config.php';
require_once '../recreatex.php';

$recreatex = new Recreatex(SERVER, PORT);
$recreatex->setServiceContext(DIVISION_ID, LANGUAGE, SHOP_ID);

$defaultPaging = Recreatex::buildPagingParameter(1, 2, 'Name', true);

// example for authenticateUser
//$username = time();
//$password = time();
//$response = $recreatex->savePerson(
//	null, null,
//	array('First' => '[TEST] Tijs', 'Last' => 'Verkoyen', 'Middle' => ''),
//	array(
//		 'Street' => 'Some', 'Number' => 108, 'ZipCode' => '9050', 'Town' => 'Gentbrugge', 'Country' => 'B', 'Box' => ''
//	),
//	null, time() . '@foobar.com',
//	null, null, 'NL', null, null, null, null, null, null,
//	array('Password' => $password, 'Username' => $username)
//);
//$response = $recreatex->authenticateUser($username, $password);

// example for savePerson
//$response = $recreatex->savePerson(
//	null, null,
//	array('First' => '[TEST] Tijs', 'Last' => 'Verkoyen', 'Middle' => ''),
//	array(
//		 'Street' => 'Some', 'Number' => 108, 'ZipCode' => '9050', 'Town' => 'Gentbrugge', 'Country' => 'B', 'Box' => ''
//	),
//	null, 'foo@foobar.com',
//	null, null, 'NL', null, null, null, null, null, null,
//	array('Password' => time(), 'Username' => time())
//);

// example for savePersonByObject
//$person = $recreatex->findPerson(null, null, 'foo@foobar.com');
//$person = $person[0];
//$person['Comments'] = 'Last edited '. date('Y-m-d H:i:s');
//$response = $recreatex->savePersonByObject($person);

// example for findPriceGroups @todo	empty response
//$response = $recreatex->findPriceGroups();

// example for savePersonPriceGroups
//$response = $recreatex->savePersonPriceGroups(
//	'c9fea39b-faad-442f-ab09-1233099533b8', null, null,
//	array(
//		 array('Id' => 'ff927dbb-440a-489e-8c18-61cc919d3e44')
//	)
//);

// example for listCategories
//$response = $recreatex->listCategories();

// example for savePersonSubcategories
//$response = $recreatex->savePersonSubcategories(
//	'c9fea39b-faad-442f-ab09-1233099533b8', null, null,
//	array(
//		array('Id' => 'aaf5d152-bc45-462b-bf27-a8a99c270497'),
//		array('Id' => '3bbcb4e4-d92f-4ca8-a033-a00b4970d0f9'),
//	)
//);

// example for forgotPassword
//$response = $recreatex->forgotPassword('foobar');

// example for findPerson
//$response = $recreatex->findPerson();
//$response = $recreatex->findPerson('c9fea39b-faad-442f-ab09-1233099533b8');

// example for findExpostions @todo	empty response
//$response = $recreatex->findExpositions();

// example for listExpositionPeriods @todo	empty response
//$response = $recreatex->listExpositionPeriods();

// example for findExpositionType @todo	empty response
//$response = $recreatex->findExpositionTypes();

// example for listExpositionTypes @todo	empty response
//$response = $recreatex->listExpositionTypes();

// example for listAudiences @todo	empty response
//$response = $recreatex->listAudiences();

// example for listActivityTypes @todo	empty response
//$response = $recreatex->listActivityTypes();

// example for findActivities @todo	empty response
//$response = $recreatex->findActivities();

// example for findArticles
//$response = $recreatex->findArticles();
//$response = $recreatex->findArticles(null, null, 'Porto');

// example for findArticleCategories @todo	error
//$response = $recreatex->findArticleCategories(null, null, Recreatex::buildPagingParameter(1, 10));

// example for listArticleGroups
//$response = $recreatex->listArticleGroups();

// example for listCultureActivities
//$response = $recreatex->listCultureActivities();

// example for listCultureEventCategories @todo empty response
//$response = $recreatex->listCultureEventCategories();

// example for findCultureEvents
//$response = $recreatex->findCultureEvents();
//$response = $recreatex->findCultureEvents(null, null, 'Abba The Show');

// example for listHalls
//$response = $recreatex->listHalls();

// example for getHallSeating
//$response = $recreatex->getHallSeating('40dde1cc-ea9a-4947-872a-b92c310aca60');

// example for getSeatAllocations
//$response = $recreatex->getSeatAllocations('40dde1cc-ea9a-4947-872a-b92c310aca60');

//example for findCultureReservations @todo	empty response
//$response = $recreatex->findCultureReservations('8fdd4de4-aff1-4454-87c7-1972d1558a8a');

// example for listPaymentMethods
//$response = $recreatex->listPaymentMethods();

// example for lockBasketItems
//$event = $recreatex->findCultureEvents(null, null, 'Tijs');
//$event = $event[0];
//$response = $recreatex->lockBasketItems(
//	array(
//	 	array(
//		 'BasketItem' => array(
//			'@attributes' => array('xsi:type' => 'CultureEventReservation'),
//			'Quantity' => 1,
//			'CultureEventId' => $event['Id'],
//			'Entries' => array(
//				'CultureEventReservationEntry' => array(
//					'@attributes' => array('xsi:type' => 'BestAvailableSeatsCultureEventReservationEntry'),
//					'PriceGroupId' => $event['Prices']['CultureEventPrice']['Group']['Id'],
//					'ParticipantCount' => 2
//				)
//			),
//			'ReservationDate' => date('c'),
//		 )
//	 ),
// )
//);

// example for unlockBasketItems
//$response = $recreatex->unlockBasketItems(
//	array(
//		 array('Id' => '0278dfc9-20c5-43dc-a0f8-60574ec5e9b0')
//	)
//);

// example for extendLockPeriod
//$response = $recreatex->extendLockPeriod(
//	array(
//		 array(
//			'LockTicket' => array(
//				'@attributes' => array('xsi:type' => 'CultureEventReservationLockTicket'),
//				'Id' => '03f4493c-687c-4b4c-9e62-39c5025a9f08'
//			)
//		)
//	)
//);

// example for reCalculateBasket
//$event = $recreatex->findCultureEvents(null, null, 'Tijs');
//$event = $event[0];
//$response = $recreatex->reCalculateBasket(
//	array(
//	 	array(
//			'BasketItem' => array(
//				'@attributes' => array('xsi:type' => 'CultureEventReservation'),
//				'Quantity' => 1,
//				'UnitPrice' => 0,
//				'CultureEventId' => $event['Id'],
//				'Entries' => array(
//					'CultureEventReservationEntry' => array(
//						'@attributes' => array('xsi:type' => 'BestAvailableSeatsCultureEventReservationEntry'),
//						'PriceGroupId' => $event['Prices']['CultureEventPrice']['Group']['Id'],
//						'ParticipantCount' => 2
//					)
//				),
//				'LockTicket' => array(
//					'@attributes' => array('xsi:type' => 'CultureEventReservationLockTicket'),
//					'Id' => '2a4baa3a-fe89-420e-bea0-6aa8816ca35d',
//				),
//				'ReservationDate' => date('c'),
//			)
//		)
//	),
//	122,
//	array(),
//	'433abb44-1f80-4dd5-b167-f8080c10fd12'
//);

// example for validateBasket
//$event = $recreatex->findCultureEvents(null, null, 'Tijs');
//$event = $event[0];
//$paymentMethod = $recreatex->listPaymentMethods();
//$paymentMethod = $paymentMethod[0];
//$lock = $recreatex->lockBasketItems(
//	array(
//		array(
//			'BasketItem' => array(
//				'@attributes' => array('xsi:type' => 'CultureEventReservation'),
//				'Quantity' => 1,
//				'CultureEventId' => $event['Id'],
//				'Entries' => array(
//					'CultureEventReservationEntry' => array(
//						'@attributes' => array('xsi:type' => 'BestAvailableSeatsCultureEventReservationEntry'),
//						'PriceGroupId' => $event['Prices']['CultureEventPrice']['Group']['Id'],
//						'ParticipantCount' => 2
//					)
//				),
//				'ReservationDate' => date('c'),
//			)
//		),
//	)
//);
//$response = $recreatex->validateBasket(
//	array(
//	 	array(
//			'BasketItem' => array(
//				'@attributes' => array('xsi:type' => 'CultureEventReservation'),
//				'Quantity' => 1,
//				'UnitPrice' => 0,
//				'CultureEventId' => $event['Id'],
//				'Entries' => array(
//					'CultureEventReservationEntry' => array(
//						'@attributes' => array('xsi:type' => 'BestAvailableSeatsCultureEventReservationEntry'),
//						'PriceGroupId' => $event['Prices']['CultureEventPrice']['Group']['Id'],
//						'ParticipantCount' => 2
//					)
//				),
//				'LockTicket' => array(
//					'@attributes' => array('xsi:type' => 'CultureEventReservationLockTicket'),
//					'Id' => $lock['BasketItems'][0]['LockTicket']['Id'],
//				),
//				'ReservationDate' => date('c'),
//			)
//		)
//	),
//	142,
//	array(
//		array(
//			'Id' => $paymentMethod['Id'],
//			'Amount' => 142,00
//		),
//	),
//	'433abb44-1f80-4dd5-b167-f8080c10fd12'
//);

//output (Spoon::dump())
ob_start();
var_dump($response);
$output = ob_get_clean();

//cleanup the output
$output = preg_replace('/\]\=\>\n(\s+)/m', '] => ', $output);

//print
echo '<pre>' . htmlspecialchars($output, ENT_QUOTES, 'UTF-8') . '</pre>';