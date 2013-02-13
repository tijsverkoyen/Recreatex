<?php

namespace TijsVerkoyen\Recreatex\ComplexType;

/**
 *
 * @link https://github.com/opensoft/php-wsdl-proxy-generator WSDL parser and Proxy class generator on PHP
 * @author WSDL parser and Proxy class generator on PHP
 */
class ArrayOfSeatBlock extends ComplexTypeAbstract
{
    const CLASS_NAME = 'ArrayOfSeatBlock';

    /**
     * @var array $SeatBlock
     */
    protected $SeatBlock = array();

    /**
     * @param  array            $seatBlock
     * @return ArrayOfSeatBlock
     */
    public function setSeatBlock(array $seatBlock = array())
    {
        $this->SeatBlock = $seatBlock;

        return $this;
    }

    /**
     * @return array
     */
    public function getSeatBlock()
    {
        return $this->SeatBlock;
    }
}
