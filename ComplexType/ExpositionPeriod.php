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
     * @var SimpleType\Guid
     */
    protected $ExpositionId;

    /**
     * @var string
     */
    protected $FinalSubscriptionDate;

    /**
     * @var string
     */
    protected $From;

    /**
     * @var SimpleType\Guid
     */
    protected $Id;

    /**
     * @var Occupancy
     */
    protected $Occupancy;

    /**
     * @var string
     */
    protected $Until;

    /**
     * @param  SimpleType\Guid[optional] $expositionId
     * @return ExpositionPeriod
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
     * @param  string[optional] $finalSubscriptionDate
     * @return ExpositionPeriod
     */
    public function setFinalSubscriptionDate($finalSubscriptionDate)
    {
        $this->FinalSubscriptionDate = $finalSubscriptionDate;

        return $this;
    }

    /**
     * @return string
     */
    public function getFinalSubscriptionDate()
    {
        return $this->FinalSubscriptionDate;
    }

    /**
     * @param  string[optional] $from
     * @return ExpositionPeriod
     */
    public function setFrom($from)
    {
        $this->From = $from;

        return $this;
    }

    /**
     * @return string
     */
    public function getFrom()
    {
        return $this->From;
    }

    /**
     * @param  SimpleType\Guid[optional] $id
     * @return ExpositionPeriod
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
     * @param  Occupancy[optional] $occupancy
     * @return ExpositionPeriod
     */
    public function setOccupancy(Occupancy $occupancy = null)
    {
        $this->Occupancy = $occupancy;

        return $this;
    }

    /**
     * @return Occupancy
     */
    public function getOccupancy()
    {
        return $this->Occupancy;
    }

    /**
     * @param  string[optional] $until
     * @return ExpositionPeriod
     */
    public function setUntil($until)
    {
        $this->Until = $until;

        return $this;
    }

    /**
     * @return string
     */
    public function getUntil()
    {
        return $this->Until;
    }
}
