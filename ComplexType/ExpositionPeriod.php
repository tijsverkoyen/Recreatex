<?php

namespace TijsVerkoyen\Recreatex\ComplexType;

use TijsVerkoyen\Recreatex\SimpleType;

/**
 *
 * @link https://github.com/opensoft/php-wsdl-proxy-generator WSDL parser and Proxy class generator on PHP
 * @author WSDL parser and Proxy class generator on PHP
 */
class ExpositionPeriod extends ComplexTypeAbstract
{
    const CLASS_NAME = 'ExpositionPeriod';

    /**

     * minOccurs = 0
     * maxOccurs = 1
     *
     * @var SimpleType\Guid|null $ExpositionId
     */
    protected $ExpositionId;

    /**

     * minOccurs = 0
     * maxOccurs = 1
     *
     * @var string|null $FinalSubscriptionDate
     */
    protected $FinalSubscriptionDate;

    /**

     * minOccurs = 0
     * maxOccurs = 1
     *
     * @var string|null $From
     */
    protected $From;

    /**

     * minOccurs = 0
     * maxOccurs = 1
     *
     * @var SimpleType\Guid|null $Id
     */
    protected $Id;

    /**

     * minOccurs = 0
     * maxOccurs = 1
     *
     * @var Occupancy|null $Occupancy
     */
    protected $Occupancy;

    /**

     * minOccurs = 0
     * maxOccurs = 1
     *
     * @var string|null $Until
     */
    protected $Until;

    /**
     * @param  SimpleType\Guid|null $expositionId
     * @return ExpositionPeriod
     */
    public function setExpositionId(SimpleType\Guid $expositionId = null)
    {
        $this->ExpositionId = $expositionId;

        return $this;
    }

    /**
     * @return SimpleType\Guid|null
     */
    public function getExpositionId()
    {
        return $this->ExpositionId;
    }

    /**
     * @param  string|null      $finalSubscriptionDate
     * @return ExpositionPeriod
     */
    public function setFinalSubscriptionDate($finalSubscriptionDate)
    {
        $this->FinalSubscriptionDate = $finalSubscriptionDate;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getFinalSubscriptionDate()
    {
        return $this->FinalSubscriptionDate;
    }

    /**
     * @param  string|null      $from
     * @return ExpositionPeriod
     */
    public function setFrom($from)
    {
        $this->From = $from;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getFrom()
    {
        return $this->From;
    }

    /**
     * @param  SimpleType\Guid|null $id
     * @return ExpositionPeriod
     */
    public function setId(SimpleType\Guid $id = null)
    {
        $this->Id = $id;

        return $this;
    }

    /**
     * @return SimpleType\Guid|null
     */
    public function getId()
    {
        return $this->Id;
    }

    /**
     * @param  Occupancy|null   $occupancy
     * @return ExpositionPeriod
     */
    public function setOccupancy(Occupancy $occupancy = null)
    {
        $this->Occupancy = $occupancy;

        return $this;
    }

    /**
     * @return Occupancy|null
     */
    public function getOccupancy()
    {
        return $this->Occupancy;
    }

    /**
     * @param  string|null      $until
     * @return ExpositionPeriod
     */
    public function setUntil($until)
    {
        $this->Until = $until;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getUntil()
    {
        return $this->Until;
    }
}
