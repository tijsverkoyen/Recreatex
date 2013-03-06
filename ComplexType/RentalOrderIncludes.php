<?php

namespace TijsVerkoyen\Recreatex\ComplexType;

/**
 *
 * @link https://github.com/opensoft/php-wsdl-proxy-generator WSDL parser and Proxy class generator on PHP
 * @author WSDL parser and Proxy class generator on PHP
 */
class RentalOrderIncludes extends ComplexTypeAbstract
{
    const CLASS_NAME = 'RentalOrderIncludes';

    /**
     * @var boolean
     */
    protected $IncludeOrderLines;

    /**
     * @var boolean
     */
    protected $IncludeOrderLineComponents;

    /**
     * @var boolean
     */
    protected $IncludePersonDetails;

    /**
     * @param  boolean[optional]   $includeOrderLines
     * @return RentalOrderIncludes
     */
    public function setIncludeOrderLines($includeOrderLines)
    {
        $this->IncludeOrderLines = $includeOrderLines;

        return $this;
    }

    /**
     * @return boolean
     */
    public function getIncludeOrderLines()
    {
        return $this->IncludeOrderLines;
    }

    /**
     * @param  boolean[optional]   $includeOrderLineComponents
     * @return RentalOrderIncludes
     */
    public function setIncludeOrderLineComponents($includeOrderLineComponents)
    {
        $this->IncludeOrderLineComponents = $includeOrderLineComponents;

        return $this;
    }

    /**
     * @return boolean
     */
    public function getIncludeOrderLineComponents()
    {
        return $this->IncludeOrderLineComponents;
    }

    /**
     * @param  boolean[optional]   $includePersonDetails
     * @return RentalOrderIncludes
     */
    public function setIncludePersonDetails($includePersonDetails)
    {
        $this->IncludePersonDetails = $includePersonDetails;

        return $this;
    }

    /**
     * @return boolean
     */
    public function getIncludePersonDetails()
    {
        return $this->IncludePersonDetails;
    }
}
