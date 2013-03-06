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
     * @var boolean
     */
    protected $IncludePlaces;

    /**
     * Include Division info.
     * @var boolean
     */
    protected $IncludeDivisionInfo;

    /**
     * @param  boolean[optional]      $includePlaces
     * @return InfrastructureIncludes
     */
    public function setIncludePlaces($includePlaces)
    {
        $this->IncludePlaces = $includePlaces;

        return $this;
    }

    /**
     * @return boolean
     */
    public function getIncludePlaces()
    {
        return $this->IncludePlaces;
    }

    /**
     * @param  boolean[optional]      $includeDivisionInfo
     * @return InfrastructureIncludes
     */
    public function setIncludeDivisionInfo($includeDivisionInfo)
    {
        $this->IncludeDivisionInfo = $includeDivisionInfo;

        return $this;
    }

    /**
     * @return boolean
     */
    public function getIncludeDivisionInfo()
    {
        return $this->IncludeDivisionInfo;
    }
}
