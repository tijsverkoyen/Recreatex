<?php

namespace TijsVerkoyen\Recreatex\ComplexType;

/**
 *
 * @link https://github.com/opensoft/php-wsdl-proxy-generator WSDL parser and Proxy class generator on PHP
 * @author WSDL parser and Proxy class generator on PHP
 */
class SeatAllocationSummary extends ComplexTypeAbstract
{
    const CLASS_NAME = 'SeatAllocationSummary';

    /**
     * @var Seat
     */
    protected $Count;

    /**
     * @param  SeatAllocationCount|null $count
     * @return SeatAllocationSummary
     */
    public function setCount(SeatAllocationCount $count = null)
    {
        $this->Count = $count;

        return $this;
    }

    /**
     * @return SeatAllocationCount|null
     */
    public function getCount()
    {
        return $this->Count;
    }
}
