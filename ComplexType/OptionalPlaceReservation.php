<?php

namespace TijsVerkoyen\Recreatex\ComplexType;

/**
 *
 * @link https://github.com/opensoft/php-wsdl-proxy-generator WSDL parser and Proxy class generator on PHP
 * @author WSDL parser and Proxy class generator on PHP
 */
class OptionalPlaceReservation extends ComplexTypeAbstract
{
    const CLASS_NAME = 'OptionalPlaceReservation';

    /**
     * @var float
     */
    protected $ReservationUnitPrice;

    /**
     * @param  float[optional]          $reservationUnitPrice
     * @return OptionalPlaceReservation
     */
    public function setReservationUnitPrice($reservationUnitPrice)
    {
        $this->ReservationUnitPrice = $reservationUnitPrice;

        return $this;
    }

    /**
     * @return float|null
     */
    public function getReservationUnitPrice()
    {
        return $this->ReservationUnitPrice;
    }
}