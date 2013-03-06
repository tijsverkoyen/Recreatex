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

     * minOccurs = 0
     * maxOccurs = 1
     *
     * @var ArrayOfPlaceReservationLockTicket|null $PlaceReservationLocks
     */
    protected $PlaceReservationLocks;

    /**
     * @param  ArrayOfPlaceReservationLockTicket|null $placeReservationLocks
     * @return RecurringPlaceReservationLockTicket
     */
    public function setPlaceReservationLocks(ArrayOfPlaceReservationLockTicket $placeReservationLocks = null)
    {
        $this->PlaceReservationLocks = $placeReservationLocks;

        return $this;
    }

    /**
     * @return ArrayOfPlaceReservationLockTicket|null
     */
    public function getPlaceReservationLocks()
    {
        return $this->PlaceReservationLocks;
    }

}
