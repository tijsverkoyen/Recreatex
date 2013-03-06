<?php

namespace TijsVerkoyen\Recreatex\ComplexType;

/**
 * The includes that will be applied to the search query
 *
 * @link https://github.com/opensoft/php-wsdl-proxy-generator WSDL parser and Proxy class generator on PHP
 * @author WSDL parser and Proxy class generator on PHP
 */
class InfrastructureIncludes extends ComplexTypeAbstract
{
    const CLASS_NAME = 'InfrastructureIncludes';

    /**
     * Include related places.
     * minOccurs = 0
     * maxOccurs = 1
     *
     * @var boolean|null $IncludePlaces
     */
    protected $IncludePlaces;

    /**
     * Include Division info.
     * minOccurs = 0
     * maxOccurs = 1
     *
     * @var boolean|null $IncludeDivisionInfo
     */
    protected $IncludeDivisionInfo;

    /**
     * @param  boolean|null           $includePlaces
     * @return InfrastructureIncludes
     */
    public function setIncludePlaces($includePlaces)
    {
        $this->IncludePlaces = $includePlaces;

        return $this;
    }

    /**
     * @return boolean|null
     */
    public function getIncludePlaces()
    {
        return $this->IncludePlaces;
    }

    /**
     * @param  boolean|null           $includeDivisionInfo
     * @return InfrastructureIncludes
     */
    public function setIncludeDivisionInfo($includeDivisionInfo)
    {
        $this->IncludeDivisionInfo = $includeDivisionInfo;

        return $this;
    }

    /**
     * @return boolean|null
     */
    public function getIncludeDivisionInfo()
    {
        return $this->IncludeDivisionInfo;
    }

}
