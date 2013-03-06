<?php

namespace TijsVerkoyen\Recreatex\ComplexType;

use TijsVerkoyen\Recreatex\SimpleType;

/**
 *
 * @link https://github.com/opensoft/php-wsdl-proxy-generator WSDL parser and Proxy class generator on PHP
 * @author WSDL parser and Proxy class generator on PHP
 */
class SalesOrder extends ComplexTypeAbstract
{
    const CLASS_NAME = 'SalesOrder';

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
     * @var string|null $Description
     */
    protected $Description;

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
     * @var SimpleType\guid|null $PersonId
     */
    protected $PersonId;

    /**

     * minOccurs = 0
     * maxOccurs = 1
     *
     * @var integer|null $Number
     */
    protected $Number;

    /**

     * minOccurs = 0
     * maxOccurs = 1
     *
     * @var integer|null $SequenceNumber
     */
    protected $SequenceNumber;

    /**

     * minOccurs = 0
     * maxOccurs = 1
     *
     * @var float|null $Quantity
     */
    protected $Quantity;

    /**

     * minOccurs = 0
     * maxOccurs = 1
     *
     * @var float|null $UnitPrice
     */
    protected $UnitPrice;

    /**

     * minOccurs = 0
     * maxOccurs = 1
     *
     * @var float|null $TotalPrice
     */
    protected $TotalPrice;

    /**
     * @param  SimpleType\guid|null $id
     * @return SalesOrder
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
     * @param  string|null $description
     * @return SalesOrder
     */
    public function setDescription($description)
    {
        $this->Description = $description;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getDescription()
    {
        return $this->Description;
    }

    /**
     * @param  string|null $date
     * @return SalesOrder
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
     * @param  SimpleType\guid|null $personId
     * @return SalesOrder
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
     * @param  integer|null $number
     * @return SalesOrder
     */
    public function setNumber($number)
    {
        $this->Number = $number;

        return $this;
    }

    /**
     * @return integer|null
     */
    public function getNumber()
    {
        return $this->Number;
    }

    /**
     * @param  integer|null $sequenceNumber
     * @return SalesOrder
     */
    public function setSequenceNumber($sequenceNumber)
    {
        $this->SequenceNumber = $sequenceNumber;

        return $this;
    }

    /**
     * @return integer|null
     */
    public function getSequenceNumber()
    {
        return $this->SequenceNumber;
    }

    /**
     * @param  float|null $quantity
     * @return SalesOrder
     */
    public function setQuantity($quantity)
    {
        $this->Quantity = $quantity;

        return $this;
    }

    /**
     * @return float|null
     */
    public function getQuantity()
    {
        return $this->Quantity;
    }

    /**
     * @param  float|null $unitPrice
     * @return SalesOrder
     */
    public function setUnitPrice($unitPrice)
    {
        $this->UnitPrice = $unitPrice;

        return $this;
    }

    /**
     * @return float|null
     */
    public function getUnitPrice()
    {
        return $this->UnitPrice;
    }

    /**
     * @param  float|null $totalPrice
     * @return SalesOrder
     */
    public function setTotalPrice($totalPrice)
    {
        $this->TotalPrice = $totalPrice;

        return $this;
    }

    /**
     * @return float|null
     */
    public function getTotalPrice()
    {
        return $this->TotalPrice;
    }

}
