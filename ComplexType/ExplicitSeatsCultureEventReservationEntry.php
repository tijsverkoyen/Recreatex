<?php

namespace TijsVerkoyen\Recreatex\ComplexType;

use TijsVerkoyen\Recreatex\SimpleType;

/**
 * Witch seat do you want to reserve for this Culture event
 *
 * @link https://github.com/opensoft/php-wsdl-proxy-generator WSDL parser and Proxy class generator on PHP
 * @author WSDL parser and Proxy class generator on PHP
 */
class ExplicitSeatsCultureEventReservationEntry extends ComplexTypeAbstract
{
    const CLASS_NAME = 'ExplicitSeatsCultureEventReservationEntry';

    /**

     * minOccurs = 1
     * maxOccurs = 1
     *
     * @var SimpleType\Guid $SeatId
     */
    protected $SeatId;

    /**
     * @param  SimpleType\Guid                           $seatId
     * @return ExplicitSeatsCultureEventReservationEntry
     */
    public function setSeatId(SimpleType\Guid $seatId)
    {
        $this->SeatId = $seatId;

        return $this;
    }

    /**
     * @return SimpleType\Guid
     */
    public function getSeatId()
    {
        return $this->SeatId;
    }
}
