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

     * minOccurs = 0
     * maxOccurs = 1
     *
     * @var boolean|null $IncludeOrderLines
     */
    protected $IncludeOrderLines;

    /**

     * minOccurs = 0
     * maxOccurs = 1
     *
     * @var boolean|null $IncludeOrderLineComponents
     */
    protected $IncludeOrderLineComponents;

    /**

     * minOccurs = 0
     * maxOccurs = 1
     *
     * @var boolean|null $IncludePersonDetails
     */
    protected $IncludePersonDetails;

    /**
     * @param  boolean|null        $includeOrderLines
     * @return RentalOrderIncludes
     */
    public function setIncludeOrderLines($includeOrderLines)
    {
        $this->IncludeOrderLines = $includeOrderLines;

        return $this;
    }

    /**
     * @return boolean|null
     */
    public function getIncludeOrderLines()
    {
        return $this->IncludeOrderLines;
    }

    /**
     * @param  boolean|null        $includeOrderLineComponents
     * @return RentalOrderIncludes
     */
    public function setIncludeOrderLineComponents($includeOrderLineComponents)
    {
        $this->IncludeOrderLineComponents = $includeOrderLineComponents;

        return $this;
    }

    /**
     * @return boolean|null
     */
    public function getIncludeOrderLineComponents()
    {
        return $this->IncludeOrderLineComponents;
    }

    /**
     * @param  boolean|null        $includePersonDetails
     * @return RentalOrderIncludes
     */
    public function setIncludePersonDetails($includePersonDetails)
    {
        $this->IncludePersonDetails = $includePersonDetails;

        return $this;
    }

    /**
     * @return boolean|null
     */
    public function getIncludePersonDetails()
    {
        return $this->IncludePersonDetails;
    }

}
