<?php

namespace TijsVerkoyen\Recreatex\ComplexType;

/**
 *
 * @link https://github.com/opensoft/php-wsdl-proxy-generator WSDL parser and Proxy class generator on PHP
 * @author WSDL parser and Proxy class generator on PHP
 */
class ArrayOfSeatRow extends ComplexTypeAbstract
{
    const CLASS_NAME = 'ArrayOfSeatRow';

    /**
     * @var array $SeatRow
     */
    protected $SeatRow = array();

    /**
     * @param  array          $seatRow
     * @return ArrayOfSeatRow
     */
    public function setSeatRow(array $seatRow = array())
    {
        $this->SeatRow = $seatRow;

        return $this;
    }

    /**
     * @return array
     */
    public function getSeatRow()
    {
        return $this->SeatRow;
    }
}
