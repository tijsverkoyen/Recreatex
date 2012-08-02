<?php

require_once 'config.php';
require_once '../recreatex.php';

require_once 'PHPUnit/Framework/TestCase.php';

/**
 * Recreatex test case.
 */
class RecreatexTest extends PHPUnit_Framework_TestCase
{
	/**
	 * @var Recreatex
	 */
	private $recreatex;

	/**
	 * Prepares the environment before running a test.
	 */
	protected function setUp()
	{
		parent::setUp();
		$this->recreatex = new Recreatex(SERVER, PORT);
		$this->recreatex->setServiceContext(DIVISION_ID, LANGUAGE, SHOP_ID);
	}

	/**
	 * Cleans up the environment after running a test.
	 */
	protected function tearDown()
	{
		$this->recreatex = null;
		parent::tearDown();
	}

	/**
	 * Tests Recreatex->getServer()
	 */
	public function testGetServer()
	{
		$this->recreatex->setServer('http://example.com');
		$this->assertEquals('http://example.com', $this->recreatex->getServer());
	}

	/**
	 * Tests Recreatex->getTimeOut()
	 */
	public function testGetTimeOut()
	{
		$this->recreatex->setTimeOut(5);
		$this->assertEquals(5, $this->recreatex->getTimeOut());
	}

	/**
	 * Tests Recreatex->getUserAgent()
	 */
	public function testGetUserAgent()
	{
		$this->recreatex->setUserAgent('testing/1.0.0');
		$this->assertEquals('PHP Recreatex/' . Recreatex::VERSION . ' testing/1.0.0', $this->recreatex->getUserAgent());
	}

	/**
	 * Tests Recreatex->authenticateUser()
	 */
	public function testAuthenticateUser()
	{
		$var = $this->recreatex->authenticateUser('FALSE_USERNAME', 'FALSE_PASSWORD');

		$this->assertArrayHasKey('HasSucceeded', $var);
		$this->assertFalse($var['HasSucceeded']);

		$username = time();
		$password = time();
		$response = $this->recreatex->savePerson(
			null, null,
			array('First' => '[TEST] Tijs', 'Last' => 'Verkoyen', 'Middle' => ''),
			array('Street' => 'Some', 'Number' => 108, 'ZipCode' => '9050', 'Town' => 'Gentbrugge', 'Country' => 'B', 'Box' => ''),
			null,
			time() . '@foobar.com', null, null, 'NL', null, null, null, null, null, null,
			array('Password' => $password, 'Username' => $username)
		);

		$var = $this->recreatex->authenticateUser($username, $password);

		$this->assertArrayHasKey('HasSucceeded', $var);
		$this->assertTrue($var['HasSucceeded']);
	}

	/**
	 * Tests Recreatex->savePerson()
	 */
	public function testSavePerson()
	{
		$var = $this->recreatex->savePerson(null, null, array('First' => '[TEST] Tijs', 'Last' => 'Verkoyen', 'Middle' => ''), array('Street' => 'Kerkstraat', 'Number' => 108, 'ZipCode' => '9050', 'Town' => 'Gentbrugge', 'Country' => 'B', 'Box' => ''), null, 'rcx-001@verkoyen.eu', null, null, 'NL', null, null, null, null, null, null, array('Password' => time(), 'Username' => microtime(true)));

		$this->assertArrayHasKey('Id', $var);
	}

	/**
	 * Tests Recreatex->savePersonByObject()
	 */
	public function testSavePersonByObject()
	{
		$var = $this->recreatex->savePerson(null, null, array('First' => '[TEST] Tijs', 'Last' => 'Verkoyen', 'Middle' => ''), array('Street' => 'Kerkstraat', 'Number' => 108, 'ZipCode' => '9050', 'Town' => 'Gentbrugge', 'Country' => 'B', 'Box' => ''), null, 'rcx-001@verkoyen.eu', null, null, 'NL', null, null, null, null, null, null, array('Password' => time(), 'Username' => microtime(true)));

		// get member
		$object = $this->recreatex->findPerson(null, null, 'rcx-001@verkoyen.eu');
		$member = $object[0];
		$member['Comments'] = 'Edited at ' . date('Y-m-d H:i:s');

		$var = $this->recreatex->savePersonByObject($member);

		$this->assertArrayHasKey('Id', $var);
	}

