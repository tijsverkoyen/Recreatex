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
     * @var SimpleTypeGuid
     */
    protected $EventId;

    /**
     * @var integer
     */
    protected $ReservedPlaces;

    /**
     * @var integer
     */
    protected $TotalPlaces;

    /**
     * @param  SimpleType\Guid[optional]    $eventId
     * @return SiteAllocationPerHallSummary
     */
    public function setEventId(SimpleType\Guid $eventId = null)
    {
        $this->EventId = $eventId;

        return $this;
    }

    /**
     * @return SimpleType\Guid|null
     */
    public function getEventId()
    {
        return $this->EventId;
    }

    /**
     * @param  integer[optional]            $reservedPlaces
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
     * @param  integer[optional]            $totalPlaces
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
