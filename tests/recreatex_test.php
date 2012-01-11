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
		$var = $this->recreatex->authenticateUser(USERNAME, PASSWORD);
		$this->assertArrayHasKey('HasSucceeded', $var);
		$this->assertTrue($var['HasSucceeded']);
	}

	/**
	 * Tests Recreatex->savePerson()
	 */
	public function testSavePerson()
	{
		// TODO Auto-generated RecreatexTest->testSavePerson()
		$this->markTestIncomplete("savePerson test not implemented");
		$this->recreatex->savePerson(/* parameters */);
	}

	/**
	 * Tests Recreatex->forgotPassword()
	 */
	public function testForgotPassword()
	{
		// TODO Auto-generated RecreatexTest->testForgotPassword()
		$this->markTestIncomplete("forgotPassword test not implemented");
		$this->recreatex->forgotPassword(/* parameters */);
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
		// TODO Auto-generated RecreatexTest->testListActivityTypes()
		$this->markTestIncomplete("listActivityTypes test not implemented");
		$this->recreatex->listActivityTypes(/* parameters */);
	}

	/**
	 * Tests Recreatex->findActivities()
	 */
	public function testFindActivities()
	{
		// TODO Auto-generated RecreatexTest->testFindActivities()
		$this->markTestIncomplete("findActivities test not implemented");
		$this->recreatex->findActivities(/* parameters */);
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
			$this->assertArrayHasKey('Code', $row);
		}
	}

	/**
	 * Tests Recreatex->findArticles()
	 */
	public function testFindArticles()
	{
		$this->assertType('array', $this->recreatex->findArticles('704f62b3-e2e0-4a70-b2f2-0c6eb4602a73', null, null, 'All'));
	}

	/**
	 * Tests Recreatex->listExpositionTypes()
	 */
	public function testListExpositionTypes()
	{
		// TODO Auto-generated RecreatexTest->testListExpositionTypes()
		$this->markTestIncomplete("listExpositionTypes test not implemented");
		$this->recreatex->listExpositionTypes(/* parameters */);
	}

	/**
	 * Tests Recreatex->findExpositions()
	 */
	public function testFindExpositions()
	{
		// TODO Auto-generated RecreatexTest->testFindExpositions()
		$this->markTestIncomplete("findExpositions test not implemented");
		$this->recreatex->findExpositions(/* parameters */);
	}

	/**
	 * Tests Recreatex->listExpositionPeriods()
	 */
	public function testListExpositionPeriods()
	{
		// TODO Auto-generated RecreatexTest->testListExpositionPeriods()
		$this->markTestIncomplete("listExpositionPeriods test not implemented");
		$this->recreatex->listExpositionPeriods(/* parameters */);
	}

	/**
	 * Tests Recreatex->listAudiences()
	 */
	public function testListAudiences()
	{
		// TODO Auto-generated RecreatexTest->testListAudiences()
		$this->markTestIncomplete("listAudiences test not implemented");
		$this->recreatex->listAudiences(/* parameters */);
	}

	/**
	 * Tests Recreatex->validateBasket()
	 */
	public function testValidateBasket()
	{
		// TODO Auto-generated RecreatexTest->testValidateBasket()
		$this->markTestIncomplete("validateBasket test not implemented");
		$this->recreatex->validateBasket(/* parameters */);
	}

	/**
	 * Tests Recreatex->validateBasketItem()
	 */
	public function testValidateBasketItem()
	{
		// TODO Auto-generated RecreatexTest->testValidateBasketItem()
		$this->markTestIncomplete("validateBasketItem test not implemented");
		$this->recreatex->validateBasketItem(/* parameters */);
	}

	/**
	 * Tests Recreatex->checkoutBasket()
	 */
	public function testCheckoutBasket()
	{
		// TODO Auto-generated RecreatexTest->testCheckoutBasket()
		$this->markTestIncomplete("checkoutBasket test not implemented");
		$this->recreatex->checkoutBasket(/* parameters */);
	}

	/**
	 * Tests Recreatex->lockBasketItems()
	 */
	public function testLockBasketItems()
	{
		// TODO Auto-generated RecreatexTest->testLockBasketItems()
		$this->markTestIncomplete("lockBasketItems test not implemented");
		$this->recreatex->lockBasketItems(/* parameters */);
	}

	/**
	 * Tests Recreatex->unlockBasketItems()
	 */
	public function testUnlockBasketItems()
	{
		// TODO Auto-generated RecreatexTest->testUnlockBasketItems()
		$this->markTestIncomplete("unlockBasketItems test not implemented");
		$this->recreatex->unlockBasketItems(/* parameters */);
	}

	/**
	 * Tests Recreatex->listPaymentMethods()
	 */
	public function testListPaymentMethods()
	{
		$this->assertType('array', $this->recreatex->listPaymentMethods());
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
		// TODO Auto-generated RecreatexTest->testFindCultureEvents()
		$this->markTestIncomplete("findCultureEvents test not implemented");
		$this->recreatex->findCultureEvents(/* parameters */);
	}

	/**
	 * Tests Recreatex->listHalls()
	 */
	public function testListHalls()
	{
		// TODO Auto-generated RecreatexTest->testListHalls()
		$this->markTestIncomplete("listHalls test not implemented");
		$this->recreatex->listHalls(/* parameters */);
	}

	/**
	 * Tests Recreatex->GetHallSeating()
	 */
	public function testGetHallSeating()
	{
		// TODO Auto-generated RecreatexTest->testGetHallSeating()
		$this->markTestIncomplete("GetHallSeating test not implemented");
		$this->recreatex->GetHallSeating(/* parameters */);
	}
}
