<?php

namespace TijsVerkoyen\Recreatex\ComplexType;

/**
 *
 * @link https://github.com/opensoft/php-wsdl-proxy-generator WSDL parser and Proxy class generator on PHP
 * @author WSDL parser and Proxy class generator on PHP
 */
class SeatAllocationPerHallSummary extends ComplexTypeAbstract
{
    const CLASS_NAME = 'SeatAllocationPerHallSummary';

    /**
     * @var ArrayOfSeatAllocationPerBlockSummary
     */
    protected $BlockSummaries;

    /**
     * @var Hall
     */
    protected $Hall;

    /**
     * @param  ArrayOfSeatAllocationPerBlockSummary[optional] $blockSummaries
     * @return SeatAllocationPerHallSummary
     */
    public function setBlockSummaries(ArrayOfSeatAllocationPerBlockSummary $blockSummaries = null)
    {
        $this->BlockSummaries = $blockSummaries;

        return $this;
    }

    /**
     * @return ArrayOfSeatAllocationPerBlockSummary
     */
    public function getBlockSummaries()
    {
        return $this->BlockSummaries;
    }

    /**
     * @param  Hall[optional]               $hall
     * @return SeatAllocationPerHallSummary
     */
    public function setHall(Hall $hall = null)
    {
        $this->Hall = $hall;

        return $this;
    }

    /**
     * @return Hall
     */
    public function getHall()
    {
        return $this->Hall;
    }
}
