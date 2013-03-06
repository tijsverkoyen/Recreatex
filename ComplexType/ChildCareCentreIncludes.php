<?php

namespace TijsVerkoyen\Recreatex\ComplexType;

/**
 *
 * @link https://github.com/opensoft/php-wsdl-proxy-generator WSDL parser and Proxy class generator on PHP
 * @author WSDL parser and Proxy class generator on PHP
 */
class ChildCareCentreIncludes extends ComplexTypeAbstract
{
    const CLASS_NAME = 'ChildCareCentreIncludes';

    /**

     * minOccurs = 0
     * maxOccurs = 1
     *
     * @var boolean|null $Locations
     */
    protected $Locations;

    /**
     * @param  boolean|null            $locations
     * @return ChildCareCentreIncludes
     */
    public function setLocations($locations)
    {
        $this->Locations = $locations;

        return $this;
    }

    /**
     * @return boolean|null
     */
    public function getLocations()
    {
        return $this->Locations;
    }

}
