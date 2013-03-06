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

     * minOccurs = 0
     * maxOccurs = 1
     *
     * @var SimpleType\guid|null $PersonId
     */
    protected $PersonId;

    /**

     * minOccurs = 0
     * maxOccurs = 1
     *
     * @var integer|null $Balance
     */
    protected $Balance;

    /**

     * minOccurs = 0
     * maxOccurs = 1
     *
     * @var ArrayOfPersonCreditLine|null $History
     */
    protected $History;

    /**
     * @param  SimpleType\guid|null $personId
     * @return PersonCredits
     */
    public function setPersonId(SimpleType\guid $personId = null)
    {
        $this->PersonId = $personId;

        return $this;
    }

    /**
     * @return SimpleType\guid|null
     */
    public function getPersonId()
    {
        return $this->PersonId;
    }

    /**
     * @param  integer|null  $balance
     * @return PersonCredits
     */
    public function setBalance($balance)
    {
        $this->Balance = $balance;

        return $this;
    }

    /**
     * @return integer|null
     */
    public function getBalance()
    {
        return $this->Balance;
    }

    /**
     * @param  ArrayOfPersonCreditLine|null $history
     * @return PersonCredits
     */
    public function setHistory(ArrayOfPersonCreditLine $history = null)
    {
        $this->History = $history;

        return $this;
    }

    /**
     * @return ArrayOfPersonCreditLine|null
     */
    public function getHistory()
    {
        return $this->History;
    }

}
