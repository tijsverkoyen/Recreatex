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

// 		$var = $this->recreatex->authenticateUser(USERNAME, PASSWORD);

// 		$this->assertArrayHasKey('HasSucceeded', $var);
// 		$this->assertTrue($var['HasSucceeded']);
	}

	/**
	 * Tests Recreatex->savePerson()
	 */
	public function testSavePerson()
	{
		$name = array('First' => '[REMOVE ME] Tijs', 'Last' => 'Verkoyen');
		$address = array('Street' => 'Kerkstraat', 'Number' => 108, 'ZipCode' => '9050', 'Town' => 'Gentbrugge', 'Country' => 'B', 'Box' => '');
		$credential = array('Password' => time(), 'Username' => time());

		$var = $this->recreatex->savePerson(null, null, $name, $address, null, 'rcx-001@verkoyen.eu', null, null, 'NL', null, null, null, null, null, null, $credential);

		$this->assertArrayHasKey('ValidationResults', $var);
		$this->assertNull($var['ValidationResults']);
	}

	/**
	 * Tests Recreatex->savePersonByObject()
	 */
	public function testSavePersonByObject()
	{
		// get member
		$object = $this->recreatex->findPerson(null, null, 'rcx-001@verkoyen.eu');
		$member = $object[0];
		$member['Comments'] = 'Edited at ' . date('Y-m-d H:i:s');

		$var = $this->recreatex->savePersonByObject($member);

		$this->assertArrayHasKey('ValidationResults', $var);
		$this->assertNull($var['ValidationResults']);
	}

	/**
	 * Tests Recreatex->findPerson()
	 */
	public function testFindPerson()
	{
		$var = $this->recreatex->findPerson();

		$this->assertType('array', $var);
		$this->assertTrue((count($var) == 10));
	}

	/**
	 * Tests Recreatex->listActivityTypes()
	 */
	public function testListActivityTypes()
	{
		$var = $this->recreatex->listActivityTypes();

		$this->assertType('array', $var);
		foreach($var as $row)
		{
			$this->assertArrayHasKey('Id', $row);
		}
	}

	/**
	 * Tests Recreatex->listArticleGroups()
	 */
	public function testListArticleGroups()
	{
		$var = $this->recreatex->listArticleGroups();

		$this->assertType('array', $var);
		foreach($var as $row)
		{
			$this->assertArrayHasKey('Id', $row);
		}
	}

	/**
	 * Tests Recreatex->findArticles()
	 */
	public function testFindArticles()
	{
		$var = $this->recreatex->findArticles();

		$this->assertType('array', $var);
		$this->assertTrue((count($var) == 10));
	}

	/**
	 * Tests Recreatex->listExpositionTypes()
	 */
	public function testListExpositionTypes()
	{
		$var = $this->recreatex->listExpositionTypes();

		$this->assertType('array', $var);
		$this->assertTrue((count($var) == 0));
	}

// 	/**
// 	 * Tests Recreatex->findExpositions()
// 	 */
// 	public function testFindExpositions()
// 	{
// 		$this->markTestIncomplete("findExpositions test not implemented");
// 		$var = $this->recreatex->findExpositions();

// 		$this->assertType('array', $var);
// 		$this->assertTrue((count($var) == 10));
// 	}

// 	/**
// 	 * Tests Recreatex->validateBasket()
// 	 */
// 	public function testValidateBasket()
// 	{
// 		// TODO Auto-generated RecreatexTest->testValidateBasket()
// 		$this->markTestIncomplete("validateBasket test not implemented");
// 		$this->recreatex->validateBasket(/* parameters */);
// 	}

// 	/**
// 	 * Tests Recreatex->checkoutBasket()
// 	 */
// 	public function testCheckoutBasket()
// 	{
// 		// TODO Auto-generated RecreatexTest->testCheckoutBasket()
// 		$this->markTestIncomplete("checkoutBasket test not implemented");
// 		$this->recreatex->checkoutBasket(/* parameters */);
// 	}

	/**
	 * Tests Recreatex->lockBasketItems()
	 */
	public function testLockBasketItems()
	{
		$basketItems = array(
			array('Quantity' => 1, 'UnitPrice' => 3.9, 'Article' => array('Id' => 'ec0ab572-ff67-4a37-a846-f3330748e9bb', 'Price' => 3.9), '@attributes' => array('xsi:type' => 'ArticleSale')),
			array('Quantity' => 2, 'UnitPrice' => 3.25, 'Article' => array('Id' => '8f7a16d1-c1b1-48c0-acde-01b322002722', 'Price' => 3.25), '@attributes' => array('xsi:type' => 'ArticleSale'))
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
	 * Tests Recreatex->listPaymentMethods()
	 */
	public function testListPaymentMethods()
	{
		$var = $this->recreatex->listPaymentMethods();

		$this->assertType('array', $var);
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

		$this->assertType('array', $var);
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

		$this->assertType('array', $var);
		$this->assertTrue((count($var) == 10));
	}
}
