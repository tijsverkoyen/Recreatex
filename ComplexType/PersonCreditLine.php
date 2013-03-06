<?php

namespace TijsVerkoyen\Recreatex\ComplexType;

use TijsVerkoyen\Recreatex\SimpleType;

/**
 *
 * @link https://github.com/opensoft/php-wsdl-proxy-generator WSDL parser and Proxy class generator on PHP
 * @author WSDL parser and Proxy class generator on PHP
 */
class PersonCreditLine extends ComplexTypeAbstract
{
    const CLASS_NAME = 'PersonCreditLine';

    /**
     * @var SimpleTypeGuid
     */
    protected $Id;

    /**
     * @var string
     */
    protected $Date;

    /**
     * @var integer
     */
    protected $Quantity;

    /**
     * @var integer
     */
    protected $Balance;

    /**
     * @param  SimpleType\Guid[optional] $id
     * @return PersonCreditLine
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
     * @param  string[optional] $date
     * @return PersonCreditLine
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
     * @param  integer[optional] $quantity
     * @return PersonCreditLine
     */
    public function setQuantity($quantity)
    {
        $this->Quantity = $quantity;

        return $this;
    }

    /**
     * @return integer
     */
    public function getQuantity()
    {
        return $this->Quantity;
    }

    /**
     * @param  integer[optional] $balance
     * @return PersonCreditLine
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
}