	/**
	 * Test Recreatex->findPriceGroups()
	 */
	public function testFindPriceGroups()
	{
		$var = $this->recreatex->findPriceGroups();

		$this->assertInternalType('array', $var);
		foreach($var as $row)
		{
			$this->assertArrayHasKey('Id', $row);
			$this->assertArrayHasKey('Name', $row);
			$this->assertArrayHasKey('Type', $row);
		}
	}

	/**
	 * Tests Recreatex->savePersonPriceGroups()
	 */
	public function testSavePersonPriceGroups()
	{
		$person = $this->recreatex->savePerson(
			null, null,
			array('First' => '[TEST] Tijs', 'Last' => 'Verkoyen', 'Middle' => ''),
			array('Street' => 'Some', 'Number' => 108, 'ZipCode' => '9050', 'Town' => 'Gentbrugge', 'Country' => 'B', 'Box' => ''),
			null,
			time() . '@foobar.com', null, null, 'NL', null, null, null, null, null, null,
			array('Password' => time(), 'Username' => time())
		);

		$priceGroups = array(array('Id' => 'ff927dbb-440a-489e-8c18-61cc919d3e44'));
		$var = $this->recreatex->savePersonPriceGroups($person['Id'], null, null, $priceGroups);

		$this->assertInternalType('array', $var);
		$this->assertArrayHasKey('Id', $var);
	}

	/**
	 * Test Recreatex->listCategories()
	 */
	public function testListCategories()
	{
		$var = $this->recreatex->listCategories();

		$this->assertInternalType('array', $var);
		foreach($var as $row)
		{
			$this->assertArrayHasKey('Id', $row);
			$this->assertArrayHasKey('Code', $row);
			$this->assertArrayHasKey('Name', $row);
		}
	}

	/**
	 * Test Recreatext->savePersonSubcategoriesByObject()
	 */
	public function testSavePersonSubcategories()
	{
		$var = $this->recreatex->savePerson(null, null, array('First' => '[TEST] Tijs', 'Last' => 'Verkoyen', 'Middle' => ''), array('Street' => 'Kerkstraat', 'Number' => 108, 'ZipCode' => '9050', 'Town' => 'Gentbrugge', 'Country' => 'B', 'Box' => ''), null, 'rcx-001@verkoyen.eu', null, null, 'NL', null, null, null, null, null, null, array('Password' => time(), 'Username' => microtime(true)));

		$subcategories = array(
			array('Id' => 'aaf5d152-bc45-462b-bf27-a8a99c270497', 'CategoryId' => 'fc950daf-e3a5-4b91-9edd-8c2dc70b00e5'),
			array('Id' => '3bbcb4e4-d92f-4ca8-a033-a00b4970d0f9', 'CategoryId' => 'fc950daf-e3a5-4b91-9edd-8c2dc70b00e5'),
			array('Id' => 'd1f667dd-a339-481c-899c-103077f8cc25', 'CategoryId' => 'a332558b-fcef-40df-89ff-565bb2286300'),
			array('Id' => '8350674f-2aa1-4826-b032-563996b15ce7', 'CategoryId' => 'a332558b-fcef-40df-89ff-565bb2286300'),
		);
		$var = $this->recreatex->savePersonSubcategories($var['Id'], null, null, $subcategories);

		$this->assertInternalType('array', $var);

		foreach($subcategories as $row)
		{
			$hasSubcategory = false;
			foreach($var['Settings']['Subcategories'] as $item)
			{
				if($item['Id'] == $row['Id']) $hasSubcategory = true;
			}

			$this->assertTrue($hasSubcategory);
		}
	}

