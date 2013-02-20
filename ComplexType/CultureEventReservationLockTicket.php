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
}
