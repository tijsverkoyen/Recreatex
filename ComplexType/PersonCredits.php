<?php

namespace TijsVerkoyen\Recreatex\ComplexType;

use TijsVerkoyen\Recreatex\SimpleType;

/**
 *
 * @link https://github.com/opensoft/php-wsdl-proxy-generator WSDL parser and Proxy class generator on PHP
 * @author WSDL parser and Proxy class generator on PHP
 */
class PersonCredits extends ComplexTypeAbstract
{
    const CLASS_NAME = 'PersonCredits';

    /**
     * @var SimpleTypeGuid
     */
    protected $PersonId;

    /**
     * @var integer
     */
    protected $Balance;

    /**
     * @var ArrayOfPersonCreditLine
     */
    protected $History;

    /**
     * @param  SimpleType\guid[optional] $personId
     * @return PersonCredits
     */
    public function setPersonId(SimpleType\guid $personId = null)
    {
        $this->PersonId = $personId;

        return $this;
    }

    /**
     * @return SimpleType\guid
     */
    public function getPersonId()
    {
        return $this->PersonId;
    }

    /**
     * @param  integer[optional] $balance
     * @return PersonCredits
     */
    public function setBalance($balance)
    {
        $this->Balance = $balance;

        return $this;
    }

    /**
     * @return integer
     */
    public function getBalance()
    {
        return $this->Balance;
    }

    /**
     * @param  ArrayOfPersonCreditLine[optional] $history
     * @return PersonCredits
     */
    public function setHistory(ArrayOfPersonCreditLine $history = null)
    {
        $this->History = $history;

        return $this;
    }

    /**
     * @return ArrayOfPersonCreditLine
     */
    public function getHistory()
    {
        return $this->History;
    }
}
