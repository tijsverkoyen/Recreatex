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
     * @var SimpleType\guid|null $RentalOrderId
     */
    protected $RentalOrderId;

    /**

     * minOccurs = 0
     * maxOccurs = 1
     *
     * @var integer|null $Sequence
     */
    protected $Sequence;

    /**

     * minOccurs = 0
     * maxOccurs = 1
     *
     * @var string|null $StartDateTime
     */
    protected $StartDateTime;

    /**

     * minOccurs = 0
     * maxOccurs = 1
     *
     * @var string|null $EndDateTime
     */
    protected $EndDateTime;

    /**

     * minOccurs = 0
     * maxOccurs = 1
     *
     * @var string|null $PlannedDeliveryDateTime
     */
    protected $PlannedDeliveryDateTime;

    /**

     * minOccurs = 0
     * maxOccurs = 1
     *
     * @var string|null $PlannedReturnDateTime
     */
    protected $PlannedReturnDateTime;

    /**

     * minOccurs = 0
     * maxOccurs = 1
     *
     * @var SimpleType\guid|null $ItemID
     */
    protected $ItemID;

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
     * @var string|null $Description
     */
    protected $Description;

    /**

     * minOccurs = 0
     * maxOccurs = 1
     *
     * @var string|null $Info
     */
    protected $Info;

    /**

     * minOccurs = 0
     * maxOccurs = 1
     *
     * @var boolean|null $Webcreated
     */
    protected $Webcreated;

    /**

     * minOccurs = 0
     * maxOccurs = 1
     *
     * @var SimpleType\RentalCalculationType|null $CalculationType
     */
    protected $CalculationType;

    /**

     * minOccurs = 0
     * maxOccurs = 1
     *
     * @var float|null $UnitPriceInc
     */
    protected $UnitPriceInc;

    /**

     * minOccurs = 0
     * maxOccurs = 1
     *
     * @var float|null $Amount
     */
    protected $Amount;

    /**

     * minOccurs = 0
     * maxOccurs = 1
     *
     * @var float|null $Deposit
     */
    protected $Deposit;

    /**

     * minOccurs = 0
     * maxOccurs = 1
     *
     * @var ArrayOfRentalOrderLine|null $Components
     */
    protected $Components;

    /**
     * @param  SimpleType\guid|null $id
     * @return RentalOrderLine
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
     * @param  SimpleType\guid|null $rentalOrderId
     * @return RentalOrderLine
     */
    public function setRentalOrderId(SimpleType\guid $rentalOrderId = null)
    {
        $this->RentalOrderId = $rentalOrderId;

        return $this;
    }

    /**
     * @return SimpleType\guid|null
     */
    public function getRentalOrderId()
    {
        return $this->RentalOrderId;
    }

    /**
     * @param  integer|null    $sequence
     * @return RentalOrderLine
     */
    public function setSequence($sequence)
    {
        $this->Sequence = $sequence;

        return $this;
    }

    /**
     * @return integer|null
     */
    public function getSequence()
    {
        return $this->Sequence;
    }

    /**
     * @param  string|null     $startDateTime
     * @return RentalOrderLine
     */
    public function setStartDateTime($startDateTime)
    {
        $this->StartDateTime = $startDateTime;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getStartDateTime()
    {
        return $this->StartDateTime;
    }

    /**
     * @param  string|null     $endDateTime
     * @return RentalOrderLine
     */
    public function setEndDateTime($endDateTime)
    {
        $this->EndDateTime = $endDateTime;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getEndDateTime()
    {
        return $this->EndDateTime;
    }

    /**
     * @param  string|null     $plannedDeliveryDateTime
     * @return RentalOrderLine
     */
    public function setPlannedDeliveryDateTime($plannedDeliveryDateTime)
    {
        $this->PlannedDeliveryDateTime = $plannedDeliveryDateTime;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getPlannedDeliveryDateTime()
    {
        return $this->PlannedDeliveryDateTime;
    }

    /**
     * @param  string|null     $plannedReturnDateTime
     * @return RentalOrderLine
     */
    public function setPlannedReturnDateTime($plannedReturnDateTime)
    {
        $this->PlannedReturnDateTime = $plannedReturnDateTime;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getPlannedReturnDateTime()
    {
        return $this->PlannedReturnDateTime;
    }

    /**
     * @param  SimpleType\guid|null $itemID
     * @return RentalOrderLine
     */
    public function setItemID(SimpleType\guid $itemID = null)
    {
        $this->ItemID = $itemID;

        return $this;
    }

    /**
     * @return SimpleType\guid|null
     */
    public function getItemID()
    {
        return $this->ItemID;
    }

    /**
     * @param  integer|null    $quantity
     * @return RentalOrderLine
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
     * @param  string|null     $description
     * @return RentalOrderLine
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
     * @param  string|null     $info
     * @return RentalOrderLine
     */
    public function setInfo($info)
    {
        $this->Info = $info;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getInfo()
    {
        return $this->Info;
    }

    /**
     * @param  boolean|null    $webcreated
     * @return RentalOrderLine
     */
    public function setWebcreated($webcreated)
    {
        $this->Webcreated = $webcreated;

        return $this;
    }

    /**
     * @return boolean|null
     */
    public function getWebcreated()
    {
        return $this->Webcreated;
    }

    /**
     * @param  SimpleType\RentalCalculationType|null $calculationType
     * @return RentalOrderLine
     */
    public function setCalculationType(SimpleType\RentalCalculationType $calculationType = null)
    {
        $this->CalculationType = $calculationType;

        return $this;
    }

    /**
     * @return SimpleType\RentalCalculationType|null
     */
    public function getCalculationType()
    {
        return $this->CalculationType;
    }

    /**
     * @param  float|null      $unitPriceInc
     * @return RentalOrderLine
     */
    public function setUnitPriceInc($unitPriceInc)
    {
        $this->UnitPriceInc = $unitPriceInc;

        return $this;
    }

    /**
     * @return float|null
     */
    public function getUnitPriceInc()
    {
        return $this->UnitPriceInc;
    }

    /**
     * @param  float|null      $amount
     * @return RentalOrderLine
     */
    public function setAmount($amount)
    {
        $this->Amount = $amount;

        return $this;
    }

    /**
     * @return float|null
     */
    public function getAmount()
    {
        return $this->Amount;
    }

    /**
     * @param  float|null      $deposit
     * @return RentalOrderLine
     */
    public function setDeposit($deposit)
    {
        $this->Deposit = $deposit;

        return $this;
    }

    /**
     * @return float|null
     */
    public function getDeposit()
    {
        return $this->Deposit;
    }

    /**
     * @param  ArrayOfRentalOrderLine|null $components
     * @return RentalOrderLine
     */
    public function setComponents(ArrayOfRentalOrderLine $components = null)
    {
        $this->Components = $components;

        return $this;
    }

    /**
     * @return ArrayOfRentalOrderLine|null
     */
    public function getComponents()
    {
        return $this->Components;
    }

}
