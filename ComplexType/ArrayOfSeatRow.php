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

     * minOccurs = 0
     * maxOccurs = unbounded
     *
     * @var SeatRow[] $SeatRow
     */
    protected $SeatRow = array();

    /**
     * @param  SeatRow[]      $seatRow
     * @return ArrayOfSeatRow
     */
    public function setSeatRow(array $seatRow = array())
    {
        $this->SeatRow = $seatRow;

        return $this;
    }

    /**
     * @return SeatRow[]
     */
    public function getSeatRow()
    {
        return $this->SeatRow;
    }

}
