<?php

namespace TijsVerkoyen\Recreatex\ComplexType;

/**
 *
 * @link https://github.com/opensoft/php-wsdl-proxy-generator WSDL parser and Proxy class generator on PHP
 * @author WSDL parser and Proxy class generator on PHP
 */
class ArrayOfReservationView extends ComplexTypeAbstract
{
    const CLASS_NAME = 'ArrayOfReservationView';

    /**

     * minOccurs = 0
     * maxOccurs = unbounded
     *
     * @var ReservationView[] $ReservationView
     */
    protected $ReservationView = array();

    /**
     * @param  ReservationView[]      $reservationView
     * @return ArrayOfReservationView
     */
    public function setReservationView(array $reservationView = array())
    {
        $this->ReservationView = $reservationView;

        return $this;
    }

    /**
     * @return ReservationView[]
     */
    public function getReservationView()
    {
        return $this->ReservationView;
    }

}
