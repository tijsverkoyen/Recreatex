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
     * @var SimpleTypeAuthenticationError
     */
    protected $Error;

    /**
     * @var boolean
     */
    protected $HasSucceeded;

    /**
     * @var SimpleType\Guid
     */
    protected $PersonId;

    /**
     * @var string
     */
    protected $LastLoginDate;

    /**
     * @param  SimpleType\AuthenticationError[optional] $error
     * @return AuthenticationResult
     */
    public function setError(SimpleType\AuthenticationError $error = null)
    {
        $this->Error = $error;

        return $this;
    }

    /**
     * @return SimpleType\AuthenticationError
     */
    public function getError()
    {
        return $this->Error;
    }

    /**
     * @param  boolean[optional]    $hasSucceeded
     * @return AuthenticationResult
     */
    public function setHasSucceeded($hasSucceeded)
    {
        $this->HasSucceeded = $hasSucceeded;

        return $this;
    }

    /**
     * @return boolean
     */
    public function getHasSucceeded()
    {
        return $this->HasSucceeded;
    }

    /**
     * @param  SimpleType\Guid[optional] $personId
     * @return AuthenticationResult
     */
    public function setPersonId(SimpleType\Guid $personId = null)
    {
        $this->PersonId = $personId;

        return $this;
    }

    /**
     * @return SimpleType\Guid
     */
    public function getPersonId()
    {
        return $this->PersonId;
    }

    /**
     * @param  string[optional]     $lastLoginDate
     * @return AuthenticationResult
     */
    public function setLastLoginDate($lastLoginDate)
    {
        $this->LastLoginDate = $lastLoginDate;

        return $this;
    }

    /**
     * @return string
     */
    public function getLastLoginDate()
    {
        return $this->LastLoginDate;
    }
}