	/**
	 * Test Recreatex->forgotPassword()
	 */
	public function testForgotPassword()
	{
		$username = time();
		$password = time();
		$response = $this->recreatex->savePerson(
			null, null,
			array('First' => '[TEST] Tijs', 'Last' => 'Verkoyen', 'Middle' => ''),
			array('Street' => 'Some', 'Number' => 108, 'ZipCode' => '9050', 'Town' => 'Gentbrugge', 'Country' => 'B', 'Box' => ''),
			null,
			time() . '@foobar.com', null, null, 'NL', null, null, null, null, null, null,
			array('Password' => $password, 'Username' => $username)
		);

		$var = $this->recreatex->forgotPassword($username);

		$this->assertArrayHasKey('Password', $var);
		$this->assertArrayHasKey('EmailAddress', $var);
	}

	/**
	 * Tests Recreatex->findPerson()
	 */
	public function testFindPerson()
	{
		$var = $this->recreatex->findPerson();

		$this->assertInternalType('array', $var);
		$this->assertTrue((count($var) == 10));
	}

	/**
	 * Tests Recreatex->findExpositions()
	 */
	public function testFindExpositions()
	{
		$var = $this->recreatex->findExpositions();

		$this->assertInternalType('array', $var);
		$this->assertTrue((count($var) == 0));
	}

	/**
	 * Tests Recreatex->listExpositionPeriods()
	 */
	public function testListExpositionPeriods()
	{
		$var = $this->recreatex->listExpositionPeriods();

		$this->assertInternalType('array', $var);
		$this->assertTrue((count($var) == 0));
	}

	/**
	 * Tests Recreatex->findExpositionTypes
	 */
	public function testFindExpositionTypes()
	{
		$var = $this->recreatex->findExpositionTypes();

		$this->assertInternalType('array', $var);
		$this->assertTrue((count($var) == 0));
	}

	/**
	 * Tests Recreatex->listExpositionTypes()
	 */
	public function testListExpositionTypes()
	{
		$var = $this->recreatex->listExpositionTypes();

		$this->assertInternalType('array', $var);
		$this->assertTrue((count($var) == 0));
	}

	/**
	 * Tests Recreatex->listAudiences()
	 */
	public function testListAudiences()
	{
		$var = $this->recreatex->listAudiences();

		$this->assertInternalType('array', $var);
		$this->assertTrue((count($var) == 0));
	}

	/**
	 * Tests Recreatex->listActivityTypes()
	 */
	public function testListActivityTypes()
	{
		$var = $this->recreatex->listActivityTypes();

		$this->assertInternalType('array', $var);
		foreach($var as $row)
		{
			$this->assertArrayHasKey('Id', $row);
		}
	}

	/**
	 * Tests Recreatex->findActivities()
	 */
	public function testFindActivities()
	{
		$paging = Recreatex::buildPagingParameter(1, 10, 'Name', true);
		$var = $this->recreatex->findActivities(null, null, null, null, 'b', null, null, null, array(), $paging);

		$this->assertInternalType('array', $var);
	}

	/**
	 * Tests Recreatex->findArticles()
	 */
	public function testFindArticles()
	{
		$paging = Recreatex::buildPagingParameter(1, 10, 'Name', true);
		$var = $this->recreatex->findArticles(null, null, 'Porto', null, null, null, null, null, array('Price' => true, 'ImageUrl' => true, 'Image' => false, 'Group' => false), $paging);

		$this->assertInternalType('array', $var);
	}

	/**
	 * Tests Recreatex->findArticleCategories()
	 */
	public function testFindArticleCategories()
	{
		$this->markTestSkipped('For some reason there is an error while deserializing');

		$var = $this->recreatex->findArticleCategories();

		$this->assertInternalType('array', $var);
		$this->assertTrue((count($var) == 10));
	}

	/**
	 * Tests Recreatex->listArticleGroups()
	 */
	public function testListArticleGroups()
	{
		$var = $this->recreatex->listArticleGroups();

		$this->assertInternalType('array', $var);
		foreach($var as $row)
		{
			$this->assertArrayHasKey('Id', $row);
		}
	}

	/**
	 * Tests Recreatex->listCultureActivities()
	 */
	public function testListCultureActivities()
	{
		$var = $this->recreatex->listCultureActivities();

		$this->assertInternalType('array', $var);
		foreach($var as $row)
		{
			$this->assertArrayHasKey('Id', $row);
			$this->assertArrayHasKey('Code', $row);
			$this->assertArrayHasKey('Name', $row);
		}
	}

