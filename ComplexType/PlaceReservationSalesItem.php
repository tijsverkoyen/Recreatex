<?php

namespace TijsVerkoyen\Recreatex\ComplexType;

use TijsVerkoyen\Recreatex\SimpleType;

/**
 *
 * @link https://github.com/opensoft/php-wsdl-proxy-generator WSDL parser and Proxy class generator on PHP
 * @author WSDL parser and Proxy class generator on PHP
 */
class PlaceReservationSalesItem extends ComplexTypeAbstract
{
    const CLASS_NAME = 'PlaceReservationSalesItem';

    /**

     * minOccurs = 0
     * maxOccurs = 1
     *
     * @var SimpleType\guid|null $ReservationId
     */
    protected $ReservationId;

    /**
     * @param  SimpleType\guid|null      $reservationId
     * @return PlaceReservationSalesItem
     */
    public function setReservationId(SimpleType\guid $reservationId = null)
    {
        $this->ReservationId = $reservationId;

        return $this;
    }

    /**
     * @return SimpleType\guid|null
     */
    public function getReservationId()
    {
        return $this->ReservationId;
    }

}
