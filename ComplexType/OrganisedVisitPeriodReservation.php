<?php

namespace TijsVerkoyen\Recreatex\ComplexType;

use TijsVerkoyen\Recreatex\SimpleType;

/**
 *
 * @link https://github.com/opensoft/php-wsdl-proxy-generator WSDL parser and Proxy class generator on PHP
 * @author WSDL parser and Proxy class generator on PHP
 */
class OrganisedVisitPeriodReservation extends ComplexTypeAbstract
{
    const CLASS_NAME = 'OrganisedVisitPeriodReservation';

    /**
     * @var SimpleTypeGuid
     */
    protected $Id;

    /**
     * @var SimpleTypeGuid
     */
    protected $ExpositionId;

    /**
     * @var SimpleTypeGuid
     */
    protected $ExpositionPeriodId;

    /**
     * @var integer
     */
    protected $Quantity;

    /**
     * @var float
     */
    protected $UnitPrice;

    /**
     * @var float
     */
    protected $Amount;

    /**
     * @var string
     */
    protected $ExpositionCode;

    /**
     * @var string
     */
    protected $ExpositionDescription;

    /**
     * @var string
     */
    protected $ExpositionName;

    /**
     * @var string
     */
    protected $ExpositionPeriodFrom;

    /**
     * @var string
     */
    protected $ExpositionPeriodUntil;

    /**
     * @param  SimpleType\Guid[optional]       $id
     * @return OrganisedVisitPeriodReservation
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
     * @param  SimpleType\Guid[optional]       $expositionId
     * @return OrganisedVisitPeriodReservation
     */
    public function setExpositionId(SimpleType\Guid $expositionId = null)
    {
        $this->ExpositionId = $expositionId;

        return $this;
    }

    /**
     * @return SimpleType\Guid
     */
    public function getExpositionId()
    {
        return $this->ExpositionId;
    }

    /**
     * @param  SimpleType\Guid[optional]       $expositionPeriodId
     * @return OrganisedVisitPeriodReservation
     */
    public function setExpositionPeriodId(SimpleType\Guid $expositionPeriodId = null)
    {
        $this->ExpositionPeriodId = $expositionPeriodId;

        return $this;
    }

    /**
     * @return SimpleType\Guid
     */
    public function getExpositionPeriodId()
    {
        return $this->ExpositionPeriodId;
    }

    /**
     * @param  integer[optional]               $quantity
     * @return OrganisedVisitPeriodReservation
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
     * @param  float[optional]                 $unitPrice
     * @return OrganisedVisitPeriodReservation
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
     * @param  float[optional]                 $amount
     * @return OrganisedVisitPeriodReservation
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
     * @param  string[optional]                $expositionCode
     * @return OrganisedVisitPeriodReservation
     */
    public function setExpositionCode($expositionCode)
    {
        $this->ExpositionCode = $expositionCode;

        return $this;
    }

    /**
     * @return string
     */
    public function getExpositionCode()
    {
        return $this->ExpositionCode;
    }

    /**
     * @param  string[optional]                $expositionDescription
     * @return OrganisedVisitPeriodReservation
     */
    public function setExpositionDescription($expositionDescription)
    {
        $this->ExpositionDescription = $expositionDescription;

        return $this;
    }

    /**
     * @return string
     */
    public function getExpositionDescription()
    {
        return $this->ExpositionDescription;
    }

    /**
     * @param  string[optional]                $expositionName
     * @return OrganisedVisitPeriodReservation
     */
    public function setExpositionName($expositionName)
    {
        $this->ExpositionName = $expositionName;

        return $this;
    }

    /**
     * @return string
     */
    public function getExpositionName()
    {
        return $this->ExpositionName;
    }

    /**
     * @param  string[optional]                $expositionPeriodFrom
     * @return OrganisedVisitPeriodReservation
     */
    public function setExpositionPeriodFrom($expositionPeriodFrom)
    {
        $this->ExpositionPeriodFrom = $expositionPeriodFrom;

        return $this;
    }

    /**
     * @return string
     */
    public function getExpositionPeriodFrom()
    {
        return $this->ExpositionPeriodFrom;
    }

    /**
     * @param  string[optional]                $expositionPeriodUntil
     * @return OrganisedVisitPeriodReservation
     */
    public function setExpositionPeriodUntil($expositionPeriodUntil)
    {
        $this->ExpositionPeriodUntil = $expositionPeriodUntil;

        return $this;
    }

    /**
     * @return string
     */
    public function getExpositionPeriodUntil()
    {
        return $this->ExpositionPeriodUntil;
    }
}
