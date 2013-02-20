<?php

namespace TijsVerkoyen\Recreatex\ComplexType;

/**
 *
 * @link https://github.com/opensoft/php-wsdl-proxy-generator WSDL parser and Proxy class generator on PHP
 * @author WSDL parser and Proxy class generator on PHP
 */
class SeatAllocationsOverview extends ComplexTypeAbstract
{
    const CLASS_NAME = 'SeatAllocationsOverview';

    /**
     * @var ArrayOfSeatAllocation
     */
    protected $Allocations;

    /**
     * @var Seat
     */
    protected $Summary;

    /**
     * @param  ArrayOfSeatAllocation|null $allocations
     * @return SeatAllocationsOverview
     */
    public function setAllocations(ArrayOfSeatAllocation $allocations = null)
    {
        $this->Allocations = $allocations;

        return $this;
    }

    /**
     * @return ArrayOfSeatAllocation|null
     */
    public function getAllocations()
    {
        return $this->Allocations;
    }

    /**
     * @param  SeatAllocationPerHallSummary|null $summary
     * @return SeatAllocationsOverview
     */
    public function setSummary(SeatAllocationPerHallSummary $summary = null)
    {
        $this->Summary = $summary;

        return $this;
    }

    /**
     * @return SeatAllocationPerHallSummary|null
     */
    public function getSummary()
    {
        return $this->Summary;
    }
}
