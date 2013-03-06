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
     * @var array
     */
    protected $Seat = array();

    /**
     * @param  array       $seat
     * @return ArrayOfSeat
     */
    public function setSeat(array $seat = array())
    {
        $this->Seat = $seat;

        return $this;
    }

    /**
     * @return array
     */
    public function getSeat()
    {
	    if(!is_array($this->Seat)) {
		    return array($this->Seat);
	    }
	    return $this->Seat;
    }
}
