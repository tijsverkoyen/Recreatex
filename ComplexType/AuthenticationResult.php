<?php

namespace TijsVerkoyen\Recreatex\ComplexType;

use TijsVerkoyen\Recreatex\SimpleType;

/**
 *
 * @link https://github.com/opensoft/php-wsdl-proxy-generator WSDL parser and Proxy class generator on PHP
 * @author WSDL parser and Proxy class generator on PHP
 */
class AuthenticationResult extends ComplexTypeAbstract
{
    const CLASS_NAME = 'AuthenticationResult';

    /**

     * minOccurs = 0
     * maxOccurs = 1
     *
     * @var SimpleType\AuthenticationError|null $Error
     */
    protected $Error;

    /**

     * minOccurs = 0
     * maxOccurs = 1
     *
     * @var boolean|null $HasSucceeded
     */
    protected $HasSucceeded;

    /**

     * minOccurs = 0
     * maxOccurs = 1
     *
     * @var SimpleType\Guid|null $PersonId
     */
    protected $PersonId;

    /**
     * @param  SimpleType\AuthenticationError|null $error
     * @return AuthenticationResult
     */
    public function setError(SimpleType\AuthenticationError $error = null)
    {
        $this->Error = $error;

        return $this;
    }

    /**
     * @return SimpleType\AuthenticationError|null
     */
    public function getError()
    {
        return $this->Error;
    }

    /**
     * @param  boolean|null         $hasSucceeded
     * @return AuthenticationResult
     */
    public function setHasSucceeded($hasSucceeded)
    {
        $this->HasSucceeded = $hasSucceeded;

        return $this;
    }

    /**
     * @return boolean|null
     */
    public function getHasSucceeded()
    {
        return $this->HasSucceeded;
    }

    /**
     * @param  SimpleType\Guid|null $personId
     * @return AuthenticationResult
     */
    public function setPersonId(SimpleType\Guid $personId = null)
    {
        $this->PersonId = $personId;

        return $this;
    }

    /**
     * @return SimpleType\Guid|null
     */
    public function getPersonId()
    {
        return $this->PersonId;
    }
}
