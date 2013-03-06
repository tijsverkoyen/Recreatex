<?php

namespace TijsVerkoyen\Recreatex\ComplexType;

/**
 *
 * @link https://github.com/opensoft/php-wsdl-proxy-generator WSDL parser and Proxy class generator on PHP
 * @author WSDL parser and Proxy class generator on PHP
 */
class ArrayOfReservation extends ComplexTypeAbstract
{
    const CLASS_NAME = 'ArrayOfReservation';

    /**

     * minOccurs = 0
     * maxOccurs = unbounded
     *
     * @var Reservation[] $Reservation
     */
    protected $Reservation = array();

    /**
     * @param  Reservation[]      $reservation
     * @return ArrayOfReservation
     */
    public function setReservation(array $reservation = array())
    {
        $this->Reservation = $reservation;

        return $this;
    }

    /**
     * @return Reservation[]
     */
    public function getReservation()
    {
        return $this->Reservation;
    }

}
