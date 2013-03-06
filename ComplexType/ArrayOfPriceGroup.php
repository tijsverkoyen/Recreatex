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
     * @var array
     */
    protected $PriceGroup = array();

    /**
     * @param  array             $priceGroup
     * @return ArrayOfPriceGroup
     */
    public function setPriceGroup(array $priceGroup = array())
    {
        $this->PriceGroup = $priceGroup;

        return $this;
    }

    /**
     * @return array
     */
    public function getPriceGroup()
    {
        if (!is_array($this->PriceGroup)) {
            return array($this->PriceGroup);
        }

        return $this->PriceGroup;
    }
}
