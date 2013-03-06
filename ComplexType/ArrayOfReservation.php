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

     * maxOccurs = unbounded     * @var array
     */
    protected $Reservation = array();

    /**
     * @param  array              $reservation
     * @return ArrayOfReservation
     */
    public function setReservation(array $reservation = array())
    {
        $this->Reservation = $reservation;

        return $this;
    }

    /**
     * @return array
     */
    public function getReservation()
    {
        return $this->Reservation;
    }
}