	/**
	 * Tests Recreatex->listCultureEventCategories()
	 */
	public function testListCultureEventCategories()
	{
		$var = $this->recreatex->listCultureEventCategories();

		$this->assertInternalType('array', $var);
		foreach($var as $row)
		{
			$this->assertArrayHasKey('Id', $row);
			$this->assertArrayHasKey('Name', $row);
			$this->assertArrayHasKey('Type', $row);
		}
	}

	/**
	 * Tests Recreatex->findCultureEvents()
	 */
	public function testFindCultureEvents()
	{
		$var = $this->recreatex->findCultureEvents();

		$this->assertInternalType('array', $var);
		$this->assertTrue((count($var) == 10));
	}

	/**
	 * Test Recreatex->listHalls()
	 */
	public function testListHalls()
	{
		$var = $this->recreatex->listHalls();

		$this->assertInternalType('array', $var);
		foreach($var as $row)
		{
			$this->assertArrayHasKey('Id', $row);
			$this->assertArrayHasKey('Code', $row);
			$this->assertArrayHasKey('Name', $row);
		}
	}

	/**
	 * Test Recreatex->getHallSeating()
	 */
	public function testGetHallSeating()
	{
		$var = $this->recreatex->getHallSeating('40dde1cc-ea9a-4947-872a-b92c310aca60');

		$this->assertInternalType('array', $var);
		$this->assertArrayHasKey('Blocks', $var);
		foreach($var['Blocks'] as $row)
		{
			$this->assertArrayHasKey('Code', $row);
			$this->assertArrayHasKey('Id', $row);
			$this->assertArrayHasKey('Location', $row);
			$this->assertArrayHasKey('Name', $row);
			$this->assertArrayHasKey('Rows', $row);
			$this->assertInternalType('array', $row['Rows']);
			foreach($row['Rows'] as $subRow)
			{
				$this->assertArrayHasKey('Code', $subRow);
				$this->assertArrayHasKey('Id', $subRow);
				$this->assertArrayHasKey('Location', $subRow);
				$this->assertArrayHasKey('Name', $subRow);
				$this->assertArrayHasKey('Seats', $subRow);
				$this->assertInternalType('array', $subRow['Seats']);
				foreach($subRow['Seats'] as $subSubRow)
				{
					$this->assertArrayHasKey('Code', $subSubRow);
					$this->assertArrayHasKey('Id', $subSubRow);
					$this->assertArrayHasKey('Location', $subSubRow);
					$this->assertArrayHasKey('Sequence', $subSubRow);
					$this->assertArrayHasKey('Number', $subSubRow);
				}
			}
		}

		$this->assertArrayHasKey('Code', $var);
		$this->assertArrayHasKey('Description', $var);
		$this->assertArrayHasKey('Id', $var);
		$this->assertArrayHasKey('Name', $var);
	}

	/**
	 * Test Recreatex->getSeatAllocations()
	 */
	public function testGetSeatAllocations()
	{
		$var = $this->recreatex->getSeatAllocations('40dde1cc-ea9a-4947-872a-b92c310aca60');

		$this->assertArrayHasKey('Allocations', $var);
		$this->assertArrayHasKey('Allocations', $var);
		$this->assertArrayHasKey('Summary', $var);
		$this->assertArrayHasKey('Count', $var['Summary']);
		$this->assertArrayHasKey('Available', $var['Summary']['Count']);
		$this->assertArrayHasKey('Blocked', $var['Summary']['Count']);
		$this->assertArrayHasKey('Locked', $var['Summary']['Count']);
		$this->assertArrayHasKey('Option', $var['Summary']['Count']);
		$this->assertArrayHasKey('Reserved', $var['Summary']['Count']);
		$this->assertArrayHasKey('BlockSummaries', $var['Summary']);
		$this->assertArrayHasKey('Hall', $var['Summary']);
	}

