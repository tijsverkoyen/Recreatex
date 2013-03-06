<?php

namespace TijsVerkoyen\Recreatex\ComplexType;

/**
 *
 * @link https://github.com/opensoft/php-wsdl-proxy-generator WSDL parser and Proxy class generator on PHP
 * @author WSDL parser and Proxy class generator on PHP
 */
class ArrayOfReservationViewPlace extends ComplexTypeAbstract
{
    const CLASS_NAME = 'ArrayOfReservationViewPlace';

    /**

     * minOccurs = 0
     * maxOccurs = unbounded
     *
     * @var ReservationViewPlace[] $ReservationViewPlace
     */
    protected $ReservationViewPlace = array();

    /**
     * @param  ReservationViewPlace[]      $reservationViewPlace
     * @return ArrayOfReservationViewPlace
     */
    public function setReservationViewPlace(array $reservationViewPlace = array())
    {
        $this->ReservationViewPlace = $reservationViewPlace;

        return $this;
    }

    /**
     * @return ReservationViewPlace[]
     */
    public function getReservationViewPlace()
    {
        return $this->ReservationViewPlace;
    }

}
