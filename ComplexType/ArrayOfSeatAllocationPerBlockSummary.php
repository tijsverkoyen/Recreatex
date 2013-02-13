<?php

namespace TijsVerkoyen\Recreatex\ComplexType;

/**
 *
 * @link https://github.com/opensoft/php-wsdl-proxy-generator WSDL parser and Proxy class generator on PHP
 * @author WSDL parser and Proxy class generator on PHP
 */
class ArrayOfSeatAllocationPerBlockSummary extends ComplexTypeAbstract
{
    const CLASS_NAME = 'ArrayOfSeatAllocationPerBlockSummary';

    /**

     * minOccurs = 0
     * maxOccurs = unbounded
     *
     * @var SeatAllocationPerBlockSummary[] $SeatAllocationPerBlockSummary
     */
    protected $SeatAllocationPerBlockSummary = array();

    /**
     * @param  SeatAllocationPerBlockSummary[]      $seatAllocationPerBlockSummary
     * @return ArrayOfSeatAllocationPerBlockSummary
     */
    public function setSeatAllocationPerBlockSummary(array $seatAllocationPerBlockSummary = array())
    {
        $this->SeatAllocationPerBlockSummary = $seatAllocationPerBlockSummary;

        return $this;
    }

    /**
     * @return SeatAllocationPerBlockSummary[]
     */
    public function getSeatAllocationPerBlockSummary()
    {
        return $this->SeatAllocationPerBlockSummary;
    }
}
