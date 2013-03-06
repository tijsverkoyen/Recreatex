<?php

namespace TijsVerkoyen\Recreatex\ComplexType;

/**
 *
 * @link https://github.com/opensoft/php-wsdl-proxy-generator WSDL parser and Proxy class generator on PHP
 * @author WSDL parser and Proxy class generator on PHP
 */
class SeatAllocationPerBlockSummary extends ComplexTypeAbstract
{
    const CLASS_NAME = 'SeatAllocationPerBlockSummary';

    /**
     * @var Seat
     */
    protected $Block;

    /**
     * @param  SeatBlock[optional]           $block
     * @return SeatAllocationPerBlockSummary
     */
    public function setBlock(SeatBlock $block = null)
    {
        $this->Block = $block;

        return $this;
    }

    /**
     * @return SeatBlock
     */
    public function getBlock()
    {
        return $this->Block;
    }
}
