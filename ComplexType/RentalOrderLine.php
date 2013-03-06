<?php

namespace TijsVerkoyen\Recreatex\ComplexType;

use TijsVerkoyen\Recreatex\SimpleType;

/**
 *
 * @link https://github.com/opensoft/php-wsdl-proxy-generator WSDL parser and Proxy class generator on PHP
 * @author WSDL parser and Proxy class generator on PHP
 */
class RentalOrderLine extends ComplexTypeAbstract
{
    const CLASS_NAME = 'RentalOrderLine';

    /**

     * @var SimpleTypeGuid
     */
    protected $Id;

    /**

     * @var SimpleTypeGuid
     */
    protected $RentalOrderId;

    /**

     * @var integer
     */
    protected $Sequence;

    /**

     * @var string
     */
    protected $StartDateTime;

    /**

     * @var string
     */
    protected $EndDateTime;

    /**

     * @var string
     */
    protected $PlannedDeliveryDateTime;

    /**

     * @var string
     */
    protected $PlannedReturnDateTime;

    /**

     * @var SimpleTypeGuid
     */
    protected $ItemID;

    /**

     * @var integer
     */
    protected $Quantity;

    /**

     * @var string
     */
    protected $Description;

    /**

     * @var string
     */
    protected $Info;

    /**

     * @var boolean
     */
    protected $Webcreated;

    /**

     * @var SimpleType\RentalCalculationType
     */
    protected $CalculationType;

    /**

     * @var float
     */
    protected $UnitPriceInc;

    /**

     * @var float
     */
    protected $Amount;

    /**

     * @var float
     */
    protected $Deposit;

    /**

     * @var ArrayOfRentalOrderLine
     */
    protected $Components;

    /**
     * @param  SimpleType\Guid[optional] $id
     * @return RentalOrderLine
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
     * @param  SimpleType\Guid[optional] $rentalOrderId
     * @return RentalOrderLine
     */
    public function setRentalOrderId(SimpleType\Guid $rentalOrderId = null)
    {
        $this->RentalOrderId = $rentalOrderId;

        return $this;
    }

    /**
     * @return SimpleType\Guid
     */
    public function getRentalOrderId()
    {
        return $this->RentalOrderId;
    }

    /**
     * @param  integer[optional] $sequence
     * @return RentalOrderLine
     */
    public function setSequence($sequence)
    {
        $this->Sequence = $sequence;

        return $this;
    }

    /**
     * @return integer
     */
    public function getSequence()
    {
        return $this->Sequence;
    }

    /**
     * @param  string[optional] $startDateTime
     * @return RentalOrderLine
     */
    public function setStartDateTime($startDateTime)
    {
        $this->StartDateTime = $startDateTime;

        return $this;
    }

    /**
     * @return string
     */
    public function getStartDateTime()
    {
        return $this->StartDateTime;
    }

    /**
     * @param  string[optional] $endDateTime
     * @return RentalOrderLine
     */
    public function setEndDateTime($endDateTime)
    {
        $this->EndDateTime = $endDateTime;

        return $this;
    }

    /**
     * @return string
     */
    public function getEndDateTime()
    {
        return $this->EndDateTime;
    }

    /**
     * @param  string[optional] $plannedDeliveryDateTime
     * @return RentalOrderLine
     */
    public function setPlannedDeliveryDateTime($plannedDeliveryDateTime)
    {
        $this->PlannedDeliveryDateTime = $plannedDeliveryDateTime;

        return $this;
    }

    /**
     * @return string
     */
    public function getPlannedDeliveryDateTime()
    {
        return $this->PlannedDeliveryDateTime;
    }

    /**
     * @param  string[optional] $plannedReturnDateTime
     * @return RentalOrderLine
     */
    public function setPlannedReturnDateTime($plannedReturnDateTime)
    {
        $this->PlannedReturnDateTime = $plannedReturnDateTime;

        return $this;
    }

    /**
     * @return string
     */
    public function getPlannedReturnDateTime()
    {
        return $this->PlannedReturnDateTime;
    }

    /**
     * @param  SimpleType\Guid[optional] $itemID
     * @return RentalOrderLine
     */
    public function setItemID(SimpleType\Guid $itemID = null)
    {
        $this->ItemID = $itemID;

        return $this;
    }

    /**
     * @return SimpleType\Guid
     */
    public function getItemID()
    {
        return $this->ItemID;
    }

    /**
     * @param  integer[optional] $quantity
     * @return RentalOrderLine
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
     * @param  string[optional] $description
     * @return RentalOrderLine
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
     * @param  string[optional] $info
     * @return RentalOrderLine
     */
    public function setInfo($info)
    {
        $this->Info = $info;

        return $this;
    }

    /**
     * @return string
     */
    public function getInfo()
    {
        return $this->Info;
    }

    /**
     * @param  boolean[optional] $webcreated
     * @return RentalOrderLine
     */
    public function setWebcreated($webcreated)
    {
        $this->Webcreated = $webcreated;

        return $this;
    }

    /**
     * @return boolean
     */
    public function getWebcreated()
    {
        return $this->Webcreated;
    }

    /**
     * @param  SimpleType\RentalCalculationType[optional] $calculationType
     * @return RentalOrderLine
     */
    public function setCalculationType(SimpleType\RentalCalculationType $calculationType = null)
    {
        $this->CalculationType = $calculationType;

        return $this;
    }

    /**
     * @return SimpleType\RentalCalculationType
     */
    public function getCalculationType()
    {
        return $this->CalculationType;
    }

    /**
     * @param  float[optional] $unitPriceInc
     * @return RentalOrderLine
     */
    public function setUnitPriceInc($unitPriceInc)
    {
        $this->UnitPriceInc = $unitPriceInc;

        return $this;
    }

    /**
     * @return float
     */
    public function getUnitPriceInc()
    {
        return $this->UnitPriceInc;
    }

    /**
     * @param  float[optional] $amount
     * @return RentalOrderLine
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
     * @param  float[optional] $deposit
     * @return RentalOrderLine
     */
    public function setDeposit($deposit)
    {
        $this->Deposit = $deposit;

        return $this;
    }

    /**
     * @return float
     */
    public function getDeposit()
    {
        return $this->Deposit;
    }

    /**
     * @param  ArrayOfRentalOrderLine[optional] $components
     * @return RentalOrderLine
     */
    public function setComponents(ArrayOfRentalOrderLine $components = null)
    {
        $this->Components = $components;

        return $this;
    }

    /**
     * @return ArrayOfRentalOrderLine
     */
    public function getComponents()
    {
        return $this->Components;
    }
}
