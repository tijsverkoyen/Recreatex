<?php

namespace TijsVerkoyen\Recreatex\ComplexType;

/**
 *
 * @link https://github.com/opensoft/php-wsdl-proxy-generator WSDL parser and Proxy class generator on PHP
 * @author WSDL parser and Proxy class generator on PHP
 */
class CultureEventReservationLockTicket extends ComplexTypeAbstract
{
    const CLASS_NAME = 'CultureEventReservationLockTicket';

    /**
     * @var ArrayOfSeatAllocation
     */
    protected $SeatAllocations;

    /**
     * @var ArrayOfSiteAllocation
     */
    protected $SiteAllocations;

    /**
     * @param  ArrayOfSeatAllocation[optional]   $seatAllocations
     * @return CultureEventReservationLockTicket
     */
    public function setSeatAllocations(ArrayOfSeatAllocation $seatAllocations = null)
    {
        $this->SeatAllocations = $seatAllocations;

        return $this;
    }

    /**
     * @return ArrayOfSeatAllocation
     */
    public function getSeatAllocations()
    {
        return $this->SeatAllocations;
    }

    /**
     * @param  ArrayOfSiteAllocation[optional]   $siteAllocations
     * @return CultureEventReservationLockTicket
     */
    public function setSiteAllocations(ArrayOfSiteAllocation $siteAllocations = null)
    {
        $this->SiteAllocations = $siteAllocations;

        return $this;
    }

    /**
     * @return ArrayOfSiteAllocation
     */
    public function getSiteAllocations()
    {
        return $this->SiteAllocations;
    }
}
