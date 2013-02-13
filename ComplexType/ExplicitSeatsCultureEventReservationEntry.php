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
     * @var SimpleType\guid $SeatId
     */
    protected $SeatId;


    /**
     * @param SimpleType\guid $seatId
     * @return ExplicitSeatsCultureEventReservationEntry
     */
    public function setSeatId(SimpleType\guid $seatId)
    {
        $this->SeatId = $seatId;

        return $this;
    }

    /**
     * @return SimpleType\guid
     */
    public function getSeatId()
    {
        return $this->SeatId;
    }


}

