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

        $this->assertNotInternalType('\TijsVerkoyen\Recreatex\ComplexType\AuthenticationResult', $response);
        $this->assertTrue($response->getHasSucceeded());
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
