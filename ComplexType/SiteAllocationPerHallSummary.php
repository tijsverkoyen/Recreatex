<?php

namespace TijsVerkoyen\Recreatex\ComplexType;

use TijsVerkoyen\Recreatex\SimpleType;

/**
 *
 * @link https://github.com/opensoft/php-wsdl-proxy-generator WSDL parser and Proxy class generator on PHP
 * @author WSDL parser and Proxy class generator on PHP
 */
class SiteAllocationPerHallSummary extends ComplexTypeAbstract
{
    const CLASS_NAME = 'SiteAllocationPerHallSummary';

    /**

     * minOccurs = 0
     * maxOccurs = 1
     *
     * @var SimpleType\guid|null $EventId
     */
    protected $EventId;

    /**

     * minOccurs = 0
     * maxOccurs = 1
     *
     * @var integer|null $ReservedPlaces
     */
    protected $ReservedPlaces;

    /**

     * minOccurs = 0
     * maxOccurs = 1
     *
     * @var integer|null $TotalPlaces
     */
    protected $TotalPlaces;

    /**
     * @param  SimpleType\guid|null         $eventId
     * @return SiteAllocationPerHallSummary
     */
    public function setEventId(SimpleType\guid $eventId = null)
    {
        $this->EventId = $eventId;

        return $this;
    }

    /**
     * @return SimpleType\guid|null
     */
    public function getEventId()
    {
        return $this->EventId;
    }

    /**
     * @param  integer|null                 $reservedPlaces
     * @return SiteAllocationPerHallSummary
     */
    public function setReservedPlaces($reservedPlaces)
    {
        $this->ReservedPlaces = $reservedPlaces;

        return $this;
    }

    /**
     * @return integer|null
     */
    public function getReservedPlaces()
    {
        return $this->ReservedPlaces;
    }

    /**
     * @param  integer|null                 $totalPlaces
     * @return SiteAllocationPerHallSummary
     */
    public function setTotalPlaces($totalPlaces)
    {
        $this->TotalPlaces = $totalPlaces;

        return $this;
    }

    /**
     * @return integer|null
     */
    public function getTotalPlaces()
    {
        return $this->TotalPlaces;
    }

}
