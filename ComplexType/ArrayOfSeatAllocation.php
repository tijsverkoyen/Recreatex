<?php

namespace TijsVerkoyen\Recreatex\ComplexType;

use TijsVerkoyen\Recreatex\SimpleType;

/**
 *
 * @link https://github.com/opensoft/php-wsdl-proxy-generator WSDL parser and Proxy class generator on PHP
 * @author WSDL parser and Proxy class generator on PHP
 */
class ArrayOfSeatAllocation extends ComplexTypeAbstract
{
    const CLASS_NAME = 'ArrayOfSeatAllocation';

    /**

     * minOccurs = 0
     * maxOccurs = unbounded
     *
     * @var SeatAllocation[] $SeatAllocation
     */
    protected $SeatAllocation = array();


    /**
     * @param SeatAllocation[] $seatAllocation
     * @return ArrayOfSeatAllocation
     */
    public function setSeatAllocation(array $seatAllocation = array())
    {
        $this->SeatAllocation = $seatAllocation;

        return $this;
    }

    /**
     * @return SeatAllocation[]
     */
    public function getSeatAllocation()
    {
        return $this->SeatAllocation;
    }


}

