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

     * minOccurs = 0
     * maxOccurs = 1
     *
     * @var ArrayOfSeatAllocation|null $SeatAllocations
     */
    protected $SeatAllocations;

    /**

     * minOccurs = 0
     * maxOccurs = 1
     *
     * @var ArrayOfSiteAllocation|null $SiteAllocations
     */
    protected $SiteAllocations;

    /**
     * @param  ArrayOfSeatAllocation|null        $seatAllocations
     * @return CultureEventReservationLockTicket
     */
    public function setSeatAllocations(ArrayOfSeatAllocation $seatAllocations = null)
    {
        $this->SeatAllocations = $seatAllocations;

        return $this;
    }

    /**
     * @return ArrayOfSeatAllocation|null
     */
    public function getSeatAllocations()
    {
        return $this->SeatAllocations;
    }

    /**
     * @param  ArrayOfSiteAllocation|null        $siteAllocations
     * @return CultureEventReservationLockTicket
     */
    public function setSiteAllocations(ArrayOfSiteAllocation $siteAllocations = null)
    {
        $this->SiteAllocations = $siteAllocations;

        return $this;
    }

    /**
     * @return ArrayOfSiteAllocation|null
     */
    public function getSiteAllocations()
    {
        return $this->SiteAllocations;
    }

}
