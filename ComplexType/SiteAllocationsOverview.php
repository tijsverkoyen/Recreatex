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

     * minOccurs = 0
     * maxOccurs = 1
     *
     * @var ArrayOfSiteAllocation|null $Allocations
     */
    protected $Allocations;

    /**

     * minOccurs = 0
     * maxOccurs = 1
     *
     * @var SiteAllocationPerHallSummary|null $Summary
     */
    protected $Summary;

    /**
     * @param  ArrayOfSiteAllocation|null $allocations
     * @return SiteAllocationsOverview
     */
    public function setAllocations(ArrayOfSiteAllocation $allocations = null)
    {
        $this->Allocations = $allocations;

        return $this;
    }

    /**
     * @return ArrayOfSiteAllocation|null
     */
    public function getAllocations()
    {
        return $this->Allocations;
    }

    /**
     * @param  SiteAllocationPerHallSummary|null $summary
     * @return SiteAllocationsOverview
     */
    public function setSummary(SiteAllocationPerHallSummary $summary = null)
    {
        $this->Summary = $summary;

        return $this;
    }

    /**
     * @return SiteAllocationPerHallSummary|null
     */
    public function getSummary()
    {
        return $this->Summary;
    }

}
