<?php

namespace TijsVerkoyen\Recreatex\ComplexType;

/**
 *
 * @link https://github.com/opensoft/php-wsdl-proxy-generator WSDL parser and Proxy class generator on PHP
 * @author WSDL parser and Proxy class generator on PHP
 */
class ArrayOfPriceGroup extends ComplexTypeAbstract
{
    const CLASS_NAME = 'ArrayOfPriceGroup';

    /**

     * minOccurs = 0
     * maxOccurs = unbounded
     *
     * @var PriceGroup[] $PriceGroup
     */
    protected $PriceGroup = array();

    /**
     * @param  PriceGroup[]      $priceGroup
     * @return ArrayOfPriceGroup
     */
    public function setPriceGroup(array $priceGroup = array())
    {
        $this->PriceGroup = $priceGroup;

        return $this;
    }

    /**
     * @return PriceGroup[]
     */
    public function getPriceGroup()
    {
        return $this->PriceGroup;
    }
}
