<?php

namespace TijsVerkoyen\Recreatex\ComplexType;

/**
 *
 * @link https://github.com/opensoft/php-wsdl-proxy-generator WSDL parser and Proxy class generator on PHP
 * @author WSDL parser and Proxy class generator on PHP
 */
class ArrayOfSeatAllocation extends ComplexTypeAbstract
{
    const CLASS_NAME = 'ArrayOfSeatAllocation';

    /**
     * @var array
     */
    protected $SeatAllocation = array();

    /**
     * @param  array                 $seatAllocation
     * @return ArrayOfSeatAllocation
     */
    public function setSeatAllocation(array $seatAllocation = array())
    {
        $this->SeatAllocation = $seatAllocation;

        return $this;
    }

    /**
     * @return array
     */
    public function getSeatAllocation()
    {
	    if(!is_array($this->SeatAllocation)) {
		    return array($this->SeatAllocation);
	    }
	    return $this->SeatAllocation;
    }
}
