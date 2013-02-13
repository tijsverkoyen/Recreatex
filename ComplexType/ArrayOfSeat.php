<?php

namespace TijsVerkoyen\Recreatex\ComplexType;

/**
 *
 * @link https://github.com/opensoft/php-wsdl-proxy-generator WSDL parser and Proxy class generator on PHP
 * @author WSDL parser and Proxy class generator on PHP
 */
class ArrayOfSeat extends ComplexTypeAbstract
{
    const CLASS_NAME = 'ArrayOfSeat';

    /**

     * minOccurs = 0
     * maxOccurs = unbounded
     *
     * @var Seat[] $Seat
     */
    protected $Seat = array();

    /**
     * @param  Seat[]      $seat
     * @return ArrayOfSeat
     */
    public function setSeat(array $seat = array())
    {
        $this->Seat = $seat;

        return $this;
    }

    /**
     * @return Seat[]
     */
    public function getSeat()
    {
        return $this->Seat;
    }
}