	/**
	 * Test Recreatex->findCultureReservations()
	 */
	public function testFindCultureReservations()
	{
		$var = $this->recreatex->findCultureReservations('96d66f0f-5a54-478b-83e0-e0a4a70b2d52');

		$this->assertInternalType('array', $var);
		foreach($var as $row)
		{
			$this->assertArrayHasKey('Id', $row);
			$this->assertArrayHasKey('Name', $row);
			$this->assertArrayHasKey('Type', $row);
		}
	}

	/**
	 * Tests Recreatex->listPaymentMethods()
	 */
	public function testListPaymentMethods()
	{
		$var = $this->recreatex->listPaymentMethods();

		$this->assertInternalType('array', $var);
		foreach($var as $row)
		{
			$this->assertArrayHasKey('Id', $row);
			$this->assertArrayHasKey('Code', $row);
			$this->assertArrayHasKey('Name', $row);
		}
	}

	/**
	 * Tests Recreatex->validateBasket()
	 */
	public function testValidateBasket()
	{
		$event = $this->recreatex->findCultureEvents(null, null, 'Tijs');
		$event = $event[0];
		$paymentMethod = $this->recreatex->listPaymentMethods();
		$paymentMethod = $paymentMethod[0];
		$lock = $this->recreatex->lockBasketItems(
			array(
				 array(
					 'BasketItem' => array(
						 '@attributes' => array('xsi:type' => 'CultureEventReservation'),
						 'Quantity' => 1,
						 'CultureEventId' => $event['Id'],
						 'Entries' => array(
							 'CultureEventReservationEntry' => array(
								 '@attributes' => array('xsi:type' => 'BestAvailableSeatsCultureEventReservationEntry'),
								 'PriceGroupId' => $event['Prices']['CultureEventPrice']['Group']['Id'],
								 'ParticipantCount' => 2
							 )
						 ),
						 'ReservationDate' => date('c'),
					 )
				 ),
			)
		);
		$var = $this->recreatex->validateBasket(
			array(
				 array(
					 'BasketItem' => array(
						 '@attributes' => array('xsi:type' => 'CultureEventReservation'),
						 'Quantity' => 1,
						 'UnitPrice' => 0,
						 'CultureEventId' => $event['Id'],
						 'Entries' => array(
							 'CultureEventReservationEntry' => array(
								 '@attributes' => array('xsi:type' => 'BestAvailableSeatsCultureEventReservationEntry'),
								 'PriceGroupId' => $event['Prices']['CultureEventPrice']['Group']['Id'],
								 'ParticipantCount' => 2
							 )
						 ),
						 'LockTicket' => array(
							 '@attributes' => array('xsi:type' => 'CultureEventReservationLockTicket'),
							 'Id' => $lock['BasketItems'][0]['LockTicket']['Id'],
						 ),
						 'ReservationDate' => date('c'),
					 )
				 )
			),
			142,
			array(
				 array(
					 'Id' => $paymentMethod['Id'],
					 'Amount' => 142,00
				 ),
			),
			'433abb44-1f80-4dd5-b167-f8080c10fd12'
		);

		$this->assertArrayHasKey('IsValid', $var);
		$this->assertTrue($var['IsValid']);
	}

