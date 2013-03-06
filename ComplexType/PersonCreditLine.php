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

     * minOccurs = 0
     * maxOccurs = 1
     *
     * @var SimpleType\guid|null $Id
     */
    protected $Id;

    /**

     * minOccurs = 0
     * maxOccurs = 1
     *
     * @var string|null $Date
     */
    protected $Date;

    /**

     * minOccurs = 0
     * maxOccurs = 1
     *
     * @var integer|null $Quantity
     */
    protected $Quantity;

    /**

     * minOccurs = 0
     * maxOccurs = 1
     *
     * @var integer|null $Balance
     */
    protected $Balance;

    /**
     * @param  SimpleType\guid|null $id
     * @return PersonCreditLine
     */
    public function setId(SimpleType\guid $id = null)
    {
        $this->Id = $id;

        return $this;
    }

    /**
     * @return SimpleType\guid|null
     */
    public function getId()
    {
        return $this->Id;
    }

    /**
     * @param  string|null      $date
     * @return PersonCreditLine
     */
    public function setDate($date)
    {
        $this->Date = $date;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getDate()
    {
        return $this->Date;
    }

    /**
     * @param  integer|null     $quantity
     * @return PersonCreditLine
     */
    public function setQuantity($quantity)
    {
        $this->Quantity = $quantity;

        return $this;
    }

    /**
     * @return integer|null
     */
    public function getQuantity()
    {
        return $this->Quantity;
    }

    /**
     * @param  integer|null     $balance
     * @return PersonCreditLine
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

}
