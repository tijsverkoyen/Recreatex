<?php

namespace TijsVerkoyen\Recreatex\ComplexType;

use TijsVerkoyen\Recreatex\SimpleType;

/**
 *
 * @link https://github.com/opensoft/php-wsdl-proxy-generator WSDL parser and Proxy class generator on PHP
 * @author WSDL parser and Proxy class generator on PHP
 */
class PersonChipKnipLine extends ComplexTypeAbstract
{
    const CLASS_NAME = 'PersonChipKnipLine';

    /**

     * @var SimpleTypeGuid
     */
    protected $Id;

    /**

     * @var string
     */
    protected $Date;

    /**

     * @var float
     */
    protected $Amount;

    /**

     * @var float
     */
    protected $Balance;

    /**
     * @param  SimpleType\Guid[optional] $id
     * @return PersonChipKnipLine
     */
    public function setId(SimpleType\Guid $id = null)
    {
        $this->Id = $id;

        return $this;
    }

    /**
     * @return SimpleType\Guid
     */
    public function getId()
    {
        return $this->Id;
    }

    /**
     * @param  string[optional]   $date
     * @return PersonChipKnipLine
     */
    public function setDate($date)
    {
        $this->Date = $date;

        return $this;
    }

    /**
     * @return string
     */
    public function getDate()
    {
        return $this->Date;
    }

    /**
     * @param  float[optional]    $amount
     * @return PersonChipKnipLine
     */
    public function setAmount($amount)
    {
        $this->Amount = $amount;

        return $this;
    }

    /**
     * @return float
     */
    public function getAmount()
    {
        return $this->Amount;
    }

    /**
     * @param  float[optional]    $balance
     * @return PersonChipKnipLine
     */
    public function setBalance($balance)
    {
        $this->Balance = $balance;

        return $this;
    }

    /**
     * @return float
     */
    public function getBalance()
    {
        return $this->Balance;
    }
}
