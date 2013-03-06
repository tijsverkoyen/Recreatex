<?php

namespace TijsVerkoyen\Recreatex\ComplexType;

/**
 *
 * @link https://github.com/opensoft/php-wsdl-proxy-generator WSDL parser and Proxy class generator on PHP
 * @author WSDL parser and Proxy class generator on PHP
 */
class Price extends ComplexTypeAbstract
{
    const CLASS_NAME = 'Price';

    /**
     * @var float
     */
    protected $Amount;

    /**
     * @var PriceGroup[optional] $Group
     */
    protected $Group;

    /**
     * @param  float[optional] $amount
     * @return Price
     */
    public function setAmount($amount)
    {
        $this->Amount = $amount;

        return $this;
    }

    /**
     * @return float
     */
    public function getAmount()
    {
        return $this->Amount;
    }

    /**
     * @param  PriceGroup[optional] $group
     * @return Price
     */
    public function setGroup(PriceGroup $group = null)
    {
        $this->Group = $group;

        return $this;
    }

    /**
     * @return PriceGroup
     */
    public function getGroup()
    {
        return $this->Group;
    }
}
