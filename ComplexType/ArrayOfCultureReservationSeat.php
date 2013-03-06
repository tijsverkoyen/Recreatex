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

     * minOccurs = 0
     * maxOccurs = unbounded
     *
     * @var CultureReservationSeat[] $CultureReservationSeat
     */
    protected $CultureReservationSeat = array();

    /**
     * @param  CultureReservationSeat[]      $cultureReservationSeat
     * @return ArrayOfCultureReservationSeat
     */
    public function setCultureReservationSeat(array $cultureReservationSeat = array())
    {
        $this->CultureReservationSeat = $cultureReservationSeat;

        return $this;
    }

    /**
     * @return CultureReservationSeat[]
     */
    public function getCultureReservationSeat()
    {
        return $this->CultureReservationSeat;
    }

}
