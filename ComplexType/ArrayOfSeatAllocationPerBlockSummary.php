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
     * @var array
     */
    protected $SeatAllocationPerBlockSummary = array();

    /**
     * @param  array                                $seatAllocationPerBlockSummary
     * @return ArrayOfSeatAllocationPerBlockSummary
     */
    public function setSeatAllocationPerBlockSummary(array $seatAllocationPerBlockSummary = array())
    {
        $this->SeatAllocationPerBlockSummary = $seatAllocationPerBlockSummary;

        return $this;
    }

    /**
     * @return array
     */
    public function getSeatAllocationPerBlockSummary()
    {
	    if(!is_array($this->SeatAllocationPerBlockSummary)) {
		    return array($this->SeatAllocationPerBlockSummary);
	    }
	    return $this->SeatAllocationPerBlockSummary;
    }
}
