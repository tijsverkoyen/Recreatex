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

     * maxOccurs = unbounded     * @var array
     */
    protected $ReservationActivity = array();

    /**
     * @param  array                      $reservationActivity
     * @return ArrayOfReservationActivity
     */
    public function setReservationActivity(array $reservationActivity = array())
    {
        $this->ReservationActivity = $reservationActivity;

        return $this;
    }

    /**
     * @return array
     */
    public function getReservationActivity()
    {
        return $this->ReservationActivity;
    }
}
