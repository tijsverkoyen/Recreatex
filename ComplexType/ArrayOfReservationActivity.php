<?php

namespace TijsVerkoyen\Recreatex\ComplexType;

/**
 *
 * @link https://github.com/opensoft/php-wsdl-proxy-generator WSDL parser and Proxy class generator on PHP
 * @author WSDL parser and Proxy class generator on PHP
 */
class ArrayOfReservationActivity extends ComplexTypeAbstract
{
    const CLASS_NAME = 'ArrayOfReservationActivity';

    /**

     * minOccurs = 0
     * maxOccurs = unbounded
     *
     * @var ReservationActivity[] $ReservationActivity
     */
    protected $ReservationActivity = array();

    /**
     * @param  ReservationActivity[]      $reservationActivity
     * @return ArrayOfReservationActivity
     */
    public function setReservationActivity(array $reservationActivity = array())
    {
        $this->ReservationActivity = $reservationActivity;

        return $this;
    }

    /**
     * @return ReservationActivity[]
     */
    public function getReservationActivity()
    {
        return $this->ReservationActivity;
    }

}
