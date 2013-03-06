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
     * @var SimpleType\guid|null $ExpositionId
     */
    protected $ExpositionId;

    /**

     * minOccurs = 0
     * maxOccurs = 1
     *
     * @var SimpleType\guid|null $ExpositionPeriodId
     */
    protected $ExpositionPeriodId;

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
     * @var float|null $UnitPrice
     */
    protected $UnitPrice;

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
     * @var string|null $ExpositionCode
     */
    protected $ExpositionCode;

    /**

     * minOccurs = 0
     * maxOccurs = 1
     *
     * @var string|null $ExpositionDescription
     */
    protected $ExpositionDescription;

    /**

     * minOccurs = 0
     * maxOccurs = 1
     *
     * @var string|null $ExpositionName
     */
    protected $ExpositionName;

    /**

     * minOccurs = 0
     * maxOccurs = 1
     *
     * @var string|null $ExpositionPeriodFrom
     */
    protected $ExpositionPeriodFrom;

    /**

     * minOccurs = 0
     * maxOccurs = 1
     *
     * @var string|null $ExpositionPeriodUntil
     */
    protected $ExpositionPeriodUntil;

    /**
     * @param  SimpleType\guid|null            $id
     * @return OrganisedVisitPeriodReservation
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
     * @param  SimpleType\guid|null            $expositionId
     * @return OrganisedVisitPeriodReservation
     */
    public function setExpositionId(SimpleType\guid $expositionId = null)
    {
        $this->ExpositionId = $expositionId;

        return $this;
    }

    /**
     * @return SimpleType\guid|null
     */
    public function getExpositionId()
    {
        return $this->ExpositionId;
    }

    /**
     * @param  SimpleType\guid|null            $expositionPeriodId
     * @return OrganisedVisitPeriodReservation
     */
    public function setExpositionPeriodId(SimpleType\guid $expositionPeriodId = null)
    {
        $this->ExpositionPeriodId = $expositionPeriodId;

        return $this;
    }

    /**
     * @return SimpleType\guid|null
     */
    public function getExpositionPeriodId()
    {
        return $this->ExpositionPeriodId;
    }

    /**
     * @param  integer|null                    $quantity
     * @return OrganisedVisitPeriodReservation
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
     * @param  float|null                      $unitPrice
     * @return OrganisedVisitPeriodReservation
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
     * @param  float|null                      $amount
     * @return OrganisedVisitPeriodReservation
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
     * @param  string|null                     $expositionCode
     * @return OrganisedVisitPeriodReservation
     */
    public function setExpositionCode($expositionCode)
    {
        $this->ExpositionCode = $expositionCode;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getExpositionCode()
    {
        return $this->ExpositionCode;
    }

    /**
     * @param  string|null                     $expositionDescription
     * @return OrganisedVisitPeriodReservation
     */
    public function setExpositionDescription($expositionDescription)
    {
        $this->ExpositionDescription = $expositionDescription;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getExpositionDescription()
    {
        return $this->ExpositionDescription;
    }

    /**
     * @param  string|null                     $expositionName
     * @return OrganisedVisitPeriodReservation
     */
    public function setExpositionName($expositionName)
    {
        $this->ExpositionName = $expositionName;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getExpositionName()
    {
        return $this->ExpositionName;
    }

    /**
     * @param  string|null                     $expositionPeriodFrom
     * @return OrganisedVisitPeriodReservation
     */
    public function setExpositionPeriodFrom($expositionPeriodFrom)
    {
        $this->ExpositionPeriodFrom = $expositionPeriodFrom;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getExpositionPeriodFrom()
    {
        return $this->ExpositionPeriodFrom;
    }

    /**
     * @param  string|null                     $expositionPeriodUntil
     * @return OrganisedVisitPeriodReservation
     */
    public function setExpositionPeriodUntil($expositionPeriodUntil)
    {
        $this->ExpositionPeriodUntil = $expositionPeriodUntil;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getExpositionPeriodUntil()
    {
        return $this->ExpositionPeriodUntil;
    }

}
