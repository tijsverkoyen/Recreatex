<?php

namespace TijsVerkoyen\Recreatex\ComplexType;

/**
 *
 * @link https://github.com/opensoft/php-wsdl-proxy-generator WSDL parser and Proxy class generator on PHP
 * @author WSDL parser and Proxy class generator on PHP
 */
class ArrayOfSiteAllocation extends ComplexTypeAbstract
{
    const CLASS_NAME = 'ArrayOfSiteAllocation';

    /**

     * minOccurs = 0
     * maxOccurs = unbounded
     *
     * @var SiteAllocation[] $SiteAllocation
     */
    protected $SiteAllocation = array();

    /**
     * @param  SiteAllocation[]      $siteAllocation
     * @return ArrayOfSiteAllocation
     */
    public function setSiteAllocation(array $siteAllocation = array())
    {
        $this->SiteAllocation = $siteAllocation;

        return $this;
    }

    /**
     * @return SiteAllocation[]
     */
    public function getSiteAllocation()
    {
        return $this->SiteAllocation;
    }

}
