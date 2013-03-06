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
     * @var SimpleTypeGuid
     */
    protected $ReservationId;

    /**
     * @param  SimpleType\Guid[optional] $reservationId
     * @return PlaceReservationSalesItem
     */
    public function setReservationId(SimpleType\Guid $reservationId = null)
    {
        $this->ReservationId = $reservationId;

        return $this;
    }

    /**
     * @return SimpleType\Guid
     */
    public function getReservationId()
    {
        return $this->ReservationId;
    }
}
