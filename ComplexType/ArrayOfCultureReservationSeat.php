<?php

namespace TijsVerkoyen\Recreatex\ComplexType;

/**
 *
 * @link https://github.com/opensoft/php-wsdl-proxy-generator WSDL parser and Proxy class generator on PHP
 * @author WSDL parser and Proxy class generator on PHP
 */
class ArrayOfCultureReservationSeat extends ComplexTypeAbstract
{
    const CLASS_NAME = 'ArrayOfCultureReservationSeat';

    /**
     * @var array
     */
    protected $CultureReservationSeat = array();

    /**
     * @param  array                         $cultureReservationSeat
     * @return ArrayOfCultureReservationSeat
     */
    public function setCultureReservationSeat(array $cultureReservationSeat = array())
    {
        $this->CultureReservationSeat = $cultureReservationSeat;

        return $this;
    }

    /**
     * @return array
     */
    public function getCultureReservationSeat()
    {
        return $this->CultureReservationSeat;
    }
}