 	/**
 	 * Tests Recreatex->checkoutBasket()
 	 */
 	public function testCheckoutBasket()
 	{
		 $event = $this->recreatex->findCultureEvents(null, null, 'Tijs');
		 $event = $event[0];
		 $paymentMethod = $this->recreatex->listPaymentMethods();
		 $paymentMethod = $paymentMethod[0];
		 $lock = $this->recreatex->lockBasketItems(
			 array(
				  array(
					  'BasketItem' => array(
						  '@attributes' => array('xsi:type' => 'CultureEventReservation'),
						  'Quantity' => 1,
						  'CultureEventId' => $event['Id'],
						  'Entries' => array(
							  'CultureEventReservationEntry' => array(
								  '@attributes' => array('xsi:type' => 'BestAvailableSeatsCultureEventReservationEntry'),
								  'PriceGroupId' => $event['Prices']['CultureEventPrice']['Group']['Id'],
								  'ParticipantCount' => 2
							  )
						  ),
						  'ReservationDate' => date('c'),
					  )
				  ),
			 )
		 );
		 $var = $this->recreatex->checkoutBasket(
			 array(
				  array(
					  'BasketItem' => array(
						  '@attributes' => array('xsi:type' => 'CultureEventReservation'),
						  'Quantity' => 1,
						  'UnitPrice' => 0,
						  'CultureEventId' => $event['Id'],
						  'Entries' => array(
							  'CultureEventReservationEntry' => array(
								  '@attributes' => array('xsi:type' => 'BestAvailableSeatsCultureEventReservationEntry'),
								  'PriceGroupId' => $event['Prices']['CultureEventPrice']['Group']['Id'],
								  'ParticipantCount' => 2
							  )
						  ),
						  'LockTicket' => array(
							  '@attributes' => array('xsi:type' => 'CultureEventReservationLockTicket'),
							  'Id' => $lock['BasketItems'][0]['LockTicket']['Id'],
						  ),
						  'ReservationDate' => date('c'),
					  )
				  )
			 ),
			 142,
			 array(
				  array(
					  'PaymentMethodId' => $paymentMethod['Id'],
					  'Amount' => 142.00,
					  'Currency' => '€'
				  ),
			 ),
			 '433abb44-1f80-4dd5-b167-f8080c10fd12'
		 );

		 $this->assertArrayHasKey('BasketValidationResult', $var);
		 $this->assertArrayHasKey('IsValid', $var['BasketValidationResult']);
		 $this->assertTrue($var['BasketValidationResult']['IsValid']);
		 $this->assertArrayHasKey('ResultState', $var);
		 $this->assertArrayHasKey('SalesItems', $var);
	 }

	/**
	 * Tests Recreatex->lockBasketItems()
	 */
	public function testLockBasketItems()
	{
		$event = $this->recreatex->findCultureEvents(null, null, 'Tijs');
		$event = $event[0];
		$var = $this->recreatex->lockBasketItems(
			array(
				 array(
					 'BasketItem' => array(
						 '@attributes' => array('xsi:type' => 'CultureEventReservation'),
						 'Quantity' => 1,
						 'CultureEventId' => $event['Id'],
						 'Entries' => array(
							 'CultureEventReservationEntry' => array(
								 '@attributes' => array('xsi:type' => 'BestAvailableSeatsCultureEventReservationEntry'),
								 'PriceGroupId' => $event['Prices']['CultureEventPrice']['Group']['Id'],
								 'ParticipantCount' => 2
							 )
						 ),
						 'ReservationDate' => date('c'),
					 )
				 ),
			)
		);

		$this->assertArrayHasKey('BasketItems', $var);
		foreach($var['BasketItems'] as $item)
		{
			$this->assertArrayHasKey('Id', $item);
			$this->assertArrayHasKey('Quantity', $item);
			$this->assertArrayHasKey('Entries', $item);
			$this->assertArrayHasKey('LockTicket', $item);
			$this->assertArrayHasKey('ExpirationTime', $item['LockTicket']);
			$this->assertArrayHasKey('Id', $item['LockTicket']);
		}
		$this->assertArrayHasKey('IsLocked', $var);
		$this->assertTrue($var['IsLocked']);
		$this->assertArrayHasKey('ValidationResult', $var);
		$this->assertNull($var['ValidationResult']);
	}

	/**
	 * Tests Recreatex->unlockBasketItems()
	 */
	public function testUnlockBasketItems()
	{
		$event = $this->recreatex->findCultureEvents(null, null, 'Tijs');
		$event = $event[0];
		$var = $this->recreatex->lockBasketItems(
			array(
				 array(
					 'BasketItem' => array(
						 '@attributes' => array('xsi:type' => 'CultureEventReservation'),
						 'Quantity' => 1,
						 'CultureEventId' => $event['Id'],
						 'Entries' => array(
							 'CultureEventReservationEntry' => array(
								 '@attributes' => array('xsi:type' => 'BestAvailableSeatsCultureEventReservationEntry'),
								 'PriceGroupId' => $event['Prices']['CultureEventPrice']['Group']['Id'],
								 'ParticipantCount' => 2
							 )
						 ),
						 'ReservationDate' => date('c'),
					 )
				 ),
			)
		);

		$var = $this->recreatex->unlockBasketItems(
			array(
				 array('Id' => $var['BasketItems'][0]['LockTicket']['Id'])
			)
		);

		$this->assertTrue($var);

	}

