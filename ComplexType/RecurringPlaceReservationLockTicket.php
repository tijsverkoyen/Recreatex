<?php

namespace TijsVerkoyen\Recreatex\ComplexType;

/**
 *
 * @link https://github.com/opensoft/php-wsdl-proxy-generator WSDL parser and Proxy class generator on PHP
 * @author WSDL parser and Proxy class generator on PHP
 */
class RecurringPlaceReservationLockTicket extends ComplexTypeAbstract
{
    const CLASS_NAME = 'RecurringPlaceReservationLockTicket';

    /**

     * @var ArrayOfPlaceReservationLockTicket
     */
    protected $PlaceReservationLocks;

    /**
     * @param  ArrayOfPlaceReservationLockTicket[optional] $placeReservationLocks
     * @return RecurringPlaceReservationLockTicket
     */
    public function setPlaceReservationLocks(ArrayOfPlaceReservationLockTicket $placeReservationLocks = null)
    {
        $this->PlaceReservationLocks = $placeReservationLocks;

        return $this;
    }

    /**
     * @return ArrayOfPlaceReservationLockTicket
     */
    public function getPlaceReservationLocks()
    {
        return $this->PlaceReservationLocks;
    }
}
