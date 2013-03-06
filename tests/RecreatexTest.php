<?php

require_once '../../../autoload.php';
require_once 'config.php';
require_once 'PHPUnit/Framework/TestCase.php';

use \TijsVerkoyen\Recreatex\Recreatex;

/**
 * test case.
 */
class RecreatexTest extends PHPUnit_Framework_TestCase
{
    /**
     * Recreatex instance
     *
     * @var	Recreatex
     */
    private $recreatex;

    /**
     * Prepares the environment before running a test.
     */
    protected function setUp()
    {
        parent::setUp();
        $this->recreatex = new Recreatex(SERVER, PORT);
        $this->recreatex->createServiceContext(SHOP_ID, DIVISION_ID, LANGUAGE);
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
        $this->assertEquals(
            'PHP Recreatex/' . Recreatex::VERSION . ' testing/1.0.0',
            $this->recreatex->getUserAgent()
        );
    }

    /**
     * Tests Recreatex->AuthenticateUser()
     */
    public function testAuthenticateUser()
    {
        $credential = new \TijsVerkoyen\Recreatex\ComplexType\Credential();
        $credential->setUsername(USERNAME);
        $credential->setPassword(PASSWORD);
        $response = $this->recreatex->authenticateUser($credential);

        $this->assertInstanceOf('\TijsVerkoyen\Recreatex\ComplexType\AuthenticationResult', $response);
        $this->assertTrue($response->getHasSucceeded());
    }

    /**
     * Tests Recreatex->FindArticles()
     */
    public function testFindArticles()
    {
        $paging = new \TijsVerkoyen\Recreatex\ComplexType\PagingCriteria();
        $paging->setPageSize(10);
        $criteria = new \TijsVerkoyen\Recreatex\ComplexType\ArticleSearchCriteria();
        $criteria->setPaging($paging);
        $response = $this->recreatex->findArticles($criteria);

        $this->assertInternalType('array', $response);
        foreach ($response as $row) {
            $this->assertInstanceOf('TijsVerkoyen\Recreatex\ComplexType\Article', $row);
        }
    }

    /**
     * Tests Recreatex->FindCultureEvents()
     */
    public function testFindCultureEvents()
    {
        $paging = new \TijsVerkoyen\Recreatex\ComplexType\PagingCriteria();
        $paging->setPageSize(10);
        $criteria = new \TijsVerkoyen\Recreatex\ComplexType\CultureEventSearchCriteria();
        $criteria->setPaging($paging);
        $response = $this->recreatex->findCultureEvents($criteria);

        $this->assertInternalType('array', $response);
        foreach ($response as $row) {
            $this->assertInstanceOf('TijsVerkoyen\Recreatex\ComplexType\CultureEvent', $row);
        }
    }

    /**
     * Tests Recreatex->FindCultureReservations()
     */
    public function testFindCultureReservations()
    {
        $paging = new \TijsVerkoyen\Recreatex\ComplexType\PagingCriteria();
        $paging->setPageSize(10);
        $criteria = new \TijsVerkoyen\Recreatex\ComplexType\CultureReservationSearchCriteria();
        $criteria->setPersonId(new \TijsVerkoyen\Recreatex\SimpleType\Guid('65c4e699-ddd8-4fb4-997f-d1c54e09c1ec'));
        $criteria->setPaging($paging);
        $response = $this->recreatex->findCultureReservations($criteria);

        $this->assertInternalType('array', $response);
        foreach ($response as $row) {
            $this->assertInstanceOf('TijsVerkoyen\Recreatex\ComplexType\CultureReservation', $row);
        }
    }

    /**
     * Tests Recreatex->FindExpositions()
     */
    public function testFindExpositions()
    {
        $paging = new \TijsVerkoyen\Recreatex\ComplexType\PagingCriteria();
        $paging->setPageSize(10);
        $criteria = new \TijsVerkoyen\Recreatex\ComplexType\ExpositionSearchCriteria();
        $criteria->setPaging($paging);
        $response = $this->recreatex->findExpositions($criteria);

        $this->assertInternalType('array', $response);
//		foreach ($response as $row) {
//			$this->assertInstanceOf('TijsVerkoyen\Recreatex\ComplexType\Exposition', $row);
//		}
    }

    /**
     * Tests Recreatex->FindExpositionTypes()
     */
    public function testFindExpositionTypes()
    {
        $paging = new \TijsVerkoyen\Recreatex\ComplexType\PagingCriteria();
        $paging->setPageSize(10);
        $criteria = new \TijsVerkoyen\Recreatex\ComplexType\ExpositionTypeSearchCriteria();
        $criteria->setPaging($paging);
        $response = $this->recreatex->FindExpositionTypes($criteria);

        $this->assertInternalType('array', $response);
//		foreach ($response as $row) {
//			$this->assertInstanceOf('TijsVerkoyen\Recreatex\ComplexType\ExpositionType', $row);
//		}
    }

    /**
     * Tests Recreatex->FindPerson()
     */
    public function testFindPerson()
    {
        $criteria = new \TijsVerkoyen\Recreatex\ComplexType\FindPersonsCriteria();
        $criteria->setEmail('vorst@verkoyen.eu');
        $response = $this->recreatex->findPerson($criteria);

        $this->assertInstanceOf('TijsVerkoyen\Recreatex\ComplexType\Person', $response);
    }

    /**
     * Tests Recreatex->IsAvailable()
     */
    public function testIsAvailable()
    {
        $response = $this->recreatex->isAvailable();
        $this->assertTrue($response);
    }
}