	/**
	 * Tests Recreatex->reCalculateBasket()
	 */
	public function testReCalculateBasket()
	{
		$person = $this->recreatex->savePerson(
			null, null,
			array('First' => '[TEST] Tijs', 'Last' => 'Verkoyen', 'Middle' => ''),
			array('Street' => 'Some', 'Number' => 108, 'ZipCode' => '9050', 'Town' => 'Gentbrugge', 'Country' => 'B', 'Box' => ''),
			null,
			time() . '@foobar.com', null, null, 'NL', null, null, null, null, null, null,
			array('Password' => time(), 'Username' => time())
		);

		$event = $this->recreatex->findCultureEvents(null, null, 'Tijs');
		$event = $event[0];

		$lock = $this->recreatex->lockBasketItems(
			array(
			 	array(
				 'BasketItem' => array(
					'@attributes' => array('xsi:type' => 'CultureEventReservation'),
					'Quantity' => 1,
					'CultureEventId' => $event['Id'],
					'Entries' => array(
						'CultureEventReservationEntry' => array(
							'@attributes' => array('xsi:type' => 'BestAvailableSeatsCultureEventReservationEntry'),
							'PriceGroupId' => $event['Prices']['CultureEventPrice']['Group']['Id'],
							'ParticipantCount' => 2
						)
					),
					'ReservationDate' => date('c'),
				 )
			 ),
		 )
		);

		$response = $this->recreatex->reCalculateBasket(
			array(
				 array(
					 'BasketItem' => array(
						 '@attributes' => array('xsi:type' => 'CultureEventReservation'),
						 'Quantity' => 1,
						 'UnitPrice' => 0,
						 'CultureEventId' => $event['Id'],
						 'Entries' => array(
							 'CultureEventReservationEntry' => array(
								 '@attributes' => array('xsi:type' => 'BestAvailableSeatsCultureEventReservationEntry'),
								 'PriceGroupId' => $event['Prices']['CultureEventPrice']['Group']['Id'],
								 'ParticipantCount' => 2
							 )
						 ),
						 'LockTicket' => array(
							 '@attributes' => array('xsi:type' => 'CultureEventReservationLockTicket'),
							 'Id' => $lock['BasketItems'][0]['LockTicket']['Id'],
						 ),
						 'ReservationDate' => date('c'),
					 )
				 )
			),
			122,
			array(),
			$person['Id']
		);
	}

	/**
	 * Tests Recreatex->extendLockPeriod()
	 */
	public function testExtendLockPeriod()
	{
		$event = $this->recreatex->findCultureEvents(null, null, 'Tijs');
		$event = $event[0];
		$var = $this->recreatex->lockBasketItems(
			array(
				 array(
					 'BasketItem' => array(
						 '@attributes' => array('xsi:type' => 'CultureEventReservation'),
						 'Quantity' => 1,
						 'CultureEventId' => $event['Id'],
						 'Entries' => array(
							 'CultureEventReservationEntry' => array(
								 '@attributes' => array('xsi:type' => 'BestAvailableSeatsCultureEventReservationEntry'),
								 'PriceGroupId' => $event['Prices']['CultureEventPrice']['Group']['Id'],
								 'ParticipantCount' => 2
							 )
						 ),
						 'ReservationDate' => date('c'),
					 )
				 ),
			)
		);

		$var = $this->recreatex->extendLockPeriod(
			array(
				 array(
					'LockTicket' => array(
						'@attributes' => array('xsi:type' => 'CultureEventReservationLockTicket'),
						'Id' => $var['BasketItems'][0]['LockTicket']['Id']
					)
				)
			)
		);

		$this->assertArrayHasKey('Succeeded', $var);
		$this->assertArrayHasKey('LockTicket', $var['Succeeded']);
		$this->assertArrayHasKey('Id', $var['Succeeded']['LockTicket']);
		$this->assertArrayHasKey('Failed', $var);
		$this->assertNull($var['Failed']);
	}
}
