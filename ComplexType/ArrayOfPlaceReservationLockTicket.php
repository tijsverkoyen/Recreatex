<?php

namespace TijsVerkoyen\Recreatex\ComplexType;

/**
 *
 * @link https://github.com/opensoft/php-wsdl-proxy-generator WSDL parser and Proxy class generator on PHP
 * @author WSDL parser and Proxy class generator on PHP
 */
class ArrayOfPlaceReservationLockTicket extends ComplexTypeAbstract
{
    const CLASS_NAME = 'ArrayOfPlaceReservationLockTicket';

    /**

     * maxOccurs = unbounded     * @var array
     */
    protected $PlaceReservationLockTicket = array();

    /**
     * @param  array                             $placeReservationLockTicket
     * @return ArrayOfPlaceReservationLockTicket
     */
    public function setPlaceReservationLockTicket(array $placeReservationLockTicket = array())
    {
        $this->PlaceReservationLockTicket = $placeReservationLockTicket;

        return $this;
    }

    /**
     * @return array
     */
    public function getPlaceReservationLockTicket()
    {
        return $this->PlaceReservationLockTicket;
    }
}
