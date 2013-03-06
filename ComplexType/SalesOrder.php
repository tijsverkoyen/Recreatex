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

     * maxOccurs = 1     * @var SimpleTypeGuid
     */
    protected $Id;

    /**

     * maxOccurs = 1     * @var string
     */
    protected $Description;

    /**

     * maxOccurs = 1     * @var string
     */
    protected $Date;

    /**

     * maxOccurs = 1     * @var SimpleTypeGuid
     */
    protected $PersonId;

    /**

     * maxOccurs = 1     * @var integer
     */
    protected $Number;

    /**

     * maxOccurs = 1     * @var integer
     */
    protected $SequenceNumber;

    /**

     * maxOccurs = 1     * @var float
     */
    protected $Quantity;

    /**

     * maxOccurs = 1     * @var float
     */
    protected $UnitPrice;

    /**

     * maxOccurs = 1     * @var float
     */
    protected $TotalPrice;

    /**
     * @param  SimpleType\guid[optional] $id
     * @return SalesOrder
     */
    public function setId(SimpleType\guid $id = null)
    {
        $this->Id = $id;

        return $this;
    }

    /**
     * @return SimpleType\guid
     */
    public function getId()
    {
        return $this->Id;
    }

    /**
     * @param  string[optional] $description
     * @return SalesOrder
     */
    public function setDescription($description)
    {
        $this->Description = $description;

        return $this;
    }

    /**
     * @return string
     */
    public function getDescription()
    {
        return $this->Description;
    }

    /**
     * @param  string[optional] $date
     * @return SalesOrder
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
     * @param  SimpleType\guid[optional] $personId
     * @return SalesOrder
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
     * @param  integer[optional] $number
     * @return SalesOrder
     */
    public function setNumber($number)
    {
        $this->Number = $number;

        return $this;
    }

    /**
     * @return integer
     */
    public function getNumber()
    {
        return $this->Number;
    }

    /**
     * @param  integer[optional] $sequenceNumber
     * @return SalesOrder
     */
    public function setSequenceNumber($sequenceNumber)
    {
        $this->SequenceNumber = $sequenceNumber;

        return $this;
    }

    /**
     * @return integer
     */
    public function getSequenceNumber()
    {
        return $this->SequenceNumber;
    }

    /**
     * @param  float[optional] $quantity
     * @return SalesOrder
     */
    public function setQuantity($quantity)
    {
        $this->Quantity = $quantity;

        return $this;
    }

    /**
     * @return float
     */
    public function getQuantity()
    {
        return $this->Quantity;
    }

    /**
     * @param  float[optional] $unitPrice
     * @return SalesOrder
     */
    public function setUnitPrice($unitPrice)
    {
        $this->UnitPrice = $unitPrice;

        return $this;
    }

    /**
     * @return float
     */
    public function getUnitPrice()
    {
        return $this->UnitPrice;
    }

    /**
     * @param  float[optional] $totalPrice
     * @return SalesOrder
     */
    public function setTotalPrice($totalPrice)
    {
        $this->TotalPrice = $totalPrice;

        return $this;
    }

    /**
     * @return float
     */
    public function getTotalPrice()
    {
        return $this->TotalPrice;
    }
}
