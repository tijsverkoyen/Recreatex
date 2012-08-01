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
	 * Tests Recreatex->isAvailable()
	 */
	public function testIsAvailable()
	{
		$this->assertTrue($this->recreatex->isAvailable());
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
		$name = array('First' => '[REMOVE ME] Tijs', 'Last' => 'Verkoyen');
		$address = array('Street' => 'Kerkstraat', 'Number' => 108, 'ZipCode' => '9050', 'Town' => 'Gentbrugge', 'Country' => 'B', 'Box' => '');
		$credential = array('Password' => time(), 'Username' => time());

		$var = $this->recreatex->forgotPassword(USERNAME);

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
	 * Tests Recreatex->savePersonPriceGroups()
	 */
	public function testSavePersonPriceGroups()
	{
 		$priceGroups = array(array('Id' => 'ff927dbb-440a-489e-8c18-61cc919d3e44'));
 		$var = $this->recreatex->savePersonPriceGroups('31e68d35-0257-4ca8-9e07-1edeb56faa03', null, null, $priceGroups);

 		$this->assertInternalType('array', $var);
 		$this->assertArrayHasKey('Id', $var);
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
	 * Tests Recreatex->findArticleCategories()
	 */
	public function testFindArticleCategories()
	{
 		$var = $this->recreatex->findArticleCategories();

 		$this->assertInternalType('array', $var);
 		$this->assertTrue((count($var) == 10));
	}

	/**
	 * Tests Recreatex->findArticles()
	 */
	public function testFindArticles()
	{
		$var = $this->recreatex->findArticles();

		$this->assertInternalType('array', $var);
		$this->assertTrue((count($var) == 10));
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
	 * Tests Recreatex->findExpositionTypes
	 */
	public function testFindExpositionTypes()
	{
		$var = $this->recreatex->findExpositionTypes();

		$this->assertInternalType('array', $var);
		$this->assertTrue((count($var) == 0));
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
	 * Tests Recreatex->listAudiences()
	 */
	public function testListAudiences()
	{
		$var = $this->recreatex->listAudiences();

		$this->assertInternalType('array', $var);
		$this->assertTrue((count($var) == 0));
	}

	/**
	 * Tests Recreatex->validateBasket()
	 */
	public function testValidateBasket()
	{
		$this->markTestIncomplete("validateBasket test not implemented");
	}

 	/**
 	 * Tests Recreatex->validateBasket()
 	 */
 	public function testValidateBasketItems()
 	{
 		$this->markTestIncomplete("validateBasket test not implemented");
 	}

 	/**
 	 * Tests Recreatex->checkoutBasket()
 	 */
 	public function testCheckoutBasket()
 	{
 		$this->markTestIncomplete("checkoutBasket test not implemented");
 	}

	/**
	 * Tests Recreatex->lockBasketItems()
	 */
	public function testLockBasketItems()
	{
		$product1 = $this->recreatex->findArticles('8f7a16d1-c1b1-48c0-acde-01b322002722');
		$product2 = $this->recreatex->findArticles('940eaa14-5582-49a1-9be7-d881127c3449');
		$basketItems = array(
			array('BasketItem' => array('@attributes' => array('xsi:type' => 'ArticleSale'), 'Quantity' => 5, 'Article' => $product1[0])),
			array('BasketItem' => array('@attributes' => array('xsi:type' => 'ArticleSale'), 'Quantity' => 10, 'Article' => $product2[0]))
		);
		$var = $this->recreatex->lockBasketItems($basketItems);

		$this->assertArrayHasKey('BasketItems', $var);
		$this->assertArrayHasKey('IsLocked', $var);
		$this->assertTrue($var['IsLocked']);
		$this->assertArrayHasKey('ValidationResult', $var);
	}

	/**
	 * Tests Recreatex->unlockBasketItems()
	 */
	public function testUnlockBasketItems()
	{
		$var = $this->recreatex->unlockBasketItems(array(array('@attributes' => array('xsi:type' => 'ArticleSaleLockTicket'), 'Id' => 'ec0ab572-ff67-4a37-a846-f3330748e9bb')));

		$this->assertTrue($var);
	}

	/**
	 * Tests Recreatex->reCalculateBasket()
	 */
	public function testReCalculateBasket()
	{
		$product1 = $this->recreatex->findArticles('8f7a16d1-c1b1-48c0-acde-01b322002722');
		$product2 = $this->recreatex->findArticles('940eaa14-5582-49a1-9be7-d881127c3449');

		$basketItems = array(
			array('BasketItem' => array('@attributes' => array('xsi:type' => 'ArticleSale'), 'Quantity' => 5, 'Article' => $product1[0])),
			array('BasketItem' => array('@attributes' => array('xsi:type' => 'ArticleSale'), 'Quantity' => 10, 'Article' => $product2[0]))
		);
		$var = $this->recreatex->reCalculateBasket($basketItems);

		$this->assertArrayHasKey('CustomerId', $var);
		$this->assertArrayHasKey('Items', $var);
		$this->assertArrayHasKey('Payments', $var);
		$this->assertArrayHasKey('Price', $var);
	}

	/**
	 * Tests Recreatex->extendLockPeriod()
	 */
	public function testExtendLockPeriod()
	{
		$this->markTestIncomplete();
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
				$this->assertArrayHasKey('Range', $subRow);
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
}
