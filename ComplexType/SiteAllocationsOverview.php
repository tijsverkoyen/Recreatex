<?php

namespace TijsVerkoyen\Recreatex\ComplexType;

/**
 *
 * @link https://github.com/opensoft/php-wsdl-proxy-generator WSDL parser and Proxy class generator on PHP
 * @author WSDL parser and Proxy class generator on PHP
 */
class SiteAllocationsOverview extends ComplexTypeAbstract
{
    const CLASS_NAME = 'SiteAllocationsOverview';

    /**
     * @var ArrayOfSiteAllocation
     */
    protected $Allocations;

    /**
     * @var SiteAllocationPerHallSummary
     */
    protected $Summary;

    /**
     * @param  ArrayOfSiteAllocation[optional] $allocations
     * @return SiteAllocationsOverview
     */
    public function setAllocations(ArrayOfSiteAllocation $allocations = null)
    {
        $this->Allocations = $allocations;

        return $this;
    }

    /**
     * @return ArrayOfSiteAllocation
     */
    public function getAllocations()
    {
        return $this->Allocations;
    }

    /**
     * @param  SiteAllocationPerHallSummary[optional] $summary
     * @return SiteAllocationsOverview
     */
    public function setSummary(SiteAllocationPerHallSummary $summary = null)
    {
        $this->Summary = $summary;

        return $this;
    }

    /**
     * @return SiteAllocationPerHallSummary
     */
    public function getSummary()
    {
        return $this->Summary;
    }
}
